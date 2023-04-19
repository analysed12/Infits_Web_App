<?php
// session_start();
include('navbar.php');
// Get Id
if(isset($_SESSION['dietitianuserID'])){
    $dietitian_id = $_SESSION['dietitianuserID'];
    $user=$_SESSION['dietitianuserID'];
    $sql="SELECT * FROM addclient WHERE dietitianuserID='$user'";
    $q="SELECT * FROM create_event WHERE dietitianuserID='$user'";
    $result = $conn->query($sql);
    $req= $conn->query($q);
    if(mysqli_num_rows($result)<1 && mysqli_num_rows($req)<1){
        header('Location:upcomingevents.php');
    }
    
    # database connection file
    include 'app/db.conn.php';

    include 'app/helpers/user.php';
    include 'app/helpers/conversations.php';
    include 'app/helpers/timeAgo.php';
    include 'app/helpers/last_chat.php';
    include 'app/helpers/timeHM.php';

    # Getting User data data
    $user = getUser($_SESSION['dietitianuserID'], $conn);

    # Getting User conversations
    $conversations = getConversation($user['dietitian_id'], $conn);

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
    <title>Dashboard</title>
    
    <!-- <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<style>
    @font-face {
    font-family: 'NATS';
    src:url('font/NATS.ttf.woff') format('woff'),
        url('font/NATS.ttf.svg#NATS') format('svg'),
        url('font/NATS.ttf.eot'),
        url('font/NATS.ttf.eot?#iefix') format('embedded-opentype'); 
    font-weight: normal;
    font-style: normal;
}


    body {
        font-family: 'NATS', sans-serif !important;
        margin:0;
    }
.dashboard{
    margin-top: 1rem;
    margin-left: 17rem;
    margin-right:0;
    
    display: flex;
    flex-direction: column;
    gap: 1rem;
    /* margin-bottom: 1rem;  */
}
.dashboard_comtainer1{
    display: flex;
    
    justify-content: space-between;
}
.container2_rightside {
	display: flex;
	gap: 1rem;
	margin-right: 25px;
	margin-top: 10px;
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
    display: flex;
    justify-content: space-between;
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
    margin-left: 5px;
    margin-right: 5px;
    
   


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
    height: 188px;
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
    font-weight: 400;
}
.container2_middle {
    margin-top: 0.5rem;
    text-align: center;
    margin-bottom: 25px;
    font-weight: 400;
    width: 226px;
    font-size: 25px;
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
    display: flex;
    justify-content: space-between;
    gap: 1rem;
    border: none;
    margin-right: 2rem;
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
    padding-right: 1.5rem;

}
.symbols-container,
.values-container{
    display: flex;
    /* gap: 4rem; */
    font-weight: 400;
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
.symbols.col-2 img {
	scale: 0.8;
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
    /* gap: 14rem; */
    justify-content: space-between;
    margin-top: 1rem;
    margin-bottom: 5rem;
    margin-right:4rem;
}
.tasklist{
    display: flex;
    gap: 16rem;
}
.list_tasklist {
    width: 100%;
    background-color: #FDFDFD;
    border: 1px solid  #e4e1e1;
    border-radius: 0.6rem;
    margin-left: 0rem;
    padding: 1rem;
    display:flex;
    justify-content: space-between;
}

#btn6{
    border: none;
    background-color: white;
    padding: 0.5rem;
    padding-left: 4rem;
    padding-right: 4rem;
    font-weight: 400;
    border-radius: 0.6rem;
}
#btn6:hover{
    background-color: #7282FB;
    color:white;
    border-radius: 0.5rem;

}
#btn7{
    border: none;
    background-color: white;
    padding: 0.5rem;
    padding-left: 4rem;
    padding-right: 4rem;
    font-weight: 600;
    border-radius: 0.6rem;
}
#btn7:hover{
    background-color: #7282FB;
    color:white;
    border-radius: 0.5rem;

}
.active-btn{
    color: #fff;
    background-color: #7282FB !important;
}
.list_tasklist_container{
    display: flex;
    gap: 1rem;
    margin: 1.5rem;
    padding: 0.5rem;
    background-color: white;
    border-radius: 0.6rem;
    
    
}
.small-text-message{
            font-size: 1rem;
            color: rgba(0, 0, 0, 0.45);
        }
#today_tasks,
#upcoming_tasks{
    display: none;
}



.tasklist_wrapper2{
    display: flex;
    flex-direction: column;
    font-size: 1rem;
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
    gap:10px;
    justify-content:center;
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
#btn7:focus {
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
    width: 280px;
    height: auto;
    margin-left: 3rem;
    margin-right: 2rem;
}
    .dashboard_container3{
        display: flex;
        flex-direction: column;
    }
    .details{
        margin-left:1px;
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
    #btn7{
        padding-left: 2rem;
        padding-right: 2rem;
        
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
    padding:0rem;
    padding-left:1rem;
    padding-right:1rem;
    position:relative;
    margin-left: 0.3rem;
    margin-top: 1rem;


}
.add{
    margin-top:0.2rem;
    margin-left:0% !important;
}
}
@media screen and (max-width: 720px) {
  
    .dashboard{
        
        display: flex;
    flex-direction: column;
    justify-content:center;
   margin-left:2rem;
    }
    .dashboard_container2{
        display: flex;
        /* flex-direction: column; */
        gap: 1rem;
        margin-left: 3rem;
    }


}
@media screen and (max-width: 720px){

    .me{
        overflow: scroll;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 1rem;


    }
}
 @media screen and (max-width: 720px){

    .details{
        margin-left: 2rem;
    }
   
} 
@media screen and (max-width: 720px){

.up{
    display: flex;
    justify-content: center;
    align-items: center;
}


} 
@media screen and (max-width: 720px){

.down{
    padding-left: 3rem;
}
.down2{
    padding-left: 4rem;
}


} 
@media screen and (max-width: 720px){
     .symbols1{
        margin-left:1.5rem;
    }
    /* .symbols2{
        margin-left: 1rem;
    } */
    .symbols3{
        margin-left: 1.5rem;

    }
    .symbols4{
        margin-left: 2rem;

    }
    .symbols5{
        margin-left: 1.5rem;

    }
    .symbols6{
        margin-left: 2rem;

    }
}


</style>
</head>
<body>
    <div class="dashboard">


        <div class="dashboard_comtainer1">
            <div class="container1_leftside">
                <p style="font-size: 40px;font-weight:400;margin-bottom: 0;">Dashboard</p>
                <p style="font-weight:400;font-size:25px">Upcoming Events</p>
                
            </div>
            <div class="container2_rightside" >
                <div class="addbutton" id="addbutton">
                <button id="addbtn" onclick ="window.location.href='calendar_of_events.php'">Add Event</button>
                    <button id="addbtn" onclick ="window.location.href='task_list.php'">Add Task</button>
                    <button id="addbtn" onclick ="window.location.href='add_client.php'" class="add">Add Client</button>
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
$query = "SELECT * FROM `create_event` WHERE dietitianuserID = '{$dietitian_id}' AND start_date > '{$today->format('Y-m-d')} 00:00:00' ORDER BY start_date;";
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
                <button class="btn2 btn-bg-<?php echo($color) ?>">Join the call</button>
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
            <div style="font-size:35px; font-weight:400"> Client Progress</div>
            <div class="details">
                <a href="client_progress.php"><button id="details">View All</button></a>
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
            <div class="show">
                <span style="width: 25%;">
                <a href="" style="background-color:#FDFDFD; color:black;font-weight:600; font-size:20px; border:none; margin-top:1rem">
                <img src="images/ronald.jpg" style="width:2rem; background-color:#FDFDFD;border-radius:1rem"> <?php echo($data[$i]['name']) ?></a>
                </span>
                </div>
                <div class="values-container col-12">
                <span class="col-2"><a href="track_stats_steps.php?id=<?php echo($data[$i]['client_id']) ?>" class="values"><?php echo($infom['steps']['progress'] . '/' . $infom['steps']['goal']) ?></a></span>
                    <span class="col-2"><a href="track_stats_heart.php?id=<?php echo($data[$i]['client_id']) ?>" class="values" ><?php echo($infom['heart']['progress']) ?> Bpm</a></span>
                    <span class="col-2"><a href="track_stats_water.php?id=<?php echo($data[$i]['client_id']) ?>" class="values" ><?php echo($infom['water']['progress'] . '/' . $infom['water']['goal']) ?> ltrs</a></span>
                    <span class="col-2"><a href="track_stats_sleep.php?id=<?php echo($data[$i]['client_id']) ?>" class="values" ><?php echo(round($infom['sleep']['progress'],2) . '/' . $infom['sleep']['goal']) ?> hrs.</a></span>
                    <span class="col-2"><a href="track_stats_weight.php?id=<?php echo($data[$i]['client_id']) ?>" class="values"><?php echo($infom['weight']['progress'] . '/' . $infom['weight']['goal']) ?> kg</a></span>
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
            <span class="up"><a href="" style=" color:black;font-weight:500; border:none; margin-top:1rem;background-color:white; margin-left:1rem"><span><img src="images/ronald.jpg" style="width:2rem;border-radius:1rem"> <?php echo($data[$i]['name']) ?></span></a></span>
            <div class="row1" style="display:flex ; gap:2rem;justify-content:center ">
                    <div class="steps">
                        <div class="symbols">
                        <div style="color:#F6A682"><img src="images/Frame.png" style="width:1.8rem"></div><div style="margin-top:0.2rem; font-weight:500"><span>Steps</span></div></div>
                        <span class="symbols1" style="font-size:0.9rem;color:#454545 left:3rem;"><?php echo($infom['steps']['progress'] . '/' . $infom['steps']['goal']) ?></span>
                    </div>
                    <div class="steps">
                        <div class="symbols">
                        <div style="color:#EF80B2"><img src="images/Frame-1.png" style="width:1.8rem"></div><div style="margin-top:0.2rem; font-weight:500"><span>Heart Rate</span></div></div>
                        <span class="symbols2" style="font-size:0.9rem;color:#454545"><?php echo($infom['heart']['progress']) ?> bpm</span>
                    </div>
            </div>

            <div class="row2" style="display:flex ; gap:2rem;justify-content:center">
                    <div class="steps">
                        <div class="symbols">
                        <div style="color:#8FAFF3"><img src="images/Frame-2.png" style="width:1.8rem"></div><div style="margin-top:0.2rem; font-weight:500"><span>Water</span></div></div>
                        <span class="symbols3" style="font-size:0.9rem;color:#454545"><?php echo($infom['water']['progress'] . '/' . $infom['water']['goal']) ?> ltrs</span>
                    </div>
                    <div class="steps">
                        <div class="symbols">
                        <div style="color:#7550E2"><img src="images/Frame-3.png" style="width:1.8rem"></div><div style="margin-top:0.2rem; font-weight:500"><span>Sleep</span></div></div>
                        <span class="symbols4" style="font-size:0.9rem;color:#454545">7/8 hrs.</span>
                    </div>
            </div>

            <div class="row3" style="display:flex ; gap:2rem;justify-content:center">
                    <div class="steps">
                        <div class="symbols">
                        <div style="color:#788F96"><img src="images/Frame-4.png" style="width:1.8rem"></div><div style="margin-top:0.2rem; font-weight:500"><span>Weight</span></div></div>
                        <span class="symbols5" style="font-size:0.9rem;color:#454545"><?php echo($infom['weight']['progress'] . '/' . $infom['weight']['goal']) ?> kg</span>
                    </div>
                    <div class="steps">
                        <div class="symbols">
                        <div style="color:#E388A0"><img src="images/Frame-5.png" style="width:1.8rem"></div><div style="margin-top:0.2rem; font-weight:500"><span>Calories</span></div></div>
                        <span class="symbols6" style="font-size:0.9rem;color:#454545"><?php echo($infom['calorie']['progress'] . '/' . $infom['calorie']['goal']) ?> kcal</span>
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
                    <span class="down"><a href="task_list.php" style="background-color:white; color:#717171; border:none" >View All</a></span> 
                </div>
                <div class="list_tasklist">
                    <button id="btn6" class="task-btn" onclick="openTask('btn6','today_tasks')"><strong>Today</strong></button>
                    <button id="btn7" class="btn6 task-btn" onclick="openTask('btn7','upcoming_tasks')">Upcoming</button>
                    <div id="today_tasks">
<?php 
$query = "SELECT * FROM `dietition_tasks` WHERE dietitianuserID = '{$dietitian_id}' AND date = '{$today->format('Y-m-d')}' ORDER BY date,start_time LIMIT 3";
// $query = "SELECT * FROM `dietition_tasks` WHERE dietitianuserID = 'John_wayne' AND date = '2023-02-03' ORDER BY date,start_time LIMIT 3";
// echo($today->format('Y-m-d'));
$con = new mysqli("localhost", "root", "", "infits");
$result = mysqli_query($con, $query);
$rowcount=mysqli_num_rows($result);
//   printf("Result set has %d rows.\n",$rowcount);
//   while($row = mysqli_fetch_assoc($result)){
//     echo $row['title'];
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){
        // $date = new DateTime($row['date']);
        $start = "";
        $end = "";
        if($row['start_time'] !=''){
            $start = date("g:i a", strtotime($row['start_time']));
        }
        if($row['end_time'] != ''){
            $end = date("g:i a", strtotime($row['end_time']));
        }
//
?>
                        <!-- task -->
                        <div class="list_tasklist_container" >
                            <div class="tasklist_wrapper1">
                                <div><img src="images/foodrecipe.jpeg" style="width:2rem; background-color:#FDFDFD;border-radius:0.5rem"></div>
                            </div>
                            <div class="tasklist_wrapper2">
                                <span style="font-weight:600"><?php echo($row['title']) ?></span>
                                <span style="margin-botton:4rem; color:#717171"><?php echo($start . ' to ' . $end) ?></span>
                            </div>
                            <div class="tasklist_wrapper3"><span class="material-symbols-outlined" style="font-weight:800">more_vert</span></div>
                        </div>
                        <!-- task -->
<?php
    }
}
?>
                    </div>
                    <div id="upcoming_tasks">
<?php 
$query = "SELECT * FROM `dietition_tasks` WHERE dietitianuserID = '{$dietitian_id}' AND date > '{$today->format('Y-m-d')}' ORDER BY date,start_time LIMIT 3";
$con = new mysqli("localhost", "root", "", "infits");
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // $date = new DateTime($row['date']);
        $start = "";
        $end = "";
        if($row['start_time'] !=''){
            $start = date("g:i a", strtotime($row['start_time']));
        }
        if($row['end_time'] != ''){
            $end = date("g:i a", strtotime($row['end_time']));
        }

        ?>
                        <!-- task -->
                        <div class="list_tasklist_container" >
                            <div class="tasklist_wrapper1">
                                <div><img src="images/foodrecipe.jpeg" style="width:2rem; background-color:#FDFDFD;border-radius:0.5rem"></div>
                            </div>
                            <div class="tasklist_wrapper2">
                                <span style="font-weight:600"><?php echo($row['title']) ?></span>
                                <span style="margin-botton:4rem; color:#717171"><?php echo($start . ' to ' . $end) ?></span>
                            </div>
                            <div class="tasklist_wrapper3"><span class="material-symbols-outlined" style="font-weight:800">more_vert</span></div>
                        </div>
                        <!-- task -->
<?php
    }
}
?>
                    </div>
                </div>
                
            </div>
<!-- 
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
                            <span style=" color:#717171">Its Awesome</span>
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
                            <span style="color:#717171">Its Awesome</span>
                            <span id="two" id="msg">2</span>
                            </div>
                            
                            
                        </div>
                       </div>
                        
                    </div> 
                
            </div> -->
         

    


            <!-- chat -->

<div class="container5_wrapper2">
                <div class="tasklist">
                    <p style="font-size:1.3rem ; font-weight:600">Messages</p>

                    <span class="down2"><a href="chat_home.php" style=" color:#717171 ; border:none">View All</a></span>
                </div>
                <!-- chat just added here -->
                <div class="d-flex flex-coloumn chat messages" style="outline: 2px solid #EEEEEE; padding:20px;">
                    <div class="" >
                        <?php
                        $counter = 0;
                        foreach ($conversations as $conversation) { ?>
                            <li class="list-group-item">
                                <a href="chat_messages.php?user=<?= $conversation['dietitianuserID'] ?>" style="display: flex !important;align-items: center !important;justify-content: space-between ;">
                                    <div class="d-flex
	    					            align-items-center">
                                        <img src="chat/uploads/<?= $conversation['p_p'] ?>" class="rounded-circle" style="width:40px">
                                        <h3 class="fs-xs m-2 text-dark">
                                            <?= $conversation['name'] ?><br>
                                            <small class="small-text-message">
                                                <?php
                                                echo lastChat($_SESSION['dietitian_id'], $conversation['dietitianuserID'], $conn);
                                                ?>
                                            </small>

                                        </h3>
                                    </div>
                                    <div class="d-flex
	    					            align-items-center " style="margin-left: auto;">
                                        <h3 class="fs-xs p-2 text-dark">

                                            <small class="small-text-message">
                                                <?php
                                                echo last_time($conversation['last_seen']);
                                                ?>
                                            </small><br />
                                            <img class="" src="icons/DoubleTick.svg" style="width:16px">
                                        </h3>


                                    </div>
                                    <?php if (last_seen($conversation['last_seen']) == "1") { ?>
                                        <div title="online">

                                        </div>
                                    <?php } else { ?>
                                        <div title="offline">
                                        </div>
                                    <?php } ?>
                                </a>
                            </li>
                        <?php
                          $counter++;
                          if ($counter == 4) {
                              break;
                          }
                    } ?>
        </div>


                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

                    <script>
                        $(document).ready(function() {

                            let lastSeenUpdate = function() {
                                $.get("app/ajax/update_last_seen.php");
                            }
                            lastSeenUpdate();

                            setInterval(lastSeenUpdate, 10000);

                        });
                    </script>
    </div>
            </div>




            
    <script>
        function openTask(b,id){
            const taskbtn = document.getElementsByClassName('task-btn');
            taskbtn[0].classList.remove = 'active-btn';
            taskbtn[1].classList.remove = 'active-btn';
            document.getElementById('today_tasks').style.display = 'none';
            document.getElementById('upcoming_tasks').style.display = 'none';
            document.getElementById(id).style.display = 'block';
            const btn = document.getElementById(b);
            btn.classList.add = 'active-btn';
        }
        document.getElementById('btn6').click();
    //     function redirectTo(id, topage) {
    // //alert(topage);

    // // createElement Create a new form element
    // const form = document.createElement('form');

    // // Define form attributes
    // form.method = 'POST';
    // form.action = topage;

    // // input element for the ID value
    // const idInput = document.createElement('input');
    // idInput.type = 'hidden';
    // idInput.name = 'id';
    // idInput.value = id;

    // // Append the input element to the form
    // form.appendChild(idInput);

    // // Submiting the form to redirect to the update_plan.php
    // document.body.appendChild(form);
    // form.submit();
    // }
    </script>
</body>
</html>
