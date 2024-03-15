<?php
$mysqli = new mysqli("localhost", "root", "", "practice_3");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$username = $mysqli->real_escape_string($_POST['username']);
$password = $mysqli->real_escape_string($_POST['password']);

$sql = $mysqli->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$sql->bind_param("ss", $username, $password);

if ($sql->execute()) {
    echo "Пользователь успешно зарегистрирован.";
} else {
    echo "Ошибка: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
?>
