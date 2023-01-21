<?php 
include "navbar.php"; 

  ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infits</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script type="text/JavaScript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
    </script>


    <head>
        <style>
        #content {
            overflow: auto;
            display: flex;
            flex-direction: column;
            height: 90%;
            font-family: 'Poppins';
            font-style: normal;
            padding: 10px;
            margin: 0px;
        }

        .flex-box-top {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            margin-top: 2%;
        }

        .img-display {
            height: 250px;
            width: 280px;
            border-radius: 15px;
            text-align: center;
            margin-left: 300px;
            margin-right: 100px;

        }

        .img-display img {
            height: 100%;
            width: 100%;
            object-fit: cover;

        }

        table td {
            width: 80px;
            height: 80px;
            margin: 40px;

            padding: 20px;
            color: #9C5EF4;
        }

        td p {
            font-size: 15px;
            color: #858383;
        }

        /*   tabs      */
        /* Style the tab */
        .tab {
            display: flex;
            justify-content: space-around;
            background-color: #FAFAFA;
            border-radius: 10px;
        }

        /* Style the buttons inside the tab */
        .tab button {
            background-color: inherit;
            border-radius: 10px;
            float: left;
            border: none;
            padding: 10px 40px;
            outline: none;
            cursor: pointer;
            transition: 0.3s;
            font-size: 17px;
            margin: 5px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #AA5DF1;
            color: white;
        }

        /* Create an active/current tablink class */
        .tab button.activee {
            background-color: #D257E6;
            color: white;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 30px;
            border: none;
            border-top: none;
            color: black;
            left: 456px;

        }

        .flex-ingrd {
            margin-top: 15px;
            margin-left: 150px;
            display: flex;
            justify-content: space-between;
        }

        .tbl-ingrd td {
            height: 60px;
            width: 160px;
            font-size: 15px;
            color: #000000;

            font-weight: 400px;
        }

        .flex-dir {
            margin-left: 25%;
            margin-top: 15px;
            display: flex;
            justify-content: space-between;
            flex-direction: column;
        }

        .tbl-dir {
            height: fit-content;
            width: fit-content;
            overflow-y: auto;
            overflow-x: hidden;
        }

        .tbl-dir td {

            width: fit-content;
            height: fit-content;
            margin: 5px;
            color: #000000;
            font-size: 15px;
            font-weight: 400px;
        }

        .tbl-dir tr {
            margin: 2px;
        }
        </style>



    </head>

<body>

    <?php  
 $recipe_id = $_GET['recipe_id'];
      $sql ="select * from `dietian_recipies` where `recipe_id` = '$recipe_id'";
      $result = $conn -> query($sql);
      if($result -> num_rows>0)
      {
        while($row = $result ->fetch_assoc()){ 
          //echo $row['image'];
        $ext= explode('|',$row['image']);
         $path = $ext[1];
         $ingrd_id = $row['ingredient'];
         $direction_id = $row['instruction'];

          ?>

    <div class="content">
        <br>
        <div style="float:right;margin-right:30px;">
            <a href="index.php" style="height:auto;background: #D257E6;
box-shadow: 0px 1.7px 5px rgba(0, 0, 0, 0.25);
border-radius: 10px;border:none;padding-left:50px;padding-top:10px;padding-bottom:10px;padding-right:50px;width:350px;color:white;">Done</a>
            <a style="height:auto;background: #D257E6;
box-shadow: 0px 1.7px 5px rgba(0, 0, 0, 0.25);
border-radius: 10px;border:none;padding-left:50px;padding-top:10px;padding-bottom:10px;padding-right:50px;width:150px;color:white;">Edit</a>
        </div>
        <br><br><br>
        <div class="flex-box-top">
            <div class="img-display">
                <img src="<?php echo $path;?>" alt="" title="<?php echo $ext[0];?>" />
            </div>

            <div class="recipe-content-right">
                <h3> <?php echo $row['name'];?></h3>
                <table style="border:none;margin-left:5px;">
                    <tr>
                        <td><?php echo $row['calories'];?>
                            <br><br>
                            <p>Calories</p>
                        </td>
                        <td><?php echo $row['fats'];?> <br> <br>
                            <p>Fats </p>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $row['proteins'];?> <br><br>
                            <p> Protiens </p>
                        </td>
                        <td><?php echo $row['carbs'];}}?> <br><br>
                            <p> Carbs </p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>


        <div class="tab">

            <button class="tablinks" id="ing" onclick="openingr()">Ingredients</button>
            <button class="tablinks" onclick="opendir()">Directions</button>
        </div>


        <script>
        function openingr() {
            var page = document.getElementById("directions");
            var model = document.getElementById("ingredients");
            model.style.display = "block";
            page.style.display = "none";

        }
        </script>


        <script>
        function opendir() {
            var page = document.getElementById("ingredients");
            var model1 = document.getElementById("directions");
            model1.style.display = "block";
            page.style.display = "none";

        }
        </script>



        <!--------lower part ingredients------>
        <!-----fetching data from ingredients table----->
        <?php 

         
        $sql = "select * from `add_ingredient` where `ingrd_id` = '$ingrd_id' ";
        $result = $conn -> query($sql);
        if($result -> num_rows > 0){
          while($row = $result -> fetch_assoc()){
            if($row['ingrd_image']==NULL)
            {
               //////////////////
            }
            else
            {
           $ext= explode('|',$row['ingrd_image']);
           $path = $ext[1];
            }
      
          ?>



        <div id="ingredients" style="display:none; overflow-y:scroll; height:400px">
            <!---------  <div class="flex-ingrd">------------>
            <table class="tbl-ingrd" style="">
                <tr>
                    <td>
                        <div class="img-display" style="height:48px; width:50px; border-radius:50%;">
                            <img src="<?php echo $path;?>" alt="" title="<?php $ext[0];?>"
                                style="height:100%; width:100%; object-fit:cover;" />
                        </div>
                    </td>
                    </td>
                    </td>
                    <td><?php  echo $row['ingrd_name'];?></td>
                    <td></td>
                    <td><?php echo $row['quantity']; ?> </td>
                    <td></td>
                    <?php }} ?>
                </tr>

            </table>

            <!-----</div>  ---->

        </div>



        <!--------content of direction-------->
        <!-------fetching data from direction table----->

        <?php

 $sql = "select * from `add_direction` where `dir_id` = '$direction_id'";
 $result = $conn -> query($sql);
   if($result ->num_rows > 0)
   {
    while($row = $result -> fetch_assoc()){
 ?>


        <div id="directions" style="display:none;">
            <div class="flex-dir">
                <?php  $cnt='*'; ?>
                <table class="tbl-dir" id="tbl-dir">
                    <tr>
                        <td><?php echo $cnt; ?></td>

                        <td></td>
                        <td><?php  echo $row['direction']; ?></td>
                    </tr>
                    <?php  }} ?>
                </table>
            </div>
        </div>


    </div>
    </div>

    <!----- SCROLL BAR FOR Direction tab----->
    <script>
    $(document).ready(function() {
        $('#tbl-dir').DataTable({
            scrollY: true,
        });
    });
    </script>



    <!--    JS FOR TABS  -->
    <script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";

        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" activee", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " activee";
        event.preventDefault();
    }
    </script>


</body>

</html>