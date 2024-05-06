<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale="1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Моё творение</title>
</head>
<body>
<?php require "blocks/header.php" ?>
    <form action="register.php" method="post">
        <input type="text" placeholder="login" name="login">
        <input type="text" placeholder="password" name="pass">
        <input type="text" placeholder="repeat password" name="repeatpass">
        <input type="text" placeholder="email" name="email">
        <button type="submit">Зарегистрироваться</button>
    </form>
    <?php
    require_once('db.php');
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $repeatpass = $_POST['repeatpass'];
    $email = $_POST['email'];


    if(empty($login) || empty($pass) || empty($repeatpass) || empty($email)){
        echo "Заполните все поля";
    } else
    {
        if($pass != $repeatpass){
            echo "Пароли не совпадают";
        } else {
            $sql = "INSERT INTO `users` (login,pass,email) VALUES ('$login', '$pass', '$email')";
            if($conn -> query($sql) === TRUE){
                echo "Успешная регистрация";
            }
            else {
                echo "Ошибка" . $conn->error;
            }
        }
    }
    ?>



<?php require "blocks/footer.php" ?>
</body>
</html>