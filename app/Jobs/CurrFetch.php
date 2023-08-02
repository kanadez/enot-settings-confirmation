<?php

namespace App\Jobs;

use App\Contracts\CurrFetcherContract;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CurrFetch implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var CurrFetcherContract
     */
    protected $fetcher;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(CurrFetcherContract $fetcher)
    {
        $this->fetcher = $fetcher;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->fetcher->fetch();
    }
}
