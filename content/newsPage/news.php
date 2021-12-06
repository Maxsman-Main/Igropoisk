<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>News page</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <?php
        include '../header.php';
    ?>
    <div class="content flex" style="flex-direction: column;">
        <?php
            include './newsList.php';
        ?>  
    </div>
    <script src="/js/menu.js"></script>
</body>
</html>