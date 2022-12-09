<?php //include('config.php'); ?>
<?php 
  //$id= $_SESSION['client_id'];
  $GLOBAS['id']= 'coo1';
?>

<html>
    <title> Client Profile</title>
    <head>
       <link rel="stylesheet" href="client_dash_track.css">
        <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="jQuery-plugin-progressbar.js"></script>
        <link rel="stylesheet" href="progresscircle.css">

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
            
<div class="client-events">
    <div class="client-container"> 

    <!-----php for steps table---->
    <div class="box-div steps-col">
    <?php
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
            

    <!------php for water table---->
    <div class="box-div water-col">
    <?php
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
        

<!-------php for  sleeptracker---->
<div class="box-div sleep-track-col">
<?php
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
                    
                    
</div>
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

</body>
</html>