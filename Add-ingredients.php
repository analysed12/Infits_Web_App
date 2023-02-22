<?php 
include "navbar.php";
 $ingid = $_SESSION['id']; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous">
    </script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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

 

    <title>Infits</title>
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

body{
    font-family: 'NATS', sans-serif !important;
}
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
     
    /*  image   */
    .image-recipe{
        border-style:none;
        height:235px;
    width: 265px;
   border-radius:15px;
   background:#F3F3F3;
   text-align:center;

    }
    img{
        height:100%;
        width:100%;
        object-fit:cover;
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
    justify-content: space-around;
    background-color: #FAFAFA;
    border-radius: 10px;
    }

    /* Style the buttons inside the tab */
    .tab a{
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
     .tabcontent{
        
        display:block;
        
        color:black;
     }
     .flex-hor{
      display: flex;
      flex-direction:row;
      justift-content:space-between;
      margin-left:40%;
     }
      .plus{
        height:55px;
        width:55px;
        border-radius:10px;
        border:1px solid black;
        text-align:center;
        font-size:30px;
        font-weight:500;
        cursor:pointer;
      }
   .txt{
     font-size:20px;
     font-weight:400;
      color:black;
      font-family:NATS;
      padding: 5px 15px;
    
   }
   .head{
     display:flex;
     flex-direction:row;
     justify-content:space-between;
   }

   <!-----------popup style----->
   #SampleModal{
    position:relative;
    width:420px;
    height:300px;
    border-radius:15px;
    color:black;
    border:5px solid black;

    top:15%;
    left:5%;
    z-index:15px;

   }

   .ingrd-header {
        display: flex;
        
        height: 50px;
        margin-left: 20px;
        margin-top: 15px;

    }

    .ingrd-content {


        display: flex;

    }

    .left-flex {
        margin-top: 5px;
        margin-left: 56px;
        display: flex;
        justify-content: space-between;
        flex-direction: column;
    }

    .image-add {
        display: flex;
        text-align: center;
        height: 56px;
        width: 56px;
        border-radius: 5px;
        color: #BF59EA;
        border: 1px solid;
        margin-top: 40px;
        margin-left: 10px;
        cursor: pointer;
    }

    .input1 {
        width: 250px;
        height: 45px;
        border-radius: 8px;
        
    }

    #add {
        height: 48px;
        width: 178px;
        border-radius: 15px;
        background-color: #BF59EA;
        color: white;
        cursor: pointer;
        margin-left: 40px;
    }
   .ingrd-dsp{
    display:flex;
    flex-direction:row;

   }
     

        </style>
           
</head>
<body>
      

 <!------ingredients add----->

 <?php
        
        
        if(isset($_POST['add']) ||isset($_POST['my_image']) || isset($_POST['add-more']))
        {
  
          $ingrd = $_POST['ingrd-name'];
          $quanty =$_POST['quantity'];
        
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
                     $allowed_ex = array("jpg","png","svg");
      
                       if(in_array($img_ex_lc, $allowed_ex))
                      {
                         $new_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                        $img_upload_path = "./images/" .$new_name;
           
                        move_uploaded_file($tmp_name,$img_upload_path );  
                        if($img_upload_path != NULL){
                        $imageandpath="$new_name|$img_upload_path";
                        }
                        else{
                            $imageandpath = "IMG-001|./images/fruits.svg";
                        }
            
           
    
      
                        $sql ="insert into `add_ingredient` (`ingrd_id`,`ingrd_image`,`ingrd_name`,`quantity`) values('$ingid','$imageandpath','$ingrd', '$quanty')";
                         
  
                         if($conn -> query($sql) == true)
                   echo '<div class="alert alert-primary" role="alert" style="text-align:center;">
         Ingredients Added;
       </div>';
      
  
                       
                        } else {  
                         echo '<div class="alert alert-primary" role="alert" style="text-align:center;">
         Ingredients not Added;
       </div>';
  
                       }
                      }
           }}
                         
     ?>

       


<div id="content">
       <form action =" " method="POST" enctype="multipart/form-data">
      <!------------------------------------------------DASHBOARD--------------------------------------------------------->
     <div class="head" style="margin:30px">   <h3 style="font-size: 30px; color: #202224; font-weight: 600;">New Recipe</h3>
        <button id="save" name="save" style="height:46px; width:151px; background:#D257E6; color:white;
         text-align:center; border:none;border-radius:15px;">Save </button> </div>


        <!-----------------redirect to direction page----------->
         <?php
           if(isset($_POST['save']))
           {     
             
          echo '<meta http-equiv="refresh" content="1; URL=directions.php" />';  

           }

         ?>
    

        <center>
            <div class ="image-recipe">
              
   <!--------php code for image fetch----->
   <?php
    
     
    $var = $_SESSION['receipe_id'];
        //$rid = $_GET['rid'];
       $sql ="select * from `dietian_recipies` where `recipe_id` ='$var' ";
       $result = $conn -> query($sql);
       if($result -> num_rows>0)
       {
         while($row = $result ->fetch_assoc()){ 
    
           if($row['image']==NULL)
           { ?>
             <image src=".\images\camera.svg" >
             
         <?php  }
           else
          {
         $ext= explode('|',$row['image']);
          $path = $ext[1]; ?> 

          <img src="<?php echo $path;?>" alt="" title="<?php $ext[0];?>"
        <?php  }
        }}?>           
              
          </div>
        
           </center>


           <!-------tabs------>
     <div class="tab">
     <a href=" " style="text-decoration:none;">Recipe</a>
     <!------ <button class="tablinks" onclick="openCity(event, 'ingredients')">Ingredients</button>  ------>
    <a href="Add-ingredients.php" style="text-decoration:none;background-color:#D257E6;color:white""> Ingredients </a>
        <a href="directions.php" style="text-decoration:none;">Directions</a>
    </div>

     <div class="tabcontent" style="display:block; color:black;">
        <div class="flex-hor">
            <button class ="plus" id="btnshow"  onclick="click1()"> +</button> <p id="txt">Add Ingredients </p>
        </div>



        
        <!------content------>
        <div class="pop-ingrd"  id="SampleModal" style=" border:1px solid black; height:300px;width:400px;border-radius:15px; 
        display:none;z-index:1;top:25%;left:25%;">
                           <div class="ingrd-header">
                                <h5 id="aid" style="color:black;"> Add Ingredients </h5>
                            </div>


                            <div class="ingrd-content">
                                <div class="image-add">
                                      <h3 id="img-add" style="margin-left:20px; margin-top:15px; cursor:pointer;"
                                        style="display:inline">+ </h3>
                                        <!-- <p style="display:inline">Add Image</p> -->
                                      <input type="file" name="my_image" id="my_image" style="display:none;">
                                </div>
                                <br>

                                <div class="left-flex">
                                    <input type="text" class="input1" name="ingrd-name" id="ingrd-name"
                                        placeholder="Name of ingredient" required> <br>
                                    <input type="text" class="input1" name="quantity" id="quantity"
                                        placeholder=" quantity" required><br>
                                    <button type="submit" id="pid" name="add-more"
                                        style="color:#BF59EA;margin-left:5px;cursor:pointer;border:none;background-color:white;">
                                        Add more ingredients </button>
                                    <button type="submit" name="add" id="add">Add</button>
                                </div>
                                </form>
                        
                            </div>
        
        </div>

     



        <!--------------------data display------>
        <div class="ingrd-dsp">
        <ul style="max-height:420px;">

<?php
  //$ingrd=$_SESSION['id'] ; 
  $ingrd =182; 
  $query1 = "SELECT * FROM `add_ingredient` WHERE ingrd_id='$ingrd'";
  $result1= mysqli_query($conn,$query1);

  
  while($row=mysqli_fetch_assoc($result1)){
    if($row['ingrd_image']==NULL)
{  ?>
  <div class="img-display" style="margin-left:20px;height:5px; width:5px; border-radius:100px;display:inline;">
  <img src="./images/salad.svg" style="height:40px; width:40px; object-fit:cover;" />
</div>
<?php }
else
{
$ext= explode('|',$row['ingrd_image']);
$path = $ext[1];  ?>

    
<li>
    <div class="img-display" style="margin-left:20px;height:5px; width:5px; border-radius:100px;display:inline;">
        <img src="<?php echo $path;?>" alt="" title="<?php $ext[0];?>"
            style="height:40px; width:40px; object-fit:cover;" />
    </div>
<?php } ?>
    
    <div style="margin-left:20px;display:inline;"><?php echo $row['ingrd_name']?></div>
    <div style="margin-left:20px;display:inline;"><?php echo $row['quantity']?></div>

</li>
<?php
  }?>
  </ul>
    </div>
  
    </div>
 </div>

   <!------open popoup------>
  
   <script>

//var btn= document.getElementById("btnshow");
var model = document.getElementById("SampleModal");
function click1(){
    model.style.display = "block";

}

</script>





</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <!------js for add ingredients popup---->
  <script>
    $(document).ready(function() {
        $("#img-add").click(function() {
            $("#my_image").trigger('click');

        });

    });
    </script>

</html>