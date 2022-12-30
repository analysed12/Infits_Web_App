<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infits</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
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
    padding: 6px 12px;
    border: none;
    border-top: none;
    color: black;
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
    </style>
  </head>

  <body>
  <div id="page">
    <?php include 'event_calendar.php'; ?>


  <form action=" " method="post" enctype="multipart/form-data">
    <div id="content">
  <?php include 'recipe-tab.php'; ?>
      <!------------------------------------------------DASHBOARD--------------------------------------------------------->
        <h3 style="font-size: 30px; color: #202224; font-weight: 400; margin: 5px;">New Recipe</h3>
        <button id="save" name="save" style="height:46px; width:151px; background:#D257E6; color:white;
         text-align:center; border:none;border-radius:15px;">Save </button> 
    

        <center>
            
        <input type="file" class="custom-file-input" >

       
           <br><br>
           </center>


<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'recipe')">Recipe</button>
  <button class="tablinks" onclick="openCity(event, 'ingredients')">Ingredients</button>
  <button class="tablinks" onclick="openCity(event, 'directions')">Directions</button>
</div>

<script>
     var modal = document.getElementById("recipe");
          function m_display(){
            
            modal.style.display ="block";
        }

  </script>


<div id="recipe" class="tabcontent">

  <div class="form-flex">
    <div class="flex-left">
        <input type="text" name="R-name" placeholder="Recipe Name">
        <br><br>

        <select name="catgry" id="dropdown" placeholder="Categories" required>
          <option value="bachelors">Bachelors</option>
          <option value="masters">Masters</option>
          <option value="highschool">High School</option>
          <option value="phd">PhD</option>
        </select>
        <br><br>

        <input type="text" name="c-time" placeholder="Cooking Time">
        <br><br>
    </div>
    <div class="flex-right">
    
        <select name="c-name" id="dropdown" placeholder="Courses" required>
          <option value="bachelors">Bachelors</option>
          <option value="masters">Masters</option>
          <option value="highschool">High School</option>
          <option value="phd">PhD</option>
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
  <!--    CONTENT FOR INGREDIENTS-->
</div>

<div id="directions" class="tabcontent">
  <!--    CONTENT FOR DIRECTIONS-->
</div>


<!--    JS FOR TABS  -->
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "block";
    event.preventDefault();
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" activee", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " activee";
}
</script>

</body>
</html>