<?php

namespace App\Services;

use App\Models\SessionInputImage;
use App\Models\Session;

class SessionService
{

    const SESSION_LIFETIME = 525600; // 1 год
    const SESSION_ID_BYTES_LEN = 20;

    public function __construct()
    {

    }

    /**
     * Создает и отдает сессию юзера
     *
     * @return Session
     * @throws \Throwable
     */
    public function createSession(): Session
    {
        $new_session_id = self::genSessionId();
        $new_session = new Session();
        $new_session->id = $new_session_id;
        $new_session->saveOrFail();

        return $new_session;
    }

    /**
     * Генерирует ID для сессии юзера
     *
     * @return string
     * @throws \Exception
     */
    public static function genSessionId(): string
    {
        $bytes = random_bytes(self::SESSION_ID_BYTES_LEN);
        return bin2hex($bytes);
    }
}
