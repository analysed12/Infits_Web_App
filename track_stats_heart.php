<?php
// Client Id
$clientId = 'Azarudeen';
// Configure Dates
date_default_timezone_set("Asia/Calcutta");
// $today = new DateTime();
$today = new DateTime('2022-09-05');
// Goal Insertion
if(isset($_POST['savegoal'])){
    $client = $_POST['clientid'];
    $goal =$_POST['setgoal'];
    $conn = new mysqli("localhost", "root", "", "infits");

    if($conn->connect_error){
        die("Connection failed :" . $conn->connect_error);
    }
    
    $query="INSERT INTO goals (forWhat, goal, clientID) VALUES ('sleep' , $goal, '$client' )";
    $result = $conn->query($query) or die("Query Failed");
    
    if($result){
        unset($_POST["savegoal"]);
        unset($_POST["setgoal"]);
        header(("Location: http://localhost/analysed/infits/track_stats_heart.php"));
        // exit();
    }
}
?>





<?php  include('config.php');?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
            $(document).ready(function(){
            $(".graph_button_left").click();
            });
            $(document).ready(function(){
            $("#defaultOpen").click(function(){
                
            });
            });
        </script>
        <script>

            $(document).ready(function(){
            $(".pheader p").click(function(){
                $(".activity_pop").animate({
                    height: 'toggle'
                });
            }); 
            });
            $(document).ready(function(){
            $(".activity_pop img").click(function(){
                $(".activity_pop").animate({
                    height: 'toggle'
                });
            }); 
            });
            
            var cl=document.getElementById('defaultOpen');
                        cl.click();
        </script>
</head>
<style>
html {
    overflow-x: hidden;
}

#content {
    display: flex;
    flex-direction: column;
    height: 90%;
    font-family: "Poppins";
    font-style: normal;
    font-weight: 500;
    font-size: 35px;
    padding: 20px;
}

#wrapper {
    height: auto;
    width: 100%;
    padding: 20px;
}

#inner1 {
    float: left;
    width: 70%;
    height: auto;
}

#inner2 {
    float: left;
    width: 30%;
    height: auto;
    background: #FFFFFF;
    border: 1px solid #EFEFEF;
    border-radius: 31px;
    padding: 20px;
}

#inner11 {
    float: left;
    /* background: green; */
    width: 100%;
}

#inner12 {
    float: left;
    clear: left;
}

.flex-container {
    display: flex;
    flex-wrap: wrap;
}

.flex-container>div {
    width: 90px;
    height: auto;
    /* background: pink; */
    margin: 10px;
    text-align: center;
    /* line-height: 75px; */
    font-size: 30px;
    border-radius: 14px;
    padding: 5px;
}
.flex-container-bottom {
    display: flex;
    flex-wrap: wrap;
}
.flex-container-bottom>div {
    width: 134px;
height: 57.45px;
    /* background: pink; */
    margin: 10px;
    text-align: center;
    /* line-height: 75px; */
    font-size: 30px;
    border-radius: 14px;
    padding: 5px;
}
.client-card p {
    font-size: 15px;
    
}

.client-card i {
    font-size: 15px;
}
.client-card-heart {
    background: linear-gradient(217.35deg, #F97EAA 0%, #C389D5 100%);
}
.client-card-heart p{
    color: #FFFFFF;
} 
.graph {
    width: 450px;
    margin-left: 20px;
    margin-top: 20px;
    height: 100%;
    background: #FFFFFF;
    border: 1px solid #F1F1F1;
    box-shadow: 0px 5px 4px rgba(0, 0, 0, 0.16);
    border-radius: 11px;
    /* border: 1px solid black; */
    padding: 10px;

}

.inner21 {
    text-align: center;
}

.inner21-title {
    font-size: 20px;
}

.box-btn {
    width: auto;
    height: auto;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 30px;
    padding-right: 30px;
    font-size: 20px;
    background: linear-gradient(264.28deg, #D483C6 1.62%, #F37FAF 93.12%);
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.28);
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.28);
    border-radius: 10px;
}

.box-title {
    font-size: 15px;
    color: #FF8B8B;
}

.box-counter {
    background: #FFFFFF;
    border: 1px solid #DFDFDF;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.08);
    border-radius: 10px;
    color: grey;
}


#wrapper-lower {
    height: auto;
    width: 100%;
    padding: 20px;
}

#inner1-lower {
    float: left;
    width: 70%;
    height: auto;
    /* background: blue; */
}

#inner2-lower {
    float: left;
    width: 30%;
    height: auto;
    /* background: pink; */
    /* background: #FFFFFF;
    border: 1px solid #EFEFEF;
    border-radius: 31px;
    padding:20px; */
}

#inner11-lower {
    float: left;
    /* background: green; */
    width: 100%;
}

#inner12-lower {
    float: left;
    clear: left;
}

.bottom-btns{
    display: flex;
    flex-direction: row;
    justify-content:space-evenly;
}
.bottom-stats-btn{
    display: flex;
    flex-direction: column;
    justify-content:center;
    width: 88px;
height: 38.95px;
    background: #FFFFFF;
border: 1px solid #F1F1F1;
padding:8px;
box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.08);
border-radius: 16px;
width: 134px;
height: 57.45px;
}
.table{
    display:flex;
    flex-direction:column;
    justify-content:center;
    margin: 2%;

}
@keyframes growProgressBar {

    0%,
    33% {
        --pgPercentage: 0;
    }

    100% {
        --pgPercentage: var(--value);
    }
}

@property --pgPercentage {
    syntax: '<number>';
    inherits: false;
    initial-value: 0;
}

div[role="progressbar"] {
    --size: 10rem;
    --fg: #E68AA1;
    --bg: #F9E0E7;
    --pgPercentage: var(--value);
    animation: growProgressBar 3s 1 forwards;
    width: var(--size);
    height: var(--size);
    border-radius: 50%;
    display: grid;
    place-items: center;
    
    box-shadow: -9px 9px 18px rgba(217, 217, 217, 0.2), 9px -9px 18px rgba(217, 217, 217, 0.2), -9px -9px 18px rgba(255, 255, 255, 0.9), 9px 9px 23px rgba(217, 217, 217, 0.9), inset 1px 1px 2px rgba(255, 255, 255, 0.3), inset -1px -1px 2px rgba(217, 217, 217, 0.5);
    background:
        radial-gradient(closest-side, white 80%, transparent 0 99.9%, white 0),
        conic-gradient(var(--fg) calc(var(--pgPercentage) * 1%), var(--bg) 0);
    font-family: Helvetica, Arial, sans-serif;
    font-size: calc(var(--size) / 7);
    color: var(--fg);
}

div[role="progressbar"]::before {
    counter-reset: percentage var(--value);
    content: '❤️' counter(percentage)' ' 'bpm';
}


@media (min-width: 0px) and (max-width: 720px) {
    #inner1 {
        width: 100% !important;
    }

    #inner2 {
        clear: left;
        margin-top: 30px !important;
        width: 100% !important;
    }

    #inner11 {
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;

    }

    #inner12 {
        width: 100% !important;
    }

    .graph {
        /* display: flex;
        align-items: center;
        justify-content: center; */
        width: 100% !important;
        margin-left: 0 !important;
    }

    .flex-container>div {
        width: 70px;
        height: auto;
        margin: 10px;
        text-align: center;
        font-size: 20px;
        border-radius: 14px;
        padding: 5px;
    }
}
.heart_info{
    padding:2px;
 display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 19px;
line-height: 40px;

color: #5D5D5D;
}
.heart_info span span{
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
/* font-size: 15px; */

text-align: center;

color: #000000;
}
.cpb{
    width: 100%;
    height: auto;
    display: flex;
    align-items: top;
    justify-content: center;
    margin-top: 20px;
    margin-bottom: 50px;
}
.max{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border-left: 2px solid #C986CF;
    border-right: 2px solid #C986CF;
    width:120px;

}
/* .max span{
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 20px;
line-height: 42px;
letter-spacing: 0.03em;

color: #000000;
} */

.heart_beat_box{
    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
    background: #FFE8F2;
border-radius: 10px;
width: 355px;
height: 108px;
padding:7px;
}
.heart_beat_box p{
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 23px;
line-height: 42px;
/* identical to box height */

letter-spacing: 0.03em;

color: #000000;
}
.heart_beat_box>div span{
    
font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 30px;
line-height: 42px;
letter-spacing: 0.03em;

color: #000000;
}
.heart_beat_box>div{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.table_top{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    margin: 20px;
}
.table_top>span{
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 21px;
line-height: 44px;

color: #000000;
}
.table_element{
    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
    margin: 20px;
    height:60px
}
.table_element>div{
    display: flex;
    flex-direction: column;
    justify-content: center;
    width:200px
}

.table_element>div>span{
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 20px;
line-height: 42px;
letter-spacing: 0.03em;

color: #C986CF;
}
.table_element>div>p{

    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 23px;
line-height: 49px;


}
.date{
    
    border-right: 1px solid #C986CF;

}
.table_time>span{
    width: 103.19px;
height: 40px;
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 19px;
line-height: 40px;
letter-spacing: 0.03em;
color: #000000;

opacity: 0.77;
}
.pheader{
	display :flex;
	flex-direction:row;
	justify-content:space-between;
}
.pheader p{
	font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 16px;
line-height: 34px;
/* identical to box height */
width: 77px;
height: 34px;
margin-left: 20px;
color: #9C74F5;
}
.activity_pop{
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 369px;
    height: 545px;
    background: #FFFEFE;
    border-radius: 32px;
    box-shadow: 0px 3px 4px rgba(0.16, 0.16, 0.16, 0.16);
    margin-top: -250px;
    padding: 2px;

}
.activity_pop img{
    align-self: flex-end;
    margin-right: 20px;
}
.pop_header span{
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 25px;
line-height: 53px;
/* identical to box height */


color: #FF7B44;
}
.pop_box{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: space-between;
    margin: 10 px;
    padding: 10px;
}
.pop_box_info{
    display: flex !important;
    flex-direction: column !important;
    justify-content: space-between !important;
    align-items: flex-end !important;
    height: 49px;
font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 22px;
line-height: 20px;
padding : 0 px !important;
color: #000000;
}
/* a:hover, .active {
    align-items: center;
    border: 1px solid #E5F1FF;
    background-color:  #FF8B8B !important;
    color: #FFFFFF !important;
    border-radius: 10px;
} */
.pop_box{

    width: 344px;
    height: 49px;
    background: linear-gradient(135deg, rgba(255, 232, 242, 0.48) 0%, rgba(201, 134, 207, 0.48) 100%);
    border-radius: 10px;
    margin:5px;
}
/* css for graph tabs */
/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}
.tab_button_side{
   border-radius: 12px;
}
/* Style the buttons that are used to open the tab content */
.tab {
  overflow: hidden;
  /* border: 1px solid #ccc;
  background-color: #f1f1f1; */
  border: 1px solid #F8F5F5;
  width: 365px;
height: 27px;
margin-left: 3%;
border-top-left-radius: 1em!important;
border-bottom-left-radius: 1em!important;
border-top-right-radius: 1em!important;
  border-bottom-right-radius: 1em!important;
}


/* Style the buttons that are used to open the tab content */
.tab button {
    background: #FFFFFF;
    border: 1px solid #FCFBFB;
    border-radius: 0px;
    width: 85.35px;
height: 24px;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  /* padding: 14px 16px; */
  transition: 0.3s;
  font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 13px;
line-height: 27px;

color: #4D4D4D;
}
.graph_button_side{
    border: 1px solid #F8F5F5;
  border-top-right-radius: 1em!important;
  border-bottom-right-radius: 1em!important;
}
.graph_button_left{
  width: 106.69px !important;
border-top-left-radius: 1em!important;
border-bottom-left-radius: 1em!important;
}
/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #C986CF;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #C986CF;
  color: white !important;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  /* border: 1px solid #ccc; */
  border-top: none;
}
#setgoalweight{
    background: #FFFFFF;
border: 0px solid #DFDFDF;
box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.08);
border-radius: 10px;
width: 163px;
height: 45px;
}
.graph_button{
    width: 365px !important;
    height: 27px !important;
        
    font-family: 'NATS' !important;
    font-style: normal !important;
    font-weight: 400 !important;
    font-size: 13px !important;
    line-height: 27px !important;

    color: #4D4D4D;
}
.graph_button_side{
  
    border-top-right-radius: 1em!important;
    border-bottom-right-radius: 1em!important;
}
.graph_button_left{
    width: 106.69px !important;
  border-top-left-radius: 1em!important;
  border-bottom-left-radius: 1em!important;
}
.graph_button>button{
    width: 76px;
    height: 27px;
    background: #FFFFFF;
    border: 1px solid #FCFBFB;
    box-sizing: border-box;
    border-radius: 2px;
    font-family: 'NATS';
}
.client-card{
    height: 120px !important;
}
</style>

<body>
    <?php include 'navbar.php' ?>
    <?php 
       
    ?>
    <div id="content">

        <div id="wrapper">
            <div id="inner1">
                <div id="inner11">
                    <div class="flex-container">
                        <div class="client-card" style="color:#FF6C6CCA ;border: 1px solid #FF6C6CCA;">
                            <a href="track_stats_steps.php">
                            <i class="fa-solid fa-shoe-prints" style="color:#FF6C6CCA;rotate: -90deg;"></i>
                            <p style="color:#FF6C6CCA;">Step</p>
                            </a>
                        </div>
                        <div class="client-card client-card-heart " style="color:#E266A9; border: 1px solid #E266A9;">
                        <a href="track_stats_heart.php">
                            <img src="images/heart.svg" alt=""/>
                            <p style="color:#FFFFFF;">Heart Rate</p>
                        </a>
                        </div>
                        <div class="client-card" style="color:#52A4FF; border: 1px solid #52A4FF;">
                        <a href="track_stats_water.php" >
                            <i class="fa-solid fa-droplet" style="color:#52A4FF;"></i>
                            <p style="color:#52A4FF;">Water</p>
                        </a>
                        </div>
                        <div class="client-card" style="color:#7D5DE6; border: 1px solid #7D5DE6;">
                        <a href="track_stats_weight.php" >
                            <i style="color:#7D5DE6;" class="fa-solid fa-weight-hanging"></i>
                            <p style="color:#7D5DE6;">Weight Track</p>
                        </a>
                        </div>
                        <div class="client-card" style="color:#54AFAC; border: 1px solid #54AFAC;">
                        <a href="track_stats_sleep.php" >          
                            <i style="color:#54AFAC;" class="fa-solid fa-moon"></i>
                            <p style="color:#54AFAC;">Sleep</p>
                        </a>
                        </div>
                        <div class="client-card" style="color:#E3738D; border: 1px solid #E3738D;">
                        <a href="track_stats_calorie.php" >
                            <i style="color:#E3738D;" class="fa-solid fa-stopwatch-20"></i>
                            <p style="color:#E3738D;">Calorie Track</p>
                        </a>
                        </div>
                    </div>

                </div>
                <div id="inner12">

                                        <div class="tab">
                                           <button class="tablinks graph_button_left " onclick="openCity(event, 'London')">Custom Dates</button>
                                           <button class="tablinks" onclick="openCity(event, 'Year')">Year</button>
                                           <button class="tablinks" onclick="openCity(event, 'Month')">Month</button>
                                           <button class="tablinks graph_button_side" class="tab_button_side" onclick="openCity(event, 'Week')">Week</button>
                                        </div>
                <div class="graph">
                                           
                                           
               
                                           <!-- Tab content -->
                                <div id="London" id='defaultOpen' class="tabcontent">
                                
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                                <canvas id="myChart"></canvas>
                                </div>

                                <div id="Year" class="tabcontent">
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                                <canvas id="myChartYearly"></canvas>
                                </div>

                                <div id="Month" class="tabcontent">
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                                <canvas id="myChartMonthly"></canvas>
                                </div>
                                
                                <div id="Week" class="tabcontent">
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                                <canvas id="myChartWeekly"></canvas>
                                </div>
                                
                                </script>
                               
                                       <script>
                                            function openCity(evt, cityName) {
                                                /* Declare all variables */
                                                var i, tabcontent, tablinks;
                    
                                                /* // Get all elements with class="tabcontent" and hide them */
                                                tabcontent = document.getElementsByClassName("tabcontent");
                                                for (i = 0; i < tabcontent.length; i++) {
                                                    tabcontent[i].style.display = "none";
                                                }
                                                
                                                /* // Get all elements with class="tablinks" and remove the class "active" */
                                                tablinks = document.getElementsByClassName("tablinks");
                                                for (i = 0; i < tablinks.length; i++) {
                                                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                                                }
                    
                                                /* // Show the current tab, and add an "active" class to the button that opened the tab */
                                                document.getElementById(cityName).style.display = "block";
                                                
                                                evt.currentTarget.className += " active";
                                            }
                    
                                            /* // Get the element with id="defaultOpen" and click on it */
                                            document.getElementById("defaultOpen").click();
                                            /* document.getElementById("defaultOpen").onclick(); */
                                       </script> 
                               </div>
                </div>
            </div>
            <div id="inner2">
                <div class="inner21">
                    <div class="inner21-title">
                        Set Goals
                    </div>
                    <div class="inner21-image">
                        <img src="images/equipment.svg" alt="">
                    </div>
                    <div class="box-title">Daily Heart Rate</div>
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                    <div class="box-counter">
                    Goal: <input type="number" required min="1" id="set-goal" name="setgoal">
                    </div>
                    <button class="box-btn"  type="submit" name="savegoal" id="save-goal">Set</button>
                    </form>  
                </div>
            </div>
        </div>

        <div id="wrapper-lower">
        <div class="row">
            <div class="col-sm-8">

                <div class="bottom-btns">
                    
                <div class="flex-container-bottom">
                
                
                
                
                
                <?php

                function fetchDataSql($clientId,$from_date, $from_month, $from_year, $to_date,$to_month, $to_year, $isCustom=0){
    // Connect to Database
    $conn = new mysqli("localhost", "root", "", "infits");
    if($conn->connect_error){
        die("Connection failed :" . $conn->connect_error);
    }
    // For Sum of All Data Till Today
    if($isCustom==1){
        $query="SELECT SUM(average) FROM heartrate WHERE clientID= '$clientId' AND 
                `dateandtime` <= '{$to_year}-{$to_month}-{$to_date} 23:59:59';";
    // for sum of Data between two dates
    }else if($isCustom==2){
        $query = "SELECT SUM(average) FROM heartrate WHERE clientID= '$clientId' AND 
                `dateandtime` >= '{$from_year}-{$from_month}-{$from_date} 00:00:00'
                AND `dateandtime` <= '{$to_year}-{$to_month}-{$to_date} 23:59:59';";;
    // for average of data end to end (monthly)
    }else if($isCustom==3){
        $query="SELECT avg(average) FROM heartrate WHERE clientID= '$clientId' AND 
            `dateandtime` >= '{$from_year}-{$from_month}-{$from_date} 00:00:00'
            AND `dateandtime` < '{$to_year}-{$to_month}-{$to_date} 00:00:00';";
    // for all data of a day
    }else if($isCustom==4){
        $query="SELECT goal FROM goals WHERE forWhat = 'sleep' ORDER BY 'time' DESC LIMIT 1";}
    // for getting past actvities 
    else if($isCustom==5){
        $query="SELECT * FROM heartrate WHERE clientID= '$clientId' AND 
            `dateandtime` >= '{$from_year}-{$from_month}-{$from_date} 00:00:00'
            AND `dateandtime` <= '{$to_year}-{$to_month}-{$to_date} 23:59:59'";
    // for average of data of one full day
    }else{
    $query="SELECT avg(average) FROM heartrate WHERE clientID= '$clientId' AND 
            `dateandtime` >= '{$from_year}-{$from_month}-{$from_date} 00:00:00'
            AND `dateandtime` <= '{$to_year}-{$to_month}-{$to_date} 23:59:59';";
    }
    $result = $conn->query($query) or die("Query Failed");

    $data = array();
    while($row = $result->fetch_assoc()){
        $data[] =  $row;
    }
    $conn->close();
    return ($data);
}



// All Data Total Sum
$allDataSum = fetchDataSql($clientId, '', '', '', $today->format('d'), $today->format('m'), $today->format('Y'), 1)[0]['SUM(average)'];
// Today Data Sum
$todayData = fetchDataSql($clientId, $today->format('d'), $today->format('m'), $today->format('Y'), $today->format('d'), $today->format('m'), $today->format('Y'),6)[0]['avg(average)'];
// Week Average
$pastWeek =new DateTime('2022-09-05');
$pastWeek->modify('-1 week');
$weekAvg = fetchDataSql($clientId,$pastWeek->format('d'), $pastWeek->format('m'), $pastWeek->format('Y'), $today->format('d'), $today->format('m'), $today->format('Y'))[0]['avg(average)'];
// Month Average
$pastMonth = new DateTime('2022-09-05');
$pastMonth->modify('-1 month');
$monthAvg = fetchDataSql($clientId,$pastMonth->format('d'), $pastMonth->format('m'), $pastMonth->format('Y'), $today->format('d'), $today->format('m'), $today->format('Y'))[0]['avg(average)'];
$months = array (1=>'Jan',2=>'Feb',3=>'Mar',4=>'Apr',5=>'May',6=>'Jun',7=>'Jul',8=>'Aug',9=>'Sep',10=>'Oct',11=>'Nov',12=>'Dec');
?>

                            <div class="bottom-stats-btn">
                                <div class="heart_info">
                                    <span>Daily Count</span>
                                    <span><span><?php echo(ceil($todayData))?></span> BPM</span>
                                </div>
                                
                            </div>

                            <div class="bottom-stats-btn">
                                <div class="heart_info">
                                    <span>Weekly Avg</span>
                                    <span><span><?php echo(ceil($weekAvg))?></span> BPM</span>
                                </div>
                                
                            </div>
                    
                      
                      
                            <div class="bottom-stats-btn">
                                <div class="heart_info">
                                <span>Monthly Avg</span>
                                <span><span><?php echo(ceil($monthAvg))?></span> BPM</span>
                                </div>
                               
                            </div>

                            <div class="bottom-stats-btn">
                                <div class="heart_info">
                                <span>Total</span>
                                <span><span><?php echo(ceil($allDataSum))?></span> BPM</span>
                                </div>
                               
                            </div>
                    </div>
                           
                </div>



                <div class="row">
                    <div class="col-sm-12">
                    <div class="table">
                        <div class="table_top">
                     <span>Past Activity</span>
                      </div>
                     <?php
                     $pastActivityData = fetchDataSql($clientId, '', '', '', $today->format('d'), $today->format('m'), $today->format('Y'),5);
                     $j = count($pastActivityData)-1;
                     $k = 0;

                    while ($k <= $j) {
                    $date = new DateTime($pastActivityData[$k]['dateandtime']);
                     echo '<div class="table_element">';
                     echo '<div class="date">';
                     echo '<span style = "color:#6844E2; font-weigth: 600;">'.$date->format('D').'</span>';
                     echo '<span style = "font-weight: bold; color: black;">'.($date->format('d')).'</span>';
                     echo '</div>';
                     echo '<div class="table_activity">';
                     echo '<span style = "color:#6844E2;">Heart Rate</span>';
                     echo '<p>'.(ucwords($pastActivityData[$k]['average'])).'</p>';
                     echo ' </div>';
                     echo '<div class="table_time">';
                     echo '<span>'.$date->format('h:i A').'</span>';
                     echo ' </div>';
                     echo '</div>';
                     $k++;
                    }  
                     ?>
                      </div> 

                    </div>
                </div>
            </div>
            <div class="col-sm-4">
            
            
            
            <?php
$progressBarData = fetchDataSql($clientId, '', '','','','','', 4);
$heartrate = fetchDataSql($clientId, $today->format('d'), $today->format('m'), $today->format('Y'), $today->format('d'), $today->format('m'), $today->format('Y'), 6);
if(empty($heartrate)){
    $heartrate = 0;
}else{
    $heartrate = $heartrate[0]['avg(average)'];
}

if(empty($progressBarData)){
    $currentGoal =  0;
    $progressPercent = 0;
}else{
    $currentGoal =  $progressBarData[0]['goal'];
    $progressPercent = round(($heartrate / $currentGoal) * 100,2);
}
$sleepRemaining =  (int) $currentGoal - (int) $heartrate;
?>  



                <div class="pheader">
						<h4>Daily Progress</h4>
						<p>View Activity</p>
					</div>
                <div class="cpb">
                    <div role="progressbar" style="--value:<?php $value = 73; echo $value; ?>"></div>
                </div>
                <div class="heart_beat_box">
                    <div class="avg">
                        <span>Avg</span>
                        <p><?php echo $heartrate?> BPM</p>
                    </div>
                    <div class="max">
                        <span>Max</span>
                        <p><?php echo $heartrate?> BPM</p>
                    </div>
                    <div class="low">
                        <span>Low</span>
                        <p><?php echo $heartrate?> BPM</p>
                    </div>
                </div>
                <div class="activity_pop" style= "display:none;">
                
                <?php
                   
                ?>
                <img src="images/exit.svg" alt="">
                    <div class="pop_header">
                        <span>Activity</span>
                    </div>
                    <div class="pop_box">
                       <img src="images/man_running.svg" alt="">
                        <div class="pop_box_info">
                            <span>Running</span>
                            <p> m</p>
                        </div>
                        <div class="pop_box_info">
                        <span>Running</span>
                            <p>m</p>
                        </div>
                    </div>
                    <div class="pop_box">
                    <img src="images/man_running.svg" alt="">
                        <div class="pop_box_info">
                            <span>Running</span>
                            <p> m</p>
                        </div>
                        <div class="pop_box_info">
                        <span>Running</span>
                            <p> m</p>
                        </div>
                    </div>
                    <div class="pop_box">
                    <img src="images/man_running.svg" alt="">
                        <div class="pop_box_info">
                            <span>Running</span>
                            <p> m</p>
                        </div>
                        <div class="pop_box_info">
                        <span>Running</span>
                            <p> m</p>
                        </div>
                    </div>
                    <div class="pop_box">
                    <img src="images/man_running.svg" alt="">
                        <div class="pop_box_info">
                            <span>Running</span>
                            <p>m</p>
                        </div>
                        <div class="pop_box_info">
                        <span>Running</span>
                            <p>9075 m</p>
                        </div>
                    </div>
                    <div class="pop_box">
                    <img src="images/man_running.svg" alt="">
                        <div class="pop_box_info">
                            <span>Running</span>
                            <pm</p>
                        </div>
                        <div class="pop_box_info">
                        <span>Running</span>
                            <p>9075 m</p>
                        </div>
                    </div>
                    <div class="pop_box">
                    <img src="images/man_running.svg" alt="">
                        <div class="pop_box_info">
                            <span>Running</span>
                            <p> m</p>
                        </div>
                        <div class="pop_box_info">
                        <span>Running</span>
                            <p>9075 m</p>
                        </div>
                    </div>
            </div>
        </div>
           
        </div>
    </div>
</body>


<?php

// To Get Past Year - Yearly data
$wholeYearData = array(
    'value' => array(),
    'month' => array()
);
$yearly_month = new DateTime("2022-09-05");
$yearly_last_month = new DateTime("2022-09-05");
$yearly_month->setDate($yearly_month->format('Y'),01,01);
if($today->format('m') == '01'){
    $yearly_month->setDate($yearly_month->format('Y')-1,01,01);
    $yearly_last_month->setDate($yearly_last_month->format('Y')-1,12,31);
}
while($yearly_last_month >= $yearly_month){
    
    $yearly_Month_1 = $yearly_month->format('Y'-'m')."-"."01";
    $yearly_Month_2 =  $yearly_month->format('Y'-'m')."-". $yearly_month->format('t');
    $yearly_Data = (int) fetchDataSql($clientId, $yearly_Month_1->format('d'),$yearly_Month_1->format('m'),$yearly_Month_1->format('Y'), $yearly_Month_2-format('d'),$yearly_Month_2-format('m'),$yearly_Month_2-format('Y'),3)[0]['avg(average)'];

    array_push($wholeYearData['value'], $yearly_Data);
    array_push($wholeYearData['month'], $yearly_month->format('M'));
    $yearly_month->modify('+1 month');
}
// To Get Past Month - Monthly Data
$wholeMonthData = array(
    'value' => array(),
    'date' => array(),
);
$monthly_Month = new DateTime("2022-09-05");
$monthly_LastDay = new DateTime("2022-09-05");
$monthly_Month->modify("first day of this month");

if($today->format('d') == '01'){
    $monthly_Month->modify("first day of previous month");
    $monthly_LastDay->modify("last day of previous month");
}
while ($monthly_LastDay >= $monthly_Month) {
    $monthly_Data = (int) fetchDataSql($clientId,$monthly_Month->format('d'),$monthly_Month->format('m'),$monthly_Month->format('Y'), $monthly_Month->format('d'),$monthly_Month->format('m'),$monthly_Month->format('Y'),2)[0]['SUM(average)'];

    array_push($wholeMonthData['value'],$monthly_Data);
    array_push($wholeMonthData['date'], $monthly_Month->format('d'));
    $monthly_Month->modify("+1 day");
    
}
// To Get Past Week - Weekly Data
$wholeWeekData = array(
    'value' => array(),
    'day' => array(),
);
$weekly_Day = new DateTime("2022-09-05");
$weekly_Day->modify('previous monday');
$weekly_lastDay =new DateTime("2022-09-05");

if($today->format('l')== "Monday"){
    $weekly_lastDay->modify('previous sunday');
}

while($weekly_Day <= $weekly_lastDay){
    $weekly_Data = fetchDataSql($clientId, $weekly_Day->format('d'), $weekly_Day->format('m'), $weekly_Day->format('Y'), $weekly_Day->format('d'),$weekly_Day->format('m'),$weekly_Day->format('Y'),2);

    array_push($wholeWeekData['value'], (int) $weekly_Data[0]['SUM(hrsSlept)']);
    array_push($wholeWeekData['day'], $weekly_Day->format('D'));
    $weekly_Day->modify("+1 day");
}
?>


/* <script>
// --------------Charts--------------
// Default Chart */
const defaultChart = document.getElementById('myChart');
new Chart(defaultChart, {
    type: 'line',
    data: {
    labels: [<?php echo("'". implode("','", $wholeYearData['month']). "'") ?>],
    datasets: [{
        fill: false,
        lineTension: 0,
        backgroundColor: "#FF8B8B",
        borderColor: "#FF8B8B",
        data: [ <?php echo(implode(', ', $wholeYearData['value'])) ?>],
        borderWidth: 1
    }]
    },
    options: {
    scales: {
        xAxes:[{
            gridLines:{
                display:false,
            },
            ticks:{
                 min:0,
                max:200,
                stepSize:20,
                fontFamily: 'NATS',
                fontStyle: 'bold',
                fontSize:11,
                fontColor: '#9D9D9D',
            }
        }],
        yAxes:[{
            ticks:{
               
                fontFamily: 'NATS',
                fontStyle: 'bold',
                fontSize:13,
                fontColor: '#9D9D9D',
            },
        }],
    },
    legend:{
        display:false,
    },
    /* //   responsive:true, */
    tooltips:{
        enabled:true,
        // innerHeight:500,
        // innerWidth:500,
    },
    layout:{
        padding:{
            left:5,
            right:5,
            top:5,
            bottom:5,
        },
    },
    }
});
/* // Yearly Chart */
const yearlyChart = document.getElementById('myChartYearly');
new Chart(yearlyChart, {
    type: 'line',
    data: {
    labels: [<?php echo("'". implode("','", $wholeYearData['month']). "'") ?>],
    datasets: [{
        fill: false,
        lineTension: 0,
        backgroundColor: "#FF8B8B",
        borderColor: "#FF8B8B",
        data: [ <?php echo(implode(', ', $wholeYearData['value'])) ?>],
        borderWidth: 1
    }]
    },
    options: {
    scales: {
        xAxes:[{
            gridLines:{
                display:false,
            },
            ticks:{
                fontFamily: 'NATS',
                fontStyle: 'bold',
                fontSize:11,
                fontColor: '#9D9D9D',
            }
        }],
        yAxes:[{
            ticks:{
                min:0,
                max:200,
                stepSize:20,
                fontFamily: 'NATS',
                fontStyle: 'bold',
                fontSize:13,
                fontColor: '#9D9D9D',
            },
        }],
    },
    legend:{
        display:false,
    },
    //   responsive:true,
    tooltips:{
        enabled:true,
        // innerHeight:500,
        // innerWidth:500,
    },
    layout:{
        padding:{
            left:5,
            right:5,
            top:5,
            bottom:5,
        },
    },
    }
});
/* // Monthly Chart */
const monthlyChart = document.getElementById('myChartMonthly');
new Chart(monthlyChart, {
    type: 'line',
    data: {
    labels: [<?php echo("'" . implode("','", $wholeMonthData['date']) . "'") ?>],
    datasets: [{
        fill: false,
        lineTension: 0,
        backgroundColor: "#FF8B8B",
        borderColor: "#FF8B8B",
        data: [ <?php echo(implode(', ', $wholeMonthData['value'])) ?>],
        borderWidth: 1
    }]
    },
    options: {
    scales: {
        xAxes:[{
            gridLines:{
                display:false,
            },
            ticks:{
                fontFamily: 'NATS',
                fontStyle: 'bold',
                fontSize: 11,
                fontColor: '#9D9D9D',
            }
        }],
        yAxes:[{
            ticks:{
                min:0,
                max:200,
                stepSize:20,
                fontFamily: 'NATS',
                fontStyle: 'bold',
                fontSize:12,
                fontColor: '#9D9D9D',
            },
        }],
    },
    legend:{
        display:false,
    },
      responsive:true,
    tooltips:{
        enabled:true,
        // innerHeight:500,
        // innerWidth:500,
    },
    layout:{
        padding:{
            left:5,
            right:5,
            top:5,
            bottom:5,
        },
    },
    }
});
/* // Weekly Chart */
const weeklyChart = document.getElementById('myChartWeekly');
new Chart(weeklyChart, {
    type: 'line',
    data: {
    labels: [<?php echo("'" . implode("','", $wholeWeekData['day']) . "'") ?>],
    datasets: [{
        fill: false,
        lineTension: 0,
        backgroundColor: "#FF8B8B",
        borderColor: "#FF8B8B",
        data: [ <?php echo(implode(', ', $wholeWeekData['value'])) ?>],
        borderWidth: 1
    }]
    },
    options: {
    scales: {
        xAxes:[{
            gridLines:{
                display:false,
            },
            ticks:{
                fontFamily: 'NATS',
                fontStyle: 'bold',
                fontSize: 13,
                fontColor: '#9D9D9D',
            },
        }],
        yAxes:[{
            ticks:{
                min:0,
                max:200,
                stepSize:20,
                fontFamily: 'NATS',
                fontStyle: 'bold',
                fontSize:12,
                fontColor: '#9D9D9D',
            },
        }],
    },
    legend:{
        display:false,
    },
      responsive:true,
    tooltips:{
        enabled:true,
        // innerHeight:500,
        // innerWidth:500,
    },
    layout:{
        padding:{
            left:5,
            right:5,
            top:5,
            bottom:5,
        },
    },
    }
});
</script>
</html>