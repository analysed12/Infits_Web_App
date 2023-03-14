<?php
session_start();

// initializing variables
$name = "";
$email = "";
$errors = array(); 

include "config.php";

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $dietitianuserID = mysqli_real_escape_string($conn, $_POST['dietitianuserID']);
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($dietitianuserID)) { array_push($errors, "Username is required"); }
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($mobile)) { array_push($errors, "Phone Number is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if ($password != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM dietitian WHERE dietitianuserID='$dietitianuserID' OR email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['dietitianuserID'] === $dietitianuserID) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  //	$password = md5($);//encrypt the password before saving in the database

  	$query = "INSERT INTO dietitian (dietitianuserID, name, email, mobile, password) 
  			  VALUES('$dietitianuserID','$name', '$email', '$mobile', '$password')";
  	mysqli_query($conn, $query);

    # creating the Session
    // $_SESSION['dietitianuserID'] = $user['dietitianuserID'];
    // $_SESSION['name'] = $user['name'];
    // $_SESSION['dietitian_id'] = $user['dietitian_id'];

  	// $_SESSION['name'] = $name;
  	// $_SESSION['success'] = "You are now logged in";
  	// header('location: index.php');
     header('location: login.php');
  }
}

// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
    $dietitianuserID = mysqli_real_escape_string($conn, $_POST['dietitianuserID']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
  
    if (empty($dietitianuserID)) {
        array_push($errors, "dietitianuserID is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    $word = ".com" ;
    if (count($errors) == 0) {
        // $password = md5($password);
        if(strpos($dietitianuserID, $word) !== false){


          // emailid entered
          $query = "SELECT * FROM dietitian WHERE `email`='$dietitianuserID' AND `password`='$password'";
          $results = mysqli_query($conn, $query);
          if (mysqli_num_rows($results) == 1) {
            // changing dietitianuseriid now from email to username
            $sql = "SELECT * FROM dietitian WHERE `email`='$dietitianuserID'" ;
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result) ;

        # creating the Session
        $_SESSION['dietitianuserID'] = $row['dietitianuserID'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['dietitian_id'] = $row['dietitian_id'];
            // $_SESSION['name'] = $row['dietitianuserID'];
            // echo $row['dietitianuserID'] ;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
          }else {
              array_push($errors, "Wrong Email/password combination");
              // header('location: sign_in_new.php');
          }
      } 
      else{

          // Username entered
          $query = "SELECT * FROM dietitian WHERE `dietitianuserID`='$dietitianuserID' AND `password`='$password'";
          $results = mysqli_query($conn, $query);
          if (mysqli_num_rows($results) == 1) {
        

          
          $sql = "SELECT * FROM dietitian WHERE `dietitianuserID`='$dietitianuserID'";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);

          # creating the Session
          $_SESSION['dietitianuserID'] = $row['dietitianuserID'];
          $_SESSION['name'] = $row['name'];
          $_SESSION['dietitian_id'] = $row['dietitian_id']; 
          // var_dump($_SESSION);
          // print_r($result);
          // echo '123';
          // die();
            $_SESSION['name'] = $dietitianuserID;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
           
          }else {
              array_push($errors, "Wrong Username/password combination");
              // header('location: sign_in_new.php');
          }
      }
       
    }
  }
  
 
  ?>