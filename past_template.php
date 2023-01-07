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

<style>
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
  background-color: #63AEFF;
}
.tab button.active {
  background-color: #63AEFF;
  color: white !important;
}

/* Style the tab content */
.tabcontent {
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

.client-card p {
    font-size: 15px;
}

.client-card i {
    font-size: 15px;
}
.client-card-water{
    background: linear-gradient(216.13deg, #5CA7F8 9.2%, #ABB3F0 91.57%);
    border: 1px solid #52A4FF;
    border-radius: 10px;
}
.client-card-water p{
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 19px;
    line-height: 120%;
    /* or 23px */

    text-align: center;

    color: #FFFFFF;

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

.day-content{
   
    margin: 30px;
    left: 30px;
    display: flex;
    flex-direction: column;
    padding: 10px;
    padding-left: 30px;
}

.card-content{
    display: flex;
    flex-wrap: wrap;
    padding: 10px;

}
.card{
    flex: 0 0 25.333333%;
    margin : 15px;
}
.card-inside{
    display: flex;
    flex-direction: row;
    padding : 10px;
    background: linear-gradient(180deg, rgba(255, 232, 242, 0.2) 0%, rgba(201, 134, 207, 0.2) 100%);
    border-radius: 10px;
    align-items: center;
}

.card-image{
    width: 20%;
    display: flex; 
    justify-content: center; 
}

.card-food-item{
    width: 40%;
   
}

.card-food-quantity{
    width : 40%;
    display: flex; 
    justify-content: center; 
}

</style>
<body>
<?php include 'navbar.php' ?>
    <div class="content">

        <!-- tab_links -->
        
        <div class="row">
            <div class="col-sm-10">
               <h2  style=" height: 76px; padding : 15px;width: 400px; border-radius: nullpx;">Past Activites</h2>
                <div class="tab">
                    <button class="tablinks graph_button_left " onclick="openCity(event, 'London')">Custom Dates</button>
                    <button class="tablinks" onclick="openCity(event, 'Year')">Year</button>
                    <button class="tablinks" onclick="openCity(event, 'Month')">Month</button>
                    <button class="tablinks graph_button_side" class="tab_button_side" onclick="openCity(event, 'Week')">Week</button>
                </div>
            </div>
            <div class="col-sm-2">
                    <!-- metric_button -->
                <div class="client-card client-card-water " style="color:#52A4FF; border: 1px solid #52A4FF;">
                    <img src="images/water_selected.svg" alt="">
                    <p>Water</p>
                </div>
            </div>
        </div>
 
        <!-- past_activities -->
        <div class="graph">

         <!-- Tab content -->
                                <div id="London" id="defaultOpen"class="tabcontent">
                                
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                                    <canvas id="myChartwater"></canvas>
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
                                    </script>
                                    
                                    <?php
                                        for ($j = 1; $j<=3; $j++){
                                            ?>
                                            <div class="day-content">
                                                
                                                    <div class="date-content"><span style = "font-weight: 600">19 Jan 2021</span></div>
                                                    <div class="card-content">
                                                        <?php
                                                        for ($i = 1; $i<=5; $i++){
                                                            ?>
                                                            <div class="card">
                                                                <div class="card-inside">
                                                                    <div class="card-image" >
                                                                        <img src="images/coffecup.png" alt="">
                                                                    </div>
                                                                    <div class="card-food-item" ><span style = "font-weight: bold">Coffee</span><br><span style= "font-weight: lighter;font-size: 15px" >11:10 a.m.</span> </div>
                                                                    <div class="card-food-quantity" >
                                                                        <img src="images/waterdrop.png" style = "height: 20px; width: 16px;"><span style= "margin-left: 10px;font-weight: 500;"> 200 ML</span>
                                                                    </div>
                                                                </div>
                                                            </div>                                                  
                                                        <?php
                                                    }   
                                                    ?>
                                            </div>
                                         <?php
                                        }   
                                        ?>
                                        </div>

                                 </div>
            </div>                   
        </div>
    </div>
</body>
</html>