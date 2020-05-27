<<<<<<< HEAD
<?php
include_once ('classes/database.php');
include_once('classes/Connect.php');
$signup = new user();
$db = new connection();
if(isset($_POST ['email_']) &&  isset($_POST['password_']))
{
		$name = $_POST['name_'];
		$email = $_POST['email_'];
		$password =$_POST['password_'];
		$groupid = $_POST['groupid'];
		$username = $_POST['username_'];
		$description = $_POST['description_'];
		$price = $_POST['price_'];
		$location = $_POST['location_'];
		if($email != "" && $password != ""  && $username != "")
				{
		$signup->signupWorkSpace($name ,$email, $password ,$groupid,$username , $description , $price , $location);
	}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>SignUp</title>
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
								
							</ul>
						</nav>
						<div class="log_reg">
							<div class="log_reg_content d-flex flex-row align-items-center justify-content-start">
								<div class="login log_reg_text"> <a href="login.php">Login</a></div>
								<div class="register log_reg_text"><a href="Signupredirect.php">Register</a></div>
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
		<div class="background_image background_city" style="background-image:url(images/city.png)"></div>
		<div class="cloud cloud_1"><img src="images/cloud.png" alt=""></div>
		<div class="cloud cloud_2"><img src="images/cloud.png" alt=""></div>
		<div class="cloud cloud_3"><img src="images/cloud_full.png" alt=""></div>
		<div class="cloud cloud_4"><img src="images/cloud.png" alt=""></div>
		<div class="home_container">
			<div class="container">
				<h3  class="d-flex justify-content-center h-100" style="color:white">Sign Up | WorkSpace</h3>
				<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-body">
				<form method="POST">

					<div class="input-group form-group">
						<div class="input-group-prepend">
							
						</div>
						<input type="text" class="form-control" placeholder="Name" name="name_">
						
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							
						</div>
						<input type="text" class="form-control" placeholder="Email" name="email_">
						
					</div>
												
					<div class="input-group form-group">
						<div class="input-group-prepend">
							
						</div>
						<input type="password" class="form-control" placeholder="password" name="password_">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							
						</div>
						<input type="username" class="form-control" placeholder="username" name="username_">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							
						</div>
						<input type="text" class="form-control" placeholder="description" name="description_">
					</div>


					<div class="input-group form-group">
						<div class="input-group-prepend">
							
						</div>
						<input type="text" class="form-control" placeholder="price" name="price_">
					</div>


					<div class="input-group form-group">
						<div class="input-group-prepend">
							
						</div>
						<input type="text" class="form-control" placeholder="location" name="location_">
					</div>

				<input type="hidden" name="groupid" value="1">
					<div class="form-group">
						<input type="submit" value="Signup" class="btn float-right login_btn">
					</div>

				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Do you have account already<a href="login.php">Sign In</a>
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
=======
<?php
include_once ('classes/database.php');
include_once('classes/Connect.php');
$signup = new user();
$db = new connection();
if(isset($_POST ['email_']) &&  isset($_POST['password_']))
{
		$name = $_POST['name_'];
		$email = $_POST['email_'];
		$password =$_POST['password_'];
		$groupid = $_POST['groupid'];
		$username = $_POST['username_'];
		$description = $_POST['description_'];
		$price = $_POST['price_'];
		$location = $_POST['location_'];
		if($email != "" && $password != ""  && $username != "")
				{
		$signup->signupWorkSpace($name ,$email, $password ,$groupid,$username , $description , $price , $location);
	}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>SignUp</title>
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
								
							</ul>
						</nav>
						<div class="log_reg">
							<div class="log_reg_content d-flex flex-row align-items-center justify-content-start">
								<div class="login log_reg_text"> <a href="login.php">Login</a></div>
								<div class="register log_reg_text"><a href="Signupredirect.php">Register</a></div>
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
		<div class="background_image background_city" style="background-image:url(images/city.png)"></div>
		<div class="cloud cloud_1"><img src="images/cloud.png" alt=""></div>
		<div class="cloud cloud_2"><img src="images/cloud.png" alt=""></div>
		<div class="cloud cloud_3"><img src="images/cloud_full.png" alt=""></div>
		<div class="cloud cloud_4"><img src="images/cloud.png" alt=""></div>
		<div class="home_container">
			<div class="container">
				<h3  class="d-flex justify-content-center h-100" style="color:white">Sign Up | WorkSpace</h3>
				<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-body">
				<form method="POST">

					<div class="input-group form-group">
						<div class="input-group-prepend">
							
						</div>
						<input type="text" class="form-control" placeholder="Name" name="name_">
						
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							
						</div>
						<input type="Email" class="form-control" placeholder="Email" name="email_">
						
					</div>
												
					<div class="input-group form-group">
						<div class="input-group-prepend">
							
						</div>
						<input type="password" class="form-control" placeholder="password" name="password_">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							
						</div>
						<input type="username" class="form-control" placeholder="username" name="username_">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							
						</div>
						<input type="text" class="form-control" placeholder="description" name="description_">
					</div>


					<div class="input-group form-group">
						<div class="input-group-prepend">
							
						</div>
						<input type="text" class="form-control" placeholder="price" name="price_">
					</div>


					<div class="input-group form-group">
						<div class="input-group-prepend">
							
						</div>
						<input type="text" class="form-control" placeholder="location" name="location_">
					</div>

				<input type="hidden" name="groupid" value="1">
					<div class="form-group">
						<input type="submit" value="Signup" class="btn float-right login_btn">
					</div>

				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Do you have account already<a href="login.php">Sign In</a>
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
>>>>>>> First commit
