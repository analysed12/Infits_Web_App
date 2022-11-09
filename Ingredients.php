<html>
<title>
	  Ingredients
	</title>
<head>
	 <style>
	 	.upload-photo{

    position: absolute;
width: 285px;
height: 230px;
left: 610px;
top: 110px;

background: #D9D9D9;
opacity: 0.74;
border-radius: 12px;
}
 .link-container{

 	box-sizing: border-box;

position: absolute;
width: 60px;
height: 52px;
left: 600px;
top: 420px;

border-radius: 9px;
border-color: purple; 

 }
 #lbl{
 	position: absolute;
width: 25px;
height: 89px;
left: 30px;
top: 15px;

font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 59px;
line-height: 150%;


display: flex;
align-items: center;

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
top: 390px;

background: #E7E7E7;
border: 1px solid #E7E7E7;
border-radius: 44px;
text-align: center;

}
.link-add{
	height: 89px;
	width:  181px;
	top:  460px;
	left:  584px;
}
#p-add
{

}
.para{
	position: absolute;
width: 140px;
height: 33px;
left: 75px;
top: 50px;

font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 22px;
line-height: 150%;
/* identical to box height, or 33px */

display: flex;
align-items: center;

color: #929292;

}
.popup-window{
	width:409px;
	height: 212px;
	top : 140px;
}


	 </style>
 

	</head>
	  <body>
	  	<?php include("config.php")?>;
	  	 <!------Side Nav----->
	  	 <?php include("event_calendar.php");?>
	  	 
	  	 <form id="form1" action="" method="post" enctype ="multipart/form/data">
	  	 <div class="container">
	  	
        	 <?php
           	  	$sql ="select `image`,`image_path` from `receipe_details` where `receipe_id`=6";
           	  	$res = mysqli_query($conn,$sql);
           	  	if(mysqli_num_rows($res) > 0)
           	  	{
           	  		while ($row = $res -> fetch_assoc()){
           	  			$path = $row["image_path"];?>
                       
            <div class="upload-photo">
                
             <img src=<?php echo $path;?> alt="" title="<?php($row["image"]);?>">  
         <?php } }?>
     </div>


         <div class="buttons" style="text-align: center;">
            <ul class="button-class" style="display:flex; list-style:none";>
<li> <div class="p-2" style="width: 135px;height:32px; margin-top: 5%;"><a href ="#" style="text-decoration: none; color: black; font-size:15;font-weight:400% ">Recipies details</a></div></li>
  <li><div class="p-2" style="width:100px; height:32px; margin-left: 50px; background-color: white;
  margin-top: 5%; border-radius: 22px; text-align:center;">
  	<a href="#" style="text-decoration: none; color: black; font-size:15;font-weight:400%  ">Ingredients</a></div></li>
 <li> <div class="p-2" style="width:78px; height:32px; margin-left: 50px; margin-top: 5%;" >
 	<a href="#" style="text-decoration: none; color: black; font-size:15; font-weight:400% ;">Directions</a></div></li>
</ul>
</div>
           <div class="link-add">    
          <div class="link-container">
          	<label id="lbl" name="lbl_symbol" onclick="window.open('Add-ingredients.php','_blank',
          		'height=50px',
          	'width=50px','top:100px')">+</label>
          		<div>
          			<div class="para">
          	<p id ="p-add" > Add Ingredients</p>
           </div>


   
             

	  	 </body>
	  	 

	 
</html>