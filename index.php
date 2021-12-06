<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Игропоиск</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
</head>
<body>
    <?php
        include './content/header.php';
    ?>
    <div class="content flex" style="flex-direction: column;">
        <?php
            include './content/mainPage/gameSelector.php';
            include './content/mainPage/description.php';
        ?>
    </div>
    <!--<div class="footer">
        <p>Все права защищены, бла-бла-бла</p>
    </div>-->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>>
    <script src="/js/menu.js"></script>
    <script src="/js/swiper.js"></script>
</body>
</html>