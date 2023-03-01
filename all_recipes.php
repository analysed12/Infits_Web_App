<?php
include('navbar.php');
?>

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
        <div style="font-size:3.5rem;margin-left:3rem ">Recipes</div>
        <div style="margin-right:2rem;display:flex;gap:1.5rem">
            <div class="searchbox">

                <button style="background-color:white;border:none;" id="seabtn" name="seabtn"><img src="images/vec_search.png" alt=""></button>
                <input type="search" name="sinput" placeholder="Search recipe here" style="border:none;font-size:1rem;margin-left:1rem">

            </div>
        </div>
    </div>


    <!-- breakfast lunch dinner -->
    <div class="grid-container" style="display:flex; flex-direction:row;justify-content:space-evenly; cursor:pointer; margin-left:10px;" id="myDIV" onscroll="myFunction()">
        <div class="breakfast" id="btn1">

            <img src=".\images\breakfast.png" style="float:right; margin-top:-20px;">
            <div class="img-container">
                <div class="grid-header">Breakfast</div>
                <div class="grid-text">Free menu planning
                    to suit your needs</div>
            </div>




        </div>

        <div class="lunch" id="btn2">
            <img src=".\images\lunch.png" style="float:right; margin-top:-20px;">
            <div class="img-container">
                <div class="grid-header">Lunch</div>
                <div class="grid-text">Free menu planning
                    to suit your needs</div>
            </div>

        </div>



        <div class="snacks" id="btn3">
            <img src=".\images\snacks.png" style="float:right; margin-top:-20px;">
            <div class="img-container">
                <div class="grid-header">Snacks</div>
                <div class="grid-text">Free menu planning
                    to suit your needs</div>
            </div>
        </div>

        <div class="dinner" id="btn4">
            <img src=".\images\dinner.png" style="float:right; margin-top:-20px;">
            <div class="img-container">
                <div class="grid-header">Dinner</div>
                <div class="grid-text">Free menu planning
                    to suit your needs</div>
            </div>

        </div>
    </div>


    <!-- all recipes -->
    <div class="middle_wrapper" style="display:flex;justify-content:space-between;margin:20px;margin-left:17rem;margin-right:2.5rem">
        <span style="font-size:25px;font-weight:400; margin-left:20px">ALL Recipes</span>
        <a href="" style="background-color:none;border:nome;color: #6A6A6A;font-size:20px">View All</a>

    </div>

    <div class="flex row ">



        <!-- <div class="card" style="padding:15px; width:300px">
            <div class="card-upper">
                <p id="bu" style="font-size:20px; font-weight:bold"> Recipe </p>
            </div>

            <div class="img-dis" style="height:50%; width:inherit;text-align:center;">
                <img src="./images/alooparatha-eg.png" style="height:100%; width:70%; object-fit:cover;" />
            </div>
            <div class="card-upper" style="margin-top:1rem ;">
                <p id="nm" style="font-size:25px; font-weight:600;"> <?php echo $row['name']; ?> </p>
                <div class="wrap" style="display:flex;margin-top:0.8rem">
                    <a href="edit_recipe.php?id=<?php echo $row['recipe_id'] ?>" title="Update Record" style="color#7282FB" data-toggle="tooltip">
                        <span class="fa fa-pencil" style="color:#A85CF1"></span> </a>
                    <a onclick="return confirm('Are you sure?')" href="delete_recipe.php?id=<?php echo $row['recipe_id'] ?>" title="Delete Record" style="color#7282FB" data-toggle="tooltip">
                        <span class="fa fa-trash " style="color: #FF3D3D"></span></a>
                </div>
            </div>

            <div class="card-upper">
                <div><span class="twelve" style="margin-right:0.5rem">12</span>Steps</div>
                <div style="color: #A3A1A1;font-size:20px"><i class="fa-regular fa-clock"></i> <span style="margin-bottom:1rem"><?php echo ($t1[1]); ?></span></div>
            </div>
            <div class="card-upper" style="margin-top:1rem">
                <span><img src="images/calo.jpg" alt="" style="margin-right:0.3rem"><?php echo $row['calories']; ?>kcal</span>
                <span><button class="btn_medium">Medium</button></span>

            </div>

        </div> -->

        <div class="card d-flex" style="padding:15px; width:300px; border-radius:16px;">
            <div class="card-upper d-flex justify-content-between">
                <p id="bu" class="card-upper-text"> Medium </p>
                <p id="bu" class="card-upper-text"><i class="fa-solid fa-clock"></i> 20:00 </p>

            </div>
            <div class="img-dis" style="width:100%; text-align:center;">
                <img src="./images/alooparatha-eg.png" style="height:100%; width:70%; object-fit:cover;" />
            </div>
            <div class="d-flex justify-content-between">
                <p class="card-food">Aloo Paratha</p>
                <img src="./icons/vertical-three-dots.svg" alt="">
            </div>
            <div class="d-flex justify-content-between" style="align-items:center;">
                <p class="card-calorie"> <img src="./icons/calorie.svg" alt=""> 299 kcal</p>
                <div class="d-flex align-items-center card-num"> 
                    <div class="card-num-circle">12 </div>   &nbsp; 
                    <div class="">Steps</div>
               </div>
            </div>

        </div>


        <div class="card d-flex" style="padding:15px; width:300px; border-radius:16px;">
            <div class="card-upper d-flex justify-content-between">
                <p id="bu" class="card-upper-text"> Medium </p>
                <p id="bu" class="card-upper-text"><i class="fa-solid fa-clock"></i> 20:00 </p>

            </div>
            <div class="img-dis" style="width:100%; text-align:center;">
                <img src="./images/alooparatha-eg.png" style="height:100%; width:70%; object-fit:cover;" />
            </div>
            <div class="d-flex justify-content-between">
                <p class="card-food">Aloo Paratha</p>
                <img src="./icons/vertical-three-dots.svg" alt="">
            </div>
            <div class="d-flex justify-content-between" style="align-items:center;">
                <p class="card-calorie"> <img src="./icons/calorie.svg" alt=""> 299 kcal</p>
                <div class="d-flex align-items-center card-num"> 
                    <div class="card-num-circle">12 </div>   &nbsp; 
                    <div class="">Steps</div>
               </div>
            </div>

        </div>


        <div class="card d-flex" style="padding:15px; width:300px; border-radius:16px;">
            <div class="card-upper d-flex justify-content-between">
                <p id="bu" class="card-upper-text"> Medium </p>
                <p id="bu" class="card-upper-text"><i class="fa-solid fa-clock"></i> 20:00 </p>

            </div>
            <div class="img-dis" style="width:100%; text-align:center;">
                <img src="./images/alooparatha-eg.png" style="height:100%; width:70%; object-fit:cover;" />
            </div>
            <div class="d-flex justify-content-between">
                <p class="card-food">Aloo Paratha</p>
                <img src="./icons/vertical-three-dots.svg" alt="">
            </div>
            <div class="d-flex justify-content-between" style="align-items:center;">
                <p class="card-calorie"> <img src="./icons/calorie.svg" alt=""> 299 kcal</p>
                <div class="d-flex align-items-center card-num"> 
                    <div class="card-num-circle">12 </div>   &nbsp; 
                    <div class="">Steps</div>
               </div>
            </div>

        </div>


        <div class="card d-flex" style="padding:15px; width:300px; border-radius:16px;">
            <div class="card-upper d-flex justify-content-between">
                <p id="bu" class="card-upper-text"> Medium </p>
                <p id="bu" class="card-upper-text"><i class="fa-solid fa-clock"></i> 20:00 </p>

            </div>
            <div class="img-dis" style="width:100%; text-align:center;">
                <img src="./images/alooparatha-eg.png" style="height:100%; width:70%; object-fit:cover;" />
            </div>
            <div class="d-flex justify-content-between">
                <p class="card-food">Aloo Paratha</p>
                <img src="./icons/vertical-three-dots.svg" alt="">
            </div>
            <div class="d-flex justify-content-between" style="align-items:center;">
                <p class="card-calorie"> <img src="./icons/calorie.svg" alt=""> 299 kcal</p>
                <div class="d-flex align-items-center card-num"> 
                    <div class="card-num-circle">12 </div>   &nbsp; 
                    <div class="">Steps</div>
               </div>
            </div>

        </div>


        <div class="card d-flex" style="padding:15px; width:300px; border-radius:16px;">
            <div class="card-upper d-flex justify-content-between">
                <p id="bu" class="card-upper-text"> Medium </p>
                <p id="bu" class="card-upper-text"><i class="fa-solid fa-clock"></i> 20:00 </p>

            </div>
            <div class="img-dis" style="width:100%; text-align:center;">
                <img src="./images/alooparatha-eg.png" style="height:100%; width:70%; object-fit:cover;" />
            </div>
            <div class="d-flex justify-content-between">
                <p class="card-food">Aloo Paratha</p>
                <img src="./icons/vertical-three-dots.svg" alt="">
            </div>
            <div class="d-flex justify-content-between" style="align-items:center;">
                <p class="card-calorie"> <img src="./icons/calorie.svg" alt=""> 299 kcal</p>
                <div class="d-flex align-items-center card-num"> 
                    <div class="card-num-circle">12 </div>   &nbsp; 
                    <div class="">Steps</div>
               </div>
            </div>

        </div>


        <div class="card d-flex" style="padding:15px; width:300px; border-radius:16px;">
            <div class="card-upper d-flex justify-content-between">
                <p id="bu" class="card-upper-text"> Medium </p>
                <p id="bu" class="card-upper-text"><i class="fa-solid fa-clock"></i> 20:00 </p>

            </div>
            <div class="img-dis" style="width:100%; text-align:center;">
                <img src="./images/alooparatha-eg.png" style="height:100%; width:70%; object-fit:cover;" />
            </div>
            <div class="d-flex justify-content-between">
                <p class="card-food">Aloo Paratha</p>
                <img src="./icons/vertical-three-dots.svg" alt="">
            </div>
            <div class="d-flex justify-content-between" style="align-items:center;">
                <p class="card-calorie"> <img src="./icons/calorie.svg" alt=""> 299 kcal</p>
                <div class="d-flex align-items-center card-num"> 
                    <div class="card-num-circle">12 </div>   &nbsp; 
                    <div class="">Steps</div>
               </div>
            </div>

        </div>

       
        <div class="recipe-add-btn">
            <img src="./images/recipe_add.png" alt="">
        </div>


       

    </div>



    <script>
        function myFunction() {
            const element = document.getElementById("myDIV");
            let x = element.scrollLeft;
            let y = element.scrollTop;
            document.getElementById("demo").innerHTML = "Horizontally: " + x.toFixed() + "<br>Vertically: " + y.toFixed();
        }
    </script>
</body>

</html>