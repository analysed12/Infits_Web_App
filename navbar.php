<?php if (session_status() === PHP_SESSION_NONE) { session_start(); }
include('config.php');
  if (!isset($_SESSION['name'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }

  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['name']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infits</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap');
@font-face {
    font-family: 'NATS';
    src:url('./font/NATS.ttf.woff') format('woff'),
        url('./font/NATS.ttf.svg#NATS') format('svg'),
        url('./font/NATS.ttf.eot'),
        url('./font/NATS.ttf.eot?#iefix') format('embedded-opentype'); 
    font-weight: normal;
    font-style: normal;
}

body {
    margin: 0;
    background: url('./images/Vector_Bottom_Right.svg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: bottom -51px right -40px;
    /* width: 100vw;
        height: 100vh; */
}

.nav {
    height: 0px;
    background-color: black;
}

.nav-res {
    display: none;
}

.sidenav {
    min-width: 15vw;
    max-width: fit-content;
    height: 100vh;
    background-color: white;
    text-align: left;
    position: sticky;
    top: 0;
    float: left;
    display: flex;
    flex-direction: column;
    border-right: #E8ECF5 2px solid;
    background: url('./images/Vector_Top_Left.svg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: 0 -60px;
}

.sidenav .sidenavlink {
    color: #131635;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    font-family: 'NATS';
    text-decoration: none;
    margin-bottom: 5px;
    margin-left: 25px;
    font-style: normal;
    font-weight: 400;
    font-size: 23px;
    margin-right: 15px;
    padding-right: 15px;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    position: relative;
    letter-spacing: 0 !important;
}

.sidenav .menu-bottom {
    position: absolute;
    bottom: 10px;
    display: flex;
    flex-direction: column;
    width: 100%;
}

.sidenav .sidenavlink:hover {
    cursor: pointer;
}

#logo {
    height: auto;
    width: 174px;
    margin-left: 10px;
    margin-bottom: 4.5vh;
    margin-top: 2vh;
}

.sidenav .nav-icon {
    height: 20px;
    width: 20px;
    margin-right: 15px;
    margin-left: 10px;
    border-radius: 0 !important;
}

.tabcontent {
    color: white;
    display: none;
    padding: 40px 20px;
    height: 100%;
}

.topnav {
    position: relative;
    min-height: 10%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 1vh;
    border-bottom: #E8ECF5 2px solid;
}

.topnav .topnav-content p {
    margin: 0;
}

.topnav-content {
    margin-left: 30px;
    color: #8D8D8D;
    font-style: normal;
    font-family: 'Manrope', serif;
    font-weight: 700;
    display: flex;
    justify-content: center;
    flex-direction: column;
}

#topnav-content-1 {
    font-size: 20px;
    letter-spacing: 0.05em;
    margin-bottom: 5px;
}

#topnav-content-2 {
    letter-spacing: 1px;
    font-weight: 500;
    font-size: 15px;
}

.topnav-content #topnav-content-3 {
    font-family: 'Poppins';
    /* NATS */
    font-style: normal;
    font-weight: 400;
    font-size: 33px;
    color: #000000;
}

#topnav-content-1-name {
    color: #212121;
}

.topnav-icons {
    height: 100%;
    margin-right: 3vw;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
}

.topnav-icons img {
    margin-left: 30px;
    justify-self: center;
}

a.sidenavlink:hover,
.navactive {
    align-items: center;
    background: rgba(114, 130, 251, 0.1);
    color: #0177FB !important;
    border-radius: 10px;
}
.navactive::after {
	content: "";
    width: 6px;
    height: 50px;
    background: #7282FB;
    position: absolute;
    left: -25px;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
}
a {
    padding: 1px 2px 1px 3px;
    text-decoration: none;
}

@media screen and (min-width: 720px) {

    /* Styles go here */
    .mobile-menu {
        display: none;
    }
}

@media (min-width: 0px) and (max-width: 720px) {
    .sidenav {
        display: none;
    }
}

/*--------------------- MOBILE SIDENAV---------------------*/
/*HAMBURGER MENU*/
.sidenavv {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #ffffff;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenavv a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 20px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenavv a:hover {
    border: 1px solid #E5F1FF;
    background-color: #E5F1FF;
    color: #0177FB !important;
    border-radius: 10px;
}

.sidenavv .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}
.notification img {
    height: 30px;
    margin-left: 0;
}

.noti-box {
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    position: absolute;
    top: 60px;
    right: 40px;
    width: 400px;
    height: 440px;
    filter: drop-shadow(0px 0px 4px rgba(0, 0, 0, 0.25));
    border-radius: 20px;
    background: #FFFFFF;
    padding: 15px 20px;

    display: none;
    /* transition: 0.3s ease-in-out; */
    /* animation: slideDown 1s forwards; */
    /* animation: slideUp 1s forwards; */
}
@keyframes slideDown {
    from {
      top: -450px;
    }
    to {
      top: 60px;
    }
}
@keyframes slideUp {
    from {
      top: 60px;
    }
    to {
      top: -500px;
    }
}

.top {
    display: flex;
    justify-content: space-between;
    font-size: 28px;
    color: #292A2E;
    margin-right: 15px;
    margin-bottom: 10px;
}

.notifications {
    display: flex;
    flex-direction: column;
    padding: 10px 25px 10px 5px;
    gap: 15px;
    overflow-y: scroll;
    overflow-x: hidden;
    height: 340px;
}
.notifications::-webkit-scrollbar{
    display: none;
}

.notification {
    display: flex;
    gap: 10px;
    align-items: center;
}
.notification .noti-description .title{
    font-size: 18px;
    line-height: 13px;
    color: #000000;
}

.noti-description {
    display: flex;
    flex-direction: column;
}
</style>



<body>
    <div class="sidenav" id="sidenavbar">
        <img src="images/logo.png" class="sidenavlink" id="logo">
        <a id="index" class="sidenavlink nav-index nav-task_list nav-track_stats_steps nav-track_stats_water nav-track_stats_heart nav-track_stats_sleep nav-track_stats_weight nav-track_stats_calorie" href="index.php"><img src="images/vec_dashboard.png" class="nav-icon">Dashboard</a>
        <a id="messages" class="sidenavlink nav-chat_home" href="chat_home.php"><img src="images/vec_messages.svg" class="nav-icon">Messages</a>
        <a id="live" class="sidenavlink" href="live.php"><img src="images/vec_live.svg" class="nav-icon">Live</a>
        <a id="calendar_of_events" class="sidenavlink nav-calendar_of_events" href="calendar_of_events.php"><img src="images/vec_appointments.svg" class="nav-icon">Appoinments</a>
        <a id="client_list" class="sidenavlink nav-client_list nav-client_dashboard nav-setgoals nav-set_reminders nav-mealTracker" href="client_list.php"><img src="images/vec_client_list.svg" class="nav-icon">Clients</a>
        <a id="myplan" class="sidenavlink nav-myplan" href="myplan.php"><img src="images/vec_diet_plan.svg" class="nav-icon">Diet Plans</a>
        <a id="payments" class="sidenavlink nav-payments" href="billingAndInvoices.php"><img src="images/vec_payments.svg" class="nav-icon">Payments</a>
        <a id="create_recipe" class="sidenavlink nav-all_recipes nav-create_recipe" href="all_recipes.php"><img src="images/vec_recipies.svg" class="nav-icon">Recipes</a>
        <a id="healthform" class="sidenavlink nav-healthform" href="#"><img src="images/vec_health_form.svg" class="nav-icon">Health Form</a>

        <div class="menu-bottom">
            <a class="sidenavlink nav-help" href="help.php"><img src="images/vec_gethelp.svg" class="nav-icon">Get Help</a>
            <a class="sidenavlink nav-settings" href="settings.php"><img src="images/vec_settings.svg" class="nav-icon">Settings</a>
            <a href="logout.php" class="sidenavlink"><img src="images/vec_logout.svg" class="nav-icon">Log Out</a>
        </div>
    </div>

    <div class="topnav">
        <div class="topnav-content" id="topnav-change">
            <p id="topnav-content-1">Good Morning, <span id="topnav-content-1-name">
                <strong>
                    <?php

                     $id11 = $_SESSION['dietitianuserID'] ;
                    $sql1 = "SELECT name FROM dietitian WHERE dietitianuserID ='$id11'";
                    $res = mysqli_query($conn,$sql1);
                    $row = mysqli_fetch_assoc($res) ; 
                    echo $row['name'];
                    ?>
                </strong></span></p>
            <p id="topnav-content-2">Your performance summary this week</p>
        </div>
        <div class="topnav-icons">
            <img src="images/pp.png" style="height: 24px; width: 24; display:none;" id="addusermale">

            <img src="images/vec_search.png" style="height: 20px; width: 20px;">
            <img id="notifications-pop" src="images/vec_notification.png" style="height: 20px; width: 20px;">

            <div class="noti-box">
                <div class="top"><span>Notifications</span><span id="noti-close" >x</span></div>
                <?php
                include ('noti_test.php');
                ?>
            </div>
            
            <?php
                $currentUser = $_SESSION['name'];
           	  	$sql ="select * from `dietitian` where `dietitianuserID` = '$currentUser' ";
           	  	$res = mysqli_query($conn,$sql);
           	  	if(mysqli_num_rows($res) > 0)
           	  	{
           	  		while ($row = $res -> fetch_assoc()){
                        if (is_null($row['profilePhoto']) or $row['profilePhoto']=' ') {
                            $path = "./upload/pp.jpg";
                            ?>

            <!--<img src="./upload/pp.jpg" style="height: 33px; width: 33px; border-radius: 100%;" alt="" />-->
            <?php } else { 
                    //$path = $row["file"];
                            $ext= explode('|',$row['profilePhoto']);
                            $path = $ext[1] . "/" .$ext[0];
                        }}?>


            <img src=<?php echo $path;?> style="height: 33px; width: 33px; border-radius: 100%;" alt="" />
            <?php  ?>

            <?php } ?>

        </div>

    </div>

    <!----------------------------------- MOBILE MENU ----------------------------------------->

    <div class="mobile-menu">
        <div id="mySidenav" class="sidenavv">
            <img src="images/logo.png" id="logo">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="index.php" id="defaultOpen"><img src="images/vec_dashboard.png">&nbsp&nbsp Dashboard</a>
            <a href="#"><img src="images/vec_messages.png">&nbsp&nbsp Messages</a>
            <a href="#"><img src="images/vec_live.png">&nbsp&nbsp Live</a>
            <a href="#"><img src="images/vec_appointments.png">&nbsp&nbsp Appoinments</a>
            <a href="#"><img src="images/vec_client_list.png">&nbsp&nbsp Clients</a>
            <a href="myplan.php"><img src="images/vec_recipies.png">&nbsp&nbsp Diet Plans</a>
            <a href="#"><img src="images/vec_mail.png">&nbsp&nbsp Payments</a>
            <a href="#"><img src="images/vec_recipies.png">&nbsp&nbsp Recipies</a>
            <a href="#"><img src="images/vec_recipies.png">&nbsp&nbsp Health Form</a>

            <a href="#"><img src="images/vec_gethelp.png">&nbsp&nbsp Get Help</a>
            <a href="#"><img src="images/vec_settings.png">&nbsp&nbsp Settings</a>
            <a href="#"><img src="images/vec_logout.png">&nbsp&nbsp Log Out</a>
        </div>
        <span style="font-size:20px;cursor:pointer; margin: 5px;" onclick="openNav()">&#9776; Menu</span>
    </div>
    <script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script>
    /* Toggle between adding and removing the "responsive" class to sidenav when the user clicks on the icon */
    function myFunction() {
        var x = document.getElementById("navbar-res");
        if (x.className === "nav-res") {
            x.className += " responsive";
        } else {
            x.className = "nav-res";
        }
    }
    document.getElementById('notifications-pop').addEventListener('click',()=>{
        document.getElementsByClassName('noti-box')[0].style.animation = 'slideDown 0.5s forwards';
        document.getElementsByClassName('noti-box')[0].style.display = 'block';

    });
    document.getElementById('noti-close').addEventListener('click',()=>{
        document.getElementsByClassName('noti-box')[0].style.animation = 'slideUp 0.5s forwards';
        // document.getElementsByClassName('noti-box')[0].style.display = 'none';
    });
    // get the url and add active to page 
    const currentPath = window.location.pathname;
    const lastPage = currentPath.split('/').pop().split('.').shift();
    console.log(lastPage);
    // document.getElementById(lastPage).classList.add('navactive');
    document.getElementsByClassName('nav-' + lastPage)[0].classList.add('navactive');
    </script>
</body>

</html>