<?php

namespace App\Http\Controllers\Api\Dashboard;

use App\Confirmations\SettingsChangeConfirmation;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\UpdateSettingConfirmRequest;
use App\Http\Requests\Api\UpdateSettingRequest;
use App\Services\UserSettings;
use Illuminate\Http\Request;

class ConfirmationsController extends Controller
{

    /**
     * @var UserSettings
     */
    protected $settings;

    public function __construct(UserSettings $settings)
    {
        $this->settings = $settings;
    }

    /**
     * @param  UpdateSettingConfirmRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function confirm(UpdateSettingConfirmRequest $request, $id)
    {
        $confirmation = new SettingsChangeConfirmation();
        $update_result = $this->settings->confirm($request->validated(), $confirmation);

        return response()->json([
            'status' => $update_result->success,
            'data' => $update_result->returnValue
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
