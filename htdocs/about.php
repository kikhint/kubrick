<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale="1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Обратная связь</title>
</head>
<body>
    <?php require "blocks/header.php" ?>
    <div class="container mt-5">
    <form action="check.php" method="post">
        <div class="input-box">
            <h3>Обратная связь</h3>
        <input type="email" name="email" placeholder="Введите ваш Email" class="form-control"><br>
        <textarea name="message" class="form-control" placeholder="Введите ваше сообщение"></textarea><br>
        </div>
        <button type="submit" name="send" class="btn btn-success">Отправить</button>
    </form>
    </div>
    <?php require "blocks/footer.php" ?>
</body>
</html>