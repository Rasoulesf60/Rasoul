include("Telegram.php");

date_default_timezone_set("asia/tehran");

// Set the bot 1096940942:AAHHJbVc5WpCuOg0JXXt1GElfX7z98YJNfo

$bot_id = "railway-1096940942:AAHHJbVc5WpCuOg0JXXt1GElfX7z98YJNfo";

// Instances the class

$telegram = new Telegram($bot_id);

->LastName();

$message_id = $telegram->MessageID(rasoulesf60); //

$user_id = $telegram->UserID(rasoulesf60); //

$chat_id = $telegram->ChatID(
https://t.me/joinchat/BqiFvBWX8l15pW2XfsHfYw); //

if(!is_null($text) && !is_null($chat_id)){

$content = array('chat_id' => $chat_id, 'text' => $user_id);

$telegram->sendMessage($content);

}

