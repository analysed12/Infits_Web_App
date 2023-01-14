<?php 
   include('config.php');?>
<html>
<head>
	
   <style>
    
    .container {
      position: absolute;
    width: 1198px;
    height: 948px;
    left: 242px;
    top: 76px;
}
.upload_photo{
            position: absolute;
           width: 350px;
         height: 230px;
           padding-left:355px;
         margin-top: 15px;
         background: #D9D9D9;
         opacity: 0.74;
         border-radius: 12px;
}

 img{
     height: 225px;
     width:  280;
 }

 .buttons
 {
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

  .tbl-view
  {
    
  }
 
   </style>

	</head>
	<body>
	<!-------sidenav----->
     <?php include("recipe_navbar.php")?>


     <div class="container">
     
   <form id="form1" action="" method="post" enctype ="multipart/form/data">
       
        	 <?php
           	  	$sql ="select * from `dietian_recipies` where `dietitianuserID`='Sam'";
           	  	$res = mysqli_query($conn,$sql);
           	  	if(mysqli_num_rows($res) > 0)
           	  	{
           	  		while ($row = $res -> fetch_assoc()){
           	  		
                  //$path = $row["file"];
                  $ext= explode('|',$row['image']);
                  $path = $ext[1];?>
                  
                       
            <div class="upload-photo">
                
             <img src=<?php echo $path;?> alt="" title="<?php($ext[0]);?>"/>  

    </div>
        	
        <div class="buttons" style="text-align: center;">
        <ul id="ul-btn" style="list-style:none; display:flex;">
          <li> <div class= "btn-pp" style="background-color:white;" > <a class="aa-btn" href="#">Receipe Details </a></div></li>
          <li><div class="btn-pp"><a class="aa-btn" href="#">Ingredients</a></div></li>
          <li><div class="btn-pp"><a class="aa-btn" href="#">Directions</a></div></li>

</div>
             <?php   
                $time = explode('|',$row['time']);?>
           <div class="receipe-details">
           	  <!------<table id ="tbl-view">---->
                 <table class="tbl-view">
                     <tr><td><?php echo $row["name"];?></td></tr>
                     <tr><td><?php echo $row["course"];?></td></tr>
                     <tr><td><?php $row["category"];?></td></tr>
                     <tr><td><?php echo $time[0];?></td></tr>
                     <tr><td><?php echo $time[1];?></td></tr>
                     <tr> <td><?php echo $row["serving"];?></td></tr>
                     <tr><td>Nutritions</td></tr>
                    
                     <tr><td><?php echo $row["calories"];?></td></tr>
                     <tr><td><?php echo $row["proteins"];?></td></tr>
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