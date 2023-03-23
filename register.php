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
body{
    font-family: 'NATS', sans-serif;
    x-overflow:none;
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
    font-size: 25px;
    color: #8081F9;
    align-item;
    centre;
    margin-left:0.7rem;
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
    color: #A6A6A6;
    margin-top: 60px;

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
    padding: 10px;
}

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
}

.google {

    border: 1px solid #EAEAEA;
    border-radius: 15px;
    background: #FFFFFF;
    
}

.facebook {
    border: 1px solid #EAEAEA;
    border-radius: 15px;
    background: #FFFFFF;


}

.form_inputs {
    display: flex;
    justify-content: space-between;
    /* align-items: center; */
    flex-direction: column;
    padding: 5px;
    margin-left:30px;
}

#email {
    background: #F9F9FF;
    border: 1px solid #F9F9FF;
    border-radius: 15px;
    padding-left: 40px;
    width: 300px;
    height: 50px;
    margin: 10px;
}

.input_bar {
    background: #F9F9FF;
    border: 1px solid #EAEAEA;
    border-radius: 15px;
    padding-left: 40px;
    width: 300px;
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
}

.refferal_code {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    padding: 10px;
}

.blue_button {
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

.ip_box {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;


}

.ip_box img {
    z-index: 2;
    margin-right: -45px;

}

.referral_text {

    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 121.34%;
    /* or 36px */

    text-align: right;

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

    width: 300px;
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
}

.sign_btn_section {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;

}


.sign_in_sec {
    margin-left: 30px;
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
}

.blue_line {
    width: 46px;
    height: 5px;
    background: #4B99FB;
    border-radius: 1em;
}
@media screen and (max-width: 720px) {
    #home{
        background: #F8F8FF;

    }
    #hr{
        display:none;
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
        <div class="right">
            <button id="home">Home</button>
            <button class="sign" onclick="window.location.href = 'login.php';">SignIn</button>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-6">

            <div class="sform">
                <div class="header_sigin">
                    <img src="images/Vectorsignup.png" alt="">
                    <span style="font-size: 100px;">Sign Up</span>

                </div>

                <div class="signwith">
                    <div class="blue_line"> </div>
                    <span style="font-size: 25px;color: #4F1963;margin-left:1rem"> Sign Up With</span>
                </div>
                <div class="gf_btns">
                    <div data-onsuccess="onSignIn">
                        <button class="google" >
                            <img src="images/google.svg" alt="">
                            <span style="color: #4B99FB;font-size:27px;margin-left:0.4rem">Google</span>
                        </button>
                    </div>
                    <button class="facebook" style="margin-left:1rem">
                        <img src="images/facebook.svg" alt="">
                        <span style="color: #4B99FB;font-size:27px">Facebook</span>
                    </button>
                </div>
                <div class="or">
                    <span style="font-size: 25px;color: #4F1963;font-weight:400">OR</span>
                </div>
                <div class="form_inputs">
                    <form method="post" action="register.php">
                      <?php include "errors.php";  ?>
                        
                        <div class="ip_box">
                            <img src="images/account_name.svg" >
                            <input class="input_bar" name="dietitianuserID" id="name" type="text" placeholder="       Username">
                        </div>
                        <div class="ip_box">
                            <img src="images/account_name.svg" alt="">
                            <input class="input_bar" name="name" id="name" type="text" placeholder="       Full Name">
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
                            <input class="input_bar" name="password" id="password" type="password"
                                placeholder="       Password">
                        </div>

                        <div class="ip_box" style="margin-top:0rem">
                            <img src="images/shield.svg" alt="">
                            <input class="input_bar" name="password_2" id="retype_password" type="password"
                                placeholder="       Confirm Password">
                        </div>
                        
                        <div class="check">
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            <label for="vehicle1" style="margin-left:1rem"> I've read and agree with Terms and Services <br>and the Privacy
                                Policy of INFITS </label>
                        </div>
                        <div class="sign_btn_section">
                            <div class="sign_btn">
                                <button type="submit" class="sign_up btn " name="reg_user">Sign Up</button>
                            </div>
                            <div class="sign_in_sec" style="font-size: 25px;">
                                <span>Already have an account?</span>
                                <a href="login.php" style="text-decoration:none;" ><div style="color: #4F1963;margin-left:4rem;font-size: 20px;font-weight:500">Sign In</div></a>
                              
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

                    <input class="input_bar" id="retype_password" type="text" placeholder="XXXXX-XXXXX">
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


    <hr  id="hr" style="border: 2px solid #F3F3FF;width: 1204px;margin-left:9rem">
    </div>
    <div class="row" style="margin-top:2rem" ">
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
                    <div class="left_links">
                        <span style="font-size:35px;margin-top:3rem;">Company</span>
                        <div class="link" style="color: #8E8E8E;">About</div>
                        <div class="link" style="color: #8E8E8E;">Features</div>
                        <div class="link" style="color: #8E8E8E;">Testimonials</div>
                        <div class="link" style="color: #8E8E8E;">Get in touch</div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="right_links">
                    <img src="images/bg_patch_small.svg" style="width:30rem;height:8rem">
                        <span style="color: #4F1963;font-size:30px">Get the app</span>
                        <!-- <img src="images/bg_patch_small.svg" alt=""> -->
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
                    </div>
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
</body>

</html>