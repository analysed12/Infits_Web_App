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

body {
    margin: 0;
    /* width: 100vw;
        height: 100vh; */
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
    margin: 0 0;
    padding: 6% 1%;
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
    width: 100%;
    height: 100%;
    position: relative;
    cursor: pointer;
    border-radius: 10px;
    -webkit-transition: 0.3s ease-in-out,
        -webkit-transform 0.3s ease-in-out;
    -moz-transition: 0.3s ease-in-out,
        -moz-transform 0.3s ease-in-out;
    transition: all 0.3s ease-in-out,
        transform 0.3s ease-in-out, ;
        
      
        
}

.box a{
    text-decoration: none;
}

.box:hover {
    transform: scale(1.10);
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
    background:

        /* bottom, image */
        url(./icons/settings/icon1.svg);
    background-position: center top;

    /* border: 1px solid #000000; */
    color: #f3e7e3 !important;
    background-repeat: no-repeat;
    border-radius: 20px;
    box-shadow: 2px 2px rgb(0, 0, 0)888;
    align-text:center;

}

.img-2 {
    background:

        /* bottom, image */
        url(./icons/settings/icon1.svg);
    background-position: center top;

    /* border: 1px solid #000000; */
    color: #f3e7e3 !important;
    background-repeat: no-repeat;
    box-shadow: 2px 2px rgb(0, 0, 0)888;

}

.img-3 {
    background:

        /* bottom, image */
        url(./icons/settings/icon2.svg);
    background-position: center top;

    /* border: 1px solid #000000; */
    color: #f3e7e3 !important;
    background-repeat: no-repeat;
    box-shadow: 2px 2px rgb(0, 0, 0)888;
}

.img-4 {
    background:

        /* bottom, image */
        url(./icons/settings/icon3.svg);
    background-position: center top;

    /* border: 1px solid #000000; */
    color: #f3e7e3 !important;
    background-repeat: no-repeat;
    box-shadow: 2px 2px rgb(0, 0, 0)888;
}

.img-5 {
    background:

        /* bottom, image */
        url(./icons/settings/icon1.svg);
    background-position: center top;

    /* border: 1px solid #000000; */
    color: #f3e7e3 !important;
    background-repeat: no-repeat;
    box-shadow: 2px 2px rgb(0, 0, 0)888;
}

.img-6 {
    background:

        /* bottom, image */
        url(./icons/settings/icon4.svg);
    background-repeat: no-repeat;
    background-position: center top;

    /* border: 1px solid #000000; */
    color: #f3e7e3 !important;
    background-repeat: no-repeat;
    box-shadow: 2px 2px rgb(0, 0, 0)888;
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
border: 2px solid #FFFFFF;
box-shadow: 0px 10px 10px 0px #FFB6C1;
border-radius: 100px;

}
</style>



<body>

    <br />
    <br />
    <div class="container">
        <div class="text-center">
            <img src="./images/settingDp.svg" class="rounded" alt="...">
            <!-- <h3 class="display-6 right-float"><br /> <?php echo ($name[0]) ?><br /> <?php echo($name[1])?></h3> -->
            <h3 class="display-6 right-float" style = "margin: 20px;"><br />John <br/> Wayne</h3>

        </div>
    </div>

    <div class="section">
        <ul class="grid">
            <li>
                <div class="box img-1">
                    <a href="profile_settings_show.php">
                        <div class="info">
                            <p style="text-align:center !important;">My Profile</p>
                        </div>
                    </a>
                </div>
            </li>
            <li>
                <div class="box img-2">
                    <a href="referral_code.php">
                        <div class="info">
                            <p>Referral Code</p>
                        </div>
                    </a>
                </div>
            </li>
            <li>
                <div class="box img-3">
                    <a href="about_us.php">
                        <div class="info">
                            <p>About Us</p>
                        </div>
                    </a>
                </div>
            </li>
            <li>
                <div class="box img-4">
                    <a href="achivement.php">
                        <div class="info">
                            <p>My Achievements</p>
                        </div>
                    </a>
                </div>
            </li>
            <li>
                <div class="box img-5">
                    <a href="refer.php">
                        <div class="info">
                            <p>Refer To Friends</p>
                        </div>
                    </a>
                </div>
            </li>
            <li>
                <div class="box img-6">
                    <a href="#">
                        <div class="info">
                            <p>Notifications</p>
                        </div>
                    </a>
                </div>
            </li>
        </ul>

        <!-- <div class="logout-button-box">
            <button class="logout">Logout</button>
        </div> -->
    </div>

</body>

</html>