<?php
// Client Id
$clientId = 'Azarudeen';
// Configure Dates
date_default_timezone_set("Asia/Calcutta");
$today = new DateTime('2022-01-14');
// Goal Insertion
if(isset($_POST['savegoal'])){
    $goal =$_POST['setgoal'];
    $current_date = date("Y-m-d");
    $conn = new mysqli("localhost", "root", "", "infits (2)");

    if($conn->connect_error){
        die("Connection failed :" . $conn->connect_error);
    }
    
    $query="UPDATE steptracker SET goal = $goal WHERE clientID= '$clientId' AND 
            `dateandtime` >= '$current_date 00:00:00'
            AND `dateandtime` <= '$current_date 23:59:59'";
    $result = $conn->query($query) or die("Query Failed");
    
    if($result){
        unset($_POST["savegoal"]);
        unset($_POST["setgoal"]);
        header(("Location: http://localhost/TeamHuddle/infits/track_stats_step.php"));
        // exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    
</head>
<?php include('navbar.php') ?>
<style>

.content{
    padding: 10px 20px;
    display: flex;
    flex-direction: column;
}
tst-left-t{
    padding-left: 3%;
}
.heading{
    width: 145px;
    height: 68px;

}
.heading p{
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 32px;
    line-height: 68px;
    /* letter-spacing: -0.114286px; */
    color: #000000;
    margin: 0;
}
.card-container{
    display: flex;
    flex-wrap: wrap;
    /* justify-content: space-between; */
    gap: 5%;
    padding-left: 1%;
}
.client-card {
    width: 100px;
    height: 120px;
    background: rgba(255, 255, 255, 0.8);
    box-shadow: 0px 1px 2px rgb(0 0 0 / 15%);
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    gap: 15px;
    margin-bottom: 15px;
}
.client-card a{
    display: flex;
    flex-direction: column;
    gap: 10px;
}
.client-card-steps{
    background: linear-gradient(208.27deg, rgba(255, 108, 108, 0.792) 43.71%, rgba(255, 92, 0, 0.416) 95.3%);
}
.client-card i{
    scale: 1.5;
}
.client-card a img {
    height: 30px;
    width: auto;
}
.client-card p{
font-family: 'NATS';
font-style: normal;
font-weight: 400;
line-height: 1;
font-size: 19px;
    margin: 0;
}

/* tst-left b */
.tst-left-b {
    display: flex;
    flex-direction: column;
    padding: 20px;
    gap: 20px;
}
/* Style the buttons that are used to open the tab content */
.tab {
background-color: #f1f1f1;
border: 1px solid #F8F5F5;
max-width: 365px;
width: 100%;
height: 27px;
border-top-left-radius: 1em;
border-bottom-left-radius: 1em;
border-top-right-radius: 1em;
border-bottom-right-radius: 1em;
}
.tablinks {
background: #FFFFFF;
border: 1px solid #FCFBFB;
border-radius: 0px;
width: 25%;
height: 24px;
float: left;
border: none;
outline: none;
cursor: pointer;
transition: 0.3s;
font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 13px;
line-height: 27px;

color: #4D4D4D;
}
/* border for side buttons */
.graph_button_left{
    border-top-left-radius: 1em;
border-bottom-left-radius: 1em;
}
.graph_button_right{
    border-top-right-radius: 1em;
border-bottom-right-radius: 1em;
}
/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #FF8B8B;
}
.tab button.active {
  background-color: #FF8B8B;
  color: white !important;
}
.graph {
    max-width: 487px;
    max-height: 240px;
    width: 100%;
    height: 100%;
    background: #FFFFFF;
    border: 1px solid #F1F1F1;
    box-shadow: 0px 5px 4px rgba(0, 0, 0, 0.16);
    border-radius: 11px;
    padding: 10px;
}
.tab_content{
    display: none;
    width: 100%;
    height: 100%;
}
.tab_content canvas{
    width: 100%;
    height: 100%;
}

/* Goal Dialog */
.tst-right {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    margin: 25px 0;
}
.set-goal {
    width: 100%;
    height: 100%;
    max-width: 380px;
    max-height: 450px;
    /* background: #FFFFFF; */
    border: 1px solid #EFEFEF;
    background: url('./images/goal-bg.svg');
    background-repeat: no-repeat;
    background-position: inherit;
    box-shadow: 0px 1.74334px 13.0751px rgba(0, 0, 0, 0.25);
    border-radius: 13.0751px;
    position: relative;
    padding: 10px;
    display: flex;
    gap: 20px;
    flex-direction: column;
    /* justify-content: center; */
    align-items: center;
}
.set-goal .heading{
    position: relative;
    padding-left: 10px;
    width: 100%;
    display: flex;
    justify-content: flex-start;
    flex-direction: column;
}
#g-set-success {
    position: absolute;
    top: 40px;
    right: 15px;
    font-size: 20px;
    letter-spacing: 2px;
}
.set-goal img{
width: 211px;
height: 166px;
}
.set-goal span {
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 23px;
    line-height: 40px;
    color: #FF8B8B;
    margin-top: -10px;
}
.set-goal form{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.set-goal input{
width: 163px;
height: 45px;
border: 1px solid #DFDFDF;
box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.08);
border-radius: 10px;
padding: 8px 25px;
}
.set-goal input::placeholder{
font-family: 'Nunito';
font-style: normal;
font-weight: 700;
font-size: 18px;
line-height: 25px;
color: #ABA3A3;
text-align: center;
}
#save-goal {
    margin-top: 20px;
    border: none;
    width: 124px;
    height: 45px;
    background: linear-gradient(208.27deg, rgba(255, 108, 108, 0.792) 43.71%, rgba(255, 92, 0, 0.416) 95.3%);
    box-shadow: 0px 3.48718px 3.48718px rgba(0, 0, 0, 0.28);
    border-radius: 10px;
    color: #ffffff;
    font-size: 19px;
    font-family: 'Nunito';
    font-style: normal;
    font-weight: 700;
}
/* page down */
.tsd-left-t {
    padding: 25px 0 25px 10px;
}
.stats-btn-container{
    width: 100%;
    display: flex;
    flex-wrap:wrap;
    justify-content: center;
    align-items: center;
    padding :0 10px;
}
.stat-btn{
    /* max-width: 134px;
    max-height: 57.45px; */
    height: 57.45px;
    /* width: 25%; */
    width: 134px;
    /* height: 100%; */
    background: #FFFFFF;
    border: 1px solid #F1F1F1;
    box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.08);
    border-radius: 16px;
    padding: 5px;
    display: flex;
    align-items: center;
    margin: 10px;
    
}
.stat-data{
    width: 100%;
    height: 100%;
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
}
.stat-data .title{
font-size: 18px;
line-height: 0;
color: #5D5D5D;
margin-left: 5px;
}
.stat-data .value{
font-size: 25px;
line-height: 0;
text-align: center;
color: #000000;
margin-left: 5px;
}
.stat-data .unit{
font-size: 17px;
line-height: 0;
color: #6B6B6B;
margin-left: 5px;
}
/* Table Activity */
.tsd-left-b{
    padding-left: 30px;
}
.tsd-left-b .heading {
    width: 100%;
    max-width: 549px;
    padding: 5px 10px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.tsd-left-b .heading p{
    font-size: 25px;
    line-height: 53px;
}
.heading-border{
    margin-top: -10px;
    width: 100%;
    max-width: 549px;
    height: 2px;
    background-color: #F5F5F5;
}
.activity-container{
    width: 100%;
    max-width: 549px;
    margin-top: 15px;
}
.activity-box{
    margin: 5px;
    width: 100%;
    display: flex;
    align-items: center;
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    line-height: 0;
}
.activity-date {
    display: flex;
    flex-direction: column;
    width: 17%;
    justify-content: flex-end;
    align-items: center;
}
.activity-box .up{
    font-size: 20px;
    line-height: 10px;
    letter-spacing: 0.03em;
    color: #E47E9B;
}
.activity-box .down{
    font-size: 23px;
    line-height: 49px;
    /* identical to box height */
    letter-spacing: 0.03em;
    color: #000000;
}
.activity-border{
    height: 50px;
    width: 5px;
    background-color: #E47E9B;
    margin: 0 20px;
}
.activity-data{
    display: flex;
    flex-direction: column;
    width: 55%;
    align-items: center;
}
.activity-time{
    font-size: 19px;
    line-height: 40px;
    letter-spacing: 0.03em;
    color: #000000;
    opacity: 0.44;
    display: flex;
    justify-content: flex-start;
    align-items: flex-start;
    height: 70px;
}
/* progress bar */
.tsd-right{
        display: flex;
        flex-direction: column;
        /* justify-content: center; */
        align-items: center;
    }
    .tsd-right .heading {
        width: 100%;
        display: flex;
        justify-content: flex-end;
        gap: 30%;
        padding-right: 5%;
    }
    .tsd-right .heading p{
        font-size: 22px;
        line-height: 46px;
        color: #000000;
    }
    .tsd-right .heading span{
        font-size: 16px;
        line-height: 46px;
        color: #FF8B8B;
    }
.progress-bar-container{
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    color: #000000;
    position: relative;
}
.total-consumed {
    position: absolute;
    top: 20px;
    right: -110px;
}
.total-consumed span,
.total-remaining span{
    font-size: 25px;
    line-height: 0;
    letter-spacing: 0.03em;
    color: #000000;
}
.total-consumed p,
.total-remaining p {
    font-size: 22px;
    line-height: 50px;
    letter-spacing: 0.03em;
}
.total-remaining{
    position: absolute;
    bottom: -20px;
    left: -110px;
}
.progress-circle{
    width: 214px;
    height: 214px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    /* background: conic-gradient(#FF8B8B 50% , #E68AA1 0); */
}
.progress-circle-fill {
    width: 175px;
    height: 175px;
    border-radius: 50%;
    background: #FFFFFF;
}
.progress-circle-value{
    width: 175px;
    height: 175px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.progress-circle-value span{
    font-size: 20px;
    line-height: 35px;
}
#progress-percent{
    font-size: 48px;
    line-height: 50px;
}
/* -------------------- */

/* media */
@media (max-width:420px) {
    .tst-left-b {
    padding: 20px;
    }
    .tsd-left-t {
    padding-left: 0;
    }
    .tsd-left-b {
    padding-left: 0;
    }
    /* .stat-data {
    scale: 0.7;
    }
    .stat-data .title {
    margin-left: 0;
    font-size: 13px;
    }
    .stat-data .value {
    margin-left: 0;
    font-size: 20px;
    }
    .stat-data .unit{
    margin-left: 0;
    font-size: 14px;
    } */
    .tsd-right {
    scale: 0.8;
    }
    .progress-bar-container {
    scale: 0.8;
    }
}
</style>


<body>
<div class="content">
    <div class="row ts-top">

        <div class="col-lg-8 tst-left">

            <div class="tst-left-t">
                <div class="heading">
                    <p>Clients Stats</p>
                </div>
                <div class="card-container">
                <div class="client-card client-card-steps" style="color:#FF6C6CCA ;border: 1px solid #FF6C6CCA;">
                        <a href="track_stats_step.php">
                            <i class="fa-solid fa-shoe-prints" style="color:#FFFFFF; rotate: -90deg;"></i>
                            <p style="color: #FFFFFF;">Step</p>
                        </a>
                        </div>
                        <div class="client-card" style="color:#E266A9; border: 1px solid #E266A9;">
                        <a href="track_stats_step.php">
                            <i style="color:#E266A9;" class="fa-solid fa-heart-pulse"></i>
                            <p style="color:#E266A9;">Heart Rate</p>
                            </a>
                        </div>
                        <div class="client-card" style="color:#52A4FF; border: 1px solid #52A4FF;">
                        <a href="track_stats_step.php">
                            <i style="color:#52A4FF;" class="fa-solid fa-droplet"></i>
                            <p style="color:#52A4FF;">Water</p>
                            </a>
                        </div>
                        <div class="client-card" style="color:#7D5DE6; border: 1px solid #7D5DE6;">
                        <a href="track_stats_step.php">
                            <i style="color:#7D5DE6;" class="fa-solid fa-weight-hanging"></i>
                            <p style="color:#7D5DE6;">Weight Track</p>
                            </a>
                        </div>
                        <div class="client-card" style="color:#54AFAC; border: 1px solid #54AFAC;">
                        <a href="track_stats_step.php">
                            <i style="color:#54AFAC;" class="fa-solid fa-moon"></i>
                            <p style="color:#54AFAC;">Sleep</p>
                            </a>
                        </div>
                        <div class="client-card" style="color:#E3738D; border: 1px solid #E3738D;">
                        <a href="track_stats_step.php">
                            <img src="images/calorie_selected.svg" alt="">
                            <p style="color:#00000;">Calorie Track</p>
                            </a>
                        </div>
                </div>
            </div>

            <div class="tst-left-b">
                <div class="tab">
                    <button class="tablinks graph_button_left" onclick="openCity(event, 'London')">Custom Dates</button>
                    <button class="tablinks" onclick="openCity(event, 'Year')">Year</button>
                    <button class="tablinks" onclick="openCity(event, 'Month')">Month</button>
                    <button class="tablinks graph_button_right" onclick="openCity(event, 'Week')">Week</button>
                </div>
                <div class="graph">
                    <!-- Tab content -->
                    <div id="London" class="tab_content">
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                    <canvas id="myChart"></canvas>
                    </div>
                    
                    <div id="Year" class="tab_content">
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                    <canvas id="myChartYearly"></canvas>
                    </div>

                    <div id="Month" class="tab_content">
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                    <canvas id="myChartMonthly"></canvas>
                    </div>
                    
                    <div id="Week" class="tab_content">
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                    <canvas id="myChartWeekly"></canvas>
                    </div>
                
                    <script>
                    function openCity(evt, cityName) {
                    /* Declare all variables */
                    var i, tab_content, tablinks;

                    /* // Get all elements with class="tab_content" and hide them */
                    tab_content = document.getElementsByClassName("tab_content");
                    for (i = 0; i < tab_content.length; i++) {
                        tab_content[i].style.display = "none";
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
                    // document.getElementById("defaultOpen").click();
                    document.getElementById("London").style.display = "block";
                    </script> 
                </div>
            </div>           
        </div>
        <div class="col-lg-4 tst-right">
            <div class="set-goal">
                <div class="heading">
                    <p>Set Goals</p>
                    <span>Daily Step Count</span>
                    <span id="g-set-success"></span>
                </div>
                <img src="images/fruits.svg" alt="">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                    <input name="setgoal" required min="1" type="number" id="set-goal" placeholder="00000 STEPS">
                    <button type="submit" name="savegoal" id="save-goal">Set</button>
                </form>
            </div>
        </div>
    </div>
<?php 
// funtion to fetch
// This can be more Simple by String Concatination
function fetchDataSql($clientId,$from_date, $from_month, $from_year, $to_date,$to_month, $to_year, $isCustom=0){
    // Connect to Database
    $conn = new mysqli("localhost", "root", "", "infits (2)");
    if($conn->connect_error){
        die("Connection failed :" . $conn->connect_error);
    }
    // For Sum of All Data Till Today
    if($isCustom==1){
        $query="SELECT SUM(steps) FROM steptracker WHERE clientID= '$clientId' AND 
                `dateandtime` <= '{$to_year}-{$to_month}-{$to_date} 23:59:59';";
    // for sum of Data between two dates
    }else if($isCustom==2){
        $query = "SELECT SUM(steps) FROM steptracker WHERE clientID= '$clientId' AND 
                `dateandtime` >= '{$from_year}-{$from_month}-{$from_date} 00:00:00'
                AND `dateandtime` <= '{$to_year}-{$to_month}-{$to_date} 23:59:59';";;
    // for average of data end to end (monthly)
    }else if($isCustom==3){
        $query="SELECT avg(steps) FROM steptracker WHERE clientID= '$clientId' AND 
            `dateandtime` >= '{$from_year}-{$from_month}-{$from_date} 00:00:00'
            AND `dateandtime` < '{$to_year}-{$to_month}-{$to_date} 00:00:00';";
    // for all data of a day
    }else if($isCustom==4){
        $query="SELECT * FROM steptracker WHERE clientID= '$clientId' AND 
            `dateandtime` >= '{$from_year}-{$from_month}-{$from_date} 00:00:00'
            AND `dateandtime` <= '{$to_year}-{$to_month}-{$to_date} 23:59:59';";
    // for average of data of one full day
    }else{
    $query="SELECT avg(steps) FROM steptracker WHERE clientID= '$clientId' AND 
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
$allDataSum = fetchDataSql($clientId, '', '', '', $today->format('d'), $today->format('m'), $today->format('y'), 1)[0]['SUM(steps)'];
// Today Data Sum
$todayData = fetchDataSql($clientId, $today->format('d'), $today->format('m'), $today->format('y'), $today->format('d'), $today->format('m'), $today->format('y'),2)[0]['SUM(steps)'];
// Week Average
$pastWeek =new DateTime('15-01-2022');
$pastWeek->modify('-1 week');
$weekAvg = fetchDataSql($clientId,$pastWeek->format('d'), $pastWeek->format('m'), $pastWeek->format('y'), $today->format('d'), $today->format('m'), $today->format('y'))[0]['avg(steps)'];
// Month Average
$pastMonth = new DateTime('15-01-2022');
$pastMonth->modify('-1 month');
$monthAvg = fetchDataSql($clientId,$pastMonth->format('d'), $pastMonth->format('m'), $pastMonth->format('y'), $today->format('d'), $today->format('m'), $today->format('y'))[0]['avg(steps)'];
?>
    <div class="row ts-down">
        <div class="col-lg-7 tsd-left">
            <div class="tsd-left-t">
                <div class="stats-btn-container">
                    
                    <div class="stat-btn">
                        <div class="stat-data">
                            <span class="title">Daily Count</span>
                            <span id="daily-count" class="value"><?php echo(ceil($todayData)) ?></span><span class="unit">meters</span>
                        </div>
                    </div>
                    <div class="stat-btn">
                        <div class="stat-data">
                            <span class="title">Weekly Avg</span>
                            <span id="weekly-avg" class="value"><?php echo(ceil($weekAvg)) ?></span><span class="unit">meters</span>
                        </div>
                    </div>
                    <div class="stat-btn">
                        <div class="stat-data">
                            <span class="title">Monthly Avg</span>
                            <span id="monthly-avg" class="value"><?php echo(ceil($monthAvg)) ?></span><span class="unit">meters</span>
                        </div>
                    </div>
                    <div class="stat-btn">
                        <div class="stat-data">
                            <span class="title">Total</span>
                            <span id="total" class="value"><?php echo(ceil($allDataSum)) ?></span><span class="unit">meters</span>
                        </div>
                    </div>
                </div>
            </div>
<?php
$pastActiivity = new DateTime('15-01-2022');
$pastActiivity->modify('-5 day');
$pastActivityData = fetchDataSql($clientId, $pastActiivity->format('d'), $pastActiivity->format('m'), $pastActiivity->format('y'), $today->format('d'), $today->format('m'), $today->format('y'),4);

// i = number of activities wanted
$i = 5;
$j = count($pastActivityData);
if($i>$j){
    $i = $j;
}
?>
            <div class="tsd-left-b table-activity">
                <div class="heading">
                    <p>Past Activity</p>
                    <i class="fa-solid fa-sliders"></i>
                </div>
                <div class="heading-border"></div>
                <div class="activity-container">
<?php while($i>0){
    $date = new DateTime($pastActivityData[$j-1]['dateandtime']);
?>
                    <div class="activity-box">
                        <div class="activity-date">
                            <span class="up"><?php echo ($date->format('D')) ?></span>
                            <span class="down"><?php echo ($date->format('d')) ?></span>
                        </div>
                        <div class="activity-border"></div>
                        <div class="activity-data">
                            <span class="up">Resting</span>
                            <span class="down"><?php echo ($pastActivityData[$j-1]['steps']) ?> meters</span>
                        </div>
                        <div class="activity-time">
                            <span><?php echo ($date->format('h:i A')) ?></span>
                        </div>
                    </div>
<?php $i--;
$j--; } ?>

                </div>
            </div>
        </div>
<?php
$progressBarData = fetchDataSql($clientId, $today->format('d'), $today->format('m'), $today->format('y'), $today->format('d'), $today->format('m'), $today->format('y'), 4);
$steps = fetchDataSql($clientId, $today->format('d'), $today->format('m'), $today->format('y'), $today->format('d'), $today->format('m'), $today->format('y'), 2)[0]['SUM(steps)'];
$currentGoal =  $progressBarData[0]['goal'];
$stepsRemaining = $currentGoal - $steps;
$progressPercent = round(($steps / $currentGoal) * 100,2);
?>
        <div class="col-lg-5 tsd-right">
            <div class="heading">
                <p>Daily Progress</p>
                <span>View Activity</span>
            </div>
            <div class="progress-bar-container">
                <div class="total-consumed">
                    <span><?php echo ($steps) ?> meters</span>
                    <p>Walked</p>
                </div>
                <div id="progress-percent" class="progress-circle">
                    <div class="progress-circle-fill">
                        <div class="progress-circle-value"><span id="progress-percent"><?php echo($progressPercent) ?>%</span><span>Walked</span></div>
                    </div>
                </div>
                <div class="total-remaining">
                    <span><?php echo($stepsRemaining) ?> meters</span>
                    <p>Remaining</p>
                </div>
            </div>
        </div>
<script>
    const progressPercent = document.getElementById('progress-percent');
    progressPercent.style.setProperty("background", "conic-gradient(#FFE0D1 <?php echo(100 - $progressPercent) ?>% , #FF8B8B 0)");
</script>
    </div>
</div>
<?php
// To Get Past Year - Yearly data
$wholeYearData = array(
    'value' => array(),
    'month' => array()
);
for ($i = 12; $i > 0;$i--){
    $j = $i - 1;
    $yearly_Month_1 = new DateTime('01-01-2022');
    $yearly_Month_2 = new DateTime('15-01-2022');
    $yearly_Month_1->modify("-$i month");
    $yearly_Month_2->modify("-$j month");
    $yearly_Data = (int) fetchDataSql($clientId, $yearly_Month_1->format('d'), $yearly_Month_1->format('m'), $yearly_Month_1->format('y'), $yearly_Month_2->format('d'), $yearly_Month_2->format('m'), $yearly_Month_2->format('y'),3)[0]['avg(steps)'];

    array_push($wholeYearData['value'], $yearly_Data);
    array_push($wholeYearData['month'], $yearly_Month_1->format('M'));
}
// To Get Past Month - Monthly Data
$wholeMonthData = array(
    'value' => array(),
    'date' => array(),
    'sum' =>0,
);
$monthly_Month = new DateTime('15-01-2022');
$monthly_Month->modify("-1 month");
while ($today >= $monthly_Month) {
    $monthly_Data = (int) fetchDataSql($clientId,$monthly_Month->format('d'),$monthly_Month->format('m'),$monthly_Month->format('y'), $monthly_Month->format('d'),$monthly_Month->format('m'),$monthly_Month->format('y'))[0]['avg(steps)'];

    array_push($wholeMonthData['value'],$monthly_Data);
    array_push($wholeMonthData['date'], $monthly_Month->format('d'));
    $wholeMonthData['sum'] = $wholeMonthData['sum'] + $monthly_Data;
    $monthly_Month->modify("+1 day");
}
// To Get Past Week - Weekly Data
$wholeWeekData = array(
    'value' => array(),
    'day' => array(),
    'sum' => 0,
);
for($i=7;$i>=0;$i--){
    $weekly_Day = new DateTime('15-01-2022');
    $weekly_Day->modify("-$i day");
    $weekly_Data = fetchDataSql($clientId, $weekly_Day->format('d'), $weekly_Day->format('m'), $weekly_Day->format('y'), $weekly_Day->format('d'), $weekly_Day->format('m'), $weekly_Day->format('y'))[0]['avg(steps)'];

    array_push($wholeWeekData['value'], $weekly_Data);
    array_push($wholeWeekData['day'], $weekly_Day->format('D'));
    $wholeWeekData['sum'] = $wholeWeekData['sum'] + $weekly_Data;
}
?>
<script>
// --------------Charts--------------
// Default Chart
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
                fontFamily: 'NATS',
                fontStyle: 'bold',
                fontSize:11,
                fontColor: '#9D9D9D',
            }
        }],
        yAxes:[{
            ticks:{
                min:500,
                max:5000,
                stepSize:100,
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
// Yearly Chart
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
                min:500,
                max:5000,
                stepSize:500,
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
// Monthly Chart
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
                min:500,
                max:5000,
                stepSize:500,
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
// Weekly Chart
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
                min:500,
                max:5000,
                stepSize:500,
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
</body>
</html>
