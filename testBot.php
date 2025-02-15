<?php

$token = "YOUR_BOT_TOKEN";
$apiUrl = "https://api.telegram.org/bot$token/";

$update = json_decode(file_get_contents("php://input"), true);

if (!$update) {
    exit; 
}

$message = $update['message'] ?? null;

if ($message) {
    $chat_id = $message['chat']['id'];
    $text = $message['text'] ?? '';

    switch ($text) {
        case '/start':
            sendMessage($chat_id, "Привет! Я ваш Telegram-бот. Чем могу помочь?");
            break;

        case '/help':
            sendMessage($chat_id, "Доступные команды:\n/start - Запуск бота\n/help - Справка");
            break;

        default:
            sendMessage($chat_id, "Вы отправили: " . $text);
            break;
    }
}


function sendMessage($chat_id, $text)
{
    global $apiUrl;
    $params = [
        'chat_id' => $chat_id,
        'text' => $text,
    ];
    file_get_contents($apiUrl . "sendMessage?" . http_build_query($params));
}

?>
