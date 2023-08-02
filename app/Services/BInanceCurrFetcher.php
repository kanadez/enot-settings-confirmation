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

class BinanceCurrFetcher implements CurrFetcherContract
{


    const FETCH_URL = "https://binance.com/curr/fetch/";
    const RATE = "USD-BTC";

    public function __construct()
    {

    }

    public function fetch(): bool
    {
        try {
            $headers = [];
            $response = Http::withHeaders($headers)>get(self::FETCH_URL . self::RATE);

            if ($response->status() === 200) {
                $data = json_decode($response->body());
                Currency::updateOrCreate([
                    'rate'  => self::RATE,
                    'value' => $data->curr_val
                ]);

                return true;
            } else {
                Log::channel('curr-alerts')
                    ->alert("BinanceCurrFetcher: fetch network error, status {$response->status}"); // Еще лучше отправлять уведомление админам
            }
        } catch(\Exception $exception) {
            Log::channel('curr-alerts')
                ->alert("BinanceCurrFetcher: fetch exception, message {$exception->getMessage()}"); // То же самое
        }

        return false;
    }

}
