<?php
$telegram_token = "7685013441:AAHcgnc8k_xm9h9kvmZFJVlkAUCNoHGwF20";
$chat_id = "-1002403241681";

function sendTelegramMessage($message) {
    global $telegram_token, $chat_id;
    $url = "https://api.telegram.org/bot$telegram_token/sendMessage";
    
    $data = [
        'chat_id' => $chat_id,
        'text' => $message
    ];
    
    $options = [
        'http' => [
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data)
        ]
    ];
    
    $context = stream_context_create($options);
    file_get_contents($url, false, $context);
}

$url = "http://10.10.11.82/pc/"; // Ganti dengan URL yang ingin dicek
$ch5 = curl_init($url);
curl_setopt($ch5, CURLOPT_RETURNTRANSFER, true);
curl_exec($ch5);

if (curl_errno($ch5)) {
    $error_message = "Curl error: " . curl_error($ch5);
    echo $error_message;
    sendTelegramMessage("ALERT: Website Wall Scanner harga TKB tidak dapat diakses! Error: " . $error_message);
} else {
    $http_code = curl_getinfo($ch5, CURLINFO_HTTP_CODE);
    
    if ($http_code == 200) {
        echo "Website is up and running with status 200";
    } else {
        $message = "ALERT: Website Wall Scanner harga TKB tidak dapat diakses! Status code: $http_code";
        echo $message;
        sendTelegramMessage($message);
    }
}

curl_close($ch5);


?>
