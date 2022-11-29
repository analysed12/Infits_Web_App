<?php  include('config.php');?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <script>
            $(document).ready(function(){
            $(".calendat_but").click(function(){
                $(".calendar_pop").animate({
                    height: 'toggle'
                });
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
.client-card-weight{
    
background: linear-gradient(38.98deg, #768B93 7.65%, #8FC4C3 87.93%);
border: 1px solid #54AFAC;
border-radius: 10px;
}
.client-card-weight p{
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 29px;
line-height: 85%;
/* or 16px */

text-align: center;

color: #FFFFFF;
}
.client-card p {
    font-size: 15px;
}

.client-card i {
    font-size: 15px;
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
    background: linear-gradient(263.28deg, #8EC2C1 0%, #8CBFBE 0.01%, #788F97 93.31%);
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
    --bg:#D7EDEC;
     --fg:#87A9AC;
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
    font-size: calc(var(--size) / 5);
    color: var(--fg);
}

div[role="progressbar"]::before {
    counter-reset: percentage var(--value);
    content: counter(percentage) '%';
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
    height: 100%;
    display: flex;
    align-items: top;
    justify-content: center;
    margin-top: 20px;
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
.tab button {
    background: #FFFFFF;
    border: 1px solid #FCFBFB;
    border-radius: 0px;
    height: 27px;
    width: 76px;
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

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #C986CF;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #C986CF;
  color: white;
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
</style>

<body>
    <?php include 'navbar.php' ?>
  
    <div id="content">

        <div id="wrapper">
            <div id="inner1">
                <div id="inner11">
                    <div class="flex-container">
                        <div class="client-card" style="color:#FF6C6CCA ;border: 1px solid #FF6C6CCA;">
                            <i class="fa-solid fa-shoe-prints" style="rotate: -90deg;"></i>
                            <p>Step</p>
                        </div>
                        <div class="client-card" style="color:#E266A9; border: 1px solid #E266A9;">
                            <i class="fa-solid fa-heart-pulse"></i>
                            <p>Heart Rate</p>
                        </div>
                        <div class="client-card" style="color:#52A4FF; border: 1px solid #52A4FF;">
                            <i class="fa-solid fa-droplet"></i>
                            <p>Water</p>
                        </div>
                        <div class="client-card client-card-weight" style="color:#7D5DE6; border: 1px solid #7D5DE6;">
                        <img src="images/weight_selected.svg" alt="">
                            <p>Weight Track</p>
                        </div>
                        <div class="client-card" style="color:#54AFAC; border: 1px solid #54AFAC;">
                            <i class="fa-solid fa-moon"></i>
                            <p>Sleep</p>
                        </div>
                        <div class="client-card" style="color:#E3738D; border: 1px solid #E3738D;">
                            <i class="fa-solid fa-stopwatch-20"></i>
                            <p>Calorie Track</p>
                        </div>
                    </div>

                </div>
                <div id="inner12">

                <?php 
            //weight fragment
	// $userID = $_POST['userID'];
	$userID = "Azarudeen";
	
	$stmnt = $conn -> prepare("SELECT AVG(weight) FROM weighttracker WHERE WEEKOFYEAR(cast(weighttracker.date as DATE) )=WEEKOFYEAR(NOW()) AND clientid=?");
	
	$stmnt-> bind_param("s",$userID);
	$stmnt-> execute();
	$stmnt-> bind_result($Sum);
	
	$products = array();
	
	while($stmnt->fetch()){
	  $temp = array();
	  
	  $temp['SumWeek']= $Sum;
	   
	  array_push($products,$temp);
	}

	$stmnt = $conn -> prepare("SELECT AVG(weight) FROM weighttracker WHERE YEAR(cast(weighttracker.date as DATE)) = YEAR(NOW()) AND MONTH(cast(weighttracker.date as DATE))=MONTH(NOW()) AND clientid=?");
	
	$stmnt-> bind_param("s",$userID);
	$stmnt-> execute();
	$stmnt-> bind_result($Sum);
	
	while($stmnt->fetch()){
	  $temp = array();
	  
	  $temp['SumMonth']= $Sum;
	   
	  array_push($products,$temp);
	}

	$stmnt = $conn -> prepare("SELECT AVG(weight) FROM weighttracker WHERE cast(weighttracker.date as DATE)=CURRENT_DATE AND clientid=?");
	
	$stmnt-> bind_param("s",$userID);
	$stmnt-> execute();
	$stmnt-> bind_result($Sum);
	
	while($stmnt->fetch()){
	  $temp = array();
	  
	  $temp['SumDaily']= $Sum;
	   
	  array_push($products,$temp);
	}

	$stmnt = $conn -> prepare("SELECT AVG(weight) FROM weighttracker WHERE clientid=?");
	
	$stmnt-> bind_param("s",$userID);
	$stmnt-> execute();
	$stmnt-> bind_result($Sum);
	
	while($stmnt->fetch()){
	  $temp = array();
	  
	  $temp['SumTotal']= $Sum;
	   
	  array_push($products,$temp);
	}

    if(count($products)>-1){
    // echo json_encode($products);
    }

    else {
    echo "failure";
    }
    $dailyCount = array_column($products, 'SumDaily');
    $weeklyCount = array_column($products, 'SumWeek');
    $monthlyCount = array_column($products, 'SumMonth');
    $totalCount = array_column($products, 'SumTotal');
    

    //month graph
        $from = date("Y-m-d", strtotime("first day of this month"));
    $to = date("Y-m-d", strtotime("last day of this month"));

    // $clientID = $_POST['userID'];

    $sql = "select weight,date from weighttracker where clientID = '$userID' and date between '$from' and '$to';";

    $result = mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($connection));

        $emparray = array();
        while($row =mysqli_fetch_assoc($result))
        {
            $emparray['date'] = date("d",strtotime($row['date']));
            $emparray['weight'] = $row['weight'];
            $full[] = $emparray;
        }
        // echo json_encode(['weight' => $full]);
        $dateArrM = array_column($full, 'date');
        $weightArrM = array_column($full, 'weight');
        
    
           for($i=0;$i<count($dateArrM);$i++){
            // $dateArrM[$i] = $dateArrM[$i]-'0';
            $weightArrM[$i] = $weightArrM[$i]-'0';
            }

    //week graph
    ?>

                <div class="graph">
                                           
                                           <div class="tab">
                                           <button class="tablinks" onclick="openCity(event, 'London')">Custom Dates</button>
                                           <button class="tablinks" onclick="openCity(event, 'Year')">Year</button>
                                           <button class="tablinks" onclick="openCity(event, 'Month')">Month</button>
                                           <button class="tablinks" class="tab_button_side" onclick="openCity(event, 'Week')">Week</button>
                                           </div>
               
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
                               </div>
                </div>
            </div>
            <div id="inner2">
                        <?php
                        // $userID = $_POST['userID'];
                        // $date = $_POST['date'];
                        // $weight = $_POST['weight'];
                        // $height = $_POST['height'];
                        // $bmi = $_POST['bmi'];
                        // $goal = $_POST['goal'];
                        $userID="Azarudeen";
                        $date = date('Y-m-d', strtotime('1 days'));
                        $weight = 70;
                        $height = 170;
                        $bmi = 24;
                        $goal = 60;
                        $sql = "select weight from weighttracker where clientID='$userID' and date = '$date'";
                        
                        $result = mysqli_query($conn, $sql);
                        
                        if(mysqli_num_rows($result) == 0){
                        $sql = "insert into weighttracker values('$date',$height,$weight,$bmi,$goal,'$userID')";
                        if (mysqli_query($conn,$sql)) {
                            $sql = "update client set height='$height',weight = '$weight' where clientuserID = '$userID'";
                            mysqli_query($conn,$sql);
                            echo "updated";
                        }
                        else{
                            echo "error";
                        }
                        }
                        else{
                            $sql = "update weighttracker set height='$height',weight = '$weight',goal = '$goal',bmi = '$bmi' where date = '$date' and clientID = '$userID'";
                            if (mysqli_query($conn,$sql)) {
                                $sql = "update client set height='$height',weight = '$weight' where clientuserID = '$userID'";
                                mysqli_query($conn,$sql);
                                // echo "updated";
                            }
                            else{
                                echo "error";
                            }   
                        }
                        ?>
                <div class="inner21">
                    <div class="inner21-title">
                        Set Goals
                    </div>
                    <div class="inner21-image">
                        <img src="images/obesity.svg" alt="">
                    </div>
                    <div class="box-title">Daily Steps</div>
                    <div class="box-counter">
                    <input type="number" id="setgoalweight" name="fname">
                    </div>
                    <buttpn class="box-btn">Set</buttpn>
                </div>
            </div>
        </div>

        <div id="wrapper-lower">
        <div class="row">
            <div class="col-sm-8">

                <div class="bottom-btns">
                    
                <div class="flex-container-bottom">
                            <div class="bottom-stats-btn">
                                <div class="heart_info">
                                    <span>Daily Count</span>
                                    <span><span><?php echo json_encode((int) $dailyCount[0]-'0');?></span> Kgs</span>
                                </div>
                                
                            </div>

                            <div class="bottom-stats-btn">
                                <div class="heart_info">
                                    <span>Weekly Avg</span>
                                    <span><span><?php echo json_encode((int) $weeklyCount[0]-'0');?></span> Kgs</span>
                                </div>
                                
                            </div>
                    
                      
                      
                            <div class="bottom-stats-btn">
                                <div class="heart_info">
                                <span>Monthly Avg</span>
                                <span><span><?php echo json_encode((int) $monthlyCount[0]-'0');?></span> Kgs</span>
                                </div>
                                
                            </div>

                            <div class="bottom-stats-btn">
                                <div class="heart_info">
                                <span>Total</span>
                                <span><span><?php echo json_encode((int) $totalCount[0]-'0');?></span> Kgs</span>
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
                     $a=1;
                     
                    while ($a <= 4) {
                        
                     echo ' <div class="table_element">';
                     echo '<div class="date">';
                     echo '<span>Sep</span>';
                     echo ' <p>18</p>';
                     echo '</div>';
                     echo '<div class="table_activity">';
                     echo '<span>Sep</span>';
                     echo '<p>18</p>';
                     echo ' </div>';
                     echo '<div class="table_time">';
                     echo '   <span>9:10 AM</span>';
                     echo ' </div>';
                     echo '</div>';
                     
                     $a++;
                    }
                     
                    
                     ?>
                      </div> 

                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                    <div class="pheader">
						<h4>Daily Progress</h4>
						<p>View Activity</p>
					</div>
                <div class="cpb">
                    <div role="progressbar" style="--value:<?php $value = 50; echo $value; ?>"></div>
                </div>
            </div>
        </div>
           
        </div>
    </div>
</body>
<script>
 var xValues = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];  
 var yValues = [1000, 2000, 3000, 5000, 2000, 5000, 6000];
 
                    new Chart("myChartwater", {
                                type: "line",
                                data: {
                                    labels: xValues,
                                    datasets: [{
                                        fill: false,
                                        lineTension: 0,
                                        backgroundColor: "#FF8B8B",
                                        borderColor: "#FF8B8B",
                                        data: yValues
                                    }]
                                },
                                options: {
                                    legend: {
                                        display: true
                                    },
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                min: 1000,
                                                max: 12000
                                            }
                                        }],
                                    }
                                }
                            });
                        new Chart("myChartYearly", {
                                type: "line",
                                data: {
                                    labels: xValues,
                                    datasets: [{
                                        fill: false,
                                        lineTension: 0,
                                        backgroundColor: "#FF8B8B",
                                        borderColor: "#FF8B8B",
                                        data: yValues
                                    }]
                                },
                                options: {
                                    legend: {
                                        display: false
                                    },
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                min: 1000,
                                                max: 12000
                                            }
                                        }],
                                    }
                                }
                            });
                            
                            new Chart("myChartMonthly", {
                                type: "line",
                                data: {
                                    labels: xValues,
                                    datasets: [{
                                        fill: false,
                                        lineTension: 0,
                                        backgroundColor: "#FF8B8B",
                                        borderColor: "#FF8B8B",
                                        data: yValues
                                    }]
                                },
                                options: {
                                    legend: {
                                        display: false
                                    },
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                min: 1000,
                                                max: 12000
                                            }
                                        }],
                                    }
                                }
                            });
                            new Chart("myChartWeekly", {
                                type: "line",
                                data: {
                                    labels: xValues,
                                    datasets: [{
                                        fill: false,
                                        lineTension: 0,
                                        backgroundColor: "#FF8B8B",
                                        borderColor: "#FF8B8B",
                                        data: yValues
                                    }]
                                },
                                options: {
                                    legend: {
                                        display: false
                                    },
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                min: 1000,
                                                max: 12000
                                            }
                                        }],
                                    }
                                }
                            });

</script>

</html>
