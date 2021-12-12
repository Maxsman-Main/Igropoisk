<?php

    include "../database/connect.php";

    if($_POST["text"] != NULL){
        function send_comment($text, $conn){
            $id = $_POST["gameID"];
            $login = $_SESSION["login"];
            $text = $_POST["text"];
            $sql = "INSERT INTO `comments` (`game_id`, `author`, `text`) VALUES ($id, '$login', '$text')";
            update_comments_count($_SESSION["login"], $conn);
            $result = $conn->query($sql);
        }

        function update_comments_count($author, $conn){
            $sql = "UPDATE `users` SET `comments_count` = `comments_count` + 1 WHERE `login` = '$author'";
            $conn->query($sql);
        }

        send_comment($_POST["text"], $conn);
    }

    function get_comments($game_ID, $conn){
        $sql = "SELECT * FROM `comments` WHERE `game_id` = '$game_ID' ORDER BY `comment_id` DESC";
        $result = $conn->query($sql);
        return $result;
    }
    $game_ID = $_POST["gameID"];
    $comments = get_comments($_POST["gameID"], $conn);

?>
<div class="commentsField flex" style="flex-direction: column;">
    <?php
        if($_SESSION["login"] != NULL){
            echo("
            Введите свой комментарий: 
                <form method='POST' style='display: flex; flex-direction:column' action>
                    <textarea name='text' cols='50' rows='10'></textarea>
                    <input type='hidden' name='gameID' value=".$game_ID."> 
                    <input type='submit' value='Отправить' style='width: 25%; margin-top: 1rem;'>
                </form>
            ");
        }
    ?>
    <?php
        while($comment = $comments->fetch_assoc()){
            echo(" 
                <div class='com'>    
                    <h2>".$comment["author"]."</h2>
                    <p>"
                    .$comment["text"].
                    "</p>  
                </div>
            ");
        }
    ?>
</div>