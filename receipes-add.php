<?php 
      include('config.php');?>
      <?php
         if( isset($_POST['submit']) && isset($_FILES['my_image']))
         {     
                 
               
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
               $fibr = $_POST['fibre'];

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
                           $img_upload_path = 'uploads'.$new_name;
              
                           move_uploaded_file($tmp_name,$img_upload_path );  
           
               $sql = "INSERT INTO `dietian_recipies`(`name`,`time`,`serving`,`calories`,`protiens`,
                `fats`,`carbs`,`category`,`dietitianuserID`,
                `image`,`file`)
                VALUES('$name',`$p_time','$serv','$calo',
               '$prot','$fat','$carbo','$new_name','$img_upload_path')";
                if($conn -> query($sql)==true)
                {
                       echo "One receipe added";
                }
                else
                {
                  echo "error";
                }
              }
            }
           
            
          }
      
         }?>



<html>
    <head>
    <link rel="stylesheet" href="receipe-add.css" />
    <style>
      .upload-photo{
         width: 350px;
         height: 230px;
         left: 355px;
         top: 18px;
         background: #D9D9D9;
         opacity: 0.74;
         border-radius: 12px;
      }

      .buttons{
        .buttons
    box-sizing: border-box;

position: absolute;
width: 459px;
height: 45px;
left: 315px;
top: 265px;

background: #E7E7E7;
border: 1px solid #E7E7E7;
border-radius: 44px;
text-align: center;


      }
      .receipe-details{
        width: 550px;
        height: 498px;

      }
      .course{
        display: none;
        position: fixed;
        width: 455px;
height: 236px;
  
background: #FFFFFF;
box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.04);
border-radius: 31px;
 transform: translate(-50%,-50%);
 top: 30%;
 left: 50%;


      }
      .div-course{
        box-sizing: border-box;
      
        width: 101px;
        height: 37px;
        border: 1px solid #D257E6;
        border-radius: 24px;
        text-align: center;
        cursor: pointer;
      }
      .course-header{
        height: 50px;
        width: 455px;

      }
      .category{
        display: none;
        position: fixed;
      height: 236px;
  
background: #FFFFFF;
box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.04);
border-radius: 31px;
 transform: translate(-50%,-50%);
 top: 30%;
 left: 50%;
      }
    

      .category-header{
        height: 50px;
        width: 455px;

    }
    .div-category{
      box-sizing: border-box;
      
        width: 101px;
        height: 37px;
        border-radius: 24px;
        text-align: center;
        cursor: pointer;

    }
    
    .in-st-cs{
       width :400px;
       border-color: #0xFFF5F5F5;

    
    }
     



    </style>

    <!------JS for course popoup------>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>
                $(".course-body").ready(function()
                {
                   $(".div-course").click(function(){
                    $(this).css("background-color" , "blue");
                    $("#course-input").val($(this).text());
                    $(".course").css("display","none");
                   });
                });

             
         </script>

         <!------code for upload image---->
         <script>
          $(function(){

          
          $('#camera').on('click',function(){
            $('#my_image').trigger('click');
          });
        });

          </script>


</head>
<body>
           <!-------sidenav---->
         <?php include("recipe_navbar.php");?>

            <form id="form1" action="receipes-add.php" method="post" enctype="multipart/form-data">
        <div class = "container">
            <div class="upload-photo">
                <img id="camera" src=".\images\camera.svg" style="margin-top:25%; margin-left:35%; cursor:pointer;">
                <input type="file" id="my_image" name="my_image" style="display:none;" />

</div>
         <div class="buttons">
            <ul class="button-class" style="display:flex; list-style:none";>
                <li><div class="p-2" style="width: 135px;height:32px; background-color: white; margin-top: 5%; border-radius: 22px;"><a href ="#" style="text-decoration: none; color: black; font-size:15;font-weight:400% ">Receipe Details</li>
                <li><div class="p-2" style="width:100px; height:32px; margin-left: 50px;text-align:center; margin-top:4%;"> 
                <a href="#" style="text-decoration: none; color: black; font-size:15;font-weight:400%;">Ingredients </a></li>
                <li><div class="p-2" style="width:78px; height:32px; margin-left: 50px; margin-top: 4%;"> 
                  <a href="#" style="text-decoration: none; color: black; font-size:15; font-weight:400% ;" >Directions</a> </li>
</ul>
</div>
         <div class="receipe-details" style="padding-top:325px;">
            <ul class="res-cs" style="list-style:none; height:498px;width:500p;">
          <li><input class="in-st-cs" id="details-input" name="R-name" type="text" placeholder="Recipe name"></li>
            <li> 
             <input class="in-st-cs" type="text" id="course-input" name="c-name" placeholder ="Course" style="background:url('.\images\ad_ar.svg');" />
             
               
              
            
          </li>
           <li> <select class="in-st-cs" name="catgry">
              <option value=" " >Category </option>
                  <option value="South-Indian">South Indian</option>
                  <option value="North-Indian">North Indian</option>
             
           </select> </li>
          <li>
       <input class="in-st-cs" type="text" name="p-time" id="p-time" placeholder="Prepration time"> </li>
         <li><input class="in-st-cs" id="text" name="c-time" id="c-time" placeholder ="cooking time"></li>
        <li><input class="in-st-cs" id="text" name="serve" id="serve" placeholder="servings">  </li>

        <li> <label id="nu" class="lbl-style"><h5> Nutritions </h5></label> </li>
           <li><input class="in-st-cs" id="cal" name="cal" id="cal" tyep="text" placeholder="Calories"> </li>
           <li> <input class="in-st-cs" id="prt" type="text" id="prt" name="prt" placeholder ="protien"> </li>
        <li> <input class="in-st-cs" id="fts" type="text" name="fats" id="fats" placeholder = "Fats">  </li>
         <li> <input class="in-st-cs" id="carbs" id="carbs" name="carbs" type="text" placeholder ="Carbs"> </li>
         <li> <input class="in-st-cs" id="fibre" id="fibre" name="fibre" type="text" placeholder ="fibre"> </li>

</ul>   
</div>
             <div class="btn-class" style="padding-top:200px;padding-left: 300px;">
             <button type="Submit" class="btn-primary" name="submit" id="submit"  style="background:linear-gradient(264.44deg, rgba(207, 87, 230, 0.66) 0%, rgba(110, 100,254, 0.66) 91.11%); 
             border-style: none;width: 474px;height: 39px;border-radius: 44px;color: white;">Next</button>
             </div>



  

  <!------popup for course ------>

    <div class="course" id="course">
       <div class="course-header" style="text-align: center;">
        <p style="color: #C0B9B9;font-size: 15;text-align:center;top:25px;">Courses</p></div>
        <div class="course-body" id="c-id">
          <ul style="list-style: none; display:flex; margin-left: 7px;top:60px;justify-content: space-between; margin-right: 7px;r ">
          <li><div class="div-course" id="cou-id1"><p class="p-course" id="course1">Breakfast</p></div></li>
          <li><div class="div-course" id="cou-id2"><p class="p-course" id="course2">Elevenses</p></div></li>
          <li><div class="div-course" id="cou-id3"><p class="p-course" id="course3">Lunch</p></div></li>
        </ul>
        <ul style="list-style: none; display:flex;margin-left:7px;top: 90px;justify-content: space-between; margin-right:7px;">
         <li>  <div class="div-course"><p class="p-course" id="course4">Snack</p></div></li>
          <li><div class="div-course"><p class="p-course" id="course5">Tea</p></div></li>
          <li><div class="div-course"><p class="p-course" id="course6">Dinner</p></div></li>
        </ul>
        <ul style="list-style:none;display: flex;margin-left: 7px; top: 130px;justify-content:space-between ; margin-right:7px;">
         <li> <div class="div-course"><p class="p-course" id="course7"> Others</p></div></li>
       </ul>
        </div>
    </div>


         <script>
            var cou_btn = document.getElementById("lbl1");
            var modal1= document.getElementById("course");
            var value1= document.getElementById("course-input");
             
            cou_btn.onclick = function(){
              modal1.style.display = "block";
            } 
             

          
         </script>
    


    </form>
</body>
    </html>