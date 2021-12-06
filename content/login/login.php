<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
   <?php
        include '../header.php';
   ?>
    <div class="login-box">
        <h1>Вход</h1>
        <form>
            <div class="form-reg flex">
                <div class="user-box">
                    <input type="text" name="" required="">
                    <label><i class="fa fa-unlock" aria-hidden="true"></i>Логин</label>
                </div>
                <div class="user-box">
                    <input type="password" name="" required="">
                    <label><i class="fa fa-unlock" aria-hidden="true"></i>Пароль</label>
                </div>
                <input type="button" class="button" value="Войти">
                <a href="../registration/registration.php" style="margin-top: .5rem">Зарегистрироваться</a>
            </div>
        </form>
    </div>

    <script src="/js/menu.js"></script>
</body>
</html>