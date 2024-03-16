<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'practice_4';
$connection = new mysqli($host, $username, $password, $database);

$ip_address = $_SERVER['REMOTE_ADDR'];

$query = "SELECT * FROM ip_addresses WHERE ip_address = '$ip_address'";
$result = $connection->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($row['is_allowed'] == 1) {
        echo "Доступ разрешен!";
    } else {
        echo "Доступ запрещен!";
    }
} else {
    $insert_query = "INSERT INTO ip_addresses (ip_address) VALUES ('$ip_address')";
    $connection->query($insert_query);
    echo "IP адрес добавлен в базу данных!";
}

$connection->close();

?>
