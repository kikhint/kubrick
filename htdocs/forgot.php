<?php
require_once('db.php');


?>





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

    <div align="center">
        <form action="/forgot.php" method="post" class="sing_form">
            <h1>Забыли пароль?</h1>
            <input type="email" name="email" placeholder="Email"><br>
            <button type="submit" name="forgot">Отправить письмо</button>
        </form>
    </div>


<?php require "blocks/footer.php" ?>
</body>
</html>













</html>
