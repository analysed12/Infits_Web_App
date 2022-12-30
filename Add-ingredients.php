<?php include ('connection.php'); ?>
    
<?php
//$name = $_SESSION['receipe_name'];
//$id = $_SESSION['ingrd_id'];
if(isset($_POST['Done']) || isset($_POST['add-more'])  && isset($_FILES['my_image']))   
{        
        $name= "banana";
       $ingrd1 =$_POST['text1'];

       $quantity1 =$_POST['text2'];

       //image upload 
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
                           //$final = $imageandpath | $ingrd1 | $quantity1;
           
              
       $sql = "insert into `add_ingredient`(`ingrd_id`,`image`,`ingrd_name`,`quantity`) values
        ('$id','$imageandpath', '$ingrd1',`quantity')";
    if($conn-> query($sql)  == TRUE)
    {
      echo "instruction added";
            
    }
        else
        {
          echo "data not Inserted";
    }
  }
} } } ?>


  


<!Doctype html>
<html>
    <title> Add Ingredients </title>
    <head>
      <link rel="stylesheet" href="./css/add_ingrd.css">

     <!-------code for image upload in plus sign------>
     <script type="text/JavaScript" 
src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
</script>

      
  
         <script>

          $(function(){
            $('#sign').on('click',function(){
              $('#my_image').trigger('click');
            });
          });     
    
        </script>
</head>
<body>
             <div class="container">
           <!------sideNav---------->
          <?php include ('event_calendar.php');?>

         /* <?php
            //    $sql ="select * from `dietian_recipies` where `dietitianuserID`='Sam'";
             //   $res = mysqli_query($conn,$sql);
            //    if(mysqli_num_rows($res) > 0)
             //   {
                //    while ($row = $res -> fetch_assoc()){
                    
                
                //  $ext= explode('|',$row['image']);
                 // $path = $ext[1];
             // }}?>
             
             <div class="wrapper"> 

          <form id="form1" action="Add-ingredients.php" method="post" enctype ="multipart/form-data">
       
                  
   
          <div class="img-upload">

          </div>

           <div class="buttons" style="text-align: center;">
        <ul id="ul-btn" style="list-style:none; display:flex;">
          <li> <div class= "btn-pp" > <a class="aa-btn" 
            href="receipe_details_view.php">Receipe Details </a></div></li>
          <li><div class="btn-pp" style="background-color: white;"><a class="aa-btn" href="#">Ingredients</a></div></li>
          <li><div class="btn-pp"><a class="aa-btn" href="#">Directions</a></div></li>

</div>

     <div class ="btn-symbol-head">
        <div class ="symbol" style="position: absolute;box-sizing: border-box;color: purple;
        height:52px;width:52px;margin-top: 0px; border-radius: 9px; border-color: purple; border-style: solid; text-align: center; cursor: pointer;"><h2> + <h2>
        </div>
        <p id="add-ind">Add ingredients</p>
     </div>



     <!----popup window----->
     <div class ="popup-ingredients">
        <div class ="header">
        <h2 id = "header"> Add Ingredients </h2>
         </div>
        <div class="box">

        <!--------image upload-------->
          <div class="ing-img" style="height:70px;width:70px;border-radius:16px;position:fixed;border-color:purple; border:solid; text-align:center">
         <img src="./images/plus.svg" id="sign" style="height:35px; width:35px; cursor:pointer;">
        <input type ="file" name="my_image" id="my_image" style="height:66px; width:66px;"> 
         <input type="file" name="my_image" id="my_image" style="display:none;">
                </div>


        <input type= "text" id="text1" class="input-text" name = "text1" placeholder="Name of ingredient" style="top:51px;">
        <input type="number" id ="text2"  class="input-text" name ="text2" placeholder="Quantity" style="top:88px;">
        <p id="add-more" name="add-more" style="position:absolute;left:110px;top:70px; color: #7963FB; cursor:pointer;">
        Add more Ingredients</p>
        
    <button type="submit"   name="Done" id="Done" style="position: absolute;font-family:'NATS';font-size: 24px;width:162px;border-radius: 10px; background: linear-gradient(267.44deg, rgba(204, 87, 231, 0.66) 0.01%, rgba(116, 99, 252, 0.66) 85.22%);color: white;left:110px;height: 31px; top: 100px;text-align: center;">Done</button>
            
            </div>
            </form>

            <!-------js code for add  more ingredients------>
            <script>
            $(document).ready(function(){
              $('#add-more').click(function(){
                document.getElementById("text1").value =' ';
                document.getElementById("text2").value =' ';
               })
             });
            </script>

          
</div>
</div>
</div>
</body>
    </html>