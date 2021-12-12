<?php

    include '../database/connect.php';

    function get_comments($conn){
        $sql = "SELECT * FROM `comments` ORDER BY `comment_id` DESC";
        $result = $conn->query($sql);
        return $result;
    }

    $comments = get_comments($conn);
?>
<div class="commentsList">
    <div class="comment">
        <?php
            while($comment = $comments->fetch_assoc()){
                $text = $comment["text"];
                echo("
                    <h3>".$comment["author"]."</h3>
                    <p>".$comment["text"]."</p>
                    <div style='display:flex'>
                        <form class='editDelete' action='edit.php' method='POST'>
                            <a href='#' onclick='parentNode.submit();'>&#9998</a>
                            <input type='hidden' name='id' value=".$comment["comment_id"].">
                            <input type='hidden' name='text' value='$text'>
                        </form>
                        <form class='editDelete' action='delete.php' method='POST'>
                            <a href='#' onclick='parentNode.submit();'>&#9746</a>
                            <input type='hidden' name='id' value=".$comment["comment_id"].">
                        </form>
                    </div>
                ");
            }
        ?>
    </div>
</div>