
<?php include('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infits</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script type="text/JavaScript" 
src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
 <script src="https://code.jquery.com/jquery-1.10.2.js">
  </script>

</script>
<link href ="choose_recipe.css" rel="stylesheet">
<title> Choose Recipe </title>
</head>
<body>
   <div class="page">
     <?php include('event_calendar.php'); ?>
     <div class="content">
      <!---------------Dashbord---------------------->
      <div class="flex-top">
     <h3 style="font-size: 30px; color: #202224; font-weight: 400; margin: 5px;">Choose a Recipe</h3>
     <input type="text" name="search" id="search" placeholder="search recipe here">
     <button type="button" name="searchbtn" id="searchbtn"> Search </button>
</div>
<div class="flex-second">

   <button class= "recipe-flex" onclick="divVisibility('breakfast1')" id="breakfast" style="margin: 40px 10px";> Breakfast
   <img src=".\images\break1.svg" style="margin-left:130px;"></button>
   <!--------script for breakfast--------->


<button class="recipe-flex"  onclick="divVisibility('lunch1')" id="lunch" style="margin: 40px 10px"; > Lunch </button>
<button class="recipe-flex" onclick="divVisibility('snacks1')" id="snacks" style="margin: 40px 10px";> Snacks</button>



<button class="recipe-flex" onclick="divVisibility('dinner1')" id="dinner" style="margin: 40px 10px";> Dinner </button>

</div>


<script>

  
    function divVisibility(divId1) {
      var divs = ["breakfast1", "lunch1", "snacks1", "dinner1"];
    
      var i, divId, div;
      for(i = 0; i < divs.length; i++) {
        divId = divs[i];
        div = document.getElementById(divId);
        div.style.display ="none";


      }
      document.getElementById(divId1).style.display ="block";
      event.preventDefault();
    }


    </script>



<!---------breakfast tab------------>

<div id="breakfast1">
  <div class= "flex-fast">
  <div class="title1">
  <?php
$sql ="select * from `dietian_recipies` where `category` = 'Breakfast'";
$result = $conn -> query($sql);
if($result -> num_rows >0){
 while($row = $result->fetch_assoc()){
  
  

  ?>

   <p id="tag-recipe" style="font-size:25px; font-weight:400; display:flex;"> Breakfast </p>
   <p id="viewall"> view all </p>
</div>

<div class="final">
<div class="flex-last">
  <div class="recipe-area" id="recipe1" name="recipe1">
    <div class="r-image" id="rimage" name="rimage" style="margin-left:10px;">
      <img src=".\images\alooparatha.png" style="height:117px; width:220px; margin-left:15px;margin-right:15px;">

</div>
<div class="box-title">
  <p id="recipename" name="recipename" style="margin-top:15px;"><?php echo $row['name'];?> </p>
  
</div>

<div class="box2">
  <div class="steps"> <?php echo '12'; ?> </div>
  <span id="one" style="font-size:10px;font-weight:400px;">Steps </span>
  <!----clock image----->
  <p id="timedisplay" name="timedisplay" style="margin-left:70px;"> <?php echo '20:00';?> </p>

</div>
<div class="box3">
  <img src=".\images\kcal.png" style="height:24px; width:20px; margin-left:15px;">&nbsp;
  <span id="cal" style="font-size:13px;"> <?php echo $row['calories']; }} ?> kcal </span>
  <button id="medium" name="medium" class="btn-mdn">medium</button>

</div>

</div>
</div>
 </div> 
 </div>

<!---------------snacks tab---------------->
<div id="snacks1">

  <div class="title1">
   <p id="tag-recipe" style="font-size:25px; font-weight:400; color:black;display:flex;"> Snacks </p>
   <p id="viewall"> view all </p>
  </div>


<div class="flex-last">
  <div class="recipe-area" id="recipe1" name="recipe1">
    <div class="r-image" id="rimage" name="rimage" style="margin-left:10px;">
      <img src=".\images\alooparatha.png" style="height:117px; width:220px; margin-left:15px;margin-right:15px;">

</div>
<div class="box-title">
  <p id="recipename" name="recipename" style="margin-top:15px;"><?php echo 'Recipe Name';?> </p>
  
</div>

<div class="box2">
  <div class="steps"> <?php echo '12'; ?> </div>
  <span id="one" style="font-size:10px;font-weight:400px;">Steps </span>
  <!----clock image----->
  <p id="timedisplay" name="timedisplay" style="margin-left:70px;"> <?php echo '20:00';?> </p>

</div>
<div class="box3">
  <img src=".\images\kcal.png" style="height:24px; width:20px; margin-left:15px;">&nbsp;
  <span id="cal" style="font-size:13px;"> <?php echo '34';?> kcal </span>
  <button id="medium" name="medium" class="btn-mdn">medium</button>

</div>

</div>
  </div>

<!-------------lunch tab------------------>
<div id="lunch1">
<div class="title1">

<p id="tag-recipe" style="font-size:25px; font-weight:400; display:flex;"> Lunch </p>
<p id="viewall"> view all </p>
</div>


<div class="flex-last">
<div class="recipe-area" id="recipe1" name="recipe1">
 <div class="r-image" id="rimage" name="rimage" style="margin-left:10px;">
   <img src=".\images\alooparatha.png" style="height:117px; width:220px; margin-left:15px;margin-right:15px;">

</div>
<div class="box-title">
<p id="recipename" name="recipename" style="margin-top:15px;"><?php echo 'Recipe Name';?> </p>

</div>

<div class="box2">
<div class="steps"> <?php echo '12'; ?> </div>
<span id="one" style="font-size:10px;font-weight:400px;">Steps </span>
<!----clock image----->
<p id="timedisplay" name="timedisplay" style="margin-left:70px;"> <?php echo '20:00';?> </p>

</div>
<div class="box3">
<img src=".\images\kcal.png" style="height:24px; width:20px; margin-left:15px;">&nbsp;
<span id="cal" style="font-size:13px;"> <?php echo '34';?> kcal </span>
<button id="medium" name="medium" class="btn-mdn">medium</button>

</div>

</div>

</div>

<!-----------dinner tab---------------------->
<div id="dinner1">
<div class="title1">

<p id="tag-recipe" style="font-size:25px; font-weight:400; display:flex;"> Dinner</p>
<p id="viewall"> view all </p>
</div>


<div class="flex-last">
<div class="recipe-area" id="recipe1" name="recipe1">
 <div class="r-image" id="rimage" name="rimage" style="margin-left:10px;">
   <img src=".\images\alooparatha.png" style="height:117px; width:220px; margin-left:15px;margin-right:15px;">

</div>
<div class="box-title">
<p id="recipename" name="recipename" style="margin-top:15px;"><?php echo 'Recipe Name';?> </p>

</div>

<div class="box2">
<div class="steps"> <?php echo '12'; ?> </div>
<span id="one" style="font-size:10px;font-weight:400px;">Steps </span>
<!----clock image----->
<p id="timedisplay" name="timedisplay" style="margin-left:70px;"> <?php echo '20:00';?> </p>

</div>
<div class="box3">
<img src=".\images\kcal.png" style="height:24px; width:20px; margin-left:15px;">&nbsp;
<span id="cal" style="font-size:13px;"> <?php echo '34';?> kcal </span>
<button id="medium" name="medium" class="btn-mdn">medium</button>

</div>

</div>


</div>

</div>

</div>


</div>



<!--------------JS tabs------------>
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i <  tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
    event.preventDefault();
  }
  tablinks = document.getElementsByClassName("recipe-flex");

  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " activee";
  event.preventDefault();
}
</script>



</body>
</html>