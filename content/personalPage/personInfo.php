<?php
    include "../database/connect.php";

    function get_person_info($person_login, $conn){
        $sql = "SELECT * FROM `users` WHERE `login` = '$person_login'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        return $row;
    }

    $person_info = get_person_info($_SESSION["login"], $conn);
?>
<div class="allInfoAbout flex">
    <div class="account">
        <div class="photo"><img src="https://www.thelocal.se/wp-content/uploads/2018/12/6d67730d16af04f3f956389d4cc244af808b8381c23b1e3d218ecd792de14fa8.jpg"></div>
        <p>
            login: 
            <?php echo($person_info["login"]); ?>
        </p>
    </div>
    <div class="statistic">
        <h2>Статистика аккаунта</h2>
        <div class="textStat">
            <p>
                Дата регистрации:
                <?php echo($person_info["reg_date"]); ?>
            </p>
            <p>
                Количество комментариев:
                <?php echo($person_info["comments_count"]); ?>
            </p>
        </div>
    </div>
</div>