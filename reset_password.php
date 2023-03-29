<?php
include "server.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Reset Password</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name="google-signin-client_id" content="GOOGLE_SIGNIN_CLIENT_ID">


</head>
<style>
@import url('https://fonts.googleapis.com/earlyaccess/nats.css');
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap');
@font-face {
    font-family: 'NATS';
    src:url('font/NATS.ttf.woff') format('woff'),
        url('font/NATS.ttf.svg#NATS') format('svg'),
        url('font/NATS.ttf.eot'),
        url('font/NATS.ttf.eot?#iefix') format('embedded-opentype'); 
    font-weight: normal;
    font-style: normal;
}
.abcRioButton{
    border-radius: 10px;
    box-shadow: none !important;
}
.abcRioButtonContentWrapper {
    height: 100%;
    width: 100%;
    border: 1px solid #EAEAEA;
    border-radius: 10px;
    background: #FFFFFF;
    margin-right: 15px;
    padding: 0 10px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.abcRioButtonLightBlue {
    color: #4B99FB;
    font-weight: bolder;
    height: 50px !important;
    width: 130px !important;
    border-radius: 10px !important;

}
.abcRioButtonIconImage{
    height: 35px !important;
    width: 35px !important;
}
.abcRioButtonIconImage svg{
    height: 30px !important;
    width: 30px !important;
}
.abcRioButtonContents{
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 20px !important;
/* line-height: 74px; */
color: #4B99FB;
}

body {
    /* position: relative; */
    max-height: 100vh;
    margin: 0;
    overflow-x: hidden;
    overflow-y: scroll;
    font-family: 'NATS', sans-serif;
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

#home {
    font-family: 'NATS';
    font-style: normal;
    font-weight: 500;
    font-size: 25px;
   
    color:  #8081F9;
    background-color: #FFFFFF;
    border: none;
    margin-bottom: 10px;
    margin-top: 2rem;
}


.sign {
    background: #F8F8FF;
    box-shadow: 0px 0px 10px #C0C0FF;
    border-radius: 12px;
    width: 117px;
    height: 50px;
    border: none;
    margin-top:2rem;
    margin-right:2rem;
    font-family: 'NATS';
    font-style: normal;
    font-weight: 500;
    font-size: 25px;
    color: #8081F9;
    /* align-item;
    centre; */
    margin-left:0.7rem;
}

.mobile img {
    width: 550px;
    height: 550px;
    margin-top:6rem;
}

.col-sm-6 {
    display: flex;
    justify-content: center;
    align-items: center;

}

.col-sm-8 {
    display: flex;
    justify-content: center;
    flex-direction: row;
    align-items: center;
}

.col-sm-4 {
    display: flex;
    justify-content: center;
    align-items: center;
}

.left_links {
    display: flex;
    justify-content: space-between;
    align-items: left;
    margin-right: 15%;
    flex-direction: column;
    padding: 20px;
}

.left_links span {
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 30px;
    line-height: 40px;
    /* or 133% */

    letter-spacing: 0.02em;

    color: #4F1963;

}
.link{
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 25px;
    line-height: 40px;
    letter-spacing: 0.02em;
    color: #8E8E8E;
}
.right_links {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: -30px;
    flex-direction: column;
    z-index: -1;
    margin-bottom: -110px;
}

.get-vec {
    margin-bottom: -110px;
}
.sform {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;

}

.bottom_logo {
    /* margin-left: 80px; */
    display: flex;
    justify-content: center;
    /* align-items: center; */
    flex-direction: column;
}

.bottom_logo img {
    margin-bottom: -110px;
}

.copy {
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    /* line-height: 124.84%; */
    /* identical to box height, or 25px */
    color:#A6A6A6;
    margin-top: 6rem;

}
.vec-sub{
    font-family: 'NATS';
    font-size: 25px;
    font-weight: 500;
    text-align: center;
}

.bottom_patch {
    margin-left: -500px;
    /* margin-right: -100px; */
    z-index: -1;
}

.social_links {
    display: flex;
    justify-content: space-between;
    /* align-items: center; */
    flex-direction: row;
    /* padding: 10px; */
}

.header_sigin {
    display: flex;
    justify-content: start;
    align-items: center;
    flex-direction: column;
    /* padding: 10px; */

}

.header_sigin img {
    /* border: 1px solid red; */
    margin-bottom: -130px;
    margin-left: 130px;
    width: 160px;
    height: 180px;
}

.header_sigin span {
    /* border: 1px solid red; */
    font-family: 'NATS';
    font-style: normal;
    font-weight: 800;
    font-size: 50px;
    line-height: 89.84%;

    /* identical to box height, or 90px */


    color: #4F1963;

}
.form_inputs {
    display: flex;
    justify-content: space-between;
    /* align-items: center; */
    flex-direction: column;
    padding: 50px;
}

#email {
    background: #F9F9FF;
    border: 1px solid #F9F9FF;
    border-radius: 15px;
    padding: 10px;
    height: 50px;
    width: 430px;
    margin: 10px;
}

#password {
    background: #F9F9FF;
    border: 1px solid #EAEAEA;
    border-radius: 15px;
    padding: 10px;
    width: 430px;
    height: 50px;
    margin: 10px;
}

.input_container {
    position: relative;
    padding: 0;
    margin: 0;
}

.input {
    height: 20px;
    margin: 0;
    padding-left: 30px;
}

.input_img {
    position: absolute;
    bottom: 8px;
    left: 10px;
    width: 10px;
    height: 10px;
}

.ip_box {
    display: flex;
    
    align-items: center;
    flex-direction: row;
    color: #B4B4B4;
    

}

.ip_box img {
    z-index: 2;
    margin-right: -45px;
}

.sign_up {
    background: #4B99FB;
    border-radius: 15px;
    width: 130px;
    height: 50px;
    border: none;
    color: #FFFFFF;
}
.reset {
    background: #4B99FB;
    border-radius: 15px;
    width: 200px;
    height: 50px;
    border: none;
    color: #FFFFFF;
}
#reset-sec{
    margin-top: 3rem;
    margin-left: 0px;
}
#reset-sec-2{
    margin-top: 3rem;
    margin-left: 0px;
}

.sign_btn_section {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-direction: row;
    /* border: 1px solid red; */
    border-radius: 15px;

}

.sign_in_sec {
    /* border: 1px solid black; */
    margin-left: 25px;
}

.input_bar {
    background: #F9F9FF;
    border: 1px solid #F9F9FF;
    border-radius: 15px;
    padding-left: 40px !important;
    width: 430px;
    height: 50px;
    margin: 10px;
    font-family: 'manrope',sans-serif;
    font-style: normal;
    font-weight: 400;
    font-size: 15px;
    color: #B4B4B4;
}


.sign_in_sec span {

    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 15px;
    line-height: 121.34%;
    /* or 30px */

    text-align: right;

    color: #4B99FB;
}
.row{
    margin-left:2rem;
}
@media screen and (max-width: 720px) {
    .sform{
        margin-left: 4rem;
    }
    #home{
        margin-left:13rem;
    }
    .mobile img {
    width: 400px;
    height: 400px;
    margin-left: 6rem;
}
.left_links{
    margin-left: 8rem;
}
.right_links{
    margin-left: 3rem;
}
.sign{
    margin-left:11rem;
}
#hr{
    display:none;
}
#btml{
    margin-left:4rem;
}

}
@media screen and (max-width: 768px) {
    #parent-lg{
        display: none !important;
    }
    
}
@media only screen 
  and (min-device-width: 768px) 
  and (max-device-width: 1024px) 
  and (-webkit-min-device-pixel-ratio: 1) {
    .mobile img {
        margin-left: 6rem;
    width: 400px;
    height: 400px;
    
}
.sform{
    margin-left: 2rem;
}
.bottom_patch{
    margin-left: -530px;
}
}
</style>

<body>
    <div class="top_bar">
        <div class="left">
            <div class="bg">
                <img src="images/Vector3.png" style="width:25rem">
            </div>
            <img src="images/infits_logo.svg" style="margin-top:0.8rem;margin-left:0.8rem">
        </div>
        <div class="right d-none d-sm-block">
            <button id="home">Home</button>
            <button class="sign" onclick="window.location.href = 'register.php';">SignUp</button>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-6">
         
            <div class="sform">
                <div class="header_sigin">
                    <img src="images/bg_patch_small.svg" >
                    <span style="font-size: 75px;font-weight:400">Reset Password</span>
                    

                </div>
                <!-----------------------enter otp section---------------->
              <div id="reset-sec">
                <span class="mt-5 ms-0"><img src="images/Line70.png"><span id="subtitle" style="color: #4F1963;font-size: 25px;font-weight: 400;margin-left:0.8rem">An OTP has been sent to your email</span></span>
                <div class="form_inputs login-area">
                    <!-- <form action="" method="post">
                    <?php include('errors.php'); 
                   ?> -->
                        <!-- Main Form -->
                        <div class="ip_box">
                            <img src="images/teenyicons_otp-outline.png">
                            <input class="input_bar" id="email" type="text" name="dietitianuserID"
                                placeholder="Enter OTP">
                        </div>
                                         
                        <div class="sign_btn_section mt-3">
                            <div class="sign_btn" style="background: #4B99FB;border-radius:15px">
                                <button id="confirm-btn" class="btn sign_up" name="" style="font-size: 25px;" onclick="closeForm()">Confirm</button>
                            </div>
                            <p></p>
                            <div class="sign_in_sec">
                                <span style="font-size:20px; color:#4F1963;">Resend OTP <span class="text-muted ms-2 font-size:20px;"> 0 : 57</span></span>
                            </div>
                        </div>
                    </form>
                </div>
              </div>
               <!-----------------------new reset password section---------------->
              <div id="reset-sec-2" style="display: none;">
                <span class="mt-5 ms-0"><img src="images/Line70.png"><span id="subtitle" style="color: #4F1963;font-size: 25px;font-weight: 400;margin-left:0.8rem">Set a new password for your account </span></span>
                <div class="form_inputs login-area">
                     <!-- Main Form -->
                        <div class="ip_box">
                            <img src="images/Security Shield Green.png" >
                            <input class="input_bar" id="password" type="text" name=""
                                placeholder="Enter new password">
                                <img style="cursor: pointer; width: 22px; height: 19px;"src="images/eye.png" id="eyeicon" alt="eye">
                        </div>
                      
                        <div class="ip_box">
                            <img src="images/Security Shield Green.png" >
                            <input class="input_bar" id="cpassword" type="text" name=""
                                placeholder="Confirm new password">
                                <img style="cursor: pointer; width: 22px; height: 19px;"src="images/eye.png" id="ceyeicon" alt="eye">
                        </div>
                       
                        <div class="sign_btn_section mt-3">
                            <div class="sign_btn" style="background: #4B99FB;border-radius:15px">
                                <button id="confirm-btn" type="submit" class="btn reset" name="" style="font-size: 25px;" onclick="window.location.href = 'login.php';">Reset Password</button>
                            </div>
                            <p></p>
                            <div class="sign_in_sec">
                                <span style="font-size:20px; color:#4F1963;">Resend OTP <span class="text-muted ms-2 font-size:20px;"> 0 : 57</span></span>
                            </div>
                        </div>
                    </form>
                </div>
              </div>
            </div> 
        </div>
        <div class="col-sm-6">
            <div class="mobile">
                <img src="images/forgotpassword.png" alt="">
            </div>
            
        </div>
        <!-------------------------footer section----------------------------------->
    <hr  id="hr" style="border: 1px solid #F3F3FF;width: 1204px;">
    </div>
    <div class="row" id="parent-lg" style="margin-top:2rem">
        <div class="col-sm-4 " id="btml">
            <div class="bottom_logo">
                <img src="images/infits_logo.svg" alt="">
                <div class="vec-sub"><span>Fitter</span><span class="ms-2">. Healthier</span><span class="ms-2">. Happier</span></div>
                <div class="social_links">
                    <img src="images/facebook.svg" alt="">
                    <img src="images/twitter.svg" alt="">
                    <img src="images/linkedin.svg" alt="">

                </div>
                <span class="copy">Copyright 2022 Infits. All rights reserved.</span>
            </div>

            <div class="bottom_patch">
                <img src="images/bottomvector.png" style="margin-left:3rem">
            </div>

        </div>
        <div class="col-sm-8">
            <div class="row">
                <div class="col-sm-6">
                    <div class="left_links">
                        <span class="link"style="margin-top:3rem; color: #4F1963;" >Company</span>
                        <a class="link" style="color: #8E8E8E; text-decoration: none;">About</a>
                        <a class="link" style="color: #8E8E8E; text-decoration: none;">Features</a>
                        <a class="link" style="color: #8E8E8E; text-decoration: none;">Testimonials</a>
                        <a class="link" style="color: #8E8E8E; text-decoration: none;">Get in touch</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="right_links">
                    <img class="get-vec" src="images/bg_patch_small.svg" style="width:30rem;height:8rem">
                        <span style="color: #4F1963;font-size:25px">Get the app</span>
                       
                        <div style="display: flex; gap:1rem;">
                            <a href="#" style="width: 176px;height: 64px;justify-content: space-around;justify-content: center;align-items: center;background: #FFFFFF;border: 2px solid #817FF8;border-radius: 50px; display: flex; flex-direction: row; padding:2px; text-decoration: none;">
                                <div><img style="margin-right: 0.5rem;" src="images/apple.svg" alt="apple"></div>
                                <div style="display: flex; flex-direction: column;">
                                    <div><p style=" margin-top: 1rem; font-weight: 400;font-size: 12px;line-height: 90.84%;color: #000000;">Download on the</p></div>
                                    <div><p style=" font-weight:600;font-size: 18px;line-height: 90.84%;color: #000000;">App Store</p></div>
                                </div>
                            </a>
                            <a href="#" style="width: 176px;height: 64px;justify-content: space-around;justify-content: center;align-items: center;background: #FFFFFF;border: 2px solid #817FF8;border-radius: 50px; display: flex; flex-direction: row; padding:2px;text-decoration: none;">
                                <div><img style="margin-right: 0.5rem;" src="images/gplay.svg" alt="apple"></div>
                                <div style="display: flex; flex-direction: column;">
                                    <div><p style=" margin-top: 1rem; font-weight: 400;font-size: 12px;line-height: 90.84%;color: #000000;">GET IT ON</p></div>
                                    <div><p style=" font-weight:600;font-size: 18px;line-height: 90.84%;color: #000000;">Google Play</p></div>
                                </div>
                            </a>
                            </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
<!--------------------------------------mobile-view---------------------------------------------------->
<div class="row  d-lg-none d-md-none d-xl-none" id="parent" style="margin-top:2rem" > 
    <!-- component-1 -->
      <div class="col-sm-8" style="margin-bottom:12rem;">
         <div class="row">
             <div class="col-sm-6">
                 <div class="left_links">
                     <span  class="link"style="margin-top:3rem; color: #4F1963;">Company</span>
                     <a class="link" style="color: #8E8E8E; text-decoration: none;">About</a>
                     <a class="link" style="color: #8E8E8E;text-decoration: none;">Features</a>
                     <a class="link" style="color: #8E8E8E;text-decoration: none;">Testimonials</a>
                     <a class="link" style="color: #8E8E8E;text-decoration: none;">Get in touch</a>
                 </div>
             </div>
             <div class="col-sm-6 mt-5">
                 <div class="right_links">
                 <img class="get-vec" src="images/bg_patch_small.svg" style="width:30rem;height:8rem;">
                     <span style="color: #4F1963;font-size:30px">Get the app</span> 
                     <!-- <img src="images/bg_patch_small.svg" alt=""> -->
                      <div style="display: flex; gap:1rem;">
                         <a href="#" style="width: 176px;height: 64px;justify-content: space-around;justify-content: center;align-items: center;background: #FFFFFF;border: 2px solid #817FF8;border-radius: 50px; display: flex; flex-direction: row; padding:2px; text-decoration: none;">
                             <div><img style="margin-right: 0.5rem;" src="images/apple.svg" alt="apple"></div>
                             <div style="display: flex; flex-direction: column;">
                                 <div><p style=" margin-top: 1rem; font-weight: 400;font-size: 12px;line-height: 90.84%;color: #000000;">Download on the</p></div>
                                 <div><p style=" font-weight:600;font-size: 18px;line-height: 90.84%;color: #000000;">App Store</p></div>
                             </div>
                         </a>
                         <a href="#" style="width: 176px;height: 64px;justify-content: space-around;justify-content: center;align-items: center;background: #FFFFFF;border: 2px solid #817FF8;border-radius: 50px; display: flex; flex-direction: row; padding:2px;text-decoration: none;">
                             <div><img style="margin-right: 0.5rem;" src="images/gplay.svg" alt="google"></div>
                             <div style="display: flex; flex-direction: column;">
                                 <div><p style=" margin-top: 1rem; font-weight: 400;font-size: 12px;line-height: 90.84%;color: #000000;">GET IT ON</p></div>
                                 <div><p style=" font-weight:600;font-size: 18px;line-height: 90.84%;color: #000000;">Google Play</p></div>
                             </div>
                         </a>
                         </div>
                 </div>
             </div>
         </div>

     </div>
  <!-- component-2 -->
     <div class="col-sm-4" id="btml">
         <div class="bottom_logo">
             <img src="images/infits_logo.svg" alt="">
             <div class="vec-sub"><span>Fitter</span><span class="ms-2">. Healthier</span><span class="ms-2">. Happier</span></div>
             <div class="social_links">
                 <img src="images/facebook.svg" alt="">
                 <img src="images/twitter.svg" alt="">
                 <img src="images/linkedin.svg" alt="">

             </div>
             <span class="copy">Copyright 2022 Infits. All rights reserved.</span>
         </div>

         <div class="bottom_patch">
             <img src="images/bottomvector.png" style="margin-left:3rem">
         </div>

     </div>
 </div>
</div>
<script>
function closeForm() {
  let div2 = document.getElementById("reset-sec");
  let div1 = document.getElementById("reset-sec-2");
  
  if (div1.style.display === "none") {
    div1.style.display = "block";
    div2.style.display = "none";
  } else {
    div1.style.display = "none";
    div2.style.display = "block";
  }
}
   
</script>

<script>
        let eyeicon = document.getElementById("eyeicon");
        let password = document.getElementById("password");
    
        eyeicon.onclick = function(){
            if(password.type == "password"){
                password.type = "text";
                eyeicon.src = "./images/eye-open.png";
            }else{
                password.type = "password";
                eyeicon.src = "./images/eye.png";
            }
        }
    </script>
      <script>
        let ceyeicon = document.getElementById("ceyeicon");
        let cpassword = document.getElementById("cpassword");
    
        ceyeicon.onclick = function(){
            if(cpassword.type == "password"){
                cpassword.type = "text";
                ceyeicon.src = "./images/eye-open.png";
            }else{
                cpassword.type = "password";
                ceyeicon.src = "./images/eye.png";
            }
        }
    </script>
</body>
</html>