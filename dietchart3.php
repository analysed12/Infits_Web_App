
<?php include('navbar.php'); ?>
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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="dietchart3_style.css" />
    <title>Infits</title>


  
  </head>
  <style>
    @import url("https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic");
@font-face {
  font-family: "NATS";
  src: url("font/NATS.ttf.woff") format("woff"),
    url("font/NATS.ttf.svg#NATS") format("svg"), url("font/NATS.ttf.eot"),
    url("font/NATS.ttf.eot?#iefix") format("embedded-opentype");
  font-weight: normal;
  font-style: normal;
}
body {
  font-family: "NATS", sans-serif !important;
}

.main__container {
  overflow: hidden;
}
.heading__div {

  margin-top: 2rem;
  margin-left:1rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0px 20.3px;
}

.newDietChart__heading__div {
  display: flex;
  justify-content: center;
  align-items: center;
}
.New_Diet_Chart {
  font-size: 44px;
  font-style: Regular;
}
.edit__icon {
  margin-left: 25px;
  cursor: pointer;
}
.Ronald_Richards {
  margin-top: -10px;
  font-size: 33px;
  font-style: Regular;
  color: #cbcbcb;
}
.heading__rightDiv {
  display: flex;
  justify-content: center;
  align-items: center;
}
.heathyDiet__btn {
  background: #9c74f5;
  border-radius: 10px;
  color: #ffffff;
  padding: 7px 20px;
  border: none;
  font-family: "NATS";
  font-style: normal;
  font-weight: 400;
  font-size: 30px;
}
.heading__rightDiv_icon {
  margin-left: 14px;
  cursor: pointer;
}

/* weeks_div */

.weeks_div {
  display: flex;
  justify-content: space-evenly;
  width: 70%;
  margin: 0 auto;
  overflow-y: hidden;
}
.week__name {
  margin-top: 5px;
  font-style: Regular;
  font-size: 26.42px;
  padding: 0 9px;
  border-radius: 12px;
  transition: 0.2s ease-in-out;
  cursor: pointer;
}
.week__name:hover {
  color: #fff;
  background: linear-gradient(
    180deg,
    #9c74f5 0%,
    rgba(104, 125, 238, 0.52) 100%
  );
}

/* options__div */
.options__div {
  width: 80%;
  margin: 20px auto;
  overflow-y: hidden;
  display: flex;
  justify-content: space-evenly;
  align-items: center;
}
.options__btn {
  font-family: "Poppins";
  font-style: normal;
  font-weight: 500;
  font-size: 19.3714px;
  background: #fff;
  border: 0.880519px solid #9c74f5;
  border-radius: 10px;
  padding: 10px 35px;
  color: #9c74f5;
}

.options__btn:focus {
  background-color: #9c74f5;
  color: #fff;
}
.options__btn:active {
  background-color: #9c74f5;
  color: #fff;
}
.options__btn:hover {
  background-color: #9c74f5;
  color: #fff;
}

/* foodCard__div */
.foodCard__div {
  padding: 30px 25px;
  width: 80%;
  margin: 20px auto;
  overflow-y: hidden;
  background: #ffffff;
  box-shadow: 0px 7.04415px 21.1324px rgba(176, 190, 197, 0.32),
    0px 2.64156px 4.40259px rgba(176, 190, 197, 0.32);
  border-radius: 15px;
}
.foodCart__topDiv {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.topDiv__heading {
  font-family: "Poppins";
  font-style: normal;
  font-weight: 500;
  font-size: 26.4156px;
}
.calDiv {
  display: flex;
  justify-content: start;
  align-items: start;
}
.cal__icon {
  padding-right: 7px;
}
.cal__h3 {
  font-family: "Poppins";
  font-style: normal;
  font-size: 20px;
  font-weight: 400;
  color: #a6a1a1;
}
.foodCards__wrapper {
  display: flex;
  overflow-x: auto;
  overflow-y: hidden;
}
.foodCard {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin: 0px 7px;
}
.foodCard img {
  border-radius: 10px;
  border: 1px solid rgba(156, 116, 245, 1);
}

.foodName {
  font-family: "NATS";
  font-style: normal;
  font-weight: 400;
  font-size: 25px;
  margin-top: 5px;
}

/* addANote__wrapper */

.addANote__wrapper {
  width: 80%;
  margin: 15px auto;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.leftDiv__wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  background: #ffffff;
  padding: 8px 15px;
  box-shadow: 0px 7.04415px 21.1324px rgba(176, 190, 197, 0.32),
    0px 2.64156px 4.40259px rgba(176, 190, 197, 0.32);
  border-radius: 8.80519px;
  cursor: pointer;
}
.leftDiv__wrapper button {
  border: none;
  background: transparent;
  font-family: "NATS";
  font-style: normal;
  font-weight: 400;
  font-size: 25px;
}
.right__btn {
  background: #9c74f5;
  border-radius: 10px;
  font-family: "NATS";
  font-style: normal;
  font-weight: 400;
  font-size: 30px;
  color: #f8f8f8;
  padding: 5px 25px;
  border: none;
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (max-width: 600px) {
  .heading__div {
    padding: 0px 10.3px;
  }
  .New_Diet_Chart {
    font-size: 35px;
    font-style: Regular;
  }
  .edit__icon {
    margin-left: 10px;
    cursor: pointer;
  }
  .Ronald_Richards {
    margin-top: -10px;
    font-size: 23px;
    font-style: Regular;
    color: #cbcbcb;
  }

  .heathyDiet__btn {
    font-size: 22px;
    padding: 7px 7px;
  }
  .heading__rightDiv_icon {
    margin-left: 7px;
    cursor: pointer;
  }

  .weeks_div {
    width: 95%;
  }
  .options__div {
    width: 96%;
  }
  .options__btn {
    padding: 5px 10px;
  }
  .foodCard__div {
    padding: 25px 20px;
    width: 97%;
  }

  .addANote__wrapper {
    width: 97%;
  }
}
/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (max-width: 720px) {
  .weeks_div {
    width: 95%;
  }
  .options__div {
    width: 96%;
  }
  .options__btn {
    padding: 5px 10px;
  }
  .foodCard__div {
    padding: 25px 20px;
    width: 97%;
  }

  .addANote__wrapper {
    width: 97%;
  }
}

  </style>
  <body>
    <div class="main__container">
      <?php $client_id = 2 ?>
      <!-- heading starts here... -->
      <div class="heading__div">
        <div class="heading__leftDiv">
          <div class="newDietChart__heading__div">
          
            <h1 class='New_Diet_Chart' contenteditable="true" style="font-size:40px">New Diet Chart</h1>
            <span class='edit__icon'>
              <svg
                width="19"
                height="19"
                viewBox="0 0 19 19"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M17.71 5.03859C18.1 4.64859 18.1 3.99859 17.71 3.62859L15.37 1.28859C15 0.898594 14.35 0.898594 13.96 1.28859L12.12 3.11859L15.87 6.86859M0 15.2486V18.9986H3.75L14.81 7.92859L11.06 4.17859L0 15.2486Z"
                  fill="black"
                />
              </svg>
            </span>
          </div>
          <h2 class='Ronald_Richards'style="font-size:33px">Ronald Richards</h2>
        </div>
        <div class="heading__rightDiv">
          <button class="heathyDiet__btn">Heathy Diet</button>
          <span class='heading__rightDiv_icon'>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M11.9999 17.832C12.3305 17.832 12.6078 17.72 12.8318 17.496C13.055 17.2728 13.1666 16.9959 13.1666 16.6654V11.9695C13.1666 11.639 13.055 11.3668 12.8318 11.1529C12.6078 10.939 12.3305 10.832 11.9999 10.832C11.6694 10.832 11.3925 10.9436 11.1693 11.1669C10.9453 11.3909 10.8333 11.6681 10.8333 11.9987V16.6945C10.8333 17.0251 10.9453 17.2973 11.1693 17.5112C11.3925 17.7251 11.6694 17.832 11.9999 17.832ZM11.9999 8.4987C12.3305 8.4987 12.6078 8.3867 12.8318 8.1627C13.055 7.93948 13.1666 7.66259 13.1666 7.33203C13.1666 7.00148 13.055 6.7242 12.8318 6.5002C12.6078 6.27698 12.3305 6.16537 11.9999 6.16537C11.6694 6.16537 11.3925 6.27698 11.1693 6.5002C10.9453 6.7242 10.8333 7.00148 10.8333 7.33203C10.8333 7.66259 10.9453 7.93948 11.1693 8.1627C11.3925 8.3867 11.6694 8.4987 11.9999 8.4987ZM11.9999 23.6654C10.386 23.6654 8.86936 23.3589 7.44992 22.746C6.03048 22.1339 4.79575 21.3029 3.74575 20.2529C2.69575 19.2029 1.8647 17.9681 1.25259 16.5487C0.639697 15.1293 0.333252 13.6126 0.333252 11.9987C0.333252 10.3848 0.639697 8.86814 1.25259 7.4487C1.8647 6.02925 2.69575 4.79453 3.74575 3.74453C4.79575 2.69453 6.03048 1.86309 7.44992 1.2502C8.86936 0.638087 10.386 0.332031 11.9999 0.332031C13.6138 0.332031 15.1305 0.638087 16.5499 1.2502C17.9694 1.86309 19.2041 2.69453 20.2541 3.74453C21.3041 4.79453 22.1351 6.02925 22.7473 7.4487C23.3601 8.86814 23.6666 10.3848 23.6666 11.9987C23.6666 13.6126 23.3601 15.1293 22.7473 16.5487C22.1351 17.9681 21.3041 19.2029 20.2541 20.2529C19.2041 21.3029 17.9694 22.1339 16.5499 22.746C15.1305 23.3589 13.6138 23.6654 11.9999 23.6654ZM11.9999 21.332C14.586 21.332 16.7883 20.4232 18.6068 18.6055C20.4244 16.7871 21.3333 14.5848 21.3333 11.9987C21.3333 9.41259 20.4244 7.21031 18.6068 5.39186C16.7883 3.5742 14.586 2.66536 11.9999 2.66536C9.41381 2.66536 7.21192 3.5742 5.39425 5.39186C3.57581 7.21031 2.66659 9.41259 2.66659 11.9987C2.66659 14.5848 3.57581 16.7871 5.39425 18.6055C7.21192 20.4232 9.41381 21.332 11.9999 21.332Z" fill="#9C74F5"/>
              </svg>

          </span>
        </div>
      </div>
       <!-- ....heading starts end -->

<!-- weeks div start.... -->
    <div class='weeks_div'>
      <span class='week__name'>Mon</span>
      <span class='week__name'>Tus</span>
      <span class='week__name'>Wed</span>
      <span class='week__name'>Thu</span>
      <span class='week__name'>Fri</span>
      <span class='week__name'>Sat</span>
      <span class='week__name'>Sun</span>
    </div>
 <!-- ....weeks div end -->

  <!-- options start... -->
    <?php $info = update($client_id, "monday"); ?>    
    <div class="options__div " id='nav-tab' role='tablist'>
      <!-- Breakfast -->
      <button class='options__btn nav-link active' id="nav-breakfast-tab" data-bs-toggle="tab" data-bs-target="#nav-breakfast" type="button" role="tab" aria-controls="nav-breakfast" aria-selected="true"  >Breakfast</button>
      <!-- lunch -->
      <button class='options__btn nav-link ' id="nav-lunch-tab" data-bs-toggle="tab" data-bs-target="#nav-lunch" type="button" role="tab" aria-controls="nav-lunch" aria-selected="false"  data-toggle='tab'>Lunch</button>
      <!-- snack -->
      <button class='options__btn nav-link ' id="nav-snack-tab" data-bs-toggle="tab" data-bs-target="#nav-snack" type="button" role="tab" aria-controls="nav-snack" aria-selected="false"  data-toggle='tab'>Snack</button>
      <!-- dinner -->
      <button class='options__btn nav-link ' id="nav-dinner-tab" data-bs-toggle="tab" data-bs-target="#nav-dinner" type="button" role="tab" aria-controls="nav-dinner" aria-selected="false"  data-toggle='tab'>Dinner</button>
    </div>
  <!-- ...options end -->

    <!-- note divs/tabs start... -->   
        <div class="tab-content" id="nav-tabContent">

              <!-- breakfast -->

              <div class=" tab-pane fade show active" id="nav-breakfast" role="tabpanel" aria-labelledby="nav-breakfast-tab" tabindex="0" >
                <div class="foodCard__div">
                  <div class="foodCart__topDiv">
                    <h1 class='topDiv__heading'>In Morning</h1>
                    <div class="calDiv">
                      <span class='cal__icon'>
                        <svg width="21" height="24" viewBox="0 0 21 24" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <rect width="20.7343" height="24" rx="10" fill="url(#pattern0)"/>
                          <defs>
                          <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                          <use xlink:href="#image0_10989_6900" transform="matrix(0.00904299 0 0 0.0078125 -0.0787513 0)"/>
                          </pattern>
                          <image id="image0_10989_6900" width="128" height="128" xlink:href="data:image/png;base64,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"/>
                          </defs>
                        </svg>
                      </span>
                    <h3 class='cal__h3'>200 Kcal </h3>
                    </div>
                  </div>
                  <div class='foodCards__wrapper tab-pane fabe'>        
                    <?php compute($info, "breakfast", "breakfast_morning") ?>
                    <!-- add more div or u can say button -->
                    <div onclick="redirectTo('<?php echo $client_id ?>','monday','breakfast','breakfast_morning') ">
                      <img src="images/dietchart3Add.svg
                      " alt="foodImg">        
                    </div>
                  </div>
                </div>
                <!--  -->
                <div class="foodCard__div">
                  <div class="foodCart__topDiv">
                    <h1 class='topDiv__heading'>After break</h1>
                    <div class="calDiv">
                      <span class='cal__icon'>
                        <svg width="21" height="24" viewBox="0 0 21 24" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <rect width="20.7343" height="24" rx="10" fill="url(#pattern0)"/>
                          <defs>
                          <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                          <use xlink:href="#image0_10989_6900" transform="matrix(0.00904299 0 0 0.0078125 -0.0787513 0)"/>
                          </pattern>
                          <image id="image0_10989_6900" width="128" height="128" xlink:href="data:image/png;base64,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"/>
                          </defs>
                        </svg>
                      </span>
                    <h3 class='cal__h3'>200 Kcal </h3>
                    </div>
                  </div>
                  <?php $type = "breaka" ?>
                  <div class='foodCards__wrapper'>        
                    <?php compute($info, "breakfast", "breakfast_after") ?>
                    <!-- add more div or u can say button -->
                    <div onclick="redirectTo('<?php echo $client_id ?>','monday','breakfast','breakfast_after')">
                      <img src="images/dietchart3Add.svg
                      " alt="foodImg">        
                    </div>
                  </div>
                </div>
              </div>

              <!-- lunch -->

            <div class=" tab-pane fade" id="nav-lunch" role="tabpanel" aria-labelledby="nav-lunch-tab" tabindex="0">
              <!-- loop this div to get another food box wrapper -->
              <div class="foodCard__div">
                  <div class="foodCart__topDiv">
                    <h1 class='topDiv__heading'>Afternoon</h1>
                    <div class="calDiv">
                      <span class='cal__icon'>
                        <svg width="21" height="24" viewBox="0 0 21 24" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <rect width="20.7343" height="24" rx="10" fill="url(#pattern0)"/>
                          <defs>
                          <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                          <use xlink:href="#image0_10989_6900" transform="matrix(0.00904299 0 0 0.0078125 -0.0787513 0)"/>
                          </pattern>
                          <image id="image0_10989_6900" width="128" height="128" xlink:href="data:image/png;base64,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"/>
                          </defs>
                        </svg>
                      </span>
                    <h3 class='cal__h3'>200 Kcal </h3>
                    </div>
                  </div>
                  <?php $type = "lunch" ?>
                  <div class='foodCards__wrapper'>
                    <?php compute($info, "lunch", "afternoon") ?>

                    <!-- add more button -->
                    <div  onclick="redirectTo('<?php echo $client_id ?>','monday','lunch','afternoon')">
                      <img src="images/dietchart3Add.svg
                      " alt="foodImg">        
                    </div>
                  </div>
              </div>
            </div>

            <!-- snack -->
            <div class=" tab-pane fade" id="nav-snack" role="tabpanel" aria-labelledby="nav-snack-tab" tabindex="0">
              <div class="foodCard__div">
                  <div class="foodCart__topDiv">
                    <h1 class='topDiv__heading'>High Tea and snack</h1>
                    <div class="calDiv">
                      <span class='cal__icon'>
                        <svg width="21" height="24" viewBox="0 0 21 24" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <rect width="20.7343" height="24" rx="10" fill="url(#pattern0)"/>
                          <defs>
                          <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                          <use xlink:href="#image0_10989_6900" transform="matrix(0.00904299 0 0 0.0078125 -0.0787513 0)"/>
                          </pattern>
                          <image id="image0_10989_6900" width="128" height="128" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAYAAADDPmHLAAAAAXNSR0IArs4c6QAAHi5JREFUeF7tXXtcE1f2712TQHgjKmpV1Np3tcVHbdXq70cfuj/brnX7sNpatyh2MA8gQVAQAUHCG5LIqK1t19p2t93u2ipWq213rVV3qVVR66pUUUQQi6IQHpNx736uv8x8LrcJJGFmAgj/MXPn3HPOPblz5zy+B9zR93dbawDc1tL3CX9HnwHc5kbQZwB9BnCba+A2F79vB+gzgNtcAx2IDyEc1NLSklBeXv6KQqG4OXbs2D/I5fJvepPG+nYAO6sJIRxmsVjSTSbT6+fPn5dxQ6KioirHjx8/qs8AepMGCFna2tqSTCbT6oqKCrk9MWmaDgQA3OgtKujbAWwrabVanzl+/PjGDRs2hHW0uCaTaYpcLj/QZwC9RAMQQsX169c/TExMfNGeSGPGjLHiu4HRaIxSKBRv9xLxb29HEITwofLy8i9omv7Vez0qKurCQw89tBpCOFyr1aZzC15QUFDo4+MT12cAPVwDLMu+VlRU9C75rh87dmxbZGRkspeXVz4AAFqt1qfVavVXnLhr1qzZM3DgwKd7uPg8+7flGaClpWVNbGxsMrmIiYmJP4aFhc0DAJzh7kEIgyiKusb9P3369Mb58+cH9BlAD9VAY2Pj2/Hx8YsJ9mFhYeEapVK52p5Y+/btu7Rly5Yh3D2apscDAA73UBW0Y/u22gFu3Ljx/vLly9/ANRAREdE4d+7cV2Qy2ZeOFrShoeGzxMTEudz9oqIivbe3d36fAfQgDTQ1Nb2n1+sX4Sy/9tprNVOnTo0AAPy7I1EYhlmi0Wg2cmMyMzO/DAkJ+b8eJL5DVm+LHaClpSUtNjY2BddCdHT0z2PHjn0CAFDT2UJCCO+kKOoiN27SpEnNkZGRvp091xPu93oDYBjmDxqN5l18MZYuXVr5yCOPPAYAuOzsIp04ceK0yWS6mxtvNpuflclkpc4+313H9WoDgBBONBgMB3B/vm3bn+DMLx9ftObm5sK4uLgY7lpOTs4HAQEBC7vrwjrLV681AAih/MiRI2dw1254eHhLVFTUFADAEWcVxI2DEE6gKOoH7v9Zs2ZdnzNnTpCrdLrb+F5rAPX19aVJSUn8Qc3X1/c/2dnZz8lksh3uLsLRo0fP0TQ9knveZDI9I5fLd7tLrzs81ysNgGGYpRqNZj2u4MLCwkylUvkr548ri9DS0pIRGxubhL0GtgQEBLzuCo3uNrbXGQCE0H/79u0XSktL+e05JSVl/9ChQ6d2VfkQwnspiuI/GW2vlAAAANtV2p56vtcZQENDw6d4ZO+ZZ5658cILL9wNAKgTQsmnT5/+qaCg4H7sa+BVmUz2JyFoe4JGrzIAMnCDFCp0+BYljGi12gxusTIyMnYNGDBglicWT4g5e5UBnDlz5kR+fv4DnGLS0tL2hoaGzhBCUdjXwAiKos5z/4eEhNzMyMgIAQBcF3IeqWj1GgNgWXa+SqX6kFMcOvXn5eWNAwCcEFqZFy5c+GHt2rUTOLpGo1GlUCjWCT2PFPR6jQGUl5f/XFJSMppTWl5e3iY/Pz8y6ieIThmG0Wo0miKO2MqVK38YMWLEJEGIS0ykVxgA6e5Fvvo333xzJADgihj6hBAO0Ov1ly0Wy284+jRNDwcA8PECMeYVg2avMICff/75WG5u7kOcgqRI27p8+fLXq1evjuDmLC4uTvHy8lojxiKJSbPHGwCE8HGKovZzSgoLC2MTExPDAACXxFQcwzCLNBrNe9wcMTExp++77757xZxTDNo93gDIZI3c3NyP/P39F4ihLJwmhNC7pKSk4dixY17Ya2Coq0EmsfnsjH6PNgCUr2cwGK7g0T6apsPdCfZ0pih7969evfr5ypUrn8e+BqIVCgXtDi1PPeMRA4AQjq6oqPiiurp64KRJkz718fEpAACcdVUJra2tMTExMYXcczqd7sTdd9/NnwVcpefqeJZl31CpVO9zz/XETCGPGMCVK1e+XLVqFe49gwaD4bPAwMDlAIBzzi5EdXX1wTVr1kzGfoGxCoWC/zxzlo674yCE/SmK+uWOO/6/vgKllC9btszbXXqeeM4jBvDjjz+e37hx4whSYHSA02q1hUqlMgHl5HekEFu69lVO+aiCR6fThQIA+BRuKRR6/vz5Q1lZWeO5uUwm0yy5XL5LirmFmMMjBvDJJ5/c+Oabb/wdCUBRVOW4ceNeBAAccjSGYZi3NBoN/75ds2bN1wMHDnxKCKW4QqO1tTUnJiYmnnsmLy/P6Ofnp3WFhifHesQA3nrrrQ5/3UghaDfQ6XRoSzfbU1Btbe3fU1NTeT+/0WjUKBQKk9TKZFn2tyqVik8ySUpK+mH48OGdegVR4OrgwYMfAAD+M3ny5Dc8lVgiuQEg0AWKovhkzHnz5tVNmzZt8cmTJwvXrVt3F7mA+fn5Jb6+vsvI63l5eQxe1kXT9AgAQJXUBgAhVFIUZcFfRXq9XtHJ60u2ffv2utLS0mA0buHChdVTpkwZJjXvaD5PGMAjFEXxVTUJCQnlo0aNehgx09zcnBcXF4cKL9vxRSZgQggfoyiKL9GOjY09de+9997nCQWiOU+dOvXvwsJC3gnUWeVQS0tLVmxsbCLOL03TfgAAZEiS/kluAOSWScbTrVbrk6WlpZ/t3LkzENdEbm7u2/7+/lHoWltbW4JWqzVw9/Pz89f5+vqqJNUcNhmZhGI2m9+QyWSb7fGD4ggbN26sOnz4cLuvBZqmJwEA+KRTqWSR3AAYhnlTo9Fswg5N7/r5+UXiAkMIww4dOvTdO++8Mxy/XlxcnOTl5bWWTPg0m82vyWQyPhQslfK4edra2lbhJeSFhYUGpVK5wh4f9srT0DhPySC5AbS0tKTHxsau4pRTXFy82svLi6+/565DCAeWl5f/C8/CRTF+g8Ew64svvvh09+7d/A6B6vsBAJVSLzw3H8uyc1Qq1d+4/7Oysj4PDg6eQ/IDIbxPr9efwKOI3BhbcWq76iUp5JHcABobGz+Mj4+fzwlnNpsXyWSyPzrYLoft2rXryNatW0O4+ygR8/Dhw0ru/5dffvlKRETEICmU5WgOCOEDFEXxiSfx8fHH77rrrrHk+Nra2n2pqal2k1Ozs7P/FBgY+KrUckhuAFVVVWWZmZkTOUFNJtN0uVz+XQfKnWQwGPbj/n587Nq1a0v79+//rNSKI15Z7TAE7Bkly7LzVCrVx474TExMPDxy5EjeoSSVPJIbQGlpaf22bdv6cwI6k0jR2toaFxMTY7ccu6ioKM/b25t3xEilOHIenU53k9va0asqPz+/H/Y6k+3bt+/ihx9+GMpdS0lJ+T49PZ3fDe6//35Gq9XykUWp5JDUACCEXhRFtXLCoYTKzMxMHoevI6EvX768d/Xq1U+QY4xG42KFQsEfKqVSHDnP3r17az766KPBmGEHAwAa0P/Nzc0FcXFxsdy9sWPHtkZHRw8vLy//J03TfBobTdOPAACOSimD1AbwEEVRxzgB1Wp1xYMPPshX3HYkOIRwVElJyUk8/o7G0zQ9FQDAJ4RIqTx8rjNnzhzPz89/EDOAu1CEE0L4qF6vP4Af/LjsoYaGhk8SExNf4p4xGo1LFArFO1LKIKkBsCw7V6VSfcYJmJWV9UVwcPDvnBWY9LvbDAClZKOgkEf/KisrfzQYDOGYAdwHADh17NixCtzDGR0dfXbcuHG3PJ5tbW3LtVptNvdMbm7uO/7+/kukFERSA7DzvexSvR5yu27fvr0ac6FemjJlyp1SKszRXJcuXfpnenr6o7b7kKbphy0Wy2K9Xq/BnkHXp3E7ltVqna5Wq//B3V++fPmx0aNHj5NSHkkN4Nq1a39bsWIF/31sNpsXyGSyj1wRGHkSDx48eOud/9hjjy3uSrWvK/N2Npb4xIPIv6HVatNwtzbpsYQQAoPBwHBfOLZaBh8AQFtn8wl1X1IDOHr06FkclNEThx6hFEfSqaur+zYlJeV/uOthYWHW8+fP83jDCGg6PDwc1Si2KyStqqr6V2ZmJh89NJvNqIR9u1h8knQlMwAIoYyiKIZI4FACAG5KJayY89TU1OxPS0t73N4ctvIxdFj9J3nf0/kEkhmA1Wp9Qq1W7+UUsHLlykMjRozgHUJiLo4UtMnaBHzO4uLilV5eXln2+EAg1Wq1ms8giouLO3nPPffw9Y1i8y6ZAbS1ta3QarVrOYE8HcETWrEkeghHPz09ffegQYOe6Wi+4uLitpMnT/I5BDRNB0lVbCqZAdiJ4Ll8ABR60YSkt3Pnzl/wmAWivXjx4vMTJkx4uLPFJKuMzGbz6zKZbIuQ/DmiJZkBbNu27Sr3+YaYQVE+AABfZi2FsGLOsW7dulbcSTV79uyGZ599FsX4Kzqbl0xvNxgMnwYFBb3c2XNC3JfEABAsO+4BnDNnTv2sWbMGCCGAKzQYhlHt379/1ZgxY87feeedS4R0u+7fv7968+bNQxE/KD08Ojr6fwEATjWWgBDeQ1HUKU4WhGoyd+7cdgkxrsjpylhJDID0eGVnZ/85MDBwniuMdnUsyuFPTk6uq6+vvxWkefzxxy0LFixAGMGCgD1ardaZZWVltwApH330UeSfcIg9bE8W3IBsO+TjAICDXZW7s+clMQDyG9loNP5BoVDwFTWdMSnEfZZlX1CpVH/FaaHPs7S0NPS+dRimFWJuZ2iQKOZCoJo5M68kBmDnlDsEAFDrDINCjSEzkTi6KP08Pj7+JZlMtlWoudyhQ2YVSeUWFt0AUJKnWq3ewynFU2XUV65c2bNq1aon7S1OeHh4a1RUFHLU/OjO4gnxDKo2NhgMjVjiC4ob9OdCykLMYY+G6AZgS/XWcZPn5+ebfX191WIJZI8uagyVn5/fhNcRIL87HqJdsGDB5WnTpqFPNqcBpIWWoaam5ru0tLRpHF2z2bxQJpN9IPQ8OD3RDeD06dMnCwoK+Jx9s9k8W+oADsuyr6pUKj7opNPpfgoLC8sjUcSTk5PLhg0bxkX0xNS7XdpkursUn4OiGgCEMJiiKD5WbyvgRMiafFaQFFom8xCLi4sTvLy8cuz1EfAk1AuZXPriiy/+8tRTTw0UU0eiGgAJ3ZaamvqPwYMH8xEzMQXjaCPIeIqiyrC50LsVIXncOoTW19d/mZSUxJeq2yBmkAPHZURxIeTZtm3bNRzmlqbpMQCAn4WgLfkZwGKxrNPpdNHcxB0FRcQSkKzaIauIUZLJgQMHKjgnDuLDUxm6aG47qCORCoWiXcMLIXUl6g5w7ty5o9nZ2XyGS2cp4EIKhmhBCEOTk5OrOecPumYymZ6Sy+Vf43ORETl0z2w2ewQDmHQL5+TkiIpILqoBJCUlsZzyPZHt0tTUVIynZHX0bd3Y2LglPj6eB5dCgZyJEyfyvQGENk5H9CCE7Ypnly5dej48PFw0PkQzAAjheIqieIAHqfF7EGz8xo0bL+NVRGazeb4jrx/aLYxG4wU8LGs0GtWO8AnENAjCcYbOLF4AAKsYc4pmACzLvqJSqXgY9dzc3I/9/f35kjAxhMFpkgmoixcvrpo4ceKvYGnwZ8j8fYqizj388MN83r7YPHP0SdBrmqYR5jGfTi8kH6IZAAmrXlhYmKFUKvmiUCGFsEeL7PbpDIIIwh3Kz8+vwx1GnmgLY6fcXLTziGgG0NTUtEmv17/JLY6UASCWZZ9TqVRfcHPbYvMDnens0dDQ8JfExMTfc892dAhDcHc3btzI/Pbbb387ffr0vcHBwXOdmaMz429ra0MZxancODF/PKIZAInhI/QXAMLYOXTo0Hssy/abPHnyQhxjh1xEV7CDrVZrhFqt5r8SZsyY0fTqq6/+CtAKpbgVFBSk40WrQrWUZVn2ZZVK9WfOAAwGw1+DgoJ4o+zMgFy5L5oBkJ+ANE3fg3fldoVJe2PxFCyUYDJz5kwUYbx1UCJRyGiafgAAcNLZOe0UsPKxeZTLX19fvzM5OflXeX45OTmbAwIC2vUmdnZOfByEcCpFUfu4a0L1PLLHi2gGcOLEiTMmk2kMNylN03cKBeDMMIxao9EYcYGKiopivb29i6xW6wy1Wv137h5eiuXsYpD4w5x7GBW3Xrx4cR9e3o7TFKp9DITwQYqijnO0NRrNmQceeOAeZ/l3ZZxoBmAnwwWFNgUBcTx48ODF999/v11JGOoIOm3atKFk9pE70UeGYSiNRlPCKXLt2rWf9+/ff05VVdXBzMxMHpmUVLRQHkSyV7GYMQHRDGDr1q0NONATTdPeQpQ8ke9HfBGMRuPStra26bhDx53yMzIoExkZeXHUqFFHkpOT2wFRoKgi3qNo4cKFgtQqIh8GRVE3ONkcnUNc+aU7GiuaAZA4fuvXrxdkLjJmjguGEEaVSmUrHn6mafr+ztrDk8qBEPpSFNXUkYLT09O/HThw4NMGg6EVr+3DgSG6skA4mCYKUK1YsYIvM+sKXfJZQRbFHkNkGpgQBgAhvIuiKDzNGqIQc0VFhUNgRnfx9zZs2NCMexFxGVFV0/DhwyejsjayVxECfHAF8NrRYuIGICYItWgGQBZK0DSt6Ko7k2zditrC+fv7l8XFxfEZR4RC4fr16/m+Pq78csi6fu7ZRYsWVU+ePBl55m7lOZCpZiaTaaZcLv/Klbns7ECojpJ3/fbIM8Dhw4cr8c7dQpQ7kdXFRqMxUi6X/3HHjh11OO4QrlB3d57KysojBoPhFoIp92cLaKHu43yRp8VioXU63VvcGKPRqFUoFO2+UFw1BghhAEVRfB9CMV3Sou0AZLEkTdP3AgBOu6oMbjyEcBxFUTx+DgJV0mg0CB2kiWGYaI1GY7dvn7sGYK/Ys6CgoMjHx4fH+kG8MQyzWKPRvM3xKUTLGrJQBIfTdVd/kh8CyVoAe3F4V4Rpa2tL1mq1fFeurKysrcHBwS9wNMjcQ+46TdMoBa3RlbnQWLKngS1pFGUS/QenRRqmK7hHjniyWq1PqdVqvi09OnAOGjSI71DmqiwdjRdtB7BYLCU6nY7CtsYuoXmR9fcktCpaCIPBcIjEE3QXhGLTpk2WsrIyH47/oqKiOG9vb749Da5U4osHhW99AQAt7i4Uuas4Qkx3lz7+nGgGQHrrCgoKin18fGLcYRqBSxgMhhaiOdQwAEA1To8sQUf3zGbzs+6Uf5WVlV3YtGnTLaxidAh78sknBzsCsyABokwmU4RcLv/WHVnRMxaLxajT6fjUeTHzEkQzAHIb60pCqNVqnapWq3nfeEexfSKzB/0aURzg364uBqr1O3bs2EaGYfpNmDDh9Y4W1GKxmHQ6HY9W3lXwysuXL/9j9erV0zmeu/r69MgrAEIYYmuodGv+rnizWltb9TExMbmcIGT/AFLAlpaWtc3NzY8EBgZ+IEXdH8uyz6pUqm0cH10t6yJfPzRNDxKrDa5oOwBShp1PQbeQMMnwrtFojFIoFPzJ29Vft9DjIYTy5OTkFiz5FO08qAFEs6tzkWns7gSzXJlTVANobGzcGB8fzwMfFhcXJ3p5efHAiM4yevbs2fKcnBwefVvo3AJn+ehoHNnCzl20L/IcgzfKEIJPkoaoBsCy7EsqleoTblJnGyqRTJJuWTG3RHeV3NraaoiJiUngnnclCQWfs7Ky8rDBYHiEu2Y2m1+UyWQ8uqq7/Dl6TlQDQFEtvV7fgBVhoq0RnabrnBWE9IqhSt6lS5fy/QKcpSP2OLK2ICEh4eioUaP4hXRmfpSZTFEUXzZvg5dDoNMu+zGcmQ+NEdUA0AS//PLLLjx7xtXqIAjhvRRF8ad4qdPLnVUk+lRNTk5uxesgXI0Mks4uoRJMPPIVwE1KVuY6k56NM0xm+IjpFXN2sR2Ns4OEegsx3Fm6pPfRbDbPk8lkfG6gs3RcGSf6DoB+GZs3b244cOCAL/Zec7pEnEQY7w4dQhwp2E5k8Gm5XM6DY3S0MGQmM/psnjdvHtr+20HLurK4zowV3QAQE+TXQEpKyr+GDh3qMLUKZ5xl2QUqlYrHzPNUbx1nlEmWl5nNZgQ98xdnniV7EIvp/sX5kcQAIITDkpOTK4kizSflcvk3nSnHTpu5TX5+fos7e84T90mgp476BxKvuafVajWfQ2ArUQ8TKonWo2cAbnLy1+Gst4xsEp2fn2/y9fXFMfg9sdZ257Tjw49WKBR8g2tHjJKlYDk5OX8MCAhYJIVgkuwASBAI4d02MER+Tmf6/TAMs0ij0bzHKcMTXTWcXYimpqZ39Ho93wSzo5Z4HE2GYaI0Gs0G7n9b0gkChTjn7LxdGSeZASAmSQXZSrbQSdlhyxeWZX+vUqn496jBYPgsKCjoxa4ILdazZD2B2Wz+vUwma4dNiM+N4iWff/75z3j2dG5u7gZ/f38+w0gsXjm6khoAyrbdvn17FY4ZTCZ2kAKjpksURfEpWELl3ouhWDKNrLN+wCSAtq3CCSWV8inhYvAp+SEQn5BhmEiNRtOuM5bRaHxLoVDw2yDxKwmkKOpW+zX0N2nSpObIyEj+k1JsBblC347LOtDRYjIMs0yj0Zhx+kaj8U2FQsG/7lyZ292xku4AHJOXLl36Lj09ncfDs4ErjwcA/GRPkLKysqpNmzYN4+7RND3Bk6CO9ngkATE6QvZA2UtGo7EMB6PoSr6Eu4uPnvOIAaAW6jt27DiFZ/IuWrTo4uTJkxFQ46/OA9evX/9TQkLCK5yghYWFaUqlki+f7ooChHqWhKLNzc390N/f/zU7r7QB33//ffmWLVuGcPdeeukl1P/4IVdiJELx7REDQMyj8m5bqxSeh8TExB/DwsJQwUU77xeJNiJE4qVQCuTokHUEZrP5ZZlM9inxOpOdO3fuUE5ODt4aDppMplldrSVwVx6PGQBiGGXuxMbGrsCZRz11hwwZ8gQAAHLXEY5uSUlJA96QwWQyOeVIclcxrjxHpr/ZsIdRMSyfGIrKymtqavalp6dPwWlLhQruSB6PGgBi6vr16x8nJCS06x2A3oehoaEz8WLSpqam9/R6Pe8cQVVBoaGhM1xZKLHGkhnLeXl57/r5+fH+ABQPqa2t/SYtLa1d72OpcZPsye9xA0BM1dXVfZWSkvI0zmBCQsKRkSNHPsmdCciaeTTW3awbIQ2BZdnfqVQqHGoe5Tw8yAFSoEYVZ8+e/SY3N7ddlVFGRsZXAwYMmCkkL+7Q6hYGACHsV11dvS8jI+MxXIjIyEiE7PUc19qF7Dxqq9NDPXo7rOR1RzHOPINQRr///vuzW7Zs4buG43AuEMKHDxw4ULp58+Z2WAarVq06OHTo0OldrZV0hsfOxnQLA0BMQgh/c+XKlZ3kToA+EZcsWbIMtYiHEIYZjcZTJ0+e9OIEMxgMfwkKCuI7cHcmsJD3r127tnXFihV882tbW3jUHfQiwzBLaJo24596aG70yw8JCXleCKwEIWTpNgbACWPvTGBT3PaQkJDXUcEJ2ZNXTBQtR0q2c4BF/YJXocLQq1evfpyUlDSbfFaIukEhFh2n0e0MADFnU24i6aeYPXv2tZkzZ66qq6t7IyMjg++3i55xNdWsK4okQSgRLZTjMGDAgI937dqVgru6bfPAwsLCtUqlMrkr84rxbLc0ACQoSrL8+uuvPyKbMaJ7zz333FV75eBShIrJcnBuURzxhMrKZsyYMR+HsRNjId2l2W0NwHYuGFBbW/tX8vOpI2ERpNqQIUNeEjqZAkI4oqam5tP09HSnO4qkpqb+PTQ09GWxqnrcXfRu/wogBUNZQbt37851BAJBjg8PD29ZtGiRQaFQZAlx0kadRTZv3rz88OHD3s4oHUX1IiIi9FK3xnOGN3JMt94BcGaRN7CpqcmYmpoaiTd76khotC1HRESYvb291wMAalxREEpja21tfWvPnj3Rdt7pdkmhZI7U1NSNfn5+8Z76NHVFRjS2xxgAJxjC521sbEzNzs6ej+cYdiY4yiMYPHjwHplMtq9fv34o6ngBAMDYXjUIR2j0zZs3H2RZdmptbS1C/3K6qAPl8C1btgwFf1IBAJWd8dKd7vc4A8AMYUhTU1PKtm3bFuzdu/dXWL5SKBmlbj///PMf+Pj4ZAh95pCC/x65A9hTDMqpv3HjRuSGDRtmkwghQisSbfN6vX5/SEjIJgRQhQethJ5LCno9dgewpxzkmr158+bslpaWmWfPnn0KtagXQokIpWv06NF7lErlV/369dvhTtm3EHyIQaNXGQCpIFScyrLseNS+3mq13m+xWB6wWCwhjY2NflVVVUEVFRV+6JkxY8Y0DR8+vCEgIKDRx8fnqq+v709yufwkAOC4TCY7DgCoF0P53YFmrzaA7qDg7s5DnwF09xUSmb8+AxBZwd2dfJ8BdPcVEpm/PgMQWcHdnXyfAXT3FRKZv/8C6lNDUxK6aaUAAAAASUVORK5CYII="/>
                          </defs>
                        </svg>
                      </span>
                    <h3 class='cal__h3'>200 Kcal </h3>
                    </div>
                  </div>
                  <?php $type = "snacks" ?>
                  <div class='foodCards__wrapper'>
                    <?php compute($info, "snacks", "High Tea and Snacks") ?>

                    <!-- add more button -->
                    <div onclick="redirectTo('<?php echo $client_id ?>','monday','snacks','High Tea and Snacks')">
                      <img src="images/dietchart3Add.svg
                      " alt="foodImg">        
                    </div>
                  </div>
              </div>
            </div>

            <!-- dinner -->

            <div class=" tab-pane fade" id="nav-dinner" role="tabpanel" aria-labelledby="nav-dinner-tab" tabindex="0">
              <div class="foodCard__div">        
                  <div class="foodCart__topDiv">
                    <h1 class='topDiv__heading'>Night</h1>
                    <div class="calDiv">
                      <span class='cal__icon'>
                        <svg width="21" height="24" viewBox="0 0 21 24" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <rect width="20.7343" height="24" rx="10" fill="url(#pattern0)"/>
                          <defs>
                          <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                          <use xlink:href="#image0_10989_6900" transform="matrix(0.00904299 0 0 0.0078125 -0.0787513 0)"/>
                          </pattern>
                          <image id="image0_10989_6900" width="128" height="128" xlink:href="data:image/png;base64,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"/>
                          </defs>
                        </svg>
                      </span>
                    <h3 class='cal__h3'>200 Kcal </h3>
                    </div>
                  </div>
                  <?php $type = "dinner" ?>
                  <div class='foodCards__wrapper'>
                      <?php compute($info, "dinner", "night") ?>
                    <!-- add more -->
                    <div onclick="redirectTo('<?php echo $client_id ?>','monday','dinner','night')">
                      <img src="images/dietchart3Add.svg
                      " alt="foodImg">        
                    </div>
                  </div>
              </div>

              <!--  -->

              <div class="foodCard__div">        
                  <div class="foodCart__topDiv">
                    <h1 class='topDiv__heading'>Light Night Food</h1>
                    <div class="calDiv">
                      <span class='cal__icon'>
                        <svg width="21" height="24" viewBox="0 0 21 24" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <rect width="20.7343" height="24" rx="10" fill="url(#pattern0)"/>
                          <defs>
                          <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                          <use xlink:href="#image0_10989_6900" transform="matrix(0.00904299 0 0 0.0078125 -0.0787513 0)"/>
                          </pattern>
                          <image id="image0_10989_6900" width="128" height="128" xlink:href="data:image/png;base64,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"/>
                          </defs>
                        </svg>
                      </span>
                    <h3 class='cal__h3'>200 Kcal </h3>
                    </div>
                  </div>
                  <?php $type = "breaka" ?>
                  <div class='foodCards__wrapper'>
                      <?php compute($info, "dinner", "late_night") ?>
                    <!-- add more -->
                    <div onclick="redirectTo('<?php echo $client_id ?>','monday','dinner','late_night')">
                      <img src="images/dietchart3Add.svg
                      " alt="foodImg">        
                    </div>
                  </div>
              </div>
            </div>

        </div> 
    <!-- ...note divs/tabs end -->

    <!-- Add a note start... -->
      <div class="addANote__wrapper">
        <div class='leftDiv__wrapper'>
          <span>
            <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.5 0.5V20M19 10H0" stroke="black" stroke-width="2"/>
            </svg>
          </span>
        <button>Add a note</button>
        </div>
        <button class='right__btn'>Save Plan</button>
      </div>
    <!-- ...Add a note end -->

  </div>


<!-- scripts here... -->

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
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  </body>
</html>
