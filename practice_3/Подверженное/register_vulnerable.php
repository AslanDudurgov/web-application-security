<?php
$mysqli = new mysqli("localhost", "root", "", "practice_3");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

if ($mysqli->query($sql) === TRUE) {
    echo "Пользователь успешно зарегистрирован.";
} else {
    echo "Ошибка: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
?>
