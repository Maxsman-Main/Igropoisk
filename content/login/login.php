<?php
    session_start();
    if($_SESSION["login"] != NULL){
        header("Location: ../../index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
   <?php
        include '../header.php';
   ?>
    <div class="login-box">
        <h1>Вход</h1>
        <form method="POST" action="./doLogin.php">
            <div class="form-reg flex">
                <div class="user-box">
                    <input type="text" name="login" required="">
                    <label><i class="fa fa-unlock" aria-hidden="true"></i>Логин</label>
                </div>
                <div class="user-box">
                    <input type="password" name="password" required="">
                    <label><i class="fa fa-unlock" aria-hidden="true"></i>Пароль</label>
                </div>
                <input type="submit" class="button" value="Войти">
                <a href="../registration/registration.php" style="margin-top: .5rem">Зарегистрироваться</a>
            </div>
        </form>
    </div>

    <script src="../../js/menu.js"></script>
</body>
</html>