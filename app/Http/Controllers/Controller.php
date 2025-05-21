<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

abstract class Controller
{
    protected function sendTelegramAlert($message)
{
    $token = '7583685178:AAFV4xRyk2uIQLT0u0c4gTfZJBCT6Kf2RjI'; // ➤ ផ្លាស់ប្តូរជាមួយ Token បច្ចុប្បន្ន
    $chat_id = '1222285793';          // ➤ ផ្លាស់ប្តូរជាមួយ Chat ID

    $url = "https://api.telegram.org/bot{$token}/sendMessage";

    $data = [
        'chat_id' => $chat_id,
        'text' => $message,
        'parse_mode' => 'HTML',
    ];

    // Using HTTP client
    try {
        Http::post($url, $data);
    } catch (\Exception $e) {
        Log::error('Telegram alert failed: ' . $e->getMessage());
    }
}

}
