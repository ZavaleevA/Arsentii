<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма авторизации</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navigation.css">
    <style>
  body { background: url(photo/grad1.jpg); }
</style>
</head>
<body>
    <nav class="top-menu">
    <ul class="menu-main">
    <li><a href="kabinet.php">Личный кабинет</a></li>
    <li><a href="reg.php">Зарегистрироваться</a></li>
    <li><a href="" class="current">Войти</a></li>
    </ul>
    </nav>

    <div class="container mt-4">

        <?php
            if (!isset($_COOKIE['user'])):
        ?>

        <div class="row">
            <div class="col" align="center">
                <h1>Форма авторизации</h1>
                <form action="validation-form/auth.php" method="post">
                <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
                <input type="text" class="form-control" name="surname" id="surname" placeholder="Введите фамилию"><br>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                <button class="btn btn-success" type="submit">Авторизоваться</button>
                </form>
                </form>
            </div>
            <?php else: ?>
        <meta http-equiv="refresh" content="0;https://zadanie1/kabinet.php">
    <?php endif; ?>
        </div>
    </div>
</body>
</html>