include("Telegram.php");

date_default_timezone_set("asia/tehran");

// Set the bot TOKEN

$bot_id = "YOUR-TOKEN";

// Instances the class

$telegram = new Telegram($bot_id);

->LastName();

$message_id = $telegram->MessageID(); // هر پیغام در تلگرام یک آیدی یکتا دارد

$user_id = $telegram->UserID(); // آیدی یکتای کاربر

$chat_id = $telegram->ChatID(); // آیدی مکانی که چت صورت میگیرد، مثل خود بات یا آیدی گروه

if(!is_null($text) && !is_null($chat_id)){

$content = array('chat_id' => $chat_id, 'text' => $user_id);

$telegram->sendMessage($content);

}

