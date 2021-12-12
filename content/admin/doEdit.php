<?php

    include "../database/connect.php";

    function update_comment($id, $text, $conn){
        $sql = "UPDATE `comments` SET `text` = '$text' WHERE `comment_id` = $id";
        $conn->query($sql);
    }

    update_comment($_POST["id"], $_POST["text"], $conn);
    header("Location: adminPanel.php");
?>