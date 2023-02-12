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
    <!-- Форма регистрации -->

    <form action="vendor/signup.php" method="POST" enctype="multipart/form-data">
        <label>ФИО</label>
        <input type="text" name="full_name" placeholder="Введите свой ФИО">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Email</label>
        <input type="email" name="email" placeholder="Введите свой email">
        <label>Изображение профиля</label>
        <input type="file" name="avatar">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите свой пароль">
        <label>Подтвердите пароль</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
        <button type="submit">Войти</button>
        <p>
            У вас уже есть аккаунт? - <a href="/">авторезируйтесть</a>!
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