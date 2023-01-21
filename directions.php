<?php
include "navbar.php";
$var = $_SESSION['receipe_id'];
$dir_id = $_SESSION['dirtid'] ;  

 ?>


<!DOCTYPE html>
<html>
<title>INFITS</title>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <link rel="stylesheet" href="./css/directions.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <script type="text/JavaScript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
    </script>


    <script type="text/JavaScript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
    </script>


    <style>
    #content {
        overflow: auto;
        display: flex;
        flex-direction: column;
        height: 90%;
        font-family: 'Poppins';
        font-style: normal;
        //padding: 2px;
        margin: 0px;
    }

    /*   tabs      */
    /* Style the tab */
    .tab {
        display: flex;
        justify-content: space-around;
        background-color: #FAFAFA;
        border-radius: 10px;
        margin-top: 2px;
    }

    /* Style the buttons inside the tab */
    .tab a {
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
        //padding: 6px 20px;
        border: none;
        border-top: none;
        color: black;
        display: flex;
        flex-direction: row;
        margin-left: 90px;



    }

    .flex-box1 {
        display: flex;
        flex-direction: row;

        margin-left: 20%
    }

    .flex-box2 {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        flex-wrap: wrap;

    }

    .flex-box3 {
        display: flex;
        flex-direction: row;

        margin-left: 30px;
    }

    #url {
        border: none;
        display: inline-block;
        background: #FFFFFF;
        color: #A45DF2;
        cursor: pointer;
        text-align: center;
        height: 40px;
        width: 100px;
        margin-left: 50px;
    }

    #open-ingd {
        height: 55px;
        width: 55px;
        border-color: #7963FB;
        border-radius: 15px;
    }

    < !------direction poopup----->.direction-add {
        height: 344px;
        width: 420px;
        border-radius: 15px;
        border-style: 15px solid #BF59EA;
        color: black;

        z-index: 1;

    }

    .btn-done {
        height: 44px;
        width: 100px;
        background-color: #A85CF1;
        color: white;
        border-radius: 15px;

    }

    .header {
        display: flex;
        justify-content: center;
        margin-top: 10px;

        height: 50px;

    }

    .url-popup {
        height: 280px;
        width: 476px;
        border-radius: 15px;
        color: black;
        border-style: 5px solid black;
        z-index: 1;
        top: 50px;
        left: 300px;
        box-sizing: border-box;
    }

    .header-url {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        margin-top: 10px;
        margin-left: 20px;

    }

    .cont-url {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        margin-left: 10px;
    }

    .url-in {
        width: 421px;
        height: 57px;
        border-radius: 15px;
    }

    .url-upld {
        width: 157px;
        height: 54px;
        border-radius: 15px;
        background-color: #A85CF1;
        color: white;
        cursor: pointer;
    }
    </style>
</head>

<body>
    <!--------php for add in drections table---->
    <?php  
      if(isset($_POST['done']))
      {
         $var = $_SESSION['dirtid'] ;
		 $var_dir = $_POST['dirct'] ;
         $sql ="insert into `add_direction` (`dir_id`,`direction`) values('$var', '$var_dir')";
         if($conn -> query($sql) == true)
         {
           echo '<div class="alert alert-primary" role="alert" style="text-align:center;">
		   Directions Added;
		 </div>';

         }
         else{
          echo '<div class="alert alert-primary" role="alert" style="text-align:center;">
		      Directions Not Added;
		</div>';
         }
      }

       ?>

    <!------php for url------------>
    <?php  
	    if(isset($_POST['url-upld']))
		 {
			$url= $_POST['url-input'];
		  $sql ="update `dietian_recipies` set `link` = '$url' where `recipe_id` = '$var'"; 
		  if($conn -> query($sql) == true)
		  {
			echo '<div class="alert alert-primary" role="alert" style="text-align:center;">
			URL Added;
		   </div>';
           }
		   else{
			echo '<div class="alert alert-primary" role="alert" style="text-align:center;">
			Directions Added;
		  </div>';
		   }
		 }
		 if (isset($_POST['save'])){
  $query11 = "SELECT * FROM `add_direction` WHERE dir_id='$dir_id'";
  $result11= mysqli_query($conn,$query11);   
  if(mysqli_num_rows($result11) > 0){
    $value = $_SESSION['receipe_id'];
    unset($_SESSION["receipe_id"]);
    unset($_SESSION["dirtid'"]);
    unset($_SESSION["id"]);
	echo '<meta http-equiv="refresh" content="1; URL=view_recipe.php?recipe_id='.$value.'/>';
    
	
  }else{
	echo '<div class="alert alert-primary" role="alert" style="text-align:center;">
Ingredients not Added;
</div>';
  }
		}
		 ?>
    <div id="content">
        <!------------------------------------------------DASHBOARD--------------------------------------------------------->
        <br>
        <div>
            <h3 style="font-size: 20px; color: #202224; font-weight: 400; margin: 5px;float:left">Add
                Directions
            </h3>
            <form action="#" method="post">
                <button id="save" name="save" style="height:46px; width:151px; background:#D257E6; color:white;float:right;
         text-align:center; border:none;border-radius:15px;" type="submit">Save </button>
            </form>
        </div>
        <br>
        <form action="" method="post" enctype="multipart/form-data">
            <center>
                <?php
    
     
     $sql ="select * from `dietian_recipies` where `recipe_id` = '$var'";
     $result = $conn -> query($sql);
     if($result -> num_rows>0)
     {
       while($row = $result ->fetch_assoc()){ 
  
         if($row['image']==NULL)
         {
            //////////////////
         }
         else
        {
       $ext= explode('|',$row['image']);
        $path = $ext[1];
        }
        ?>

                <div class="img-display" style="height:150px; width:220px; border-radius:50%;">
                    <img src="<?php echo $path;?>" alt="" title="<?php $ext[0];}}?>"
                        style="height:100%; width:100%; object-fit:cover;" />
                </div>

                <br>
            </center>

            <div class="tab">
                <a href="create_recipe.php" style="text-decoration:none;">Recipe</a>
                <a href="Add-ingredients.php" style="text-decoration:none;">Ingredients</a>
                <a href="directions.php" style="text-decoration:none;background-color:#D257E6;color:white">Directions</a>
            </div>



            <!----------Direction tab------->
            <div id="directions" class="tabcontent" style="display:flex;color:black; flex-direction:row;">

                <div class="box-pop"
                    style="display:flex; justify-content:space-between; flex-direction:column; width:400px;">

                    <div id="dirModal" class="direction-add" style="height:230px; width:350px;background: #FFFFFF;
box-shadow: 0px 1.7px 5px rgba(0, 0, 0, 0.25);
border-radius: 10px;display:inline-block;">

                        <div class="header">
                            <h4> Add Direction </h4>
                        </div>
                        <input type="text" name="dirct" placeholder="Type directions here....."
                            style="border-radius:5px; height:45px; width:300px; margin-left:15px;"> <br> <br>

                        <button class="btn-done" name="done" style="text-align:center;margin-left:80px; width:auto">+Add
                            more directions </button>


                    </div>
                    <!---------------------url popup------------->
                    <div class="url-popup" id="add-url" style="height:200px; width:350px;margin-top:20px; z-index:1;background: #FFFFFF;
box-shadow: 0px 1.7px 5px rgba(0, 0, 0, 0.25);
border-radius: 10px;display:inline-block;">
                        <div class="header-url"
                            style="display:flex; flex-direction:row; justify-content:space-between;text-align:center;">
                            <h3 style="margin-left:90px; margin-top:10px;"> ADD URL </h3>
                        </div>
                        <div class="cont-url">
                            <input type="text" name="url-input" id="url-in" placeholder="Type url here....." style="height:40px; 
		width:280px;border-radius:10px;margin-top:15px; margin-left:5px;"><br>
                            <button type="submit" name="url-upld" id="url-upld" style="color:white; background-color:#A85CF1;height:40px;
		width:130px;text-align:center;border-radius:15px;margin-left:90px;">Upload </button>
                        </div>
                    </div> <br>



                    <!----------------DIRECTIONS POPUP-------------->

                </div>




                <div style="height:420px;float:right;left:460px;">
                    <ul style="max-height:420px;">

                        <?php
						$dir_id = $_SESSION['dirtid'] ;
            
              $query1 = "SELECT * FROM `add_direction` WHERE `dir_id`='$dir_id'";
              $result1= mysqli_query($conn,$query1);
              
              while($row=mysqli_fetch_assoc($result1)){

                ?>
                        <li>
                            <div style="margin-left:10px;display:inline;"><?php echo $row['direction']; ?></div>
                        </li>

                        <?php } ?>
                    </ul>

                </div>


        </form>
    </div>

    </div>
</body>

</html>