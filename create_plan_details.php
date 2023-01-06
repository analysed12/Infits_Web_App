<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document</title>
</head>
<style>
.plan_container{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
 
}
.text{
    
font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 35px;
line-height: 24px;
/* identical to box height, or 50% */

margin-top: 30px;
margin-left: 60px !important;

color: #000000;
}

::placeholder {
    color:#ADD8E6;
}

.plan_name{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
   padding: 40px;
}
.plan_text{
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 30px;
line-height: 88%;
/* identical to box height, or 31px */
    border:solid;
  border-radius:15px;

color: #000000;
    margin-right: 20px;
}
.plan_btns{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    margin-top: 5px;
    /* padding-right: 20px; */
    margin-right:20px;
    
    border-color:none;
    text:white;
}
.plan_btn_add{
   width:40px;
   display: flex;
    align-items: center;
    justify-content: center;
}
.plan_btn{
    color:#FFFFFF;
background: #7282FB;
border-radius: 10px;
height: 40px;
padding-top:15px;
padding-bottom:15px;
padding-left: 5px;
padding-right: 5px;
margin-right: 10px;
font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 21px;
line-height: 24px;
/* identical to box height, or 104% */

display: flex;
align-items: center;
text-align: right;
letter-spacing: 0.44px;
}
.header{
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 25px;
line-height: 16px;
/* identical to box height, or 64% */
margin: 20px;
letter-spacing: 1.5px;
text-transform: capitalize;
/* margin-left: -350px; */
width: 400px;
color: #1D1E20;
    
}
.features_main{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    margin-top: 20px;
    width: 430px;
}
.features_left{
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
    
    width:360px;
}
.features_right{
    display: flex;
    flex-direction: column;
    align-items: center;

}
.features_box{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    padding: 6px;
    height:50px;
    width: 170px;
    background: #FFFFFF;
box-shadow: 0px 1.7px 5px rgba(0, 0, 0, 0.25);
border-radius: 10px;
margin: 5px;
}
.ip_box{
    background: #FFFFFF;
box-shadow: 0px 1.7px 5px rgba(0, 0, 0, 0.25);
border-radius: 10px;
border:none;
width: 400px;
padding: 10px;
}
.price{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: left;
    margin: 10px;
height:50px;
    width: 400px;
    padding:15px;
background: #FFFFFF;
box-shadow: 0px 1.7px 5px rgba(0, 0, 0, 0.25);
border-radius: 10px;
}
.bottom_btns{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    margin: 10px;
    width: 400px;
    padding:15px;
}
.cancel_btn{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    width: 173px;
height: 52px;
background: #FFFFFF;
border: 2px solid #7282FB;
border-radius: 10px;
}
.save_btn{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    width: 173px;
height: 52px;
color: #FFFFFF;
background: #7282FB;
border: 2px solid #7282FB;
border-radius: 10px;
}

.add_pop_tags{
    width: 224px;
height: 161px;
background: #FFFFFF;
border-radius: 7px;
box-shadow: 0px 1.7px 5px rgba(0, 0, 0, 0.25);
}


<!------- css for plan popup-------->
    .popup-plan{
        height: 100% !important;
        width: 100% !important;
        position:fixed !important;
        border-radius:15px !important;
        top:500 !important;
        left:600 !important;
        overflow:auto !important;
        
        display:none !important;
        z-index:2 !important;
    
    }

      .header-popplan{
        height:60;
        margin:5px 5px 5px 15px;
      }

      .box1{
        display:flex;
        flex-direction:column;
        justify-content:space-around;
        margin:5px;
        padding:5px;
      }

      #add-tag{
        height: 45px;
        width:173px;
        border-radius:8px;
      }
      #add{
        height:33px;
        width:95px;
        color:white;
        border-radius:8px;
        background:#7D96F8;
      }
</style>
<body>
    <!-- Navbar Start -->
    <?php
    include("navbar.php")
    ?>
    <!-- Navbar End -->
  <!------connection with database------>
  <?php include("connection.php"); ?>
  <!----- inserting into createplan table----->
  
    <?php
    if(isset($_POST['save'])  && isset($_FILES['my_image']))
    {
      $tag1 = $_POST['tag1'];
      $tag2 = $_POST['tag2'];
      $tag3 = $_POST['tag3'];

      $tags = "$tag1|$tag2|$tag3";
      $name = $_POST['p-name'];
      $plan_duration = $_POST['subject'];
      $plan_desc = $_POST['desc'];
      $price = $_POST['price'];
      $features = $_POST['featur'];
      //image upload
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
                    $plan_profile="$new_name|$img_upload_path";
      $sql ="INSERT INTO `createplan`(`profile`,`name`,`tags`,`duration`,`description`,`price`,`features`)
      VALUES('$plan_profile', '$name','$tags', '$plan_duration', '$plan_desc', '$price','$features')";
      if(conn -> query($sql) == true)
      {?>
          <script>
                alert("plan added");
            </script>
     <?php } else { ?>
        <script>
               alert("plan not added, try again");
         </script>

    <?php }
    }
} }}

     ?>
  



    <form action =" " method="post" enctype="multipart/file-type">
    <div id="content">
        <div class="text">
            <p>Create Plan</p>
        </div>
        <div class="plan_container">
            <img src="images/create_edit_plan.svg" alt="">
            <img src="images/pen_icon_dark.svg" alt="" name="plan-text" id="pen">

            <input type="file" name="my_image" id="my_image" style="display:none">
        
        <div class="plan_name">
            
                <input id="plan-name" name="p-name" class="plan_text" placeholder="Plan Name" style="height:50px;">
            
                    </div>
            <div class="header">
                Tags
            </div>

            <div class="plan_btns">
            <!-- <div class="add_pop_tags">

            </div> -->
            
                    <input type="text" name="tag1" id="tag1" placeholder="Keto Diet" class="plan_btn" style="width:120px; border-color:#7282FB;">
        
            
            <input type="text" name="tag2" id="tag1" placeholder="Vegan Diet" class="plan_btn" style="width:120px; border-color:#7282FB;"> 

              <div class ="plan_btn">
            <input type="text" name="tag3" id="tag1" placeholder=" Diet Chart" class="plan_btn" style="width:120px; border-color:#7282FB;">                  </div>
            <div class="plan_btn_add plan_btn ">
                 <h3 id="opentag" style="cursor:pointer;" > +  </h3>
            </div>
</div>
            

            <div class="header">
                Plan Duration
            </div>
            <div class="plan_inputs">
                <div >
                    <input class="ip_box" type="date"  name="duration" placeholder="    MM/DD/YYYY">
                </div>
            </div>
            <div class="header">
                Description
            </div>
            <div class="plan_inputs">
                <div >
                    <input class="ip_box" type="text" name="description" placeholder="Description">
                </div>
            </div>
            <div class="header">
                Features
            </div>
            <div class="features_main">
                <div class="features_left">
                    <div class="features_box">
                       <label name="feature1" id="feature1"> Feature1 </label>
                    </div>
                    <div class="features_box">
                       <label name="feature2 id="feature2"> Feature1 </label>
                    </div>
                    <div class="features_box">
                        <label name="feature3" id="feature3">
                        Feature1 </label>
                    </div>
                    <div class="features_box">
                     <label id="feature4" name="feature4">  Feature1 </label>
                    </div>
                </div>
                <div class="features_right">
                        <div class="plan_btn_add plan_btn ">
                            +
                        </div>
                </div>
            </div>
            <div class="header">
                Price
            </div>
            
                <input type="text" class ="price" name="price">
            
            <div class="bottom_btns">
                <div class="cancel_btn">
                    Cancel
                </div>
                <div class="save_btn" name="save">
                    Save
                </div>
            </div>
        </div>

              <!----------adding popup for tags------->
                <div class="popup-plan" id="plan01">
                    
                    <div class="header-popplan>      
                      <h3>ADD TAGS</h3>  
<              <span id="close">&times;</span>div>

                        <div class="box1">            //model-content
                            <input type="text" name="add-tag" id="add-tag">
                            <button id="add" name="add"> ADD</button>
</div>                    
</div>
 

    </div>
    </form>
        <!------------js code to open popup plan----------->
        <script>
              var open= document.getElementById("opentag");
              var tag-model = document.getElementById("plan01");
              function onclick()
              {
                tag-model.style.display = "block";
              }
            </script>




</body>
</html>