<?php
// session_start();
include("navbar.php");
if(isset($_GET['client_id'])){
  $clientId = $_GET['client_id'];
}else{
  header('Location: client_list.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    
  />
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <title>MealTracker</title>
</head>
<style>
html {
    overflow-x: hidden;
}

.slider{
  margin-top:100px;
}

#content {
    display: flex;
    flex-direction: column;
    height: 90%;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 500;
    font-size: 35px;
    padding: 20px;
}

.meal_date{
    color: #5C5C5C !important;
    margin-top: -5px;
    font-size: 20px !important;
  }


  .time_events {
    display: flex;
    flex-direction: column;
    margin-top:150px;
}

.time_container {
    padding: 32px;
    display: flex;
    flex: 1;
    width:100%
}

.time_card {
    padding: 16px;
    margin: 16px;
    border: 1px solid #76A5FF;
    box-shadow: 2px 4px 16px rgba(0, 0, 0, 0.06);
    border-radius: 10px;
    background-color: white;
    color: #76A5FF;
    height: auto;
    width: 20%;
}

.time_text {
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    font-weight: 500;
}

.food_events{
      display: flex;
      flex-direction: column;
      /* width: 50px; */
    }
    .food_container {
      padding: 32px;
      display: flex;
      flex: 1;
    }
    .food_card {
      /* padding: 16px; */
      margin: 16px;
      background: #FFFFFF;
  box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.25);
  border-radius: 18px;
      color: black;
      height: auto;
      width: 100%;
    }


    .food_image{
      display: flex;
      align-items: center;
      justify-content: center;
    }
  
  .food_image img{
      /* border-radius: 20px; */
      border-top-left-radius: 20px;
      border-top-right-radius: 20px;
      width: 100%;
      height: 15vh;
      object-fit: cover;
  }

  .food_des{
    color: #868686;
    font-style: normal;
font-weight: 400;
font-size: 15px;
  }
  
    .food_text{
      margin-top: 15px;
      font-size: 22px;
      color: black;
      font-weight: bold;
    }

/* MEDIA QUERY */


@media screen and (min-width: 720px) {

    /* Styles go here */
    .mobile-menu {
        display: none;
    }
}

@media (min-width: 0px) and (max-width: 720px) {

    .time_text {
        font-size: 30% !important;
        padding-top: 0px !important;
    }

    .time_container {
        padding: 0 !important;
        flex-wrap: wrap;
        width: 100%
    }

    .time_card {
        padding: 10px !important;
        margin-right: 0.1% !important;
        height: auto !important;
        width: 20% !important;
    }

    .food_container {
      padding: 0 !important;
      flex-wrap: wrap;
    }


}

</style>

<script>
      $(document).ready(function () {
          $("#breakfast").show();
          $("#snack").hide();
          $("#lunch").hide();
          $("#dinner").hide();
      });
    </script>

<script>
      $(document).ready(function () {
        $("#btn1").click(function () {
          $("#breakfast").show();
          $("#snack").hide();
          $("#lunch").hide();
          $("#dinner").hide();
        });
      });
    </script>

<script>
      $(document).ready(function () {
        $("#btn3").click(function () {
          $("#breakfast").hide();
          $("#snack").show();
          $("#lunch").hide();
          $("#dinner").hide();
        });
      });
    </script>

<script>
     $(document).ready(function () {
        $("#btn2").click(function () {
          $("#breakfast").hide();
          $("#snack").hide();
          $("#lunch").show();
          $("#dinner").hide();
        });
      });
    </script>

<script>
      $(document).ready(function () {
        $("#btn4").click(function () {
          $("#breakfast").hide();
          $("#snack").hide();
          $("#lunch").hide();
          $("#dinner").show();
        });
      });
</script>


<body>

    <!-- Contents Start -->
    <div id="content">

    <!-- Calendar -->
    <h4 class="header">Meal Tracker</h4>
    <div class="meal_date" >
            <i class="fa-solid fa-mug-saucer" style="display: inline-block;"></i>
            <p style="display: inline-block;"><?php
            date_default_timezone_set('Asia/Kolkata'); 
            print "". date("d M Y"); ?></p>
        </div>


    <!-- Other content -->
    <h3>today's meal
    </h3>
        <div class="time_events">
            <div class="time_container">
                <div class="time_card" id = "btn1" style = "cursor: pointer;">
                    <div class="time_text" >Breakfast</div>
                </div>
                <div class="time_card" id = "btn2" style = "cursor: pointer;">
                    <div class="time_text" >Lunch</div>
                </div>
                <div class="time_card" id = "btn3" style = "cursor: pointer;">
                    <div class="time_text">Snack</div>
                </div>
                <div class="time_card"  id = "btn4" style = "cursor: pointer;">
                    <div class="time_text">Dinner</div>
                </div>
            </div>
        </div>




        <div id="breakfast">
          <?php
                $date = date('Y-m-d');
                $conn = new mysqli("localhost", "root", "", "infits");
                if($conn->connect_error){
                        die("Connection failed :" . $conn->connect_error);
                }
                $sql = "SELECT * FROM `mealtracker` WHERE date = '$date' AND clientID = '$clientId' AND meal = 'breakfast'";
                $result =$conn-> query($sql);
              ?>
                <div class="food_events">
                      <div class="food_container">
                          <?php    
                if ($result->num_rows > 0) 
                {
                        while($row = $result->fetch_assoc())
                        {
                          echo '        <div class="food_card">';
                            echo '          <div class="food_image"><img src="'.$row['image'].'"></div>';
                            echo '          <div style="padding:18px">';
                                echo '          <div class="food_text">'.$row['name'].'</div>';
                                echo '          <p class="food_des">'.$row['description'].'</p>';
                            echo '          </div>';
                          echo '        </div>';
                        }
                } 
                else {
                        echo "No recipies found";
                }
          ?>
          </div>
          </div>

          </div>


          <div id="lunch">
          <?php
                
                $conn = new mysqli("localhost", "root", "", "infits");
                if($conn->connect_error){
                        die("Connection failed :" . $conn->connect_error);
                }
                $sql = "SELECT * FROM `mealtracker` WHERE date = '$date' AND clientID = '$clientId' AND meal = 'lunch'";
                $result =$conn-> query($sql);
              ?>
                <div class="food_events">
                      <div class="food_container">
                          <?php    
                if ($result->num_rows > 0) 
                {
                        while($row = $result->fetch_assoc())
                        {
                          echo '        <div class="food_card">';
                            echo '          <div class="food_image"><img src="'.$row['image'].'"></div>';
                            echo '          <div style="padding:18px">';
                                echo '          <div class="food_text">'.$row['name'].'</div>';
                                echo '          <p class="food_des">'.$row['description'].'</p>';
                            echo '          </div>';
                          echo '        </div>';
                        }
                } 
                else {
                        echo "No recipies found";
                }
          ?>
          </div>
          </div>

          </div>


          <div id="snack">
          <?php
                $conn = new mysqli("localhost", "root", "", "infits");
                if($conn->connect_error){
                        die("Connection failed :" . $conn->connect_error);
                }
                $sql = "SELECT * FROM `mealtracker` WHERE date = '$date' AND clientID = '$clientId' AND meal = 'snack'";
                $result =$conn-> query($sql);
              ?>
                <div class="food_events">
                      <div class="food_container">
                          <?php    
                if ($result->num_rows > 0) 
                {
                        while($row = $result->fetch_assoc())
                        {
                          echo '        <div class="food_card">';
                            echo '          <div class="food_image"><img src="'.$row['image'].'"></div>';
                            echo '          <div style="padding:18px">';
                                echo '          <div class="food_text">'.$row['name'].'</div>';
                                echo '          <p class="food_des">'.$row['description'].'</p>';
                            echo '          </div>';
                          echo '        </div>';
                        }
                } 
                else {
                        echo "No recipies found";
                }
          ?>
          </div>
          </div>

          </div>

          <div id="dinner">
          <?php
      
                $conn = new mysqli("localhost", "root", "", "infits");
                if($conn->connect_error){
                        die("Connection failed :" . $conn->connect_error);
                }
                $sql = "SELECT * FROM `mealtracker` WHERE date = '$date' AND clientID = '$clientId' AND meal = 'dinner'";
                $result =$conn-> query($sql);
              ?>
                <div class="food_events">
                      <div class="food_container">
                          <?php    
                if ($result->num_rows > 0) 
                {
                        while($row = $result->fetch_assoc())
                        {
                          echo '        <div class="food_card">';
                            echo '          <div class="food_image"><img src="'.$row['image'].'"></div>';
                            echo '          <div style="padding:18px">';
                                echo '          <div class="food_text">'.$row['name'].'</div>';
                                echo '          <p class="food_des">'.$row['description'].'</p>';
                            echo '          </div>';
                          echo '        </div>';
                        }
                } 
                else {
                        echo "No recipies found";
                }
          ?>
          </div>
          </div>

          </div>

    </div>
    
    <!-- Contents End -->

</body>

</html>
