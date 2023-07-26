<?php

namespace App\Confirmations;


use App\Contracts\ConfirmationContract;
use Illuminate\Support\Facades\Auth;
use App\Models\Confirmation;

class SettingsChangeConfirmation implements ConfirmationContract
{

    /**
     * @return void
     */
    public function __construct()
    {
        //
    }

    public static function create(): int
    {
        $confirmation_code = mt_rand(1000, 9999);;

        $confirmation = new Confirmation();
        $confirmation->user_id = Auth::user()->id;
        $confirmation->code = $confirmation_code;
        $confirmation->passed = false;
        $confirmation->save();

        return $confirmation_code;
    }

    public static function passed(): bool
    {
        $last_confirm_try = Confirmation::where('user_id', Auth::user()->id)
                                            ->orderBy('created_at')->first();

        return (bool) $last_confirm_try->passed;
    }

    public static function tryPass(int $code): bool
    {
        $last_confirm_try = Confirmation::where('user_id', Auth::user()->id)
            ->orderBy('created_at')->first();

        if ((int) $last_confirm_try->code === $code) {
            $last_confirm_try->passed = true;
            $last_confirm_try->save();

            return true;
        } else {
            return false;
        }
    }
}
