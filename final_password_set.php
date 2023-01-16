<?php
session_start();
include('config.php');?>
<?php
$email = $_SESSION['mail'];
// $id = $_SESSION['name'] ;
  if(isset($_POST['confirm']))
  {
    $password1 = $_POST['new_pass'];
    $password2 = $_POST['con_pass'];
    if($password1 != $password2)
    { ?>
    
      <?php
       echo '<div class="alert alert-primary" role="alert" style="text-align:center;">
       Password not match
     </div>';
        

     } else {  ?>

 
   <?php 
     $sql ="update dietitian set `password` = '$password1' where email ='$email'";
     if($conn -> query($sql) == true)
     { 
        echo '<div class="alert alert-primary" role="alert" style="text-align:center;">
          Password changed!
       </div>';
          }
     else
     {  
          echo '<div class="alert alert-primary" role="alert" style="text-align:center;">
          Password not changed!
       </div>';
      
    }  ?>

    <?php } }?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Document</title>
</head>
<style>
 body {
    /* position: relative; */
    max-height: 100vh;
    margin: 0;
    overflow-x: hidden;
    overflow-y: scroll;
}
.top_bar {
    display: flex;
    justify-content: space-between;
    /* align-items:; */

}

.top_bar img {
    /* margin-left:10px; */
    margin-top: -20px;
    width: 210px;
    height: auto;
}

.bg {
    position: absolute;
    margin-top: -10px;
    z-index: -1;

}
#home{
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 25px;
line-height: 8px;
align-items: center;
color: #8081F9;
background-color: #FFFFFF;
border: none;
margin-bottom: 10px;
}
.sign{
    background: #F8F8FF;
box-shadow: 0px 0px 1px #C0C0FF;
border-radius: 12px;
width: 100px;
height: 40px;
margin-right: 20px;
border: none;
margin-bottom: 10px;
font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 25px;
line-height: 60px;

color: #8081F9;
}
.mobile img{
    width: 400px;
height: 400px;
}
.col-sm-6{
    display: flex;
    justify-content: center;
    align-items: center;

}
.col-sm-8{
    display: flex;
    justify-content: center;
    flex-direction: row;
    align-items: center;
}
.col-sm-4{
    display: flex;
    justify-content: center;
    align-items: center;
}
.left_links{
    display: flex;
    justify-content: space-between;
    align-items: left;
    margin-right: 15%;
    flex-direction: column;
    padding: 20px;
}
.left_links span{
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 30px;
line-height: 40px;
/* or 133% */

letter-spacing: 0.02em;

color: #4F1963;

}
.right_links{
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top:-30px;
    flex-direction: column;
    z-index: -1;
    margin-bottom: -110px;
}
.right_links img{
    margin-bottom: -110px;
}
.play_store{
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-direction: row;
    padding: 20px;
}
.content{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 20px;
}
.apple{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    background: #FFFFFF;
border: 2px solid #817FF8;
border-radius: 50px;
width: 176px;
height: 64px;
margin-right: 10px;

/* padding: 10px; */
}
.content p{
    font-family: 'Calibri';
font-style: normal;
font-weight: 400;
font-size: 12px;
line-height: 90.84%;
/* or 11px */

color: #000000;
}
.content span{
    font-family: 'Calibri';
font-style: normal;
font-weight: 400;
font-size: 20px;
line-height: 90.84%;
/* or 11px */


color: #000000;
}
.apple img{
    margin-top: -110px;
}
.play{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    background: #FFFFFF;
border: 2px solid #817FF8;
border-radius: 50px;
width: 176px;
height: 64px;
margin-left: 10px;
}
.play p{
    font-family: 'Calibri';
font-style: normal;
font-weight: 400;
font-size: 12px;
line-height: 90.84%;
/* or 11px */

color: #000000;
}
.play span{
    font-family: 'Calibri';
font-style: normal;
font-weight: 400;
font-size: 20px;
line-height: 90.84%;
/* or 11px */


color: #000000;
}
.play img {
    margin-top: -110px;
    margin-left: 10px;
}
.sform{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    
}
.bottom_logo{
    /* margin-left: 80px; */
    display: flex;
    justify-content: center;
    /* align-items: center; */
    flex-direction: column;
}
.bottom_logo img{
    margin-bottom: -110px;
}
.copy{
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 20px;
/* line-height: 124.84%; */
/* identical to box height, or 25px */
color: #A6A6A6;
margin-top: 60px;

}
.bottom_patch{
    margin-left: -500px;
    /* margin-right: -100px; */
    z-index: -1;
}
.social_links{
    display: flex;
    justify-content: space-between;
    /* align-items: center; */
    flex-direction: row;
    padding: 10px;
}
.header_sigin{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 10px;
}
.header_sigin img{
    margin-bottom: -80px;
    width: 100px;
    height: 100px;
}
.header_sigin span{
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 40px;
line-height: 89.84%;
/* identical to box height, or 90px */


color: #4F1963;

}
.gf_btns{
    display: flex;
    justify-content: space-between;
    /* align-items: center; */
    flex-direction: row;
    padding: 10px;  
}
.google{
    
border: 1px solid #EAEAEA;
border-radius: 15px;
background: #FFFFFF;
margin-right: 10px;
}
.facebook{
    border: 1px solid #EAEAEA;
border-radius: 15px;
background: #FFFFFF;
margin-left: 10px;

}
.material-symbols-outlined{
    color:#4B99FB;
}
.form_inputs{
    display: flex;
    gap:0.5rem;
    border-radius: 10px;
    padding:0.5rem;
    width: 340px;
    height : 45px;
    margin: 10px;
    margin-top:2rem;
    background: #F9F9FF;
    border: 1px solid #F9F9FF;
}
.form_inputs1{
    display: flex;
    gap:0.5rem;
    border-radius: 10px;
    padding:0.5rem;
    width: 340px;
    height : 45px;
    margin: 10px;
    margin-top:0.5rem;
    background: #F9F9FF;
    border: 1px solid #F9F9FF;
}
#otp{
  border:none;
  background: #F9F9FF;
  font-size:1rem;

}
#password{
    background: #F9F9FF;
border: 1px solid #EAEAEA;
border-radius: 15px;
padding: 10px;
width: 300px;
height : 50px;
margin: 10px;
}
.input_container { 
    position:relative;
    padding:0;
    margin:0;
}
.input { 
    height:20px;
    margin:0;
    padding-left:30px;
}
.input_img {
    position:absolute;
    bottom:8px;
    left:10px;
    width:10px;
    height:10px;
}
.blue_line{
    width: 60px;
    height: 5px;
    background: #4B99FB;
     border-radius: 1em;
     margin-right:0.5rem;
}
.title{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    margin-top: 40px;
}
.get_otp{
    display: flex;
    justify-content: space-between;
    align-items: space-between;
    flex-direction: row;
    margin-top: 10px;
}
.confirm{
background: #4B99FB;
border-radius: 10px;
float:left;
border:none;
width: 120px;
height: 40px;
font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 15px;
color: #FFFFFF;
padding-left:1rem;
padding-right:1rem;
cursor:pointer;

}
</style>
<body>
    <div class="top_bar">
        <div class="left">
            <div class="bg">
            <img src="images/bg_patch.svg" alt="">
            </div>
            <img src="images/infits_logo.svg" alt="">
        </div>
        <div class="right">
            <button id="home">Home</button>
            <button class="sign">SignUp</button>
        </div>
    </div>


        <div class="row">
            <div class="col-sm-6">

                <div class="sform">
                    <div class="header_sigin">
                        <img src="images/bg_patch_small.svg" alt="">
                        <span>Reset Password</span>
                  <form action=" " method="post">
                    </div>
                    <div class="title">
                        <div class="blue_line"></div>
                        <span>An OTP has been sent to your email</span>
                    </div>
                    <div class="form_inputs">
                    <span class="material-symbols-outlined">lock</span>    
                        <input id="new_pass" name="new_pass" type="password" placeholder="Enter New Password">
                    </div>
                    <div class="form_inputs1"> 
                    <span class="material-symbols-outlined">lock</span>      
                        <input id="con_pass" name="con_pass" type="password" placeholder="Confirm New Password">
                    </div>
                    <div class="get_otp">
                        <button class="confirm" name="confirm" id="confirm">Confirm</button>
                       
                    </div>
                    <div> <label id="demo" style="color:blue; font-weight:400;"> ------- </label> </div>
                </div>
            </div>
</form>

            <div class="col-sm-6">
                <div class="mobile" class="d-none d-lg-block">
                <img src="images/mobile.svg" alt="">
                </div>
                
            </div>
        </div>
        <div class="row">
        <div class="col-sm-4">
            <div class="bottom_logo">
                <img  src="images/infits_logo.svg" alt="">
                <span>Fitter.Healthier.Happier</span>
                <div class="social_links">
                    <img src="images/facebook.svg" alt="">
                    <img src="images/twitter.svg" alt="">
                    <img src="images/linkedin.svg" alt="">
                
                </div>
                <span class="copy">Copyright 2022 Infits. All rights reserved</span>
            </div>

            <div class="bottom_patch">
            <img src="images/bg_patch_bottom.svg" alt="">
            </div>

        </div>
        <div class="col-sm-8">
            <div class="row">
                <div class="col-sm-6">
                <div class="left_links">
                    <span>Company</span>
                    <div class="link">About</div>
                    <div class="link">Features</div>
                    <div class="link">Testimonials</div>
                    <div class="link">Get in touch</div>
                </div>
                </div>
                <div class="col-sm-6">
                <div class="right_links">
                    <span>Get the app</span>
                    <img src="images/bg_patch_small.svg" alt="">
                    <div class="play_store">
                        <div class="apple">
                            <img src="images/apple.svg" alt="">
                            <div class="content">
                                <p>Download on the</p>
                                <span>App Store</span>
                            </div>
                          
                        </div>
                        <div class="play">
                            <img src="images/gplay.svg" alt="">
                            <div class="content">
                                <p>Get it on</p>
                                <span>Google Play</span>
                            </div>
                        </div>
                </div>
                </div>
            </div>
            </div>
          
        </div>
        </div>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6S

</html>