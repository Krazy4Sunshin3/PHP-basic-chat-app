<?php 
//Connect to MySQL
$con = mysqli_connect("localhost","root","","shoutit");

//Test connection
if(mysqli_connect_errno())
{
	die('Failed to connect to database : '.mysqli_connect_error());
}

?>