<?php 
include_once ('database.php');
include_once ('Workspace.php');
class viewuser  extends user
{

	
	
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
			<div class='service_button trans_200'><a href='#.php?send=$send'>Book Now!</a></div>
					</div>
				</div>
				</div>
			";

		  }
		}

	}

	

}


?>

