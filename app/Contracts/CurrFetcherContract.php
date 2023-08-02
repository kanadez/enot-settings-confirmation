<?php
/**
 * Created by PhpStorm.
 * User: kanadez
 * Date: 25.06.23
 * Time: 14:00
 */

namespace App\Contracts;


interface CurrFetcherContract
{

    /**
     * Забирает курс валют
     *
     * @return bool
     */
    public function fetch() : bool;
}
