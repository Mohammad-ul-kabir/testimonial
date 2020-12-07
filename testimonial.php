<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['sub_testimonial'])) {
  // receive all input values from the form
  $title = mysqli_real_escape_string($db, $_POST['title']);
  $father_name = mysqli_real_escape_string($db, $_POST['father_name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $year = mysqli_real_escape_string($db, $_POST['year']);
  $reg_number = mysqli_real_escape_string($db, $_POST['reg_number']);
  $roll_number = mysqli_real_escape_string($db, $_POST['roll_number']);
  $ses_number = mysqli_real_escape_string($db, $_POST['ses_number']);
  $cgpa = mysqli_real_escape_string($db, $_POST['cgpa']);
  $user_id = mysqli_real_escape_string($db, $_POST['user_id']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($title)) { array_push($errors, "Student Name is required"); }
  if (empty($father_name)) { array_push($errors, "Father name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($year)) { array_push($errors, "Year is required"); }
  if (empty($reg_number)) { array_push($errors, "Registration Number is required"); }
  if (empty($roll_number)) { array_push($errors, "Roll Number is required"); }
  if (empty($ses_number)) { array_push($errors, "Session is required"); }
  if (empty($cgpa)) { array_push($errors, "CGPA is required"); }
  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  

  	$query = "INSERT INTO testimonial (title, email, year, user_id,reg_number, roll_number,ses_number,father_name,cgpa) 
  			  VALUES('$title', '$email', '$year','$user_id', '$reg_number','$roll_number','$ses_number','$father_name','$cgpa')";
    mysqli_query($db, $query);
    // index.php
  	header('location: result.php');
  
}


?>
