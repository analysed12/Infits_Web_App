<?php
include('navbar.php');
?>
<style>
<?php
include 'css/all_recipes.css'; 
?>
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all_recipes.css">

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
            <h2 style="margin-left:20px;font-weight:500">Recipes</h2>
            <h4 style="margin-top:30px;margin-left:25px;color:#787885;">Snacks</h4>
        </div>
        <div class="search" style="margin-right:2.2rem;display:flex;gap:1.5rem">
            <div class="searchbox">
                <button style="background-color:white;border:none;" id="seabtn" name="seabtn"><img src="images/vec_search.png" alt=""></button>
                <input type="search" name="sinput" placeholder="Search here" style="border:none;font-size:1.3rem;margin-left:1rem;width:200px;">

            </div>
        </div>
    </div>





    <!-- breakfast lunch dinner -->
    <div class="container1" style="margin-left:20px" id="myDIV1" onscroll="myFunction()">
        <a href="all_recipes.php" style="color: inherit;" class="breakfast" id="btn1">
        <div class="top-card" style=" background-color: #85B4A1;">
                <span class="ci ci1" style="background-color:#3A8870;;opacity: 0.76;"></span><span class="ci ci2" style="background-color: #3A8870;;opacity: 0.76;"></span>
                <img src="./images/indian-food-composition_1284-11949-removebg-preview 1.png" class="imag im1">
                <h3 style="margin-right: 160px;color:#FFFFFF;font-weight: 400;margin-top:-7px;">All Recipe</h3>
                <p style="margin-right:130px;color: rgba(255, 255, 255, 0.9);margin-top:5px">Free menu planning<br/>to suit your needs</p>
                <img src="./images/tree branch.png" class="imag im2 im2-2" style="left:-80px;bottom: -12px;">
                <img src="./images/tree branch.png" class="imag im2 " style="left: -25px;bottom: -27px;">
               </div>
        </a>

        <a href="all_recipes.php" style="color: inherit;" class="lunches" id="btn2">
        <div class="top-card" style=" background-color: #aea2d8;">
                <span class="ci ci1" style="background-color:#877AB4;opacity: 0.76;"></span><span class="ci ci2" style="background-color: #877AB4;opacity: 0.76;"></span>
                <img src="./images/south-indian-food-vector-32129358-removebg-preview 1.png" class="imag im1">
                <h3 style="margin-right: 160px;color:#FFFFFF;font-weight: 400;margin-top:-7px;">All Recipe</h3>
                <p style="margin-right:130px;color: rgba(255, 255, 255, 0.9);margin-top:5px">Free menu planning<br/>to suit your needs</p>
                <img src="./images/book-of-recipes-concept-vector-14744961-removebg-preview 1.png" class="imag im2 im2-2" style="left: -45px;bottom: -15px;">
        </div>
        </a>

        <a href="all_recipes.php" style="color: inherit;" class="snacks" id="btn3">
        <div class="top-card" style=" background-color: #6cb7d9;">
                <span class="ci ci1" style="background-color:rgb(43 128 153 / 20%);opacity: 0.76;"></span><span class="ci ci2" style="background-color: rgb(43 128 153 / 20%);opacity: 0.76;"></span>
                <img src="./images/istockphoto-1339640372-612x612-removebg-preview 1.png" class="imag im1">
                <h3 style="margin-right: 160px;color:#FFFFFF;font-weight: 400;margin-top:-7px;">All Recipe</h3>
                <p style="margin-right:130px;color: rgba(255, 255, 255, 0.9);margin-top:5px">Free menu planning<br/>to suit your needs</p>
                <img src="./images/snac.png" class="imag im2 im2-2" style="left: -45px;bottom: -15px;">
        </div>
        </a>
    </div>


    <div class="category" style="display:flex;justify-content:flex-start;margin:20px;margin-right:2.5rem">

        <div class="filter-outline" style="display:flex; justify-content:space-between; align-items:center; margin:5px; margin-left:20px;">
            <div style="padding:15px 30px; color: #B85AEC;">Waffles</div>
            <img class="filter-line" style="padding:17px;" src="./images/image 3.png" alt="">
        </div>
        <div class="filter-outline" style="display:flex; justify-content:space-between; align-items:center; margin:5px; margin-left:20px;">
            <div style="padding:15px 30px; color: #B85AEC; ">Sandwich</div>
            <img class="filter-line" style="padding:2px;" src="./images/image 4.png" alt="">
        </div>
        <div class="filter-outline" style="display:flex; justify-content:space-between; align-items:center; margin:5px; margin-left:20px;">
            <div style="padding:15px 30px;color: #B85AEC; ">Oatmeal</div>
            <img class="filter-line" style="padding:17px;" src="./images/image 5.png" alt="">
        </div>
        <div class="filter-outline" style="display:flex; justify-content:space-between; align-items:center; margin:5px; margin-left:20px;">
            <div style="padding:15px 30px;color: #B85AEC; ">Crepes</div>
            <img class="filter-line" style="padding:19px;" src="./images/image 6.png" alt="">
        </div>
        <div class="filter-outline" style="display:flex; justify-content:space-between; align-items:center; margin:5px; margin-left:20px;">
            <div style="padding:15px 30px;color: #B85AEC; ">Juice</div>
            <img class="filter-line" style="padding:17px;" src="./images/image 7.png" alt="">
        </div>
        <div class="filter-outline" style="display:flex; justify-content:space-between; align-items:center;margin:5px;margin-left:20px;">
            <div style="padding:15px 30px;color: #B85AEC; ">Croissants</div>
            <img class="filter-line" style="padding:8px;" src="./images/image 8.png" alt="">
        </div>
    </div>


    <!-- all recipes -->
    <div class="middle_wrapper" style="display:flex;justify-content:space-between;margin-top:20px;margin-left:5rem;margin-right:2.5rem">
        <h3 class="recipe" style="font-weight:500;margin-left:20px;color:black">All Recipes</h3>
        <a href="all_recipe_list.php" style="background-color:none;border:nome;color: #6A6A6A;font-size:20px"><h3>View All</h3></a>
    </div>

 <!-- recipes from db -->
 <?php
    $sql = "SELECT * FROM `default_recipes` WHERE drecipe_category LIKE 'sn%';";

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
            <div class="card d-flex" style="padding:15px; width:300px; border-radius:16px;">
                <div class="card-upper d-flex justify-content-between">
                    <p id="bu" class="card-upper-text"> Medium </p>
                    <p id="bu" class="card-upper-text"><i class="fa-solid fa-clock"></i> 20:00 </p>
                </div>
                <div class="img-dis" style="width:100%; text-align:center;">
                    <img src="./images/alooparatha-eg.png" style="height:100%; width:70%; object-fit:cover;" />
                </div>
                <div class="d-flex justify-content-between">
                    <p class="card-food"><?php echo $d['drecipe_name'] ?></p>
                    <div class="header">
                        <div class="dropdown ">
                            <div id="myDropdownIcon" class="dropbtn" onclick="showDropdown(event)">
                                <img class="" src="./icons/vertical-three-dots.svg" alt="">
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
                        <div class="">Steps</div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="btn">
            <button class="butt">+</button>
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