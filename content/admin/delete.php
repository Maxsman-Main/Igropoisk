<?php

    include "../database/connect.php";

    function delete_comment($id, $conn){
        $sql = "DELETE FROM `comments` WHERE `comment_id` = $id";
        $conn->query($sql);
    }

    delete_comment($_POST["id"], $conn);
    header("Location: adminPanel.php");
?>