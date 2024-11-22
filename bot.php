<?php
$content = file_get_contents("php://input");
$update = json_decode($content, true);

$chat_id = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];

if($message == "/start") {
    sendMessage($chat_id, "Welcome to Chainey's Retreat!");
}

function sendMessage($chat_id, $message) {
    $apiToken = "7932864974:AAGjWw0NUHZWajanYKq4gJ8TXTuCkK54Wcw";
    $url = "https://api.telegram.org/bot$apiToken/sendMessage?chat_id=$chat_id&text=".urlencode($message);
    file_get_contents($url);
}
?>
