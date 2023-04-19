<?php include('navbar.php') ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "infits";
$conn = new mysqli($servername, $username, $password, $dbname);

function fetchData($client_id)
{
  $sql = "SELECT monday, tuesday, wednesday, thursday, friday, saturday, sunday FROM diet_chart where client_id=$client_id;";
  global $conn;
  $result = $conn->query($sql);
  return ($result);
}

function fetchInformation($result, $day)
{
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      // Decode the JSON data for each day
      $daydata = json_decode($row[$day], true);
      return $daydata;
    }
  }
}
function compute($info, $time, $subtime)
{
  global $conn;
  foreach ($info[$time][$subtime] as $value) {
    $sqld = "SELECT * FROM default_recipes WHERE drecipe_id = $value";
    $resultd = mysqli_query($conn, $sqld);
    if (mysqli_num_rows($resultd) > 0) {
      while ($row = mysqli_fetch_assoc($resultd)) {
        ?>
        <div class="d-flex justify-content-center flex-column justify-content-center text-center me-4">
          <img src="images/Screenshot__136_-removebg-preview 6.png" alt="s">
          <div class="fw-bold mt-3">
            <?php echo ($row['drecipe_name']); ?>
          </div>
        </div>
        <?php
      }
    }

  }
  ?>

  <?php
}
function update($client_id, $day)
{
  $result = fetchData($client_id);
  $info = fetchInformation($result, $day);
  return $info;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <meta charset="UTF-8" />
  <title>Infit</title>
  <!-- <link rel="stylesheet"  /> -->
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
    integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
  </script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
</head>
<style>
  .content {
    overflow: hidden;
    display: flex;
    flex-direction: column;
    height: 90%;
    font-family: 'Poppins';
    font-style: normal;
    padding: 10px;
    margin-top: 2rem;
    position: relative;

  }

  .main {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .top {
    position: relative;
    display: flex;
    justify-content: space-around;
    margin-left: 20px;
  }

  .top p {
    position: relative;
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 44px;
    color: #202224;


  }

  .top img {
    height: 20px;
    width: 20px;
    top: 15px;
    margin-top: 20px;
    margin-left: 30px;


  }

  .top-right {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-right: 20px;
    float: right;
    width: 50%;
  }


  .top-right .btn {
    position: relative;
    box-sizing: border-box;
    border: 1px solid #9C74F5;
    background-color: #fff;
    border-radius: 10px;
    height: 50px;
    width: 200px;
    margin-left: 38rem;
  }

  .top-right span {
    text-align: center;
    color: #9C74F5;
    font-family: 'Poppins';
    text-align: center;
    text-decoration: none;
    font-size: 15px;
  }

  .top-right img {
    width: 30px;
    height: 20px;
    margin-right: 5px;
    margin-left: 0px;
  }

  .down {
    position: absolute;
    margin-left: 20px;
    top: 60px;
    left=0px;
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 33px;
    color: #CBCBCB;
  }

  .day:hover,
  .active {
    color: white;
    background: #9C74F5;
    border-radius: 10px;
  }

  .button-container {
    position: absolute;
    box-sizing: border-box;
    display: flex;
    margin-top: 0px;
    width: 95%;
    height: 10%;
    color: #9C74F5;
    padding: 0 20px;
    align-items: center;
    font-size: 10px;
    font-family: 'NATS';
    font-style: normal;
    margin-left: 7rem;
    margin-right: 10px;
    top: 17rem;


  }

  .btn-my {
    font-size: larger;
  }

  .btn-my:hover {
    background: linear-gradient(180deg, #9C74F5 0%, rgba(104, 125, 238, 0.52) 100%);
    border-radius: 13px;
  }

  .btn-my1 {
    background: #FFFFFF;
    border: 0.880519px solid #9C74F5;
    border-radius: 10px;
    font-size: larger;
  }

  .btn-my1:hover {
    background: #9C74F5;
    color: white;
  }

  .box {
    border: 1px solid white;
    width: 1000px;
    height: 180px;
    margin-left: 50px;
    margin-bottom: 30px;
    top: 200px;
    padding: 10px;
    display: flex;
    flex-direction: column;
    align-items: left;
    background: #FFFFFF;
    box-shadow: 0px 7.04415px 21.1324px rgba(176, 190, 197, 0.32), 0px 2.64156px 4.40259px rgba(176, 190, 197, 0.32);
    border-radius: 8.80519px;
  }

  .box img {
    width: 190px;
    height: 61px;
    left: 28px;
    top: 277px;
    margin-left: 10px;

    background: url(Screenshot__136_-removebg-preview.png);
    border-radius: 10px;
  }

  .box h3 {
    text-align: left;
    font-size: 24px;
    margin-bottom: 10px;
    left: 100px;
    /* top: 40rem; */
    margin-left: 10px;
    margin-top: 1px;

    font-family: 'Poppins';
    font-style: normal;
    font-weight: 500;
    font-size: 26.4156px;
    line-height: 40px;
  }

  .box h2 {
    margin-left: 40px;
    font-size: 15px;
    margin-bottom: 20px;
    left: 23.77px;
    font-weight: bolder;
    padding-bottom: 10px;

  }

  .cont {
    display: flex;
    justify-content: space-between;
  }

  .left {
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 500;
    font-size: 26.4156px;
    line-height: 40px;
    display: flex;
    align-items: center;
    color: #000000;
  }

  .right {
    text-align: right;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 30px;
    display: flex;
    align-items: center;
    color: #A6A1A1;

  }

  .right img {
    width: 20.73px;
    height: 24px;
    left: 804px;
    top: 220px;
    background: url(7306600-removebg-preview.png);
    border-radius: 10px;
  }

  .demo {
    display: flex;
    justify-content: space-between;

  }

  .up {
    background: #FFFFFF;
    box-shadow: 0px 7.04415px 21.1324px rgba(176, 190, 197, 0.32), 0px 2.64156px 4.40259px rgba(176, 190, 197, 0.32);
    border-radius: 8.80519px;
    width: 176px;
    height: 61px;
    top: 714px;
    margin-left: 10%;


    display: flex;
    align-items: center;
    border: 0.880519px solid #fff;

  }

  .up span {
    display: flex;
    align-items: center;
    color: #000000;
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 25px;
    line-height: 53px;
    margin-left: 40px;
  }

  .up-right {
    background: #9C74F5;
    border-radius: 10px;
    margin-left: 50%;
    width: 250px;
    height: 62px;
    margin-right: 9%;


    display: flex;
    align-items: center;
    border: 0.880519px solid #fff;



  }

  .up-right span {

    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 30px;
    line-height: 63px;
    display: flex;
    align-items: center;
    color: #F8F8F8;
    margin-left: 45px;
  }

  #LuC,
  #DiC,
  #SnC {
    display: none;
  }

  .btn11 {
    box-sizing: border-box;
    position: relative;
    width: 150px;
    height: 50px;
    cursor: pointer;
    background: #FFFFFF;
    border: 1px solid #9C74F5;
    box-shadow: 0px 0.880519px 4.40259px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
  }

  @media screen and (min-width: 300px) and (max-width: 600px) {
    .content {
      overflow: hidden;
    }
  }


  @media screen and (min-width: 300px) and (max-width: 600px) {
    .button-container {
      flex-wrap: wrap;
      flex-direction: column;
      grid-template-columns: auto auto auto auto;
      margin: auto;
      top: 16.5%;
      margin-left: 0%;
      overflow: scroll;


    }
  }

  @media screen and (max-width: 720px) {
    .main {
      display: flex;
      flex-direction: row;
      justify-content: space-around;
      align-items: center;
    }

  }

  @media screen and (min-width: 300px) and (max-width: 600px) {
    .top {
      margin-left: auto;
    }

    .top p {
      font-size: 20px;
      text-align: end;
      margin-top: 1rem;
    }

    .top img {
      margin-left: 1rem;
      width: 20px;
      margin-top: 1rem;
    }
  }

  @media screen and (min-width: 300px) and (max-width: 600px) {
    .top-right .btn {
      margin-left: 40px;
      width: 100%;
    }

    .top-right img {
      margin-left: 1rem;
    }
  }

  @media screen and (min-width: 300px) and (max-width: 600px) {
    .down {
      margin-left: 2rem;
      font-size: 20px;
    }
  }

  @media screen and (min-width: 300px) and (max-width: 600px) {
    .demo {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      margin: auto;
      margin-right: auto;
    }


  }

  @media screen and (min-width: 300px) and (max-width: 600px) {
    .up-right {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      margin: auto;
      margin-top: 5%;
      margin-right: auto;
    }

  }

  @media screen and (min-width: 300px) and (max-width: 600px) {
    .save {
      padding-right: 4rem;
    }

  }
</style>

<body>
  <?php $client_id = 2 ?>
  <div class="content">
    <div class="main">
      <div class="top">
        <p> New Diet Chart</p>
        <img src="images/Vector (1) (1).png">
      </div>
      <div class="top-right">
        <button class="btn" text="submit">
          <span>Connect to plan</span>
        </button>
        <img src="images/Vector (2) (1).png">
      </div>
      <br />
      <span class="down">Ronald Richard</span>
    </div>
    <br />

    <div class="ms-auto me-auto" style="width:90%">
      <div class="d-flex justify-content-around w-75 m-auto mb-3">
        <button class="btn btn-my tab" tab="monday">Mon</button>
        <button class="btn btn-my tab" tab="tuesday">Tue</button>
        <button class="btn btn-my tab" tab="wednesday">Wed</button>
        <button class="btn btn-my tab" tab="thursday">Thu</button>
        <button class="btn btn-my tab" tab="friday">Fri</button>
        <button class="btn btn-my tab" tab="saturday">Sat</button>
        <button class="btn btn-my tab" tab="sunday">Sun</button>
      </div>

      <div id="monday" class="tab-content">
        <?php $info = update($client_id, "monday"); ?>
        <div>
          <div class="d-flex mb-5" style="position:relative">
            <button class="btn btn-my1 px-5 m-auto Br tabm" tab="brm">Breakfast</button>
            <button class="btn btn-my1 px-5 m-auto Lu tabm" tab="lum">Lunch</button>
            <button class="btn btn-my1 px-5 m-auto Sn tabm" tab="snm">Snacks</button>
            <button class="btn btn-my1 px-5 m-auto Di tabm" tab="dim">Dinner</button>
          </div>
          <div class="container BrC tabm-content" id="brm">
            <div class="box">
              <div class="cont">
                <div>
                  <div class="left">
                    <h3> In Morning </h3>
                  </div>
                  <div class="d-flex">
                    <?php compute($info, "breakfast", "breakfast_morning") ?>
                  </div>

                </div>

                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','monday','breakfast','breakfast_morning')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:100% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>

              </div>
            </div>
            <div class="box">
              <div class="cont">
                <div>
                  <div class="left">
                    <h3> After Break </h3>
                  </div>
                  <?php $type = "breaka" ?>
                  <div class="d-flex">
                    <?php compute($info, "breakfast", "breakfast_after") ?>
                  </div>

                </div>
                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','monday','breakfast','breakfast_after')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:100% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="container LuC tabm-content" style="display:none" id="lum">
            <div class="box">
              <div class="cont">
                <div>
                  <div class="left">
                    <h3> Afternoon </h3>
                  </div>
                  <?php $type = "lunch" ?>
                  <div class="d-flex">
                    <?php compute($info, "lunch", "afternoon") ?>
                  </div>
                </div>
                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','monday','lunch','afternoon')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:100% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="container DiC tabm-content" style="display:none" id="dim">
            <div class="box">
              <div class="cont">
                <div>
                  <div class="left">
                    <h3>Night</h3>
                  </div>
                  <?php $type = "dinner" ?>
                  <div class="d-flex">
                    <?php compute($info, "dinner", "night") ?>
                  </div>

                </div>
                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','monday','dinner','night')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:100% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>
              </div>
            </div>
            <div class="box">
              <div class="cont">
                <div class="w-100">
                  <div class="left">
                    <h3>Late Night Food</h3>
                  </div>
                  <?php $type = "breaka" ?>
                  <div class="d-flex">
                    <?php compute($info, "dinner", "late_night") ?>
                  </div>
                </div>
                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','monday','dinner','late_night')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:70% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="container SnC tabm-content" style="display:none" id="snm">
            <div class="box">
              <div class="cont">
                <div>
                  <h3>High Tea and Snacks</h3>
                  <?php $type = "snacks" ?>
                  <div class="d-flex">
                    <?php compute($info, "snacks", "High Tea and Snacks") ?>
                  </div>
                </div>
                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','monday','snacks','High Tea and Snacks')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:100% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="demo">
            <button class="up"> <span>+ Add </span></button>
            <button class="up-right"> <span class="save"> Save Plan </span></button>
          </div>
        </div>
      </div>
      <div id="tuesday" class="tab-content" style="display:none">
        <?php $info = update($client_id, "tuesday"); ?>
        <div>
          <div class="d-flex mb-5" style="position:relative">
            <button class="btn btn-my1 px-5 m-auto Br tabt" tab="brt">Breakfast</button>
            <button class="btn btn-my1 px-5 m-auto Lu tabt" tab="lut">Lunch</button>
            <button class="btn btn-my1 px-5 m-auto Sn tabt" tab="snt">Snacks</button>
            <button class="btn btn-my1 px-5 m-auto Di tabt" tab="dit">Dinner</button>
          </div>
          <div class="container BrC tabt-content" id="brt">
            <div class="box">
              <div class="cont">
                <div>
                  <div class="left">
                    <h3> In Morning </h3>
                  </div>
                  <div class="d-flex">
                    <?php compute($info, "breakfast", "breakfast_morning") ?>
                  </div>

                </div>

                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','tuesday','breakfast','breakfast_morning')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:100% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>

              </div>
            </div>
            <div class="box">
              <div class="cont">
                <div>
                  <div class="left">
                    <h3> After Break </h3>
                  </div>
                  <?php $type = "breaka" ?>
                  <div class="d-flex">
                    <?php compute($info, "breakfast", "breakfast_after") ?>
                  </div>

                </div>
                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','tuesday','breakfast','breakfast_after')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:100% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="container LuC tabt-content" id="lut">        
            <div class="box">
              <div class="cont">
                <div>
                  <div class="left">
                    <h3> Afternoon </h3>
                  </div>
                  <?php $type = "lunch" ?>
                  <div class="d-flex">
                    <?php compute($info, "lunch", "afternoon") ?>
                  </div>
                </div>
                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','tuesday','lunch','afternoon')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:100% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="container DiC tabt-content" id="dit">
            <div class="box">
              <div class="cont">
                <div>
                  <div class="left">
                    <h3>Night</h3>
                  </div>
                  <?php $type = "dinner" ?>
                  <div class="d-flex">
                    <?php compute($info, "dinner", "night") ?>
                  </div>

                </div>
                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','tuesday','dinner','night')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:100% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>
              </div>
            </div>
            <div class="box">
              <div class="cont">
                <div class="w-100">
                  <div class="left">
                    <h3>Late Night Food</h3>
                  </div>
                  <?php $type = "breaka" ?>
                  <div class="d-flex">
                    <?php compute($info, "dinner", "late_night") ?>
                  </div>
                </div>
                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','tuesday','dinner','late_night')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:70% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="container DiC tabt-content" id="snt">
            <div class="box">
              <div class="cont">
                <div>
                  <h3>High Tea and Snacks</h3>
                  <?php $type = "snacks" ?>
                  <div class="d-flex">
                    <?php compute($info, "snacks", "High Tea and Snacks") ?>
                  </div>
                </div>
                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','tuesday','snacks','High Tea and Snacks')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:100% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="demo">
            <button class="up"> <span>+ Add </span></button>
            <button class="up-right"> <span class="save"> Save Plan </span></button>
          </div>
        </div>
      </div>
      <div id="wednesday" class="tab-content" style="display:none">
        <?php $info = update($client_id, "wednesday"); ?>
        <div>
          <div class="d-flex mb-5" style="position:relative">
            <button class="btn btn-my1 px-5 m-auto Br tabw" tab="brw">Breakfast</button>
            <button class="btn btn-my1 px-5 m-auto Lu tabw" tab="luw">Lunch</button>
            <button class="btn btn-my1 px-5 m-auto Sn tabw" tab="snw">Snacks</button>
            <button class="btn btn-my1 px-5 m-auto Di tabw" tab="diw">Dinner</button>
          </div>
          <div class="container BrC tabw-content" id="brw">
            <div class="box">
              <div class="cont">
                <div>
                  <div class="left">
                    <h3> In Morning </h3>
                  </div>
                  <div class="d-flex">
                    <?php compute($info, "breakfast", "breakfast_morning") ?>
                  </div>

                </div>

                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','wednesday','breakfast','breakfast_morning')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:100% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>

              </div>
            </div>
            <div class="box">
              <div class="cont">
                <div>
                  <div class="left">
                    <h3> After Break </h3>
                  </div>
                  <?php $type = "breaka" ?>
                  <div class="d-flex">
                    <?php compute($info, "breakfast", "breakfast_after") ?>
                  </div>

                </div>
                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','wednesday','breakfast','breakfast_after')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:100% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="container LuC tabw-content" id="luw">
            <div class="box">
              <div class="cont">
                <div>
                  <div class="left">
                    <h3> Afternoon </h3>
                  </div>
                  <?php $type = "lunch" ?>
                  <div class="d-flex">
                    <?php compute($info, "lunch", "afternoon") ?>
                  </div>
                </div>
                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','wednesday','lunch','afternoon')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:100% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="container DiC tabw-content" id="diw">
            <div class="box">
              <div class="cont">
                <div>
                  <div class="left">
                    <h3>Night</h3>
                  </div>
                  <?php $type = "dinner" ?>
                  <div class="d-flex">
                    <?php compute($info, "dinner", "night") ?>
                  </div>

                </div>
                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','wednesday','dinner','night')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:100% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>
              </div>
            </div>
            <div class="box">
              <div class="cont">
                <div class="w-100">
                  <div class="left">
                    <h3>Late Night Food</h3>
                  </div>
                  <?php $type = "breaka" ?>
                  <div class="d-flex">
                    <?php compute($info, "dinner", "late_night") ?>
                  </div>
                </div>
                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','wednesday','dinner','late_night')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:70% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="container SnC tabw-content" id="snw">
            <div class="box">
              <div class="cont">
                <div>
                  <h3>High Tea and Snacks</h3>
                  <?php $type = "snacks" ?>
                  <div class="d-flex">
                    <?php compute($info, "snacks", "High Tea and Snacks") ?>
                  </div>
                </div>
                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','wednesday','snacks','High Tea and Snacks')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:100% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="demo">
            <button class="up"> <span>+ Add </span></button>
            <button class="up-right"> <span class="save"> Save Plan </span></button>
          </div>
        </div>
      </div>
      <div id="thursday" class="tab-content" style="display:none">
        <?php $info = update($client_id, "thursday"); ?>
        <div>
          <div class="d-flex mb-5" style="position:relative">
            <button class="btn btn-my1 px-5 m-auto Br tabth" tab="brth">Breakfast</button>
            <button class="btn btn-my1 px-5 m-auto Lu tabth" tab="luth">Lunch</button>
            <button class="btn btn-my1 px-5 m-auto Sn tabth" tab="snth">Snacks</button>
            <button class="btn btn-my1 px-5 m-auto Di tabth" tab="dith">Dinner</button>
          </div>
          <div class="container BrC tabth-content" id="brth">
            <div class="box">
              <div class="cont">
                <div>
                  <div class="left">
                    <h3> In Morning </h3>
                  </div>
                  <div class="d-flex">
                    <?php compute($info, "breakfast", "breakfast_morning") ?>
                  </div>

                </div>

                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','thursday','breakfast','breakfast_morning')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:100% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>

              </div>
            </div>
            <div class="box">
              <div class="cont">
                <div>
                  <div class="left">
                    <h3> After Break </h3>
                  </div>
                  <?php $type = "breaka" ?>
                  <div class="d-flex">
                    <?php compute($info, "breakfast", "breakfast_after") ?>
                  </div>

                </div>
                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','thursday','breakfast','breakfast_after')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:100% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="container LuC tabth-content" id="luth">
            <div class="box">
              <div class="cont">
                <div>
                  <div class="left">
                    <h3> Afternoon </h3>
                  </div>
                  <?php $type = "lunch" ?>
                  <div class="d-flex">
                    <?php compute($info, "lunch", "afternoon") ?>
                  </div>
                </div>
                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','thursday','lunch','afternoon')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:100% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="container DiC tabth-content" id="dith">
            <div class="box">
              <div class="cont">
                <div>
                  <div class="left">
                    <h3>Night</h3>
                  </div>
                  <?php $type = "dinner" ?>
                  <div class="d-flex">
                    <?php compute($info, "dinner", "night") ?>
                  </div>

                </div>
                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','thursday','dinner','night')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:100% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>
              </div>
            </div>
            <div class="box">
              <div class="cont">
                <div class="w-100">
                  <div class="left">
                    <h3>Late Night Food</h3>
                  </div>
                  <?php $type = "breaka" ?>
                  <div class="d-flex">
                    <?php compute($info, "dinner", "late_night") ?>
                  </div>
                </div>
                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','thursday','dinner','late_night')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:70% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="container SnC tabth-content" id="snth">
            <div class="box">
              <div class="cont">
                <div>
                  <h3>High Tea and Snacks</h3>
                  <?php $type = "snacks" ?>
                  <div class="d-flex">
                    <?php compute($info, "snacks", "High Tea and Snacks") ?>
                  </div>
                </div>
                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','thursday','snacks','High Tea and Snacks')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:100% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="demo">
            <button class="up"> <span>+ Add </span></button>
            <button class="up-right"> <span class="save"> Save Plan </span></button>
          </div>
        </div>
      </div>
      <div id="friday" class="tab-content" style="display:none">
        <?php $info = update($client_id, "friday"); ?>
        <div>
          <div class="d-flex mb-5" style="position:relative">
            <button class="btn btn-my1 px-5 m-auto Br tabf" tab="brf">Breakfast</button>
            <button class="btn btn-my1 px-5 m-auto Lu tabf" tab="luf">Lunch</button>
            <button class="btn btn-my1 px-5 m-auto Sn tabf" tab="snf">Snacks</button>
            <button class="btn btn-my1 px-5 m-auto Di tabf" tab="dif">Dinner</button>
          </div>
          <div class="container BrC tabf-content" id="brf">
            <div class="box">
              <div class="cont">
                <div>
                  <div class="left">
                    <h3> In Morning </h3>
                  </div>
                  <div class="d-flex">
                    <?php compute($info, "breakfast", "breakfast_morning") ?>
                  </div>

                </div>

                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','friday','breakfast','breakfast_morning')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:100% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>

              </div>
            </div>
            <div class="box">
              <div class="cont">
                <div>
                  <div class="left">
                    <h3> After Break </h3>
                  </div>
                  <?php $type = "breaka" ?>
                  <div class="d-flex">
                    <?php compute($info, "breakfast", "breakfast_after") ?>
                  </div>

                </div>
                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','friday','breakfast','breakfast_after')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:100% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="container LuC tabf-content" id="luf">
            <div class="box">
              <div class="cont">
                <div>
                  <div class="left">
                    <h3> Afternoon </h3>
                  </div>
                  <?php $type = "lunch" ?>
                  <div class="d-flex">
                    <?php compute($info, "lunch", "afternoon") ?>
                  </div>
                </div>
                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','friday','lunch','afternoon')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:100% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="container DiC tabf-content" id="dif">
            <div class="box">
              <div class="cont">
                <div>
                  <div class="left">
                    <h3>Night</h3>
                  </div>
                  <?php $type = "dinner" ?>
                  <div class="d-flex">
                    <?php compute($info, "dinner", "night") ?>
                  </div>

                </div>
                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','friday','dinner','night')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:100% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>
              </div>
            </div>
            <div class="box">
              <div class="cont">
                <div class="w-100">
                  <div class="left">
                    <h3>Late Night Food</h3>
                  </div>
                  <?php $type = "breaka" ?>
                  <div class="d-flex">
                    <?php compute($info, "dinner", "late_night") ?>
                  </div>
                </div>
                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','friday','dinner','late_night')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:70% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="container SnC tabf-content" id="snf">
            <div class="box">
              <div class="cont">
                <div>
                  <h3>High Tea and Snacks</h3>
                  <?php $type = "snacks" ?>
                  <div class="d-flex">
                    <?php compute($info, "snacks", "High Tea and Snacks") ?>
                  </div>
                </div>
                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','friday','snacks','High Tea and Snacks')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:100% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="demo">
            <button class="up"> <span>+ Add </span></button>
            <button class="up-right"> <span class="save"> Save Plan </span></button>
          </div>
        </div>

      </div>
      <div id="saturday" class="tab-content" style="display:none">
        <?php $info = update($client_id, "saturday"); ?>
        <div>
          <div class="d-flex mb-5" style="position:relative">
            <button class="btn btn-my1 px-5 m-auto Br tabsa" tab="brsa">Breakfast</button>
            <button class="btn btn-my1 px-5 m-auto Lu tabsa" tab="lusa">Lunch</button>
            <button class="btn btn-my1 px-5 m-auto Sn tabsa" tab="snsa">Snacks</button>
            <button class="btn btn-my1 px-5 m-auto Di tabsa" tab="disa">Dinner</button>
          </div>
          <div class="container BrC tabsa-content" id="brsa">
            <div class="box">
              <div class="cont">
                <div>
                  <div class="left">
                    <h3> In Morning </h3>
                  </div>
                  <div class="d-flex">
                    <?php compute($info, "breakfast", "breakfast_morning") ?>
                  </div>

                </div>

                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','saturday','breakfast','breakfast_morning')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:100% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>

              </div>
            </div>
            <div class="box">
              <div class="cont">
                <div>
                  <div class="left">
                    <h3> After Break </h3>
                  </div>
                  <?php $type = "breaka" ?>
                  <div class="d-flex">
                    <?php compute($info, "breakfast", "breakfast_after") ?>
                  </div>

                </div>
                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','saturday','breakfast','breakfast_after')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:100% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="container LuC tabsa-content" id="lusa">
            <div class="box">
              <div class="cont">
                <div>
                  <div class="left">
                    <h3> Afternoon </h3>
                  </div>
                  <?php $type = "lunch" ?>
                  <div class="d-flex">
                    <?php compute($info, "lunch", "afternoon") ?>
                  </div>
                </div>
                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','saturday','lunch','afternoon')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:100% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="container DiC tabsa-content" id="disa">
            <div class="box">
              <div class="cont">
                <div>
                  <div class="left">
                    <h3>Night</h3>
                  </div>
                  <?php $type = "dinner" ?>
                  <div class="d-flex">
                    <?php compute($info, "dinner", "night") ?>
                  </div>

                </div>
                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','saturday','dinner','night')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:100% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>
              </div>
            </div>
            <div class="box">
              <div class="cont">
                <div class="w-100">
                  <div class="left">
                    <h3>Late Night Food</h3>
                  </div>
                  <?php $type = "breaka" ?>
                  <div class="d-flex">
                    <?php compute($info, "dinner", "late_night") ?>
                  </div>
                </div>
                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','saturday','dinner','late_night')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:70% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="container SnC tabsa-content" id="snsa">
            <div class="box">
              <div class="cont">
                <div>
                  <h3>High Tea and Snacks</h3>
                  <?php $type = "snacks" ?>
                  <div class="d-flex">
                    <?php compute($info, "snacks", "High Tea and Snacks") ?>
                  </div>
                </div>
                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','saturday','snacks','High Tea and Snacks')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:100% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="demo">
            <button class="up"> <span>+ Add </span></button>
            <button class="up-right"> <span class="save"> Save Plan </span></button>
          </div>
        </div>
      </div>
      <div id="sunday" class="tab-content" style="display:none">
        <?php $info = update($client_id, "sunday"); ?>
        <div>
          <div class="d-flex mb-5" style="position:relative">
            <button class="btn btn-my1 px-5 m-auto Br tabsu" tab="brsu">Breakfast</button>
            <button class="btn btn-my1 px-5 m-auto Lu tabsu" tab="lusu">Lunch</button>
            <button class="btn btn-my1 px-5 m-auto Sn tabsu" tab="snsu">Snacks</button>
            <button class="btn btn-my1 px-5 m-auto Di tabsu" tab="disu">Dinner</button>
          </div>
          <div class="container BrC tabsu-content" id="brsu">
            <div class="box">
              <div class="cont">
                <div>
                  <div class="left">
                    <h3> In Morning </h3>
                  </div>
                  <div class="d-flex">
                    <?php compute($info, "breakfast", "breakfast_morning") ?>
                  </div>

                </div>

                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','sunday','breakfast','breakfast_morning')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:100% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>

              </div>
            </div>
            <div class="box">
              <div class="cont">
                <div>
                  <div class="left">
                    <h3> After Break </h3>
                  </div>
                  <?php $type = "breaka" ?>
                  <div class="d-flex">
                    <?php compute($info, "breakfast", "breakfast_after") ?>
                  </div>

                </div>
                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','sunday','breakfast','breakfast_after')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:100% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="container LuC tabsu-content" id="lusu">
            <div class="box">
              <div class="cont">
                <div>
                  <div class="left">
                    <h3> Afternoon </h3>
                  </div>
                  <?php $type = "lunch" ?>
                  <div class="d-flex">
                    <?php compute($info, "lunch", "afternoon") ?>
                  </div>
                </div>
                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','sunday','lunch','afternoon')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:100% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="container DiC tabsu-content" id="disu">
            <div class="box">
              <div class="cont">
                <div>
                  <div class="left">
                    <h3>Night</h3>
                  </div>
                  <?php $type = "dinner" ?>
                  <div class="d-flex">
                    <?php compute($info, "dinner", "night") ?>
                  </div>

                </div>
                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','sunday','dinner','night')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:100% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>
              </div>
            </div>
            <div class="box">
              <div class="cont">
                <div class="w-100">
                  <div class="left">
                    <h3>Late Night Food</h3>
                  </div>
                  <?php $type = "breaka" ?>
                  <div class="d-flex">
                    <?php compute($info, "dinner", "late_night") ?>
                  </div>
                </div>
                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','sunday','dinner','late_night')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:70% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="container SnC tabsu-content" id="snsu">
            <div class="box">
              <div class="cont">
                <div>
                  <h3>High Tea and Snacks</h3>
                  <?php $type = "snacks" ?>
                  <div class="d-flex">
                    <?php compute($info, "snacks", "High Tea and Snacks") ?>
                  </div>
                </div>
                <div class="right">
                  <button class="btn11"
                    onclick="redirectTo('<?php echo $client_id ?>','sunday','snacks','High Tea and Snacks')">+</button>
                  <img src="images/7306600-removebg-preview 2.png"
                    style="width: 20.73px,height: 24px,left: 804px,top: 220px;">
                  <h5
                    style="text-align : right , margin-right:0% , margin-left:100% , font-size: 5px , font-weight: 200; ">
                    200kcal </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="demo">
            <button class="up"> <span>+ Add </span></button>
            <button class="up-right"> <span class="save"> Save Plan </span></button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    function getQueryParams() {
      const urlSearchParams = new URLSearchParams(window.location.search);
      const params = Object.fromEntries(urlSearchParams.entries());
      return {
        day: params.day,
        course: params.course,
      };
    }

    function updateTo(day, course) {
      const queryParams = getQueryParams();
      if (queryParams.day !== day || queryParams.course !== course) {
        queryParams.day = day;
        queryParams.course = course;
        const queryString = new URLSearchParams(queryParams).toString();
        const url = `dietchart3new.php?${queryString}`;
        fetch('all_recipes_old.php')
          .then(response => response.text())
          .then(html => {
          window.history.pushState({ day, course }, null, url);
          })
          .catch(error => {
            console.error('Error:', error); 
          });
      }
    }

    function redirectTo(client_id, day, course, subcourse) {
      const form = document.createElement('form');
      form.method = 'POST';
      form.action = 'all_recipes_old.php';

      const idInput = document.createElement('input');
      idInput.type = 'hidden';
      idInput.name = 'id';
      idInput.value = client_id;

      const dayInput = document.createElement('input');
      dayInput.type = 'hidden';
      dayInput.name = 'day';
      dayInput.value = day;

      const courseInput = document.createElement('input');
      courseInput.type = 'hidden';
      courseInput.name = 'course';
      courseInput.value = course;

      const subcourseInput = document.createElement('input');
      subcourseInput.type = 'hidden';
      subcourseInput.name = 'subcourse';
      subcourseInput.value = subcourse;

      form.appendChild(idInput);
      form.appendChild(courseInput);
      form.appendChild(subcourseInput);
      form.appendChild(dayInput);

      document.body.appendChild(form);
      form.submit();

    }
    function getDayNumber(day) {
      switch (day) {
        case 'monday':
          return "brm";
        case 'tuesday':
          return "brt";
        case 'wednesday':
          return "brw";
        case 'thursday':
          return "brth";
        case 'friday':
          return "brf";
        case 'saturday':
          return "brsa";
        case 'sunday':
          return "brsu";
        default:
          return -1;
      }
    }
    function getDayNumber1(day) {
      switch (day) {
        case 'monday':
          return "tabm";
        case 'tuesday':
          return "tabt";
        case 'wednesday':
          return "tabw";
        case 'thursday':
          return "tabth";
        case 'friday':
          return "tabf";
        case 'saturday':
          return "tabsa";
        case 'sunday':
          return "tabsu";
        default:
          return -1; // return -1 for invalid input
      }
    }
    function getDayNumber2(day) {
      switch (day) {
        case 'monday':
          return 0;
        case 'tuesday':
          return 1;
        case 'wednesday':
          return 2;
        case 'thursday':
          return 3;
        case 'friday':
          return 4;
        case 'saturday':
          return 5;
        case 'sunday':
          return 6;
        default:
          return -1;
      }
    }
    function getDayNumber3(course) {
      switch (course.charAt(0)) {
        case 'b':
          return 0;
        case 'l':
          return 1;
        case 'd':
          return 2;
        case 's':
          return 3;
        default:
          return -1;
      }
    }
    const tab = document.querySelectorAll('.tab');
    tab.forEach(el => {
      el.addEventListener('click', function () {
        const id = el.getAttribute('tab');
        updateTo(id,getDayNumber(id));
        document.querySelectorAll('.tab-content').forEach(element => {
          element.style.display = 'none';
        });
        document.querySelectorAll('.BrC').forEach(element => {
          element.style.display = 'none';
        });
        document.querySelectorAll('.SnC').forEach(element => {
          element.style.display = 'none';
        });
        document.querySelectorAll('.LuC').forEach(element => {
          element.style.display = 'none';
        });
        document.querySelectorAll('.DiC').forEach(element => {
          element.style.display = 'none';
        });
        document.getElementById(id).style.display = 'flex';
        document.getElementById(id).style.flexDirection="column";
        document.getElementById(getDayNumber(id)).style.display = 'block';
      });
    });
    const queryParams = getQueryParams();
    console.log(getDayNumber2(queryParams.day));
    tab[getDayNumber2(queryParams.day)].click();
    
    const tabm=document.querySelectorAll('.tabm');
    tabm.forEach(el => {
      el.addEventListener('click', function () {
        const id = el.getAttribute('tab');
        console.log(id);
        updateTo('monday', id);
        document.querySelectorAll('.tabm-content').forEach(element => {
          element.style.display = 'none';
        });
        document.getElementById(id).style.display = 'flex';
        document.getElementById(id).style.flexDirection="column";
      });
    });

    const tabt = document.querySelectorAll('.tabt');
    tabt.forEach(el => {
      el.addEventListener('click', function () {
        const id = el.getAttribute('tab');
        updateTo('tuesday', id);
        document.querySelectorAll('.tabt-content').forEach(element => {
          element.style.display = 'none';
        });
        document.getElementById(id).style.display = 'flex';
        document.getElementById(id).style.flexDirection="column";
      });
    });

    const tabw = document.querySelectorAll('.tabw');
    tabw.forEach(el => {
      el.addEventListener('click', function () {
        const id = el.getAttribute('tab');
        updateTo('wednesday', id);
        document.querySelectorAll('.tabw-content').forEach(element => {
          element.style.display = 'none';
        });
        document.getElementById(id).style.display = 'flex';
        document.getElementById(id).style.flexDirection="column";
      });
    });

    const tabth = document.querySelectorAll('.tabth');
    tabth.forEach(el => {
      el.addEventListener('click', function () {
        const id = el.getAttribute('tab');
        updateTo('thursday', id);
        document.querySelectorAll('.tabth-content').forEach(element => {
          element.style.display = 'none';
        });
        document.getElementById(id).style.display = 'flex';
        document.getElementById(id).style.flexDirection="column";
      });
    });

    const tabf = document.querySelectorAll('.tabf');
    tabf.forEach(el => {
      el.addEventListener('click', function () {
        const id = el.getAttribute('tab');
        updateTo('friday', id);
        document.querySelectorAll('.tabf-content').forEach(element => {
          element.style.display = 'none';
        });
        document.getElementById(id).style.display = 'flex';
        document.getElementById(id).style.flexDirection="column";
      });
    });

    const tabsa = document.querySelectorAll('.tabsa');
    tabsa.forEach(el => {
      el.addEventListener('click', function () {
        const id = el.getAttribute('tab');
        updateTo('saturday', id);
        document.querySelectorAll('.tabsa-content').forEach(element => {
          element.style.display = 'none';
        });
        document.getElementById(id).style.display = 'flex';
        document.getElementById(id).style.flexDirection="column";
      });
    });

    const tabsu = document.querySelectorAll('.tabsu');
    tabsu.forEach(el => {
      el.addEventListener('click', function () {
        const id = el.getAttribute('tab');
        updateTo('sunday', id);
        document.querySelectorAll('.tabsu-content').forEach(element => {
          element.style.display = 'none';
        });
        document.getElementById(id).style.display = 'flex';
        document.getElementById(id).style.flexDirection="column";
      });
    });
    console.log(getDayNumber3(queryParams.course));
    document.querySelectorAll(getDayNumber1(queryParams.day))[getDayNumber3(queryParams.course)].click();
  </script>
</body>

</html>