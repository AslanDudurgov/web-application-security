<?php

error_reporting(0);
session_start();

if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    
    echo "Вы вошли как администратор, " . $_SESSION['username'] . "!";
}

?>
