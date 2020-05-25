<?php
include_once('database.php');
include_once('Workspace.php');
class viewuser extends user
{
    public function showallusers()
    {
        $Datas = $this->getworkspacedata();

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



    public function View_Index()
    {
        $Datas = $this->getworkspacedata() ;
        {
      foreach ($Datas as $data) {
          $send =  $data['name'];
          $usnam = $data['Username'];
          echo " 
	 		<div class=' d-inline'>

				<!-- Service -->
				<div  class='col-lg-4 col-md-6 service_col magic_fade_in d-inline-block' style='margin-top:20px ; '>
					<div class='service d-flex flex-column align-items-center justify-content-start text-center trans_200'>
						<div class='service_icon'><img class='svg' src='images/icon_4.svg' ></div>
	 		<div ><h3>".$data['name']."</h3></div>
			<div >
			<p><b>PRICE</b> : " .$data['price']."</p>
			<p><b>LOCATION</b> : ".$data['location']."</p>
			<p><b>About Us</b> : ".$data['description']."</p>
			</div>
			<div class='service_button trans_200'><a href='BOOK.php?send=$send'>Book Now!</a></div>
					</div>
				</div>
				</div>
			";
      }
        }
	}
	public function dropdown($workspace)
    {
        $Datas = $this->getworkspacetime($workspace) ;
        if ($Datas != null) {
            echo "<div class='row'>
					<div class='col-lg-10 offset-lg-3'>
						<form method='POST'>
							<div class='dropdown'>
								<div class='select'>
							 <select name='Book'> ";

            foreach ($Datas as $data) {
                echo "
	  		
	  	       <option>
	  	       ".$data['room_name']."</option>
	  	       <option  disabled> <p> <div style='color:white;  text-align: left;'>- <b> Date : </b> ".$data['date']." - <b> Free from :  </b> ".$data['from_time']."  - <b> Free to : </b>  ".$data['to_time']."<div></p>		    </option>	

	  	";
            }
            echo "</select>
				</div>
				<input type='hidden' value='0' name='approve'>
				<input type='submit' class='submit' ' name='submit'>
				</div>
				</form> ";
        } else {
            echo "
	  	       <option name='Book'>
	  	          this workspace has not available rooms
	  	      </option>			    
	  	";
        }
    }
}




?>

