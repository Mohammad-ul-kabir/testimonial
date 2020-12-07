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
	<div class="row">
		<div class="col-lg-8">
		<div class="header"><h2>Register</h2></div>
			
		<form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="form-group">
  	  <label>Username</label>
  	  <input type="text" class="form-control"  name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="form-group">
  	  <label>Email</label>
  	  <input  class="form-control" type="email" name="email" value="<?php echo $email; ?>">
  	</div>
	<div class="form-group">
  	  <label>Type</label>
  	  <select class="form-control"  name="type">
	  <option name="student">student</option><option value="teacher">teacher</option>	</select>	
  	</div>
  	<div class="form-group">
  	  <label>Password</label>
  	  <input  class="form-control" type="password" name="password_1">
  	</div>
  	<div class="form-group">
  	  <label>Confirm password</label>
  	  <input  class="form-control" type="password" name="password_2">
  	</div>
  	<div class="form-group">
  	  <button type="submit" class="btn btn-primary" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
		
		</div>
	</div>
</div>
 

</body>
</html>