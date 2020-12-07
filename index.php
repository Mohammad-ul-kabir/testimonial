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
?>
<!DOCTYPE html>
<html>

<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">

				<div class="header">
					<h2>Home Page</h2>
				</div>
				<div class="content">
					<!-- notification message -->
					<?php if (isset($_SESSION['success'])) : ?>
					<div class="error success">
						<h3>
							<?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
						</h3>
					</div>
					<?php endif ?>

					<!-- logged in user information -->
					<?php  if (isset($_SESSION['username'])) : 
	if($_SESSION['type']=='student'):?>

					<form method="post" action="testimonial.php">
						<div class="form-group">
							<label>Student Name</label>
							<input type="text" class="form-control"  name="title" value="">
						</div>

						<div class="form-group">
							<label>Father Name</label>
							<input type="text" class="form-control"  name="father_name" value="">
						</div>

						<input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">

						<div class="form-group">
							<label>Student E-mail</label>
							<input type="email" class="form-control"  name="email" value="">
						</div>

						<div class="form-group">
							<label>Registration Number</label>
							<input type="text" class="form-control" name="reg_number" value="">
						</div>

						<div class="form-group">
							<label>Roll Number</label>
							<input type="text" class="form-control" name="roll_number" value="">
						</div>


						<div class="form-group">
							<label>Session</label>
							<input type="text" class="form-control" name="ses_number" value="">
						</div>

						<div class="form-group">
							<label>Passing Year</label>
							<input type="text" class="form-control" name="year" value="">
						</div>
						<div class="form-group">
							<label>Result</label>
							<input type="text" class="form-control" name="cgpa" value="">
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="sub_testimonial">Submit</button>
						</div>

					</form>

					<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
					<?php endif ?>
					
					<?php if($_SESSION['type']=='teacher'):?>
						
						<?php
	// connect to the database
	$db = mysqli_connect('localhost', 'root', '', 'registration');
    	$query = "SELECT * FROM testimonial";
		$results = mysqli_query($db, $query);
		
?>
			

						<?php

		if (mysqli_num_rows($results) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($results)) {
?>

<table class="table table-striped mb-5">	
							<tr>
								<th><strong>Student Name</strong></th>
								<th><?php echo  $row["title"]?></th>
								
							</tr>
							<tr>
								<th><strong>Father Name</strong></th>
								<th><?php echo  $row["father_name"]?></th>
								
							</tr>
							<tr>
								<th><strong>Year</strong></th>
								<th><?php echo  $row["year"]?></th>
								
							</tr>
							<tr>
								<th><strong>Roll Number</strong></th>
								<th><?php echo  $row["roll_number"]?></th>
								
							</tr>
							<tr>
								<th><strong>Registration Number</strong></th>
								<th><?php echo  $row["reg_number"]?></th>
								
							</tr>
							<tr>
								<th><strong>Session</strong></th>
								<th><?php echo  $row["ses_number"]?></th>
								
							</tr>
							<tr>
								<th><strong>Result</strong></th>
								<th><?php echo  $row["cgpa"]?></th>
								
							</tr>
						</table>
							
					
<?php

			 
			
			}
			}
		else {
		echo "0 results";
		}
		?>
	
		<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
		<?php endif ?>
		<?php endif ?>

				
				
				</div>
			</div>
		</div>
	</div>
</body>

</html>