<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container">
	<div class="row justify-content-center">
	

		  <div class="col-lg-8">
		  <div class="header">
  			<h2>Login</h2>
  		</div>
		  <form method="post" action="login.php">
				<?php include('errors.php'); ?>
				<div class="form-group">
					<label>Username</label>
					<input class="form-control" type="text" name="username" >
				</div>
				<div class="form-group">
					<label>Password</label>
					<input class="form-control" type="password" name="password">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary" name="login_user">Login</button>
				</div>
				<p>
					Not yet a member? <a href="register.php">Sign up</a>
				</p>
			</form>
		  </div>

			
		
		</div>
	
</div>
  
	 

</body>
</html>