<?php
    include "../database/connect.php";

    function get_comments($game_ID, $conn){
        $sql = "SELECT * FROM `comments` WHERE `game_id` = '$game_ID'";
        $result = $conn->query($sql);
        return $result;
    }
    $comments = get_comments($_POST["gameID"], $conn);
?>
<div class="commentsField flex" style="flex-direction: column;">
    Введите свой комментарий: <input style="width: 50%;">
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