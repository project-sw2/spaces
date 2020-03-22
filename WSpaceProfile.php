<?php
session_start();
include_once ('classes/session.php');

$collector = new  session();
$data = $collector->retuningdata($_SESSION['admin']);



?>


<html>
<body>   


  <p> this Work spaces profile </p>


	
</body>
</html>
