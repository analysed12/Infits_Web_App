<?php
session_start();

// initializing variables
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'infits');

$currentUser = $_SESSION['name'];
$query = "select * from `dietitian` where `dietitianuserID` = '$currentUser' ";
 $result = mysqli_query($db, $query); // Use curly braces to access array members inside strings
 if($result->num_rows > 0){ 
   while($row = $result->fetch_assoc()){
     $password_old = $row['password'];
   }
 }
// REGISTER USER
if (isset($_POST['resetpw'])) {
  // receive all input values from the form
  $old_password = mysqli_real_escape_string($db, $_POST['old_password']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($password)) { array_push($errors, "Password is required"); }
  if ($password != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
  if ($password_old != $old_password) {
	array_push($errors, "The old password is incorrect");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  if (count($errors) == 0) {

  $query = "UPDATE dietitian SET password = '$password'
              where `dietitianuserID` = '$currentUser'";
    mysqli_query($db, $query);

    $_SESSION['success'] = "Information Updated";
    session_destroy();
    header("location: login.php");
    exit();
  } 
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Reset Password</h2>
        <p>Please fill out this form to reset your password.</p>
        <form action="reset-pw.php" method="post"> 
        <?php include('errors.php'); ?>

            <div class="form-group">
                <label>Old Password</label>
                <input type="password" name="old_password" class="form-control" >
                
            </div>

            <div class="form-group">
                <label>New Password</label>
                <input type="password" name="password" class="form-control" >
                
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="password_2" class="form-control">
                
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Reset" name="resetpw">
                <a class="btn btn-link ml-2" href="profile_settings.php">Cancel</a>
            </div>
        </form>
    </div>    
</body>
</html>