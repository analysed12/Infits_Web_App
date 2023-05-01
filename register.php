<?php
include "server.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <title>Signup</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- <script src="https://apis.google.com/js/platform.js" async defer></script> -->
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
/* *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    font-family: 'NATS', sans-serif;
    x-overflow:none;
} */

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
    font-size: 30px;
   
    color:  #8081F9;
    background-color: #FFFFFF;
    border: none;
    margin-bottom: 10px;
}


.sign {
    background: #F8F8FF;
    box-shadow: 0px 0px 10px #C0C0FF;
    border-radius: 12px;
    width: 117px;
    height: 50px;
    border: none;
    margin-top:0.7rem;
    margin-right:0.7rem;
    font-family: 'NATS';
    font-style: normal;
    font-weight: 500;
    font-size: 30px;
    color: #8081F9;
    align-items: center;
    
    margin-left:0.7rem;
}
.get-vec {
    margin-bottom: -110px;
}
.mobile img {
    width: 400px;
    height: 400px;
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

.right_links img {
    margin-bottom: -110px;
}

.play_store {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-direction: row;
    padding: 20px;
}

.content {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 20px;
}

.apple {
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

.content p {
    font-family: 'Calibri';
    font-style: normal;
    font-weight: 400;
    font-size: 12px;
    line-height: 90.84%;
    /* or 11px */

    color: #000000;
}

.content span {
    font-family: 'Calibri';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 90.84%;
    /* or 11px */


    color: #000000;
}

.apple img {
    margin-top: -110px;
}

.play {
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

.play p {
    font-family: 'Calibri';
    font-style: normal;
    font-weight: 400;
    font-size: 12px;
    line-height: 90.84%;
    /* or 11px */

    color: #000000;
}

.play span {
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

.sform {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-top: -3rem;

}
.bar{
    padding-left: 0px;
}

/* .bottom_logo {
    
    display: flex;
    justify-content: center;
    
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
   
    color: #A6A6A6;
    margin-top: 60px;

}

.bottom_patch {
    margin-left: -500px;
    
    z-index: -1;
}

.social_links {
    display: flex;
    justify-content: space-between;
   
    flex-direction: row;
    padding: 10px;
} */

.header_sigin {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 10px;
}

.header_sigin img {
    margin-bottom: -80px;
    width: 100px;
    height: 100px;
}

.header_sigin span {
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 40px;
    line-height: 89.84%;
    /* identical to box height, or 90px */


    color: #4F1963;

}

.gf_btns {
    display: flex;
    justify-content: space-between;
    /* align-items: center; */
    flex-direction: row;
    padding: 10px;
    margin-left:-3rem;
}

.google {

    /* border: 1px solid #EAEAEA;
    border-radius: 15px;
    background: #FFFFFF;
     */
    display: flex;
    align-items: center;
    /* margin-top: 2rem; */
    text-decoration: none;
    padding:0px 12px ;
    height: 50px;
    width: 150px;
    border-radius: 15px;
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 23px;
    border: 1px solid #EAEAEA;
    border-radius: 15px;
    background: #FFFFFF;
    margin-right: 10px;
    color: #4B99FB;
}

.facebook {
    /* border: 1px solid #EAEAEA;
    border-radius: 15px;
    background: #FFFFFF; */
    padding:0px 12px ;
    display: flex;
    align-items: center;
    text-decoration: none;
    height: 50px;
    width: 160px;
    border-radius: 15px;
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 23px;
    border: 1px solid #EAEAEA;
    border-radius: 15px;
    background: #FFFFFF;
    margin-left: 10px;
    color: #4B99FB;


}

.form_inputs {
    display: flex;
    justify-content: space-between;
    /* align-items: center; */
    flex-direction: column;
    padding: 5px;
    margin-left:-2rem;
}

#email {
    background: #F9F9FF;
    border: 1px solid #F9F9FF;
    border-radius: 15px;
    padding-left: 40px;
    width: 345px;
    height: 50px;
    margin: 10px;
}

.input_bar {
    background: #F9F9FF;
    border: 1px solid #EAEAEA;
    border-radius: 15px;
    padding-left: 50px;
    width: 345px;
    height: 50px;
    margin: 10px;
    /* color: #CDCDCD; */
    color: #000000;
}

.left_column {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 10px;
    margin-top: -6rem;
}

.refferal_code {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    margin-left: 3rem;
}

.blue_button {
    display: flex;
    justify-content: center;
    align-items: center;
    color: #FFFFFF;
    background: #4B99FB;
    width: 60px;
    height: 50px;
    border: 1px solid #EAEAEA;
    border-radius: 15px;
}

.ip_box {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;


}

.ip_box img {
    z-index: 2;
    margin-right: -55px;

}

.referral_text {

    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 121.34%;
    /* or 36px */

    margin-left:-100px;

    color: #4F1963;
}

#name {
    border: 1px solid #EAEAEA;
}

#mobile {
    border: 1px solid #EAEAEA;
}

#email {
    border: 1px solid #EAEAEA;
}

#password {
    background: #F9F9FF;
    border: 1px solid #EAEAEA;
    border-radius: 15px;

    width: 345px;
    height: 50px;
    margin: 10px;
}

#retype_password {
    border: 1px solid #EAEAEA;
}

.check {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    padding: 10px;

    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 121.34%;
    /* or 24px */


    color: #4B99FB;
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

.sign_up {
    background: #4B99FB;
    border-radius: 15px;
    width: 130px;
    height: 50px;
    border: none;
    color: #FFFFFF;
    font-size: 22px;
    margin-left: -2.5rem;
}

.sign_btn_section {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;

}


.sign_in_sec {
    margin-left: 70px;
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

.signwith {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    margin-top: 5px;
    margin-left: -11rem;
}

.blue_line {
    width: 46px;
    height: 5px;
    background: #4B99FB;
    border-radius: 1em;
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
.row{
    margin-left:2rem;
}
.down{
    display:flex;
    justify-content: space-between;
    align-items: center;
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 124.84%;
    color: #A6A6A6;
    margin-top: 3rem;
    gap:2rem;
}
.input_bar1{
    background: #F9F9FF;
    border: 1px solid #EAEAEA;
    border-radius: 15px;
    padding-left: 10px;
    width: 345px;
    height: 50px;
    margin: 10px;
    /* color: #CDCDCD; */
    color: #000000;

}
/***************************modal*********************************/
.close{
    display: flex;
    justify-content: flex-end;
  }
.modal-title{
 font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 50px;
/* line-height: 106px; */
/* identical to box height */
color: #4F1963;

}
.modal-subtitle{
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 40px;
    line-height: 142.8%;
     /* or 57px */
    color: #D850E2;
}
.modal-para{
display: flex;
flex-wrap: wrap !important;
/* left: 7.69%;
right: 11.58%;
top: 15.25%;
bottom: 4.75%; */
padding-right: 4rem;
font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 30px;
line-height: 142.8%;
/* or 43px */
text-align: justify;
color: #D850E2;
height: 1296px;
width: 100%;
left: 97px;
top: 247px;
border-radius: nullpx;
overflow-y:auto;
/* border: 1px solid red; */

}
.modal-para::-webkit-scrollbar{
    background: #F3F3F3;
    width: 10px;
    border-radius:30px;
   }
.modal-para::-webkit-scrollbar-thumb{
    background-color: #D6D6D6;
    border-radius:30px;

}
.modal {
  display: none; 
  position:fixed; 
  z-index: 999; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.4); 
  
}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto; 
  padding: 1rem 4rem 3rem 4rem;
  border: 1px solid #888;
  width: 80%;
  height:90vh;
  box-shadow: 0px 0px 20px 0px #00000040;
  border-radius: 30px;
}

.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

@media screen and (max-width: 720px) {
    #home{
        background: none;

    }
    #hr{
        display:none;
    }
    .modal-title{
        font-size: large;
    }
    .modal-subtitle{
        font-size: large;
    }
    .modal-para{
        font-size: small;
        padding-right:1rem ;
    }
    .modal-para::-webkit-scrollbar{
    width: 6px;
    }
}
/* added by me */

@media screen and (max-width: 720px) {
.sform{
    margin-left:9rem;
}
}
@media screen and (max-width: 720px) {
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
    margin-top: 2rem;
}
.sign{
    margin-left:2rem;
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
    width: 400px;
    height: 400px;
    
}
.bottom_patch{
    margin-left: -530px;
}
}
@media screen and (max-width: 768px){
    .sign{
        margin-left: 11rem;
    }
    
    
}
@media screen and (max-width: 768px){
.input_bar1{
    margin-left: 7rem;
    margin-top: 5rem;
}
.blue_button{
    margin-top: 5rem;
}
.referral_text{
    margin-top: 7rem;
}
.right{
    margin-left: -4rem;
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
        <div class="right" style="margin-right: 1rem; margin-top: 1.5rem;">
            <button id="home">Home</button>
            <button class="sign" onclick="window.location.href = 'login.php';">SignIn</button>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-6">

            <div class="sform">
                <div class="header_sigin">
                    <img src="images/Vectorsignup.png" alt="">
                    <span style="font-size: 100px; margin-left: -5.5rem;">Sign Up</span>

                </div>

                <div class="signwith">
                    <div class="blue_line"> </div>
                    <span style="font-size: 25px;color: #4F1963;margin-left:1rem"> Sign Up with</span>
                </div>
                <div class="gf_btns">
                    <div data-onsuccess="onSignIn">
                        <!-- <button class="google" >
                            <img src="images/google.svg" alt="">
                            <span style="color: #4B99FB;font-size:27px;margin-left:0.4rem">Google</span>
                        </button> -->
                        <a href="<?php echo $client->createAuthUrl(); ?>" class="google">
                        <img style="width: 30px; height: 30px;" src="images/google.svg" alt="">
                        <span class="ps-2">Google</span>
                    </a>    
                        
                    </div>
                    <!-- <button class="facebook" style="margin-left:1rem">
                        <img src="images/facebook.svg" alt="">
                        <span style="color: #4B99FB;font-size:27px">Facebook</span>
                    </button> -->
                    <button type="submit" name="login" value="Facebook" class="facebook">
                    <img style="width: 30px; height: 30px;" src="images/facebook.svg" alt="">
                    <span class="ps-2">Facebook</span>
                    </button>
                </div>
                <div class="or">
                    <span style="font-size: 25px;color: #4F1963;font-weight:400; margin-left:-3rem;">0r</span>
                </div>
                <div class="form_inputs">
                    <form method="post" action="register.php">
                      <?php include "errors.php";  ?>
                        
                        <div class="ip_box">
                            <img src="images/account_name.svg" >
                            <input class="input_bar" name="dietitianuserID" id="name" type="text" placeholder=" Username">
                        </div>
                        <div class="ip_box">
                            <img src="images/account_name.svg" alt="">
                            <input class="input_bar" name="name" id="name" type="text" placeholder=" Full Name">
                        </div>
                        <div class="ip_box">
                            <img src="images/mobile_form.svg" alt="">
                            <input class="input_bar" name="mobile" id="mobile" type="text" placeholder=" Mobile">
                        </div>
                        <div class="ip_box">
                            <img src="images/letter.svg" alt="">
                            <input class="input_bar" name="email" id="email" type="text" placeholder="    Email">
                        </div>
                        <div class="ip_box">
                            <img src="images/shield.svg" alt="">
                            <input class="input_bar" name="password" id="password" type=" password"
                                placeholder=" Password">
                        </div>

                        <div class="ip_box" style="margin-top:0rem">
                            <img src="images/shield.svg" alt="">
                            <input class="input_bar" name="password_2" id="retype_password" type="password"
                                placeholder="       Confirm Password">
                        </div>
                        
                        <div class="check">
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" checked style="margin-left: -3rem;">
                            <a for="vehicle1" style="margin-left:1rem; cursor: pointer;"id="termsBtn"> I've read and agree with Terms and Services <br>and the Privacy
                                Policy of INFITS </a>
                        </div>
                        <!----------------------- terms and conditions popup--------------------->
                        <div id="termsModal" class="modal">
                           <div class="modal-content" style="margin-top:1rem; margin-bottom: 0px;">
                               <span class="close">&times;</span>
                               <h2 class="modal-title">Terms & Conditions</h2>
                               <p class="modal-subtitle">LEGAL AGREEMENT</p>
                               <div class="modal-para d-flex justify-content-center">
                               <p>This user agreement (“<b style="color:
                                #4F1963;font-weight: 400;">Agreement</b>”) is an agreement between you and iNFITS Products And Services Private Limited (“<b style="color:
                                #4F1963;font-weight: 400;">INFITS</b>” or “<b style="color:
                                #4F1963;font-weight: 400;">we</b>” or “<b style="color:
                                #4F1963;font-weight: 400;">us</b>” as the context requires) governing your use of INFITS's products, software and/or services (referred to collectively as the “<b style="color:
                                #4F1963;font-weight: 400;">Services</b>”) with the characteristics and features as described on www.Infits.com (“<b style="color:
                                #4F1963;font-weight: 400;">Website</b>”) and the INFITS mobile App (“<b style="color:
                                #4F1963;font-weight: 400;">App</b>”). INFITS may have subsidiaries and affiliated legal entities worldwide (“<b style="color:
                                #4F1963;font-weight: 400;">Sunsidairies and Affiliates</b>”), providing the Services to you on behalf of INFITS. You acknowledge and agree that the Subsidiaries and Affiliates will be entitled to provide the Services to you under the terms of this Agreement.</p>
                                <p> accessing the Website or the App, at your option, registering thereon, and thereafter using the Services as a member or guest, you agree to be bound by this Agreement and the terms contained in it. This Agreement governs your access and use of this Website/ App and applies to all visitors, users, and others who access the Service (“<b style="color:
                                    #4F1963;font-weight: 400;">Users</b>”). If you disagree with the terms contained in this Agreement, you are not permitted to use this Website/ App. INFITS will not be liable for any consequences arising from your unauthorized use. We may revise these terms of use at any time by amending this page and the terms hereof. The revised terms of use shall be posted on the Website/App, and you are expected to check this page from time to time to take notice of any changes we make, as they are binding on you. Some of these provisions may be superseded by provisions or notices published elsewhere on our Website/ App. All changes are effective as soon as we post them, and by continuing to use the Website/App and avail of the Services, you agree to be bound by the revised terms and conditions of use. Your use of the Website/App is subject to the most current version of the terms of use posted on the Website/App at the time of such use.
                                (<b style="color:
                                #4F1963;font-weight: 400;">INFITS</b>) has created this Website/App to provide Users, the Services that document various activities of users, which include (<b style="color:
                                #4F1963;font-weight: 400;">step tracking, sleep monitoring, meal/calorie tracking, diet charing, weight tracking, water intake, heart rate monitoring</b>) and (<b style="color:
                                #4F1963;font-weight: 400;">exercise/workout tracking</b>) and send an end-to-end analysis to their preferred instructors on a daily basis. We are not a medical organization and do not provide any specific workout or exercise plans. Any milestones, messages, live videos, workout plans, and dietary advice are provided by your instructors, and INFITS has no claim or responsibility over the misconstrued medical advice, prescription, or diagnosis.
                                </p>


                            </div>
                            </div>
                        </div>
                        <div class="sign_btn_section">
                            <div class="sign_btn">
                                <button type="submit" class="sign_up btn " name="reg_user">Sign Up</button>
                            </div>
                            <div class="sign_in_sec" style="font-size: 25px;">
                                <span>Already have an account?</span>
                                <a href="login.php" style="text-decoration:none;" ><div style="color: #4F1963;margin-left:5.5rem;font-size: 20px;font-weight:500; margin-top:-0.5rem;">Sign In</div></a>
                              
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <div class="col-sm-6 ">
            <div class="left_column">

                <div class="mobile d-none d-sm-block">
                    <img src="images/mobile.svg" style="width:500px;height:500px">
                </div>

                <!-- <div class="ip_box" style="margin-top:4rem">
                            <img src="images/shield.svg" alt="">
                            <input class="input_bar" name="password_2" id="retype_password" type="text"
                                placeholder="       Confirm Password">
                </div> -->

                <span class="referral_text">Have a referral code? Verify here</span>
                <div class="refferal_code">

                    <input class="input_bar1 bar " id="retype_password" type="text" placeholder="XXXXX-XXXXX">
                    <div class="blue_button">
                        <img src="images/arrow.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
    </div>

    </div>


    <!-- <hr  id="hr" style="border: 2px solid #EDEDFE; width: 1204px;"> -->
    </div>
    <!-- <div class="row" style="margin-top:2rem">
        <div class="col-sm-4" id="btml">
            <div class="bottom_logo">
                <img src="images/infits_logo.svg" alt="">
                <span style="font-size:30px !important,font-weight:500;text-align:center !important">Fitter.Healthier.Happier</span>
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
                    <div class="left_links" style="margin-right: 10rem; margin-top:-3rem;">
                        <span style="font-size:35px;margin-top:3rem;">Company</span>
                        <div class="link" style="color: #8E8E8E;">About</div>
                        <div class="link" style="color: #8E8E8E;">Features</div>
                        <div class="link" style="color: #8E8E8E;">Testimonials</div>
                        <div class="link" style="color: #8E8E8E;">Get in touch</div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="right_links" style="margin-top: -8rem;">
                    <img src="images/bg_patch_small.svg" style="width:30rem;height:8rem">
                        <span style="color: #4F1963;font-size:30px">Get the app</span>
                        
                        <div class="play_store">
                            <div class="apple" style="padding:0.5rem">
                                <img src="images/apple.svg" alt="">
                                <div class="content">
                                    <p>Download on the</p>
                                    <span>App Store</span>
                                </div>

                            </div>
                            
                            <div class="play" style="padding:0.5rem">
                                <img src="images/gplay.svg" alt="">
                                <div class="content">
                                    <p style="font-size:16px">Get it on</p>
                                    <span style="font-size:14px; font-weight:600 !important">Google Play</span>
                                </div>
                            </div>
                            
                        </div>
                        <div class="down">
                                <h6>Terms of use</h6>
                                <h6>Privacy Policy</h6>
                                  </div>
                    </div>
                    
                </div>
            </div>

        </div>
    </div> -->

    <!--  view footer -->
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
                    <div class="left_links" style="margin-right: 10rem; margin-top: -2.5rem;">
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
                        <span style="color: #4F1963;font-size:30px; margin-top: -5rem;">Get the app</span>
                       
                        <div style="display: flex; gap:1rem; margin-top: 2rem;">
                            <a href="#" style="width: 176px;height: 64px;justify-content: space-around;justify-content: center;align-items: center;background: #FFFFFF;border: 2px solid #817FF8;border-radius: 50px; display: flex; flex-direction: row; padding:2px; text-decoration: none;">
                                <div><img style="margin-right: 0.5rem; margin-top: -7rem;" src="images/apple.svg" alt="apple"></div>
                                <div style="display: flex; flex-direction: column;">
                                    <div><p style=" margin-top: 1rem; font-weight: 400;font-size: 12px;line-height: 90.84%;color: #000000;">Download on the</p></div>
                                    <div><p style=" font-weight:600;font-size: 18px;line-height: 90.84%;color: #000000;">App Store</p></div>
                                </div>
                            </a>
                            <a href="#" style="width: 176px;height: 64px;justify-content: space-around;justify-content: center;align-items: center;background: #FFFFFF;border: 2px solid #817FF8;border-radius: 50px; display: flex; flex-direction: row; padding:2px;text-decoration: none;">
                                <div><img style="margin-right: 0.5rem; margin-top: -7rem;" src="images/gplay.svg" alt="apple"></div>
                                <div style="display: flex; flex-direction: column;">
                                    <div><p style=" margin-top: 1rem; font-weight: 400;font-size: 12px;line-height: 90.84%;color: #000000;">GET IT ON</p></div>
                                    <div><p style=" font-weight:600;font-size: 18px;line-height: 90.84%;color: #000000;">Google Play</p></div>
                                </div>
                            </a>
                            </div>
                            <div class="down">
                                <h6>Terms of use</h6>
                                <h6>Privacy Policy</h6>
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
                             <div><img style="margin-right: 0.5rem; margin-top: -6.5rem;" src="images/apple.svg" alt="apple"></div>
                             <div style="display: flex; flex-direction: column;">
                                 <div><p style=" margin-top: 1rem; font-weight: 400;font-size: 12px;line-height: 90.84%;color: #000000;">Download on the</p></div>
                                 <div><p style=" font-weight:600;font-size: 18px;line-height: 90.84%;color: #000000;">App Store</p></div>
                             </div>
                         </a>
                         <a href="#" style="width: 176px;height: 64px;justify-content: space-around;justify-content: center;align-items: center;background: #FFFFFF;border: 2px solid #817FF8;border-radius: 50px; display: flex; flex-direction: row; padding:2px;text-decoration: none;">
                             <div><img style="margin-right: 0.5rem; margin-top: -6.5rem;" src="images/gplay.svg" alt="google"></div>
                             <div style="display: flex; flex-direction: column;">
                                 <div><p style=" margin-top: 1rem; font-weight: 400;font-size: 12px;line-height: 90.84%;color: #000000;">GET IT ON</p></div>
                                 <div><p style=" font-weight:600;font-size: 18px;line-height: 90.84%;color: #000000;">Google Play</p></div>
                             </div>
                         </a>
                         </div>
                         <div class="down">
                                <h6>Terms of use</h6>
                                <h6>Privacy Policy</h6>
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

    <!-- <script type="text/javascript">
            function onSignIn(googleUser) {
                var profile = googleUser.getBasicProfile();


                if (profile) {
                    $.ajax({
                        type: 'POST',
                        url: 'social_login.php',
                        data: {
                            id: profile.getId(),
                            name: profile.getName(),
                            email: profile.getEmail()
                        }
                    }).done(function(data) {
                        window.location.href = 'index.php';
                    }).fail(function() {
                        alert("Something went wrong !!");
                    });
                }


            }
    </script> -->

    <script type="text/javascript">
// google signin
function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    console.log('profile')

    if (profile) {
        $.ajax({
            type: 'POST',
            url: 'social_login.php',
            data: {
                id: profile.getId(),
                name: profile.getName(),
                email: profile.getEmail()
            }
        }).done(function(data) {
            window.location.href = 'index.php';
        }).fail(function() {
            alert("Something went wrong !!");
        });
    }


}
</script>

    </div>
    <!--------------------------terms and conditions modal--------------------------------------------->
    <script>
        const termsBtn = document.getElementById("termsBtn");
    const termsModal = document.getElementById("termsModal");
    const closeBtn = document.getElementsByClassName("close")[0];
    
    termsBtn.onclick = function() {
      termsModal.style.display = "block";
    }
    
    closeBtn.onclick = function() {
      termsModal.style.display = "none";
    }
    
    window.onclick = function(event) {
      if (event.target == termsModal) {
        termsModal.style.display = "none";
      }
    }
    
    </script>
</body>

</html>