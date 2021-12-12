<form style="display : flex; flex-direction : column" action="doEdit.php" method="POST">
    <textarea cols="10" rows="10" name="text"><?php echo($_POST["text"]); ?></textarea>
    <input type="hidden" name="id" value=<?php echo($_POST["id"]); ?>>
    <input style="width: 200px" type="submit" value="Отредактировать">
</form>