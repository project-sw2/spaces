<?php
session_start();
include_once('classes/Admin.php');
include_once('classes/session.php');
include_once('classes/Database.php');
$collector = new  session();

$data = $collector->retuningdata($_SESSION['admin']);
$showing = new Admin();
$searching= new user();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin - Dashboard</title>
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
<link rel="stylesheet" type="text/css" href="styles/dashboard.css" >

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>
	<!-- navbar-->
<nav class="navbar navbar-dark bg-dark">
<a class="navbar-brand" href="profile.php">profile </a>
 <a class="navbar-brand" href="#">Admin DashBoard</a>


      
              <div class="log_reg_content d-flex flex-row align-items-right justify-content-start">
                <div class="login log_reg_text"><a href="profile.php"><?php echo $data['name']; ?></a></div>
                <div class="register log_reg_text"><a href="classes/Logout.php">Logout</a></div>
              </div>
            
  </ul>

</nav>

<div class="card-deck" style="margin: 10px">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">My Info</h5>
      <p class="card-text" style="font-weight: bold;"><?php echo "Admin name : " . $data['name']; ?></p>
      <p class="card-text" style="font-weight: bold;"><?php echo "Admin Email : " . $data['email']; ?></p>
      <p class="card-text" style="font-weight: bold;"><?php echo "Admin username : " . $data['Username']; ?></p>
    </div>
    <div class="card-footer">
      <small class="text-muted">This is all your personal info.</small>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Workspaces | Users</h5>
       <p class="card-text" style="font-weight: bold; color:orange ;text-align: center;"> Workspace : <?php $showing->countworkspaces(1); ?></p>	
     <br>
        <p class="card-text" style="font-weight: bold; color:orange ;text-align: center;"> Users : <?php $showing->countworkspaces(2); ?></p>	
     
    </div>
    <div class="card-footer">
      <small class="text-muted">All informations from your website</small>
    </div>
  </div>
</div>

<div class="card" style="margin: 25px">
    <div class="card-body">
      <h5 class="card-title">Search</h5>
       <ul class="content">
                <form method="POST">
		    <div class="md-form active-purple active-pink-2 mb-3 mt-0">
		  <input class="form-control" type="text" placeholder="Search" aria-label="Search" name="search" style="text-align: center; margin-left: 250px;">
		 	 </form>
		</div>
		 <table class="table table-striped">
		<?php
        if (isset($_POST ['search'])) {
            echo "<thead>";
            echo "<tr>";
            echo "<th scope='col'>#</th>";
            echo "<th scope='col'>name</th>";
            echo " <th scope='col'>email</th>";
            echo "<th scope='col'>price</th>";
            echo "</tr>";
            echo "</thead>";

            $showing->searching($_POST ['search']);
        }
        ?>
	</table>
     </ul>
  </div>
</div>

<div class="card" style="margin: 25px">
    <div class="card-body">
      <h5 class="card-title">All work spaces</h5>
        <table class="table table-striped">
              		
		  	<thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">name</th>
		      <th scope="col">email</th>
		      <th scope="col">price</th>
		   
		    </tr>
		</thead>
    			<?php $showing->showallusers();?>
    		</table>
  </div>
</div>

<div class="card" style="margin: 25px">
    <div class="card-body">
      <h5 class="card-title">All Users</h5>
        <table class="table table-striped">
		  	<thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Username</th>
		      <th scope="col">email</th>
		      
		   
		    </tr>
		</thead>
    			<?php $showing->showallusersonsys();?>
    		</table>
  </div>
</div>

<div class="card" style="margin: 25px">
    <div class="card-body">
      <h5 class="card-title">Reports</h5>
 	<?php $showing->showallreports();?>   		
  </div>
</div>






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
