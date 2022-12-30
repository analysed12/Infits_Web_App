<!DOCTYPE html>
<html>
<title>Directions</title>
<head>
<link rel="stylesheet" href="./css/directions.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
	 	.upload-photo{

    position: absolute;
width: 265px;
height: 200px;
left: 610px;
top: 100px;
border:solid 1px black;
background: #D9D9D9;
opacity: 0.74;
border-radius: 12px;
}
 
 #lbl{
 	position: absolute;
width: 25px;
height: 79px;
margin-left:30% ;

font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 40px;
line-height: 100%;


display: flex;

background: linear-gradient(180deg, #7963FB 0%, #BD59EB 100%);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
background-clip: text;
text-fill-color: transparent;
cursor: pointer;


 }

 .buttons{
    box-sizing: border-box;

position: absolute;
width: 459px;
height: 50px;
left: 556px;
top: 380px;
display:flex;

background: #E7E7E7;
border: 1px solid #E7E7E7;
border-radius: 44px;
text-align: center;

}

.add-direction{
	          display: none;
	          box-sizing: border-box;
                 position: fixed;
                width: 409px;
                height: 212px;
                background: #FFFFFF;

                border: 1px solid #E4E4E4;
                box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.09);
                border-radius:18px;
             transform: translate(-50%,-50%);

}


}
.div-header{
                display: flex;
                justify-content: space-between;
                height: 15px;
                text-align: justify;
             
                
                                

}
.div-header .title{
	font-family: 'NATS';
	 font-style: normal;
	 font-size: 24px;
	 font-weight: 400;
	 color: black;
	 padding-left: 5px;
}

.box{
	padding-left: 20px;
       justify-content: space-between;


	align-items: center;
}
.input-text{

box-sizing: border-box;

position: absolute;
width: 310px;
height: 33px;
left:  30px;
background: #FFFFF;
border: 1px solid #D5D5D5;
border-radius: 9px;

}

	 </style>

	 <!------js code to open upload file on image click----->
	  <!------code for upload image---->
	  <script>
          $(function(){

          
          $('#up-symbol').on('click',function(){
            $('#video-upload').trigger('click');
          });
        });

          </script>

 


	</head>
	<body>
	
	  	 <!------Side Nav----->
	  	 <?php include("event_calendar.php");?>
		 <?php include('connection.php');?>
	  	 
	  	 <form id="form1" action="" method="post" enctype ="multipart/form-data">
	  	 <div class="container" id ="cnt">
	  	
        
     </div>


         <div class="buttons" style="text-align: center;">
            <ul class="button-class" style="display:flex; list-style:none";>
<li> <div class="p-2" style="width: 135px;height:32px; margin-top: 5%;"><a href ="receipe_details_view.php" style="text-decoration: none; color: black; font-size:15;font-weight:400% ">Recipies details</a></div></li>
  <li><div class="p-2" style="width:100px; height:32px; margin-left: 50px;">
  	<a href="Ingredients.php" style="text-decoration: none; color: black; font-size:15;font-weight:400%  ">Ingredients</a></div></li>
 <li> <div class="p-2" style="width:78px; height:32px; margin-left: 50px; background-color: white;
  margin-top: 5%; border-radius: 22px; text-align:center;margin-top: 5%;" >
 	<a href="#" style="text-decoration: none; color: black; font-size:15; font-weight:400% ;">Directions</a></div></li>
</ul>
</div>

<!------php for add directions------>
<?php
   if(isset($_POST['done']) || isset($_POST['dir']))
   {
	   $id = $_SESSION['dir_id'];
	   $direction = $_POST['text1'];
	   $sql ="insert into `add_direction` (`dir_id`, `direction`) values ('$id', '$direction')";
	   if($conn -> query($sql))
	   {
		echo "direction added";

	   }
	   else
	   {
		 echo "not added";
	   }
   }

?>

 <!--------body part------->

<form action=" " method="post" enctype="multipart/form-data">
           <div class="link-add">   
			
          <div class="link-container">
          	<label id="lbl" name="lbl_symbol">+</label>
          		<div>
          			<div class="para">
          	<p id ="p-add" > Add Directions</p>
          </div>


                <!------image upload----->
            
		     <div class="img-set" style="position: absolute; text-align:center;margin-right:50px;">
			 <img src=".\images\upload.svg" id="up-symbol">  
				<input type="file" name="video-upload" style="display:none;">
             </div>
			<button id="upload" name="upload" class="up-btn" > upload video</button> 



               <!----------upload url-------->
         -  <div class="up-url" style="display:flex; flex-direction:row;position:absolute;  height: 58px; width:160px; ">
		  

		   <img src=".\images\url.svg" id="url-symbol" style="height:15px; width:15px;">
		   <input type="file" name="url-upload" style="display:none;">
		

          <button type="button" class="btn-upld-sty"  id="btn-url">
         upload url
         </button>

           </div>
</div>


		   <!-------php for upload url----->
		   <?php   
		     //$name = $_SESSION['receipe_name'];
			 
			 if(isset($_POST['upld-url']))
			 {
				$url =$_POST['add-url'];
				$sql = "update `dietian_recipies` set `link` = '$url' where `name` = '$name'";
				if($conn -> query($sql) == TRUE)
				{
					echo "url link added";
				}
				else
				{
					echo "link not added, Try again";
				}
			 }
			 
		   ?>


		   <!--------popup for upload url------>
		   <form action =" " method="post">
		   
<div class="popup-url" id="upload-url">
  <div class="dialog">
    <div class="content">

      <!-- url-popupHeader -->
      <div class="url-header">
        <h4 class="modal-url">ADD URL</h4>
        <button class="close-button" id="cls-btn" style="background: none; border:none; cursor:pointer;outline: none; font-weight:bold; padding-left:355px;">
            		 &times;</button>

      </div>

      <!-- url-popup body -->
      <div class="url-body">
        <input type ="text" id="url" palceholder="Enter Url" name="add-url">
      </div>

      <!-- url-popup footer -->
      <div class="footer">
        <button type="button" class="btn-upld-sty" name="upld-url" id="upld">upload</button>
      </div>

    </div>
</div>
</div>
</form>



<!----------code for upload video------->
    <?php
	   if(isset($_POST['upld-url']) && isset($_FILES['video-upload']))
	   {
		$img_name= $_FILES['video-upload']['name'];
		$img_size = $_FILES['video-upload']['size'];
		$tmp_name = $_FILES['video-upload']['tmp_name'];
		  $error =$_FILES['video-upload']['error'];
		   $file_type= $_FILES['video-upload']['type'];
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
					  $video_upload_path = "./images/" .$new_name;
		 
					  move_uploaded_file($tmp_name,$img_upload_path );  
					  $videoandpath="$new_name|$video_upload_path";

					  $sql ="update `dietian_recipies` set `file` = '$videoandpath' where `name` = '$name'";
					  if($conn -> query($sql) == true)
					  {
						echo "video uploaded";
					  }
					  else
					  {
						echo "video not uploaded";
					  }
					}
				}
			}
	  
	   }
	?>
   





            <!-------popup for add directions--->


            <div class="add-direction" id="add-dir" name="add-dir">
            	<div class="div-header">
            		<div class="title"> Add-Directions</div>
            		<button class="close-button" id="cls-btn" style="background: none; border:none; cursor:pointer;outline: none; font-weight:bold; padding-left: 15px;">
            		 &times;</button>
            	</div>
            	<div class="div-body">
            		
    
        <div class="box">
        <input type= "text" id="text1" class="input-text" name = "text1" placeholder="Directions"><br>
        
       
       <div  class="link-add"> <button id="dir" name="dir" style="height:47px;width: 238px;color:#7B62FB;background:white;border:none;>
	   Add more Directions</button></div>

       
        
       <button  id ="done"  name = "done" style="font-size:15; background:linear-gradient(267.44deg, rgba(204, 87, 231, 0.66) 0.01%, rgba(116, 99, 252, 0.66) 85.22%); color: white; height: 31px; width: 162px; border-radius:10px;left:124px;border-color:none;margin-top: -10%;" onclick="m_display();">  Done </button>
           
            </div>
</form>
             <!------code for popup directions------->
            <script>
            	var count=0;
            	//button for open
            	var btn = document.getElementById("lbl");
            	//button for close
            	var close_btn =document.getElementById("cls-btn");
            	var modal = document.getElementById("add-dir");
            	//link to add
            	var btn_add = document.getElementById("aid");
         
                      var btn_done =document.getElementById("done");
            	 btn.onclick =function(){
            		modal.style.display = "block";

            	}
            	close_btn.onclick = function(){
            		modal.style.display ="none";
            	       event.preventDefault();
            		
            	}
            	

            	function m_display() 

            	       {
            	       	//event.preventDefault();
                        modal.style.display ="block";

                        }
</script

            </script>

             <!-----open upload url--->
			
			
           var cou_btn = document.getElementById("btn-url");
            var modal1= document.getElementById("upload-url");
			var close = document.getElementById("cls-btn");
            
             
            cou_btn.onclick = function(){
              modal1.style.display = "block";
			  event.preventDefault();
            } 
             cls.btn.onclick = function(){
				modal1.style.display ="none";
				event.preventDefault();
			 }

          
         </script>
    

				


       

	</body>
	</html>