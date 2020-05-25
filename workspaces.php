<?php
session_start();
include_once('classes/showdata.php');
include_once('classes/session.php');

$coll = new  session();
$info = $coll->retuningdata($_SESSION['admin']);
$view = new viewuser();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>WorkSpaces</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="HostSpace template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/services.css">
<link rel="stylesheet" type="text/css" href="styles/services_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

  <header class="header trans_400">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start trans_400">
						<div class="logo"><a href="#"><span>SpaceS</span></a></div>
						<nav class="main_nav ml-auto mr-auto">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li><a href="Userprofile.php">profile</a></li>
                                <li class="active" ><a href="Workspaces.php">WorkSpaces</a></li>
							
							</ul>
						</nav>

						<div class="log_reg">
							<div class="log_reg_content d-flex flex-row align-items-center justify-content-start">
							<div class="login log_reg_text"><a href="UserProfile.php"><?php echo $info['name'] ?> </a></div>
							<div class="register log_reg_text"><a href="classes/Logout.php">Logout</a></div>
							</div>
						</div>
						<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Home -->

	<div class="home">
		<div class="home_background"></div>
		<div class="background_image background_city" style="background-image:url(images/city_3.png)"></div>
		<div class="cloud cloud_1"><img src="images/cloud.png" alt=""></div>
		<div class="cloud cloud_2"><img src="images/cloud.png" alt=""></div>
		<div class="cloud cloud_3"><img src="images/cloud_full_2.png" alt=""></div>
		<div class="cloud cloud_4"><img src="images/cloud.png" alt=""></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">WorkSpaces</div>
							<div class="breadcrumbs">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li><a href="Userprofile.php">profile</a></li>
									<li>WorkSpaces</li>
								</ul>
							</div>
						</div>
					</div> 	
				</div>
			</div>
		</div>
	</div>
				
						<?php
                        if (isset($_POST ['home_search'])) {
                            $view->search_Index($_POST['home_search']);
                        } else {
                            $view->view_index();
                        }
                        
                        ?>
						




<footer class="footer magic_fade_in">
		<div class="container">
			<div class="row">

				<div class="col-lg-6 footer_col magic_fade_in">
					<div class="footer_about">
						<div class="footer_logo">About<span>US</span></div>
						<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by crona team <i class="fa fa-heart-o" aria-hidden="true"></i>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
						<div class="footer_text">
							<p>Corona Team</p>
							<p >Ahmed Khaled Badawy</p>
                            <p>Mohamed Aziz</p>
                            <p>Mohamed Abdelrhman Yassen</p>
                            <p >Saleh Mohamed Saleh</p>
                            <p >Doaa El-Gendy</p>
						</div>
						
						
					</div>
				</div>

				<div class="col-lg-6 footer_col">
					<div class="footer_links">
						<div class="row">
							<div class="col-sm-6 footer_list_col magic_fade_in">
								<div class="footer_list_container">
									<div class="footer_list_title">CONTACT</div>
									<ul class="footer_list">
										<li><a>Corona Team</a></li>
										<li><a >Email : ahmedbadawy0003@gmail.com</a></li>
										<li><a >Email : mohamed.aziz.4680@gmail.com</a></li>
										<li><a>Email : muhammedabdurhamn@gmail.com</a></li>
										<li><a >Email : saleh.mohamed9900@gmail.com</a></li>
										<li><a>Email : Doaaelgindy76@gmail.com</a></li>

									</ul>
								</div>
							</div>
							
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</footer>
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
<script src="js/blog.js"></script>
<!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>
</body>
</html>
