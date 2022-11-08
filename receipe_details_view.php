<?php 
   include('config.php');?>
<html>
<head>
	<link rel="stylesheet" href="receipe-add.css" />
   <style>
    body{
            font-family: 'Poppins'!important;
  }
    
#listt{
  
        border-radius: 25px;
        background-color:  #F3F5F8;
        margin-right: 20%;
        padding:0px;
        font-family:'NATS';
        
        
       
        font-style: normal;
        font-weight: 400;
        font-size: 30px;
        line-height: 46px;
        display: flex;
        align-items: center;
        
        color: #000000;
}
.list-group
{
    list-style: none;
}
#listofmenu{
    background: #FFFFFF;
box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.07);
border-radius: 5px;
height: 0.5%;


}
.list-group-item{

    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 21px;
line-height: 44px;

color: #000000;

    box-sizing: border-box;

position: absolute;
width: 500px;
height: 39px;

left :280px;

background: #FFFFFF;
box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.07);
border-radius: 5px;
}
 img{
     height: 100%;
     width:  100%;
 }
 .nutri-style
 {
  
    position: absolute;
width: 95px;
height: 20px;
left: 272px;
top: 600px;
 }

 .h5-style
 {
    

font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 20px;
line-height: 150%;
align-items: center;

color: #000000;

 }
 .d-grid-gap-2
 {
    position: absolute;
width: 474px;
height: 39px;
left: 312px;
top: 894px;

background: linear-gradient(264.44deg, rgba(207, 87, 230, 0.66) 0%, rgba(110, 100, 254, 0.66) 91.11%);
border-radius: 10px;
 }
 .btn-btn-primary{
    position: absolute;
width: 43px;
height: 18px;
left: 216px;
top: 10px;
    font-family: 'NATS';
font-style: normal;
font-weight: 300;
font-size: 20px;
line-height: 75%;
text-align: center;

 }

 
   a{
  
font-style: normal;
font-weight: 200;
font-size: 19px;
line-height: 100%;
/* identical to box height, or 32px */
text-decoration: none;

display: flex;
align-items: center;

color: #000000;

   }
   p{
    position: absolute;
width: 146px;
height: 55px;
left: 269px;
top: 2px;

font-family: 'poppins' !important;
font-style: normal;
font-weight: 300;
font-size: 33px;
line-height: 70px;

color: #000000;

   }

   </style>

	</head>
	<body>
		<div class ="wrapper">
        <!-----------sideNav--------->
        <div class="vert-rectangle">
            
            
</div>

</div>
<div class="vline">
</div>
<div class="header">
      <div class="left">
        <p style="font-size: 20px; color: black;"> New Recipe </p>
</div>
<div class="right">

</div>
</div>
  <div class="hline"></div>
   <form id="form1" action="" method="post" enctype ="multipart/form/data">
        <div class = "container">
        	 <?php
           	  	$sql ="select * from `receipe_details` where `receipe_id`=7";
           	  	$res = mysqli_query($conn,$sql);
           	  	if(mysqli_num_rows($res) > 0)
           	  	{
           	  		while ($row = $res -> fetch_assoc()){
           	  			$path = $row["image_path"];?>
                       
            <div class="upload-photo">
                
             <img src=<?php echo $path;?> alt="" title="<?php($row["image"]);?>"/>  

    </div>
        	
         <div class="buttons">
            <ul class="button-class" style="display:flex; list-style:none";>
<li> <div class="p-2" style="width: 121px;height:32px;"><a href ="#">Recipies details</a></div></li>
  <li><div class="p-2" style="width:88px; height:32px; margin-left: 55px;"><a href="#">Ingredients</a></div></li>
 <li> <div class="p-2" style="width:78px; height:32px; margin-left: 55px;"><a href="#">Direction</a></div></li>
</ul>
</div>

           <div class="receipe-details">
           	  <!------<table id ="tbl-view">---->
                 <ul class="list-group" id="listofmenu" style="margin-left:30%;margin-right: 30%; list-style: :none;  ">
            <li class="list-group-item" style="top:345px;"><?php echo $row["receipe_name"];?></li>
            <li class="list-group-item" style="top:394px;" ><<?php echo $row["cousre"]; ?></li>
              <li class="list-group-item" style="top:445px;"> <?php echo $row["category"]; ?>
                
              </li>
            <li class="list-group-item" style="color:grey ; top:493px;"><?php echo $row["preparation_time"];?></li>
            <li class="list-group-item" style="color:grey; top:543px;"><?php echo $row["cooking_time"];?></li>
            <li class="list-group-item" style="color:grey ; top:592px;"><?php echo $row["serving"];?></li>
        </ul>
             <div class="nutri-style"> <h6 class="h5-style">Nutritions</h6></div>
             <ul class="list-group" id="listofmenu" style="margin-left:30%;margin-right: 30%; ">
            
             <li class="list-group-item" style="color:grey; top:689px;"> <?php echo $row["calorie"]; ?></li>
             <li class="list-group-item" style="color:grey ; top:737px;"><?php echo $row["protien"]; ?></li>
             <li class="list-group-item" style="color:grey ; top:791px;"> <?php echo $row["fats"];?></li>
             <li class="list-group-item" style="color:grey ;top:831px;"><?php echo $row["carbs"];?></li>
           

          </ul>
          <div class="d-grid-gap-2">
            <button class="btn-btn-primary" type="button" id="button"
            style=" color:#FFFFFF; background:linear-gradient(264.44deg, rgba(207, 87, 230, 0.66) 0%, rgba(110, 100, 254, 0.66) 91.11%); border-style: none;">
            Next</button>
            
          </div>
           	  	
           	  	
                  
           	  	   <?php } } ?>
           	</div>


	</body>
</html>