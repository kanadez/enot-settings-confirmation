<?php

namespace App\Services;

use App\Confirmations\SettingsChangeConfirmation;
use App\Http\Requests\Api\UpdateSettingRequest;
use App\Models\Setting;
use App\Notifications\SettingChangeConfirmNotification;
use Illuminate\Support\Facades\Auth;
use App\Services\FunctionResult as Result;

class UserSettings
{

    public function __construct()
    {

    }

    /**
     * @return FunctionResult
     */
    public function all(): Result
    {
        $settings = Setting::where('user_id', Auth::user()->id)->get(); // TODO переделать через репозиторий

        return Result::success($settings);
    }

    /**
     * @param int $id
     * @return FunctionResult
     */
    public function edit(int $id)
    {
        $setting = Setting::findOrFail($id); // TODO переделать через репозиторий

        return Result::success($setting);
    }

    /**
     * @param int $id
     * @param array $data
     * @return FunctionResult
     */
    public function update(int $id, array $data)
    {
        $user = Auth::user();

        if (SettingsChangeConfirmation::passed()) {
            $setting = Setting::findOrFail($id); // TODO переделать через репозиторий
            $setting->value = $data['value'];
            $setting->save();

            return Result::success(['need_confirm' => false]);
        } else {
            $confirmation_code = SettingsChangeConfirmation::create();
            $user->notify(new SettingChangeConfirmNotification($confirmation_code));

            return Result::success(['need_confirm' => true]);
        }

    }

    /**
     * @param array $data
     * @return FunctionResult
     */
    public function confirm(array $data)
    {
        $data->validated();

        if (SettingsChangeConfirmation::tryPass($data['code'])) {
            return Result::success();
        } else {
            return Result::error('Неверный код');
        }

    }

}
