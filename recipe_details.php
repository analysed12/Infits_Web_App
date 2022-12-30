<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Recipe Details</title>
</head>
<style>
html {
    overflow-x: hidden;
}
   #content-body{
   display: flex;

    height: 90%;
    font-family: "Poppins";
    font-style: normal;
    font-weight: 500;
    font-size: 35px;
    padding: 20px;
   }
   .recipe-detail{
    position: absolute;
    margin-left: 10%;
    width: 80%;

   }

   .recipe-image{
    width: 267px;
    height:348px;
     display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 5%;
   }
   .rr-image{
    height:auto;
    width: auto;
    border-radius:14px;
    background-color: purple;
    justify-content:center;
   }
   .recipe-name{
    position: absolute;

    display: flex;
    justify-content:center;
    flex-wrap:wrap;
    top: 143px;
    left:
   }
  .box{
    position:absolute;
    display: flex;
    
    
    height: auto;
    width: auto;
    left:450px;
  }

  tr{

      padding:15px;

  }
  .ech
   {
    height: 15px;
    text-align:center;
    font-style:normal;
    font-family:NATS;
    font-size: 20px;
    font-weight:400;
    color:#9C5EF4;

    padding-top:10px;
    padding-right:10px;
    padding-left:10px;
    padding-bottom:4px;

  }
  .tdd{
    height:13px;
    text-align:center;
    font-style:normal;
    font-size:15px;
    font-weight:400;
    color:#858383;
    margin-top:1px;
    
  }
  .info{
    display: flex;
    flex-direction:column;
    justify-content:space-center;
    margin-top:10px;
    height:auto;
    width:auto;

    
  }
.tags{
    display:flex;

    flex-flow:row;
    height:70px;
    width:390px;
    left:700px;
      top:170px;
      justify-content:space-around;

}
.tag-item{
    
    color:black;
    font-size:20px;
    font-weight:400px;
    border-radius:25px;
    padding:10px;
}
.table1 td{
    padding:10px;
    height: 60px;
    font-size:15px;
    align-items: center;
    display:flex;
}
 </style>
 <body>
   <!------sidebar -------->
   <?php include('event_calendar.php');?>
   <!------connection------->
   <?php include('connection.php'); ?>
   
   <!-------code to reterive data----->
   <?php 
   $name =$_SESSION['recipe_name'];
   $sql="select * from `dietian_recipies` where `name` = '$name'";
   $result = $conn->query($sql);
   if($result->num_rows() >0)
   {
    while($row = $result ->fetch_assoc()){
        $ext= explode('|',$row['image']);
        $path = $ext[1];
        $ext1 = explode('|', $row['time']);
        $GLOBALS['ingr_id'] = $row['ingredient'];
        
      
        ?>



   <!------contents of page------->
   <div id="content-body">
   
      <!--------recipe form------>
      <form action=" " method="post" enctype="multipart/form-data">
        <div class="recipe-detail">
            <div class="info">
            <div class="recipe-image">
                <div class="rr-image">
                <img src=<?php echo $path;?> alt="" title="<?php($ext[0]);?>"/>
                    <h5 style="z-index:1;"><?php echo $ext1[0];?></h5>
</div>
</div>
  
    <div class="recipe-name">
        <!--------recipe name"------>
        <h4 class="rname" name="rpe-name" style="padding-left:450px;padding-top:10px;"> <?php echo "ree"?>
</h4>

          <div class="box">
              <table>
                <tr>
                    <td class="ech"><?php echo $row['calories']; ?></td>
                    <td class="ech"><?php echo $row['fats'];?></td>
</tr>
<tr>

                    <td class="tdd"> calories </td>
                  <td class="tdd"> Fats</td>

              </tr>
      <tr>
    <td class="ech"><?php echo $row['proteins']; ?></td>
    <td class="ech"><?php echo $row['carbs']; }}?></td>
</tr>
<tr>
    <td class="tdd">Protien</td>
    
    <td class="tdd">Carbs</td>
       </tr>
</table>
</div>
</div>

        <div class ="tag" style="display:flex; flex-direction:row; justify-content:space-around; width:390px;margin-left:140px;">
            <div class="tag-item" style="inline-block"> Ingredients</div>
            <div class="tag-item" style="inline-block"> Directions</div>
</div>

</div>
</div>


<!-------fetching data from ingredients table----->
<?php
$sql ="select * from `add_ingredient` where `ingrd_id` = $GLOBALS['ingr_id']";
$result =$conn -> query($sql);
if($result ->num_rows() >0 )
{
    while($row = $result->fetch_assoc())
    {
        $ext= explode('|',$row['image']);
        $path = $ext[1];?>
       


    

  <div class="flex-box1" style=" height:auto; width:auto; margin-top:120%;margin-left:150px;">
  
    <table class="table1" style="top:587px;">
        <tr>
            <td><div class="img" style="height:63px;width:60px;background:grey;border-radius:15px;">
            <img src=<?php echo $path;?> alt="" title="<?php($ext[0]);?></div></td>
            <td><?php echo $row['ingrd_name'];?></td>
            <td></td>
            <td></td>
            <td></td>
            <td><?php echo $row['quantity'];}}?></td>
</tr>
</table>
      

</div>
</div>




</div>
</form>


</body>
</html>