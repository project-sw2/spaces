<?php
include_once ('database.php');
class Admin  extends user
{

	public function Editprofile($email,$password,$name,$NAMEINDB)
	{
		$sql = "UPDATE workspaces SET email = '$email' , password = '$password',name = '$name'
		 WHERE Username = '$NAMEINDB' ";

	  	$result = $this->Connect()->query($sql);

    }
	public function countworkspaces($groupid)
	{
		$sql = "SELECT * FROM workspaces WHERE groupid = $groupid ";
		$result = $this->Connect()->query($sql);
		 $numrows = $result->num_rows;
	    if($numrows > 0)
	    {
	    	echo $numrows;
	    }
	}	

	
	
 	//list all workspaces in the database
	public function showallusers()
	{
	  $Datas = $this->getworkspacedata();
		if($Datas!=null)
		{
	  foreach ($Datas as $data) {
	  	echo "<tbody>";
	  	echo "<tr>";
	  	echo " <th scope='row'>".$data['id']."</th>";
	  	echo " <td>".$data['name']."</td>";
	  	echo " <td>".$data['email']."</td>";
	  	echo " <td>".$data['price']."</td>";
	  	echo "</tr>";
	  	echo "</tbody>";
	  }
	}
	else
	{
	echo "no workspaces to view";
	}
	 
	}

	//delete user from system
	
	
	
	// list all users on system and handle them

	public function showallusersonsys()
	{
	  $Datas = $this-> getallusersonly();
		if($Datas!=null)
		{
	  foreach ($Datas as $data) {
	  	echo "<tbody>";
	  	echo "<tr>";
	  	echo " <th scope='row'>".$data['id']."</th>";
	  	echo " <td>".$data['name']."</td>";
	  	echo " <td>".$data['email']."</td>";
	  	echo " <td>".$data['price']."</td>";
	  	echo "</tr>";
	  	echo "</tbody>";
	  }
	}
	else
	{
	echo "no users to view";
	}

	  

	}
	

	}
?>