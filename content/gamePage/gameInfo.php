<?php
    include "../database/connect.php";

    function get_game_info($game_ID, $conn){
        $sql = "SELECT * FROM `games` WHERE `game_id` = '$game_ID'";
        $result = $conn->query($sql);   
        $row = $result->fetch_assoc();
        return $row;
    }

    $game_info = get_game_info($_POST["gameID"], $conn);
?>
<div class="fieldAbout flex">
    <div class="gameAbout">
        <div class="gamePic"><img src="/images/games-img/<?php echo($_POST["gameID"]); ?>.jpg"></div>
        <p>
            <?php echo($game_info["name"]); ?>
        </p>
    </div>
    <div class="textAbout">
        <p>
            <?php echo($game_info["description"]); ?>
        </p>
    </div>
</div>