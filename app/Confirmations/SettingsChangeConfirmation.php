<?php

namespace App\Confirmations;


use App\Contracts\ConfirmationContract;
use Illuminate\Support\Facades\Auth;
use App\Models\Confirmation;
use Carbon\Carbon;

class SettingsChangeConfirmation implements ConfirmationContract
{

    const EXPIRE_TIME_MINS = 1;

    /**
     * @var Confirmation
     */
    protected $last_confirm_try;

    /**
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function create(): int
    {
        $confirmation_code = mt_rand(1000, 9999);;
        $this->createNewConfirmTry($confirmation_code);

        return $confirmation_code;
    }

    public function tryPass(int $code): bool
    {
        $this->last_confirm_try = $this->getLastConfirmTry();

        if ((int) $this->last_confirm_try->code === $code && $this->expired() === FALSE) {
            $this->setConfirmTryPassed();

            return true;
        } else {
            return false;
        }
    }

    public function passed(): bool
    {
        $this->last_confirm_try = $this->getLastConfirmTry();

        return (bool) $this->last_confirm_try->passed;
    }

    public function expired(): bool
    {
        $this->last_confirm_try = $this->getLastConfirmTry();
        $try_time = new Carbon($this->last_confirm_try->created_at);

        return $try_time
                    ->addMinutes(self::EXPIRE_TIME_MINS)
                    ->gt(Carbon::now()); // gt == greater than
    }

    private function createNewConfirmTry(int $confirmation_code): bool
    {
        $confirmation = new Confirmation();
        $confirmation->user_id = Auth::user()->id;
        $confirmation->code = $confirmation_code;
        $confirmation->passed = false;
        return $confirmation->save();
    }

    private function setConfirmTryPassed(): bool
    {
        $this->last_confirm_try->passed = true;
        return $this->last_confirm_try->save();
    }

    private function getLastConfirmTry(): Confirmation
    {
        return Confirmation::where('user_id', Auth::user()->id)
                                ->orderBy('created_at')
                                ->firstOrFail();
    }
}
