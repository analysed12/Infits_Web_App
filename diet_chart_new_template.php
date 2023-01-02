<!--    page cancelled    -->

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
border-radius: 40px;
width: 80%;
}

/* Style the buttons inside the tab */
.tab button {
background-color: inherit;
border-radius: 40px;
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

/*  input  */
input[type=text], #dropdown{
        background: #FFFFFF;
        box-shadow: 0px 1.7px 5px rgba(0, 0, 0, 0.25);
        border-radius: 10px;
        border:none;
        padding: 10px;
        width: 450px;
    }

.box{
   display: flex;
   justify-content: center;
background-color: white;
border: 1.1424px solid #D257E6;
border-radius: 27.4175px;
padding: 10px 40px;
outline: none;
cursor: pointer;
transition: 0.3s;
font-size: 17px;
margin: 5px; 
color: black;
width: 30%;
}

.center-flex{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
}
</style>
</head>

<body>
<div id="page">
<?php include 'event_calendar.php'; ?>

<div id="content">

  <!------------------------------------------------DASHBOARD--------------------------------------------------------->
    <h3 style="font-size: 30px; color: #202224; font-weight: 400; margin: 5px;">New Template</h3>

    <center>
        <input type="file" class="custom-file-input">
        <br><br>
        <input type="text" placeholder="Template Name">
        <br><br>
</center>

<center>
<div class="tab">
<button class="tablinks" onclick="openCity(event, 'tp')">Target Plan</button>
<button class="tablinks" onclick="openCity(event, 'mc')">Meal Course</button>
<button class="tablinks" onclick="openCity(event, 'cat')">Category</button>
</div>
</center>

<script>
    function m_display(){
    event.preventDefault();
    modal.style.display ="block";
}
    </script>
<div id="tp" class="tabcontent">
    <?php 
                //  $sql= "Select `name` from `addclient`";
         
                    $sql = "SELECT template_name FROM template_name";
                    $result = mysqli_query($conn, $sql);

                      
                 
                 if (mysqli_num_rows($result) > 0) {
                    // Output the buttons
                    echo "<form method='post'>";
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<button type='submit' name='button_id' onclick='m_display()' class='box' value='" . $row['template_name'] . "'>" . $row['template_name'] . "</button>";
                    }
                    echo "</form>";
                } else {
                    echo "No buttons found.";
                }
                
                // Check if a button was submitted
                if (isset($_POST['button_id'])) {
                    // Get the button ID from the POST request
                    $button_id = $_POST['button_id'];
                
                    // Do something with the button ID (e.g. display it on the page)
                    echo "Button ID: " . $button_id;
                }

                 ?>

</div>

<div id="mc" class="tabcontent">
<!--    CONTENT FOR INGREDIENTS-->
</div>

<div id="cat" class="tabcontent">
</div>


<!--    JS FOR TABS  -->
<script>
function openCity(evt, cityName) {
var i, tabcontent, tablinks;
tabcontent = document.getElementsByClassName("tabcontent");
for (i = 0; i < tabcontent.length; i++) {
tabcontent[i].style.display = "none";
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