<?php
include_once('connect.php');
class user  extends connection
{
	
	public function logsys($Email , $password)
	{
		$sql = "SELECT * FROM workspaces WHERE email = '$Email' AND password = '$password'" ;
			 $result = $this->Connect()->query($sql);
			 $numrows = $result->num_rows;
			 $row = $result->fetch_assoc();
			 if ($numrows > 0  && $row['groupid'] == 0) {
			 	header('location: profile.php');
			 }elseif ($numrows > 0  && $row['groupid'] == 1 && $row['regstatus'] == 1) {
			 	header('location: WSpaceprofile.php');
			 }elseif ($numrows > 0  && $row['groupid'] == 2 && $row['regstatus'] == 1) {
			 	header('location: userprofile.php');
			 }
			 else
			 {
			 	header('location: login.php');
			 }
	}


	public function signup( $name , $email , $password ,$groupid , $username )
	{
		$regstatus = 1 ;
		$sql = "INSERT INTO  workspaces(name, email , password , groupid,Username ,regstatus) VALUES ('$name','$email' , '$password' , '$groupid','$username' , '$regstatus')"  ;
		$result = $this->Connect()->query($sql);
		 header('location: login.php');
	
	}

	public function signupWorkSpace( $name ,$email , $password ,$groupid , $username ,$description , $price , $location)
	{
		$regstatus = 1 ;
		$sql = "INSERT INTO  workspaces(name,email , password , groupid , Username ,regstatus , description , price , location) 
		VALUES ('$name','$email' , '$password' , '$groupid','$username' , '$regstatus' , '$description' , '$price' , '$location')"  ;
		$result = $this->Connect()->query($sql);
		 header('location: login.php');
	
	}


	public function getworkspacedata()
	{
		$sql = "SELECT * FROM workspaces WHERE groupid = 1 ";
	    $result = $this->Connect()->query($sql);
	    $numrows = $result->num_rows;
	    if($numrows > 0)
	  {
	  	while ($row = $result->fetch_assoc()) {
	  		$data[] = $row ;
	  }
	  return $data;
	  }

	}

	
}



?>

