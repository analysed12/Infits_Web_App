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


 img{
     height: 225px;
     width:  280;
 }

 .nutri-style
 {
  
    position: absolute;
width: 95px;
height: 18px;
left: 530px;
top: 590px;
 }

 .h5-style
 {
    


font-style: normal;
font-weight: 400;
font-size: 18px;
line-height: 140%;
align-items: center;

color: #000000;

 }

 .btn-btn-primary{
    position: absolute;
width: 474px;
height: 39px;
left: 520px;
top: 750px;
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
top: 390px;

background: #E7E7E7;
border: 1px solid #E7E7E7;
border-radius: 44px;
text-align: center;

}



   </style>

	</head>
	<body>
	<!-------sidenav----->
     <?php include("recipe_navbar.php")?>


     <div class="container">
     
   <form id="form1" action="" method="post" enctype ="multipart/form/data">
       
        	 <?php
           	  	$sql ="select * from `dietian_recipies` where `dietitianuserID`=7";
           	  	$res = mysqli_query($conn,$sql);
           	  	if(mysqli_num_rows($res) > 0)
           	  	{
           	  		while ($row = $res -> fetch_assoc()){
           	  			$path = $row["file"];?>
                       
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
                 <table class="tbl-view">
                     <tr><td><?php echo $row["name"];?></td></tr>
                     <tr><td><?php echo $row["course"];?></td></tr>
                     <tr><td><?php $row["category"];?></td></tr>
                     <tr><td><?php echo $row["time"];?></td></tr>
                     <tr><td>Nutritions</td></tr>
                     <tr> <td><?php echo $row["serving"];?></td></tr>
                     <tr><td><?php echo $row["calories"];?></td></tr>
                     <tr><td><?php echo $row["protiens"];?></td></tr>
                     <tr><td><?php echo $row["fats"];?></td></tr>
                     <tr><td><?php echo $row["carbs"];?></td></tr>
                       
                   <?php } } ?>
                 </table>
                 </div>
            <button class="btn-btn-primary" type="button" id="button"
            style=" color:#FFFFFF; background:linear-gradient(264.44deg, rgba(207, 87, 230, 0.66) 0%, rgba(110, 100, 254, 0.66) 91.11%); border-style: none;">
            Next</button>
            
          
           	  	
           	  	
             </form>   
           </div>
	</body>
</html>