<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infits</title>
    <link rel="stylesheet" href="recipies-1.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link href="http://fonts.cdnfonts.com/css/nats" rel="stylesheet">
        <style>
            @import url('http://fonts.cdnfonts.com/css/nats');
            .topnav{display:none !important}
            #content {
        display: flex;
        flex-direction: column;
        height: 90%;
        width: 90! important;
        font-family: 'Poppins'!important;
        font-style: normal;
        padding: 20px;
        margin-right: 5px;
    font-size:20px}

        body{
            font-family: 'Poppins'!important;
  }
  .center-flex{
  display: flex;
  align-items: center;
  justify-content: center;
  }
  @viewport {
    width: device-width ;
    
  }/*
  @media screen and (max-width:320px) {
    /* CSS for screens that are 320 pixels or less will be put in this section 
  }
  @media (min-width: 576px){
  }
  @media (min-width: 768px){
  }
  @media (min-width: 992px){
  }
  @media (min-width: 1300px){
  }
  @media (min-width: 1540px){
    
  }*/
  @media screen and (min-width: 720px) {
    /* Styles go here */
    .mobile-menu {
        display: none;
    }
  }
  @font-face {
    font-family:NATS ;
    src: url(NATA.ttf);
    font-family: popins;
    src: url(Poppins-Medium.ttf);
    font-family:mulish ;
    src: url(Mulish-VariableFont_wght.ttf);
  }
  
  @media (min-width: 320px) and (max-width: 720px) {
  .sidenav{
    display: none;
  }
  .vertical{
    display: none;
  }
  .main{
    margin-left: 0px !important;
  }/*
  .header{  
    width: max-content;
  }*/
  .box{
    width: 30px;
    margin-left: 10px !important;
  }
  .join-button{
    margin-top: 15px !important;
    font-size: 15px !important;
  }
  .text{
    font-size: 18px !important;
  }
  .container {
    padding: 0 !important;
    flex-wrap: wrap;
  }
  #menu li{
    margin-top: 0px;
  }
  .time{
    font-size: 10px !important;
  }
  #noti{
    font-family: 'Lobster', cursive;
    font-family: 'Poppins', sans-serif;
          font-style: normal;
          font-weight: 600;
          font-size: 32px;
         color: black;
  }
  #navi{
    font-family: 'Poppins';
  font-style: normal;
  font-weight: 500;
  font-size: 10px;
  line-height: 88%;
  zoom: 0.9;
  
  /* identical to box height, or 16px */
  
  color: #131635;
  }
  
  /*HAMBURGER MENU*/
  .sidenavv {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
  }
  
  .sidenavv a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 20px;
    color: #818181;
    display: block;
    transition: 0.3s;
  }
  
  .sidenavv a:hover {
    color: #f1f1f1;
  }
  
  .sidenavv .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
  }
  }
  
  
  /*SIDENAV*/
  .sidenav {
      height: 100%;
      width: 240px;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      overflow-x: hidden;
      padding-top: 10px;
    }
    
    .sidenav a {
      padding: 6px 8px 6px 10px;
      text-decoration: none;
      font-size: 18px;
    }
  
    ul{
      display: flex;
      flex-direction: column;
      list-style-type: none;
      margin: 5px;
      padding: 10px;
      line-height: 88%;
   }
  li{
      margin: 5px;
      margin-top: 10px;
      margin-bottom: 10px;
      
     
  }
  a{
    color: #131635;
    font-size: 18px;
      font-weight: 500;
  }
  a:hover, .active{
      align-items: center;
      border:1px solid #E5F1FF;  
      background-color: #E5F1FF;
      color: #0177FB;
      border-radius: 5px;
     }
  div.bottom {
     
      bottom: 50px;
    }
  
  /*SECTION SEPERATION*/
  .main {
      margin-left: 240px; /* Same as the width of the sidenav */
      font-size: 28px; /* Increased text to enable scrolling */
      padding: 0px 10px;
  }
  
    /*VERTICAL LINE*/
    .vertical {
      border-left: 2px solid #E8ECF5;
      position: absolute;
      min-height: 200%;
      left: 240px;
    }
  
  /*HEADER*/
  .header {
    display: flex;
    flex-direction: row;
    justify-content: space-between !important;
    margin-top: 3px;
    color: #8D8D8D;
    font-size: 25px;
  }
  .name{
    display: flex;
    flex-direction: column;
  }
  .left, .right {
    display: flex;
    align-items: center;
    gap: 16px;
  }
  .timeText{
    color:
    #6C6C6C;
    text-align: left;
    font-family: 'Poppins';
  }
  
    
 #navi{
    font-family: 'Poppins';
font-style: normal;
font-weight: 500;
font-size: 20px;
line-height: 88%;
margin-bottom: 40px;

/* identical to box height, or 16px */

color: #131635;
 }
 
 #c-text{
    font-family: mulish;
   
font-style: normal;
font-weight: 600;
font-size: 20px;
line-height: 23px;
/* identical to box height */


color: #000000;
 }
 #photo{
    align-content: center;
 }
 body { height: 100%;
 }
 .parent {

 background: white;
 
 margin-left: 30%;
 margin-right: 20%;

 }
 p {
    line-height:0.0001em;
  }
#listt{
  
        border-radius: 25px;
        background-color:  #F3F5F8;
        margin-right: 20%;
        padding:0px;
        font-family:'NATS';
        
        
       
        font-style: normal;
        font-weight: 400;
        font-size: 30px;
        line-height: 46px;
        display: flex;
        align-items: center;
        
        color: #000000;
}
#listofmenu{
    background: #FFFFFF;
box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.07);
border-radius: 5px;
height: 0.5%;


}

.flex-container {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;

}

#button{
    background: linear-gradient(264.44deg, rgba(207, 87, 230, 0.66) 0%, rgba(110, 100, 254, 0.66) 91.11%);
border-radius: 10px;
margin-left:30%;
margin-right: 30%;
background-color:#E7E7E7 ;
}
#buttom{
    background: #E7E7E7;
border: 1px solid #E7E7E7;
border-radius: 44px;
margin-left:30%;
margin-right: 30%;  

}
#add{
  margin-left: 3px;
}
</style>


</head>

<body ><small>

    <!------------------------------------------------SIDENAV---------------------------------------------------------->
    <?php include 'event_calendar.php'; ?>



    <!------------------------------------------------MAIN DIV---------------------------------------------------------->
    <div class="main">
        
        <!----------------------------------------------HEADER----------------------------------------->

        <div class="header">
            <div class="left">
                <div class="name">
                    <p style="font-size: 30px; color: black;margin-top: 40px;margin-left: 15px;margin-bottom: 10%;">New Recipies 
                        <script src="index.js">
                            <i>document.write('nameValue')
                            </i> </script></p>
                    
                </div>
            </div>
            <div class="right">
                <a href="#search"><img src="images\Shape.svg"></a>
                <a href="#about"><img src="images\Vectornoti.svg"></a>
                <a href="#about"><img src="images\derick-mckinney-243Q39DzM3M-unsplash.svg" style="border-radius:50% ;"></a>

            </div>
        </div>

       

        <hr style="height: 1px;background-color:black; border: none; width: 100%;">
        <!-- main content -->
        <div id="content">
        
        <label style="margin-left:38%;margin-right: 45%; "><img src="images\Group 10362camera.svg"></label>
       <div style="margin-top: 10px;"><div class="d-flex bd-highlight" id="buttom">
  <div class="p-2 flex-fill bd-highlight"><div style="background-color:white ;border-radius: 44px;text-align: center; ">Recipies details</div></div>
  <div class="p-2 flex-fill bd-highlight">Ingredients</div>
  <div class="p-2 flex-fill bd-highlight">Direction</div>
</div></div> 
        <ul class="list-group" id="listofmenu" style="margin-left:30%;margin-right: 30%;  ">
            <li class="list-group-item" >Banana Pancake</li>
            <li class="list-group-item"><div class="d-flex bd-highlight">
                <div class="p-2 w-100 bd-highlight" style="color:grey ; height:o.2px ;width: 0.2x;box-sizing: border-box;height: 20px;width: 20px;">Course</div>
                <div class="p-2 flex-shrink-1 bd-highlight" > <label><img  src="images\Vectorarrow.png"></label></div>
              </div></li>
              <li class="list-group-item"><div class="d-flex bd-highlight">
                <div class="p-2 w-100 bd-highlight" style="color:grey ;">Catrgory</div>
                <div class="p-2 flex-shrink-1 bd-highlight"><img src="images\Vectorarrow.png"></div>
              </div></li>
            <li class="list-group-item" style="color:grey ;">Preparation time</li>
            <li class="list-group-item" style="color:grey ;">Cooking time</li>
            <li class="list-group-item" style="color:grey ;">Serving</li>
        </ul>
             <h7 style="margin-left:30%;margin-right: 30%; ">Nutritions</h7>
             <ul class="list-group" id="listofmenu" style="margin-left:30%;margin-right: 30%; ">
            
             <li class="list-group-item" style="color:grey ;">Calories</li>
             <li class="list-group-item" style="color:grey ;">Protien</li>
             <li class="list-group-item" style="color:grey ;">Fats</li>
             <li class="list-group-item" style="color:grey ;">Carbs</li>
           

          </ul>
          <div class="d-grid gap-2">
            <button class="btn btn-primary" type="button" id="button">Next</button>
            
          </div>
        </div>
    </div>
</body>
</small>
</html>
