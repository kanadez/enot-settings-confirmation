<?php

namespace App\Services;

use App\Contracts\ConfirmationContract;
use App\Contracts\CurrFetcherContract;
use App\Models\Currency;
use App\Models\Setting;
use App\Notifications\SettingChangeConfirmNotification;
use Illuminate\Support\Facades\Auth;
use App\Services\FunctionResult as Result;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class RubBtcCurrFetcher implements CurrFetcherContract
{


    const FETCH_URL = "";
    const RATE = "RUB-BTC";

    public function __construct()
    {

    }

    public function fetch(): bool
    {
        $usdrub_curr = Currency::where('rate', 'USD-RUB')->firstOrFail();
        $btcusd_curr = Currency::where('rate', 'USD-BTC')->firstOrFail();
        $btcrub_curr = $btcusd_curr-> value / $usdrub_curr->value;

        Currency::updateOrCreate([
            'rate'  => self::RATE,
            'value' => $btcrub_curr
        ]);

        return true;
    }

}
