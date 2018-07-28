<?php

if (isset($_POST['agree']) && isset($_POST['loginbutton']))
{
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$yop=$_POST['yop'];
	$address=$_POST['address'];
    
       $wasSuccessful=$account->insertUserDetails($name,$phone,$password,$email,$gender,$yop,$address);

}


?>