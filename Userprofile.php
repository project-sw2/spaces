<?php
session_start();
include_once ('classes/session.php');


$collector = new  session();

$data = $collector->retuningdata($_SESSION['admin']);


?>
<html>
<body>   


  <p> this user profile </p>


	
</body>
</html>