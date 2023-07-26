<?php
/**
 * Created by PhpStorm.
 * User: kanadez
 * Date: 25.06.23
 * Time: 14:00
 */

namespace App\Contracts;


interface ConfirmationContract
{
    /**
     * Создает подтверждение
     *
     * @return int
     */
    public function create(): int;

    /**
     * Проверяет, пройдено подтверждение или нет
     *
     * @return bool
     */
    public function passed(): bool;

    /**
     * Принимает попытку пройти подтверждение с кодом
     *
     * @param int $code
     * @return bool
     */
    public function tryPass(int $code): bool;
}
