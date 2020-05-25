<?php

/**
 *  
 */
include_once('connect.php');
class session extends connection 
{
	  public function sessionmaker($Email , $password)
	{
	 $sql = "SELECT * FROM workspaces WHERE email = '$Email' AND password = '$password'";
	 $result = $this->Connect()->query($sql);
	 $numrows = $result->num_rows;
	  if($numrows > 0)
	  {
	  	while ($row = $result->fetch_assoc()) {
	  		$data = $row['Username'] ;
	  	}
	  
	  	return $data;
	  }
	}

	public function retuningdata($sessionname)
	{
		$sql = "SELECT * FROM workspaces WHERE Username = '$sessionname'";
	    $result = $this->Connect()->query($sql);
	    $numrows = $result->num_rows;
	    if($numrows > 0)
	  {
	  	$row = $result->fetch_assoc();
	  	return $row;
	  }
	  else 
	  {
	  	return false ;
	  }
	}

}

?>