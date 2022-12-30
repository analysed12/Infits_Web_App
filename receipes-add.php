<?php 
      include('connection.php');?>
      <?php
         if( isset($_POST['submit']) && isset($_FILES['my_image']))
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
                {
                  header('location:receipe_details_view.php');
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
  
    <style>
      .container{
        position: absolute;
    width: 1198px;
    height: 948px;
    left: 242px;
    top: 76px;
}

      
      .upload-photo{
         width: 350px;
         height: 230px;
         margin-left: 357px;
         margin-top: 15px;
         background: #D9D9D9;
         opacity: 0.74;
         border-radius: 12px;
      }

      .buttons{
      
    box-sizing: border-box;

position: absolute;
width: 459px;
height: 45px;
margin-left: 315px;
margin-top: 10px;

background: #E7E7E7;
border: 1px solid #E7E7E7;
border-radius: 44px;
text-align: center;


      }
      .receipe-details{
        width: 550px;
        height: 498px;
        padding-top:70px;
        margin-left:330px;

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
    .btn-pp{
    
      margin-top:7px;
      text-align: center;
      border-radius: 22px;
      height: 32px;
      margin-left:25px;

    }
    .aa-btn{
      text-decoration:none;
      color:black;
      font-weight: 400;
      font-size: 17px;
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
          (function(){  
          $('#camera').on('click',function(){
            $('#my_image').trigger('click');
          });
        });

          </script>

        <!------ js code for buttons---->
          <script>
            $(function(){
              %('.btn-pp').on('click',function(){
                $(this).css("background-color", "blue");
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
          <ul id="ul-btn" style="list-style:none; display:flex;">
          <li> <div class= "btn-pp" style="background-color:white;" > <a class="aa-btn" href="#">Receipe Details </a></div></li>
          <li><div class="btn-pp"><a class="aa-btn" href="#">Ingredients</a></div></li>
          <li><div class="btn-pp"><a class="aa-btn" href="#">Directions</a></div></li>

            
            <ul>

          

            
      </div>

         <div class="receipe-details" >
            <ul class="res-cs" style="list-style:none;">
          <li><input class="in-st-cs" id="details-input" name="R-name" type="text" placeholder="Recipe name"></li>
            <li> 
              <ul style="display:flex; list-style:none; padding-left:0px;">
                <li>
             <input class="in-st-cs" type="text" id="course-input" name="c-name" placeholder ="Course"/>
      </li>

        <li><div class="add-cou-img" style="color:black;left:380px; border:1px solid;"><img id = "lbl1" src=".\images\ad_ar.svg" style="cursor:pointer; color:black;">
        </div></li>
      </ul>
             
               
              
            
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
     <!----    <li> <input class="in-st-cs" id="fibre" id="fibre" name="fibre" type="text" placeholder ="fibre"> </li>---->

</ul>   
</div>
             <div class="btn-class" style="margin-top:2px;padding-left: 300px;">
             <button type="Submit" class="btn-primary" name="submit" id="submit"  style="background:linear-gradient(264.44deg, rgba(207, 87, 230, 0.66) 0%, rgba(110, 100,254, 0.66) 91.11%); 
             border-style: none;width: 474px;height: 39px;border-radius: 44px;color: white; position:absolute;">Next</button>
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