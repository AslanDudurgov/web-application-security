<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practice_1";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn===false)
{
	die("connection error");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);

    if($row["role"]=="user")
	{	

		$_SESSION["username"]=$username;

		header("location:index.php");
	}

	elseif($row["role"]=="admin")
	{

		$_SESSION["username"]=$username;
		
		header("location:admin.php");
	}

	else
	{
		echo "username or password incorrect";
	}
}

$conn->close();

?>

<form method="post" action="login.php">
    <input type="text" name="username" placeholder="Имя пользователя" required><br>
    <input type="password" name="password" placeholder="Пароль" required><br>
    <input type="submit" value="Войти">
</form>
