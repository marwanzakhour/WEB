<?php
session_start();

require ("connect.php");



if(isset($_POST['username'])&& $_POST['username'] != null)
{
	$user = $mysqli->real_escape_string($_POST['username']);
}
else
{
	die("badde eb7achlak w tomak ta7t l sajra");
}
 
 if(isset($_POST['fname']) && $_POST['fname'] != null)
{
	$fname = $mysqli->real_escape_string($_POST['fname']);
	
}
  else
  {
	  die("badde eb7achlak w tomak ta7t l sajra");
  }
 
  if(isset($_POST['lname']) && $_POST['lname'] != null)
{
	$lname = $mysqli->real_escape_string($_POST['lname']);
	
}
  else
  {
	  die("badde eb7achlak w tomak ta7t l sajra");
  }
 
 if(isset($_POST['email']) && $_POST['email'] != null)
{
	$email = $mysqli->real_escape_string($_POST['email']);
	
}
  else
  {
	  die("badde eb7achlak w tomak ta7t l sajra");
  }
  
  if(isset($_POST['message']) && $_POST['message'] != null)
{
	$message = $mysqli->real_escape_string($_POST['message']);
	
}
  else
  {
	  die("You forgot to enter a comment :)");
  }



$query = $mysqli->prepare("SELECT * FROM user WHERE username = ?");
$query->bind_param('s', $user);
$query->execute();
$query->store_result();
$num = $query->num_rows;
$query->bind_result($username, $fname, $lname, $email, $message);
$query->fetch();

if ( $num==0 )
{
$stmt = $mysqli->prepare("Insert INTO user (username,fname,lname,email,message) VALUES (?,?,?,?,?)");
$stmt->bind_param('sssss', $user, $fname, $lname, $email, $message);
$stmt->execute();
$stmt->close();
$mysqli->close();
header("Location: congrats.html");
}

else
{
 header("Location: guestError.html");
}

$stmt->execute();
$stmt->close();


?>
