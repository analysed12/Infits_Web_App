

<!Doctype html>
<html>
    <title> Add Ingredients </title>
    <head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infits</title>
  
    <script type="text/JavaScript" 
src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
</script>

      

     <!-------code for image upload in plus sign------>
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
.flex-box{
  display:flex;
  flex-direction:row;
  margin-left:40%;

}
.box{
  height:55px;
  width:55px;
  border-radius:5px;
  border-color: #7963FB;
  border: 1px solid;
  text-align:center;
  display:flex;

}
.link{
  display:flex;
  justify-content:space-between;
  margin-left:20px;
}
#link-click{
  color:black;
  font-size:20px;
  margin-top:15px;
  margin-left:10px;
  cursor:pointer;
}
<!-------popup style----->
.add-ingrd{
  height: 320px;
  width: 380px;
  border-radius:15px;
  display:none;
  top:40%;
  left:50%;
  color:black;
  border-style: 5px solid #BF59EA;
  font-size:20px;
  font-weight:400;

}
.flex-box1{
  display:flex;
  flex-direction:column;
  flex-wrap:wrap;
}
 .ingrd-header{
  display:flex;
  justify-content:space-around;
  height:50px;
  margin-left:20px;
  margin-top:15px;

 }
.ingrd-content{

  display:flex;
  flex-direction:row;
  justify-content:space-between;
  margin-top:50px;
  margin-left:5px;


}
.image-add{
  display:flex;
  text-align:center;
  height:56px;
  width:56px;
  border-radius:5px;
  color:#BF59EA;
  border:1px solid;
  margin-top:40px;
}
.left-flex{
  display:flex;
  flex-direction:column;
}

.input1{
  width:250px;
  height:45px;
  border-radius:8px;
  margin-left:20px;
}
#add{
  height:48px;
  width:178px;
  border-radius:15px;
  background-color:#BF59EA;
  color:white;
  cursor:pointer;
  margin-left:20px;
}
  </style>



  <!------js for add ingredients popup---->
  <script>
              $(documet).ready(function(){
                $("#open-ingd").click(function(){
                  $("#add-ingrd").modal('show');

                });

              });


            </script>


      
  
         <script>
 
          //$(function(){
           // $('#img_add').on('click',function(){
           //   $('#my_image').trigger('click');

           $(document).ready(function(){
            $("#img_add").click(funcion(){
            $("#my_image").trigger('click');
          
            });
          });     
    
        </script>
</head>
<body>
     
  <!------connection ------>
  <?php include('connection.php'); ?>
  <?php
         //$ingid= $_SESSION['id'];
         $ingid = 841;
      if(isset($_POST['add']))
      {
        $ingrd = $_POST['ingrd-name'];
        $quanty =$_POST['quantity'];
  
    
                      $sql ="update `add_ingredient` set  `ingrd_name` = '$ingrd',
                       `quantity` = '$quanty' where `ingrd_id` = $ingid";

                       if($conn -> query($sql) == true){?>
                    echo   '<script>
                           alert("ingredients added");
                        </script>';

                     
                     <?php } else {  ?>
                      echo '<script>
                           alert("ingredients not added try again");
                        </script>';

                    <?php }
                    }
                  
                        
         
    
   ?>


  <div id="page">
    <!------sideNavBar-------------->
    <?php include('event_calendar.php'); ?>
             
<form action=" " method="post" enctype="multipart/form-data">
    <div id="content">
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

   <form action=" " method="post" enctype="multipart/file-type">
<!-----------------recipe tab---------->
<div id="recipe" class="tabcontent">
   <?php header('location:create_recipe_new.php'); ?>    // redirect to create recipe page
        </div>

    <!----------ingredient tab------->
    <div id="ingredients" class="tabcontent">
         <div class="flex-box">
           <div class="box">
              <h2 id="open-ingd" style="color: #BF59EA; font-weight:500; font-size:25px;cursor:pointer; margin-top:15px;">+ </h2>
        </div>
        <div class="link">
          <p id="link-click" style="color:black;"> Add more ingredients </p>
        </div>
        </div>
      

        </div>



        <!--------add-ingredients tab ------------->
        <div id="add-ingrd" class="add-ingrd" style="height:334px; width:456px;border-radius:15px;border:1px solid;">

            <div class="flex-box1">
                   <div class="ingrd-header">
                      <h5 id="aid"> Add Ingredients  </h5>
           </div>

        <div class="ingrd-content">
          <div class="image-add">
            <h3 id="img-add" style="margin-left:20px; margin-top:15px;">+ </h3>
            <input type="file" name="my_image" id="my_image" style="display:none;>
        </div>
      
        <div class="left-flex">
          <input type="text" class="input1" name="ingrd-name" id="ingrd-name" placeholder="Name of ingredient"> <br><br>
          <input type="text" class="input1" name="quantity" id="quantity" placeholder=" quantity">
          <p id="pid" style="#BF59EA" style="margin-left:30px;"> Add more ingredients </p>
          <button type="submit" name="add" id="add"> Done </button>
        </div>
        
                  </div>  
        </div>

        
        
        </form>
        <!--------direction tab------------>
        <div id="direction" class="tabcontent">
        </div>

      


                
        </div>
        </form>   

        
            <!-------js code for add  more ingredients------>
            <script>
            $(document).ready(function(){
              $('#add-more').click(function(){
                document.getElementById("text1").value =' ';
                document.getElementById("text2").value =' ';
               })
             });
            </script>

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
          


</div>
</div>
</div>
</body>
    </html>