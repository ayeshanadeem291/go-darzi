<?php
ob_start();
$timezone=date_default_timezone_set("Asia/Karachi");

$con= mysqli_connect("localhost","root","","darzii");

if (mysqli_connect_errno()){
	echo"failed to connect". mysqli_connect_errno();
}
?>