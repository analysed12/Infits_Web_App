<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infits | Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
  </head>

  <body>
  <!------------------------------------------------DASHBOARD--------------------------------------------------------->
      <center>
        <br>
        <img src="images/login.png" height="150px">
        <br><br>
        <h1 style="font-size: 35px; color: #202224; font-weight: 400; margin-bottom:0px;">Welcome Back</h1>
        <h3 style="font-size: 25px; color: #202224; font-weight: 400; margin:0px ; color: #A9A5A5;">Log in to your account</h3>
      
      </center>
      <!-----------------------------------------------LOGIN--------------------------------------------------------->
      <div class="login-area"><form>
        <br> <input type = "email" name = "email" placeholder="Your Email">
        <br><br>
        <input type = "text" name = "last_name" placeholder="Phone Number">
        <br><br>
        <input type = "password" name = "pwd" placeholder="Password">
        
        <br><br>
        <a href="#" style="text-decoration: none; color:black"><p style="text-align: right;">Forgot Password?</p></a>
        <input type="submit" name="Log In" value="Log In">

        <br><br>
        <p style="text-align: center; font-size: 20px;">Don’t have an account? </p>

        <input type="sign-up" name="sign-up" value="Sign Up" style="text-align: center;">

        <br><br>
        <p style="text-align: center; font-size: 16px;">---- Sign Up With ---- </p>

        <div class="center-flex">
        <button class="loginBtn loginBtn--facebook">
          <img src="images/facebook 2.png">Facebook
        </button>
        
        <button class="loginBtn loginBtn--google">
          <img src="images/google 1.png" style="margin: 5px;"> Google
        </button>
      </div>

      </form>
    </div>

    <br><br>
    </div>
  
</body>
</html>