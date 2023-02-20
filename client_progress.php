<?php
// session_start();
include('navbar.php');
// Get Id
if(isset($_SESSION['name'])){
    $dietitian_id = $_SESSION['name'];
}else{
    header('location: login.php');
}
// Configure Dates
date_default_timezone_set("Asia/Calcutta");
$date = new DateTime();
function fetchData($query){
    $conn = new mysqli("localhost", "root", "", "infits");
    if($conn->connect_error){
        die("Connection failed :" . $conn->connect_error);
    }
    $result = $conn->query($query) or die("Query Failed");
    $data = array();
    while($row = $result->fetch_assoc()){
        $data[] =  $row;
    }
    $conn->close();
    return ($data);
}
function fetchInformation($client_id){
    date_default_timezone_set("Asia/Calcutta");
    $date = new DateTime();
    $data = array(
        'steps'=> array(
            'goal' => 0,
            'progress' => 0,
        ),
        'heart' =>array(
            // 'goal' => 0,
            'progress' => 0,
        ),
        'water' =>array(
            'goal' => 0,
            'progress' => 0,
        ),
        'sleep' =>array(
            'goal' => 0,
            'progress' => 0,
        ),
        'weight' =>array(
            'goal' => 0,
            'progress' => 0,
        ),
        'calorie' =>array(
            'goal' => 0,
            'progress' => 0,
        ),
    );
    $query = "SELECT steps FROM goals WHERE client_id = '$client_id'";
    $value = fetchData($query);
    if(!empty($value)){
        $data['steps']['goal'] =$value[0]['steps'];
    }else{
        $data['steps']['goal'] = 0;
    }
    $query = "SELECT water FROM goals WHERE client_id = '$client_id'";
    $value = fetchData($query);
    if(!empty($value)){
        $data['water']['goal'] =$value[0]['water'];
    }else{
        $data['water']['goal'] = 0;
    }
    $query = "SELECT sleep FROM goals WHERE client_id = '$client_id'";
    $value = fetchData($query);
    if(!empty($value)){
        $data['sleep']['goal'] =$value[0]['sleep'];
    }else{
        $data['sleep']['goal'] = 0;
    }
    $query = "SELECT weight FROM goals WHERE client_id = '$client_id'";
    $value = fetchData($query);
    if(!empty($value)){
        $data['weight']['goal'] =$value[0]['weight'];
    }else{
        $data['weight']['goal'] = 0;
    }
    $query = "SELECT calorie FROM goals WHERE client_id = '$client_id'";
    $value = fetchData($query);
    if(!empty($value)){
        $data['calorie']['goal'] =$value[0]['calorie'];
    }else{
        $data['calorie']['goal'] = 0;
    }
    
    $query = "SELECT SUM(steps) FROM steptracker WHERE clientID= '$client_id' AND `dateandtime` >= '{$date->format('y-m-d')} 00:00:00' AND `dateandtime` <= '{$date->format('y-m-d')} 23:59:59'";
    $value = fetchData($query);
    if($value[0]['SUM(steps)'] != ''){
        $data['steps']['progress'] =$value[0]['SUM(steps)'];
    }else{
        $data['steps']['progress'] = 0;
    }

    $query = "SELECT avg(average) FROM heartrate WHERE clientID= '$client_id' AND `dateandtime` >= '{$date->format('y-m-d')} 00:00:00' AND `dateandtime` <= '{$date->format('y-m-d')} 23:59:59'";
    $value = fetchData($query);
    if($value[0]['avg(average)'] != ''){
        $data['heart']['progress'] =$value[0]['avg(average)'];
    }else{
        $data['heart']['progress'] = 0;
    }

    $query = "SELECT SUM(drinkConsumed) FROM watertracker WHERE clientID= '$client_id' AND  `dateandtime` = '{$date->format('y-m-d')}'";
    $value = fetchData($query);
    if($value[0]['SUM(drinkConsumed)'] != ''){
        $data['water']['progress'] =$value[0]['SUM(drinkConsumed)'];
    }else{
        $data['water']['progress'] = 0;
    }

    $query = "SELECT SUM(hrsSlept) FROM sleeptracker WHERE clientID= '$client_id' AND `sleeptime` >= '{$date->format('y-m-d')} 00:00:00' AND `waketime` <= '{$date->format('y-m-d')} 23:59:59'";
    $hours = fetchData($query)[0]['SUM(hrsSlept)'];
    $query = "SELECT SUM(minsSlept) FROM sleeptracker WHERE clientID= '$client_id' AND `sleeptime` >= '{$date->format('y-m-d')} 00:00:00' AND `waketime` <= '{$date->format('y-m-d')} 23:59:59'";
    $mins = fetchData($query)[0]['SUM(minsSlept)'];
    $data['sleep']['progress'] = (float) $hours + $mins/60;

    $query = "SELECT avg(weight) FROM weighttracker WHERE clientID= '$client_id' AND `date` >= '{$date->format('y-m-d')} 00:00:00' AND `date` <= '{$date->format('y-m-d')} 23:59:59'";
    $value = fetchData($query);
    if($value[0]['avg(weight)'] != ''){
        $data['weight']['progress'] =$value[0]['avg(weight)'];
    }else{
        $data['weight']['progress'] = 0;
    }
    
    $query = "SELECT SUM(caloriesconsumed) FROM calorietracker WHERE clientID= '$client_id' AND `time` >= '{$date->format('y-m-d')} 00:00:00' AND `time` <= '{$date->format('y-m-d')} 23:59:59'";
    $value = fetchData($query);
    if($value[0]['SUM(caloriesconsumed)'] != ''){
        $data['calorie']['progress'] =$value[0]['SUM(caloriesconsumed)'];
    }else{
        $data['calorie']['progress'] = 0;
    }

    return $data;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap');

.body{
    font-family: 'NATS', sans-serif;
}
.client_progress{
    margin-top: 2rem;
    margin-left: 18rem;
    font-family: 'poppins';
    display: flex;
    flex-direction: column;
    gap: 1rem;
    margin-bottom: 1rem;
}
#details{
    color: #717171;
    border: none;
    background-color: white;

}
.details{
    margin-left: 45rem;
    border:none;
}
.dashboard_container3{
    display: flex;
    margin-top:0.5rem;
}
.dashboard_container4{
    margin-left: 3.7rem;
   
}
.container4_wrapper1{
    display: flex;
    gap: 2.5rem;
    font-weight: 500;
    margin-left: 16rem;
    margin-top: 1rem;
}
.material-symbols-outlined{
    margin-top: 0.1rem;
    margin-right: 0.3rem;
}
.symbols{
    display: flex;
    gap:0.2rem;
}

.container4_wrapper2{
    display: flex;
  
    background-color: #FDFDFD;
    border: 1px solid #e4e1e1;
    width:fit-content;
    padding: 0.7rem;
    padding-left:1rem;
    padding-right:1.5rem;
    border-radius: 0.5rem;
    margin-top: 1rem;

    
}
#values{
    margin-top: 2rem;
    background-color:#FDFDFD;
    color:#454545;
    font-weight:300;
    border:none;
}
.steps{
  margin-top: 1rem;
}
#two{
    background-color:#0177FD;
    border-radius: 100%;
    padding:0.09rem;
    color:white;
    padding-left:0.3rem;
    padding-right:0.3rem;
    font-size:0.6rem;

}
.list1{
    display:flex;
    gap:13rem;
}
.list2{
    display:flex;
    gap:14rem;
}
.mobileview_clientprogress{
    
    display: none;
}
@media screen and (max-width: 720px){
    .dashboard_container4{
        display: none;
    }
    .details{
        margin-left:0;
    }
    .dashboard_container3{
        display:flex;
        gap:1rem !important;
        
        justify-content:space-between;
    }
    .client_progress{
        margin-left:1rem;
        
    }
  
    .mobileview_clientprogress{
        display: flex;
        flex-direction: column;
        gap: 1rem;
        box-shadow: 0 4px 7px rgba(0,0,0,0.12);
        border-radius: 0.7rem;
        padding: 1rem;
        width: 260px;
        height: 283px;
        margin-left: 2rem;
    }
    .list1{
    display:flex;
    gap:8rem;
}
.list2{
    display:flex;
    gap:9rem;
}
}
</style>
<body>
    <div class="client_progress">
    <div class="dashboard_container3">
            <div style="font-size:1.5rem; font-weight:600"> Client Progress</div>
            <div class="details">
                <a href="client_detailed_progress.php"><button id="details">View Detailed Progress</button></a>
            </div>
            
        </div>
<?php
$query = "SELECT `client_id`,`name` FROM `addclient` WHERE dietitianuserID = '$dietitian_id' AND status = 1;";
$data = fetchData($query);
?>
        <div class="dashboard_container4">

            <div class="container4_wrapper1">
                <div class="symbols"><div><img src="images/Frame.png" style="width:1.8rem"></div><div><span>Steps</span></div></div>
                <div class="symbols"><div><img src="images/Frame-1.png" style="width:1.8rem"></div><div><span>Heart Rate</span></div></div>
                <div class="symbols"><div><img src="images/Frame-2.png" style="width:1.8rem"></div><div><span>Water</span></div></div>
                <div class="symbols"><div><img src="images/Frame-3.png" style="width:1.8rem"></div><div><span>Sleep</span></div></div>
                <div class="symbols"><div><img src="images/Frame-4.png" style="width:1.8rem"></div><div><span>Weight</span></div></div>
                <div class="symbols"><div><img src="images/Frame-5.png" style="width:1.8rem"></div><div><span>Calories</span></div></div>
                
            </div>
<?php
if(!empty($data)){
    $count = count($data);
    // if($lim > count($data)){
    //     $lim = count($data);
    // }
    for($i = 0; $i<$count; $i++){
        $infom = fetchInformation($data[$i]['client_id']);
?>
            <div class="container4_wrapper2">
                <span><a href="" style="background-color:#FDFDFD; color:black;font-weight:600; border:none; margin-top:1rem"><span><img src="images/ronald.jpg" style="width:2rem; background-color:#FDFDFD;border-radius:1rem"> <?php echo($data[$i]['name']) ?></span></a></span>
                <span><a href="track_stats_steps.php?id=<?php echo($data[$i]['client_id']) ?>" id="values" style="margin-left:5rem"><?php echo($infom['steps']['progress'] . '/' . $infom['steps']['goal']) ?></a></span>
                <span><a href="" id="values" style=" margin-left:3rem"><?php echo($infom['heart']['progress']) ?> Bpm</a></span>
                <span><a href="" id="values" style=" margin-left:4rem"><?php echo($infom['water']['progress'] . '/' . $infom['water']['goal']) ?> ltrs</a></span>
                <span><a href="" id="values" style=" margin-left:4rem"><?php echo(round($infom['sleep']['progress'],2) . '/' . $infom['sleep']['goal']) ?> hrs.</a></span>
                <span><a href="" id="values" style="margin-left:3rem"><?php echo($infom['weight']['progress'] . '/' . $infom['weight']['goal']) ?> kg</a></span>
                <span><a href="" id="values" style=" margin-left:3rem"><?php echo($infom['calorie']['progress'] . '/' . $infom['calorie']['goal']) ?> kcal</a></span>
            </div>
<?php
    }
}
?>
    </div> 
    
                

                <!----------------------------MOBILE VIEW OF CLIENT PROGRESSS-------------------->
<?php
if(!empty($data)){
    $count = count($data);
    // if($lim > count($data)){
    //     $lim = count($data);
    // }
    for($i = 0; $i<$count; $i++){
        $infom = fetchInformation($data[$i]['client_id']);
?>
        <div class="mobileview_clientprogress">

            <div class="mob_wrapper1" >
                <span><a href="" style=" color:black;font-weight:500; border:none; margin-top:1rem;background-color:white; margin-left:1rem"><span><img src="images/ronald.jpg" style="width:2rem;border-radius:1rem"> <?php echo($data[$i]['name']) ?></span></a></span>
                <div class="row1" style="display:flex ; gap:2rem ">
                        <div class="steps">
                            <div class="symbols">
                            <div style="color:#F6A682"><img src="images/Frame.png" style="width:1.8rem"></div><div style="margin-top:0.2rem; font-weight:500"><span>Steps</span></div></div>
                            <span style="font-size:0.9rem;color:#454545"><?php echo($infom['steps']['progress'] . '/' . $infom['steps']['goal']) ?></span>
                        </div>
                        <div class="steps">
                            <div class="symbols">
                            <div style="color:#EF80B2"><img src="images/Frame-1.png" style="width:1.8rem"></div><div style="margin-top:0.2rem; font-weight:500"><span>Heart Rate</span></div></div>
                            <span style="font-size:0.9rem;color:#454545"><?php echo($infom['heart']['progress']) ?> bpm</span>
                        </div>
                </div>

                <div class="row2" style="display:flex ; gap:2rem">
                        <div class="steps">
                            <div class="symbols">
                            <div style="color:#8FAFF3"><img src="images/Frame-2.png" style="width:1.8rem"></div><div style="margin-top:0.2rem; font-weight:500"><span>Water</span></div></div>
                            <span style="font-size:0.9rem;color:#454545"><?php echo($infom['water']['progress'] . '/' . $infom['water']['goal']) ?> ltrs</span>
                        </div>
                        <div class="steps">
                            <div class="symbols">
                            <div style="color:#7550E2"><img src="images/Frame-3.png" style="width:1.8rem"></div><div style="margin-top:0.2rem; font-weight:500"><span>Sleep</span></div></div>
                            <span style="font-size:0.9rem;color:#454545"><?php echo(round($infom['sleep']['progress'],2) . '/' . $infom['sleep']['goal']) ?> hrs.</span>
                        </div>
                </div>

                <div class="row3" style="display:flex ; gap:2rem">
                        <div class="steps">
                            <div class="symbols">
                            <div style="color:#788F96"><img src="images/Frame-4.png" style="width:1.8rem"></div><div style="margin-top:0.2rem; font-weight:500"><span>Weight</span></div></div>
                            <span style="font-size:0.9rem;color:#454545"><?php echo($infom['weight']['progress'] . '/' . $infom['weight']['goal']) ?> kg</span>
                        </div>
                        <div class="steps">
                            <div class="symbols">
                            <div style="color:#E388A0"><img src="images/Frame-5.png" style="width:1.8rem"></div><div style="margin-top:0.2rem; font-weight:500"><span>Calories</span></div></div>
                            <span style="font-size:0.9rem;color:#454545"><?php echo($infom['calorie']['progress'] . '/' . $infom['calorie']['goal']) ?> kcal</span>
                        </div>
                </div>
            </div>
        </div>
<?php
    }
}
?>

    
    
    
</body>
</html>