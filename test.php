

<?php

require_once "header.php";

if (isset($_POST['login'])) {
    echo "BILL";
}
?>

<form action="test.php" method='POST'>
    <input type="text" name='name'>
    <button type='submit' name='login'>Done</button>
</form>
