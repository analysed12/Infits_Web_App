<?php
include "server.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name="google-signin-client_id" content="GOOGLE_SIGNIN_CLIENT_ID">
    <title>Document</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/earlyaccess/nats.css');
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap');

    @font-face {
        font-family: 'NATS';
        src: url('./font/NATS.ttf.woff') format('woff'),
            url('./font/NATS.ttf.svg#NATS') format('svg'),
            url('./font/NATS.ttf.eot'),
            url('./font/NATS.ttf.eot?#iefix') format('embedded-opentype');
        font-weight: normal;
        font-style: normal;
    }


.top_bar{
    display: flex;
    justify-content: space-between;
    align-items:;
   
}
.top_bar img{
    margin-top: -80px;
    width: 275px;
height: 312px;
}
.bg{
    position: absolute;
    margin-top: -10px;
    z-index: -1;

}

.right{
    display: flex;
    flex-direction:row;
justify-content: center;
}

#home{
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 25px;
line-height: 8px;
width: 100px;
height: 40px;
align-items: center;
color: #8081F9;
background-color: #FFFFFF;
border: none;
padding: 0;
margin-top: 10px;

}
.sign{
    background: #F8F8FF;
box-shadow: 0px 0px 1px #C0C0FF;
border-radius: 12px;
width: 100px;
height: 40px;
margin-right: 20px;
border: none;
margin-top: 10px;
font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 25px;
line-height: 60px;
display: flex;
justify-content: center;
align-items: center;
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

.or{
    margin:20px 0;;
}

hr{
    border: 2px solid #F3F3FF;
    width:80%;
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

.sform{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    
}

.header_sigin{
    position:relative;
    right:80px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding-bottom: 15px;
}
.header_sigin img{
    margin-bottom: -70px;
    margin-left:100px;
    width: 100px;
    height: 100px;
}
.header_sigin span{
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 3em;
line-height: 89.84%;
/* identical to box height, or 90px */


color: #4F1963;

}

.signin_option{
    position:relative;
    right:40px;
    margin: 20px 0; 
}

.signin_option img{
    width:50px;
    margin-right:10px;
}

.signin_option span{
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size:2em;
    color: #4F1963;
}

.gf_btns {
    display: flex;
    gap:1rem;
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
width:140px;
height:46px;
display:flex;
flex-direction:row;
align-items:center;
justify-content:center;
}
.facebook{
    border: 1px solid #EAEAEA;
border-radius: 15px;
background: #FFFFFF;
margin-left: 10px;
width:140px;
height:46px;
display:flex;
flex-direction:row;
align-items:center;
justify-content:center;
}
.form_inputs{
    display: flex;
    justify-content: space-between;
    /* align-items: center; */
    flex-direction: column;
    padding: 0 50px 50px 50px;  
}
#email{
    background: #F9F9FF;
border: 1px solid #F9F9FF;
border-radius: 15px;
padding-left: 40px;
width: 300px;
height : 50px;
margin: 10px;
}
.input_bar{
    background: #F9F9FF;
border: 1px solid #F9F9FF;
border-radius: 15px;
padding-left: 40px;
width: 300px;
height : 50px;
margin: 10px;
}
.left_column{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 10px;
}
.refferal_code{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    padding: 10px;
}
.blue_button{
    display: flex;
    justify-content: center;
    align-items: center;
    color: #FFFFFF;
    background: #4B99FB;
    width: 60px;
    height: 60px;
border: 1px solid #EAEAEA;
border-radius: 15px;
}
.ip_box{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    
}
.ip_box img{
    z-index: 2;
    margin-right: -45px;
}
.referral_text{
    
font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 20px;
line-height: 121.34%;
padding-top:30px;
/* or 36px */

text-align: right;

color: #4F1963;
}
#password{
    background: #F9F9FF;
border-radius: 15px;

width: 300px;
height : 50px;
margin: 10px;
}
.check{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    padding: 20px 0 20px 0;
    
font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 16px;
line-height: 121.34%;
/* or 24px */
color: #4B99FB;
}

.check > label{
    margin-left:15px;
}

#name{
    color: #4F1963;
    font-weight: 400;
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
.sign_up{
    background: #4B99FB;
border-radius: 15px;
width: 130px;
height: 50px;
border : none;
color: #FFFFFF;
}
.sign_btn_section{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    
}
.sign_in_sec{
    margin-left: 30px;
}
.sign_in_sec span{
    
font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 15px;
line-height: 121.34%;
/* or 30px */

text-align: right;

color: #4B99FB;
}

#sign_in_opt{
    margin-left:90px;
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size:1.2em;
}

.footer{
    display:flex;
    flex-direction:row;
    justify-content:space-evenly;
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    margin-right:80px;
}

.foot-left{
    display:flex;
    flex-direction:column;
    position:relative;
}

.bottom_patch{
    transform:scale(70%);
}

.info{
    float: left;
    position: absolute;
    left: 125px;
    top: 80px;
    z-index: 1000;
    display:flex;
    flex-direction:column;
    /* left:230px;
    margin-top:70px; */
}

.link{
    line-height:2;
}

#moto{
    margin:10px auto;
    font-size:25px;
}

.social_links{
    margin:10px auto;
}

.social_links img{
    margin:0 20px;
}

.copy{
    margin:10px auto 0 auto;
    color: #A6A6A6;
}

.foot-mid{
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    margin-top:90px;
}

.foot-mid span{
    color: #4F1963;
    font-size:30px;
}

.link{
    font-size:20px;
    letter-spacing: 0.02em;
    color: #8E8E8E;
}

.foot-right{
    display:flex;
    flex-direction:column;
    margin-top:90px;
}

#right_bg_patch{
    transform:scale(60%);
}

#download-description{
    align-self:center;
    margin:0 0 5px 0;
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size:30px;
    color: #4F1963;
}

.play_store{
    display:flex;
    flex-direction:row;
    justify-content:space-evenly;
}

.app{
    display:flex;
    flex-direction:row;
    height:45px;
    width:140px;
    border:1px solid black;
    border-radius:50px;
    font-family: 'Calibri';
    font-style: normal;
    font-weight: 400;
    margin:0 5px;
}

.app img{
    transform: scale(60%);
}

.content{
    display:flex;
    flex-direction:column;
    justify-content:center;
    line-height:0;
}

.content p{
   font-size: 12px;
}

.content span{
    font-size:16px;
}

#terms{
    color:#A6A6A6;
    display:flex;
    flex-direction:row;
    justify-content:space-between;
    margin:95px 10px 0 100px;
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


@media all and (max-width:720px) {
    .sign{
        display:none;
    }

    .footer{
        flex-direction:column-reverse;
        justify-content:center;
        align-items:center;
        margin:0;
    }

    .foot-left{
        margin: 0 0 0 0;
    }

    .foot-mid{
        margin: 0 0 0 0;
    }

    .foot-right{
        margin: 0 0 10px 0;
    }

    #terms{
        margin:10px 0 0 0;
        justify-content: space-evenly;
    }

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
            <button class="sign" onclick="window.location.href = 'login.php';">SignIn</button>
        </div>
    </div>


        <div class="row">
            <div class="col-sm-6">

                <div class="sform">
                    <div class="header_sigin">
                        <img src="images/bg_patch_small.svg" alt="">
                        <span>Sign Up</span>
                    </div>
                    <div class="signin_option">
                    <img src="images/Line 70.jpg" alt="">
                        <span>Sign Up with</span>
                    </div>
                    <div class="gf_btns">
                    <div data-onsuccess="onSignIn">
                        <button class="google" >
                            <img src="images/google.svg" alt="">
                            <span style="color: #4B99FB;font-size:27px;margin-left:0.4rem">Google</span>
                        </button>
                    </div>
                        <button class="facebook">
                            <img src="images/facebook.svg" alt="">
                            <span>Facebook</span>
                        </button>
                    </div>
                    <div class="or">
                        <span>OR</span>
                    </div>

                    <div class="form_inputs">
                    <form method="post" action="register.php">
                      <?php include "errors.php";  ?>                       
                        <div class="ip_box">
                            <img src="images/account_name.svg" alt="">
                            <input class="input_bar" name="dietitianuserID" id="name" type="text" placeholder="       Username">
                        </div>
                        <div class="ip_box">
                            <img src="images/account_name.svg" alt="">
                            <input class="input_bar" name="name" id="name" type="text" placeholder="       Name">
                        </div>
                        <div class="ip_box">
                        <img src="images/mobile_form.svg" alt="">
                            <input class="input_bar" name="mobile" id="mobile" type="text" placeholder="       Mobile">
                        </div>

                        <div class="ip_box">
                        <img src="images/letter.svg" alt="">
                            <input class="input_bar" name="email" id="email" type="text" placeholder="       Email">
                        </div>
                        <div class="ip_box">
                        <img src="images/shield.svg" alt="">
                            <input class="input_bar" name="password" id="password" type="password" placeholder="       Password">
                        </div>
                        <div class="ip_box">
                         <img src="images/shield.svg" alt="">
                            <input class="input_bar" id="retype_password" name="password_2"type="password" placeholder="       Confirm Password">
                        </div>
                        <div class="check">
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            <label for="vehicle1"> I've read and agree with Terms and Services <br>and the  Privacy Policy of <span id="name">INFITS</span> </label>
                        </div>
                        <div class="sign_btn_section">
                            <div class="sign_btn">
                                <button  type="submit" class="sign_up" name="reg_user">Sign Up</button>
                            </div>
                            <div class="sign_in_sec">
                                <span>Already have an account?</span>
                               <a href="login.php" style="background-color:none"> <div id="sign_in_opt">Sign In</div></a>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 ">
                <div class="left_column">
                    
                    <div class="mobile d-none d-sm-block" >
                    <img src="images/mobile.svg" alt="">   
                    </div>

                    <span class="referral_text">Have a referral code? Verify here</span>
                    <div class="refferal_code">

                    <input class="input_bar" id="retype_password" type="text" placeholder="XXXXX-XXXXX">
                    <div class="blue_button">
                            <img src="images/arrow.svg" alt="">
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
       <div class="footer">
            <div class="foot-left">
                <img  class="bottom_patch" src="images/bg_patch_bottom.svg" alt="">
                <div class="info">
                    <img id="logo" src="images/logo.png" alt="">
                    <span id="moto">Fitter.Healthier.Happier</span>
                    <div class="social_links">
                            <img src="images/facebook.svg" alt="">
                            <img src="images/twitter.svg" alt="">
                            <img src="images/linkedin.svg" alt="">              
                    </div>
                    <span class="copy">Copyright 2022 Infits. All rights reserved</span>
                </div>
            </div>
            <div class="foot-mid">
                <span>Company</span>
                <div class="link">About</div>
                <div class="link">Features</div>
                <div class="link">Testimonials</div>
                <div class="link">Get in touch</div>
            </div>
            <div class="foot-right">
                <!-- <img id="right_bg_patch" src="images/bg_patch_small.svg" alt=""> -->
                <span id ="download-description">Get the app</span>   
                    <div class="play_store">
                        <div class="app">
                            <img src="images/apple.svg" alt="">
                            <div class="content">
                                <p>Download on the</p>
                                <span><strong>App Store</strong></span>
                            </div>                         
                        </div>
                        <div class="app">
                            <img src="images/gplay.svg" alt="">
                            <div class="content">
                                <p>Get it on</p>
                                <span><strong>Google Play</strong></span>
                            </div>
                        </div>
                    </div>
                    <div id="terms">
                        <p>Terms of Use</p>
                        <p>Privacy Policy</p>
                    </div>
            </div>
       </div>

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
</body>
</html>