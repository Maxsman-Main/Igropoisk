<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GAME DEMO TITLE</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <?php
        include '../header.php';
    ?>
    <div class="content">
        <div class="gameContent flex">
            <?php
                include './gameInfo.php';
                include './gameComments.php';   
            ?>
        </div>
    </div>
    <script src="../../js/menu.js"></script>
</body>
</html>