<?php
include('navbar.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    
<style>
@font-face {
    font-family: 'NATS';
    src:url('font/NATS.ttf.woff') format('woff'),
        url('font/NATS.ttf.svg#NATS') format('svg'),
        url('font/NATS.ttf.eot'),
        url('font/NATS.ttf.eot?#iefix') format('embedded-opentype'); 
    font-weight: normal;
    font-style: normal;
}

body {
    font-family: "NATS", sans-serif !important;
    letter-spacing: 1px;
    font-weight: 400;   
    background-color: #2b0e0e;
    color: black;
    position: relative;
}

.tabcontent {
    padding: 6px 30px;
    border: none;
    border-top: none;
}

.searchbox {
    width: auto;
    width: 360px;
    height: 50px;
    background: #ffffff;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
    padding: 10px;
}

.header {
    display: flex;
    flex-direction: row !important;
    margin: 10px;
    
    margin-left: 20px;
    justify-content: space-between;
    letter-spacing: 0em;
}

#myDIV {
    margin-right: 0px;
 
}

#myDIV1 {
    margin: 0px;
    /* overflow: auto; */
    /* margin-right: 0px; */
    /* width: 100vw !important; */
    /* border: 2px solid red; */
}
.header h4{
    margin-top:39px;
}
#topnav-content-1 {
    font-size: 20px;
    font-weight: bold;
    margin-top: 6px;
    letter-spacing: 0.05em;
    margin-bottom: 5px;
}

#topnav-content-2 {
    letter-spacing: 1px;
    font-weight: 500;
    font-size: 15px;
    margin-top: 12px;
    margin-bottom:6px;
}


.card {
    background: #FFFFFF;
    border-radius: 17.8334px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
    margin-right: 40px;
    bottom:20px;
    padding:15px;
    width:300px; 
    height:250px;
    border-radius:16px; 
    margin-left:50px;
    margin-right:-5px;
    margin-top:30px;
}

.card-upper-text {
    font-size: 15px;
    padding: 5px 10px;
    background-color: #FEA945;
    box-shadow: 0px 0px 25px rgba(255, 255, 255, 0.75);
    border-radius: 8px;
    color: white;
    line-height: 18px;
}
.card-food {
    font-size: 23px;
    font-weight: 580;
    line-height: 18px;
    letter-spacing: -0.11428570002317429px;
    text-align: left;
    margin-top:15px;
    width:200px;
    margin-bottom: 5px;
}

.card-calorie {
    font-size: 18px;
    font-weight: normal;
    line-height: 12px;
    letter-spacing: 0em;
    text-align: left;
    align-items: center;
    margin-top: 5px;
    display: flex;
    color: #A3A1A1;
}

.card-num-circle {
    background: #9C74F5;
    border-radius: 50%;
    color: white;
    padding: 5px;
    height: 25px;
    width:25px;
    margin-top: -5px;
    
}

.card-num {
    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 18px;
    color: #9C74F5;
    text-align:center;
    
}
.dropdown {
    position: absolute;
    margin-top: -27px;
    display: inline-block;
    right: 0.4em;
}

.dropdown-content {
    display: none;
    position: absolute;
    margin-top: 0px;
    background-color: #f9f9f9;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.dropdown-content a {
    color: white;
    padding: 12px 14px;
    font-weight: 500;
    text-decoration: none;
    display: block;
}

.dropdown-content .edit-button {
    background: #A85CF1;
    text-align: center;
    border-radius: 7px;
    margin-bottom: 10px;
}

.dropdown-content .delete-button {
    background: #FF3D3D;
    border-radius: 7px;
    text-align: center;
}

.show {
    display: block !important;
}

.dropdown-card {
    background: #FFFFFF;
    border: 0.723941px solid #E4E4E4;
    box-shadow: 0px 2.17182px 2.89576px rgba(0, 0, 0, 0.09);
    border-radius: 13.0309px;
    padding: 20px;
}

.filter-outline {
    
    box-sizing: border-box;
    border: 1.5px solid #B85AEC;
    
    border-radius: 15px;
    width:170px;
    height:54px;
}
.filter-line {
    width: 53x;
    height: 53px;
    border: none;
    /* opacity: 0.54; */
    border-left: 1.5px solid #9C74F5;
    object-fit: cover;
    margin-right:none; 
}

.filter-text{
    padding-left: 15px;
    padding-right: 15px;
    font-size:20px;
    color: #B85AEC;
}
.white {
    color: #FFFFFF;
}

.lwhite {
    color: rgba(255, 255, 255, 0.9);
}


.container1{
    display: grid;
    grid-template-columns: auto auto auto auto;
    margin-top: 32px;
    margin-left:10px;
    width:auto;
    height: max-content;
    padding: 4px;
    
    overflow-x:auto;
   
}
.container1::-webkit-scrollbar{
    display: none;
   
}
.container1 .top-card{
    overflow: hidden;
    display: flex;
    flex-direction: column;
    position: relative;
    width: 500px;
    height: 200px;
    justify-content: center;
    align-items: center;
    
    border-radius: 16px;
    font-size: 19px;
}
.container1 .top-card .imag{
    position: absolute;
}
.container1 .top-card .im1{
    width: 150px;
    height: 200px;
    top: -8px;
    right: 0px;
}
.container1 .top-card .im2{
    width: 170.01px;
    height: 52px;
    transform: rotate(45deg);
    bottom: -5px;
    left: -30px;
    transform: scale(1.4);
}
.top-card h3::before{
    content: '';
    width: 260px;
    height: 220px;
    border: 1px solid rgba(234, 139, 139, 0.907);
    border-radius: 50%;
    position: absolute;
    top: -60px;
    left: -60px;
}
#myDIV1 h3::before{
    content: '';
    width: 260px;
    height: 220px;
    
    border: 1px solid rgba(234, 139, 139, 0.907);
    border-radius: 50%;
    position: absolute;
    top: -60px;
    left: -60px;
}
.breakfast .top-card h3::before{
    border: 1px solid rgb(255, 255, 255);
}
.snacks .top-card h3::before{
    border: 1px solid rgb(255, 255, 255);
}
.lunch .top-card h3::before{
    border: 1px solid #dbaaab;

}
.dinner .top-card h3::before{
    border: 1px solid #dc898a;
}
#myDIV1 .breakfast .top-card h3::before{
    border: 1px solid #92ceb6;;
}
#myDIV1 .snacks .top-card h3::before{
    border: 1px solid  #5191af;;
}
#myDIV1 .lunch .top-card h3::before{
    border: 1px solid #dbaaab;

}

#myDIV1 .lunches .top-card h3::before{
    border: 1px solid #917dda;;
}
#myDIV a,
    #myDIV1 a{
    cursor: pointer;
}
#myDIV1 a:hover,
#myDIV a:hover{
    text-decoration: none;
}
.container1 .top-card .im2-2{
    transform: scale(1.6) scaleX(-1) rotate(-10deg);
}
.container1 .top-card .ci{
    width: 110px;
    position: absolute;
    height: 100px;
    border-radius: 50%;
}
.container1 .top-card .ci1{
    top: -60px;
    right: 50px;
}
.container1 .top-card .ci2{
    bottom: -70px;
    right: 2px;
}
.container-1 .top-card h5,p,br{
    margin-right: 70px;
    margin-bottom: 35px;
    font-weight: 400;
    line-height: 88%;
}
.recipe-add-btn{
    position: absolute;
    justify-content: flex-end;
    display: flex;
    margin-left:120rem;
    bottom:20px;
    top:85rem;
    width: 250px;
    height: 80px;
    background: #FFFFFF;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.25);
    border-radius: 50px;
    }
/* .btn{
    /* margin-top: 10px; */
    /* position: relative; */
    /* margin-left: 1500px; */


    .butt{
    
    background: #9C74F5;
      border: 0px;
      color: white;
      border-radius: 50%;
      position: absolute;
      bottom: 35px;
      right: 25px;
      margin-top: 20px;
      width: 85px;
      height: 85px;
      font-size: 40px;
  }

@media screen and (min-width: 720px) and (max-width:1500px) {
.heading{
    justify-content:flex-start !important;
}
.header{
    flex-direction:column !important;
}
.header h4{
    margin-top:39px;
}
.searchbox{
    margin-left:50px;
    margin-top: 10px;
    width: 350px;
    margin-bottom: 20px;
}
.category{
    display: flex;
    flex-direction: row;
    overflow-x: auto;
}
.container1{
    left:30px;
}
.row{
    margin:10px auto !important;
}
.card {
    margin:10px auto !important;
    /* bottom:20px;
    margin-left:30px; */
}
.card-food {
    font-size: 23px;
    font-weight: 500;
    line-height: 20px;
    min-width: 180px;
    margin-bottom: 5px;
    margin-top:10px;
}
.card-calorie {
    margin-top: 5px;
}
.dropdown-content {
    left:-20px;
    top:-40px;
}
.butt{
    background: #9C74F5;
    border: 0px;
    color: white;
    border-radius: 50%;
    position: absolute;
    bottom: 20px;
    right: 25px;
    margin-top: 20px;
    width: 85px;
    height: 85px;
    font-size: 40px;
}
}
/* @media screen and (min-width:720px) and (max-width:950px){
    .heading{
    margin-left: 30px;
    margin-top: 9px;
}
.searchbox{
    margin-left:-250px;
    margin-top: 70px;
    width: 350px;
    margin-bottom: 20px;
}
} */

/* @media screen and (min-width:650px) and (max-width:710px){
    .butt{
    background: #9C74F5;
      border: 0px;
      color: white;
      border-radius: 50%;
      position: absolute;
      bottom: 35px;
      top:202rem;
      margin-bottom: 20px;
      right:200px;
     left:20px;
      margin:auto;
      width: 85px;
      height: 85px;
      font-size: 40px;
  }
} */
/* @media screen and (min-width:0px) and (max-width:650px){
    .butt{
    background: #9C74F5;
      border: 0px;
      color: white;
      border-radius: 50%;
      position: absolute;
      bottom: 35px;
      top:202rem;
      margin-bottom: 20px;
      left:160px;
      margin:auto;
      width: 85px;
      height: 85px;
      font-size: 40px;
  }
} */
@media screen and (min-width:0px) and (max-width:720px){
   
    .searchbox{
    margin-left: 20px;
    
    }    
    .category{
        display: flex;
        flex-direction: row;
        overflow-x: auto;
        margin-left: 50px;
    }
    .heading{
    justify-content:flex-start !important;
    margin-left:-30px;
    }
.header{
    flex-direction:column !important;
   }
        
    .container1{
        grid-template-columns: auto auto auto auto;
        left: -1px;
        margin-right: 420px;
        gap: 0.5rem;
    }
    .recipe{
        margin-left: -200px;
           }
    .middle_wrapper a {
        /* margin-right: -40px; */
        margin-top:10px;    
    }
    .row{
        margin:10px auto !important;
    }
    .card{
        margin:10px auto !important;
    /* left: 50px;
    bottom: 10px; */
}
 .card-food {
    font-size: 21.5px;
    font-weight: 500;
    line-height: 20px;
    min-width: 180px;
    margin-bottom: 5px;
    margin-top:10px;
}
.card-calorie {
    margin-top: 5px;
  }
  
.dropdown-content {
    display: none;
    position: absolute;
    margin-top: 0px;
    background-color: #f9f9f9;
    min-width: 150px;
    left:-90px;
 }
 }
 @media screen and (min-width:300px) and (max-width:400px){
    input[type=search]{
        width:150px !important;
    }
    h3.recipe{
        margin-left:-20px !important;
    }
}
</style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/all_recipes.css"> -->

    <!-- link ref -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>All Recipes</title>
</head>

<body>

    <br>
    <div class="header" style="">
        <div class="heading" style="display:flex;justify-content:space-between;margin-top:-5px">
        <h2 style="margin-left:4rem;margin-top:1rem;font-weight:400;font-size: 40px;">Recipes</h2>
            <h4 style="margin-left:30px;color:#787885;font-size: 23px;margin-top:2.2rem;">Dinner</h4>
        </div>
        <div class="search" style="margin-right:8rem;display:flex;gap:1.5rem">
            <div class="searchbox">
                <button style="background-color:white;border:none;" id="seabtn" name="seabtn"><img src="images/vec_search.png" alt=""></button>
                <input type="search" name="sinput" placeholder="Search" style="border:none;font-size:20px;margin-left:1rem;width:200px;">
            </div>
        </div>
    </div>




    <!-- breakfast lunch dinner -->
    <div class="container1" style="margin-left:20px" id="myDIV1" onscroll="myFunction()">
        <a href="all_recipes.php" style="color: inherit;" class="breakfast" id="btn1">
        <div class="top-card" style=" background-color: #85B4A1;margin-left:50px;width:320px; height250px;">
                <span class="ci ci1" style="background-color:#3A8870;;opacity: 0.76;"></span><span class="ci ci2" style="background-color: #3A8870;;opacity: 0.76;"></span>
                <img src="./images/indian-food-composition_1284-11949-removebg-preview 1.png" class="imag im1">
                <h3 style="margin-bottom:10px;color:#FFFFFF;font-weight: 400;margin-top:30px;margin-right:145px;font-size:32px;">All Recipe</h3>
                <p style="margin-bottom:80px;color: rgba(255, 255, 255, 0.9);margin-top:5px; margin-right:110px;font-size:20px;">Free menu planning<br/>to suit your needs</p>
                <img src="./images/treebranch1.png" class="imag im2 im2-2" style="left:-90px;bottom:25px;height:75px;">
                <img src="./images/tree branch.svg" class="imag im2 " style="left:-27px;bottom:31px;height:84px;">
        </div>
        </a>

        <a href="all_recipes.php" style="color: inherit;" class="lunches" id="btn2">
        <div class="top-card" style=" background-color: #aea2d8;width:320px; height250px;">
                <span class="ci ci1" style="background-color:#877AB4;opacity: 0.76;"></span><span class="ci ci2" style="background-color: #877AB4;opacity: 0.76;"></span>
                <img src="./images/south-indian-food-vector-32129358-removebg-preview 1.png" class="imag im1">
                <h3 style="margin-bottom:10px;color:#FFFFFF;font-weight: 400;margin-top:30px;margin-right:126px;font-size:32px;">All Time fav</h3>
                <p style="margin-bottom:80px;color: rgba(255, 255, 255, 0.9);margin-top:5px; margin-right:110px;font-size:20px;">Free menu planning<br/>to suit your needs</p>
                <img src="./images/img_l_4.png" class="imag im2 im2-2" style="width:35%;height:35%;left:6px;bottom:0px;transform:rotate(1deg);">
        </div>
        </a>

        <a href="all_recipes.php" style="color: inherit;" class="snacks" id="btn3">
        <div class="top-card" style=" background-color: #6cb7d9;width:320px; height250px;">
                <span class="ci ci1" style="background-color:rgb(43 128 153 / 20%);opacity: 0.76;"></span><span class="ci ci2" style="background-color: rgb(43 128 153 / 20%);opacity: 0.76;"></span>
                <img src="./images/istockphoto-1339640372-612x612-removebg-preview 1.png" class="imag im1">
                <h3 style="margin-bottom:10px;color:#FFFFFF;font-weight: 400;margin-top:30px;margin-right:85px;font-size:32px;">Recommended</h3>
                <p style="margin-bottom:80px;color: rgba(255, 255, 255, 0.9);margin-top:5px; margin-right:110px;font-size:20px;">Free menu planning<br/>to suit your needs</p>
                <img src="./images/snac.png" class="imag im2 im2-2" style="width:35%;height:35%;left:3px;bottom:0px;transform:rotate(1deg);">
        </div>
        </a>
    </div>


    <!-- <div class="category" style="display:flex;justify-content:flex-start;margin:20px;margin-right:30px;">

        <div class="filter-outline" style="display:flex; justify-content:space-between; align-items:center; margin:10px; margin-left:55px;padding-top:1px;padding-bottom:1px;">
            <div class="filter-text">Noodles</div>
            <img class="filter-line" style="padding-left:2px;" src="./images/Noodles.png" alt="">
        </div>
        <div class="filter-outline" style="display:flex; justify-content:space-between; align-items:center; margin:10px; margin-left:20px;">
            <div class="filter-text">Soup</div>
            <img class="filter-line"  src="./images/Soup.png" style="padding:8px;" alt="">
        </div>
        <div class="filter-outline" style="display:flex; justify-content:space-between; align-items:center; margin:10px; margin-left:20px;">
            <div class="filter-text">Curd</div>
            <img class="filter-line" style="padding:8px;" src="./images/Curd.png" alt="">
        </div>
        <div class="filter-outline" style="display:flex; justify-content:space-between; align-items:center; margin:10px; margin-left:20px;">
            <div class="filter-text">Paratha</div>
            <img class="filter-line" style="padding:10px;" src="./images/Parantha.png" alt="">
        </div>
    </div> -->


    <!-- all recipes --> <div class="middle_wrapper" style="display:flex;justify-content:space-between;margin-top:20px;margin-left:5rem;margin-right:2.5rem">
        <h3 class="recipe" style="font-weight:500;margin-left:50px;color:black; font-size: 30px;">All Recipes</h3>
        <a href="all_recipe_list.php"><h3 style="color:#6A6A6A;font-size:20px; margin-right: 50px;">View All</h3></a>
    </div>


    <!-- recipes from db -->
    <?php
    $sql = "SELECT * FROM `default_recipes` WHERE drecipe_category LIKE 'di%';";

    $res = mysqli_query($conn, $sql);
    ?>

    <div class="flex row">
        <?php $counter = 0;  
    while ($d = mysqli_fetch_assoc($res)) {
            $drecipe_recipe = explode(',', $d['drecipe_recipe']);
            $steps = count($drecipe_recipe);
            $drecipe_nutritional = $d['drecipe_nutritional information'];

            $drecipe_nutritional = trim($drecipe_nutritional, '{}');
            $pairs = explode(', ', $drecipe_nutritional);
            $nutritional = array();
           foreach ($pairs as $pair) {
                list($key, $value) = explode(': ', $pair);
                $key = trim($key, "'");
                $value = trim($value, "'");
                $nutritional[$key] = $value;
            }
            if ($counter == 5) {
                break; 
            }
            $counter++;
        ?>
            <div class="card d-flex" style="padding:15px; width:330px; height:205px;border-radius:16px; margin-left:45px;margin-right:-5px;margin-top:30px;">
                <div class="card-upper d-flex justify-content-between">
                    <p id="bu" class="card-upper-text"> Medium </p>
                    <p id="bu" class="card-upper-text"><i class="fa-solid fa-clock"></i> 20:00 </p>
                </div>
                <div class="img-dis" style="width:100%; text-align:center;">
                    <img src="images/dinner.svg" style="margin-top:-50px;height:101px; width:145px; margin-left:-20px; object-fit:cover;" />
                </div>
                <div class="d-flex justify-content-between">
                    <p class="card-food"><?php echo $d['drecipe_name'] ?></p>
                    <div class="header">
                        <div class="dropdown ">
                            <div id="myDropdownIcon" class="dropbtn" onclick="showDropdown(event)">
                                <img class="" src="./icons/vertical-three-dots.svg" alt="" style="margin-top:30px;">
                            </div>

                            <div id="myDropdownContent" class="dropdown-content dropdown-card ">
                                <a style="color: white;" class="edit-button" href="#">Edit</a>
                                <a style="color: white;" class="delete-button" href="#">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between" style="align-items:center;">
                    <p class="card-calorie"> <img src="./icons/calorie.svg" alt=""> <?php echo $nutritional['Calories'] ?> kcal</p>
                    <div class="d-flex align-items-center card-num">
                        <div class="card-num-circle"><?= $steps ?> </div> &nbsp;
                        <div class="">steps</div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <a class="butt" href="_create_recipe.php" style="border-radius:50%;background-color:#9C74F5;width:85px;height:85px;filter: drop-shadow(0px 0px 68px rgba(0, 0, 0, 0.3));color:white;font-size:60px;border:none;position:absolute;right:50px;bottom:60px;display:flex;justify-content:center;align-items:center;">+</a>
   

    </div>
    

    <script>
        function myFunction() {
            const element = document.getElementById("myDIV1");
            let x = element.scrollLeft;
            let y = element.scrollTop;
            document.getElementById("demo").innerHTML = "Horizontally: " + x.toFixed() + "<br>Vertically: " + y.toFixed();
        }

        function showDropdown(event) {
            var dropdown = event.currentTarget.parentNode.querySelector(".dropdown-content");
            dropdown.classList.toggle("show");
            setTimeout(removeDropDown, 5000);
        }

        function removeDropDown() {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            for (var i = 0; i < dropdowns.length; i++) {
                dropdowns[i].classList.remove('show');
            }
        }

        function removeDropdown(event) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains("show") && !openDropdown.contains(event.target)) {
                    openDropdown.classList.remove("show");
                }
            }
        }
    </script>
</body>

</html>