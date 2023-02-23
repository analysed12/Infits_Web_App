<?php include('navbar.php') ?>



<!Doctype html>
<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infits</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script type="text/JavaScript" 
src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
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
        justify-content: space-around;
        background-color: #FAFAFA;
        border-radius: 10px;
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
        display: none;
        /* padding: 6px 30px; */
        border: none;
        border-top: none;
        color: black;
        left: 456px;

    }

    .flex-box {
        display: flex;
        flex-direction: row;
        margin-left: 40%;

    }

    .box {
        height: 55px;
        width: 55px;
        border-radius: 5px;
        border-color: #7963FB;
        border: 1px solid;
        text-align: center;
        display: flex;

    }

    .link {
        display: flex;
        justify-content: space-between;
        margin-left: 20px;
    }

    #link-click {
        color: black;
        font-size: 20px;
        margin-top: 15px;
        margin-left: 10px;
        cursor: pointer;
    }

    < !-------popup style----->.add-ingrd {
        height: 320px;
        width: 350px;
        border-radius: 15px;
        display: none;
        ` color: black;
        font-size: 20px;
        font-weight: 400;

    }

    .ingrd-header {
        display: flex;
        justify-content: space-around;
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
        margin-left: 20px;
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
    </style>



    <!------js for add ingredients popup---->
    <script>
    $(document).ready(function() {
        $("#img-add").click(function() {
            $("#my_image").trigger('click');

        });

    });
    </script>

</head>

<body>
    
    

    <!------connection ------>
    <?php
        
        
      if(isset($_POST['add']) || isset($_POST['add-more']) || isset($_FILES['my_image']) || isset($_POST['save']))
      {

        $ingid = $_GET['ingd'];
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
                      $imageandpath="$new_name|$img_upload_path";
        
  
    
                      $sql ="insert into `add_ingredient` (`ingrd_id`,`ingrd_image`,`ingrd_name`,`quantity`) values('$ingid','$imageandpath','$ingrd', '$quanty')";
                       

                       if($conn -> query($sql) == true){
                 echo '<div class="alert alert-primary" role="alert" style="text-align:center;">
       Ingredients Added;
     </div>';
    

                     
                      } else {  
                       echo '<div class="alert alert-primary" role="alert" style="text-align:center;">
       Ingredients not Added;
     </div>';

                     }
                    }}}}
         
                       
   ?>



    <div id="page">
        <!------sideNavBar-------------->

        <form action="" method="post" enctype="multipart/form-data">
            <div id="content">
                <!------------------------------------------------DASHBOARD--------------------------------------------------------->
                <div>
                    <h3 style="font-size: 30px; color: #202224; font-weight: 400; margin: 5px;float:left">Edit
                        Ingredients
                    </h3>
                  <!------  <button id="save" name="save" style="height:46px; width:151px; background:#D257E6; color:white;float:right;
         text-align:center; border:none;border-radius:15px;">Edit</button>  ----->
                </div>
                <br>
                <center>
                    <?php
    
     
  // $var = $_SESSION['receipe_id'];
      $rid = $_GET['rid'];
     $sql ="select * from `dietian_recipies` where `recipe_id` ='$rid' ";
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
                <br>


                <div class="tab">
                    <div class="tab-item">
                        <a href="#" style="text-decoration:none;">Recipe Details</a>
                    </div>
                    <?php 
                        $vari = $_GET['inst']; 
                        $rid1 = $_GET['rid'];?>
                    <a href="Add-ingredients.php"
                        style="text-decoration:none;background-color:#D257E6;color:white;">Ingredients</a>
                    <a href="edit_directions.php?inst=<?php echo $vari;?>&rid=<?php echo $rid1?>" style="text-decoration:none;">Directions</a>
                </div>

                <br><br>


                <!----------ingredient tab------->
                <div id="ingredients" class="tabcontent" style="display:block;color:black;">

                    <!--------add-ingredients tab ------------->
                    <div id="add-ingrd" class="add-ingrd"
                        style="display:inline-block;width:420px;height:300px;border-radius:15px;border:1px solid;margin-left:120px; border-color:5px solid black;">

                        <!-- <div class="flex-box1" > -->
                            <div class="ingrd-header">
                                <h5 id="aid" style="color:black;"> Add Ingredients </h5>
                            </div>


                            <div class="ingrd-content">
                                <div class="image-add">
                                    <h3 id="img-add" style="margin-left:20px; margin-top:15px; cursor:pointer;"
                                        style="display:inline">+ </h3>
                                    <!-- <p style="display:inline">Add Image</p> -->
                                    <input type="file" name="my_image" id="my_image" style="display:none;"
                                        style="display:inline" required>
                                </div>

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
                            <!-- </div> -->
                        </div>
      

    </div>
   
    <div style="height:420px;display:inline-block;float:right;margin-right:300px">
        <ul style="max-height:420px;">

            <?php
              //$ingrd=$_SESSION['id'] ; 
              $ingrd =182; 
              $query1 = "SELECT * FROM `add_ingredient` WHERE ingrd_id='$ingrd'";
              $result1= mysqli_query($conn,$query1);
            
              
              while($row=mysqli_fetch_assoc($result1)){
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
            <li>
                <div class="img-display" style="margin-left:20px;height:5px; width:5px; border-radius:100px;display:inline;">
                    <img src="<?php echo $path;?>" alt="" title="<?php $ext[0];?>"
                        style="height:40px; width:40px; object-fit:cover;" />
                </div>
                
                <div style="margin-left:20px;display:inline;"><?php echo $row['ingrd_name']?></div>
                <div style="margin-left:20px;display:inline;"><?php echo $row['quantity']?></div> &nbsp;&nbsp;&nbsp;

                <a onclick="return confirm('Are you sure?')" href="delete_ingredient.php?name=<?php echo $row['ingrd_name'] ?>" title="Delete Record"
                                            style="color:#7282FB" data-toggle="tooltip"><span
                                                class="fa fa-trash "></span></a>
                                    
               </li>
        
           
            <?php
              }           
                ?>
        </ul>
    </div>

    </div>
    </div>

    </div>

    </div>
    </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6S">


    </html>