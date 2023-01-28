<?php
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
    $query = "SELECT goal FROM goals WHERE clientID = '$client_id' AND forWhat = 'steps' ORDER BY time DESC LIMIT 1";
    $value = fetchData($query);
    if(!empty($value)){
        $data['steps']['goal'] =$value[0]['goal'];
    }else{
        $data['steps']['goal'] = 0;
    }
    $query = "SELECT goal FROM goals WHERE clientID = '$client_id' AND forWhat = 'water' ORDER BY time DESC LIMIT 1";
    $value = fetchData($query);
    if(!empty($value)){
        $data['water']['goal'] =$value[0]['goal'];
    }else{
        $data['water']['goal'] = 0;
    }
    $query = "SELECT goal FROM goals WHERE clientID = '$client_id' AND forWhat = 'sleep' ORDER BY time DESC LIMIT 1";
    $value = fetchData($query);
    if(!empty($value)){
        $data['sleep']['goal'] =$value[0]['goal'];
    }else{
        $data['sleep']['goal'] = 0;
    }
    $query = "SELECT goal FROM goals WHERE clientID = '$client_id' AND forWhat = 'weight' ORDER BY time DESC LIMIT 1";
    $value = fetchData($query);
    if(!empty($value)){
        $data['weight']['goal'] =$value[0]['goal'];
    }else{
        $data['weight']['goal'] = 0;
    }
    $query = "SELECT goal FROM goals WHERE clientID = '$client_id' AND forWhat = 'calorie' ORDER BY time DESC LIMIT 1";
    $value = fetchData($query);
    if(!empty($value)){
        $data['calorie']['goal'] =$value[0]['goal'];
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

    $query = "SELECT SUM(drinkConsumed) FROM watertracker WHERE clientID= '$client_id' AND  `date` = '{$date->format('y-m-d')}'";
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
    <title>Dashboard</title>
    
    <!-- <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<style>
.dashboard{
    margin-top: 2rem;
    margin-left: 17rem;
    font-family: 'NATS';
    display: flex;
    flex-direction: column;
    gap: 1rem;
    /* margin-bottom: 1rem;  */
}
.dashboard_comtainer1{
    display: flex;
    /* gap: 40rem; */
    justify-content: space-between;
}
.container2_rightside {
    display: flex;
    gap: 1rem;
    margin-right: 25px;
}
.btn-add {
    width: 50px;
    height: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.addbutton{
    margin-top:0.5rem;
}
#addbutton{
    display:none;
}
#btn1{
    border: none;
    background-color: #0177FD;
    color: white;
    padding: 0.4rem;
    border-radius: 100%;
    font-size: 1.8rem;
    padding-left: 1.1rem;
    padding-right: 1.1rem;
    position:relative;
}
#addbtn{
    border-radius:0.7rem;
    background-color:white;
    box-shadow: 1px 1px 2px 1px  rgba(0, 0, 0, 0.25);
    border:none;
    padding:0.5rem;
    padding-left:2.5rem;
    padding-right:2.5rem;
    position:absoute:


}
.dashboard_container2 {
    display: flex;
    gap: 2rem;
    max-width: 100%;
    overflow-x: scroll;
    overflow-y: hidden;
    padding-bottom: 20px;
}
.dashboard_container2::-webkit-scrollbar {
    width: 0.2em;
    background-color: transparent;
}

.dashboard_container2::-webkit-scrollbar-thumb {
    width: 0.1em;
    background-color: #f1f1f1;
}

.container2_wrapper {
    width: 226px;
    height: 167px;
    background-color: #7282FB;
    border-radius: 0.8rem;
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
    font-size: 19px;
}
.box1{
    background-color: #def9df !important;
    color: black !important;
}
.box2{
    background-color: #f9cdca !important;
    color: black !important;
}
.box3{
    background-color: #c5ccff !important;
    color: black !important;
}
.container2_upper {
    padding: 1rem;
    font-size: 18px;
    display: flex;
    gap: 4.3rem;
    /* justify-content: space-between; */
    font-weight: 600;
}
.container2_middle {
    margin-top: 0.5rem;
    text-align: center;
    margin-bottom: 25px;
    font-weight: 600;
    width: 226px;
}
.btn2{
    border: none;
    color: #7282FB;
    background-color: white;
    border-radius: 1.5rem;
    font-size: smaller;
    padding: 0.3rem;
    padding-left: 1.2rem;
    padding-right: 1.2rem;
    /* margin-left: 2.7rem; */
    box-shadow: 1px 1px 2px 1px #3a4ae0;

}
.btn-bg-1{
    border: #88C989 !important;
    color: #88C989 !important;
    box-shadow: 1px 1px 2px 1px #88C989 !important;

}
.btn-bg-2{
    border:  #fba39d !important;
    color:  #fba39d !important;
    box-shadow: 1px 1px 2px 1px  #fba39d !important;

}
.btn-bg-3{
    border: #7282FB !important;
    color: #7282FB !important;
    box-shadow: 1px 1px 2px 1px #7282FB !important;

}
#details{
    color: #717171;
    border: none;
    background-color: white;

}
.details {
    /* margin-left: 45rem; */
    border: none;
    margin-right: 4rem;
    font-size: 20px;
}
.dashboard_container3 {
    display: flex;
    margin-top: 0.5rem;
    justify-content: space-between;
}
.dashboard_container4{
    margin-left: 0.4rem;
}
.container4_wrapper1 {
    display: flex;
    justify-content: flex-end;
    width: 95%;

}
.symbols-container,
.values-container{
    display: flex;
    /* gap: 4rem; */
    font-weight: 500;
    justify-content: flex-end;
    width: 75%;
    align-items: center;
    font-size: 20px;
}
.material-symbols-outlined{
    margin-top: 0.1rem;
    margin-right: 0.3rem;
}
.symbols{
    display: flex;
    gap:0.2rem;
}

.container4_wrapper2 {
    display: flex;
    background-color: #FDFDFD;
    border: 1px solid #e4e1e1;
    width: fit-content;
    padding: 0.7rem;
    padding-left: 1rem;
    padding-right: 1.5rem;
    border-radius: 0.5rem;
    margin-top: 1rem;
    justify-content: space-between;
    width: 95%;
}
.values{
    margin-top: 2rem;
    background-color:#FDFDFD;
    color:#454545;
    font-weight:300;
    border:none;
}
.dashboard_container5{
    display: flex;
    gap: 14rem;
    margin-top: 1rem;
}
.tasklist{
    display: flex;
    gap: 13rem;
}
.list_tasklist{
    padding: 1rem;
}
#btn6{
    border: none;
    background-color: white;
    padding: 0.5rem;
    padding-left: 4rem;
    padding-right: 4rem;
    font-weight: 600;
    border-radius: 0.6rem;
}
#btn6:hover{
    background-color: #7282FB;
    color:white;
    border-radius: 0.5rem;

}
.list_tasklist_container{
    display: flex;
    gap: 1rem;
    margin: 1.5rem;
    padding: 0.5rem;
    background-color: white;
    border-radius: 0.6rem;
    
    
}
#tasklist{
    display: none;
}

.list_tasklist{
    width: auto;
    background-color:#FDFDFD;
    border: 1px solid  #e4e1e1;
    border-radius: 0.6rem;
}

.tasklist_wrapper2{
    display: flex;
    flex-direction: column;
    font-size: 0.7em;
}
.tasklist_wrapper3{
    margin-left: 6rem;
}
.messages{
    display: flex;
    flex-direction:column;
    gap: 2rem;
    padding: 0.5rem;
    border-radius: 0.6rem;
    background-color:#FDFDFD;
    border: 1px solid  #e4e1e1;
    padding:1rem;

}
.mobile-card-container {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}
.mobileview_clientprogress{
    display: none;
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

#btn6:focus {
    background-color: #7282FB;
    color:white;
}

@media screen and (max-width: 920px) {
    .dashboard_container4{
        display: none;
    }
    .mobileview_clientprogress {
    display: flex;
    flex-direction: column;
    gap: 1rem;
    box-shadow: 0 4px 7px rgba(0,0,0,0.12);
    border-radius: 0.7rem;
    padding: 1rem;
    width: 260px;
    height: 283px;
    margin-left: 1rem;
}
    .dashboard_container3{
        display: flex;
        flex-direction: column;
    }
    .details{
        margin-left:0px;
    }
    .dashboard_container5{
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }
    .tasklist{
        display: flex;
        gap: 8rem;
    }
    
    #btn6{
        padding-left: 2rem;
        padding-right: 2rem
    }
    .tasklist_wrapper3{
        margin-left: 0.5rem;
    }
   
    
    .list1{
    display:flex;
    gap:8rem;
}
.list2{
    display:flex;
    gap:9rem;
}
#addbtn{
    border-radius:0.7rem;
    background-color:white;
    box-shadow: 1px 1px 2px 1px  rgba(0, 0, 0, 0.25);
    border:none;
    padding:0.3rem;
    padding-left:1rem;
    padding-right:1rem;
    position:absoute;
    margin-left:0.3rem;


}
.add{
    margin-top:0.2rem;
    margin-left:0% !important;
}
}
@media screen and (max-width: 720px) {
    .dashboard_comtainer1{
        display: flex;
        gap:4rem;
    }
    .dashboard{
        margin-left: 2rem;
    }
    .dashboard_container2{
        display: flex;
        flex-direction: column;
        gap: 1rem;
        margin-left: 3rem;
    }
}
</style>
</head>
<body>
    <div class="dashboard">


        <div class="dashboard_comtainer1">
            <div class="container1_leftside">
                <p style="font-size: 40px;font-weight:600;margin-bottom: 0;">Dashboard</p>
                <p style="font-weight:600;font-size:25px">Upcoming Events</p>
                
            </div>
            <div class="container2_rightside" >
                <div class="addbutton" id="addbutton">
                    <button id="addbtn">Add Task</button>
                    <button id="addbtn" class="add">Add Client</button>
                </div>
                <div><button id="btn1" class="btn-add">+</button></div>
                <script>
                     var x = document.getElementById("addbutton");
                        var selectbtn1 = document.getElementById("btn1");
                        selectbtn1.onclick = function() {
                            
                        if (x.style.display === "block") {
                        x.style.display = "none";
                        document.getElementById("btn1").innerHTML = "+";
                    } else {
                        x.style.display = "block";
                        document.getElementById("btn1").innerHTML = "x";
                    }
                    }
                        
                </script> 
                 
            </div>
            
        </div>
<?php
$today = new DateTime();
$query = "SELECT * FROM `create_event` WHERE dietitianuserID = '{$dietitian_id}' AND start_date > {$today->format('Y-m-d')} ORDER BY start_date;";
$up_event = fetchData($query);
?>
<div class="dashboard_container2">
<?php
if(!empty($up_event)){
    $EC  = count($up_event);
    $color = 0;
    for($i=0;$i<$EC;$i++){
        $time = new DateTime($up_event[$i]['start_date']);
?>
            <div class="container2_wrapper box<?php echo($color) ?>">
                <div class="container2_upper">
                    <span><?php echo($time->format('M d')) ?></span>
                    <span><?php echo($time->format('h:i a')) ?></span>
                </div>
                <p class="container2_middle"><?php echo(ucwords($up_event[$i]['eventname'])) ?></p>
                <button class="btn2">Join the call</button>
            </div>
<?php
    $color++;
    if($color>3){
        $color = 0;
    }
    }
}
?>
</div>

        <div class="dashboard_container3">
            <div style="font-size:35px; font-weight:600"> Client Progress</div>
            <div class="details">
                <a href=""><button id="details">View All</button></a>
                <a href="client_detailed_progress.php"><button id="details">View Detailed Progress</button></a>
            </div>
            
        </div>
<?php
$query = "SELECT `client_id`,`name` FROM `addclient` WHERE dietitianuserID = '$dietitian_id' AND status = 1;";
$data = fetchData($query);
?>
        <div class="dashboard_container4">

            <div class="container4_wrapper1">
                <div style="width: 25%;"></div>
                <div class="symbols-container col-12">
                    <div class="symbols col-2"><img src="images/Frame.png" style="width:1.8rem"><span>Steps</span></div>
                    <div class="symbols col-2"><img src="images/Frame-1.png" style="width:1.8rem"><span>Heart Rate</span></div>
                    <div class="symbols col-2"><img src="images/Frame-2.png" style="width:1.8rem"><span>Water</span></div>
                    <div class="symbols col-2"><img src="images/Frame-3.png" style="width:1.8rem"><span>Sleep</span></div>
                    <div class="symbols col-2"><img src="images/Frame-4.png" style="width:1.8rem"><span>Weight</span></div>
                    <div class="symbols col-2"><img src="images/Frame-5.png" style="width:1.8rem"><span>Calories</span></div>
                </div>
            </div>
<?php
if(!empty($data)){
    $lim = 5;
    if($lim > count($data)){
        $lim = count($data);
    }
    for($i = 0; $i<$lim; $i++){
        $infom = fetchInformation($data[$i]['client_id']);
?>
            <div class="container4_wrapper2">
                <span style="width: 25%;">
                <a href="" style="background-color:#FDFDFD; color:black;font-weight:600; font-size:20px; border:none; margin-top:1rem">
                <img src="images/ronald.jpg" style="width:2rem; background-color:#FDFDFD;border-radius:1rem"> <?php echo($data[$i]['name']) ?></a>
                </span>
                <div class="values-container col-12">
                    <span class="col-2"><a href="" class="values"><?php echo($infom['steps']['progress'] . '/' . $infom['steps']['goal']) ?></a></span>
                    <span class="col-2"><a href="" class="values" ><?php echo($infom['heart']['progress']) ?> bpm</a></span>
                    <span class="col-2"><a href="" class="values" ><?php echo($infom['water']['progress'] . '/' . $infom['water']['goal']) ?> ltrs</a></span>
                    <span class="col-2"><a href="" class="values" ><?php echo($infom['sleep']['progress'] . '/' . $infom['sleep']['goal']) ?> hrs.</a></span>
                    <span class="col-2"><a href="" class="values"><?php echo($infom['weight']['progress'] . '/' . $infom['weight']['goal']) ?> kg</a></span>
                    <span class="col-2"><a href="track_stats_calorie.php?id=<?php echo($data[$i]['client_id']) ?>" class="values" ><?php echo($infom['calorie']['progress'] . '/' . $infom['calorie']['goal']) ?> kcal</a></span>
                </div>
            </div>
<?php
    }
}
?>
        </div>  
    
    


    <!----------------------------MOBILE VIEW OF CLIENT PROGRESSS-------------------->
<div class="mobile-card-container">


<?php
if(!empty($data)){
    $lim = 5;
    if($lim > count($data)){
        $lim = count($data);
    }
    for($i = 0; $i<$lim; $i++){
        $infom = fetchInformation($data[$i]['client_id']);
?>
    <div class="mobileview_clientprogress">



        <div class="mob_wrapper1" >
            <span><a href="" style=" color:black;font-weight:500; border:none; margin-top:1rem;background-color:white; margin-left:1rem"><span><img src="images/ronald.jpg" style="width:2rem;border-radius:1rem"> <?php echo($data[$i]['name']) ?></span></a></span>
            <div class="row1" style="display:flex ; gap:2rem ">
                    <div class="steps">
                        <div class="symbols">
                        <div style="color:#F6A682"><span class="material-symbols-outlined">footprint</span></div><div style="margin-top:0.2rem; font-weight:500"><span>Steps</span></div></div>
                        <span style="font-size:0.9rem;color:#454545"><?php echo($infom['steps']['progress'] . '/' . $infom['steps']['goal']) ?></span>
                    </div>
                    <div class="steps">
                        <div class="symbols">
                        <div style="color:#EF80B2"><span class="material-symbols-outlined">monitor_heart</span></div><div style="margin-top:0.2rem; font-weight:500"><span>Heart Rate</span></div></div>
                        <span style="font-size:0.9rem;color:#454545"><?php echo($infom['heart']['progress']) ?> bpm</span>
                    </div>
            </div>

            <div class="row2" style="display:flex ; gap:2rem">
                    <div class="steps">
                        <div class="symbols">
                        <div style="color:#8FAFF3"><span class="material-symbols-outlined">local_drink</span></div><div style="margin-top:0.2rem; font-weight:500"><span>Water</span></div></div>
                        <span style="font-size:0.9rem;color:#454545"><?php echo($infom['water']['progress'] . '/' . $infom['water']['goal']) ?> ltrs</span>
                    </div>
                    <div class="steps">
                        <div class="symbols">
                        <div style="color:#7550E2"><span class="material-symbols-outlined">bedtime</span></div><div style="margin-top:0.2rem; font-weight:500"><span>Sleep</span></div></div>
                        <span style="font-size:0.9rem;color:#454545">7/8 hrs.</span>
                    </div>
            </div>

            <div class="row3" style="display:flex ; gap:2rem">
                    <div class="steps">
                        <div class="symbols">
                        <div style="color:#788F96"><span class="material-symbols-outlined">weight</span></div><div style="margin-top:0.2rem; font-weight:500"><span>Weight</span></div></div>
                        <span style="font-size:0.9rem;color:#454545"><?php echo($infom['weight']['progress'] . '/' . $infom['weight']['goal']) ?> kg</span>
                    </div>
                    <div class="steps">
                        <div class="symbols">
                        <div style="color:#E388A0"><span class="material-symbols-outlined">timer_10_alt_1</span></div><div style="margin-top:0.2rem; font-weight:500"><span>Calories</span></div></div>
                        <span style="font-size:0.9rem;color:#454545"><?php echo($infom['calorie']['progress'] . '/' . $infom['calorie']['goal']) ?> kcal</span>
                    </div>
            </div>
        </div>

        
    </div>
    <?php
    }
}
?>
</div>
             

<!----------------------------------------------------------------------------------------------------------------------------------->
        <div class="dashboard_container5">

            <div class="container5_wrapper1">
                <div class="tasklist">
                    <p style="font-size:1.3rem ; font-weight:600">My Task List</p>
                    <span><a href="" style="background-color:white; color:#717171; border:none" >View All</a></span> 
                </div>
                <div class="list_tasklist">
                    <button id="btn6" onclick="openPage('tasklist', this,'blue')">Today</button>
                    <button id="btn6" class="btn6">Upcoming</button>
                    <div id="tasklist">
                    <div class="list_tasklist_container" >
                        <div class="tasklist_wrapper1">
                            <div><img src="images/foodrecipe.jpeg" style="width:2rem; background-color:#FDFDFD;border-radius:0.5rem"></div>
                        </div>
                        <div class="tasklist_wrapper2">
                            <span style="font-weight:600">Client Recipe Design</span>
                            <span style="margin-botton:4rem; color:#717171">10am to 11 am</span>
                            
                        </div>
                        <div class="tasklist_wrapper3"><span class="material-symbols-outlined" style="font-weight:800">more_vert</span></div>
                        
                    </div>
                    </div>
                </div>
                
            </div>


            <div class="container5_wrapper2">
                <div class="tasklist">
                    <p style="font-size:1.3rem ; font-weight:600">Messages</p>
                
                    <span><a href="" style=" color:#717171 ; border:none" >View All</a></span>
                </div>
                    <div class="messages">
                       <div style="display:flex">
                       <div class="tasklist_wrapper1">
                            <div><img src="images/ronald.jpg" style="width:2rem; background-color:#FDFDFD;border-radius:0.5rem"></div>
                        </div>
                        <div class="tasklist_wrapper2">
                            <div class="list1">
                            <span style="font-weight:600">Robert Parker</span> <span style="color:#717171">16:45</span>
                            </div>
                            <div class="list2">
                            <span style="margin-botton:4rem; color:#717171">Its Awesome</span>
                            <span id="two">2</span>
                            </div>
                            
                            
                        </div>
                       </div>

                       <div style="display:flex">
                       <div class="tasklist_wrapper1">
                            <div><img src="images/ronald.jpg" style="width:2rem; background-color:#FDFDFD;border-radius:0.5rem"></div>
                        </div>
                        <div class="tasklist_wrapper2">
                            <div class="list1">
                            <span style="font-weight:600">Robert Parker</span> <span id="time"style=";color:#717171">16:45</span>
                            </div>
                            <div class="list2">
                            <span style="margin-botton:4rem; color:#717171">Its Awesome</span>
                            <span id="two" id="msg">2</span>
                            </div>
                            
                            
                        </div>
                       </div>

                        

                        
                        
                    </div> 


            
                
            </div>
         
        </div>

    </div>
    
</body>
</html>