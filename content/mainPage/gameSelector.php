<?php

    include './content/database/connect.php';

    function get_games($conn){
        $sql = "SELECT `game_id`, `name` FROM `games`";
        $result = $conn->query($sql);
        return $result;
    }

    $games_info = get_games($conn);
?>
<div class="gallery swiper-container">
    <div class="gallery-list swiper-wrapper">
        <?php
            while($row = $games_info->fetch_assoc()){
                echo("
                    <div class='gallery-item swiper-slide'>
                        <img src='images/games-img/".$row["game_id"].".jpg' style='width: 200px; margin: 18px;' alt='game'>
                        <h3 class='game-name'>"
                        .$row['name'].
                        "</h3>
                        <form method='POST' action='content/gamePage/gamePage.php'>
                            <input type='hidden' name='gameID' value='".$row["game_id"]."'></input>
                            <input type='submit'  value='Перейти' style='cursor : pointer'></input>
                        </form>  
                    </div>
                ");
            }
        ?>
    </div>
</div>
