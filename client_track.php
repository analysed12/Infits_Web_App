<<<<<<< HEAD
<?php include('connection.php'); ?>
//<?php 
  //$id= $_SESSION['client_id'];
  //$GLOBAS['id']= 'coo1';
//?>
=======
<?php //include('config.php'); ?>
<?php 
  //$id= $_SESSION['client_id'];
  $GLOBAS['id']= 'coo1';
?>
>>>>>>> 83acd52beed71a2351d96ec88dbcbcec3b715cd3

<html>
    <title> Client Profile</title>
    <head>
       <link rel="stylesheet" href="client_dash_track.css">
        <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="jQuery-plugin-progressbar.js"></script>
        <link rel="stylesheet" href="progresscircle.css">
<<<<<<< HEAD

        <style>
#content {
    overflow: visible;
    display: flex;
    flex-direction: column;
    height: 90%;
    font-family: 'Poppins';
    font-style: normal;
    padding: 10px;
    margin: 0px;
}
.client-events{
  display: flex;
  flex-direction: row;
}
.client-container {
  padding: 32px;
  display: flex;
  flex: 1;
  flex-wrap: wrap;
  justify-content: space-evenly;
}
.client-card {
  padding: 16px;
  margin: 16px;
  border: 1px solid; 
  box-shadow: 2px 4px 16px rgba(0,0,0,.06);
  border-radius: 10px;
  height: 200px;
  width: 230px;
}
.container-cal-track{
    position: absolute;
    height : 180px;
    width:  180px;
    text-align: center;
    margin-top: 60px;

}
=======
>>>>>>> 83acd52beed71a2351d96ec88dbcbcec3b715cd3

        <style>
#content {
    overflow: visible;
    display: flex;
    flex-direction: column;
    height: 90%;
    font-family: 'Poppins';
    font-style: normal;
    padding: 10px;
    margin: 0px;
}
.client-events{
  display: flex;
  flex-direction: row;
}
.client-container {
  padding: 32px;
  display: flex;
  flex: 1;
  flex-wrap: wrap;
}
.client-card {
  padding: 16px;
  margin: 16px;
  border: 1px solid; 
  box-shadow: 2px 4px 16px rgba(0,0,0,.06);
  border-radius: 10px;
  height: 200px;
  width: 230px;
}

<<<<<<< HEAD
.circular-progress-cal {
  position: relative;
  height: 150px;
  width: 150px;
  border-radius: 50%;
  display: grid;
  place-items: center;
}
.circular-progress-cal:before {
  content: "";
  position: absolute;
  height: 84%;
  width: 84%;
  background-color: #ffffff;
  border-radius: 50%;
}
.value-container-cal {
  position: relative;
  font-family: "Poppins", sans-serif;
  font-size: 15px;
  color: #231c3d;
}

.container-sleep-track{
    height: 180px;
    width : 180px;
    position: absolute;
    margin-top: 60px;
}

.circular-progress-sleep {
  position: relative;
  height: 150px;
  width: 150px;
  border-radius: 50%;
  display: grid;
  place-items: center;
}
.circular-progress-sleep:before {
  content: "";
  position: absolute;
  height: 84%;
  width: 84%;
  background-color: #ffffff;
  border-radius: 50%;
}
.value-container-sleep {
  position: relative;
  font-family: "Poppins", sans-serif;
  font-size: 15px;
  color: #231c3d;
}
.container-weight-track
{
    position: absolute;
    height:  180px;
    width:  180px;
    margin-top:  60px;
}
.circular-progress-weight {
  position: relative;
  height: 150px;
  width: 150px;
  border-radius: 50%;
  display: grid;
  place-items: center;
}
.circular-progress-weight:before {
  content: "";
  position: absolute;
  height: 84%;
  width: 84%;
  background-color: #ffffff;
  border-radius: 50%;
}
.value-container-weight {
  position: relative;
  font-family: "Poppins", sans-serif;
  font-size: 15px;
  color: #231c3d;
}

.container-steps-track{
    position: absolute;
    height: 180px;
    width:  180px;
    margin-top: 60px;
}
.circular-progress-steps {
  position: relative;
  height: 150px;
  width: 150px;
  border-radius: 50%;
  display: grid;
  place-items: center;
}
.circular-progress-steps:before {
  content: "";
  position: absolute;
  height: 84%;
  width: 84%;
  background-color: #ffffff;
  border-radius: 50%;
}
.value-container-steps {
  position: relative;
  font-family: "Poppins", sans-serif;
  font-size: 15px;
  color: #231c3d;
}
.container-water-track{
    position: absolute;
    height: 180px;
    width:  180px;
    padding-top:60px;
}
.circular-progress-water {
  position: relative;
  height: 150px;
  width: 150px;
  border-radius: 50%;
  display: grid;
  place-items: center;
}
.circular-progress-water:before {
  content: "";
  position: absolute;
  height: 84%;
  width: 84%;
  background-color: #ffffff;
  border-radius: 50%;
}
.value-container-water {
  position: relative;
  font-family: "Poppins", sans-serif;
  font-size: 15px;
  color: #231c3d;
}
.container-heart-track{
    position: absolute;
    height: 180px;
    width: 180px;
    padding-top: 60px;
}
.circular-progress-heart {
  position: relative;
  height: 150px;
  width: 150px;
  border-radius: 50%;
  display: grid;
  place-items: center;
}
.circular-progress-heart:before {
  content: "";
  position: absolute;
  height: 84%;
  width: 84%;
  background-color: #ffffff;
  border-radius: 50%;
}
.value-container-heart {
  position: relative;
  font-family: "Poppins", sans-serif;
  font-size: 15px;
  color: #231c3d;
}

.label-goal{
    margin-top: 223px;
    
    position: absolute;
    font-size: 15px;
    color: black;
}
  .goal-data{
    font-size: 15px;
    position: absolute;
    margin-top: 223px;
    color: black;
    padding-left: 150px;
  }

            
        </style>
    </head>
        
<body>
                

    <!--------------sidenav------------------------->
    <?php include 'event_calendar.php'; ?>

    <!------------------calendar----------------->
          <h1 style="font-size: 32px; color: #202224; font-weight: 600; padding-left: 15px;">Client Profile</h1>
          
          <div id="content">

      <?php include("calendar.php");?>
      <br> 
      
=======
            
        </style>
    </head>
        
<body>
                

    <!--------------sidenav------------------------->
    <?php include 'event_calendar.php'; ?>

<div id="content">
    <!------------------calendar----------------->
 
      <?php include("calendar.php");?>
      <br> <br>
      <h1 style="font-size: 32px; color: #202224; font-weight: 600;">Client Profile</h1>
>>>>>>> 83acd52beed71a2351d96ec88dbcbcec3b715cd3
            
<div class="client-events">
    <div class="client-container"> 

    <!-----php for steps table---->
    <div class="box-div steps-col">
    <?php
<<<<<<< HEAD
        $sql ="select `goal`,`steps` from `steptracker` where `clientid` = 'c002' AND 
        cast(`dateandtime` as Date) = '2022-01-01'";
        $result = $conn -> query($sql);
        if($result -> num_rows > 0)
        {
            while($row = $result -> fetch_assoc()){
                $var_goal = $row['goal'];
                $var_step = $row['steps'];
            }}?>
                <p class="text-track"> Steps </p>
                <div class="container-steps-track">
               <div class="circular-progress-steps">
             <div class="value-container-steps">0</div>
      </div>
    </div>
        <div class="label-goal">
            <p>Goal</p>
        </div>   

        <div class ="goal-data">
            <p><?php echo $var_goal; ?>  </p>
        </div> 
    </div>

    <script>
    let progressBarSteps = document.querySelector(".circular-progress-steps");
let valueContainerSteps = document.querySelector(".value-container-steps");

let progressValueSteps = 0;

let progressEndValueSteps =<?php echo $GLOBALS['var_step'];?>;
let speedSteps = 50;

let progressSteps = setInterval(() => {
  progressValueSteps++;
  valueContainerSteps.textContent = `${progressValueSteps} steps`;
  progressBarSteps.style.background = `conic-gradient(
      #4d5bf9 ${progressValueSteps * 3.6}deg,
      #cadcff ${progressValueSteps * 3.6}deg
  )`;
  if (progressValueSteps == progressEndValueSteps) {
    clearInterval(progressSteps);
  }
}, speedSteps);

</script>



=======
        $sql ="select `goal` from `steptracker` where `clientid` = 'test'";
        $result = $conn -> query($sql);
        if($result -> num_rows > 0)
        {
            while($row = $result -> fetch_assoc()){?>
                <p class="text-track"> Steps </p>
                <div class ="container-cir">
                    <div class="circlechart" 
                        data-percentage= "<?php echo $row['goal'];}}?>">
                    </div>
                </div>
            
    </div>
>>>>>>> 83acd52beed71a2351d96ec88dbcbcec3b715cd3
            

    <!------php for water table---->
    <div class="box-div water-col">
    <?php
<<<<<<< HEAD
        $sql ="select `goal`,`drinkConsumed` from `watertracker` where `clientid` = 'c002' AND 
        cast(date as Date) = '2022-01-01'";
        $result = $conn -> query($sql);
        if($result -> num_rows > 0)
        {
        while($row = $result -> fetch_assoc()){
            $var_water = $row['goal'];
             $var_drink = $row['drinkConsumed'];}}?>
            <p class="text-track">Water</p>
            <div class="container-water-track">
               <div class="circular-progress-water">
             <div class="value-container-water">0</div>
      </div>
    </div>

    <div class="label-goal">
            <p>Goal</p>
        </div> 
        <div class ="goal-data">
            <p><?php echo $GLOBALS['var_water'];?>  </p>
        </div> 

    </div>

    <script>
    let progressBarWater = document.querySelector(".circular-progress-water");
let valueContainerWater = document.querySelector(".value-container-water");

let progressValueWater = 0;

let progressEndValueWater =<?php echo $GLOBALS['var_drink'];?>;
let speedWater = 50;

let progressWater = setInterval(() => {
  progressValueWater++;
  valueContainerWater.textContent = `${progressValueWater} ml`;
  progressBarWater.style.background = `conic-gradient(
      #4d5bf9 ${progressValueWater * 3.6}deg,
      #cadcff ${progressValueWater * 3.6}deg
  )`;
  if (progressValueWater == progressEndValueWater) {
    clearInterval(progressWater);
  }
}, speedWater);

</script>





<!----php for weighttable------>
<div class="box-div weight-track-col">
<?php
    $sql ="select `goal`,`weight` from `weighttracker` where `clientid` = 'c002' and 
    cast(`date` as Date) ='2022-01-01'";
    $result = $conn -> query($sql);
    if($result -> num_rows > 0)
    {
    while($row = $result -> fetch_assoc()){
        $var_weight = $row['goal']; 
        $var_wght = $row['weight'];}}?>
        <p class="text-track">weight Track</p>
        <div class="container-weight-track">
               <div class="circular-progress-weight">
             <div class="value-container-weight">0</div>
      </div>
    </div>
    <div class="label-goal">
            <p>Goal</p>
        </div> 
         <div class ="goal-data">
            <p><?php echo $var_weight; ?>  </p>
        </div> 

</div>

<script>
    let progressBar = document.querySelector(".circular-progress-weight");
let valueContainer = document.querySelector(".value-container-weight");

let progressValue = 0;

let progressEndValue =<?php echo $GLOBALS['var_wght'];?>;
let speed = 50;

let progress = setInterval(() => {
  progressValue++;
  valueContainer.textContent = `${progressValue} kg`;
  progressBar.style.background = `conic-gradient(
      #4d5bf9 ${progressValue * 3.6}deg,
      #cadcff ${progressValue * 3.6}deg
  )`;
  if (progressValue == progressEndValue) {
    clearInterval(progress);
  }
}, speed);

</script>

=======
        $sql ="select `goal` from `watertracker` where `clientid` = 'Eden'";
        $result = $conn -> query($sql);
        if($result -> num_rows > 0)
        {
        while($row = $result -> fetch_assoc()){?>
            <p class="text-track">Water</p>
            <div class="container-cir">
                <div class="circlechart" 
                    data-percentage="<?php echo $row['goal'];}}?>">
                </div>
            </div>
    </div>


<!----php for weighttable------>
<div class="box-div weight-track-col">
<?php
    $sql ="select `goal` from `weighttracker` where `clientid` = 'dilip'";
    $result = $conn -> query($sql);
    if($result -> num_rows > 0)
    {
    while($row = $result -> fetch_assoc()){?>
        <p class="text-track">weight Track</p>
        <div class="container-cir">
            <div class="circlechart" 
                data-percentage="<?php echo $row['goal'];}}?>">
            </div>
        </div>
</div>
>>>>>>> 83acd52beed71a2351d96ec88dbcbcec3b715cd3
        

<!-------php for  sleeptracker---->
<div class="box-div sleep-track-col">
<?php
<<<<<<< HEAD
    $sql ="select `goal`,`hrsSlept`, `minsSlept` from `sleeptracker` where `clientid` = 'c002' AND 
    cast(waketime as Date) = '2022-01-01'";
    $result = $conn -> query($sql);
    if($result -> num_rows > 0)
    {
    while($row = $result -> fetch_assoc()){
        $var_sleep = $row['goal'];
        $var_hr = $row['hrsSlept'];
        $var_min= $row['minsSlept'];}}?>
        <p class="text-track">Sleep</p>
        <div class="container-sleep-track">
               <div class="circular-progress-sleep">
             <div class="value-container-sleep">0</div>
      </div>
    </div>
    <div class="label-goal">
            <p>Goal</p>
        </div> 
        <div class ="goal-data">
            <p><?php echo $GLOBALS['var_sleep']; ?>  </p>
        </div> 


=======
    $sql ="select `goal` from `sleeptracker` where `clientid` = 'Lee_Sol'";
    $result = $conn -> query($sql);
    if($result -> num_rows > 0)
    {
    while($row = $result -> fetch_assoc()){?>
        <p class="text-track">Sleep</p>
        <div class="container-cir">
            <div class="circlechart" 
                data-percentage="<?php echo $row['goal'];}}?>">
            </div>
        </div>
</div>



<!-------php for calorie---->
<div class="box-div calorie-track-col">
    <?php
    $sql ="select `goal` from `calorietracker` where `clientid` = 'dilip'";
    $result = $conn -> query($sql);
    if($result -> num_rows > 0)
    {
    while($row = $result -> fetch_assoc()){?>
        <p class="text-track">Calories Track</p>
            <div class="container-cir">
                <div class="circlechart" 
                    data-percentage="<?php echo $row['goal'];}}?>">
                </div>
            </div>
</div>

    <!------php for heart table---->
 
    <div class="box-div heart-col">
    <?php
        $sql ="select `average` from `heartrate` where `clientid` = 'Eden'";
        $result = $conn -> query($sql);
        if($result -> num_rows > 0)
        {
        while($row = $result -> fetch_assoc()){?>
            <p class="text-track">Heart Rate</p>
            <div class="container-cir">
                <div class="circlechart" 
                    data-percentage="<?php echo $row['average'];}}?>">
                </div>
            </div>
    </div>
                    
                    
>>>>>>> 83acd52beed71a2351d96ec88dbcbcec3b715cd3
</div>
<script>
    let progressBarSleep = document.querySelector(".circular-progress-sleep");
let valueContainerSleep = document.querySelector(".value-container-sleep");

let progressValueSleep = 0;

let progressEndValueSleep =<?php echo $GLOBALS['var_hr'];?>
let speedSleep = 50;

let progressSleep = setInterval(() => {
  progressValueSleep++;
  valueContainerSleep.textContent = `${progressValueSleep} Hr`;
  progressBarSleep.style.background = `conic-gradient(
      #4d5bf9 ${progressValueSleep * 3.6}deg,
      #cadcff ${progressValueSleep * 3.6}deg
  )`;
  if (progressValueSleep == progressEndValueSleep) {
    clearInterval(progressSleep);
  }
}, speedSleep);

</script>




<!-------php for calorie---->
<div class="box-div calorie-track-col">
    <?php
    $sql ="select `caloriesconsumed`,`goal` from `calorietracker` where `clientid` = 'c002' and 
    cast(time as date) = '2022-01-01'";
    $result = $conn -> query($sql);
    if($result -> num_rows > 0)
    {
    while($row = $result -> fetch_assoc()){
    $var_cal =$row['caloriesconsumed'];
    $var_goal = $row['goal'];
    }}?>
            
        <p class="text-track">Calories Track</p>
            <div class="container-cal-track">
               <div class="circular-progress-cal">
             <div class="value-container-cal">0</div>
      </div>
    </div>
    <div class="label-goal">
            <p>Goal</p>
        </div> 

        <div class ="goal-data">
            <p><?php echo $var_goal; ?>  </p>
        </div> 


    
</div>

    <script>
    let progressBarCal = document.querySelector(".circular-progress-cal");
let valueContainerCal = document.querySelector(".value-container-cal");

let progressValueCal = 0;

let progressEndValueCal =<?php echo $GLOBALS['var_cal'];?>;
let speedCal = 50;

let progressCal = setInterval(() => {
  progressValueCal++;
  valueContainerCal.textContent = `${progressValueCal} Kcal`;
  progressBarCal.style.background = `conic-gradient(
      #4d5bf9 ${progressValueCal * 3.6}deg,
      #cadcff ${progressValueCal * 3.6}deg
  )`;
  if (progressValueCal == progressEndValueCal) {
    clearInterval(progressCal);
  }
}, speedCal);

</script>



    <!------php for heart table---->
 
    <div class="box-div heart-col">
    <?php
        $sql ="select `average`,`maximum`,`minimum` from `heartrate` where `clientid` = 'c002' and
        cast(dateandtime as date) ='2022-01-01'";
        $result = $conn -> query($sql);
        if($result -> num_rows > 0)
        {
        while($row = $result -> fetch_assoc()){
            $var_heart = $row['average'];
            $var_min= $row['minimum'];
            $var_max =$row['maximum'];}}?>
            <p class="text-track">Heart Rate</p>
        
           <div class="container-heart-track">
               <div class="circular-progress-heart">
             <div class="value-container-heart">0</div>
      </div>
    </div>  

     <div class="label-goal" style="margin-top:200px; padding-left: 5px;">
            <img src=".\images\heart_goal.svg">
        </div> 
        
         <div class ="goal-data">
            <p><?php echo $GLOBALS['var_min']; ?><br>
             </p>
        </div> 


          </div>

              <script>
    let progressBarHeart = document.querySelector(".circular-progress-heart");
let valueContainerHeart = document.querySelector(".value-container-heart");

let progressValueHeart = 0;

let progressEndValueHeart =<?php echo $GLOBALS['var_heart'];?>;
let speedHeart = 50;

let progressHeart = setInterval(() => {
  progressValueHeart++;
  valueContainerHeart.textContent = `${progressValueHeart} bmp`;
  progressBarHeart.style.background = `conic-gradient(
      #4d5bf9 ${progressValueHeart * 3.6}deg,
      #cadcff ${progressValueHeart * 3.6}deg
  )`;
  if (progressValueHeart == progressEndValueHeart) {
    clearInterval(progressHeart);
  }
}, speedHeart);

</script>


</div>

  

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
        crossorigin="anonymous">
</script>
<script src="progresscircle.js"></script>
    
<script>

$(function(){

$('.circlechart').circlechart();

});
</script>


                    
</div> 
<<<<<<< HEAD

=======
>>>>>>> 83acd52beed71a2351d96ec88dbcbcec3b715cd3

</body>
</html>