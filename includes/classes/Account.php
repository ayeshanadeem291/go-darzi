<?php
class Account{
private $con;

public function __construct($con)
	{   $this->con=$con;
       
	}


  public function insertUserDetails($name,$phone,$password,$email,$gender,$yop,$address)
	{   

		$result=mysqli_query($this->con,"INSERT INTO darzii VALUES('','$name','$phone','$password','$email','$gender','$yop','$address')");
         
         return $result;

	}
}

?>