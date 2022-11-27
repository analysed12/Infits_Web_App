<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 03</title>
	  <title>Sidebar menu With Sub-menus | Using HTML, CSS & JQuery</title>
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	  <!--<link rel="stylesheet" type="text/css" href="./styles/event_calendar.css">-->
	  <link rel="stylesheet" href="https://fonts.googleapis.com/css2">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		
            <!--<link rel="stylesheet" href="css/Recipies.css">-->
        
		<link rel="stylesheet" href="css/mobiscroll.javascript.min.css">
		<script src="js/mobiscroll.javascript.min.js"></script>
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
}

/* Darker background on mouse-over */
.add-btn:hover {
  background-color: RoyalBlue;
}
    
</style>
</head>

<div id="page">
    <!--------------sidenav------------------------->
    <?php include 'event_calendar.php'; ?>

    <div id="content">
      <!------------------------------------------------DASHBOARD--------------------------------------------------------->
      <h1 style="font-size: 32px; color: #202224; font-weight: 600;">Diet Chart</h1>
      <p id="topnav-content-1"><span id="topnav-content-1-name">
      <?php  if (isset($_SESSION['name'])) : ?>
        <?php echo $_SESSION['name']; ?></strong></p>
      <?php endif ?>
      </span></p>
    </div>

    <!------------------calendar----------------->
    <div id="content">
      <?php include("calendar.php");?>
      <br>
    </div>

    

    <div id="content">
    <div class="tab">
        <div class="space-between-flex">
        <button class="tablinks" onclick="openCity(event, 'Breakfast')">Breakfast</button>
        <button class="tablinks" onclick="openCity(event, 'Lunch')">Lunch</button>
        <button class="tablinks" onclick="openCity(event, 'Snack')">Snack</button>
        <button class="tablinks" onclick="openCity(event, 'Dinner')">Dinner</button>
      </div>
    </div>
      
      <div id="Breakfast" class="tabcontent">
        <div class="tab-box">
            <p style="color:black; font-size: 25px;"> In Morning</p>
            <button class="add-btn"><i class="fa fa-plus"></i></button>
        </div>
        <div class="tab-box">
            <p style="color:black; font-size: 25px;"> After Break</p>
            <button class="add-btn"><i class="fa fa-plus"></i></button>
        </div>
      </div>
      
      <div id="Lunch" class="tabcontent">
        <div class="tab-box">
            <p style="color:black; font-size: 25px;"> Afternoon</p>
            <button class="add-btn"><i class="fa fa-plus"></i></button>
        </div>
      </div>
      
      <div id="Snack" class="tabcontent">
        <div class="tab-box">
            <p style="color:black; font-size: 25px;">Snack</p>
            <button class="add-btn"><i class="fa fa-plus"></i></button>
        </div>
      </div>

      <div id="Dinner" class="tabcontent">
        <div class="tab-box">
            <p style="color:black; font-size: 25px;"> Dinner</p>
            <button class="add-btn"><i class="fa fa-plus"></i></button>
        </div>
      </div>
      
      <script>
      function openCity(evt, food) {
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