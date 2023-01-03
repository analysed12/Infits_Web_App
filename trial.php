<?php session_start();?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Diet Chart</title>
	  
	  <link rel="stylesheet" href="https://fonts.googleapis.com/css2">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
        <style>

#content {
    overflow: auto;
    display: flex;
    flex-direction: column;
    height: 90%;
    font-family: 'Poppins';
    font-style: normal;
    padding: 10px;
    margin: 0px;
}
/*-------------------------DIET CHART---------------------------*/
    /* Style the tab */
    .tab {
    overflow:hidden;  
    background-color: white;
    flex-wrap: wrap;
    
    }
    @media (min-width: 0px) and (max-width: 720px) {
.tab{
  display: flex;
  flex-wrap: wrap;
}
    }

    /* Style the buttons inside the tab */
    .tab button {
    background-color: white;
    float: left;
    border: 1px solid #9C74F5;
    border-radius: 10px;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
    min-width: 200px;
    
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
    background-color: #9C74F5;
    color: white;
    }

    /* Create an active/current tablink class */
    .tab button.active {
    background-color: #9C74F5;
    color: white !important;
    }

    /* Style the tab content */
    .tabcontent {
    display: none;
    padding: 6px 12px;
    border-top: none;
    max-width: 95%;
    }

    .tab-box{
    box-shadow: 0px 8px 24px rgba(176, 190, 197, 0.32), 0px 3px 5px rgba(176, 190, 197, 0.32);
    border-radius: 10px;
    padding: 20px;
    margin-top: 15px;
    }
    .tab-submit{
    font-size: 20px;
    }

    .space-between-flex{
  display: flex;
  justify-content: space-around;
  display: flex;
  flex-wrap: wrap;
}
/*------------------PLUS BUTTON ------------------------ */
.add-btn {
  background-color: white;
  border: none;
  box-shadow: 0px 8px 24px rgba(176, 190, 197, 0.32), 0px 3px 5px rgba(176, 190, 197, 0.32);
  color: #DF6293;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
  width: 140px;
  border-radius: 10px;
  display: flex;
  align-content: center;
  justify-content: center;
}

/* Darker background on mouse-over */
.add-btn:hover {
  background-color: RoyalBlue;
}

    
    /*   days buttons  */
    .day-band{
      display: flex;
      flex-direction: row;
      justify-content: space-around;
      flex-wrap: wrap;
      width: 80%;
    }
    .day{
      color: black;
      padding: 10px;
      border:none;
      background: none;
    }
    .day:hover, .active{
      color:white;
      background:#9C74F5;
      border-radius:10px;
    }
</style>
</head>

<div id="page">
    <!--------------sidenav------------------------->
    <?php include 'event_calendar.php'; ?>

    <div id="content">
      <!------------------------------------------------DASHBOARD--------------------------------------------------------->
      <h1 style="font-size: 32px; color: #202224; font-weight: 600;">Diet Chart</h1>
      <p>Client Name: </p>
      <?php 
        $clientID = "Eden";
        echo $clientID;
      ?>

    <!------------------days of the week----------------->
    <center>

    <!--
<div class="day-band">
  <button class="day" name="monday" id="daybtn">Mon</button>
  <button class="day" name="tuesday" id="daybtn">Tue</button>
  <button class="day" name="wednesday" id="daybtn">Wed</button>
  <button class="day" name="thursday" id="daybtn">Thu</button>
  <button class="day" name="friday" id="daybtn">Fri</button>
  <button class="day" name="saturday" id="daybtn">Sat</button>
  <button class="day" name="sunday" id="daybtn">Sun</button>
</div>-->

 

<div class="day-band">
<form method="post" action=" " enctype="multipart/form-data">
  <button class="day" name="day_selected1" id="daybtn">Mon</button>
  <button class="day" name="day_selected" id="daybtn">Tue</button>
  <button class="day" name="day_selected" id="daybtn">Wed</button>
  <button class="day" name="day_selected" id="daybtn">Thu</button>
  <button class="day" name="day_selected" id="daybtn">Fri</button>
  <button class="day" name="day_selected" id="daybtn">Sat</button>
  <button class="day" name="day_selected" id="daybtn">Sun</button>
</div>

<script>/*
const btn = document.getElementById('daybtn');

btn.addEventListener('click', function onClick() {
  btn.style.backgroundColor = '#9C74F5';
  btn.style.color = 'white';
});*/
</script>

<?php
 session_status() === PHP_SESSION_ACTIVE ?: session_start();

$db = mysqli_connect('localhost', 'root', '', 'infits');

if (isset($_POST['day_selected1'])) {
$day_selected = mysqli_real_escape_string($db, $_POST['day_selected1']);
echo $day_selected;

switch ($day_selected) {
  case "Mon":
    echo "Monday";
    break;
  case "tuesday":
    echo "Your favorite color is blue!";
    break;
  case "wednesday":
    echo "Your favorite color is green!";
    break;
  case "thursday":
    echo "Your favorite color is green!";
    break;
  case "friday":
    echo "Your favorite color is green!";
    break;
  case "saturday":
    echo "Your favorite color is green!";
    break;
  case "sunday":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Error";
}}
?>
  </center>
    <br>

    <?php $day='sunday';?>

    <?php/*
 session_status() === PHP_SESSION_ACTIVE ?: session_start();

$db = mysqli_connect('localhost', 'root', '', 'infits');
$query = "select $day from `diet_chart` where `clientID` = '$clientID' ";
$result = mysqli_query($db, $query);
if($result->num_rows > 0){ 
  while($row = $result->fetch_assoc()){
$data = json_decode($result);
echo $data;}}*/
?>
        <!------------------food of the day----------------->

    <div id="content">
    <div class="tab">
        <div class="space-between-flex">
        <button class="tablinks" onclick="openTab(event, 'Breakfast')">Breakfast</button>
        <button class="tablinks" onclick="openTab(event, 'Lunch')">Lunch</button>
        <button class="tablinks" onclick="openTab(event, 'Snack')">Snack</button>
        <button class="tablinks" onclick="openTab(event, 'Dinner')">Dinner</button>
      </div>
    </div>
      
      <div id="Breakfast" class="tabcontent">
        <div class="tab-box">
            <p style="color:black; font-size: 25px;"> In Morning</p>
            <div class="add-btn">+</div>
        </div>
        <div class="tab-box">
            <p style="color:black; font-size: 25px;"> After Break</p>
            <div class="add-btn">+</div>
        </div>
      </div>
      
      <div id="Lunch" class="tabcontent">
        <div class="tab-box">
            <p style="color:black; font-size: 25px;"> Afternoon</p>
            <div class="add-btn">+</div>
        </div>
      </div>
      
      <div id="Snack" class="tabcontent">
        <div class="tab-box">
            <p style="color:black; font-size: 25px;">High Tea</p>
            <div class="add-btn">+</div>
        </div>
        <div class="tab-box">
            <p style="color:black; font-size: 25px;">Evening Snack</p>
            <div class="add-btn">+</div>
        </div>
      </div>

      <div id="Dinner" class="tabcontent">
        <div class="tab-box">
            <p style="color:black; font-size: 25px;"> Night</p>
            <div class="add-btn">+</div>
        </div>
        <div class="tab-box">
            <p style="color:black; font-size: 25px;"> Late Night Food</p>
            <div class="add-btn">+</div>
        </div>
      </div>
      

      <!-- js for tabs -->
      <script>
      function openTab(evt, food) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(food).style.display = "block";
        evt.currentTarget.className += " active";
      }
      </script>
        

        <br><br>
    <button type="button" class="btn btn-primary btn-lg btn-block" style="background-color: #9C74F5">Save Plan</button>
    <br>
          </div>
		</div>
</div>

  </body>
</html>