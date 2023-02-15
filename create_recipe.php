<?php include 'navbar.php'; ?>

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
        font-family: 'NATS', sans-serif !important;
        
    }
    #content{
        overflow: auto;
        display: flex;
        flex-direction: column;
        height: 90%;
        font-family: 'Poppins';
        font-style: normal;
        padding: 10px;
        margin: 0px;
    }

    /*  image   */
    .custom-file-input {
        color: transparent;
    }

    .custom-file-input::-webkit-file-upload-button {
        visibility: hidden;
    }

    .custom-file-input::before {
        content: 'Upload Photo';
        color: black;
        display: inline-block;
        background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3);
        border: none;
        border-radius: 3px;
        padding: 30px;
        outline: none;
        white-space: nowrap;
        -webkit-user-select: none;
        cursor: pointer;
        text-shadow: 1px 1px #fff;
        font-weight: 700;
        font-size: 10pt;
    }

    .custom-file-input:hover::before {
        border-color: black;
    }

    .custom-file-input:active {
        outline: 0;
    }

    .custom-file-input:active::before {
        background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
    }

    /*   tabs      */
    /* Style the tab */
    .tab {
        display: flex;
        justify-content:center;
       align-text:center;
       margin-left:17rem;
        width: 634px;
        
        background-color: #FAFAFA;
        border-radius: 52px;
    }

    /* Style the buttons inside the tab */
    .tab a {
        background-color: inherit;

        border-radius: 52px;
        float: left;
        border: none;
        padding: 10px 40px;
        outline: none;
        cursor: pointer;
        transition: 0.3s;
        font-size: 17px;
        margin: 10px;
    }

    /* Change background color of buttons on hover */
    .tab a:hover {
        background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab a.activee {
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

    /*   FORM   */
    .form-flex {
        display: flex;
        gap:2rem;
        justify-content:center;
        
    }

    .flex-left,
    .flex-right {
        display: flex;
        flex-direction: column;
    }

    input[type=text],
    #dropdown {
        background: #FFFFFF;
        box-shadow: 0px 1.7px 5px rgba(0, 0, 0, 0.25);
        border-radius: 10px;
        border: none;
        padding: 10px;
        width: 450px;
    }



    < !-------CSS for add url popup----->.add-url {
        height: fit-content;
        width: 420px;
        ;
        display: none;
        position: fixed;
        text-align: -webkit-center;
        overflow: auto;
        border-radius: 15px;
        border: 1px solid black;
        z-index: 1;
        margin-left: 50%;


    }

    .url-header {
        margin-left: 15px;
        margin-top: 5px;
        display: flex;
        flex-direction: row: text-align:center;
        padding: 5px 10px;
        justify-content: space-around;
    }

    .url-content {
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        margin-top: 5px;
        text-align: center;

    }

    #url1 {
        height: 57px;
        width: 400px;
        margin-left: 5px;
        margin-right: 10px;
        border: none;
        border-radius: 10px;
        padding: 10px;
        box-shadow: 0px 1.7px 5px rgb(0 0 0 / 25%);


    }

    .url-save {
        height: 54px;
        width: 197px;
        cursor: pointer;
        backrgound: #A85CF1;
        border-radius: 10px;
        color: white;
        border: none;

        margin-left: 100px;
        margin-top: 15px;

    }

    .add-dirc {
        display: block;
        height: 334px;
        width: 476px;
        z-index: 1;
        border-radius: 10px;
        position: fixed;
        border: 1px solid;
    }

    .dirc-header {
        display: flex;
        flex-direction: row;
        padding: 5px 5px;
        text-align: center;
        font-size: 20px;
        height: 15px
    }

    .dirc-content {
        margin-top: 15px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;

    }

    #input-dirc {
        height: 54px;
        width: 197px;
        border-radius: 16px;
        margin-left: 15px;
        margin-right: 15px;
    }

    #dirc-add {
        height: 197px;
        width: 54px;
        background: #A85CF;
        border-radius: 10px;
        border: none;
        color: white;
        align-items: center;
        font-size: 20px;

    }

    #dirc-p {
        text-align: center;
        display: flex;
        margin-left: 20px;
        color: #A85CF;
        font-size: 15px;
    }

    .addcrse {
        display: none;
        height: 30px;
        width: 70px;
        top: 25%;
        left: 25%;
        border-radius: 8px;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        border: 1px solid;
        color: black;
    }

    #txtcourse {
        height: 25px;
        width: 40px;
        border-radius: 3px;
    }

    #btn-course {
        height: 25px;
        width: 25px;
        border-radius: 5px;
        background-color: #A85CF;
        color: white;
        cursor: pointer;
    }
    </style>

    <script>
    function addcourse() {
        var id = document.getElementById("course-pop");
        id.style.display = "block";

    }
    </script>


    <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



</head>

<body>
    <div id="page">


        <?php
         
if( isset($_POST['save']) || isset($_FILES['my_image']))
{     
      $id = $_SESSION['name'] ;

      $repe_id = rand(100,1000);

      
      $_SESSION['receipe_id'] = $repe_id;  // receipe id as session variable
      $name =$_POST['R-name'];
    //   $GLOBALS['rname']=$name;
      $course =$_POST['c-name'];
        
      $cate = $_POST['catgry'];
       
      $p_time =$_POST['p-time'];

      $c_time =$_POST['c-time'];
      $serv = $_POST['serve'];
      $calo = $_POST['cal'];
      $prot  = $_POST['prt'];
      $fat = $_POST['fats'];
      $carbo =$_POST['carbs'];
    //  $fibr = $_POST['fibre'];
    $fibr= '90';
      $link ="HELLO HOW R U?";
      $file1= "file";
      $ingrd= rand(100,1000);
      $_SESSION['id'] = $ingrd;                  //ingredient id as a global variable

      $inst = rand(100,1000);                 //instruction id
     $_SESSION['dirtid'] = $inst;
  

      $total_time ="$p_time|$c_time";


      $img_name= $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
      $error =$_FILES['my_image']['error'];
       $file_type= $_FILES['my_image']['type'];
     if($error === 0)
     {
        if($img_size > 2209712)
        {
              echo("file too large");

         }
         else
        {
                 $img_ex=pathinfo($img_name, PATHINFO_EXTENSION);
                $img_ex_lc=strtolower($img_ex);
               $allowed_ex = array("jpg","png");

                 if(in_array($img_ex_lc, $allowed_ex))
                {
                   $new_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                  $img_upload_path = "./images/" .$new_name;
     
                  move_uploaded_file($tmp_name,$img_upload_path );  
                  $imageandpath="$new_name|$img_upload_path";
      
      $sql = "INSERT INTO `dietian_recipies`(`recipe_id`,`name`,`time`,`serving`,`link`,`calories`,`proteins`,
       `fats`,`fibres`,`carbs`,`ingredient`,`instruction`,`category`,`dietitianuserID`,`image`,`file`,`course`)
       VALUES('$repe_id','$name','$total_time','$serv','$link','$calo',
      '$prot','$fat','$fibr','$carbo','$ingrd','$inst','$cate','$id','$imageandpath','$file1','$course')";

  //insert default values into ingredient table
     $sql1= "INSERT INTO `add_ingredient`(`ingrd_id`,`ingrd_name`,`quantity`) VALUES         
            ('$ingrd','ingredients', '1')";


           //insert values into instruction table
          $sql2 ="INSERT INTO `add_direction`(`dir_id`,`direction`) VALUES ('$inst','directions')";
          
      if($conn -> query($sql)==true && $conn -> query($sql1)== true && $conn -> query($sql2)==true)
       {
       echo '<div class="alert alert-primary" role="alert" style="text-align:center;">
       New Recipe Added;
     </div>';  
     echo '<meta http-equiv="refresh" content="1; URL=Add-ingredients.php" />';
      
        } else {
    
        echo '<div class="alert alert-primary" role="alert" style="text-align:center;">
       Recipe Not Added;
     </div>';


       }
     }
   }
  
   
 }

}?>

        <div id="content">
            <form action="create_recipe.php" method="POST" enctype="multipart/form-data">
                <!------------------------------------------------DASHBOARD--------------------------------------------------------->
                <div>
                    <h3 style="font-size: 30px; font-weight: 500; margin: 20px;float:left">Add Recipe</h3>
                    <button id="save" name="save" style="height:46px; width:151px; background:#D257E6; color:white;float:right; margin-top:1.5rem;
         text-align:center; border:none;border-radius:15px;">Save </button>
                </div>
                <br><br><br>


                <div style="margin-left:40%;">
                <div><img src="images/camera.png" alt="" id="camera" style="width:28%"><input type="file"  id="my_image" style="display:none"  name="my_image" required></div>
                    

                </div>
                <br><br>

                <div class="tab">
                    <a href=" " style="text-decoration:none;background-color:#D257E6;color:white">Recipe Details</a>
                <!-----    <button class="tablinks" onclick="openCity(event, 'ingredients')">Ingredients</button>        ------>
                    <a href="#" style="text-decoration:none;"> Ingredients </a>
                    <a href="#" style="text-decoration:none;">Directions</a>
                </div>

                <br><br>

                <div id="recipe" class="tabcontent" style="display:block;">

                    <div class="form-flex">
                        <div class="flex-left">
                            <input type="text" name="R-name" placeholder="Recipe Name" required>
                            <br><br>

                            <select name="catgry" id="dropdown" placeholder="Categories" required>
                                <option value="" disabled selected>Categories</option>
                                <option value="Pancake">Pancake</option>
                                <option value="Croissants">Croissants</option>
                                <option value="Butter bread">Butter bread</option>
                                <option value="Poha">Poha</option>
                                <option value="Omelete">Omelete</option>
                                <option value="Sandwich">Sandwich</option>

                            </select>
                            <br><br>

                            <input type="text" name="c-time" placeholder="Cooking Time" required>
                            <br><br>
                        </div>
                        <!------------data fetching from category table-------->


                        <div class="flex-right">

                            <select name="c-name" id="dropdown" placeholder="Courses" autocomplete="off" required>
                                <option value="" disabled selected>Courses</option>
                                <option value="Breakfast">Breakfast</option>
                                <option value="eleven">Elevenses (11am)</option>
                                <option value="Lunch">Lunch</option>
                                <option value="snack">Snack</option>
                                <option value="dinner">Dinner</option>
                                <option value="other">Others</option>
                            </select>

                            <br><br>

                            <input type="text" name="p-time" placeholder="Preparation Time" required>
                            <br><br>

                            <input type="text" name="serve" placeholder="Servings" required>
                            <br><br>

                        </div>
                    </div>

                    <center>
                        <p style="color: black; font-weight: 600; font-size: 20px;">Nutritional Details</p>
                    </center>

                    <div class="form-flex" >
                        <div class="flex-left" >
                            <input type="text" name="cal" placeholder="Calories" required>
                            <br><br>

                            <input type="text" name="fats" placeholder="Fats" required>
                            <br><br>
                        </div>
                        <div class="flex-right">
                            <input type="text" name="prt" placeholder="Protien" required>
                            <br><br>

                            <input type="text" name="carbs" placeholder="Carbs" required>
                            <br><br>
                        </div>
                    </div>
                </div>
            </form>





        </div>



        <!--    JS FOR TABS  -->
        <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
                event.preventDefault();
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
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <!------js for add ingredients popup---->
  <script>
    $(document).ready(function() {
        $("#camera").click(function() {
            $("#my_image").trigger('click');

        });

    });
    </script>

</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6S">

</html>