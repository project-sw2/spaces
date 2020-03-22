<?php
session_start();
include_once ('classes/session.php');
include_once('classes/Database.php');

$collector = new  session();

$data = $collector->retuningdata($_SESSION['admin']);
$uploader = new user();
if(isset($_POST))
{
$name = $_SESSION['admin'];
}


?>

<html>
<body>   


  <p> this admin profile </p>


	
</body>
</html>
