<?php

namespace App\Http\Controllers;

use App\Http\Services\ApiTg;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MessageController extends Controller {

    /**
     * Скрипт отправки сообщения от формы "Обратной связи"
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function __invoke(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'theme'    => 'required|string',
            'message'  => 'required|string',
        ]);

        date_default_timezone_set("Europe/Helsinki");

        $message  = "Новое уведомление!\r\n";
        $message .= "Тема: " .  $data['theme'] . "\r\n";
        $message .= "Сообщение: " .  $data['message'] . "\r\n";

        $result = ApiTg::sendMessage(env('TELEGRAM_CHAT_ID'), $message);

        if (!key_exists('result', $result)) {
            dd($result);
        }

        return redirect()->back()->with('msg', 'Сообщение успешно отправлено');
    }
}
