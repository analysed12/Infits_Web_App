<?php
include('navbar.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    @font-face {
    font-family: 'NATS';
    src:url('font/NATS.ttf.woff') format('woff'),
        url('font/NATS.ttf.svg#NATS') format('svg'),
        url('font/NATS.ttf.eot'),
        url('font/NATS.ttf.eot?#iefix') format('embedded-opentype'); 
    font-weight: normal;
    font-style: normal;
}

body{
    font-family: 'NATS', sans-serif !important;
    z-index: 1;
     
}
    .left {     
        position: relative;
      display:inline-block;
      margin-top: 30px;
      margin-left: 50px;
   }
   
  .right {
    position: relative;
      display:inline-block;
      float:right;
      margin-right:1px;
      margin-top: 30px;
      
  }
   
  

  .right button{
      margin-right: 50px;
      border-radius: 10px;
      color: #fff;
      padding: 6px;
      border-color: #7282FB;
      background-color: #7282FB;
      width: 120px;
      border-width: 0.1px;
      box-shadow: 2px 2px 5px;
  }
  .right input{
      margin-right: 30px;
      border-radius: 10px;
      padding: 6px;
      border-color: #fff;
      border-width: 0.1px;
      background: #FFFFFF;
      box-shadow: 1px 1px 5px grey;
  }
 
  .cards{
      position: relative;
      margin-right: 30px;
      margin-left: 50px;
  }
  .cards a{
    display:inline-block;
}

  .grid-header {
        position: absolute;
        margin-top: -6.5rem;
        margin-left: 5rem;
        font-family: NATS;
        font-size: 40px;
        font-weight: 500;
        line-height: 31px;
        letter-spacing: 0em;
        text-align: left;
    }

  


  .cards img{
      margin-top: 30px;
      border-radius: 20px;
      margin-right: 10px;
     
  }
  .left1 {
    position: relative;
      display:inline-block;
      margin-top: 30px;
      margin-left: 50px;
  }
  
  .right1{
    position: relative;
      display:inline-block;
      float:right;
      margin-right:60px;
      margin-top: 30px;
  } 
  .main-card{
    margin-left: -20px;
  }
  .cards1{
      position: relative;
      font-family: 'Poppins';
      width:21%;
      display:inline-block;
      margin-top: 30px;
      margin-bottom: 30px;
      background-color:#fff;
      padding: 20px;
      border-radius: 20px;
      box-shadow: 0px 2px 3px grey;
      border-color:#fff;
      
  }
  .image img{
      width:100%
      
  }
  .image button{
    position: relative;
      transform: translate(120%, -320%);
      background-color: #fff;
      color: #000;
      font-size: 15px;
      padding:5px;
      width: 100px;
      border: none;
      box-shadow: 2px 2px 5px rgba(white, white, white, white);
      cursor: pointer;
      border-radius: 10px;
      text-align: center;
  }
  .title{
     width:100%;
     display: flex;
     justify-content: space-between;
      
  }
  .title h5{
    font-size: 15px;
    width: 150px;
  }
  .content{
      width:100%;
     display: flex;
     justify-content:space-between;
    
  }
  .sub_content2{
      margin-right: 15px;
      color: #818181;
  }
  .content1{
      width:100%;
     display: flex;
     justify-content: space-between;
     margin-top: 8px;
  }
  .content1 button{
      background-color: #9C74F5;
      color: #fff;
      border-width: 1px;
      border-color: #9C74F5;
      border-radius: 10px;
      margin-right: 5px;
  }
  
  .hidden {
  display: none;

}
#button1{
    padding: 7px;
    width:130px;
    color: white;
    background-color: #9C74F5;
    border: 1px #9C74F5;
    border-radius: 5px;
}
#button2{
    padding: 7px;
    width:100px;
    color: white;
    background-color: red;
    border: 1px #9C74F5;
    border-radius: 5px;
}
.btn{
    background-color: #fff;
    border-radius: 10px #fff;
    box-shadow: 2px 3px 3px gray;
    width: 50%;
}
   
.dropdown {
  position: relative;
  display: inline-block;
}
.dropdown-content {
display: none;
position: absolute;
background-color: #f1f1f1;
min-width: 140px;
overflow: auto;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;
border-radius: 10px;
}
.edit-button{
  color:white;
  cursor:pointer;
  background-color: #9C74F5;
  border-color: #9C74F5;
  border: 1px;
  width:100px;
  padding:8px;
  border-radius:10px;
  margin-top:20px;
  margin-left: 8px;   
}
.delete-button{
  color:white;
  cursor:pointer;
  background-color: red;
  border-color: red;
  border: 1px;
  width:100px;
  padding:8px;
  border-radius:10px;
  margin-bottom:20px;
  margin-left: 8px;   
}
.dropdown-content a {
color: black;
padding: 12px 16px;
text-decoration: none;
display: block;
}


.show {display: block;}





  @media screen and (min-width: 720px) and (max-width:1500px) {

      /* Styles go here */
      .mobile-menu {
          display: none;
      }
    .left1{
        margin-left: 40px;
    }
    
    .right1{
        margin-right: 50px;
    }
    .left{
          margin-left:140px;
          margin-right:100px;
    }
    .right{
        position:relative;  
    }
      .right input{
          width: 320px;
          margin-left:30px;
      }
      .right button{
          margin-right:40px;
          width:90px;
      }
     .cards{
        display:flex;
        flex-direction: row;
        overflow-x: auto;
        margin-top:70px;
     }
     .cards img{
            margin-right: 35px;
          margin-left: 20px;
          width:250px;
      }
      .grid-header {
        position: absolute;
        margin-top: -6rem;
        margin-left: 4rem;
        font-family: NATS;
        font-size: 40px;
        font-weight: 500;
        line-height: 31px;
        letter-spacing: 0em;
        text-align: left;
    }

      .main-card{
        margin-left: -20px;
      }
    
      .cards1 {
          width: 40%;
          margin-right:-35px;
          margin-bottom: 10px;
          
      }
      .image button {
          transform: translate(105%, -290%);
          font-size: 13px;
          padding: 3px;
          width: 80px;;
      }
      .title h5{
          font-size: 12px;
          width:150px;
      }
      .title img{
          height: 11px;
      }
      .sub_content{
          font-size: 12px;
      }
      
      .sub_content2{
          font-size: 12px;
      }
      
      .sub-content3{
          font-size: 12px;
      }
      
      .content1 button{
          font-size: 12px;
          width:60px;
          padding:2px;
      }
      .main-card a{
          margin-left: 44%;
      }

      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 100px;
        overflow: auto;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        border-radius: 10px;
    }
    .edit-button{
        color:white;
        cursor:pointer;
        background-color: #9C74F5;
        border-color: #9C74F5;
        border: 1px;
        width:60px;
        padding:8px;
        font-size: 12px;
        border-radius:10px;
    
    }
    .delete-button{
        color:white;
        cursor:pointer;
        background-color: red;
        border-color: red;
        border: 1px;
        width:60px;
        padding:8px;
        font-size: 12px;
        border-radius:10px;
        margin: none;   
    }
    .dropdown-content a {
        color: black;
        padding: 3px;
        margin-left: 10px;
        text-decoration: none;
        display: block;
    }
    .show {display: block;}
}

@media screen and (min-width: 0px) and (max-width: 720px) {
      .sidenav {
          display: none;
      }
      .nav-res img{
          position: top;
      }
      .left{
          margin-left: 25%;
      }
      .right{
          display:inline-block;
          margin-left: 20px;
          justify:space-between;
      }
      .right input{
          width:50%;
          margin-left: 30px;
      }
      .right button{
          margin-right:20px;
          width:60px;
      }
      .cards{
        display: flex;
        flex-direction: row;
        overflow-x: auto;
        
      }
      .main-card{
        margin-left:-2px;
      }
      .cards1 {
          display: inline-block;
          width: 75%;
          margin-left:30px;
          margin-bottom: 10px;
      }
      
      .image button {
        
          transform: translate(120%, -320%);
      }
      .main-card a{
          margin-left: 41%;
      }   

 .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 80px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    border-radius: 10px;
}
.edit-button{
    color:white;
    cursor:pointer;
    background-color: #9C74F5;
    border-color: #9C74F5;
    border: 1px;
    width:60px;
    padding:8px;
    font-size: 12px;
    border-radius:10px;
}
.delete-button{
    color:white;
    cursor:pointer;
    background-color: red;
    border-color: red;
    border: 1px;
    width:60px;
    padding:8px;
    font-size: 12px;
    border-radius:10px;
    margin: none;   
}
.dropdown-content a {
    color: black;
    padding: 3px;
    margin-left: 10px;
    text-decoration: none;
    display: block;
}
.show {display: block;}
}
</style>

</head>
<body>
<div class="main-content">
    <div> 
        <div class="left"> 
            <h1>Choose a recipe</h1> 
        </div> 
        <div class="right">
            <input type="text" placeholder="Search recipe here"size="50">
            <button type="button">Search</button>
        </div> 
    </div> 

    <div class="cards" style="margin-left:20px">
        
        <a href="recipe_breakfast.php" style="color: inherit;" class="breakfast" id="btn1">
        <img src="images/breakfast.png" width="270px" heigth="250px" style=" margin-left:40px;">
            <div class="img-container">
                    <div class="grid-header" style="margin-left:5.5rem;">Breakfast</div>
                </div>
            </a>

        <a href="recipe_lunch.php" style="color: inherit;" class="lunch" id="btn2">
        <img src="images/lunch.png" width="270px" heigth="250px" style=" margin-left:20px;">
            <div class="img-container">
                <div class="grid-header" style="margin-left:7rem;">Lunch</div>
            </div>

        </a>

        <a href="recipe_lunch.php" style="color: inherit;" class="lunch" id="btn2">
        <img src="images/Snacks.png" width="270px" heigth="250px" style=" margin-left:20px;">
       <div class="img-container">
                <div class="grid-header" style="margin-left:6.5rem;">Snacks</div>
            </div>

        </a>
        <a href="recipe_lunch.php" style="color: inherit;" class="lunch" id="btn2">
        <img src="images/Dinner.png" width="270px" heigth="250px" style=" margin-left:20px;">
         <div class="img-container">
                <div class="grid-header"  style="margin-left:7rem;">Dinner</div>
            </div>

        </a>
    </div>



    <div> 
        <div class="left1"> 
            <h3>All recipes</h3> 
        </div> 
        <div class="right1">
            <h6><a href="#" style="color:#818181">View all</a></h6>
        </div> 
    </div> 


  <?php
    $sql = "SELECT * FROM `default_recipes`";
    $res = mysqli_query($conn, $sql);
    ?>

    <div class="flex row">
        <?php $counter = 0;
        while ($d = mysqli_fetch_assoc($res)) {
            $drecipe_recipe = explode(',', $d['drecipe_recipe']);
            $steps = count($drecipe_recipe);
            $drecipe_nutritional = $d['drecipe_nutritional information'];

            $drecipe_nutritional = trim($drecipe_nutritional, '{}');
            $pairs = explode(', ', $drecipe_nutritional);
            $nutritional = array();
            foreach ($pairs as $pair) {
                list($key, $value) = explode(': ', $pair);
                $key = trim($key, "'");
                $value = trim($value, "'");
                $nutritional[$key] = $value;
            }
            if ($counter == 5) {
                break;
            }
            $counter++;
        }
        ?>

        
<div class="main-card">
    <div class="cards1" style="margin-left: 50px;">
        <div class="image">
            <img src="images/5_frame.png">
            <button>Breakfast</button>
        </div>
        <div class="title">
        <h5 style="margin-left: 10px;"><?php echo $d['drecipe_name'] ?></h5>
            <div class="dropdown">
                <img src="images/vec_more.png" height="15px" style="margin-right: 15px; margin-top: 8px; cursor:pointer" onclick="showDropdown(event)">
       
                <div id="myDropdownContent" class="dropdown-content dropdown-card ">
                    <a href="#"><button style="color: white;" class="edit-button">Edit</button></a>
  		            <a href="#"><button style="color: white;" class="delete-button">delete</button></a>
                </div>
            </div >
        </div>
       
        <div class="content">
            <div class="sub_content">
                <img src="images/6_steps.png" width="20px" height="20px" style="margin-left: 10px;">
                <span<h6>Steps</h6></span>
            </div>
            <div class="sub_content2">
                <img src="images/7_time.png" width="20px" height="20px">
                <span<h6>20:00</h6></span>
            </div>
        </div>
        <div class="content1">
            <div class="sub-content3">
                <img src="images/8_fire.png"  width="22px" height="25px"style="margin-left: 10px;">
                <span<h6>kcal</h6></span>
            </div>
            <button>Medium</button>
        </div>
    </div>
       
    <!-----------Second card--------->
    <div class="cards1" style="margin-left: 50px;">
        <div class="image">
            <img src="images/5_frame.png">
            <button>Breakfast</button>
        </div>
        <div class="title">
            <h5 style="margin-left: 10px;"><?php echo $d['drecipe_name'] ?></h5>
            <div class="dropdown">
                <img src="images/vec_more.png" height="15px" style="margin-right: 15px; margin-top: 8px; cursor:pointer" onclick="showDropdown(event)">
       
                <div id="myDropdownContent" class="dropdown-content dropdown-card ">
                    <a href="#"><button style="color: white;" class="edit-button">Edit</button></a>
  		            <a href="#"><button style="color: white;" class="delete-button">delete</button></a>
                </div>
            </div >
        </div>
       
        <div class="content">
            <div class="sub_content">
                <img src="images/6_steps.png" width="20px" height="20px" style="margin-left: 10px;">
                <span<h6>Steps</h6></span>
            </div>
            <div class="sub_content2">
                <img src="images/7_time.png" width="20px" height="20px">
                <span<h6>20:00</h6></span>
            </div>
        </div>
        <div class="content1">
            <div class="sub-content3">
                <img src="images/8_fire.png"  width="22px" height="25px"style="margin-left: 10px;">
                <span<h6>kcal</h6></span>
            </div>
            <button>Medium</button>
        </div>
    </div>
     <!-----------Third card--------->
     <div class="cards1" style="margin-left: 50px;">
        <div class="image">
            <img src="images/5_frame.png">
            <button>Breakfast</button>
        </div>
        <div class="title">
            <h5 style="margin-left: 10px;"><?php echo $d['drecipe_name'] ?></h5>
            <div class="dropdown">
                <img src="images/vec_more.png" height="15px" style="margin-right: 15px; margin-top: 8px; cursor:pointer" onclick="showDropdown(event)">
       
                <div id="myDropdownContent" class="dropdown-content dropdown-card ">
                    <a href="#"><button style="color: white;" class="edit-button">Edit</button></a>
  		            <a href="#"><button style="color: white;" class="delete-button">delete</button></a>
                </div>
            </div >
        </div>
       
        <div class="content">
            <div class="sub_content">
                <img src="images/6_steps.png" width="20px" height="20px" style="margin-left: 10px;">
                <span<h6>Steps</h6></span>
            </div>
            <div class="sub_content2">
                <img src="images/7_time.png" width="20px" height="20px">
                <span<h6>20:00</h6></span>
            </div>
        </div>
        <div class="content1">
            <div class="sub-content3">
                <img src="images/8_fire.png"  width="22px" height="25px"style="margin-left: 10px;">
                <span<h6>kcal</h6></span>
            </div>
            <button>Medium</button>
        </div>
    </div>
        <!-----------Fourth card--------->
        <div class="cards1" style="margin-left: 50px;">
        <div class="image">
            <img src="images/5_frame.png">
            <button>Breakfast</button>
        </div>
        <div class="title">
            <h5 style="margin-left: 10px;"><?php echo $d['drecipe_name'] ?></h5>
            <div class="dropdown">
                <img src="images/vec_more.png" height="15px" style="margin-right: 15px; margin-top: 8px; cursor:pointer" onclick="showDropdown(event)">
       
                <div id="myDropdownContent" class="dropdown-content dropdown-card ">
                    <a href="#"><button style="color: white;" class="edit-button">Edit</button></a>
  		            <a href="#"><button style="color: white;" class="delete-button">delete</button></a>
                </div>
            </div >
        </div>
       
        <div class="content">
            <div class="sub_content">
                <img src="images/6_steps.png" width="20px" height="20px" style="margin-left: 10px;">
                <span<h6>Steps</h6></span>
            </div>
            <div class="sub_content2">
                <img src="images/7_time.png" width="20px" height="20px">
                <span<h6>20:00</h6></span>
            </div>
        </div>
        <div class="content1">
            <div class="sub-content3">
                <img src="images/8_fire.png"  width="22px" height="25px"style="margin-left: 10px;">
                <span<h6>kcal</h6></span>
            </div>
            <button>Medium</button>
        </div>
    </div>
    <!-----------Fifth card--------->
    <div class="cards1" style="margin-left: 50px;">
        <div class="image">
            <img src="images/5_frame.png">
            <button>Breakfast</button>
        </div>
        <div class="title">
            <h5 style="margin-left: 10px;"><?php echo $d['drecipe_name'] ?></h5>
            <div class="dropdown">
                <img src="images/vec_more.png" height="15px" style="margin-right: 15px; margin-top: 8px; cursor:pointer" onclick="showDropdown(event)">
       
                <div id="myDropdownContent" class="dropdown-content dropdown-card ">
                    <a href="#"><button style="color: white;" class="edit-button">Edit</button></a>
  		            <a href="#"><button style="color: white;" class="delete-button">delete</button></a>
                </div>
            </div >
        </div>
       
        <div class="content">
            <div class="sub_content">
                <img src="images/6_steps.png" width="20px" height="20px" style="margin-left: 10px;">
                <span<h6>Steps</h6></span>
            </div>
            <div class="sub_content2">
                <img src="images/7_time.png" width="20px" height="20px">
                <span<h6>20:00</h6></span>
            </div>
        </div>
        <div class="content1">
            <div class="sub-content3">
                <img src="images/8_fire.png"  width="22px" height="25px"style="margin-left: 10px;">
                <span<h6>kcal</h6></span>
            </div>
            <button>Medium</button>
        </div>
    </div>
    <!-----------Sixth card--------->
    <div class="cards1" style="margin-left: 50px;">
        <div class="image">
            <img src="images/5_frame.png">
            <button>Breakfast</button>
        </div>
        <div class="title">
            <h5 style="margin-left: 10px;"><?php echo $d['drecipe_name']?></h5>
            <div class="dropdown">
                <img src="images/vec_more.png" height="15px" style="margin-right: 15px; margin-top: 8px; cursor:pointer" onclick="showDropdown(event)">
       
                <div id="myDropdownContent" class="dropdown-content dropdown-card ">
                    <a href="#"><button style="color: white;" class="edit-button">Edit</button></a>
  		            <a href="#"><button style="color: white;" class="delete-button">delete</button></a>
                </div>
            </div >
        </div>
       
        <div class="content">
            <div class="sub_content">
                <img src="images/6_steps.png" width="20px" height="20px" style="margin-left: 10px;">
                <span<h6>Steps</h6></span>
            </div>
            <div class="sub_content2">
                <img src="images/7_time.png" width="20px" height="20px">
                <span<h6>20:00</h6></span>
            </div>
        </div>
        <div class="content1">
            <div class="sub-content3">
                <img src="images/8_fire.png"  width="22px" height="25px"style="margin-left: 10px;">
                <span<h6>kcal</h6></span>
            </div>
            <button>Medium</button>
        </div>
    </div>
    
    
            
        
    <a href="#"><img src="images/9_plus.png" width="150px" style="margin-left: -40px;"></a>
</div> 
</div>    

<script>
  

       function showDropdown(event) {
           var dropdown = event.currentTarget.parentNode.querySelector(".dropdown-content");
           dropdown.classList.toggle("show");
           setTimeout(removeDropDown, 5000);
       }

       function removeDropDown() {
           var dropdowns = document.getElementsByClassName("dropdown-content");
           for (var i = 0; i < dropdowns.length; i++) {
               dropdowns[i].classList.remove('show');
           }
       }

       function removeDropdown(event) {
           var dropdowns = document.getElementsByClassName("dropdown-content");
           var i;
           for (i = 0; i < dropdowns.length; i++) {
               var openDropdown = dropdowns[i];
               if (openDropdown.classList.contains("show") && !openDropdown.contains(event.target)) {
                   openDropdown.classList.remove("show");
               }
           }
       }

       // document.addEventListener("click", removeDropdown);
   </script>

</body>
</html>