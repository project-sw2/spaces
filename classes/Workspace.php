<<<<<<< HEAD
<<<<<<< HEAD
<?php
/**
 * 
 */
include_once ('connect.php');
class  WSPACEPROF extends connection
{
	
	public function Editprofile($email, $password , $price , $location , $description , $username )
	{
		$sql = "UPDATE workspaces SET email = '$email' , password = '$password' , price = '$price' , location = '$location' , description = '$description' WHERE Username = '$username' ";

	  	$result = $this->Connect()->query($sql);

	}
	public function timetable($userid)
	{
		$sql="SELECT * FROM times INNER JOIN workspaces ON times.times_fk = workspaces.id WHERE workspaces.id = '$userid' ";
		$result = $this->Connect()->query($sql);
	    $numrows = $result->num_rows;
	    if($numrows >= 0)
	  {
	  	while ($row = $result->fetch_assoc()) {
	  		$data[] = $row ;
	  			  return $data;
	  }


	  }
	  else {echo "";}
	}


	public function showalltables($userid)
	{
	  $Datas = $this->timetable($userid);
	  if($Datas != NULL){
	  foreach ($Datas as $data) {
	  	echo "<tbody>";
	  	echo "<tr>";
	  	echo " <th scope='row'>".$data['room_name']."</th>";
	  	echo " <td>".$data['date']."</td>";
	  	echo " <td>".$data['from_time']."</td>";
	  	echo " <td>".$data['to_time']."</td>";
	  	if($data['status'] == 1)
	  	{
	  		echo " <td> available </td>";
	  	}
	  	else
	  	{
	  		echo " <td> un-available </td>";
	  	}
	  	echo "</tr>";
	  	echo "</tbody>";
	  }
	 }
	 else
	 {
	 	echo "No free times assigned";
	 }
	}
	
	public function addtime( $times_fk, $room_name ,  $date ,$from , $to , $status)
	{
		$sql =
	   "INSERT INTO times (times_fk, room_name , date , from_time , to_time , status)
	    VALUES ('$times_fk' , '$room_name' , '$date' ,'$from' , '$to' , '$status')"; 
	  	$result = $this->Connect()->query($sql);
	}


}



=======
=======
>>>>>>> First commit
<?php
/**
 * 
 */
include_once ('connect.php');
class  WSPACEPROF extends connection
{
<<<<<<< HEAD
	
	public function Editprofile($email, $password , $price , $location , $description , $username )
	{
		$sql = "UPDATE workspaces SET email = '$email' , password = '$password' , price = '$price' , location = '$location' , description = '$description' WHERE Username = '$username' ";

	  	$result = $this->Connect()->query($sql);

	}
	public function timetable($userid)
	{
		$sql="SELECT * FROM times INNER JOIN workspaces ON times.times_fk = workspaces.id WHERE workspaces.id = '$userid' ";
		$result = $this->Connect()->query($sql);
	    $numrows = $result->num_rows;
	    if($numrows >= 0)
	  {
	  	while ($row = $result->fetch_assoc()) {
	  		$data[] = $row ;
	  			  return $data;
	  }


	  }
	  else {echo "";}
	}


	public function showalltables($userid)
	{
	  $Datas = $this->timetable($userid);
	  if($Datas != NULL){
	  foreach ($Datas as $data) {
	  	echo "<tbody>";
	  	echo "<tr>";
	  	echo " <th scope='row'>".$data['room_name']."</th>";
	  	echo " <td>".$data['date']."</td>";
	  	echo " <td>".$data['from_time']."</td>";
	  	echo " <td>".$data['to_time']."</td>";
	  	if($data['status'] == 1)
	  	{
	  		echo " <td> available </td>";
	  	}
	  	else
	  	{
	  		echo " <td> un-available </td>";
	  	}
	  	echo "</tr>";
	  	echo "</tbody>";
	  }
	 }
	 else
	 {
	 	echo "No free times assigned";
	 }
	}
	
	public function addtime( $times_fk, $room_name ,  $date ,$from , $to , $status)
	{
		$sql =
	   "INSERT INTO times (times_fk, room_name , date , from_time , to_time , status)
	    VALUES ('$times_fk' , '$room_name' , '$date' ,'$from' , '$to' , '$status')"; 
	  	$result = $this->Connect()->query($sql);
	}
=======
    
    public function Editprofile($email, $password , $price , $location , $description , $username )
    {
        $sql = "UPDATE workspaces SET email = '$email' , password = '$password' , price = '$price' , location = '$location' , description = '$description' WHERE Username = '$username' ";

        $result = $this->Connect()->query($sql);

    }
    public function timetable($userid)
    {
        $sql="SELECT * FROM times INNER JOIN workspaces ON times.times_fk = workspaces.id WHERE workspaces.id = '$userid' ";
        $result = $this->Connect()->query($sql);
        $numrows = $result->num_rows;
        if($numrows >= 0)
      {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row ;

      }
      return $data;

      }
      else {echo "";}
    }


      public function showbooking($username)
  {
    $sql = "SELECT * FROM booking WHERE workspacename = '$username'";
     $result = $this->Connect()->query($sql);
      $numrows = $result->num_rows;
      if($numrows >= 0)
    {
      while ($row = $result->fetch_assoc()) {
        $data[] = $row ;
    }
    return $data;
    }
    else{
      echo "sorry,";
    }
  }
    

    public function showalltables($userid)
    {
      $Datas = $this->timetable($userid);
      if($Datas != NULL){
      foreach ($Datas as $data) {
        echo "<tbody>";
        echo "<tr>";
        echo " <th scope='row'>".$data['room_name']."</th>";
        echo " <td>".$data['date']."</td>";
        echo " <td>".$data['from_time']."</td>";
        echo " <td>".$data['to_time']."</td>";
        if($data['status'] == 1)
        {
            echo " <td> available </td>";
        }
        else
        {
            echo " <td> un-available </td>";
        }
        echo "</tr>";
        echo "</tbody>";
      }
     }
     else
     {
        echo "No free times assigned";
     }
    }
    
    public function addtime( $times_fk, $room_name ,  $date ,$from , $to , $status)
    {
        $sql =
       "INSERT INTO times (times_fk, room_name , date , from_time , to_time , status)
        VALUES ('$times_fk' , '$room_name' , '$date' ,'$from' , '$to' , '$status')"; 
        $result = $this->Connect()->query($sql);
    }

 public function showallbook($username)
  {
    $Datas = $this->showbooking($username);
    if($Datas != NULL){
    foreach ($Datas as $data) {
      echo "<tbody>";
      echo "<tr>";
      echo " <th scope='row'>".$data['room_id']."</th>";
      echo " <td>".$data['room_name']."</td>";
      echo " <td>".$data['user_name']."</td>";

 }
}
   else
   {
    echo "No rooms here";
   }

   if(isset($_POST['approve']))
    {
      $room_name = $data['room_name'];
      $this->approve_workspace($room_name);
      echo "room : ".$data['room_name']." has been approved";
    }
     if(isset($_POST['disapprove']))
    {
      $room_name = $data['room_name'];
      $this->disapprove_workspace($room_name);
      echo "room : ".$data['room_name']." has been disapprove";
    }
    else
    {
      //
    }
  }
    
>>>>>>> First commit


}



<<<<<<< HEAD
>>>>>>> First commit
=======
>>>>>>> First commit
?>