<!DOCTYPE html>
<html>
<head>
    <title>Безопасное веб-приложение</title>
</head>
<body>
    <h2>Регистрация пользователя</h2>
    <form action="register_safe.php" method="post">
        <label for="username">Имя пользователя:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Пароль:</label><br>
        <input type="text" id="password" name="password"><br>
        <input type="submit" value="Зарегистрироваться">
    </form>
</body>
</html>