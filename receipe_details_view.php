<?php 
   include('config.php');?>
<html>
<head>
	
   <style>
    body{
            font-family: 'Poppins'!important;
  }
    
    .container {
    position: absolute;
    width: 1200px;
    height: 920px;
    left: 242px;
    top: 75px;
}
.wrapper {
    position: relative;
    width: 1440px;
    height: 1024px;
    background: #FFFFFF;
}
.list-group
{
    list-style: none;
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

left :10px;
box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.07);

background: #FFFFFF;
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
top: 676px;

background: linear-gradient(264.44deg, rgba(207, 87, 230, 0.66) 0%, rgba(110, 100, 254, 0.66) 91.11%);
border-radius: 10px;
 }
 .btn-btn-primary{
    position: absolute;
width: 43px;
height: 18px;
left: 216px;
padding-top: 5px;
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
   .receipe-details
{
     width:500px;
     height: 500px;
    padding-left:514px;
    padding-top: 310px;
    justify-content: space-between;

   
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
   .upload-photo{

     position: absolute;
width: 285px;
height: 230px;
left: 610px;
top: 100px;

background: #D9D9D9;
opacity: 0.74;
border-radius: 12px;
}
.buttons{
    box-sizing: border-box;

position: absolute;
width: 459px;
height: 50px;
left: 556px;
top: 335px;

background: #E7E7E7;
border: 1px solid #E7E7E7;
border-radius: 44px;
text-align: center;
}



   </style>

	</head>
	<body>
	<!-------sidenav----->
     <?php include("event_calendar.php")?>



     
   <form id="form1" action="" method="post" enctype ="multipart/form/data">
       
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
        	
        <div class="buttons" style="text-align: center;">
            <ul class="button-class" style="display:flex; list-style:none";>
<li> <div class="p-2" style="width: 135px;height:32px; margin-top: 5%;padding-left:20px;background-color: white;  border-radius: 22px; "><a href ="#" style="text-decoration: none; color: black;  font-size:15;font-weight:400%; ">Recipies details</a></div></li>
  <li><div class="p-2" style="width:100px; height:32px; margin-left: 50px;
  margin-top: 5%;  text-align:center;">
    <a href="#" style="text-decoration: none; color: black; font-size:15;font-weight:400% ;">Ingredients</a></div></li>
 <li> <div class="p-2" style="width:78px; height:32px; margin-left: 40px; margin-top: 5%;" >
    <a href="#" style="text-decoration: none; color: black; font-size:15; font-weight:400% ;">Directions</a></div></li>
</ul>
</div>

           <div class="receipe-details">
           	  <!------<table id ="tbl-view">---->
                 <ul class="list-group" id="listofmenu" style="margin-left:30%;margin-right: 30%; list-style: :none; justify-content: space-between;  ">
            <li class="list-group-item"  ><?php echo $row["receipe_name"];?></li>
            <li class="list-group-item" style="padding-top:14px;" ><?php echo $row["cousre"]; ?></li>
              <li class="list-group-item"> <?php echo $row["category"]; ?>
                
              </li>
            <li class="list-group-item" style="margin-bottom: 50%;padding-top:14px;"><?php echo $row["preparation_time"];?></li>
            <li class="list-group-item"><?php echo $row["cooking_time"];?></li>
            <li class="list-group-item"><?php echo $row["serving"];?></li>
        </ul>
             <div class="nutri-style"> <h6 class="h5-style">Nutritions</h6></div>
             <ul class="list-group" id="listofmenu" style="margin-left:30%;margin-right: 30%; ">
            
             <li class="list-group-item"> <?php echo $row["calorie"]; ?></li>
             <li class="list-group-item"><?php echo $row["protien"]; ?></li>
             <li class="list-group-item"> <?php echo $row["fats"];?></li>
             <li class="list-group-item"><?php echo $row["carbs"];?></li>
           

          </ul>
          <div class="d-grid-gap-2">
            <button class="btn-btn-primary" type="button" id="button"
            style=" color:#FFFFFF; background:linear-gradient(264.44deg, rgba(207, 87, 230, 0.66) 0%, rgba(110, 100, 254, 0.66) 91.11%); border-style: none;">
            Next</button>
            
          </div>
           	  	
           	  	
                  
           	  	   <?php } } ?>
           
	</body>
</html>