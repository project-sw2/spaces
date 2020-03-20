<?php
include_once ('connect.php');
class user  extends connection
{
	

	public function logsys($Email , $password)
	{
	 
	 $result = $this->Connect()->query($sql);
	 $numrows = $result->num_rows;
	 $row = $result->fetch_assoc();
	 if ($numrows > 0  && $row['groupid'] == 0) {
	 	header('location: profile.php');
	 }elseif ($numrows > 0  && $row['groupid'] == 1) {
	 	header('location: WSpaceprofile.php');
	 }elseif ($numrows > 0  && $row['groupid'] == 2) {
	 	header('location: userprofile.php');
	 }
	 else
	 {
	 	header('location: login.php');
	 }
	 
	}

	public function signup($email , $password ,$groupid )
	{
		$sql = "INSERT INTO  workspaces(email , password , groupid) VALUES ('$email' , '$password' , '$groupid')"  ;
		 $result = $this->Connect()->query($sql);
		 header('location: index.php');
	
	}
}

?>