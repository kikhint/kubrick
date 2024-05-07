<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale="1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Моё творение</title>
</head>
<body>
<?php require "blocks/header.php" ?>
    <div class="wrapper">
    <form action="login.php" method="post">
        <div class="input-box">
            <h1>Вход</h1>
        <input type="text" placeholder="Логин" name="login" required>
            <i class='bx bx-user'></i>
            <div class="input-box">
        <input type="text" placeholder="Пароль" name="pass" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Запомнить меня</label>
                <a href="/forgot.php">Забыли пароль?</a>
            </div>
            <button type="submit" class="btn">Войти</button>
                <div class="register-link">
                    <p>Не зарегистрированы? <a href="/register.php">Регистрация</a></p>
                </div>
        </div>
    </form>
    </div>

    <?php
    require_once('db.php');

    $login = $_POST['login'];
    $pass = $_POST['pass'];
    if(empty($login) || empty($pass))
        {
            echo "Заполните все поля";
        } else {
            $sql = "SELECT * FROM `users` WHERE login = '$login' AND pass = '$pass'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0)
                {
                    while($row = $result->fetch_assoc()){
                        echo "Добро пожаловать " . $row['login'];
                    }
                } else {
                    echo "Нет такого пользователя";
                }
        }
    ?>


<?php require "blocks/footer.php" ?>
</body>
</html>