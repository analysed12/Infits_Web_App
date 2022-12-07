<?php include('connection.php'); ?>
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
        <head>
            <body>
                <?php include('event_calendar.php');?>
                <div class="wrapper">
                    <div class="header">
                        <p id="p-header">Client Profile</p>
              </div>
                <div class="calendar">
               </div>
               <div class="blank">
               
                 
               <!-----php for steps table---->
               <?php
               $sql ="select `goal` from `steptracker` where `clientid` = 'c001'";
               $result = $conn -> query($sql);
               if($result -> num_rows > 0)
               {
                while($row = $result -> fetch_assoc()){?>


                <div class="steps-div">
                    <div class="steps-text" style="top:0px; padding-left:40px;">
                        <p class="text-track"> Steps </p>
                       </div>
                       <div class ="container-cir">
                       <div class="circlechart" 
                     data-percentage= "<?php echo $row['goal'];}}?>">
                            
                  </div>
                 
                 <!------php for heart table---->
                 <?php
               $sql ="select `average` from `heartrate` where `clientid` = 'c001'";
               $result = $conn -> query($sql);
               if($result -> num_rows > 0)
               {
                while($row = $result -> fetch_assoc()){
                    ?>

                <div class="heart-rate-div">
                    <div class="hr-text" style="padding-top:0px; padding-left:30%;">
                        <p class="text-track">Heart Rate</p>
                     </div>
                       <div class="container-cir">
                     <div class="circlechart" 
                     data-percentage="<?php echo $row['average'];}}?>">
                            
                  </div>
              </div>

    
                    <!-----<div class="image-heart">
                        <img src="hr_vector.svg">
</div>----->
                    </div>




                <!------php for water table---->
                <?php
               $sql ="select `goal` from `watertracker` where `clientid` = 'c001'";
               $result = $conn -> query($sql);
               if($result -> num_rows > 0)
               {
                while($row = $result -> fetch_assoc()){?>


                 <div class="water-div">
                    <!------<div class="img-water" style="position:absolute; top:0%;left:-1px;">
                        <img src=".\images\water-drop.svg">

                       </div>------>
                    <div class="wt-text" style="top:0px; padding-left:40%;">
                        <p class="text-track">Water</p>
                      </div>
                       <div class="container-cir">
                      <div class="circlechart" 
                     data-percentage="<?php echo $row['goal'];}}?>">
                            
                  </div>
              </div>
                       </div>


                       <!----php for weighttable------>
                       <?php
               $sql ="select `goal` from `weighttracker` where `clientid` = 'c001'";
               $result = $conn -> query($sql);
               if($result -> num_rows > 0)
               {
                while($row = $result -> fetch_assoc()){?>



                 <div class="weight-track-div">
                    <div class="wt-text" style="top:0px; padding-left:25%;">
                        <p class="text-track">weight Track</p>
                     </div>
                       <div class="container-cir">
                     <div class="circlechart" 
                     data-percentage="<?php echo $row['goal'];}}?>">
                            
                  </div>
              </div>

                     </div>
        

        <!-------php for  sleeptracker---->
        <?php
               $sql ="select `goal` from `sleeptracker` where `clientid` = 'c001'";
               $result = $conn -> query($sql);
               if($result -> num_rows > 0)
               {
                while($row = $result -> fetch_assoc()){?>


                 <div class="sleep-track-div">
                      <div class="sleep-text" style="top:0px;padding-left:40%">   
                        <p class="text-track">Sleep</p>
                       </div>
                   <!----- <div class="img-sleep" style="padding:-10px -10px; text-align:center; ">
                        <img src=".\images\sleep-track.svg">                
                        </div>------>
                         <div class="container-cir">
                        <div class="circlechart" 
                     data-percentage="<?php echo $row['goal'];}}?>">
                            
                  </div>

                   </div>
                
                      </div>



                      <!-------php for calorie---->

                      <?php
               $sql ="select `goal` from `calorietracker` where `clientid` = 'c001'";
               $result = $conn -> query($sql);
               if($result -> num_rows > 0)
               {
                while($row = $result -> fetch_assoc()){?>
                   <div class="calorie-track-div">
                    <div class="ct-text" style="top:0px; padding-left:25%;">
                        <p class="text-track">Calories Track</p>
                    </div>

                    <div class="container-cir">
    
                    <div class="circlechart" 
                     data-percentage="<?php echo $row['goal'];}}?>">
                            
                  </div>

                
              </div>

                    <div class="img-cal" style="padding:5px 44px; position:absolute; text-align:center; z-index:-1;">
                        <img src=".\images\cal_track.svg">


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


                    


</body>
    </html>