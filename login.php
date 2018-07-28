<?php
include("includes/config.php");
include("includes/classes/Account.php");
$account=new Account($con);

include("includes/handlers/register-handler.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title>registration form </title>
  <link rel="stylesheet" type="text/css" href="css/login.css">

  <style type="text/css">
    li a{
        float: right;
        padding-right: 9%;
        padding-top: 2%;
        font-size: 38px;
        color: #066c61;
          text-decoration : none;
        

      }
  </style>

</head>



<body style= "background-size: cover;
      height: 100%;
      background-image: url(assets/images/fbg.jpg);
      overflow: hidden;
      text-align: center;">


<!-- NAV -->

      <ul style="list-style-type: none; margin: 0; padding: 0;">
        <li style="display: inline; float: left; padding-left: 4%;"><a href="index.html"> <img style="height: 100px; width: 170px;" src="assets/images/logo.png"> </a></li>
        <li ><a href="help.html"> Help </a></li>
        <li  ><a href="about.html"> About </a></li>
      </ul>
    

  
<!-- NAV End -->



	<h1>DARZI FORM</h1>
	<form action="login.php " method="post">
     <div>
    	<label for="name">Name : </label>
        <input type="text" id="name" name="name" placeholder="Enter your name " required>
    	&emsp;
    	<label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone"
           placeholder="xxxx-xxxxxxx" pattern=".{11,11}" required title="enter accurate phone Number"  
           required />
     </div>
     <br>
    <div>
     	<label for="email"> Email Address : </label>
        <input type="email" id="email" name="email" placeholder="Enter valid email" required>
     	&emsp;
     	<label>Set Password : </label>
        <input type="password" name="password" id="password" placeholder="set your password" pattern=".{5,10}" required title="5 to 10 characters">

     </div>
    <br>
    <div>
    <label>Select Gender</label>	
    <input type="radio" name="gender" value="male"> Male
    <input type="radio" name="gender" value="female"> Female
     &emsp;
     &emsp;
     &emsp;
     <label>Year of Experience: </label><select name="yop">
     	 	<option>Experience</option>
     	 	<option>1</option>
     	 	<option>2</option>
     	 	<option>3</option>
     	 	<option>4</option>
     	 	<option>5</option>
     	 	<option>6</option>
     	 	<option>7</option>
     	 	<option>8</option>
     	 	<option>9</option>
     	 	<option>10</option>
     	 	<option>11</option>
     	 	<option>12</option>
     	 	<option>13</option>
     	 	<option>14</option>
     	 	<option>15</option>
     	 
     	 </select>
     </div>	
      <div>
     	<p>Address</p>
        <textarea name="address" rows="4" cols="75">
        </textarea>
     </div>
     <br>
     

     <p>I agree to the terms and condtions.<input type="checkbox" name="agree">
 </p>  
    
<button type="submit" name="loginbutton">Submit</button>
</form>
</body>
</html>