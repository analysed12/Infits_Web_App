<?php
include "config.php";

if(isset($_POST['login_user'])){

    $dietitianuserID = mysqli_real_escape_string($con,$_POST['dietitianuserID']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    if ($dietitianuserID != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from dietitian where dietitianuserID='".$dietitianuserID."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['name'] = $dietitianuserID;
            header('Location: index.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Infits | Log In</title>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  <style>
        body{
    font-family: 'Poppins' !important;
  }
  .login-area{
    display: flex;
    flex-direction: column;
    align-items: center;
    flex-wrap: wrap;
  }
  input{
    background: #FFFFFF;
    border: 1px solid #EBEBEB;
    border-radius: 4px;
    min-width: 500px;
    padding: 8px 16px;
    gap: 8px;
  }
  ::placeholder {
    color: #EBEBEB;
    font-size: 16px;
    font-weight: 400;
    opacity: 1; /* Firefox */
  }
  
  :-ms-input-placeholder { /* Internet Explorer 10-11 */
   color: #EBEBEB;
   font-size: 16px;
   font-weight: 400;
  }
  
  ::-ms-input-placeholder { /* Microsoft Edge */
   color: #EBEBEB;
   font-size: 16px;
   font-weight: 400;
  }
.btn{
    background-color: #7282FB;
    border: none;
    color: white;
    padding: 10px 22px;
    border-radius: 10px;
    text-decoration: none;
    margin: 4px 2px;
    width: 100%;
  }
  input[type=sign-up]{
    border: 1px solid #EBEBEB;
    color: #7282FB;
    align-items: center;
    padding: 10px 22px;
    border-radius: 10px;
    text-decoration: none;
    margin: 4px 2px;
    width: 50%;
  }
  /* Shared */
.loginBtn {
    border: 1px solid #EBEBEB;
    padding: 10px;
    border-radius: 5px;
    min-width: auto;
    width: 150px;
    background-color: #FFFFFF;
}
.center-flex{
    display: flex;
    align-items: center;
    justify-content: space-around;
    }

.signup{
      border: 1px solid #EBEBEB;
      padding: 10px;
      border-radius: 5px;
      min-width: auto;
      width: 150px;
      background-color: #FFFFFF;
      text-decoration: none;
      color: black;
  }
  .center-flex{
display: flex;
align-items: center;
justify-content: center;
}
        </style>

</head>
<body>

<center>
        <br>
        <img src="images/login.png" height="150px">
        <br><br>
        <h1 style="font-size: 35px; color: #202224; font-weight: 400; margin-bottom:0px;">Welcome Back</h1>
        <h3 style="font-size: 25px; color: #202224; font-weight: 400; margin:0px ; color: #A9A5A5;">Log in to your account</h3>
      <br>
  </center>
	 
  <div class="login-area">
  <form method="post" action="login.php">

  		<input type="text" name="dietitianuserID" placeholder="Username">
      <br><br>
  		<input type="password" name="password" placeholder="Password">
      <br><br>
  		<button type="submit" class="btn" name="login_user">Login</button>

      <p style="text-align: center; font-size: 20px;">Don’t have an account? </p><a href="register.php" style="text-align: center;">Sign up</a>
  	</p>
  </form>
  </div>
</body>
</html>