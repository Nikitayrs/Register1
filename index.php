<?php
    session_start();

    if($_SESSION['user']) {
        header('Location: profile.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <!-- Форма авторизации -->

    <form action="vendor/signin.php" method="POST">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите свой пароль">
        <button type="submit">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="/register.php">зарегистрируйтесь</a>!
        </p>
        <?php 
            if($_SESSION['message']) {
                echo '<p class="msg">' . $_SESSION['message'] . '</p> ';
            }
            unset($_SESSION['message']);
        ?>
    </form>
</body>
</html>