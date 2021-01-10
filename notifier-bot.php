<?php
   date_default_timezone_set("Asia/kolkata"); ///Data From Webhook
    $content = file_get_contents("php://input");
    $update = json_decode($content, true);
    $chat_id = $update["message"]["chat"]["id"];
    $message = $update["message"]["text"];
    $id = $update["message"]["from"]["id"];
    $chat_id = "xxxxxxx" ///Your Telegram Group or Channel Username or Id

 if ($message && $id == xxxxxx){ 
send_message($chat_id, "$message \nNotification pushed by xxxxx"); 
  }

///Send Message to Group or Channel
function send_message($chat_id, $message){
       $apiToken = "xxxxxxxx" ///Your Telegram Bot Api Token
       $text = urlencode($message);
      file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?chat_id=$chat_id&text=$text"); }
?>
