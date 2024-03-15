<?php
$allowed_ips = array("127.0.0.1");

$user_ip = $_SERVER['REMOTE_ADDR'];

if (in_array($user_ip, $allowed_ips)) {

    echo "Доступ разрешен. Привет, пользователь!";
} else {
    
    header("HTTP/1.1 403 Forbidden");
    echo "Доступ запрещен. Ваш IP-адрес: $user_ip";
}
?>
