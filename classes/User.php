<?php
/**
 *
 */
include_once('connect.php');
include_once('Database.php');
class userPROF extends user
{
    public function Editprofile($email, $password, $name, $NAMEINDB)
    {
        $sql = "UPDATE workspaces SET email = '$email' , password = '$password',name = '$name'
		 WHERE Username = '$NAMEINDB' ";

        $result = $this->Connect()->query($sql);
    }
    
    public function BookFrom($room_id, $username, $room_name, $approve, $Usname)
    {
        $sqls = "SELECT * FROM booking WHERE room_name = '$room_name'";
        $results = $this->Connect()->query($sqls);
        $row = $results->fetch_assoc();

            
        $sql= "INSERT INTO booking(room_id,user_name,room_name,Book_approve,workspacename) 
					VALUES('$room_id' , '$username' ,'$room_name' , '$approve','$Usname')
			";
        $result = $this->Connect()->query($sql);

        $sql2 = "UPDATE times SET status = 0 WHERE room_name = '$room_name' ";
        $change = $this->Connect()->query($sql2);
	}
	
	public function showrequests($username)
	{
		$Datas = $this->getrequestsus($username);
		if($Datas!=null)
		{
	  foreach ($Datas as $data) {
	  echo "

		  	<tbody>
		    <tr>
		      <th scope='col'>".$data['room_name']."</th>
		      "; 
		      if($data['Book_approve'] == 0)
		      {
		     echo "<th scope='col'>not approved yet</th>";
		      }
		      else
		      {
		      echo "<th scope='col'>approved </th>";
			  }
			 echo "
		    <th scope='col'> 
		    <form method = 'POST'>
		     <input type='hidden' value='".$data['room_name']."' name='hidden'>
		     <input type='submit' class='btn btn-danger' Value='Delete this book' name='delte'>
            </form>
		    </th>
		    </tr>
		</tbody>
    		";
	  }
	  }
	  else 
	  {
	  	echo "you have no booking requests ";
	  }
	  if(isset($_POST['delte']) && $Datas != NULL)
	  {
	  	$name = $data['room_name'];
	  	$this->delete_request($name);
	  	echo "Your request is deleted";
	  }
	  else
	  {
	  	echo "";
	  }
	}
}
