<?php
ob_start();
$timezone = date_default_timezone_set("Asia/Karachi");

$connection = mysqli_connect("localhost", "root", "home123", "darzii");

if (!$connection) {
    echo "failed to connect" . mysqli_connect_errno();
}
