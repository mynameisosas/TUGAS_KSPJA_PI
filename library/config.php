<?php
$con = new mysqli("localhost","root","","register");
if($con->connect_errno)
{
	echo "Error",$con->conneect_error;
}

?>