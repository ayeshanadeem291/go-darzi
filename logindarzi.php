<?php
require_once "header.php";
if (isset($_POST['login'])){
    
    session_start();
    echo "<h1> CHALJAAA </h1>";
     $email = clearString($_POST['email']);
	 $password = hashString(clearString($_POST['password']));
    $query="SELECT * FROM darzii where email='$email'";
	$result=mysqli_query($connection,$query);
	while($row=mysqli_fetch_assoc($result)){
    $name=$row['name'];
    echo"<h1> $name</h1>";
}
}
echo "<h1> AYESHA </h1>";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
	<div class='darzi darzi-image'>

<div class='jumbotron'>
<div class='darziForm-content'>
 <div class='display-4 mb-4'>LOG IN DARZI</div>
	<form action="logindarzi.php " method="post">
     <div class='form-group'>
<div class='form-group'>

        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
</div>
<div class='form-group'>

        <input type="password" name="password"  class="form-control" id="password" placeholder="Password" pattern=".{5,10}" required title="5 to 10 characters">
        <br>
        <br>


<input type="submit" name="login" class='btn btn-primary'>
</form>

