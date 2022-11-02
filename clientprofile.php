<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Client Profile</title>
</head>
<style>
* {
    margin: 0px;
    padding: 0px;
}

html {
    overflow-x: hidden !important
}

#content {
    display: flex;
    flex-direction: column;
    height: 90%;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 500;
    font-size: 35px;
    padding: 20px;
}

.flex-container {
    margin-top: 150px;
    display: flex;
    flex-wrap: wrap;
    /* background-color: DodgerBlue; */
}

.flex-container>div {
    /* background-color: #f1f1f1; */
    width: 270px;
    height: 270px;
    margin: 20px;
    text-align: center;
    line-height: 75px;
    font-size: 30px;
    border-radius: 14px;
}

.containerbackground {

    position: absolute;
    z-index: -1;
}

.icon1 {
  position:relative;
    font-size: 180px;
    margin-top: 50px;
    margin-left: 50px;
    color: white;
    opacity: 0.3;
    z-index: -1;
}

.title{
  position:relative;

    text-align: center;
    /* font-family: 'Poppins'; */
font-style: normal;
font-weight: 500;
font-size: 24px;
color: #FFFFFF;
}

.profile-content{
  position:relative;

    text-align: center;
    font-size: 20px;

    color: white;

}

.goal{
  position:relative;

    margin-left: 20px;
    margin-right: 20px;
    font-size: 20px;
    color: white;
}
/* MEDIA QUERY */


@media screen and (min-width: 720px) {

    /* Styles go here */
    .mobile-menu {
        display: none;
    }
}

@media (min-width: 0px) and (max-width: 720px) {
    .flex-container>div {

        width: 140px !important;
        height: 140px !important;
        text-align: center;
        margin: 10px !important;
        line-height:0px !important;

    }

    .icon1 {
        font-size: 80px;
        margin-top: 30px;
        margin-left: 25px;
        color: white;
        opacity: 0.3;
        z-index: -1;
    }

    .title{
      margin-top:15px !important;
      font-size:15px !important;
    }

    .goal{
      margin-top:30px !important;
      font-size:10px !important;
      margin-left: 10px !important;
    margin-right: 10px !important;
    }

    .profile-content{
      font-size:12px !important;
      margin-top:50px !important;
    }

}
</style>

<body>
    <!-- Navbar Start -->
    <?php
    include("navbar.php")
    ?>
    <!-- Navbar End -->

    <!-- Contents Start -->
    <div id="content">

        <!-- Calendar -->
        <h4 class="header">Meal Tracker</h4>
        <?php include("calendar.php");
    ?>


        <!-- Other content -->

        <div class="flex-container">
            <div
                style=" z-index:-3; background: linear-gradient(208.27deg, rgba(255, 108, 108, 0.891) 40.23%, rgba(255, 92, 0, 0.468) 95.3%);">
                <div class="containerbackground">
                    <i class="fa-solid fa-shoe-prints icon1" style="rotate: -90deg; margin-left:25px;"></i>
                </div>
                <p class="title">Steps</p>
                <p class="profile-content">500 steps</p>
                <div>
                <p style="float: left;" class="goal">Goal</p>
             <p style="float: right;" class="goal">1100 steps</p>
             </div>
            </div>
            <div
                style="z-index:-3; background: linear-gradient(206.14deg, rgba(255, 96, 145, 0.81) 0%, rgba(81, 39, 221, 0.468) 145.34%);">
                <div class="containerbackground">
                    <i class="fa-solid fa-heart-pulse icon1"></i>
                </div>
                <p class="title">Heart Rate</p>
                <p class="profile-content">85 bmp</p>
                <div>
                <p style="float: left;" class="goal">Goal</p>
             <p style="float: right;" class="goal">120bpm</p>
             </div>
            </div>
            <div
                style="z-index:-3; background: linear-gradient(208.27deg, rgba(39, 142, 255, 0.72) 41.57%, rgba(98, 113, 255, 0.416) 93.17%);">
                <div class="containerbackground">
                    <i class="fa-solid fa-droplet icon1"></i>
                </div>
                <p class="title">Water</p>
                <p class="profile-content">600 ml</p>
                <div>
                <p style="float: left;" class="goal">Goal</p>
             <p style="float: right;" class="goal">1200 ml</p>
             </div>
            </div>
            <div
                style="z-index:-3; background: linear-gradient(237.6deg, rgba(78, 205, 196, 0.468) -24.24%, rgba(85, 98, 112, 0.81) 100%);">
                <div class="containerbackground">
                    <i class="fa-solid fa-weight-hanging icon1"></i>
                </div>
                <p class="title">Weight Track</p>
                <p class="profile-content">80 kg</p>
                <div>
                <p style="float: left;" class="goal">Goal</p>
             <p style="float: right;" class="goal">80 kg</p>
             </div>
            </div>
            <div
                style="z-index:-3; background: linear-gradient(208.27deg, rgba(69, 24, 219, 0.81) 30.7%, rgba(123, 41, 255, 0.468) 95.3%);">
                <div class="containerbackground">
                    <i class="fa-solid fa-moon icon1"></i>
                </div>
                <p class="title">Sleep</p>
                <p class="profile-content">7hr 35min</p>
                <div>
                <p style="float: left;" class="goal">Goal</p>
             <p style="float: right;" class="goal">08 Hours</p>
             </div>
            </div>
            <div
                style="z-index:-3; background: linear-gradient(61.08deg, rgba(221, 94, 137, 0.9) 0%, rgba(247, 187, 151, 0.52) 130.74%);">
                <div class="containerbackground">
                    <i class="fa-solid fa-stopwatch-20 icon1"></i>
                </div>
                <p class="title">Calories Track</p>
                <p class="profile-content">100 Kcal</p>
                <div>
                <p style="float: left;" class="goal">Goal</p>
             <p style="float: right;" class="goal">1100 kcal</p>
             </div>
            </div>
        </div>


    </div>
    <!-- Contents End -->

</body>

</html>