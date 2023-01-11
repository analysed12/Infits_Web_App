<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<?php include 'navbar.php' ?>
<style>
    .heading p {
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 44px;
    line-height: 70px;
}
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
border-top-left-radius: 1em!important;
border-bottom-left-radius: 1em!important;
border-top-right-radius: 1em!important;
  border-bottom-right-radius: 1em!important;
}
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
.tab button.active {
  background-color: #C986CF;
  color: white !important;
}

/* Style the tab content */
.tab-content {
  display: none;
  padding: 6px 12px;
  /* border: 1px solid #ccc; */
  border-top: none;
}

.content{
    padding:10px;
   
}
.top_bar{
    display: flex;
   flex-wrap:wrap;
 
 
}
.client-card {
        width: 70px;
        height: auto;
        margin: 10px;
        text-align: center;
        font-size: 20px;
        border-radius: 14px;
        padding: 5px;
}

.client-card p {
    font-size: 15px;
}

.client-card i {
    font-size: 15px;
}
.client-card-calorie{
    background: linear-gradient(217.35deg, #F97EAA 0%, #C389D5 100%);
    border: 1px solid #E266A9;
    border-radius: 10px;
    margin: 10px 0 0 0;
    width: 97px;
    height: 114px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 15px;
}
.client-card-calorie p{
    margin-bottom: 0;
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 19px;
    line-height: 120%;
    /* or 23px */

    text-align: center;

    color: #FFFFFF;
}
/* -------------------Calorie Tab Content------------------- */
.week-container{
    margin: 3%;
}
.week-container p{
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 24px;
line-height: 30px;
/* identical to box height */
color: #000000;
}
.flex-box {
    display: flex;
    gap: 25px;
    flex-wrap: wrap;
    padding: 5px 30px;
}
.meal-box {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 311px;
    height: 67px;
    padding: 20px;
    background: linear-gradient(180deg, rgba(235, 203, 196, 0.14) 0%, rgba(104, 68, 226, 0.2) 100%, rgba(227, 137, 160, 0.2) 100%);
    border-radius: 10px;
}
.meal-box p{
    margin-bottom: 0;
}
.left,
.right{
    display: flex;
    gap: 20px;
    /* flex-direction: row; */
}
.left span{
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 17px;
/* line-height: 36px; */
/* identical to box height */


color: #000000;

}
.right p{
    font-size: 20px;
    line-height: 42px;
}
/* -----------------------Resposnive New----------------------- */
.ph-left{
    padding-left: 3%;
}
.ph-right {
    display: flex;
    justify-content: flex-end;
    padding-right: 5%;
}
@media (max-width:576px){
    .tab{
        display:flex;
        width: 100%;
        flex-wrap:wrap;
    }
    .tab button {
    width: 25%;
}
    .graph_button_left{
        width:25% !important;
    }
    /* anothr */
    .past-header{
        position:relative;
    }
    .ph-right{
        position:absolute;
        top: -45px;
        right: 5px;
        scale: 0.9;
        padding: 0;
    }
    .week-container p {
    font-size: 20px;
}
}
@media (max-width:330px){
    .past-header{
        position:relative;
    }
    .ph-right{
        position:absolute;
        top: -59px;
        right: -40px;
        scale: 0.65;
        padding: 0;
    }
}
</style>
<body>

    <div class="content">
        <!-- tab_links -->
        
        <div class="row past-header">
            <div class="col-sm-8 ph-left">
                <div class="heading">
                    <p>Past Activities</p>
                </div>
                <div class="tab">
                    <button class="tablinks graph_button_left " onclick="openCity(event, 'London')">Custom Dates</button>
                    <button class="tablinks" onclick="openCity(event, 'Year')">Year</button>
                    <button class="tablinks" onclick="openCity(event, 'Month')">Month</button>
                    <button id="temp" class="tablinks graph_button_side" class="tab_button_side" onclick="openCity(event, 'Week')">Week</button>
                </div>
            </div>
            <div class="col-sm-4 ph-right">
                    <!-- metric_button -->
                <div class="client-card client-card-calorie " style="color:#E266A9; border: 1px solid #E266A9;">
                    <img src="images/heartrate_selected.svg" alt="">
                    <p>Heart Rate</p>
                </div>
            </div>
        </div>
            
            
    
        <!-- past_activities -->
        <div class="graph">

         <!-- Tab content -->
                                <div id="London" id="defaultOpen" class="tab-content">
                                
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                                <canvas id="myChartwater"></canvas>
                                </div>

                                <div id="Year" class="tab-content">
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                                    <canvas id="myChartYearly"></canvas>
                                </div>

                                <div id="Month" class="tab-content">
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                                    <canvas id="myChartMonthly"></canvas>
                                </div>
                                
                                <div id="Week" class="tab-content">
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                                    <!-- <canvas id="myChartWeekly"></canvas> -->
                                    <div class="row">
                                        <div class="col">
                                        <?php for ($i=0; $i < 3; $i++) { ?>
                                            <div class="week-container">
                                                <p class="date">19 Jun 2021</p>
                                                <div class="flex-box">
                                                
                                                    <div class="meal-box">
                                                        <div class="left">
                                                            <img src="images/resting_heart_rate.svg" alt="">
                                                            <div class="meal-title">
                                                                <p>Resting</p>
                                                                <span>11:00 am</span>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <img src="images/heartrate_selected_small.svg" alt="">
                                                            <p class="kcal">150 BPM</p>
                                                        </div>
                                                    </div>
                                                    <div class="meal-box">
                                                        <div class="left">
                                                            <img src="images/running_heart_rate.svg" alt="">
                                                            <div class="meal-title">
                                                                <p>Running</p>
                                                                <span>11:00 am</span>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <img src="images/heartrate_selected_small.svg" alt="">
                                                            <p class="kcal">169 BPM</p>
                                                        </div>
                                                    </div>
                                                    <div class="meal-box">
                                                        <div class="left">
                                                            <img src="images/cycling_heart_rate.svg" alt="">
                                                            <div class="meal-title">
                                                                <p>Cycling</p>
                                                                <span>11:00 am</span>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <img src="images/heartrate_selected_small.svg" alt="">
                                                            <p class="kcal">153 BPM</p>
                                                        </div>
                                                    </div>
                                                    <div class="meal-box">
                                                        <div class="left">
                                                            <img src="images/sport_heart_rate.svg" alt="">
                                                            <div class="meal-title">
                                                                <p>After Sport</p>
                                                                <span>11:00 am</span>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <img src="images/heartrate_selected_small.svg" alt="">
                                                            <p class="kcal">180 BPM</p>
                                                        </div>
                                                    </div>
                                                    <div class="meal-box">
                                                        <div class="left">
                                                            <img src="images/gym_heart_rate.svg" alt="">
                                                            <div class="meal-title">
                                                                <p>Gym</p>
                                                                <span>06:55 pm</span>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <img src="images/heartrate_selected_small.svg" alt="">
                                                            <p class="kcal">122 BPM</p>
                                                        </div>
                                                    </div>
                                                
                                                </div>
                                            </div>
                                        <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                       <script>
                                            function openCity(evt, cityName) {
                                                /* Declare all variables */
                                                var i, tabcontent, tablinks;
                    
                                                /* // Get all elements with class="tab-content" and hide them */
                                                tabcontent = document.getElementsByClassName("tab-content");
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
                                            // document.getElementById("temp").click();
                                       </script> 
            </div>
        </div>
</body>
</html>