<?php
if (isset($_POST['saverecipe'])) {
  $data = json_encode($_POST);
  echo $data;
  $data = json_decode($data, true);
  $client_id = $_POST['client_id'];
  $day = $_POST['day'];
  $course = $_POST['course'];
  $subcourse = $_POST['subcourse'];
  $selectedRecipeIds = $data['selectedRecipeIds'];
  $servername = "localhost";
  $user = "root";
  $password = "";
  $database = "infits";
  $conn = mysqli_connect($servername, $user, $password, $database);
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $sql = "SELECT $day FROM diet_chart WHERE client_id = $client_id";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $json = $row[$day];
  $data = json_decode($json, true);

  if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
    die("Error decoding JSON: " . json_last_error_msg());
  }

  $data[$course][$subcourse] = array_merge($data[$course][$subcourse], array_map('intval', $selectedRecipeIds));
  $result = json_encode($data);

  $sql = "UPDATE diet_chart SET $day = ? WHERE client_id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("si", $result, $client_id);
  if ($stmt->execute() === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }
  $stmt->close();
  $conn->close();
  exit;
}
if (isset($_POST['id'])  and $_POST['id'] != "") {
  $clientId = $_POST['id'];
  $course = $_POST['course'];
  $subcourse = $_POST['subcourse'];
  $day = $_POST['day'];
}
include('navbar.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>All Recipe</title>

</head>
<style>
  @font-face {
    font-family: 'NATS';
    src: url('font/NATS.ttf.woff') format('woff'),
      url('font/NATS.ttf.svg#NATS') format('svg'),
      url('font/NATS.ttf.eot'),
      url('font/NATS.ttf.eot?#iefix') format('embedded-opentype');
    font-weight: normal;
    font-style: normal;
  }

  ::placeholder {
    color: #BBBBBB;
    opacity: 1;
  }

  body {
    font-family: 'NATS', sans-serif;
    letter-spacing: 1px;
    font-weight: 400;
    margin-bottom: 2rem;
  }

  .tabcontent {
    padding: 6px 30px;
    border: none;
    border-top: none;
  }

  .searchbox {
    width: 360px;
    height: 45px;
    background: #FFFFFF;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
    padding: 10px;
  }

  .savebutton {
    width: 121px;
    height: 46px;
    background: #7282FB;
    border-radius: 8.99476px;
    color: white;
    border: none;

  }

  .addrecipe {
    width: 85px;
    height: 85px;
    color: white;
    background: #9C74F5;
    border-radius: 50%;
    padding-left: 1.5rem;
    padding-right: 1.5rem;
    font-size: 30px;


  }

  .addrecipe:hover {
    width: 85px;
    height: 85px;
    color: white;
    background: #9C74F5;
    border-radius: 50%;
    padding-left: 1.5rem;
    padding-right: 1.5rem;
    font-size: 30px;
  }

  recipe_flex {
    //padding: 20px 0;
    font-size: 15px;
    font-weight: 400px;
    height: 200px;
    width: 310px;
    border-radius: 15px;


  }

  .breakfast {
    background-color: #B5F7B9;
    border-radius: 15px;
    font-size: 20px;
    font-weight: 400px;
    height: 153px;

    width: 280px;


  }

  .lunch {
    background-color: #ffe3f5;
    border-radius: 15px;
    font-size: 20px;
    font-weight: 400px;
    height: 154px;

    width: 280px;



  }

  .snacks {
    background-color: #e1f2f9;
    border-radius: 15px;
    font-size: 20px;
    font-weight: 400px;
    height: 153px;
    width: 280px;



  }

  .dinner {
    background-color: #ffcbec;
    border-radius: 15px;
    font-size: 20px;
    font-weight: 400px;
    height: 153px;
    width: 280px;

  }

  .tag {
    margin-top: 2px;
    margin-left: 2px;
  }

  .flex-first {
    display: flex;
    flex-direction: row;
    padding: 10px;
    justify-content: space-around;
  }

  .tag-element {
    background-color: #7282FB;
    color: white;
    margin: 5px;
    padding: 5px;
    border-radius: 5px;
  }

  .search-box {
    border: none;

  }

  .search-box:focus {
    outline: none;
  }

  .search-icon {
    border: none;
    background: white;

  }

  .search-form {
    border: 1px solid #E1E1E1;
    width: fit-content;
    float: right;
    padding: 2px;
    border-radius: 5px;
  }

  .cards {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    gap: 4rem;
    grid-template-columns: repeat(3, minmax(auto, 1fr));

  }

  .card {
    color: black;
    //padding: 1rem;
    min-height: auto;
    width: 100%;
    background: #FFFFFF;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
    border-radius: 20px;
  }

  .card-upper-details {
    display: inline;
  }

  .card-upper {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
  }

  .grid-container {
    display: grid;
    grid-template-columns: auto auto auto auto;

    padding: 10px;
  }

  .grid-container>div {


    padding: 20px 0;

  }

  .update_delete {
    width: 151.28px;
    height: 129px;
    padding: 25px;
    background: #FFFFFF;
    border: 0.723941px solid #E4E4E4;
    box-shadow: 0px 2.17182px 2.89576px rgba(0, 0, 0, 0.09);
    border-radius: 13.0309px;

  }

  #update_delete {
    display: none;
  }

  .edit {
    width: 93.45px;
    height: 39.87px;
    left: 29.32px;
    top: 19.93px;
    color: white;
    background: #A85CF1;
    border-radius: 6.23011px;
    padding: 10px;
    padding-left: 30px;
  }

  .edit:hover {
    width: 93.45px;
    height: 39.87px;
    left: 29.32px;
    top: 19.93px;
    color: white;
    background: #A85CF1;
    border-radius: 6.23011px;
    padding: 10px;
    padding-left: 30px;
  }

  .delete {
    width: 93.45px;
    height: 39.87px;
    left: 29.32px;
    top: 72.27px;
    color: white;
    background: #FF3D3D;
    border-radius: 6.23012px;
    padding: 10px;
    padding-left: 25px;
  }

  .delete:hover {
    width: 93.45px;
    height: 39.87px;
    left: 29.32px;
    top: 72.27px;
    color: white;
    background: #FF3D3D;
    border-radius: 6.23012px;
    padding: 10px;
    padding-left: 25px;
  }

  .twelve {
    width: 22px;
    height: 22px;
    border-radius: 100%;
    color: white;
    padding-left: 0.5rem;
    padding-right: 0.5rem;

    background: #9C74F5;
  }

  .btn_medium {
    width: 71px;
    height: 26.09px;
    border: none;
    color: white;
    background: #9C74F5;
    border-radius: 8px;
  }

  .tick-button {
    position: absolute;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.3);
    border: none;
    cursor: pointer;
  }

  :root {
    --borderWidth: 7px;
    --height: 24px;
    --width: 12px;
    --borderColor: blue;
  }


  .check {
    display: inline-block;
    transform: rotate(45deg);
    height: var(--height);
    width: var(--width);
    border-bottom: var(--borderWidth) solid var(--borderColor);
    border-right: var(--borderWidth) solid var(--borderColor);
  }

  .checkmark {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 30px;
    color: green;
    visibility: hidden;
  }

  .checkmark.visible {
    visibility: visible;
  }

  .hidden {
    display: none;
  }

  @media screen and (max-width: 720px) {
    .searchbox {
      width: auto;
    }

    .header {
      display: flex;
      flex-direction: column !important;
      margin: 10px;
      margin-left: 20px;
    }

    .savebutton {
      width: auto;
    }

    .middle_wrapper {
      margin: 20px !important;
      margin-top: 1.5rem !important;

    }

    .grid-container {
      display: flex;
      flex-direction: column !important;
      gap: 2rem;
    }

    .cards {
      grid-template-columns: repeat(1, minmax(auto, 1fr));
    }


  }
</style>
<script>
  $(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
  });
</script>

<script>
  $(document).ready(function () {
    $("#btn1").click(function () {
      $("#breakfast1").show();
      $("#snack1").hide();

      $("#lunch1").hide();
      $("#dinner1").hide();
      $("#search").hide();

    });
  });
</script>

<script>
  $(document).ready(function () {
    $("#btn2").click(function () {
      $("#lunch1").show();
      $("#breakfast1").hide();
      $("#snack1").hide();
      $("#dinner1").hide();
      $("#search").hide();
    });
  });
</script>

<script>
  $(document).ready(function () {
    $("#btn3").click(function () {
      $("#snack1").show();
      $("#breakfast1").hide();
      $("#lunch1").hide();
      $("#dinner1").hide();
      $("#search").hide();

    });
  });
</script>

<script>
  $(document).ready(function () {
    $("#btn4").click(function () {
      $("#dinner1").show();
      $("#snack1").hide();
      $("#breakfast1").hide();
      $("#lunch1").hide();
      $("#search").hide();

    });
  });
</script>

<body>
  <br>
  <div class="header" style="display:flex ;justify-content:space-between">
    <div style="font-size:2.5rem;margin-left:2rem">Choose a recipe</div>
    <div style="margin-right:2rem;display:flex;gap:1.5rem">
      <div class="searchbox">
        <form method="post">
          <button style="background-color:white;border:none;" id="seabtn" name="seabtn"><img src="images/vec_search.png"
              alt=""></button>
          <input type="search" name="sinput" placeholder="Search recipe here"
            style="border:none;font-size:1rem;margin-left:1rem">
      </div>
      <button type="button" class="savebutton" id="save">Save</button>
      </form>
    </div>
  </div>
  <br>
  <!-------new recipe------>
  <?php
  if (isset($_POST['newadd'])) {
    echo '<meta http-equiv="refresh" content="1; URL=create_recipe.php" />';
  }
  ?>

  <div class="grid-container"
    style="display:flex; flex-direction:row;justify-content:space-evenly; cursor:pointer; margin-left:10px;">
    <div class="breakfast" id="btn1">
      <img src="images/waffle.png" style="float:right; margin-top:-20px;border-radius:10px">
      <img src="images/greenhalf1.png" style="float:left; margin-top:-20px;width: 90.01px;border-radius:10px">
      <div style="text-align:center;font-size:31px;z-index:1;margin-left:4rem;margin-top:2rem  !important">Breakfast
      </div>
      <img src="images/treebranch.png" style="float:left;border-radius:10px">
      <img src="images/greenhalf2.png" style="float:right;width: 110.01px;overflow:hidden;border-radius:10px">
    </div>

    <div class="lunch" id="btn2">
      <img src="images/lunchbox.png" style="float:right; margin-top:-20px;border-radius:10px">
      <img src="images/pinkhalf1.png" style="float:left; margin-top:-20px;width: 90.01px;border-radius:10px">
      <div style="text-align:center;font-size:31px;z-index:1;margin-left:4rem;margin-top:2rem  !important">Lunch</div>
      <img src="images/pinkbottom.png" style="float:left;border-radius:10px">
      <img src="images/pinkhalf2.png" style="float:right;width: 110.01px;overflow:hidden;border-radius:10px">
    </div>


    <div class="snacks" id="btn3">
      <img src="images/bluetop.png" style="float:right; margin-top:-20px;border-radius:10px">
      <img src="images/bluehalf1.png" style="float:left; margin-top:-20px;width: 90.01px;border-radius:10px">
      <div style="text-align:center;font-size:31px;z-index:1;margin-left:5rem;margin-top:2rem  !important">Snacks</div>
      <img src="images/bluebottom.png" style="float:left;border-radius:10px">
    </div>


    <div class="dinner" id="btn4">
      <img src="images/redtop.png" style="float:right; margin-top:-20px;border-radius:10px">
      <img src="images/redhalf1.png" style="float:left; margin-top:-20px;width: 90.01px;border-radius:10px">
      <div style="text-align:center;font-size:31px;z-index:1;margin-left:4rem;margin-top:2.2rem  !important">Dinner
      </div>
      <img src="images/redbottom.png" style="float:left;border-radius:10px;margin-top:19px">
      <img src="images/redhalf2.png"
        style="float:right;width: 110.01px;overflow:hidden;border-radius:10px;margin-top:2px">
    </div>
  </div>



  <div class="middle_wrapper"
    style="display:flex;justify-content:space-between;margin:20px;margin-left:17rem;margin-right:2.5rem">
    <span style="font-size:25px;font-weight:600">ALL Recipes</span>
    <a href="" style="background-color:none;border:nome;color: #6A6A6A;font-size:20px">View All</a>
  </div>


  <!-------------------search recipes------------>

  <div class="tabcontent" id="search" style="display:block;">
    <div class="cards">
      <!--------------Search recipes---------->
      <?php
      if (isset($_POST['seabtn'])) {
        $nam_var = $_POST['sinput'];
        $sql = "select * from dietian_recipies where name like '$nam_var%'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            if ($row['image'] == NULL) {
              //////////////////
            } else {
              $ext = explode('|', $row['image']);
              $path = $ext[1];
              $t1 = explode('|', $row['time']);
              $GLOBALS['dirid'] = $row['instruction'];

            }
            ?>


            <div class="card" style="padding:15px;">
              <div class="card-upper">
                <p id="bu" style="font-size:20px; font-weight:bold"> Recipe </p>
              </div>

              <div class="img-dis" style="height:50%; width:inherit;text-align:center;">
                <img src="<?php echo $path; ?>" alt="" title="<?php $ext[0]; ?>"
                  style="height:100%; width:70%; object-fit:cover;" />
              </div>
              <div class="card-upper" style="margin-top:1rem ;">
                <p id="nm" style="font-size:25px; font-weight:600;">
                  <?php echo $row['name']; ?>
                </p>
                <div class="wrap" style="display:flex;margin-top:0.8rem">
                  <a href="edit_recipe.php?id=<?php echo $row['recipe_id'] ?>" title="Update Record" style="color#7282FB"
                    data-toggle="tooltip">
                    <span class="fa fa-pencil" style="color:#A85CF1;"></span> </a>
                  <a onclick="return confirm('Are you sure?')" href="delete_recipe.php?id=<?php echo $row['recipe_id'] ?>"
                    title="Delete Record" style="color#7282FB" data-toggle="tooltip">
                    <span class="fa fa-trash " style="color: #FF3D3D;"></span></a>
                </div>
              </div>

              <div class="card-upper">
                <div><span class="twelve" style="margin-right:0.5rem">12</span>Steps</div>
                <div style="color: #A3A1A1;font-size:20px"><i class="fa-regular fa-clock"></i> <span
                    style="margin-bottom:1rem">
                    <?php echo ($t1[1]); ?>
                  </span></div>
              </div>
              <div class="card-upper" style="margin-top:1rem">
                <span><img src="images/calo.jpg" alt="" style="margin-right:0.3rem">
                  <?php echo $row['calories']; ?>kcal
                </span>
                <span><button class="btn_medium">Medium</button></span>

              </div>

            </div>

          <?php }
        }
      } ?>

    </div>

  </div>





  <div class="tabcontent" id="breakfast1" style="display:none;">
    <div class="cards">

      <!--------------breakfast recipes---------->
      <?php
      $sql = "SELECT * FROM dietian_recipies where `category` = 'Breakfast'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          if ($row['image'] == NULL) {
            //////////////////
          } else {
            $ext = explode('|', $row['image']);
            $path = $ext[1];
            $t1 = explode('|', $row['time']);
            $GLOBALS['dirid'] = $row['instruction'];

          }
          ?>


          <div class="card" container style="padding:15px;" data-recipe-id=<?php echo $row['recipe_id'] ?>>
            <!-- <div class="card" container style="padding:15px;" onClick="myfunction()"> -->
            <div class="card-upper">
              <p id="bu" style="font-size:20px; font-weight:bold"> Breakfast </p>
            </div>

            <div class="img-dis" style="height:50%; width:inherit;text-align:center;">
              <img src="images/Screenshot__136_-removebg-preview 6.png" alt="" title="<?php $ext[0]; ?>"
                style="height:100%; width:70%; object-fit:cover;border:none" />
            </div>
            <div class="card-upper" style="margin-top:1rem ;">
              <p id="nm" style="font-size:25px; font-weight:600;">
                <?php echo $row['name']; ?>
              </p>
              <div class="wrap" style="display:flex;margin-top:0.8rem">
                <!-- ---<button id="threedots" style="background-color:white;border:none"><i class="fa-solid fa-ellipsis-vertical" style="margin-top:1rem"></i></button>
                <div id="update_delete">
                <div class="update_delete" style="display:flex;flex-direction:column;gap:0.5rem;" >
            <a class="edit" href="">Edit</a>
                <a class="delete" href="">Delete</a>
            </div>
                </div>
                <script>
                  var modal = document.getElementById("update_delete");
                  var btn = document.getElementById("threedots");
                  btn.onclick = function() {
                        modal.style.display = "block";
                        btn.style.display = "none";
                  }
                        
                </script> ----- -->
                <a href="edit_recipe.php?id=<?php echo $row['recipe_id'] ?>" title="Update Record" style="color#7282FB"
                  data-toggle="tooltip">
                  <span class="fa fa-pencil" style="color:#A85CF1;"></span> </a>
                <a onclick="return confirm('Are you sure?')" href="delete_recipe.php?id=<?php echo $row['recipe_id'] ?>"
                  title="Delete Record" style="color#7282FB" data-toggle="tooltip">
                  <span class="fa fa-trash " style="color: #FF3D3D;"></span></a>
              </div>
            </div>


            <div class="card-upper">
              <div><span class="twelve" style="margin-right:0.5rem">12</span>Steps</div>
              <div style="color: #A3A1A1;font-size:20px">
                <i class="fa-regular fa-clock"></i>
                <span style="margin-bottom:1rem">
                  <?php echo ($t1[1]); ?>
                </span>
              </div>
            </div>
            <div class="card-upper" style="margin-top:1rem">
              <span><img src="images/calo.jpg" alt="" style="margin-right:0.3rem">
                <?php echo $row['calories']; ?>kcal
              </span>
              <span><button class="btn_medium">Medium</button></span>

            </div>

          </div>

        <?php }
      } ?>

    </div>




  </div>




  <!--------------lunch recipes---------->


  <div class="tabcontent" id="lunch1" style="display:none;">
    <div class="cards">

      <?php
      $sql = "SELECT * FROM dietian_recipies where `category` = 'Lunch'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          if ($row['image'] == NULL) {
            //////////////////
          } else {
            $ext = explode('|', $row['image']);
            $path = $ext[1];
            $t1 = explode('|', $row['time']);
            $GLOBALS['dirid'] = $row['instruction'];

          }
          ?>


          <div class="card" container style="padding:15px" data-recipe-id=<?php echo $row['recipe_id'] ?>>
            <div class="card-upper">
              <p id="bu" style="font-size:20px; font-weight:bold"> Lunch</p>
            </div>

            <div class="img-dis" style="height:50%; width:inherit;text-align:center;">
              <img src="images/Screenshot__136_-removebg-preview 6.png" alt="" title="<?php $ext[0]; ?>"
                style="height:80%; width:70%; object-fit:cover;" />
            </div>
            <div class="card-upper" style="margin-top:1rem ;">
              <p id="nm" style="font-size:25px; font-weight:600;">
                <?php echo $row['name']; ?>
              </p>
              <div class="wrap" style="display:flex;margin-top:0.8rem">
                <a href="edit_recipe.php?id=<?php echo $row['recipe_id'] ?>" title="Update Record" style="color#7282FB"
                  data-toggle="tooltip">
                  <span class="fa fa-pencil" style="color:#A85CF1;"></span> </a>
                <a onclick="return confirm('Are you sure?')" href="delete_recipe.php?id=<?php echo $row['recipe_id'] ?>"
                  title="Delete Record" style="color#7282FB" data-toggle="tooltip">
                  <span class="fa fa-trash " style="color: #FF3D3D;"></span></a>
              </div>
            </div>


            <div class="card-upper">
              <div><span class="twelve" style="margin-right:0.5rem">12</span>Steps</div>
              <div style="color: #A3A1A1;font-size:20px"><i class="fa-regular fa-clock"></i> <span
                  style="margin-bottom:1rem">
                  <?php echo ($t1[1]); ?>
                </span></div>
            </div>
            <div class="card-upper" style="margin-top:1rem">
              <span><img src="images/calo.jpg" alt="" style="margin-right:0.3rem">
                <?php echo $row['calories']; ?>kcal
              </span>
              <span><button class="btn_medium">Medium</button></span>

            </div>

          </div>
        <?php }
      } ?>

    </div>

  </div>



  <!--------------Snacks recipes---------->
  <div class="tabcontent" id="snack1" style="display:none;">
    <div class="cards">


      <?php
      $sql = "SELECT * FROM dietian_recipies where `category` = 'snacks'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          if ($row['image'] == NULL) {
            //////////////////
          } else {
            $ext = explode('|', $row['image']);
            $path = $ext[1];
            $t1 = explode('|', $row['time']);
            $GLOBALS['dirid'] = $row['instruction'];

          }
          ?>


          <div class="card" container style="padding:15px;" data-recipe-id=<?php echo $row['recipe_id'] ?>>
            <div class="card-upper">
              <p id="bu" style="font-size:20px; font-weight:bold"> Snacks </p>
            </div>
            <div class="img-dis" style="height:50%; width:inherit;text-align:center;">
              <img src="images/Screenshot__136_-removebg-preview 6.png" alt="" title="<?php $ext[0]; ?>"
                style="height:100%; width:70%; object-fit:cover;" />
            </div>
            <div class="card-upper" style="margin-top:1rem ;">
              <p id="nm" style="font-size:25px; font-weight:600px;">
                <?php echo $row['name']; ?>
              </p>
              <div class="wrap" style="display:flex;margin-top:0.8rem">
                <a href="edit_recipe.php?id=<?php echo $row['recipe_id'] ?>" title="Update Record" style="color#7282FB"
                  data-toggle="tooltip">
                  <span class="fa fa-pencil" style="color:#A85CF1;"></span> </a>
                <a onclick="return confirm('Are you sure?')" href="delete_recipe.php?id=<?php echo $row['recipe_id'] ?>"
                  title="Delete Record" style="color#7282FB" data-toggle="tooltip">
                  <span class="fa fa-trash " style="color: #FF3D3D;"></span></a>
              </div>
            </div>

            <div class="card-upper">
              <div><span class="twelve" style="margin-right:0.5rem">12</span>Steps</div>
              <div style="color: #A3A1A1;font-size:20px"><i class="fa-regular fa-clock"></i> <span
                  style="margin-bottom:1rem">
                  <?php echo ($t1[1]); ?>
                </span></div>
            </div>
            <div class="card-upper" style="margin-top:1rem">
              <span><img src="images/calo.jpg" alt="" style="margin-right:0.3rem">
                <?php echo $row['calories']; ?>kcal
              </span>
              <span><button class="btn_medium">Medium</button></span>

            </div>

          </div>
        <?php }
      } ?>

    </div>

  </div>



  <!--------------Snacks recipes---------->
  <div class="tabcontent" id="dinner1" style="display:none;">
    <div class="cards">


      <?php
      $sql = "SELECT * FROM dietian_recipies where `category` = 'Dinner'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          if ($row['image'] == NULL) {
            //////////////////
          } else {
            $ext = explode('|', $row['image']);
            $path = $ext[1];
            $t1 = explode('|', $row['time']);
            $GLOBALS['dirid'] = $row['instruction'];

          }
          ?>


          <div class="card" container style="padding:15px;" data-recipe-id=<?php echo $row['recipe_id'] ?>>
            <div class="card-upper">
              <p id="bu" style="font-size:20px; font-weight:bold;"> Dinner </p>
            </div>

            <div class="img-dis" style="height:50%; width:inherit;text-align:center;">
              <img src="images/Screenshot__136_-removebg-preview 6.png" alt="" title="<?php $ext[0]; ?>"
                style="height:100%; width:70%; object-fit:cover;" />
            </div>
            <div class="card-upper" style="margin-top:1rem ;">
              <p id="nm" style="font-size:25px; font-weight:600;""> <?php echo $row['name']; ?> </p>
              <div class=" wrap"style="display:flex;margin-top:0.8rem">
                <a href="edit_recipe.php?id=<?php echo $row['recipe_id'] ?>" title="Update Record" style="color#7282FB"
                  data-toggle="tooltip">
                  <span class="fa fa-pencil" style="color:#A85CF1;"></span> </a>
                <a onclick="return confirm('Are you sure?')" href="delete_recipe.php?id=<?php echo $row['recipe_id'] ?>"
                  title="Delete Record" style="color#7282FB" data-toggle="tooltip">
                  <span class="fa fa-trash " style="color: #FF3D3D;"></span></a>
            </div>
          </div>
          <div class="card-upper">
            <div><span class="twelve" style="margin-right:0.5rem">12</span>Steps</div>
            <div style="color: #A3A1A1;font-size:20px"><i class="fa-regular fa-clock"></i> <span style="margin-bottom:1rem">
                <?php echo ($t1[1]); ?>
              </span></div>
          </div>
          <div class="card-upper" style="margin-top:1rem">
            <span><img src="images/calo.jpg" alt="" style="margin-right:0.3rem">
              <?php echo $row['calories']; ?>kcal
            </span>
            <span><button class="btn_medium">Medium</button></span>

          </div>

        </div>

      <?php }
      } ?>

  </div>
  </div>
  <div style="margin-left:93.5%;margin-top:2rem;">
    <a href="create_recipe.php" class="addrecipe">+</a>
  </div>


  <script>
    const recipeCardElements = document.querySelectorAll('.card');
    let selectedRecipeIds;
    recipeCardElements.forEach(recipeCard => {
      const recipeId = recipeCard.getAttribute('data-recipe-id');
      recipeCard.addEventListener('click', () => {
        let tickButton = recipeCard.querySelector('.tick-button');
        if (tickButton) {
          recipeCard.removeChild(tickButton);
          recipeCard.classList.remove('selected');
        } else {
          tickButton = document.createElement('button');
          tickButton.className = 'tick-button';
          tickButton.setAttribute('aria-label', `Select recipe ${recipeId}`);
          tickButton.innerHTML = '<span class="tick-icon check"></span>';
          recipeCard.appendChild(tickButton);
          recipeCard.classList.add('selected');
        }
        selectedRecipeIds = Array.from(document.querySelectorAll('.card.selected')).map(recipeCard => recipeCard.getAttribute('data-recipe-id'));
        console.log(`Selected recipe IDs: ${selectedRecipeIds.join(', ')}`);
        console.log(selectedRecipeIds);
      });

    });

    const savebutton = document.getElementById('save');
    savebutton.addEventListener('click', () => {
      const client_id = <?php echo $clientId ?>;
      const day = '<?php echo $day ?>';
      const course = '<?php echo $course ?>';
      const subcourse = '<?php echo $subcourse ?>';
      const saverecipe = true;

      $.ajax({
        url: "all_recipes_old.php",
        type: "POST",
        data: {
          client_id: client_id,
          day: day,
          course: course,
          subcourse: subcourse,
          saverecipe: saverecipe,
          selectedRecipeIds: selectedRecipeIds
        },
        success: function (response) {
          console.log(response);
          const updatedUrl = `dietchart3new.php?day=${day}&course=${course}`;
          window.location.href = updatedUrl;
        },
        error: function (xhr, status, error) {
          console.log("Error: " + error);
        }
      });

    })
  </script>
</body>

</html>