<?php
require_once "header.php";
if (isset($_POST['login'])) {

    
    $email = clearString($_POST['email']);
    $password = hashString(clearString($_POST['password']));
    $query = "SELECT * FROM darzii where email='$email'";
    $result = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $_SESSION["name"] = $row['name'];
        $_SESSION["email"] = $row['email'];
        $_SESSION["experience"] = $row['experience'];
        $_SESSION["address"] = $row['address'];
        $_SESSION["phone"] = $row['phone'];
        $_SESSION["genderBox"] = $row['genderBox'];
        header("Location: profile.php"); // redirects

                
    }
}

?>




	<div class='darzi darzi-image'>

<div class='jumbotron'>
<div class='darziForm-content'>
 <div class='display-4 mb-4'>LOG IN DARZI</div>
	<form action="logindarzi.php" method="POST">
     <div class='form-group'>


        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
</div>
<div class='form-group'>

        <input type="password" name="password"  class="form-control" id="password" placeholder="Password" pattern=".{5,10}" required title="5 to 10 characters">
        <br>
        <br>
</div>


<input type="submit" name="login" class='btn btn-primary'>
</form>
</div>
</div>
