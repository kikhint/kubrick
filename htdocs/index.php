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
    <div class="container mt-5">
        <h4 class="mb-5">Что посмотреть на майские</h4>

        <div class="d-flex flex-wrap">
            <?php
            for($i = 0; $i < 5; $i++):
            ?>
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal"><ya-tr-span data-index="8-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Free" data-translation="Бесплатно" data-ch="0" data-type="trSpan" style="visibility: initial !important;">Название фильма</ya-tr-span></h4>
                </div>
                <div class="card-body">
                    <img src="img/<?php echo ($i + 1) ?>.jpg" class="img-thumbnail">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><ya-tr-span data-index="10-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="10 users included" data-translation="включено 10 пользователей" data-ch="0" data-type="trSpan" style="visibility: initial !important;">включено 10 пользователей</ya-tr-span></li>
                        <li><ya-tr-span data-index="11-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="2 GB of storage" data-translation="2 ГБ памяти" data-ch="0" data-type="trSpan" style="visibility: initial !important;">2 ГБ памяти</ya-tr-span></li>
                        <li><ya-tr-span data-index="12-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Email support" data-translation="Поддержка по электронной почте" data-ch="0" data-type="trSpan" style="visibility: initial !important;">Поддержка по электронной почте</ya-tr-span></li>
                        <li><ya-tr-span data-index="13-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Help center access" data-translation="Доступ к справочному центру" data-ch="0" data-type="trSpan" style="visibility: initial !important;">Доступ к справочному центру</ya-tr-span></li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-outline-primary"><ya-tr-span data-index="14-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Sign up for free" data-translation="Зарегистрируйтесь бесплатно" data-ch="0" data-type="trSpan" style="visibility: initial !important;">Подробнее</ya-tr-span></button>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>
    <?php require "blocks/footer.php" ?>
</body>
</html>













</html>