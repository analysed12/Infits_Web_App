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
        <!-- <script>
            $(document).ready(function(){
            $(".calendat_but").click(function(){
                $(".calendar_pop").toggle();
            });
            });
        </script> -->
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
.client-card-steps{
    
background: linear-gradient(208.27deg, rgba(255, 108, 108, 0.792) 43.71%, rgba(255, 92, 0, 0.416) 95.3%);
box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.15);
border-radius: 10px;
}
.client-card-steps p{
    color: #FFFFFF;
    font-style: normal;
    font-weight: 400;
    font-size: 19px;
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
    background: linear-gradient(262.45deg, #FA8686 9.26%, #F1A680 93.19%);
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
    --fg: #FF8B8B;
    --bg: #FFE0D1;
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
.cpb_container{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.cpb_up{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
}
.cpb_goals{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 19px;
    line-height: 40px;
}
.cpb{
    width: 100%;
    height: 100%;
    display: flex;
    align-items: top;
    justify-content: center;
    margin-top: 20px;
}
.cpb_bottom{
    display: flex;
    align-items: bottom;
    justify-content: center;
    flex-direction:row;

}
.cpb_bottom>div{
    margin: 15px;
}
.cpb_bottom>div h3{
    
font-family: 'NATS';
font-style: normal;
font-weight: 400;
letter-spacing: 0.03em;

color: #FF8B8B;
}
.cpb_bottom>div span{
    letter-spacing: 0.03em;
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    color: #000000;
}
.cpb_goals_box{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background: #FF8B8B;
    border-radius: 10px;
    width: 120px;
    height: 56px;
    margin:5px;
}
.cpb_goals_box span{
    letter-spacing: 0.03em;
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 38px;
    color: #FFFFFF;
}
..cpb_goals_box h3{
    letter-spacing: 0.03em;
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 21px;
line-height: 44px;
color: #FFFFFF;
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
/* .calendar_pop{

   z-index: -1;
   margin-top:-450px;
   margin-left: 50%;
    width: 323px;
    height: 291px;
    background: black;
    border-radius: 5px;
} */
.table{
    /* z-index: 1; */
}
.table_element{
    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
    margin: 20px;
    height:60px;
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
    margin-top: -220px;
    padding: 2px;
}
.pop_box{
    width: 344px;
    height: 49px;
    background: linear-gradient(180deg, rgba(255, 224, 209, 0.48) 0%, rgba(255, 139, 139, 0.48) 100%);
    border-radius: 10px;
    margin:5px;
}

.nav-pills{

font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 13px;
line-height: 27px;

color: #4D4D4D;
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
</style>

<body>
    <?php include 'navbar.php' ?>
    
    <?php
    /* queries for weekly, monthly and yearly steps data */
    // $userID = $_POST['userID'];
    $userID='Azarudeen';
	$stmnt = $conn -> prepare("SELECT SUM(steps) FROM steptracker
     WHERE WEEKOFYEAR(cast(steptracker.dateandtime as DATE))=WEEKOFYEAR(NOW()) AND clientid=?"
    );
	
	$stmnt-> bind_param("s",$userID);
	$stmnt-> execute();
	$stmnt-> bind_result($stepsSum);
	
	$products = array();
	
	while($stmnt->fetch()){
	  $temp = array();
	  
	  $temp['stepsSumWeek']= $stepsSum;
	   
	  array_push($products,$temp);
	}

	$stmnt = $conn -> prepare("SELECT SUM(steps) FROM steptracker WHERE YEAR(cast(steptracker.dateandtime as DATE)) = YEAR(NOW()) AND MONTH(cast(steptracker.dateandtime as DATE))=MONTH(NOW()) AND clientid=?");
	
	$stmnt-> bind_param("s",$userID);
	$stmnt-> execute();
	$stmnt-> bind_result($stepsSum);
	
	while($stmnt->fetch()){
	  $temp = array();
	  
	  $temp['stepsSumMonth']= $stepsSum;
	   
	  array_push($products,$temp);
	}

	$stmnt = $conn -> prepare("SELECT SUM(steps) FROM steptracker WHERE cast(steptracker.dateandtime as DATE)=CURRENT_DATE AND clientid=?");
	
	$stmnt-> bind_param("s",$userID);
	$stmnt-> execute();
	$stmnt-> bind_result($stepsSum);
	
	while($stmnt->fetch()){
	  $temp = array();
	  
	  $temp['stepsSumDaily']= $stepsSum;
	   
	  array_push($products,$temp);
	}

	$stmnt = $conn -> prepare("SELECT SUM(steps) FROM steptracker WHERE clientid=?");
	
	$stmnt-> bind_param("s",$userID);
	$stmnt-> execute();
	$stmnt-> bind_result($stepsSum);
	
	while($stmnt->fetch()){
	  $temp = array();
	  
	  $temp['stepsSumTotal']= $stepsSum;
	   
	  array_push($products,$temp);
	}
    ?>
    <div id="content">

        <div id="wrapper">
            <div id="inner1">
                <div id="inner11">
                    <div class="flex-container">
                        <div class="client-card-steps client-card" style="color:#FF6C6CCA ;border: 1px solid #FF6C6CCA;">
                            <img src="images/steps_selected.svg" alt="">
                            <p>Steps</p>
                        </div>
                        <div class=" client-card" style="color:#E266A9; border: 1px solid #E266A9;">
                        <i class="fa-solid fa-heart-pulse"></i>
                            <p>Heart Rate</p>
                        </div>
                        <div class="client-card" style="color:#52A4FF; border: 1px solid #52A4FF;">
                            <i class="fa-solid fa-droplet"></i>
                            <p>Water</p>
                        </div>
                        <div class="client-card" style="color:#7D5DE6; border: 1px solid #7D5DE6;">
                            <i class="fa-solid fa-weight-hanging"></i>
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
/* queries for graph */
function date_compare($a, $b)
{
    $t1 = $a['date'];
    $t2 = $b['date'];
    return $t1 - $t2;
}
$clientID = 'Azarudeen';
// $clientID = $_POST['clientuserID'];
$from = date('Y-m-d', strtotime("-6 day"));

$to = date('Y-m-d');

$end = date('Y-m-d',strtotime("1 day"));


$sql = "SELECT * FROM steptracker where clientID = '$clientID' and cast(dateandtime as date) between '$from' and '$to' GROUP BY cast(dateandtime as date) order by dateandtime";

$full = array();

$dateArr = array();

$dateArray = array();

$result = mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($connection));
    while($row =mysqli_fetch_assoc($result))
    {

      $emparray['date'] = date("d",strtotime($row['dateandtime']));
      $emparray['steps'] = $row['steps'];
      
      $dateArray[] = date("d",strtotime($row['dateandtime']));

      $full[] = $emparray;
    
    }

    $missingDates = array();

    $dateStart = date_create($from);
    $dateEnd   = date_create($end);

    $interval  = new DateInterval('P1D');
    $period    = new DatePeriod($dateStart, $interval, $dateEnd);

    foreach($period as $day) {
      $formatted = $day->format("d");
      // echo gettype($formatted);
      if(!in_array($formatted, $dateArray)) {
        $missingDates['date'] = $formatted;
        $missingDates['steps'] = '0';
        $full[] = $missingDates;
    }}

    usort($full, 'date_compare');

    $dateArr = array_column($full, 'date');
    $stepsArr = array_column($full, 'steps');
    for ($i=0; $i <7 ; $i++) { 
        $stepsArr[$i]= $stepsArr[$i]-'0';
    }
   
    // json_encode($dateArr);
    // echo var_dump($stepsArr);
    // echo var_dump($full);
    // echo json_encode($full);
?>
                <div class="graph">
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                            <canvas id="myChart"></canvas>
                </div>
                   
                </div>
            </div>
            <div id="inner2">
                <div class="inner21">
                    <div class="inner21-title">
                        Set Goals
                    </div>
                    <div class="inner21-image">
                        <img src="images/set_goals.png" alt="">
                    </div>
                    <div class="box-title">Daily Steps</div>
                    <div class="box-counter">00000</div>
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
                                    <span>72 BPM</span>
                                </div>
                                
                            </div>

                            <div class="bottom-stats-btn">
                                <div class="heart_info">
                                    <span>Weekly Avg</span>
                                    <span>72 BPM</span>
                                </div>
                                
                            </div>
                    
                      
                      
                            <div class="bottom-stats-btn">
                                <div class="heart_info">
                                <span>Monthly Avg</span>
                                <span>72 BPM</span>
                                </div>
                                <div class="heart_info">
                                </div>
                            </div>

                            <div class="bottom-stats-btn">
                                <div class="heart_info">
                                <span>Total</span>
                                <span>72 BPM</span>
                                </div>
                                <div class="heart_info">
                                </div>
                            </div>
                    </div>
                           
                </div>
                <div class="row">
                    <div class="col-sm-12">
                    <div class="table">
                        <div class="table_top">
                            <span>Past Activity</span>
                            <div class="calendat_but"><img src="images/calender_toggle.svg"></div>
                     
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
                <div class="cpb_container">
                    <div class="cpb_up">
                        <div class="cpb">
                            <div role="progressbar" style="--value:<?php $value = 50; echo $value; ?>"></div>
                        </div>
                        <div class="cpb_goals">
                            <div class="cpb_goals_box">
                                <span>Daily goal</span>
                                <h3>9200</h3>
                            </div>
                            <div class="cpb_goals_box">
                                 <span>Weekly goal</span>
                                <h3>50,000</h3>
                            </div>
                            <div class="cpb_goals_box">
                                <span>Monthly goal</span>
                                <h3>3,0000</h3>
                            </div>
                        </div>
                    </div>
                    <div class="cpb_bottom">
                    <?php
                        $userid='Azarudeen';
                        $sql = "SELECT steps, distance, calories  FROM steptracker WHERE clientid='$userid'ORDER BY clientID DESC LIMIT 1";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                    ?>
                        <div>   
                            <span>
                            <img src="images/footsteps.svg" alt="">
                                Steps
                            </span>
                            <h3><?php echo $row["steps"];?></h3>
                        </div>
                        <div>
                            <span>
                            <img src="images/distance.svg" alt="">
                                Distance
                            </span>
                            <h3>><?php echo $row["distance"];?> Kms</h3>
                        </div>
                        <div>
                            <span>
                                <img src="images/fire.svg" alt="">
                                Burned
                            </span>
                            <h3>><?php echo $row["calories"];?> kcal</h3>
                        </div>
                    </div>
                </div>
                <div class="activity_pop">
                    <div class="pop_header">
                        <span>Activity</span>
                        
                    </div>
                    <div class="pop_box">
                    </div>
                    <div class="pop_box">
                    </div>
                    <div class="pop_box">
                    </div>
                    <div class="pop_box">
                    </div>
                    <div class="pop_box">
                    </div>
                    <div class="pop_box">
                    </div>

                </div>
            </div>
        </div>
           
        </div>
    </div>
</body>

<script>
 var xValues = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']; 
 /* var yValues = [1000, 2000, 3000, 5000, 2000, 5000, 6000]; */
 var yValues =[<?php echo $row["steps"];?>];
/* var xValues = [ <?php echo $row["steps"];?> ]; */

new Chart("myChart", {
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
                    max: 9000
                }
            }],
        }
    }
});
</script>

</html>
