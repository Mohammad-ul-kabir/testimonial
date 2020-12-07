<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
  session_destroy();
?>
<!DOCTYPE html>
<html>

<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="header">
		<h2>Successfully Submitted</h2>
		<p>
		<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
  	</p>
	</div>


	</div>

</body>

</html>