<?php
include_once ('connect.php');
class user  extends connection
{
	
	public function getallusers()
	{
	  $sql = "SELECT * FROM workspaces";
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

	public function logsys($Email , $password)
	{
	 $sql = "SELECT * FROM workspaces WHERE email = '$Email' AND password = '$password'" ;
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
	
	public function search($name)
	{
		$sql = "SELECT * FROM workspaces WHERE groupid = 1 AND name = '$name' ";
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