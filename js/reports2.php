<?php
session_start();
include_once ('classes/session.php');
include_once ('classes/workspace.php');
include_once ('classes/showdata.php');
$collector = new  session();
$data = $collector->retuningdata($_SESSION['admin']);
$handler = new WSPACEPROF();

if(isset($_POST['report']))
{
	$username = $_SESSION['admin'];
	$report =  $_POST['report'];
	$handler->reports($username , $report);
}
else
{
	//;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>WorkSpace|Profile</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="HostSpace template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/blog.css">
<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/workspace.css" >

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="super_container">

	<!-- Header -->

  <header class="header trans_400">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start trans_400">
						<div class="logo"><a href=""><span>SpaceS</span></a></div>
						<nav class="main_nav ml-auto mr-auto">
							<ul class="d-flex flex-row align-items-center justify-content-start">
				                <li ><a href="WSpaceProfile.php">Dashboard</a></li>
								<li ><a href="reports.php">Approval</a></li>
								<li class="active"><a href="reports2.php">reports</a></li>
							</ul>
						</nav>
						<div class="log_reg">
							<div class="log_reg_content d-flex flex-row align-items-center justify-content-start">
								<div class="login log_reg_text"><a href="WSpaceProfile.php"><?php echo $data['name']; ?></a></div>
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
		<div class="background_image background_city" style="background-image:url(images/city_4.png)"></div>
		<div class="cloud cloud_3"><img src="images/cloud_full_3.png" alt=""></div>
		<div class="cloud cloud_4"><img src="images/cloud.png" alt=""></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title"><?php echo $_SESSION['admin']; ?></div>
							<div class="breadcrumbs">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li><a href="WSpaceProfile.php">Workspace</a></li>
									<li>Reports</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


  <div class="card" style="margin-top: 25px; margin-right: 80px; margin-left: 80px ; margin-bottom: 25px;">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center; color: darkblue">Send Report to admin</h5>
       <form method="post"  style="margin-top: 25px; margin-right: 80px; margin-left: 80px ; margin-bottom: 25px;">
			<label for="exampleFormControlTextarea1">Type A Report</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="report"></textarea>
			<input type="submit" name="submit" value="send report!" class="form-control">
       </form>
  </div>
 </div>

  
	<!-- Footer -->

	<footer class="footer magic_fade_in">
		<div class="container">
			<div class="row">

				<div class="col-lg-6 footer_col magic_fade_in">
					<div class="footer_about">
						<div class="footer_logo">Host<span>Space</span></div>
						<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
						<div class="footer_text">
							<p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis.</p>
						</div>
						<div class="contact_container">
							<form action="#" id="contact_form" class="contact_form">
								<div class="row">
									<div class="col-md-6">
										<input type="text" class="contact_input" placeholder="Your Name" required="required">
									</div>
									<div class="col-md-6">
										<input type="email" class="contact_input" placeholder="Your e-mail" required="required">
									</div>
								</div>
								<div>
									<textarea class="contact_input contact_textarea" placeholder="Message" required="required"></textarea>
								</div>
								<button class="contact_button">Send</button>
							</form>
						</div>
					</div>
				</div>

				<div class="col-lg-6 footer_col">
					<div class="footer_links">
						<div class="row">
							<div class="col-sm-6 footer_list_col magic_fade_in">
								<div class="footer_list_container">
									<div class="footer_list_title">Hosting Options</div>
									<ul class="footer_list">
										<li><a href="#">Web Hosting</a></li>
										<li><a href="#">WordPress Hosting</a></li>
										<li><a href="#">VPS Hosting</a></li>
										<li><a href="#">Cloud Server</a></li>
										<li><a href="#">Reseller Package</a></li>
										<li><a href="#">Dedicated Hosting</a></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-6 footer_list_col magic_fade_in">
								<div class="footer_list_container">
									<div class="footer_list_title">Domains</div>
									<ul class="footer_list">
										<li><a href="#">Buy a Domain</a></li>
										<li><a href="#">Premium Domain Names</a></li>
										<li><a href="#">Web Hosting</a></li>
										<li><a href="#">Transfer Your Domain</a></li>
										<li><a href="#">Domain Marketplace</a></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-6 footer_list_col magic_fade_in">
								<div class="footer_list_container">
									<div class="footer_list_title">Resellers</div>
									<ul class="footer_list">
										<li><a href="#">VPS Hosting</a></li>
										<li><a href="#">Cloud Server</a></li>
										<li><a href="#">Reseller Package</a></li>
										<li><a href="#">Dedicated Hosting</a></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-6 footer_list_col magic_fade_in">
								<div class="footer_list_container">
									<div class="footer_list_title">Support</div>
									<ul class="footer_list">
										<li><a href="#">Buy a Domain</a></li>
										<li><a href="#">Premium Domain Names</a></li>
										<li><a href="#">Web Hosting</a></li>
									</ul>
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
