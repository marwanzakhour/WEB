<?php
$host = "mysql12.000webhost.com";
$user = "XXXXXXXXX";
$password = "XXXXXXXX";
$db_name = "a3736562_marwan";

$mysqli = new mysqli($host, $user, $password, $db_name);

if(mysqli_connect_errno())
{
	printf("Connection failed");
	exit();
} 
?>
