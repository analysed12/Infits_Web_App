<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Infits | Sign Up</title>
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
    width: 50%;
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
        <img src="images/sign-up.png" height="150px">
        <br><br>
        <h1 style="font-size: 35px; color: #202224; font-weight: 400; margin-bottom:0px;">Let’s get started</h1>
        <br>
      </center>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
    <div class="login-area">
  	  <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
        <br>
  	  <input type="email" name="email" placeholder="Your Email" value="<?php echo $email; ?>">
        <br>
        <input type="text" name="phno" placeholder="Your Phone Number">
        <br>
  	  <input type="password" name="password_1" placeholder="Password">
        <br>
  	  <input type="password" name="password_2" placeholder="Confirm Password">
        <br>
  	  <button type="submit" class="btn" name="reg_user">Sign-Up</button>
<br>

      <p style="text-align: center; font-size: 16px;">Already have an account? <a href="login.php" style="text-decoration: none; color: #7282FB">Log in</a>
  	</p>

      <br>
        <p style="text-align: center; font-size: 16px;">---- Sign Up With ---- </p>

        <div class="center-flex">
        <button class="loginBtn loginBtn--facebook">
          <img src="images/facebook 2.png">Facebook
        </button>
        
        <br><br>

        <button class="loginBtn loginBtn--google">
          <img src="images/google 1.png" style="margin: 5px;"> Google
        </button>
      </div>

  </form>
  </div>

  <br><br>

</body>
</html>