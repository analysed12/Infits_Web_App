// <?php 
    
     //   if(isset($_POST['Done']))
       // {
       //$rec_id = $_SESSION['receipe_id'];
      // $rec_id = 5;
    
     //  $name = "juice";
      // $ingrd1 =$_POST['text1'];

     //  $quantity1 =$_POST['text2'];
      // $sql = "INSERT INTO addingredients(receipe_id, receipe_name, ingredients1, quantity1) values 
      // ('$rec_id','$name','$ingrd1','$quantity1')";
      // if($conn-> query($sql)  === TRUE)
      // {
        // echo "Data Inserted";

       // }
      //  else
     //   {
      //      echo "error";
       // }

 // } ?>


<!Doctype html>
<html>
    <title> Add Ingredients </title>
    <head>
        <style>
             
             
             
             .container{
                box-sizing: border-box;
            
                width: 409px;
                height: 212px;
                background: #FFFFFF;
                border: 1px solid #E4E4E4;
                box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.09);
                border-radius:18px;
             }
             .box{
                  width: top:51px;
                  height: 330px;
                  width: 310px;
                  padding-left:61px;
                  padding-right:17px;
             }
             .sign{
          
                width: 24.22px;
                height: 74px;
                font-weight: 400;
                font-size: 46px;
                line-height: 150%;
                display: flex;
                background: linear-gradient(180deg, #7963FB 0%, #BD59EB 100%);
             }

             .input-text{
                box-sizing: border-box;
                
                width: 310px;
                height: 33px;
                
                border: 1px solid #D5D5D5;
                border-radius:9px;
                left: 61px;
             }
             .button-wrap{
                position: absolute;
width: 162px;
height: 31px;


background: linear-gradient(267.44deg, rgba(204, 87, 231, 0.66) 0.01%, rgba(116, 99, 252, 0.66) 85.22%);
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
border-radius: 10px;
             }

             .done{

font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 24px;
line-height: 75%;
/* identical to box height, or 18px */

display: flex;
align-items: center;

color: #FFFFFF;

             }
            </style>
</head>
<body>
   
   

     <div class ="container">
        <h3 id = "header"> Add Ingredients </h3>
        <form action="" method="post" enctype="multipart/form-data">
    
        <div class="box">
        <input type= "text" id="text1" class="input-text" name = "text1" style="top:51px;">
        <input type="number" id ="text2"  class="input-text" name ="text2" style="top:88px;">
        <a href ="#">Add more Ingredients</a>
        <div class="button-wrap">
        
       <button type="submit"   name="Done" id="Done" style="font-family: 'NATS';font-size: 24px;width: 54px; width: 54px;" >Done</button>
            </button>
            </div>
            </form>
            

          
</div>

<style>
    </styel>


</body>
    </html>