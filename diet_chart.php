<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infits</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

   
    
  </head>

  <style>
    #content {
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

        </style>
  </head>

  <body>
  <div id="page">
    <!--------------sidenav------------------------->
    <?php include 'event_calendar.php'; ?>

    <div id="content">
      <!------------------------------------------------DASHBOARD--------------------------------------------------------->
      <h1 style="font-size: 32px; color: #202224; font-weight: 600;">Meal Tracker</h1>
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
      <!-----------------------------------------------EVENTS--------------------------------------------------------->
      
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
            <p style="font-size: 20px;margin-top: 0; float: right; color: #A6A1A1;"><var>Kcal 200</var></p>
            <h3 style="font-size: 30px; margin-top: 0;">In Morning</h3><img src="images/food.png">
            <p style="font-size: 20px;margin-top: 0;">Aloo Paratha</p>
        </div>
        <div class="tab-box">
            <p style="font-size: 20px;margin-top: 0; float: right; color: #A6A1A1;"><var>Kcal 200</var></p>
            <h3 style="font-size: 30px; margin-top: 0;">In Morning</h3>
            <img src="images/food.png">
            <p style="font-size: 20px;margin-top: 0;">Aloo Paratha</p>
        </div>
        <br><input type="submit" name="submit" value="Save Plan">
      </div>
      
      <div id="Lunch" class="tabcontent">
        <div class="tab-box">
            <p style="font-size: 20px;margin-top: 0; float: right; color: #A6A1A1;"><var>Kcal 200</var></p>
            <h3 style="font-size: 30px; margin-top: 0;">In Morning</h3>
            <img src="images/food.png">
            <p style="font-size: 20px;margin-top: 0;">Aloo Paratha</p>
        </div>
        <br><input type="submit" name="submit" value="Save Plan">
      </div>
      
      <div id="Snack" class="tabcontent">
        <div class="tab-box">
            <p style="font-size: 20px;margin-top: 0; float: right; color: #A6A1A1;"><var>Kcal 200</var></p>
            <h3 style="font-size: 30px; margin-top: 0;">In Morning</h3>
            <img src="images/food.png">
            <p style="font-size: 20px;margin-top: 0;">Aloo Paratha</p>
        </div>
        <br>
        <input type="submit" name="submit" value="Save Plan">
      </div>

      <div id="Dinner" class="tabcontent">
        <div class="tab-box">
            <p style="font-size: 20px;margin-top: 0; float: right; color: #A6A1A1;"><var>Kcal 200</var></p>
            <h3 style="font-size: 30px; margin-top: 0;">In Morning</h3>
            <img src="images/food.png">
            <p style="font-size: 20px;margin-top: 0;">Aloo Paratha</p>
        </div>
        <br><input type="submit" name="tab-submit" value="Save Plan">
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

    
    </div>

</body>
</html>