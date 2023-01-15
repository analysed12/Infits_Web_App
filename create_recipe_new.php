<?php
//  session_start(); 
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infits</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script type="text/JavaScript" 
src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
</script>

    <style>

    #content {
        overflow: auto;
        display: flex;
        flex-direction: column;
        height: 90%;
        font-family: 'Poppins';
        font-style: normal;
        padding: 10px;
        margin: 0px;
    }
     
    /*  image   */
    .custom-file-input {
    color: transparent;
    }
    .custom-file-input::-webkit-file-upload-button {
    visibility: hidden;
    }
    .custom-file-input::before {
    content: 'Upload Photo';
    color: black;
    display: inline-block;
    background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3);
    border: none;
    border-radius: 3px;
    padding: 30px;
    outline: none;
    white-space: nowrap;
    -webkit-user-select: none;
    cursor: pointer;
    text-shadow: 1px 1px #fff;
    font-weight: 700;
    font-size: 10pt;
    }
    .custom-file-input:hover::before {
    border-color: black;
    }
    .custom-file-input:active {
    outline: 0;
    }
    .custom-file-input:active::before {
    background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9); 
    }

    /*   tabs      */
    /* Style the tab */
    .tab {
    display: flex;
    justify-content: space-around;
    background-color: #FAFAFA;
    border-radius: 10px;
    }

    /* Style the buttons inside the tab */
    .tab button {
    background-color: inherit;
    border-radius: 10px;
    float: left;
    border: none;
    padding: 10px 40px;
    outline: none;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
    margin: 5px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
    background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.activee {
    background-color: #D257E6;
    color: white;
    }

    /* Style the tab content */
    .tabcontent {
    display: none;
    padding: 6px 30px;
    border: none;
    border-top: none;
    color: black;
    left:456px;
  
    }

    /*   FORM   */
    .form-flex{
        display: flex;
        justify-content: space-around;
    }
    .flex-left, .flex-right{
        display: flex;
        flex-direction: column;
    }

    input[type=text], #dropdown{
        background: #FFFFFF;
        box-shadow: 0px 1.7px 5px rgba(0, 0, 0, 0.25);
        border-radius: 10px;
        border:none;
        padding: 10px;
        width: 450px;
    }


  



      <!----CSS for direction table----->
      flex-rightdir{
        display:flex;
        flex-direction:row;
        width:150px;
        flex-wrap:row wrap;
      justify-content:space-between;
      
      flex-basis:150px;


      }
      .upload-vdo{
        display:flex;
        flex-direction:row;
        width:153px;
        height: 48px;
        border-radius:10px;
        border: 1px solid #A45DF2;
        justify-content:space-between;
        flex-wrap:row wrap;
        margin-left:100px;
        
      }
      .btn-flex{
      
        border:none;
        display:inline-block;
        background: #FFFFFF;
        color:#A45DF2;
        cursor:pointer;
        text-align:center;
        
        
      }
      

      <!-------CSS for add url popup----->
     .add-url{
      height:fit-content;
      width:420px;;
      display:none;
      position:fixed;
      text-align:-webkit-center;
      overflow:auto;
      border-radius:15px;
      border: 1px solid black;
    z-index:1;
      margin-left:50%;
      

     }
     .url-header{
      margin-left:15px;
      margin-top: 5px;
      display:flex;
      flex-direction:row:
      text-align:center;
      padding:5px 10px;
      justify-content:space-around;
     }
     .url-content{
      display:flex;
      flex-direction:column;
      justify-content:space-evenly;
      margin-top:5px; 
      text-align:center;

     }
     #url1{
      height:57px;
      width: 400px;
      margin-left:5px;
      margin-right:10px;
      border:none;
      border-radius:10px;
      padding:10px;
      box-shadow:0px 1.7px 5px rgb(0 0 0 / 25%);

  
     }
    .url-save{
      height:54px;
      width:197px;
      cursor:pointer;   
      backrgound:#A85CF1;
      border-radius:10px;
      color:white;
      border:none;
    
      margin-left:100px;
      margin-top:15px;

     }
     <!-----style for add-directions popup------>
     .add-dirc{
      display:block;
      height:334px;
      width:476px;
      z-index:1;
      border-radius:10px;
      position:fixed;
      border:1px solid;
     } 
     .dirc-header{
      display:flex;
      flex-direction:row;
      padding:5px 5px;
      text-align:center;
      font-size:20px;
      height:15px
     }
     .dirc-content{
      margin-top:15px;
      display:flex;
      flex-direction:column;
      justify-content:space-between;
    
     }
     #input-dirc{
      height:54px;
      width:197px;
      border-radius:16px;
      margin-left:15px;
      margin-right:15px;
     }
     #dirc-add{
      height:197px;
      width:54px;
      background:#A85CF;
      border-radius:10px;
      border:none;
      color:white;
      align-items:center;
      font-size:20px;

     }
     #dirc-p{
      text-align:center;
      display:flex;
      margin-left:20px;
      color:#A85CF;
      font-size:15px;
     }

     <!------direction poopup----->
     .direction-add{
      height:344px;
      width:420px;
      border-radius:15px;
      left:40%;
      top:50%;
      border-style:15px solid #BF59EA;
      color:black;
      display:none;
    
     }
     .flex-dir{
      display:flex;
      flex-direction:column;
      justify-content:space-between;
      

     }
     .btn-done{
      height:54px;
      width:150px;
      background-color:#A85CF1;
      color:white;
      border-radius:15px;

     }
     .header{
      display:flex;
      flex-direction:row;
      margin-top:30px;
    margin-left:25px;
      height:70px;
     }

    </style>

<!-------uploadvideo----->
<script>
  $(document).ready(function(){
  $("#video-symbol").click(function(){
    $("#video-upload").trigger('click');

  });
});
</script>


 <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script type="text/javascript">

        $(document).ready(function () {

            $("#btnShow").click(function () {

                $('#SampleModal').modal('show');

            });

        });

    </script>



  </head>

  <body>
  <div id="page">
    <?php include 'navbar.php'; ?>







    <div id="content">
    <form action =" " method="POST" enctype="multipart/form-data">
      <!------------------------------------------------DASHBOARD--------------------------------------------------------->
        <h3 style="font-size: 30px; color: #202224; font-weight: 400; margin: 5px;">New Recipe</h3>
        <button id="save" name="save" style="height:46px; width:151px; background:#D257E6; color:white;
         text-align:center; border:none;border-radius:15px;">Save </button> 
    

        <center>
            
        <input type="file" class="custom-file-input"  name="my_image">

       
           <br><br>
           </center>


<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'recipe')">Recipe</button>
  <button class="tablinks" onclick="openCity(event, 'ingredients')">Ingredients</button>
  <button class="tablinks" onclick="openCity(event, 'directions')">Directions</button>
</div>



<div id="recipe" class="tabcontent">

  <div class="form-flex">
    <div class="flex-left">
        <input type="text" name="R-name" placeholder="Recipe Name">
        <br><br>

        <select name="catgry" id="dropdown" placeholder="Categories" required>
          <option value="Breakfast">Breakfast</option>
          <option value="eleven">Elevenses (11am)</option>
          <option value="Lunch">Lunch</option>
          <option value="snack">Snack</option>
          <option value="dinner">Dinner</option>
          <option value="other">Others</option>

        </select>
        <br><br>

        <input type="text" name="c-time" placeholder="Cooking Time">
        <br><br>
    </div>
    <!------------data fetching from category table-------->
    

    <div class="flex-right">
    
        <select name="c-name" id="dropdown" placeholder="Courses" autocomplete = "off">
          <option value =" ">Courses</option>
          <?php 
    $sql_query =" SELECT * FROM category";
    $result = $conn -> query($sql_query);
    if($result -> num_rows > 0)
    {
        while($row = $result -> fetch_assoc()){
    ?>
        <option value="<?php  echo $row['category'];?>"><?php echo $row['category']; ?></option>
          <?php }}?>
        </select>
        
        <br><br>

        <input type="text" name="p-time" placeholder="Preperation Time">
        <br><br>
        
        <input type="text" name="serve" placeholder="Servings">
        <br><br>

    </div>
  </div>

  <center>
  <p style="color: black; font-weight: 600; font-size: 20px;">Nutritional Details</p>
</center>

<div class="form-flex">
    <div class="flex-left">
        <input type="text" name="cal" placeholder="Calories">
        <br><br>

        <input type="text" name="fats" placeholder="Fats">
        <br><br>
    </div>
    <div class="flex-right">
        <input type="text" name="prt" placeholder="Protien">
        <br><br>

        <input type="text" name="carbs" placeholder="Carbs">
        <br><br>
</div>
</div>
</div>
</form>



<div id="ingredients" class="tabcontent">
  <!------redirect  to add_ingredients page---->
  <?php header('location: Add-ingredients.php'); ?>

        </div>





<div id="directions" class="tabcontent">
  <!--    CONTENT FOR DIRECTIONS-->
  <form action =" " method="POST" enctype="multipart/form-data">

    <div class="form-flex" style="margin-left:10px;">
    <div class="flex-rightdir">
      
       <div class="btn-open" id="btn-show" style="text-align:center; margin-left:20px;" ><h2 style="margin:7px 10px;"> + </h2>
        <p id="add-dir-data" style="width:140px;margin-left:90px;color:black;font-size:17px;margin-top:0px;" >Add direction</p> </div>
        </div>

       <div class="upload-vdo"> 
             <img src= ".\images\upload.svg" id="video-symbol" style="height:17px;width:17px;margin-left:5px;margin-top:8px;cursor:pointer;">
            <input type="file" name="video-upload"  id="video-upload" style="display:none;">
            <button id="btn-video" name="btn-video" class="btn-flex;" style="background:white; border:none; color: #A45DF2; margin-right:15px;margin-left:10px;"> Add Video </button>
       </div>

       <div class="upload-vdo" style="margin-left:30px;">
       <img src=".\images\url.svg" id="url-symbol" name="url-symbol" style="height:15px; width:15px;margin-left:10px;margin-top:10px;">
       
            <button id="btn-url" name="btn-url" class="btn-flex;" onclick="document.getElementById('add-url').style.display=block"; style="background:white; border:none; color:#A45DF2; margin-right:15px;margin-left:10px;"> Upload url </button>
</div>
    </div>

  </div>
        </form>


      <!--------php for add in drections table---->
      <?php  
      if(isset($_POST['done']))
      {
         $var_dir = $_POST['dirct'];
        $var = $_SESSION['dirtid'];
        // echo $var;
         $sql ="insert into `add_direction` (`dir_id`,`direction`) values('$var', '$var_dir')";
         if($conn -> query($sql) == true)
         {
           echo 'directions added';

         }
         else{
          echo 'directions not added try again';
         }
      }

       ?>



  


  <!----------------DIRECTIONS POPUP-------------->
          <div id="dirModal"  class="direction-add" style="height:320px; width:476px; border-radius:15px; border:1px solid black;">
        <div class="flex-dir">
        <div class ="header">
        <form action=" " method="POST">

          <h4> Add Direction </h4>  <button type="button" style="font-size:12px; border:none; margin-left:20px; background:white;">&times; </button>
        </div>
        <input type="text" name="dirct" placeholder="Type directions here....." style="border-radius:5px; height:51px; width:420px; margin-left:15px;"> <br><br>
        <p id="para" style="font-size:17px; color:#7B62FB; display:flex;margin-left:40px;"> Add more direction</p> 
        <button class="btn-done" name="done" style="margin-left:80px;">Done </button>

        </div>
        </div>
        </form>

  </div>



<!--    JS FOR TABS  -->
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i <  tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
    event.preventDefault();
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" activee", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " activee";
  event.preventDefault();
}
</script>

</body>
</html>