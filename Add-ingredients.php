<?php include ('config.php');
    
       if(!isset($_POST['Done']))      
       {
           echo " error";

        }
       //$rec_id = $_SESSION['receipe_id'];
       //$rec_id = 7;
    
       
       else{
        //$name_rec = "banana";
       $ingrd1 =$_POST['text1'];

       $quantity1 =$_POST['text2'];
       $sql = "update `dietian_recipies` set `ingredient` = '$ingrd1 | $quantity1' where 
       `name` ='banana'";  
    if($conn-> query($sql)  === TRUE)
    {
     echo "Data Inserted";

    }
        else
        {
          echo "data not Inserted";
    }


  } ?>


<!Doctype html>
<html>
    <title> Add Ingredients </title>
    <head>
      <link rel="stylesheet" href="./css/add_ingrd.css">
</head>
<body>
             <div class="container">
           <!------sideNav---------->
          <?php include ('event_calendar.php');?>

          <?php
                $sql ="select * from `dietian_recipies` where `dietitianuserID`='Sam'";
                $res = mysqli_query($conn,$sql);
                if(mysqli_num_rows($res) > 0)
                {
                    while ($row = $res -> fetch_assoc()){
                    
                
                  $ext= explode('|',$row['image']);
                  $path = $ext[1];
              }}?>
             
             <div class="wrapper"> 

          <form id="form1" action="" method="post" enctype ="multipart/form/data">
       
                  
   
          <div class="img-upload">
            <img src=<?php echo $path;?> alt="" title="<?php($ext[0]);?>"/> 
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
        <p id="add-ind">Add ingridents</p>
     </div>



     <!----popup window----->
     <div class ="popup-ingredients">
        <div class ="header">
        <h2 id = "header"> Add Ingredients </h2>
         </div>
        <div class="box">
        <input type= "text" id="text1" class="input-text" name = "text1" placeholder="Name of ingredient" style="top:51px;">
        <input type="number" id ="text2"  class="input-text" name ="text2" placeholder="Quantity" style="top:88px;">
        <a href ="#" style="position:absolute;left:110px;top:70px;">Add more Ingredients</a>
    
        
    <button type="submit"   name="Done" id="Done" style="position: absolute;font-family:'NATS';font-size: 24px;width:162px;border-radius: 10px; background: linear-gradient(267.44deg, rgba(204, 87, 231, 0.66) 0.01%, rgba(116, 99, 252, 0.66) 85.22%);color: white;left:110px;height: 31px; top: 100px;text-align: center;">Done</button>
            
            </div>
            </form>
            

          
</div>
</div>
</div>
</body>
    </html>