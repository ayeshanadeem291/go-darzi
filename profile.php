<?php
require_once "header.php";

$query = "SELECT * FROM darzii where email={$_SESSION["email"]}";
$result = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $name = $row['name'];
    echo $name;
}
