<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 03</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <title>Sidebar menu With Sub-menus | Using HTML, CSS & JQuery</title>
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	  <link rel="stylesheet" type="text/css" href="./styles/event_calendar.css">
	  <link rel="stylesheet" href="https://fonts.googleapis.com/css2">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="css/Recipies.css">
		<link rel="stylesheet" href="css/mobiscroll.javascript.min.css">
		<script src="js/mobiscroll.javascript.min.js"></script>
  </head>
  <body>
  <div id="content">
	<?php include 'event_calendar.php'; ?>


     
		 
			
		  
<!--           
          <h2>Meal Tracker</h2>
		  
		  
          <div class="slider-wrap">
            <div class="slider">
                <div id="slider-inner">
     Content using javascript 
                </div>
            </div>
        </div> -->
    
        <script src="./js/file1.js"></script>
        <h4 class="header">Meal Tracker</h4>
    <?php include("calendar.php");
    ?>
		  
          <div class="add-diet">
            <div class="food-type" id="food-type">
                <button id="food-type-button" type="button" class="btn btn-outline-secondary">Breakfast</button>
                <button id="food-type-button" type="button" class="btn btn-outline-secondary">Lunch</button>
                <button id="food-type-button" type="button" class="btn btn-outline-secondary">Snack</button>
                <button id="food-type-button" type="button" class="btn btn-outline-secondary">Dinner</button>
            </div>
            <div id="food-add">
                <h4>In Morning</h4>
                <div id="food-add-button">
                    <button id="food-type-button" type="button" class="btn btn-outline-secondary"><h3>+</h3></button>
                    <button id="food-type-button" type="button" class="btn btn-outline-secondary"><h3>+</h3></button>
                    <button id="food-type-button" type="button" class="btn btn-outline-secondary"><h3>+</h3></button>
                    <button id="food-type-button" type="button" class="btn btn-outline-secondary"><h3>+</h3></button>
    
                </div>

            </div>
            <div id="food-add">
                <h4>After Break</h4>
                <div id="food-add-button">
                    <button id="food-type-button" type="button" class="btn btn-outline-secondary"><h3>+</h3></button>
                    <button id="food-type-button" type="button" class="btn btn-outline-secondary"><h3>+</h3></button>
                    <button id="food-type-button" type="button" class="btn btn-outline-secondary"><h3>+</h3></button>
                    <button id="food-type-button" type="button" class="btn btn-outline-secondary"><h3>+</h3></button>
    
                </div>

            </div>
            <div id="food-add">
                <h3>Note:</h3>
                <form action=""></form>
            </div>
            <button type="button" class="btn btn-primary btn-lg btn-block">Save Plan</button>
          </div>
		</div>
		

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</div>
  </body>
</html>