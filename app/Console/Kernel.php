<?php

namespace App\Console;

use App\Services\BinanceCurrFetcher;
use App\Services\CbrfCurrFetcher;
use App\Services\RubBtcCurrFetcher;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Jobs\CurrFetch;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // Валюта будет забираться асинхронно тремя разными очередями раз в минтуту.
        // Если нужно чаще, можно написать отдельный демон и запустить его через Супервизор (supervisord)
        $schedule->job(new CurrFetch(CbrfCurrFetcher::class), 'cbrf_curr_fetch')->everyMinute();
        $schedule->job(new CurrFetch(BinanceCurrFetcher::class), 'binance_curr_fetch')->everyMinute();
        $schedule->job(new CurrFetch(RubBtcCurrFetcher::class), 'rubbtc_curr_fetch')->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
