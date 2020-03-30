<?php

class connection
{
	Private $Servename;
	Private $username ;
	Private $password ;
	Private $dbname;

	public function Connect()
	{
	  $this->Servename = "localhost";
	  $this->username = "root";
	  $this->password  = "";
	  $this->dbname = "spaces";

	  $conn = new mysqli($this->Servename , $this->username , $this->password , $this->dbname);

	  if ($conn->connect_error) {
    	printf("Connect failed: %s\n", $conn->connect_error);
    	exit();
    }
	    else
	    {
	    	return $conn;
	    }

	  
	}
}


?>