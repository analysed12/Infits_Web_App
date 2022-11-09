<?php 
      include('config.php');?>
      <?php
         if( isset($_POST['submit']) && isset($_FILES['my_image']))
         {     
                 
               echo "hello";    
               $name =$_POST['R-name'];
               $course =$_POST['course'];
                 
               $cate = $_POST['catgry'];
                
               $p_time =$_POST['p-time'];

               $c_time =$_POST['c-time'];
               $serv = $_POST['serve'];
               $calo = $_POST['cal'];
               $prot  = $_POST['prt'];
               $fat = $_POST['fats'];
               $carbo =$_POST['carbs'];

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
           
               $sql = "INSERT INTO `receipe_details`(`receipe_name`,`cousre`,`category`,`preparation_time`,`cooking_time`,`serving`,`calorie`,`protien`,`fats`,`carbs`,
                `image`,`image_path`)
                VALUES('$name','$course','$cate','$p_time','$c_time','$serv','$calo',
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
</head>
<body>

     <div class ="wrapper">
        <!-----------sideNav--------->
        <div class="vert-rectangle">
            <div class="sidenav">
</div>
          <div class="bottom">
</div>

</div>
<div class="vline">
</div>
<div class="header">
      <div class="left">
        <h3> New Receipes</h3>
</div>
<div class="right">
</div>
</div>
  <div class="hline"></div>
            <form id="form1" action="receipes-add.php" method="post" enctype="multipart/form-data">
        <div class = "container">
            <div class="upload-photo">
                
                <input type="file" id="my_image" name="my_image" />

</div>
         <div class="buttons">
            <ul class="button-class" style="display:flex; list-style:none";>
                <li><button class="button-class" id="receipe-details"> Receipe Details </button></li>
                <li> <button class="button-class" id="Ingredients"> Ingredients </button></li>
                <li>  <button class="button-class" id="Directions"> Directions </button> </li>
</ul>
</div>
         <div class="receipe-details">
            <ul style="list-style:none; ">
          <li>  <label id="details" class="lbl-style"> Recipie Name</label> <input id="details-input" name="R-name" type="text"></li>
            <li> <label id="details" class="lbl-style">Courses</label> <select name="course">
              <option value=" ">select courses </option>
              <?php $sql= "Select `course_name` from `courses`";
                    $result = mysqli_query($conn ,$sql);
                    if($result > 0)
                    {
                      while($row = $result-> fetch_assoc())
                    {?>
                     <option value ="<?php echo htmlentities($row["course_name"]);?>"> <?php echo htmlentities($row["course_name"]);?></option>
                    <?php }} ?>
            </select>
          </li>
           <li>  <label id ="category" class="lbl-style">Category</label> 
            <select name="catgry">
              <option value=" ">select category </option>
              <?php $sql= "Select `category_name` from `category`";
                    $result = mysqli_query($conn ,$sql);
                    if($result > 0)
                    {
                      while($row = $result-> fetch_assoc())
                    {?>
                     <option value ="<?php echo htmlentities($row["category_name"]);?>"> <?php echo htmlentities($row["category_name"]);?></option>
                    <?php }} ?>
             
           </select></li>
          <li>   <label id="Preparation-time" class="lbl-style">Preparation time</label>
             <input type="text" name="p-time" id="p-time"> </li>
           <li>  <label id="Cooking-time" class="lbl-style"> Cooking Time</label>
             <input id="text" name="c-time" id="c-time"> </li>
            <li> <label id="Servings" class="lbl-style">Servings</label>
             <input id="text" name="serve" id="serve"> </li>

            <li> <label id="nu" class="lbl-style"><h3> Nutritions </h3></label> </li>
           <li>  <label id="Calories" class="lbl-style">Calories</label>
             <input id="cal" name="cal" id="cal" tyep="text"> </li>
           <li>  <label id="Protien" class="lbl-style"> Protien</label>
             <input id="prt" type="text" id="prt" name="prt"> </li>
           <li>   <label id="Fats" class="lbl-style"> Fats </label>
             <input id="fts" type="text" name="fats" id="fats"> </li>
            <li> <label id="Carbs" class="lbl-style">Carbs</label>
             <input id="carbs" id="carbs" name="carbs" type="text"></li>
</ul>   
             <button type="Submit" class="btn-primary" name="submit" id="submit">Submit</button>
             
</div>
</form>

      </div>
       </div>

</body>
    </html>