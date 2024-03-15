<?php
$pdo = new PDO('mysql:host=localhost;dbname=practice_5', 'root', '');

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);
$stmt->execute();

echo "Данные вставлены надежно!";
?>