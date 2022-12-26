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
      $ingrt = "abcdefg";
      $inst ="oioooooo";

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
      '$prot','$fat','$fibr','$carbo','$ingrt','$inst','$cate','$id','$imageandpath','$file1','$course')";
       if($conn -> query($sql)==true)
       {?>
       echo "<script>
            alert("Recipe Added");
        </script>"";  
      
       <?php } else {?>
    
        echo '<script>
            alert("Recipe Not Added");
            </script>';


      <?php }
     }
   }
  
   
 }

}?>


