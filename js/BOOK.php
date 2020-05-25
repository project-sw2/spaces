<?php
session_start();
include_once('classes/showdata.php');
include_once('classes/User.php');
include_once('classes/Database.php');
include_once ('classes/session.php');
$show = new viewuser();
$workspace = $_GET['send'];
$coll = new  session();
$info = $coll->retuningdata($_SESSION['admin']);
$collector = new user();


if(isset($_POST['Book']))
{
   $room_name = $_POST['Book'];
   $username = $_SESSION['admin']; 
   $data =  $collector->selectTimedata($room_name);
   $room_id = $data['id'];
   $approve =$_POST['approve'];
   $booker = new userProf();
   $Usname = $_GET['send'];
   $booker->BookFrom($room_id , $username , $room_name,$approve,$Usname);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>SpaceS</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="HostSpace template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<style>

.dropdown .select{
  width: 120%;
  background:url('arrow.png') no-repeat;
  background-position:80% center;
}

.dropdown .select select{
  background: transparent;
  line-height: 1;
  border: 1px solid #1EEFC5;
  padding: 20px;
  border-radius: 5px;
  width: 50%;
  position: relative;
  z-index: 10;
  font-size: 1.3em;
  color: #1EEFC5;
}
.dropdown .submit  
{
  background: #1EEFC5;
  line-height: 1;
  border: 1px solid #1EEFC5;
  margin-top: 10px;
  margin-left: 40px;
  padding: 10px;
  border-radius: 5px;
  width: 50%;
  position: relative;
  z-index: 10;
  font-size: 1.3em;
  color: white;
}
</style>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header trans_400">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start trans_400">
						<div class="logo"><a href="index.php"><span>SpaceS</span></a></div>
						<nav class="main_nav ml-auto mr-auto">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li><a href="index.php">Home</a></li> 			
              					<li class="active"><a href="WorkSpaces.php">WorkSpaces</a></li>
								<li><a href="aboutUs.php">About us</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</nav>
						
								<?php if (!isset($_SESSION['admin'])) {
								echo "	<div class='log_reg'>
							<div class='log_reg_content d-flex flex-row align-items-center justify-content-start'>
									<div class='login log_reg_text'><a href='login.php'>Login</a></div>
								<div class='register log_reg_text'><a href='Signupredirect.php'>Register</a></div>
								</div>
								</div>
								";}
							else
							{
							echo "
							 <div class='log_reg'>
							 <div class='log_reg_content d-flex flex-row align-items-center justify-content-start'>
								<div class='register log_reg_text'><a href='classes/logout.php'>logout</a></div>
								</div>
								</div>	
								"; 
							}
							?>
								
						<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Home -->

	<div class="home">
		<div class="home_background"></div>
		<div class="background_image background_city" style="background-image:url(images/city.png)"></div>
		<div class="cloud cloud_1"><img src="images/cloud.png" alt=""></div>
		<div class="cloud cloud_2"><img src="images/cloud.png" alt=""></div>
		<div class="cloud cloud_3"><img src="images/cloud_full.png" alt=""></div>
		<div class="cloud cloud_4"><img src="images/cloud.png" alt=""></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title">Book Your Comfort Now</div>
							<div class="home_text">you are now booking from </div>
						</div>
					</div>
				</div>
				
							   <?php $show->dropdown($workspace); ?>

					</div>
			</div>
		</div>
	</div>


<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
