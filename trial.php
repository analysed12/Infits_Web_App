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

/*---------- MODAL CSS -------------*/

body {
  width: 100%;
  height: 100%;
  padding: 0;
  margin: 0;
  position: relative;
}

.popup-trigger {
  display: block;
  margin: 0 auto;
  padding: 20px;
  max-width: 260px;
  background: #4EBD79;
  color: #fff;
  font-size: 18px;
  font-weight: 700;
  text-align: center;
  text-transform: uppercase;
  line-height: 24px;
  cursor: pointer;
}

body {
  background-color: #E3E3E3;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  height: 240px;
  text-align: center;
}

h1,
p,
h2,
button {
  font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
  font-weight: 100;
  letter-spacing: 0.5px;
}

h1 {
  font-size: 40px;
  text-align: center;
  color: #666666;
  margin: 0 0 30px 0;
}

p {
  color: #666666;
  margin: 30px auto;
  text-align: center;
  font-size: 16px;
}

.popup {
  background: rgba(100, 100, 100, 0.6);
  position: fixed;
  display: none;
  z-index: 5000;
  height: 100%;
  width: 100%;
  left: 0;
  top: 0;
}

.popup>div {
  border-radius: 10px;
  position: fixed;
  background: #FFFFFF;
  box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.3);
  padding: 30px 15px;
  /* Width of popup can be changed */
  width: 70%;
  max-width: 600px;
  z-index: 5001;
  -moz-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  left: 50%;
  top: 50%;
  text-align: left;
  border: 5px solid #f28920;
}

.popup-btn-close {
  position: absolute;
  background-color: #f28920;
  color: white;
  top: -15px;
  right: -15px;
  border-radius: 50%;
  width: 30px;
  height: 30px;
  line-height: 30px;
  text-align: center;
  font-size: 20px;
  font-weight: bold;
  font-family: 'Arial Black', Arial, sans-serif;
  cursor: pointer;
  -webkit-box-shadow: -4px -2px 6px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: -4px -2px 6px 0px rgba(0, 0, 0, 0.1);
  box-shadow: -3px 1px 6px 0px rgba(0, 0, 0, 0.1);
}

.popup-btn-close:hover {
  background-color: #ac5918;
  color: #fff;
}

.popup-text {
  background: #fff;
  color: #333;
  font-size: 19px;
  line-height: 30px;
  z-index: 9999;
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <div class="container">
  <a class="popup-trigger" data-target="#popup1">Open PopUp 1</a>
  <a class="popup-trigger" data-target="#popup2">Open PopUp 2</a>
</div>

<div id="popup1" class="popup">
  <div class="popup-text">This is my popup 1</div>
  <span class="popup-btn-close">&times;</span>
</div>
<div id="popup2" class="popup">
  <div class="popup-text">This is my popup 2</div>
  <span class="popup-btn-close">&times;</span>
</div>

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
        <div class="tab-box">
            <p style="color:black; font-size: 25px;"> Dinner</p>
            <div id="dinner"><?php include 'diet_chart_popup.php'; ?></div>
        </div>
        </div>
        <div class="tab-box">
            <p style="color:black; font-size: 25px;"> Dinner</p>
            <div id="dinner2"><?php include 'diet_chart_popup.php'; ?></div>
        </div>
      </div>
      
      <div id="Lunch" class="tabcontent">
        <div class="tab-box">
            <p style="color:black; font-size: 25px;"> Afternoon</p>
            <?php include 'diet_chart_popup.php'; ?>
        </div>
      </div>
      
      <div id="Snack" class="tabcontent">
        <div class="tab-box">
            <p style="color:black; font-size: 25px;">Snack</p>
            <?php include 'diet_chart_popup.php'; ?>
        </div>
      </div>

      <div id="Dinner" class="tabcontent">
        <div class="tab-box">
            <p style="color:black; font-size: 25px;"> Dinner</p>
            <?php include 'diet_chart_popup.php'; ?>
        </div>
      </div>
      
      <script>
function popupOpenClose(popup) {

/* Add div inside popup for layout if one doesn't exist */
if ($(".wrapper", popup).length == 0) {
  $(popup).wrapInner("<div class='wrapper'></div>");
}

/* Open popup */
$(popup).show();

/* Close popup if user clicks on background */
$(popup).click(function(e) {
  if (e.target == this) {
    if ($(popup).is(':visible')) {
      $(popup).hide();
    }
  }
});

/* Close popup and remove errors if user clicks on cancel or close buttons */
$(popup).find(".popup-btn-close").on("click", function() {
  if ($(".formElementError").is(':visible')) {
    $(".formElementError").remove();
  }
  $(popup).hide();
});
}

$(document).ready(function() {
$(".popup-trigger").on("click", function() {
  var target = $(this).data('target');
  popupOpenClose($(target));
});
});
      </script>
        
        <br><br>
    <button type="button" class="btn btn-primary btn-lg btn-block" style="background-color: #9C74F5">Save Plan</button>
    <br>
          </div>
		</div>
</div>


  </body>
</html>