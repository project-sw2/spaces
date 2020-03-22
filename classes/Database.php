<?php
include_once('connect.php');
class user  extends connection
{
	
	


	public function signup( $name , $email , $password ,$groupid , $username )
	{
		$regstatus = 1 ;
		$sql = "INSERT INTO  workspaces(name, email , password , groupid,Username ,regstatus) VALUES ('$name','$email' , '$password' , '$groupid','$username' , '$regstatus')"  ;
		$result = $this->Connect()->query($sql);
		 header('location: index.php');
	
	}

	public function signupWorkSpace( $name ,$email , $password ,$groupid , $username ,$description , $price , $location)
	{
		$regstatus = 1 ;
		$sql = "INSERT INTO  workspaces(name,email , password , groupid , Username ,regstatus , description , price , location) 
		VALUES ('$name','$email' , '$password' , '$groupid','$username' , '$regstatus' , '$description' , '$price' , '$location')"  ;
		$result = $this->Connect()->query($sql);
		 header('location: index.php');
	
	}

}
	
?>

