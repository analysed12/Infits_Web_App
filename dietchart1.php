<?php include('navbar.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="UTF-8" />
    <title>Infit</title>
    <!-- <link rel="stylesheet"  /> -->
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
</head>
<style>
     .content{
       overflow: hidden;
       display: flex;
       flex-direction: column;
       height: 90%;
       font-family: 'Poppins';
       font-style: normal;
       padding: 5px;
       /* margin-top: rem; */
       position: relative;


     }
     .main{
        display: flex;
        justify-content: space-between;
        align-items: center;
        /* flex-wrap: wrap; */
        margin-right: 3rem;
        /* padding-left: 5rem;
        padding-right: 5rem; */
        /* width: 100%;
        height: 30%; */
     }
     .top{
        position: relative;
        display:flex;
        justify-content: space-around;
        margin-left: 4rem; 
        /* float: left;
        width: 50%; }
        */
     }
     
      .top p{
        position: relative;
        margin-top: 0%;
        font-family: 'NATS';
        font-style: normal;
        font-weight: 400;
        font-size: 44px;
        color: #202224;
       

     }
     .top img {
          height:20px;
          width: 20px;
          top: 15px;
          margin-top: 20px;
          margin-left: 30px;
         
         
     }
     .top-right{
          display: flex;
         justify-content: space-between;
         align-items: center;
         /* margin-right: 20px;  */
          float: right;
         width: 50%; }
       
     
      .top-right .btn{
        position: relative;
        box-sizing: border-box;
        border: 1px solid #9C74F5;
        background-color: #fff; 
        border-radius: 10px;
        height: 50px;
        width: 200px;
        margin-left: 38rem;
        /* margin-right: 20px;  */
       
       
     }
     .top-right span{
      text-align: center;
       color: #9C74F5;
       font-family: 'Poppins';
       
       text-align: center;
       text-decoration: none;
   
       font-size: 15px;
       

     }
     .top-right img{
        width: 30px;
        height: 20px;
        /* margin-right: 4px; */
        margin-left: 1rem;
        
     }
    
     .down
    {
        position: absolute;
        margin-left: 20px;
        margin-top: 6rem;
        margin-left: 4.5rem;
        
        font-family: 'NATS';
        font-style: normal;
        font-weight: 400;
        font-size: 33px;
        color: #CBCBCB;
    } 
    /* new styling for upperside */
    /* .main{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .top{
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 1rem;
    }
    .top img{
        width: 20px;
    }
    .top h4{
        position: relative;
        margin-top: 0%;
        font-family: 'NATS';
        font-style: normal;
        font-weight: 400;
        font-size: 44px;
        color: #202224;
       

     } */


    .day-band{
      position: relative;
      display: flex;
      flex-direction: row;
      justify-content: space-evenly;
      
      margin-left: 1.5rem;
      /* margin-right: ; *
      /* margin-top: 5rem; */
      /* margin-top: 9rem;
      gap:1rem; */
      
      
    }
    .day{
      color: black;
      padding: 10px;
      border:none;
      background: none;
    
    }
    .day:hover, .active{
      color:white;
      background:#9C74F5;
      border-radius:10px;
    }
    .button-container{
        position: relative;
        box-sizing: border-box;
        display: flex;
        
        width:95%;
        height:10%;
        color: #9C74F5 ;
        padding: 0 20px;
        align-items: center;
        font-size: 10px;
        font-family: 'NATS';
        font-style: normal;
        margin-left: 7rem;
        margin-right: 10px;
        /* margin-top: rem;
         */
       
    }
    
 .btn1{
    height:40px;
    width: 190px;
    background-color: #fff; 
    border: none;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: #9C74F5;
    font-family: 'Poppins';
    padding: 0 30px;
    margin: 37px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    border-radius: 10px;
    border: 0.880519px solid #9C74F5;
  
}
.box{
    border: 1px solid white;
    width: 1000px;
    height: 180px;
    margin-left: 120px;
    margin-right: 80px;
    top: 200px;
    padding: 10px;
    display: flex;
    flex-direction : column;
    align-items: left;
    background: #FFFFFF;
    box-shadow: 0px 7.04415px 21.1324px rgba(176, 190, 197, 0.32), 0px 2.64156px 4.40259px rgba(176, 190, 197, 0.32);
    border-radius: 8.80519px;
}
.box img {
    width: 190px;
    height: 61px;
    left: 28px;
    top: 277px;
    margin-left: 10px;
     
    background: url(Screenshot__136_-removebg-preview.png);
    border-radius: 10px;
}

.box h3 {
  text-align: left;
  font-size: 24px;
  margin-bottom: 10px;
  width: 148px;
  height: 40px;
  left: 100px;
  /* top: 40rem; */
  margin-left: 10px;
  margin-top: 1px;

  font-family: 'Poppins';
  font-style: normal;
  font-weight: 500;
  font-size: 26.4156px;
  line-height: 40px;
}
.box h2{
    margin-left: 40px;
    font-size: 15px;
    margin-bottom: 20px;
    left: 23.77px;
    font-weight: bolder;
   
}
.cont{
    display: flex;
    justify-content:space-between;
}
.left{
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 500;
    font-size: 26.4156px;
    line-height: 40px;
    display: flex;
    align-items: center;
    color: #000000;
}
.right{
    text-align: right;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 30px;
    display: flex;
   align-items: center;
   color: #A6A1A1;

}
.right img{
    width: 20.73px;
    height: 24px;
    left: 804px;
    top: 220px;
    background: url(7306600-removebg-preview.png);
    border-radius: 10px;
}
.demo{
    display: flex;
    justify-content:space-between;

}

.up{
    background: #FFFFFF;
    box-shadow: 0px 7.04415px 21.1324px rgba(176, 190, 197, 0.32), 0px 2.64156px 4.40259px rgba(176, 190, 197, 0.32);
    border-radius: 8.80519px;
    width: 176px;
    height: 61px;
    top: 714px;
    margin-left: 3rem;

    
    display: flex;
    align-items: center;
    border: 0.880519px solid #fff;
    
}
.up span {
    display: flex;
    align-items: center;
    color: #000000;
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 25px;
    /* line-height: 53px; */
    /* margin-left: 40px; */
    padding-left: 5rem;
    padding-right: 5rem;
}
.up-right{
    background: #9C74F5;
    border-radius: 10px;
    margin-left:50rem;
    margin-right: 10rem;
    width: 250px;
    height: 62px;
    /* margin-right: 9%; */
    
    
    display: flex;
    align-items: center;
    border: 0.880519px solid #fff;
    
  
    
}
.up-right span{
    
       font-family: 'NATS';
       font-style: normal;
       font-weight: 400;
       font-size: 30px;
       
       display: flex;
       align-items: center;
       color: #F8F8F8;
       /* margin-left: 45px;/ */
       padding-left: 5rem;
       padding-right: 5rem;
}


.tooltip-text {
    visibility: hidden;
    position: absolute;
    z-index: 9999; 
    width: 45rem;
    /* height: 20rem; */
    color: black !important;
    font-size: 20px !important;
    font-weight: 300px !important;
    border: 1px solid  #e4e1e1;
    background-color: white;
    box-shadow: 0 4px 4px rgba(0,0,0,0.45);
    border-radius: 10px;
    padding: 2rem;
  }
  
  .hover-text:hover .tooltip-text {
    visibility: visible;
  }
  #tooltipright {
    top: -3rem;
    right: 123%;
  }
  
  .hover-text {
    position: relative;
    display: inline-block;
    /* margin: 40px; */
    /* margin-left: 40px; */
    font-family: Avenir;
    text-align: center;
   
}
.tabs {
    display: flex;
    justify-content: space-between;
    align-items: center;
    
    
}
.btn11{
    box-sizing: border-box;

position: relative;
width: 191.95px;
height: 63.4px;
/* left: 28.18px; */
margin-top: 4rem;
/* top: calc(50% - 63.4px/2 + 9.68px); */
cursor: pointer;

background: #FFFFFF;
border: 0.880519px solid #9C74F5;
box-shadow: 0px 0.880519px 4.40259px rgba(0, 0, 0, 0.25);
border-radius: 10px;
}

.btn11 img{
    /* weight: 30px;
    height: 30px; */
    width: 40px;
    height: 30px;
}
    /* position: relative;
height: 0px;
left: 62.27%;
right: 34.8%;
top: calc(50% - 0px/2 - 4.4px); */
/* width: 150px;
height:80px;
weight: 700px; */


 
 /* @media screen and (min-width: 300px) and (max-width: 600px) {
    .top{
        flex-direction: column ;
        justify-content:space-between;   
        margin: auto; 
        width: auto;
        gap: 4rem;
       

    }  
    .top img{
        display: block;
        justify-content:auto;
    }

      .top h3{
        display: flex;
        flex-direction: column;
        justify-content: auto;
    }

 } */
 @media screen and (min-width: 300px) and (max-width: 800px) {
    .tooltip-text {
      width: auto;
      margin:auto;
      font-size: 14px !important;
      
      /* padding: 2rem; */
    }

 }

 @media screen and (min-width: 300px) and (max-width: 800px) {
    .content{
        overflow: hidden;
    }
 }
 @media screen and (min-width: 300px) and (max-width: 800px) {
    .box{
        /* flex-wrap: wrap; */
        margin: auto;
        width: 100%;


    }
 }
 @media screen and (min-width: 300px)  and (max-width: 800px) {
    .button-container{
        
        flex-direction: row;
        /* grid-template-columns: auto auto auto auto; */
        /* margin: auto; */
        /* top: 15rem; */
        margin-left: 2rem;
        overflow: scroll;
       
        
    }
 }
 /* @media screen and (min-width: 480px) and (max-width: 600px) {
    .button-container{
        flex-wrap: wrap;
        flex-direction: column;
        
        margin: auto;
        top: 13rem;
        margin-left: 3rem;
        overflow: scroll;
       
    }
 } */

 @media screen and (min-width: 300px) and (max-width: 800px)  {
      .main{
        
        display: flex;
        
       justify-content: space-around;
       align-items: center;
       
        
      }
     
}
@media screen and (min-width: 300px) and (max-width: 800px) {
  .top{
    margin-left: 2rem;

  }
  .top p{
    font-size: 20px;
    
    margin-top:1rem;

  }
  .top img{
    margin-left: 1rem;
    width: 15px;
    height: 15px;
    margin-top: 1.5rem;
  }
}

      
 
 @media screen and (min-width: 300px) and (max-width: 800px) {
    .top-right .btn {
       
        margin: auto;
        width: 100%;
        top: 1rem;


    }
    .top-right img{
        /* width:30px;
        height: 20px; */
        margin-left: 1rem;
    }
 }

 /* @media screen and (min-width: 300px) and (max-width: 600px) {
 .top {
    
     display: flex;
     flex-direction: row;
     justify-content: center;
     margin-right: auto;
     
 }
 .top h3{
    font-size: 25px;
 }
} */
@media screen and (min-width: 300px) and (max-width: 720px) {
  .down{
    /* display: flex;
    flex-wrap: wrap;
    top: 7%;
    width:100%; 
    margin: auto;
    font-size:20px; */
    margin-left: 2rem;
    font-size:20px;
    
   

  }


}
@media screen and (min-width: 300px) and (max-width: 720px){
  .tooltip-text {
    padding: 0px opx;
    height: 10rem;
    width:20rem;

  }
}
@media screen and (min-width: 300px) and (max-width: 720px){
  .day-band {
    margin-left: 4rem;
    top:3rem;
    
}
}

@media screen and (min-width: 300px) and (max-width: 720px) {
      .demo{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin:auto;
        margin-right: auto;
      }

      
}
@media screen and (min-width: 300px) and (max-width: 800px) {
    .up-right{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        margin: 1rem;
        /* margin-top: 5%;
        margin-right: auto; */
    }
    .up{
      margin: 1rem;

}

}
@media screen and (min-width: 300px) and (max-width: 800px){
   .save{
     padding-right: 4rem;
   }

}
@media screen and (min-width: 300px) and (max-width: 800px){
    .tabs{
        justify-content: space-between;
        overflow: scroll;
    }
}

/* @media screen and (max-width: 720px) {
    .main{
        justify-items: center;
        gap: 2rem;
    }
} */
@media screen and (min-width: 300px) and (max-width: 800px){
    .btn11{
       
    /* width:30px; */
    height: 40px;
/* left: 28.18px; */

    }
    .btn11 img{
        margin-left: auto;

    }
}




   
    </style>
   <body>
    <div class="content">
    <div class="main">
    <div class="top">
        <p> New Diet Chart</p>
        <img src="images/Vector (1) (1).png">
     </div>
     <div class="top-right">
        <button class="btn" text="submit"> <span>Connect to plan</span> </button>
           <img id="myimg" src="images/Vector (2) (1).png">
           
    </div>
     </div>
     <br/>
   <div class="down">Ronald Richard</div>
   
   <br/>
<div class="day-band">
  <button class="day" id="daybtn">Mon</button>
  <button class="day" id="daybtn">Tue</button>
  <button class="day" id="daybtn">Wed</button>
  <button class="day" id="daybtn">Thu</button>
  <button class="day" id="daybtn">Fri</button>
  <button class="day" id="daybtn">Sat</button>
  <button class="day" id="daybtn">Sun</button>
</div>
<br/>
<br/>

<div class="button-container">
  <button class="btn1">Breakfast</button>
  <button class="btn1">Lunch</button>
  <button class="btn1">Snacks</button>
  <button class="btn1">Dinner</button>
</div>
<br/>
<br/>

    <div class="box" id="box">
        
        <div class="left">
        <h3> In Morning </h3> </div>
        <div class="tabs">
            <button class="btn11"><img src="images/plus.png"></button>
            <button class="btn11"><img src="images/plus.png"></button>
            <button class="btn11"><img src="images/plus.png"></button>
            <button class="btn11"><img src="images/plus.png"></button>
        </div>
           
        </div>
        
    
    <br/>
        <div class="box" id="box">
        
        <div class="left">
        <h3> After Break </h3> </div>
        <div class="tabs">
            <button class="btn11"><img src="images/plus.png"></button>
            <button class="btn11"><img src="images/plus.png"></button>
            <button class="btn11"><img src="images/plus.png"></button>
            <button class="btn11"><img src="images/plus.png"></button>
        </div>

     </div>
           
    

    <br/>


    <div class="demo">
        <button class="up"> <span>+ Add </span></button>
        <button class="up-right"> <span class="save"> Save Plan </span></button>
    </div>

<!-- </div>
     -->







</div>
</body>
</html>