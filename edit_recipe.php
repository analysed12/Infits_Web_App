<?php include('navbar.php'); ?>

<!DOCTYPE html>
<html lang="en">
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
    background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.activee {
    background-color: #D257E6;
    color: white;
    }

    /* Style the tab content */
    .tabcontent {
    
    padding: 6px 30px;
    border: none;
    border-top: none;
    color: black;
    left:456px;
  
    }

    /*   FORM   */
    .form-flex{
        display: flex;
        justify-content: space-around;
    }
    .flex-left, .flex-right{
        display: flex;
        flex-direction: column;
    }

    input[type=text], #dropdown{
        background: #FFFFFF;
        box-shadow: 0px 1.7px 5px rgba(0, 0, 0, 0.25);
        border-radius: 10px;
        border:none;
        padding: 10px;
        width: 450px;
    }


     .flex-box-top{
        display:flex;
        flex-direction:row;
        justify-content:space-around;
        margin-left:200px;
        flex-wrap:wrap;
    

     }
     <!----edit----->
     #edit{
     
      width:70px;
      background-color:#D257E6;
      color:white;
      border-radius:15px;
     }
  

  
  


     <!-----image display----->
     .img-display{
    height: 200px;
  width:200px;
  border-radius:15px;
  text-align:center;
     }

     .img-display img{
    height:100%;
    width:100%;
    object-fit:cover;
  
   }



    </style>

      <!------js for add ingredients popup---->
  <script>
              $(document).ready(function(){
                $("#img-add").click(function(){
                  $("#my_image").trigger('click');

                });

              });
</script>



   </head>

  <body>
  <div id="page">



<!--------------update query----------->
    <?php

if( isset($_POST['editbtn']) || isset($_FILES['my_image']))
{     
   //$id= $_SESSION['dit_id']; 
       $rid = $_GET['id'];


      $id ='Sam';
    
      $name =$_POST['R-name'];
      $GLOBALS['rname']=$name;
      $course =$_POST['c-name'];
        
      $cate = $_POST['catgry'];
       
      $p_time =$_POST['p-time'];

      $c_time =$_POST['c-time'];
      $serv = $_POST['serve'];
      $calo = $_POST['cal'];
      $prot  = $_POST['prt'];
      $fat = $_POST['fats'];
      $carbo =$_POST['carbs'];
  
    $fibr= '90';
      $link ="HELLO HOW R U?";
      $file1= "file";
    
                                  //ingredient id as a global variable
 
                                   //instruction id
  

      $total_time ="$p_time|$c_time";


      $img_name= $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
      $error =$_FILES['my_image']['error'];
       $file_type= $_FILES['my_image']['type'];
     if($error === 0)
     {
        if($img_size > 209712)
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
      
      $sql = "UPDATE `dietian_recipies` set `name` = '$name',`time` = '$total_time',`serving` = '$serv',`link` = '$link',
      `calories` = '$calo',`proteins` = '$prot' , `fats` = '$fat',`carbs`= '$carbo', `category`= '$cate', `image` = '$imageandpath',
       `course`='$course' where `recipe_id` = '$rid' ";

          
       if($conn -> query($sql)==true)
       {
       echo '<div class="alert alert-primary" role="alert" style="text-align:center;">
			Recipes Updated;
		  </div>';
      
        } else {
    
        echo  '<div class="alert alert-primary" role="alert" style="text-align:center;">
			Recipes not updated;
		  </div>';


      }
     }
   }
  
   
 }

}?>



 <!------------------display data--------------->
 <?php 
    $rid = $_GET['id'];
    $sql= "select * from `dietian_recipies` where `recipe_id` = '$rid'";
    $result = $conn ->query($sql);
    if($result ->num_rows > 0){
      while($row= $result ->fetch_assoc()){

        $ext= explode('|',$row['image']);
        $path = $ext[1];

        $time1 = explode('|',$row['time']);

        $GLOBALS['dirid'] = $row['instruction'];
        $GLOBALS['ingid'] = $row['ingredient'];
      
 ?>



    <div id="content">
    <form action =" " method="POST" enctype="multipart/form-data">
      <!------------------------------------------------DASHBOARD--------------------------------------------------------->
      

        <div class="flex-box-top">
        <div class="img-display" style="height:180px; width:240px;" > 
          <img src="<?php echo $path;?>" alt="" title="<?php echo $ext[0];?>"  style="height:100%; width:100%; object-fit:cover;"/>
          <input type="file" name="my_image" id="my_image" style="display:none;">
          <span class="fa fa-pencil"  id="img-add" style="z-index:1; margin-left:20px; cursor:pointer;"></span>
</div>
      <button type="submit" name="editbtn" id="edit" style="height:50px; width:140px;background-color:#D257E6;color:white; border-radius:15px;">
     Edit </button>  
      
            
</div>

           <br>
           <br>
           


<div class="tab">
  <button class="tablinks">Recipe</button>
 <a href="edit_ingredients.php?ingd=<?php echo $row['ingredient']; ?>&rid=<?php echo $row['recipe_id']; ?>&inst=<?php echo $row['instruction'];?>"> Ingredients </a>
 <a href="edit_directions.php?inst=<?php echo $row['instruction'];?>&rid=<?php echo $row['recipe_id']; ?>" >Directions</a>
</div>



<div id="recipe" class="tabcontent" style="display:block;color:black;">

  <div class="form-flex">
    <div class="flex-left">
        <input type="text" name="R-name" placeholder="Recipe Name" value ="<?php echo $row['name']; ?>">
        <br><br>

        <select name="catgry" id="dropdown" placeholder="Categories" required>
          <option value="Breakfast">Breakfast</option>
          <option value="eleven">Elevenses (11am)</option>
          <option value="Lunch">Lunch</option>
          <option value="snack">Snack</option>
          <option value="dinner">Dinner</option>
          <option value="other">Others</option>

        </select>
        <br><br>

        <input type="text" name="c-time" placeholder="Cooking Time" value="<?php echo $time1[1]; ?>">
        <br><br>
    </div>
    

    <div class="flex-right">
    
        <select name="c-name" id="dropdown" placeholder="Courses" autocomplete = "off">
          <option value ="<?php echo $row['course']; ?>"><?php echo $row['course']; ?></option>
          <option value ="south indian">South Indian </option>
          <option value ="North indian"> North Indian </option>
          
        </select>
        
        <br><br>

        <input type="text" name="p-time" placeholder="Preperation Time" value="<?php echo $time1[0]; ?>">
        <br><br>
        
        <input type="text" name="serve" placeholder="Servings" value="<?php echo $row['serving']; ?>">
        <br><br>

    </div>
  </div>

  <center>
  <p style="color: black; font-weight: 600; font-size: 20px;">Nutritional Details</p>
</center>

  <div class="form-flex">
    <div class="flex-left">
        <input type="text" name="cal" placeholder="Calories" value="<?php echo $row['calories']; ?>">
        <br><br>

        <input type="text" name="fats" placeholder="Fats" value ="<?php echo $row['fats'];?>">
        <br><br>
    </div>
    <div class="flex-right">
        <input type="text" name="prt" placeholder="Protien" value="<?php echo $row['proteins'];?>">
        <br><br>

        <input type="text" name="carbs" placeholder="Carbs" value="<?php echo $row['carbs']; }}?>">
        <br><br>
     </div>
    </div>
</div>

        </form>

  </div>
      </div>


</body>
</html>