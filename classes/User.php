<?php
/**
 * 
 */
include_once ('connect.php');
include_once ('Database.php');
class  userPROF extends user
{

public function Editprofile($email,$password,$name,$NAMEINDB)
	{
		$sql = "UPDATE workspaces SET email = '$email' , password = '$password',name = '$name'
		 WHERE Username = '$NAMEINDB' ";

	  	$result = $this->Connect()->query($sql);

	}
	

	
 
}



?>