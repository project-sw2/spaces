<<<<<<< HEAD
<?php
session_start();
include_once ('classes/session.php');
include_once ('classes/workspace.php');
$collector = new  session();
$data = $collector->retuningdata($_SESSION['admin']);
$handler = new WSPACEPROF();

if(isset($_POST ['email']) &  isset($_POST['password']) & isset($_POST['price']) & isset($_POST['location']) & isset($_POST['description']) )
{
	
$email = $_POST['email'];
$password = $_POST['password'];
$price = $_POST['price'];
$location = $_POST['location'];
$description = $_POST['description'];
$handler->Editprofile($email , $password , $price , $location , $description , $_SESSION['admin']);

}
elseif(isset($_POST['AddRoom']) && isset($_POST['date']) && isset($_POST['time_from']) && isset($_POST['time_to']))
{
	$roomname = $_POST['AddRoom'];
	$date = $_POST['date'];
	$from = $_POST['time_from'];
	$to = $_POST['time_to'];
	$status = $_POST['status'];
	$id = $data['id'];
	$handler->addtime($id , $roomname , $date ,$from , $to , $status );
}
else 
{
//do nothing
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
    <style type="text/css">
    	.form-group
    	{
    		margin-left: 400px;
    		margin-right: 400px;
    	}
    </style>
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
				                <li  class="active"><a href="WSpaceProfile.php">Dashboard</a></li>
					
							</ul>
						</nav>
						<div class="log_reg">
							<div class="log_reg_content d-flex flex-row align-items-center justify-content-start">
								<div class="login log_reg_text"><a href="WSpaceProfile.php"><?php echo $data['name']; ?></a></div>
								<div class="register log_reg_text"><a href="classes/logout.php">Logout</a></div>
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
									<li>Dashboard</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!--WorkSpace Profile-->	


<div class="card" style="margin-top: 25px; margin-right: 80px; margin-left: 80px ; margin-bottom: 25px;">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center; color: darkblue">WorkSpace Information</h5>
      <p class="card-text" style="font-weight: bold;"><?php echo "WorkSpace name : " . $data['name']; ?></p>
      <p class="card-text" style="font-weight: bold;"><?php echo "Email : " . $data['email']; ?></p>
      <p class="card-text" style="font-weight: bold;"><?php echo "username : " . $data['Username']; ?></p>
      <p class="card-text" style="font-weight: bold;"><?php echo "location : " . $data['location']; ?></p>
      <p class="card-text" style="font-weight: bold;"><?php echo "price : " . $data['price']; ?></p>
      <p class="card-text" style="font-weight: bold;"><?php echo "description : " . $data['description']; ?></p>
  </div>
</div>


<div class="card" style="margin-top: 25px; margin-right: 80px; margin-left: 80px ; margin-bottom: 25px;">
    <div class="card-body">
      <h5 class="card-title">Manage Rooms</h5>
        <form method="POST">
      
     	 
     	  	<div class="form-group">
        Room name : <input class="form-control" type="text" placeholder="add available room" aria-label="AddRoom" name="AddRoom">
    		</div>
    		<div class="form-group">
        Date : <input class="form-control" type="date"   name="date">
   			 </div>
    		<div class="form-group">
        from : <input class="form-control" type="time"   name="time_from">
    		</div>
    		<div class="form-group">
        To :   <input class="form-control" type="time"   name="time_to">
   			 </div>
         <input type="hidden" name="status" value="1">
         <div class="form-group">
       Submit values : 
       <input type="submit" value="submit" class="form-control"> 
   </div>
       </form>


       <table class="table table-striped">
        <thead>
        <tr>
          <th scope="col">room-name</th>
          <th scope="col">Date</th>
          <th scope="col">from</th>
          <th scope="col">to</th>
          <th scope="col">availability</th>
        </tr>
        <?php 
        $userid = $data['id'];
        $handler->showalltables($userid);
        ?>
    </thead>  
        </table>
  </div>
</div>

<div class="card" style="margin-top: 25px; margin-right: 80px; margin-left: 80px ; margin-bottom: 25px;">
    <div class="card-body">
      <h5 class="card-title">Edit profile</h5>
      <form accept="<?php echo $_SERVER ["PHP_SELF"] ;?>" method="POST">
           <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter new User-name" name="email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
            <small id="emailHelp" class="form-text text-muted">we won't share this with anyone </small>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">price</label>
            <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter new User-name" name="price">
          </div>  

             <div class="form-group">
            <label for="exampleInputEmail1">location</label>
            <input type="textarea" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter new User-name" name="location">
          </div>  

          <div class="form-group">
            <label for="exampleInputEmail1">description</label>
            <input type="textarea" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter new User-name" name="description">
          </div> 
          <button type="submit" class="btn btn-primary" style="width:350px ; margin-left: 400px">Submit</button>
        </form>
  </div>
</div>


	<!-- Footer -->

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
=======
<?php
session_start();
include_once ('classes/session.php');
include_once ('classes/workspace.php');
$collector = new  session();
$data = $collector->retuningdata($_SESSION['admin']);
$handler = new WSPACEPROF();

if(isset($_POST ['email']) &  isset($_POST['password']) & isset($_POST['price']) & isset($_POST['location']) & isset($_POST['description']) )
{
	
$email = $_POST['email'];
$password = $_POST['password'];
$price = $_POST['price'];
$location = $_POST['location'];
$description = $_POST['description'];
$handler->Editprofile($email , $password , $price , $location , $description , $_SESSION['admin']);

}
elseif(isset($_POST['AddRoom']) && isset($_POST['date']) && isset($_POST['time_from']) && isset($_POST['time_to']))
{
	$roomname = $_POST['AddRoom'];
	$date = $_POST['date'];
	$from = $_POST['time_from'];
	$to = $_POST['time_to'];
	$status = $_POST['status'];
	$id = $data['id'];
	$handler->addtime($id , $roomname , $date ,$from , $to , $status );
}
else 
{
//do nothing
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
    <style type="text/css">
    	.form-group
    	{
    		margin-left: 400px;
    		margin-right: 400px;
    	}
    </style>
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
				                <li  class="active"><a href="WSpaceProfile.php">Dashboard</a></li>
					
							</ul>
						</nav>
						<div class="log_reg">
							<div class="log_reg_content d-flex flex-row align-items-center justify-content-start">
								<div class="login log_reg_text"><a href="WSpaceProfile.php"><?php echo $data['name']; ?></a></div>
								<div class="register log_reg_text"><a href="classes/logout.php">Logout</a></div>
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
									<li>Dashboard</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!--WorkSpace Profile-->	


<div class="card" style="margin-top: 25px; margin-right: 80px; margin-left: 80px ; margin-bottom: 25px;">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center; color: darkblue">WorkSpace Information</h5>
      <p class="card-text" style="font-weight: bold;"><?php echo "WorkSpace name : " . $data['name']; ?></p>
      <p class="card-text" style="font-weight: bold;"><?php echo "Email : " . $data['email']; ?></p>
      <p class="card-text" style="font-weight: bold;"><?php echo "username : " . $data['Username']; ?></p>
      <p class="card-text" style="font-weight: bold;"><?php echo "location : " . $data['location']; ?></p>
      <p class="card-text" style="font-weight: bold;"><?php echo "price : " . $data['price']; ?></p>
      <p class="card-text" style="font-weight: bold;"><?php echo "description : " . $data['description']; ?></p>
  </div>
</div>


<div class="card" style="margin-top: 25px; margin-right: 80px; margin-left: 80px ; margin-bottom: 25px;">
    <div class="card-body">
      <h5 class="card-title">Manage Rooms</h5>
        <form method="POST">
      
     	 
     	  	<div class="form-group">
        Room name : <input class="form-control" type="text" placeholder="add available room" aria-label="AddRoom" name="AddRoom">
    		</div>
    		<div class="form-group">
        Date : <input class="form-control" type="date"   name="date">
   			 </div>
    		<div class="form-group">
        from : <input class="form-control" type="time"   name="time_from">
    		</div>
    		<div class="form-group">
        To :   <input class="form-control" type="time"   name="time_to">
   			 </div>
         <input type="hidden" name="status" value="1">
         <div class="form-group">
       Submit values : 
       <input type="submit" value="submit" class="form-control"> 
   </div>
       </form>


       <table class="table table-striped">
        <thead>
        <tr>
          <th scope="col">room-name</th>
          <th scope="col">Date</th>
          <th scope="col">from</th>
          <th scope="col">to</th>
          <th scope="col">availability</th>
        </tr>
        <?php 
        $userid = $data['id'];
        $handler->showalltables($userid);
        ?>
    </thead>  
        </table>
  </div>
</div>

<div class="card" style="margin-top: 25px; margin-right: 80px; margin-left: 80px ; margin-bottom: 25px;">
    <div class="card-body">
      <h5 class="card-title">Edit profile</h5>
      <form accept="<?php echo $_SERVER ["PHP_SELF"] ;?>" method="POST">
           <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter new User-name" name="email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
            <small id="emailHelp" class="form-text text-muted">we won't share this with anyone </small>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">price</label>
            <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter new User-name" name="price">
          </div>  

             <div class="form-group">
            <label for="exampleInputEmail1">location</label>
            <input type="textarea" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter new User-name" name="location">
          </div>  

          <div class="form-group">
            <label for="exampleInputEmail1">description</label>
            <input type="textarea" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter new User-name" name="description">
          </div> 
          <button type="submit" class="btn btn-primary" style="width:350px ; margin-left: 400px">Submit</button>
        </form>
  </div>
</div>


	<!-- Footer -->

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
>>>>>>> First commit
