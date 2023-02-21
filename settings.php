<?php
include "navbar.php";
$id = $_SESSION["name"];
$sql = "SELECT * FROM dietitian Where dietitianuserID ='$id' ";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$name =  explode(" ", $row['name'] );
?>
<!DOCTYPE HTML>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar menu With Sub-menus | Using HTML, CSS & JQuery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2">
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


body {
    height:100%;
        font-family: 'NATS', sans-serif !important;
        margin-bottom:2rem !important;
}

.nav {
    height: 0px;
    background-color: black;
}


/* new */
.container {
    /* display: flex; */
    justify-content: center;
    align-items: center;
    /* height: 300px; */
}

.section {
    max-width: 1100px;
    margin-top:30px;
    
    display: flex;
    justify-content: center;


}

.grid {
    margin: 0 0 0 0;
    padding: 0;
    list-style: none;
    display: flex;
    text-align: center;
    width: 100%;
    flex-wrap: wrap;
    justify-content: center;

}

.grid:after {
    clear: both;
}

.grid:after,
.xop-box:before {
    content: '';
    display: table;
}

.grid li {
    
    height: 221px;
    display: inline-block;
    margin: 35px;
    padding: 26px;
    flex: 0 0 200px;
    background: #FFFFFF;
    box-shadow: 0px 4px 8px 0px #00000040;
    /* border: none; */
    border-radius: 20px;

   

}

.box {
   
    position: relative;
    cursor: pointer;
    border-radius: 10px;
   
        
      
        
}

.box a{
    text-decoration: none;
}

.box:hover {
    transform: scale(1.10);
    background-color:none;
}

.logout-button-box {
    height: 80px;
    display: flex;
    align-items: flex-end;
    justify-content: flex-end;
}

.text-center {
    display: flex;
    justify-content: center;
}

.logout {
    position: relative;
    background-color: #ff0000;
    color: #fff;
    padding: 13px 45px;
    font-size: 1.2rem;
    border: none;
    border-radius: 10px;
    right: 0;
}

.img-1 {
  

    /* border: 1px solid #000000; */
    color: #f3e7e3 !important;
    background-repeat: no-repeat;
    border-radius: 20px;
    box-shadow: 2px 2px rgb(0, 0, 0)888;
    align-text:center;
    width: 160px;
    height: 171px !important;

}

.img-2 {
   

    /* border: 1px solid #000000; */
    color: #f3e7e3 !important;
    background-repeat: no-repeat;
    box-shadow: 2px 2px rgb(0, 0, 0)888;
    width: 171px;
    height: 171px;

}

.img-3 {
    

    /* border: 1px solid #000000; */
    color: #f3e7e3 !important;
    background-repeat: no-repeat;
    box-shadow: 2px 2px rgb(0, 0, 0)888;
    width: 171px;
    height: 171px;
}

.img-4 {
   

    /* border: 1px solid #000000; */
    color: #f3e7e3 !important;
    background-repeat: no-repeat;
    box-shadow: 2px 2px rgb(0, 0, 0)888;
    width: 171px;
    height: 171px;
}

.img-5 {
    

    /* border: 1px solid #000000; */
    color: #f3e7e3 !important;
    background-repeat: no-repeat;
    box-shadow: 2px 2px rgb(0, 0, 0)888;
    width: 171px;
    height: 171px;
}

.img-6 {
    

    /* border: 1px solid #000000; */
    color: #f3e7e3 !important;
    background-repeat: no-repeat;
    box-shadow: 2px 2px rgb(0, 0, 0)888;
    width: 171px;
    height: 171px;
}

.info {
     position: absolute;
     bottom: 0px;
    /* display: flex;
    justify-content: center; */ 
    /* width: inherit;
    height: inherit; */
    text-align: center;


}

.info h3 {
    /* font-family: 'Pacifico', cursive; 
    font-weight: 400;
	color: black;
	font-size: 42px;
	margin: 0 30px;
	padding: 100px 0 0 0;
	line-height:1.5;  */
}

.info p {
    color: rgb(9, 9, 9);
    font-family: 'Pacifico', cursive; 
    font-weight: 500;
	color: black;
	margin: 0px;
    padding: 20px;
    font-size: 20px;
    text-align:center;
   
}

.rounded{
  

border-radius: 1.2rem;

}
.logout{
width: 178px;
height: 52px;
position:absolute;
margin-right:3%;
margin-top:1rem;
margin-bottom:1rem !important;
background: #FF0000;
border-radius: 10px;
}
.mobview{
    display:none;
}
.mob_wrapper1{
    margin:10px;
    margin-left:20px;
    display: flex;

     width: 370px;
height: 52px;


background: #F3F5F8;
border-radius: 18px;
}

@media screen and (max-width: 720px) {
    .webview{
        display:none;
    }
    .mobview{
        display:flex;
        flex-direction:column;
    }
}
</style>



<body>

    <br />
    <br />
    <div class="webview">
    <div class="container">
        <div class="text-center">
            <img src="./images/settingDp.svg" class="rounded" alt="...">

            <!-- while linking use this  -->
            <!-- <h3 class="display-6 right-float"><br /> <?php echo ($name[0]) ?><br /> <?php echo($name[1])?></h3> -->

            <h3 class="display-6 right-float" style = "margin-left: 25px;font-weight:400"><br />John <br/> Wayne</h3>

        </div>
    </div>

    <div class="section">
        <ul class="grid" style="margin-left:10rem">
             <a href="profile_settings_show.php" style = "text-decoration: none; padding: 0px;">
            <li>
                <div class="box img-1">
                    <img src="icons/settings/icon1.svg" alt="">
                    <p style="text-align:center !important;font-weight: 400;color:black;font-size: 25px;margin-top:3rem">My Profile</p>
                </div>
            </li>
</a>
 <a href="referral_code.php">
            <li>
                <div class="box img-2"> 
                    <img src="icons/settings/icon1.svg" alt="">       
                    <p style="text-align:center !important;font-weight: 400;color:black;font-size: 25px;margin-top:3rem">Referral Code</p>
                  
                </div>
            </li>
              </a>
               <a href="about_us.php">
            <li>
                <div class="box img-3"> 
                    <img src="icons/settings/icon2.svg" alt="">  
                     <p style="text-align:center !important;font-weight: 400;color:black;font-size: 25px;margin-top:3rem">About Us</p>
                </div>
            </li>
             </a>
             <a href="achivement.php">
            <li>
                <div class="box img-4">
                    <img src="icons/settings/icon4.svg" alt="">
                        <p style="text-align:center !important;font-weight: 400;color:black;font-size: 25px;margin-top:3rem">My Achievements</p>
                </div>
            </li>
             </a>
               <a href="refer_friend.php">
            <li>
                <div class="box img-5">
                    <img src="icons/settings/icon1.svg" alt="">
                            <p style="text-align:center !important;font-weight: 400;color:black;font-size: 25px;margin-top:3rem">Refer To Friends</p>
                </div>
            </li>
              </a>
              <!-- // -->
              <a href="#">
            <li>
                <div class="box img-6">
                    <img src="icons/settings/icon4.svg" alt="">
                    <p style="text-align:center !importan;font-weight: 400;color:black;font-size: 25px;margin-top:3rem">Notifications</p>
                </div>
            </li>
              </a>
        </ul>

        <!-- <div class="logout-button-box">
            <button class="logout">Logout</button>
        </div> -->
    </div>
    <div>
        <button class="logout">Logout</button>
        
    </div>
    </div>
<!--------------------------------------------------MOBVIEW------------------------------>

    <div class="mobview">
        <div class="profileimg" >
        <img src="./images/settingDp.svg" id="pfp" style="margin-left:9.5rem;width:30%">
        <p  style = "margin-left: 25px;font-weight:400;font-size:30px;margin-top:0;text-align:center">John Wayne</p>
        </div>

        <div class="mob_wrapper1">
            <img src="icons/settings/icon1.svg" alt="">
            <p style="margin-top:2px;font-size:28px;margin-left:15px;font-weight:500">Referral Code</p>     
        </div>
        <div class="mob_wrapper1">
            <img src="icons/settings/icon3.svg" alt="">
            <p style="margin-top:2px;font-size:28px;margin-left:15px;font-weight:500">My Achievements</p>     
        </div>
        <div class="mob_wrapper1">
            <img src="icons/settings/icon4.svg" alt="">
            <p style="margin-top:2px;font-size:28px;margin-left:15px;font-weight:500">Notifications</p>     
        </div>
        <div class="mob_wrapper1">
            <img src="icons/settings/icon2.svg" alt="">
            <p style="margin-top:2px;font-size:28px;margin-left:15px;font-weight:500">About Us</p>     
        </div>
        <div class="mob_wrapper1">
            <img src="images/helpus.png" style="width:12%;margin-left:10px">
            <p style="margin-top:2px;font-size:28px;margin-left:15px;font-weight:500">Help</p>     
        </div>
        <div class="mob_wrapper1">
            <img src="icons/settings/icon1.svg" alt="">
            <p style="margin-top:2px;font-size:28px;margin-left:15px;font-weight:500">Referral Code</p>     
        </div>
        <div>
        <button class="logout">Logout</button>
        
    </div>
        
    </div>

</body>

</html