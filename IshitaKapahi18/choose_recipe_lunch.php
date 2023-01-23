<?php include('connection.php');?>
<?php include('event_calender.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href ="choose_recipe_lunch.css" rel="stylesheet">
    <title> Choose Recipe </title>
</head>
<body>
    <div class="page">
        <div class="content">
            <div class="flex-top">
                <h3 style="font-size: 25px; color: #202224; font-weight: 500; margin: 5px; padding:2rem; padding-left:7rem">Choose a Recipe</h3>
                <input type="text" name="search" id="search" placeholder="Search recipe here">
                <button type="button" name="searchbtn" id="searchbtn"> Search </button>
                <a href="create_recipe_new.php"><button type="button" name="searchbtn1" id="searchbtn1">New+</button></a>
                
            </div>

            <div class="flex-second">
                <button class= "recipe-flex" onclick="divVisibility('breakfast1')" id="breakfast"  style="margin: 40px 10px"; > Breakfast</button>
                <button class="recipe-flex"  onclick="divVisibility('lunch1')" id="lunch"  style="margin: 40px 10px";> Lunch </button>
                <button class="recipe-flex" onclick="divVisibility('snacks1')" id="snacks" style="margin: 40px 10px";> Snacks</button>
                <button class="recipe-flex" onclick="divVisibility('dinner1')" id="dinner" style="margin: 40px 10px";> Dinner </button>

            </div>

                            
                <script>

                
                function divVisibility(divId1) {
                var divs = ["breakfast1", "lunch1", "snacks1", "dinner1"];

                var i, divId, div;
                for(i = 0; i < divs.length; i++) {
                    divId = divs[i];
                    div = document.getElementById(divId);
                    div.style.display ="none";


                }
                document.getElementById(divId1).style.display ="block";
                event.preventDefault();
                }


</script>
            <div class="title1">
                    <p id="tag-recipe" style="font-size:25px; font-weight:400; display:flex; margin-left:6rem"> Lunch Recipes </p>
                    <p id="viewall"> View all </p>
            </div>




            <!-------------lunch tab------------------>
          

            <div id="lunch1">
            <div class="final" >
            <?php
                $sql ="select * from `dietian_recipies` where `category` = 'Lunch'";
                $result = $conn -> query($sql);
                if($result -> num_rows >0){
                while($row = $result->fetch_assoc()){
                ?>
            <div class="flex-last">
            <div class="recipe-area" id="recipe1" name="recipe1">
            <div class="r-image" id="rimage" name="rimage" style="margin-left:10px;">
            <img src=".\images\alooparatha.png" style="height:117px; width:220px; margin-left:15px;margin-right:15px;">

            </div>
            <div class="box-title">
            <p id="recipename" name="recipename" style="margin-top:15px;"><?php echo $row['name'];?> </p>

            </div>

            <div class="box2">
            <div class="steps"> <?php echo '12'; ?> </div>
            <span id="one" style="font-size:10px;font-weight:600;">Steps </span>
            <!----clock image----->
            <p id="timedisplay" name="timedisplay" style="margin-left:70px;"> <?php echo '20:00';?> </p>

            </div>
            <div class="box3">
            <img src=".\images\calo.jpg" style="height:24px; width:20px; margin-left:15px;">&nbsp;
            <span id="cal" style="font-size:13px;"> <?php echo $row['calories'];?> kcal </span>
            <button id="medium" name="medium" class="btn-mdn">medium</button>

            </div>

            </div>

            </div>
            
            <?php  }} ?>
            








        </div>
        
    </div>
    </div>
    </div>
    
    
</body>
</html>