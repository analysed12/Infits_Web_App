<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
    <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
 <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

  

    <title>All Recipe</title>
</head>
<style>

body {
        font-family: 'NATS', serif !important;
        letter-spacing: 1px;
    }
    /* Style the tab content */

    .tabcontent {
    padding: 6px 30px;
    border: none;
    border-top: none;
    

  
    }

 recipe_flex{
    //padding: 20px 0;
    font-size: 15px;
  font-weight:400px;
  height:200px;
  width:310px;
  border-radius:15px;
  

}
.breakfast{
   background-color:#B5F7B9;
   border-radius:15px;
   font-size:20px;
   font-weight:400px;
   height:180px;
   width:280px;


}
.lunch{
    background-color: #F3D1D2;
    border-radius:15px;
   font-size:20px;
   font-weight:400px;
   height:180px;
   width:280px;


}
.snacks{
    background-color: #B8DDF1;
    border-radius:15px;
   font-size:20px;
   font-weight:400px;
   height:180px;
   width:280px;


}
.dinner{
    background-color: #edb2b274;
    border-radius:15px;
   font-size:20px;
   font-weight:400px;
   height:180px;
   width:280px;


}
.tag{
    margin-top:2px;
    margin-left:2px;
}
.flex-first{
    display:flex;
    flex-direction:row;
    padding:10px;
    justify-content:space-around;
}

    .tag-element {
        background-color: #7282FB;
        color: white;
        margin:5px;
        padding: 5px;
        border-radius: 5px;
    }

    .search-box{
        border:none;

    }

    .search-box:focus{
        outline:none;
    }

    .search-icon{
        border:none;
        background:white;

    }

    .search-form{
        border: 1px solid #E1E1E1;
        width:fit-content;
        float:right;
        padding:2px;
        border-radius : 5px;
    }
    .cards {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        gap: 4rem;
        grid-template-columns: repeat(3, minmax(250px, 1fr));
        
    }
    .card {
        /* background-color: dodgerblue; */
        color: black;
        padding: 1rem;
        height: auto;
        width: 100%;
        background: #FFFFFF;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
        border-radius: 20px;
    }
    .card-upper-details {

        /* width: 60%; */
        display: inline;

    }
    .card-upper{
        display:flex; 
        flex-direction:row; 
        justify-content:space-between;

    }


    </style>
    <script>
    $(document).ready(function() {
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

<!----------navbar---------->
<?php include('event_calendar.php'); ?>
<?php include('connection.php'); ?>


<br>
<div class="row" style="padding:2px;">
        <div class="col-6" style="font-weight:bold;font-size:20px;">Recipes</div>
        <div class="col-6" style="text-align:right">
            <form class="search-form" method="post">
                <input type="search" placeholder="Search here" name="sinput" class="search-box">
                <button type="submit"  id ="seabtn" name="seabtn" class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
        
        
  </div>
  <br>
  

 <div class="flex-top" style="display:flex; flex-direction:row;justify-content:space-between; cursor:pointer; margin-left:10px;">
            <div class ="breakfast" id="btn1"> 
                <img src=".\images\breakf.svg" style="margin-left:90px;">
                <p style="margin-left:2px; margin-top:-140px; z-index:1;"><strong><h3> Breakfast </h3> </strong>
               <h5 style="padding:1px;"> Free menu planning 
to <br>suit your needs </h5>
             </p>
    </div>
            <div class ="lunch" id="btn2">
            <img src=".\images\lun.svg" style="margin-left:90px;">
            <p style="margin-left:2px; margin-top:-140px; z-index:1;"><strong><h3> Lunch </h3> </strong>
            <h5 style="padding:1px;"> Free menu planning 
to <br>suit your needs </h5>
  </p>
                
           </div>
            <div class = "snacks" id="btn3">
            <img src=".\images\sna.svg" style="margin-left:80px;">

            <p style="margin-left:2px; margin-top:-150px; z-index:1;"><strong><h3> Snacks </h3> </strong>
            <h5 style="padding:1px;"> Free menu planning 
to <br>suit your needs </h5>
  </p>
            </div>
            <div class = "dinner" id="btn4">
            <img src=".\images\din.svg" style="margin-left:55%;">
            <p style="margin-left:2px; margin-top:-110px; z-index:1;"><strong><h3> Dinner </h3> </strong> 
            <h5 style="padding:1px;"> Free menu planning 
to <br>suit your needs </h5>
 </p>
              
        </div>
</div>
   


<div class="row" style="padding:1rem;">
        <div class="col-6" style="font-weight:bold;font-size:20px;">All Recipes</div>
        <div class="col-6" style="text-align:right">
          <p id="vall" style="font-size:18px;"> </p>
                        </div>





 <!-------------------search recipes------------>

<div class="tabcontent" id="search" style="display:block;">
         <div class="cards">

         <!--------------Search recipes---------->
<?php 
    if(isset($_POST['seabtn'])){
        $nam_var = $_POST['sinput'];
       $sql ="select * from dietian_recipies where name like '$nam_var%'";
       $result =$conn-> query($sql);
       if($result -> num_rows >0)
       {
        while ($row =$result ->fetch_assoc())
        {
    
    
                if($row['image']==NULL)
                {
                   //////////////////
                }
                else
               {
              $ext= explode('|',$row['image']);
               $path = $ext[1];
               $t1= explode('|', $row['time']);
               $GLOBALS['dirid'] = $row['instruction'];

               }
               ?>
               

            <div class="card" container>
                <div class="card-upper">  
                    <p id="bu" style="font-size:20px; font-weight:400px;color:red; z-index=1;"> Breakfast </p>   <p style="margin-left:20px; font-size:20px;color:red;">
                     <span class="fa-thin fa-clock"></span><?php echo  ($t1[1]);?></p> </div>

            <div class="img-dis" style="height:100px; width:110px; margin-left:50px;text-align:center;"> 
                <img src="<?php echo $path;?>" alt="" title="<?php $ext[0]; ?>" style="height:110px; width:200px; object-fit:cover;"/>
            </div>
            <div class="card-upper" >
               <p id="nm" style="font-size:19px; font-weight:600px;"> <?php echo $row['name'];?> </p>
               <div class="wrap" style="display:flex;">
               <a href="edit_recipe.php?id=<?php echo $row['recipe_id'] ?>" title="Update Record" style="color#7282FB" data-toggle="tooltip">
                 <span class="fa fa-pencil"></span> </a>
                 <a onclick="return confirm('Are you sure?')" href="delete_recipe.php?id=<?php echo $row['recipe_id'] ?>" title="Delete Record" style="color#7282FB" data-toggle="tooltip"> 
                  <span class="fa fa-trash "></span></a>
            </div>
            </div>

            <div class="card-upper">
            <p style="font-size:20px; font-weight:400;"> <span class="fa-thin fa-fire"></span><?php echo $row['calories'];?> </p> 
        
        
            <p style="font-size:20px; font-weight:400;"> <?php echo $row['serving']; ?> <span>serve</span></p>

            </div>
            
            </div>     
             
            <?php }} }?>

            </div> 
                 
</div>

      
     


<div class="tabcontent" id="breakfast1" style="display:none;">
         <div class="cards">

         <!--------------breakfast recipes---------->
<?php 
    $sql = "SELECT * FROM `dietian_recipies` WHERE category = \"Breakfast\";";
     $result = $conn -> query($sql); 
     if($result -> num_rows> 0){
             while($row = $result->fetch_assoc()){
                if($row['image']==NULL)
                {
                   //////////////////
                }
                else
               {
               $ext= explode('|',$row['image']);
               $path = $ext[1];
               $t1= explode('|', $row['time']);
               $GLOBALS['dirid'] = $row['instruction'];

               }
               ?>
               

            <div class="card" container>
                <div class="card-upper">  
                    <p id="bu" style="font-size:20px; font-weight:400px;color:red; z-index=1;"> Breakfast </p>   <p style="margin-left:20px; font-size:20px;color:red;">
                     <span class="fa-thin fa-clock"></span><?php echo  ($t1[1]);?></p> </div>

            <div class="img-dis" style="height:100px; width:110px; margin-left:50px;text-align:center;"> 
                <img src="<?php echo $path;?>" alt="" title="<?php $ext[0]; ?>" style="height:110px; width:200px; object-fit:cover;"/>
            </div>
            <div class="card-upper" >
               <p id="nm" style="font-size:19px; font-weight:600px;"> <?php echo $row['name'];?> </p>
               <div class="wrap" style="display:flex;">
               <a href="edit_recipe.php?id=<?php echo $row['recipe_id'] ?>" title="Update Record" style="color#7282FB" data-toggle="tooltip">
                 <span class="fa fa-pencil"></span> </a>
                 <a onclick="return confirm('Are you sure?')" href="delete_recipe.php?id=<?php echo $row['recipe_id'] ?>" title="Delete Record" style="color#7282FB" data-toggle="tooltip"> 
                  <span class="fa fa-trash "></span></a>
            </div>
            </div>

            <div class="card-upper">
            <p style="font-size:20px; font-weight:400;"> <span class="fa-thin fa-fire"></span><?php echo $row['calories'];?> </p> 
        
        
            <p style="font-size:20px; font-weight:400;"> <?php echo $row['serving']; ?> <span>serve</span></p>

            </div>
            
            </div>     
             
            <?php 
        }} ?>

            </div> 
          


            
</div>




 <!--------------lunch recipes---------->


<div class="tabcontent" id="lunch1" style="display:none;">
         <div class="cards">

        <?php 
    $sql = "SELECT * FROM `dietian_recipies` where `category` = 'Lunch'";
     $result = $conn -> query($sql); 
     if($result -> num_rows> 0){
             while($row = $result->fetch_assoc()){
                if($row['image']==NULL)
                {
                   //////////////////
                }
                else
               {
              $ext= explode('|',$row['image']);
               $path = $ext[1];
               $t1= explode('|', $row['time']);
               $GLOBALS['dirid'] = $row['instruction'];

               }
               ?>
               

            <div class="card" container>
                <div class="card-upper">  
                    <p id="bu" style="font-size:20px; font-weight:400px;color:red; z-index=1;"> Lunch</p>   <p style="margin-left:20px; font-size:20px;color:red; ">
                    <span class="fa-thin fa-clock"></span> <?php echo  ($t1[1]);?></p> </div>

            <div class="img-dis" style="height:100px; width:110px; margin-left:50px;text-align:center;"> 
                <img src="<?php echo $path;?>" alt="" title="<?php $ext[0]; ?>" style="height:110px; width:200px; object-fit:cover;"/>
            </div>
            <div class="card-upper" >
               <p id="nm" style="font-size:19px; font-weight:600px;"> <?php echo $row['name'];?> </p>
               <div class="wrap" style="display:flex;">
               <a href="edit_recipe.php?id=<?php echo $row['recipe_id'] ?>" title="Update Record" style="color#7282FB" data-toggle="tooltip">
                 <span class="fa fa-pencil"></span> </a>
                 <a onclick="return confirm('Are you sure?')" href="delete_recipe.php?id=<?php echo $row['recipe_id'] ?>" title="Delete Record" style="color#7282FB" data-toggle="tooltip"> 
                  <span class="fa fa-trash "></span></a>
            </div>
            </div>

            <div class="card-upper">
            <p style="font-size:20px; font-weight:400;"> <span class="fa-thin fa-fire"></span><?php echo $row['calories'];?> </p>  

            <p style="font-size:20px; font-weight:400px;"> <?php echo $row['serving'];?><span> serve </span></p>

            </div>
            
            </div>            
            <?php }} ?>

            </div> 
                
</div>



<!--------------Snacks recipes---------->
<div class="tabcontent" id="snack1" style="display:none;">
         <div class="cards">

         
<?php 
    $sql = "SELECT * FROM dietian_recipies where `category` = 'snacks'";
     $result = $conn -> query($sql); 
     if($result -> num_rows> 0){
             while($row = $result->fetch_assoc()){
                if($row['image']==NULL)
                {
                   //////////////////
                }
                else
               {
              $ext= explode('|',$row['image']);
               $path = $ext[1];
               $t1= explode('|', $row['time']);
               $GLOBALS['dirid'] = $row['instruction'];

               }
               ?>
               

            <div class="card" container>
                <div class="card-upper">  
                    <p id="bu" style="font-size:20px;  font-weight:400px;color:red; z-index=1;"> Snacks</p> 
                      <p style="margin-left:20px; font-size:20px;color:red;"><span class="fa-thin fa-clock"></span> <?php echo  ($t1[1]);?></p> </div>

            <div class="img-dis" style="height:100px; width:110px; margin-left:50px;text-align:center;"> 
                <img src="<?php echo $path;?>" alt="" title="<?php $ext[0]; ?>" style="height:110px; width:200px; object-fit:cover;"/>
            </div>
            <div class="card-upper" >
               <p id="nm" style="font-size:19px; font-weight:600px;"> <?php echo $row['name'];?> </p>
               <div class="wrap" style="display:flex;">
               <a href="edit_recipe.php?id=<?php echo $row['recipe_id'] ?>" title="Update Record" style="color#7282FB" data-toggle="tooltip">
                 <span class="fa fa-pencil"></span> </a>
                 <a onclick="return confirm('Are you sure?')" href="delete_recipe.php?id=<?php echo $row['recipe_id'] ?>" title="Delete Record" style="color#7282FB" data-toggle="tooltip"> 
                  <span class="fa fa-trash "></span></a>
            </div>
            </div>

            <div class="card-upper">
            <p style="font-size:20px; font-weight:400;"> <span class="fa-thin fa-fire"></span><?php echo $row['calories'];?> </p> 


            <p style="font-size:20px; font-weight:400;"> <?php echo $row['serving']; ?> <span>serve </span></p>

            </div>
            
            </div>            
            <?php }} ?>

            </div> 
            
    </div>



   <!--------------Snacks recipes---------->
    <div class="tabcontent" id="dinner1" style="display:none;">
         <div class="cards">

       
<?php 
    $sql = "SELECT * FROM dietian_recipies where `category` = 'Dinner'";
     $result = $conn -> query($sql); 
     if($result -> num_rows> 0){
             while($row = $result->fetch_assoc()){
                if($row['image']==NULL)
                {
                   //////////////////
                }
                else
               {
              $ext= explode('|',$row['image']);
               $path = $ext[1];
               $t1= explode('|', $row['time']);
               $GLOBALS['dirid'] = $row['instruction'];

               }
               ?>
               

            <div class="card" container>
                <div class="card-upper">  
                    <p id="bu" style="font-size:20px; font-weight:400px;color:red; z-index=1;"> Dinner </p> 
                      <p style="margin-left:20px; font-size:20px;color:red;"> <span class="fa-thin fa-clock"></span> <?php echo  ($t1[1]);?></p> </div>

            <div class="img-dis" style="height:100px; width:110px; margin-left:50px;text-align:center;"> 
                <img src="<?php echo $path;?>" alt="" title="<?php $ext[0]; ?>" style="height:110px; width:200px; object-fit:cover;"/>
            </div>
            <div class="card-upper" >
               <p id="nm" style="font-size:19px; font-weight:600px;"> <?php echo $row['name'];?> </p>
               <div class="wrap" style="display:flex;">
               <a href="edit_recipe.php?id=<?php echo $row['recipe_id'] ?>" title="Update Record" style="color#7282FB" data-toggle="tooltip">
                 <span class="fa fa-pencil"></span> </a>
                 <a onclick="return confirm('Are you sure?')" href="delete_recipe.php?id=<?php echo $row['recipe_id'] ?>" title="Delete Record" style="color#7282FB" data-toggle="tooltip"> 
                  <span class="fa fa-trash "></span></a>
            </div>
            </div>

            <div class="card-upper">
            <p style="font-size:20px; font-weight:400;"> <span class="fa-thin fa-fire"></span><?php echo $row['calories'];?> </p> 

    

            <p style="font-size:20px; font-weight:400;"><?php echo $row['serving']; ?> <span> serve <span></p>

            </div>
        
            </div>   
                  
            <?php }} ?>

            </div> 
          


            
</div>



</body>
</html>
  