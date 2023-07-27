<?php

namespace App\Services;

use App\Contracts\ConfirmationContract;
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
     * @param ConfirmationContract $confirmation
     * @return FunctionResult
     */
    public function update(int $id, array $data, ConfirmationContract $confirmation)
    {
        if ($confirmation->passed()) {
            $setting = Setting::findOrFail($id); // TODO переделать через репозиторий
            $setting->value = $data['value'];
            $setting->save();

            return Result::success(['need_confirm' => false]);
        } else {
            $user = Auth::user();
            $confirmation_code = $confirmation->create();
            $user->notify(new SettingChangeConfirmNotification($confirmation_code));

            return Result::success(['need_confirm' => true]);
        }

    }

    /**
     * @param array $data
     * @param ConfirmationContract $confirmation
     * @return FunctionResult
     */
    public function confirm(array $data, ConfirmationContract $confirmation)
    {
        $data->validated();

        if ($confirmation->tryPass($data['code'])) {
            return Result::success();
        } else {
            return Result::error('Неверный либо просроченный код');
        }

    }

}
