<?php

    include '../database/connect.php';

    function get_news($conn){
        $sql = "SELECT * FROM `news`";
        $result = $conn->query($sql);
        return $result;
    }

    $news = get_news($conn);
?>
<div class="newsList">
    <?php
        while($row = $news->fetch_assoc()){
            echo("
                <div class='newsBlock flex'>
                    <img class='newsImg' src='../../images/news/".$row["news_id"].".png'>
                    <div class='newsText'>
                        <h2>".$row["news_name"]."</h2>
                        <p>".$row["news_text"]."</p>
                    </div>
                </div>
            ");
        }
    ?>
</div>