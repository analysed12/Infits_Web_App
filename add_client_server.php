<?php

// initializing variables
$dietitianID = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', 'password@123', 'infits');

// ADD CLIENT
if (isset($_POST['add_client'])) {
  // receive all input values from the form
  $dietitianuserID = mysqli_real_escape_string($db, $_POST['dietitianuserID']);
  $clientName = mysqli_real_escape_string($db, $_POST['clientName']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $height = mysqli_real_escape_string($db, $_POST['height']);
  $weight = mysqli_real_escape_string($db, $_POST['weight']);
  $about = mysqli_real_escape_string($db, $_POST['about']);
  $plantitle = mysqli_real_escape_string($db, $_POST['plantitle']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  //if (empty($dietitianuserID)) { array_push($errors, "clientuserID is required"); }
  if (empty($clientName)) { array_push($errors, "Name is required"); }
  if (empty($height)) { array_push($errors, "Phone Number is required"); }
  if (empty($weight)) { array_push($errors, "Phone Number is required"); }


  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  /*$user_check_query = "SELECT * FROM client WHERE clientuserID='$clientuserID' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['clientuserID'] === $clientuserID) {
      array_push($errors, "clientuserID already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }
*/

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  //	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO create_client (dietitianuserID, clientName, gender, height, weight, about, plantitle) 
  			  VALUES('$dietitianuserID','$clientName', '$gender' ,'$height','$weight', '$about', '$plantitle')";
  	mysqli_query($db, $query);
  	$_SESSION['success'] = "Client Added";
  	header('location: add_client.php');
  }
}

// ... 

  
  ?>