<?php

namespace App\Http\Controllers;

use App\Http\Services\ApiTg;

class TestMessageController extends Controller {

    /**
     * Скрипт отправки сообщения от формы "Обратной связи"
     *
     * @return void
     */
    public function __invoke(): void
    {
        date_default_timezone_set("Europe/Helsinki");

        $message  = "Тестовое сообщение в ТГ\r\n";

        $result = ApiTg::sendMessage(env('TELEGRAM_CHAT_ID'), $message);

        dd(key_exists('result', $result)
            ? 'Сообщение успешно отправлено'
            : $result);
    }
}
