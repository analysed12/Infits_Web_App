<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infits</title>
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
    display: none;
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


    <!---------CSS for ingredients table--------->
    .link{
      width:200px;
      display:flex;
      flex-direction:row;
      
      
      align-self:center;
      
    }
    .symbol{
      margin-left:300px;
      text-align:center;
      height: 55px;
      width:55px;
      border-radius:9px;
      border-style:solid;
      border-color:purple;
      color:purple;
     
      
    }

    #add-dir{
      display:flex;
      margin:5px 15px;
      color:black;
      font-size:20px;
    }

    .popup-ingredients{
                box-sizing: border-box;
                 position: relative;
                 display:none;
                 
                width: 356px;
                height: 320px;
                top: 25%;
                left: 25%;
                background: #FFFFFF;
                border: 1px solid #E4E4E4;
                box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.09);
                border-radius:18px;
             }
.header{
  height: 15px;
    position: absolute;
    margin-top: 5px;
    justify-content: space-evenly;
     margin-left:5px;

}
#header{
  position: absolute;
width: 141px;
height: 18px;
 margin-left:30px;
font-family: 'NATS';
font-style: normal;
font-weight:400;
font-size: 25px;
line-height: 75%;
/* identical to box height, or 18px */

display: flex;


color: #000000;
}

             .box{
              margin-top:30px;
              display:flex;
              flex-direction:column;
              

             }

      <!----CSS for direction table----->
      flex-rightdir{
        display:flex;
        flex-direction:row;
        width:150px;
        flex-wrap:row wrap;
      justify-content:space-between;
      
      flex-basis:150px;


      }
      .upload-vdo{
        display:flex;
        flex-direction:row;
        width:153px;
        height: 48px;
        border-radius:10px;
        border: 1px solid #A45DF2;
        justify-content:space-between;
        flex-wrap:row wrap;
        margin-left:100px;
        
      }
      .btn-flex{
      
        border:none;
        display:inline-block;
        background: #FFFFFF;
        color:#A45DF2;
        cursor:pointer;
        text-align:center;
        
        
      }
      

      <!-------CSS for add url popup----->
     .add-url{
      height:fit-content;
      width:420px;;
      display:none;
      position:fixed;
      text-align:-webkit-center;
      overflow:auto;
      border-radius:15px;
      border: 1px solid black;
    z-index:1;
      margin-left:50%;
      

     }
     .url-header{
      margin-left:15px;
      margin-top: 5px;
      display:flex;
      flex-direction:row:
      text-align:center;
      padding:5px 10px;
      justify-content:space-around;
     }
     .url-content{
      display:flex;
      flex-direction:column;
      justify-content:space-evenly;
      margin-top:5px; 
      text-align:center;

     }
     #url1{
      height:57px;
      width: 400px;
      margin-left:5px;
      margin-right:10px;
      border:none;
      border-radius:10px;
      padding:10px;
      box-shadow:0px 1.7px 5px rgb(0 0 0 / 25%);

  
     }
    .url-save{
      height:54px;
      width:197px;
      cursor:pointer;   
      backrgound:#A85CF1;
      border-radius:10px;
      color:white;
      border:none;
    
      margin-left:100px;
      margin-top:15px;

     }
     <!-----style for add-directions popup------>
     .add-dirc{
      display:block;
      height:334px;
      width:476px;
      z-index:1;
      border-radius:10px;
      position:fixed;
      border:1px solid;
     } 
     .dirc-header{
      display:flex;
      flex-direction:row;
      padding:5px 5px;
      text-align:center;
      font-size:20px;
      height:15px
     }
     .dirc-content{
      margin-top:15px;
      display:flex;
      flex-direction:column;
      justify-content:space-between;
    
     }
     #input-dirc{
      height:54px;
      width:197px;
      border-radius:16px;
      margin-left:15px;
      margin-right:15px;
     }
     #dirc-add{
      height:197px;
      width:54px;
      background:#A85CF;
      border-radius:10px;
      border:none;
      color:white;
      align-items:center;
      font-size:20px;

     }
     #dirc-p{
      text-align:center;
      display:flex;
      margin-left:20px;
      color:#A85CF;
      font-size:15px;
     }
    </style>
<!--------ingredient image----->
<script>

$(function(){
  $('#sign').on('click',function(){
    $('#my_image1').trigger('click');
  });
});     
</script>

<!-------uploadvideo----->
<script>

  $("#video-symbol").click(function(){
    $("#video-upload").click();


});
</script>

  </head>

  <body>
  <div id="page">
    <?php include 'event_calendar.php'; ?>

    <?php
include ('connection.php');
if( isset($_POST['save']) && isset($_FILES['my_image']))
{     
   //$id= $_SESSION['dit_id']; 
      $id ='Sam';
      $name =$_POST['R-name'];
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
      $GLOBALS['id'] = $ingrd;                  //ingredient id as a global variable

      $inst = rand(100,1000);
    
  

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
      
      $sql = "INSERT INTO `dietian_recipies`(`name`,`time`,`serving`,`link`,`calories`,`proteins`,
       `fats`,`fibres`,`carbs`,`ingredient`,`instruction`,`category`,`dietitianuserID`,`image`,`file`,`course`)
       VALUES('$name','$total_time','$serv','$link','$calo',
      '$prot','$fat','$fibr','$carbo','$ingrd','$inst','$cate','$id','$imageandpath','$file1','$course')";

  //insert values into ingredient table
    $sql1= "INSERT INTO `add_ingredient`(`ingrd_id`,`ingrd_name`,`quantity`) VALUES         
           ('$ingrd','hhh', '4')";

           //insert values into instruction table
           $sql2 ="INSERT INTO `add_direction`(`dir_id`,`direction`) VALUES ('$inst','hjhj')";
          
       if($conn -> query($sql)==true && $conn -> query($sql1)== true && $conn -> query($sql2)==true)
       {?>
       echo "<script>
            alert("Recipe Added");
        </script>";  
      
       <?php } else {?>
    
        echo '<script>
            alert("Recipe Not Added");
            </script>';


      <?php }
     }
   }
  
   
 }

}?>




  <form action=" " method="post" enctype="multipart/form-data">
    <div id="content">
      <!------------------------------------------------DASHBOARD--------------------------------------------------------->
        <h3 style="font-size: 30px; color: #202224; font-weight: 400; margin: 5px;">New Recipe</h3>
        <button id="save" name="save" style="height:46px; width:151px; background:#D257E6; color:white;
         text-align:center; border:none;border-radius:15px;">Save </button> 
    

        <center>
            
        <input type="file" class="custom-file-input"  name="my_image">

       
           <br><br>
           </center>


<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'recipe')">Recipe</button>
  <button class="tablinks" onclick="openCity(event, 'ingredients')">Ingredients</button>
  <button class="tablinks" onclick="openCity(event, 'directions')">Directions</button>
</div>



<div id="recipe" class="tabcontent">

  <div class="form-flex">
    <div class="flex-left">
        <input type="text" name="R-name" placeholder="Recipe Name">
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

        <input type="text" name="c-time" placeholder="Cooking Time">
        <br><br>
    </div>
    <!------------data fetching from category table-------->
    

    <div class="flex-right">
    
        <select name="c-name" id="dropdown" placeholder="Courses" autocomplete = "off">
          <option value =" ">Courses</option>
          <?php 
    $sql_query =" SELECT * FROM category";
    $result = $conn -> query($sql_query);
    if($result -> num_rows > 0)
    {
        while($row = $result -> fetch_assoc()){
    ?>
        <option value="<?php  echo $row['category'];?>"><?php echo $row['category']; ?></option>
          <?php }}?>
        </select>
        
        <br><br>

        <input type="text" name="p-time" placeholder="Preperation Time">
        <br><br>
        
        <input type="text" name="serve" placeholder="Servings">
        <br><br>

    </div>
  </div>

  <center>
  <p style="color: black; font-weight: 600; font-size: 20px;">Nutritional Details</p>
</center>

<div class="form-flex">
    <div class="flex-left">
        <input type="text" name="cal" placeholder="Calories">
        <br><br>

        <input type="text" name="fats" placeholder="Fats">
        <br><br>
    </div>
    <div class="flex-right">
        <input type="text" name="prt" placeholder="Protien">
        <br><br>

        <input type="text" name="carbs" placeholder="Carbs">
        <br><br>
</div>
</div>
</div>
</form>



<div id="ingredients" class="tabcontent">


<!------------------php for insert ingredients ------------->
<?php
if(isset($_POST['done'])  && isset($_FILES['my_image1'])) 
{        
        
       $ingrd1 =$_POST['text1'];

       $quantity1 =$_POST['text2'];
       $ingrd = $GLOBALS['id'];
       echo $ingrd;

       //image upload 
           $img_name= $_FILES['my_image1']['name'];
             $img_size = $_FILES['my_image1']['size'];
             $tmp_name = $_FILES['my_image1']['tmp_name'];
               $error =$_FILES['my_image1']['error'];
                $file_type= $_FILES['my_image1']['type'];
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
                          
           
              
       $sql = "update `add_ingredient` set `image` = '$imageandpath', `ingrd_name` = '$ingrd1',`quantity` =  '$quantity1' 
       where `ingrd_id` = '$ingrd'";
    if($conn-> query($sql)  == TRUE)
    {
      echo "instruction added";
            
    }
        else
        {
          echo "instruction not added";
    }
  }
} } } ?>




  <!-------content for ingredients------->
  <form action=" " method="post" enctype="multipart/form-data">
  <div class ="link">
    <div class="symbol" style="text-align:center;"><h2 style="margin-top:10px 50px;"> + </h2></div>
    <p id ="add-dir" style="color="black"> Add Ingredients </p>
  </div>
    <!----popup window----->
    <div class ="popup-ingredients">
        <div class ="header">
        <h2 id = "header"> Add Ingredients </h2>
         </div>
        <div class="box">

        <!--------image upload-------->
          <div class="ing-img" style="height:60px;width:60px;border-radius:16px;border-color:purple; border:solid; text-align:center;margin-left:5px;margin-top:50px;display:flex;flex-direction:column;">
         <img src="./images/plus.svg" id="sign" style="height:35px; width:35px; cursor:pointer;">
      
         <input type="file" name="my_image1" id="my_image1" style="display:none;">
                </div>

       <div class="flex-right-ing" style="display:flex; flex-direction:column; justify-content:space-between;margin-left:60px;margin-top:5px;">
        <input type= "text" id="text1" class="input-text" name = "text1" placeholder="Name of ingredient" style=" width:200px;border-radius:15px;">
        <input type="text" id ="text2"  class="input-text" name ="text2" placeholder="Quantity" style="border-radius:15px;width:200px;">
        <p id="add-more" name="add-more" style="margin-left:80px;margin-top:20px; color: #7963FB; cursor:pointer;">
        Add more Ingredients</p>
        
    <button type="submit"   name="done" id="done" style="font-size: 24px;width:162px;border-radius: 10px; background: linear-gradient(267.44deg, rgba(204, 87, 231, 0.66) 0.01%, rgba(116, 99, 252, 0.66) 85.22%);color: white;margin-left:80px;height: 31px; margin-top: 5px;text-align: center;">Done</button>
        </div>
            </div>
    

</div>
</div>
</div>
</form>




<div id="directions" class="tabcontent">
  <!--    CONTENT FOR DIRECTIONS-->

    <div class="form-flex" style="margin-left:10px;">
    <div class="flex-rightdir">
       <div class="symbol" style="text-align:center; margin-left:20px;" ><h2 style="margin:7px 10px;"> + </h2>
        <p id="add-dir-data" style="width:140px;margin-left:50px;color:black;font-size:17px;margin-top:0px;" >Add direction</p> </div>
        </div>

       <div class="upload-vdo"> 
             <img src= ".\images\upload.svg" id="video-symbol" onclick="openvideo style="height:17px;width:17px;margin-left:5px;margin-top:8px;cursor:pointer;">
            <input type="file" name="video-upload"  id="video-upload" style="display:none;">
            <button id="btn-video" name="btn-video" class="btn-flex;" style="background:white; border:none; color: #A45DF2; margin-right:15px;margin-left:10px;"> Add Video </button>
       </div>

       <div class="upload-vdo" style="margin-left:30px;">
       <img src=".\images\url.svg" id="url-symbol" name="url-symbol" style="height:15px; width:15px;margin-left:10px;margin-top:10px;">
       
            <button id="btn-url" name="btn-url" class="btn-flex;" onclick="document.getElementById('add-url').style.display=block"; style="background:white; border:none; color:#A45DF2; margin-right:15px;margin-left:10px;"> Upload url </button>
</div>
    </div>

  </div>

  <!----------------DIRECTIONS POPUP-------------->
  <div class="form-flex" style="margin-left:10px;">
    <div class="add-dirc" id="add-dirc">
      <div class="dirc-header">
</div>
<div class="dirc-content">
  <input type="text" name="input-dirc" id="input-dirc">
  <h4 id="dirc-p"> Add more Directions </h4>
  <button id="dirc-add" name="dirc-add">Done</button>
</div>
</div>

</div>




<!-------php code for add url----->
<?php
    if(isset($_POST['url-save'])){
      $url=$_POST['url1'];
     // $namer= $_SESSION['rname'];
     $namer = 'poha';
      $sql="UPDATE dietian_recipies SET `link` = '$url' WHERE `name`= '$namer'";
      if($conn ->query($sql) == true)
      {
        echo "Url Added";
        }
        else{
          echo "URL not added";
        }
    }

?>



  <!------------JS for add url----->
  <form action=" " method="post" enctype="multipart/file-type">
    <div class="form-flex">
  <div class="add-url" id="add-url">
    <div class="url-header">
      <h2> Add URL</h2>
      
</div>
<div class="url-content">
  <input type="text" name="url1">
  <button type="submit" id="url-save" name="url-save" style="width:197px; height:56px; background:#A45DF2; color:white; margin-bottom:5px;">Save</button>
</div>
</div>
  </div>
</form>
<!-------------close div of add url--------->

  </div>



<!--    JS FOR TABS  -->
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i <  tabcontent.length; i++) {
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

</body>
</html>