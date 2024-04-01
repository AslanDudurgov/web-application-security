<!DOCTYPE html>
<html>
<head>
    <title>Валидация</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css">
</head>
<body>
    <form name="myForm" action="validate.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
        Адрес почты: <input type="email" name="email" required><br>
        Пароль: <input type="password" name="password" required><br>
        Номер телефона: <input type="tel" id="phone" name="phone"><br>
        Дата рождения: <input type="date" name="birth_date" required><br>
        Пол: <input type="radio" name="gender" value="М" required>М
             <input type="radio" name="gender" value="Ж" required>Ж<br>
        Имя пользователя: <input type="text" name="username" required><br>
        Изображение: <input type="file" name="picture" required><br>
        <input type="submit" value="Отправить">
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
    <script>
        $(document).ready(function() {
            var input = document.querySelector("#phone");
            var iti = window.intlTelInput(input, {
            });

            $("form").on("submit", function() {
                var number = iti.getNumber();
            });

            $(input).on("countrychange", function() {
                var countryCode = iti.getSelectedCountryData().dialCode;
                var mask = "";
                if (countryCode.length === 1) {
                    mask = "+9 (999) 999-99-99";
                } else if (countryCode.length === 2) {
                    mask = "+99 (999) 999-99-99";
                } else if (countryCode.length === 3) {
                    mask = "+999 (999) 999-99-99";
                }
                $(input).inputmask(mask);
            });
        });
    </script>
</body>
</html>
