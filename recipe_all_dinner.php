<?php include('navbar.php');
$sql = "SELECT * FROM `default_recipes` WHERE drecipe_category LIKE 'di%';";
$res = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .header {
            display: flex;
            flex-direction: row !important;
            margin: 10px;
            margin-left: 20px;
            justify-content: space-between;
            letter-spacing: 0em;
        }

        .searchbox {
            width: auto;
            width: 360px;
            height: 45px;
            background: #ffffff;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
            border-radius: 10px;
            padding: 10px;
        }

        .card {
            background: #FFFFFF;
            border-radius: 15.8334px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
            margin: 20px;
        }

        .card-upper-text {
            font-size: 20px;
            font-weight: bold;
            padding: 5px 10px;
            background-color: #FEA945;
            box-shadow: 0px 0px 25px rgba(255, 255, 255, 0.75);
            border-radius: 8px;
            color: white;
            font-weight: 500;
            font-size: 12px;
            line-height: 18px;
        }

        .card-food {
            font-size: 20px;
            font-weight: 500;
            line-height: 27px;
            letter-spacing: -0.11428570002317429px;
            text-align: left;
        }

        .card-calorie {
            font-size: 14px;
            font-weight: 400;
            line-height: 12px;
            letter-spacing: 0em;
            text-align: left;
            align-items: center;
            /* or 8px */
            display: flex;
            color: #A3A1A1;
        }

        .card-num-circle {
            background: #9C74F5;
            border-radius: 50px;
            color: white;
            padding: 5px
        }

        .card-num {
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 18px;
            color: #9C74F5;
        }

        .recipe-container {
            display: flex;
            flex-wrap: wrap;
            gap: 35px;
            padding-left: 70px;
            padding-top: 25px;
        }

        .recipe-add-btn {
        position: inherit;
        justify-content: flex-end;
        display: flex;
        margin: 0px -60px 0px -60px;
        margin-bottom: 200px;
    }
    </style>
</head>

<body>
    <div class="header" style="align-items:center;">
        <div style="font-size:2.5rem;margin-left:3rem ">Recipes <small style="color: #787885; font-size:1rem; margin-left:1rem;">All Dinner Recipes</small></div>
        <div style="margin-right:2rem;display:flex;gap:1.5rem">
            <div class="searchbox">
                <button style="background-color:white;border:none;" id="seabtn" name="seabtn"><img src="images/vec_search.png" alt=""></button>
                <input type="search" name="sinput" placeholder="Search recipe here" style="border:none;font-size:1rem;margin-left:1rem">
            </div>
        </div>
    </div>

    <div class="flex row">
        <?php while ($d = mysqli_fetch_assoc($res)) {
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

    <div class="recipe-add-btn" style="padding-right:100px">
        <img src="./images/recipe_add.png" alt="">
    </div>

    <script>
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