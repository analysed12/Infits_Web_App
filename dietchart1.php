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
     
}
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
      margin-top:15px;
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

        margin-top: -5px;
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
        color: #9C74F5;
       font-family: 'Poppins';
       text-align: center;
       text-decoration: none;   
       font-size: 15px;
       
     }
     .top-right img{
        width: 25x;
        height: 25px;
        /* margin-right: 4px; */
        margin-left: 1rem;      
     }
    
     .down
    {
        position: absolute;
        margin-left: 20px;
        margin-top: 4.3rem;
        margin-left: 4rem;
        
        font-family: 'NATS';
        font-style: normal;
        font-weight: 400;
        font-size: 33px;
        color: #CBCBCB;
    } 
      .day-band{
      position: relative;
      display: flex;
      flex-direction: row;
      justify-content: space-evenly;
      margin-left: 1.5rem;
      font-size: 17px;
      font-weight: 500;
      left: -14px;
      
    }
    .day{
      color: black;
      /* padding: 10px; */
      border:none;
      background: none;
      margin-right:-100px;
      margin-left:-100px;
    height:39px;
    }
   
    .day.active {
      color:white;
      background: linear-gradient(180deg, #9C74F5 0%, rgba(104, 125, 238, 0.52) 100%);
      width:60px;
      height:60px;
      border-radius:13px;
      padding:5px 0px !important;
    }
    .day:hover{
      color:white;
      background: linear-gradient(180deg, #9C74F5 0%, rgba(104, 125, 238, 0.52) 100%);
      width:68px;
      
      height:39px;
      border-radius:13px;
      /* padding:5px 0px !important; */
    }
.button-container{
  display: inline-block;
  margin-top:-5px;
  margin-left: 48px;
 
}
.btn1{
  margin-left: 70px;
  padding:10px;
  width: 203.19px;
  height: 48px;  
  font-family: 'Poppins';
  font-size: normal;
  font-weight: 400;
  font-size: 20px;
  text-align: center;
  border: 1px solid #9C74F5;
  border-radius: 10px;
  background-color:#fff;
  color:#9C74F5;
}
.btn1:focus{
  background-color: #9C74F5;
  color:#fff;
}
.btn:active{
  background-color: #9C74F5;
  color:#fff;
}
.btn1:hover,.active{
  background-color: #9C74F5;
  color:#fff;
}

.box{
    border: 1px solid white;
    width: 1035px;
    height: 170px;
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
.tabs{
  margin-top:-20px;
  padding-left:20px;
}
.btn11{
  box-sizing: border-box;
  position: relative;
  width:190px;
  height: 64px;
  margin-top:4rem;
  margin-right: 50px;
  cursor: pointer;
  font-size: 40px;
  font-weight: 250;
  color:#DF6293;
  margin-left: 10px;
  border-radius: 10px;
  box-shadow: 0px 0.880519px 4.40259px rgba(0, 0, 0, 0.25);
  background: #FFFFFF;
  border:1px solid #9C74F5;
}

.box h3 {
  text-align: left;
  font-size: 24px;
  margin-bottom: 10px;
  width: 148px;
  height: 40px;
  margin-left: 28px;
  margin-top: 1px;

  font-family: 'Poppins';
  font-style: normal;
  font-weight: 500;
  font-size: 26.4156px;
  line-height: 40px;
}
.demo .up-right{
  margin-left: 910px;
  margin-top: 30px;
  margin-bottom:50px;
  width: 245px;
  height: 62px;
  background: #9C74F5;
  border-radius: 10px ;
  border: 1px solid #9C74F5;
  font-family: 'NATS';
  font-style: normal;
  font-weight: 200;
  font-size: 30px;
  line-height: 63px;
 
  color: #F8F8F8;
}
@media screen and (min-width: 750px) and (max-width:1500px) {
  .top p{
       width:195px;
        margin-top: 0%;
        font-size: 34px;
    }
     .top img {
          height:20px;
          width: 20px;
          margin-top: 15px;
          margin-left: 20px;
     } 
     .top-right{
          display: flex;
         justify-content: space-between;
         align-items: center;
          margin-right: -2rem;
         width: 50%; 
      }
      .top-right .btn{
        position: relative;
        border-radius: 10px;
        height: 50px;
        width: 200px;
        margin-left: 16rem;
    }
    .top-right img{
        width: 25x;
        height: 25px;
        margin-right:5rem;      
     }
    .down{
      margin-top: 35px;
      margin-left: 39px;
    }
    .button-container{
      display: flex;
      flex-direction: row;
      overflow-x: auto;
      margin-left: 20px;
      margin-right: 23px;
    }
    .btn1{
      margin-left: 15px;
      padding:10px;
      width: 216px;
      height: 48px;  
      font-size: 17px;      
    }    
.box{
    width: auto;
    height: auto;
    margin-left: 35px;
    margin-right: 80px;
    top: 200px;
   }

.tabs{
  margin-top:-20px;
  padding-left:20px;
}
.btn11{
  width:150px;
  height: 64px;
  margin-top:4rem;
  margin-right:15px;
}
.demo .up-right{
  margin-left:35px;
}
}
  
@media screen and (min-width: 750px) and (max-width: 890px) {
  .top-right{
          display: flex;
         justify-content: space-between;
         align-items: center;
         width: 50%; 
      }
      .top-right .btn{
        border-radius: 10px;
        height: 50px;
        width: 200px;
        margin-left: 5rem;
    }
    .top-right img{
        width: 25x;
        height: 25px;
        margin-left: 1rem;      
     }
}
 
@media screen and (min-width: 721px) and (max-width: 750px) {
  
  .top{
    margin-top:-60px;
   }
  .top p{
       width:195px;
        margin-top:40px;
        font-size: 34px;
        margin-left: -15px;
    }
    .top img {
          height:20px;
          width: 20px;
          margin-top:55px;
          margin-left: 20px;
     } 
     
  .top-right{
          display: flex;
         justify-content: space-between;
         align-items: center;
         margin-top:8px;
         width: 50%; 
      }
      .top-right .btn{
        position: relative;
        border-radius: 10px;
        height: 50px;
        margin-top:-2px;
        margin-left: 3rem;
      
    }
    .top-right img{
        width: 25x;
        height: 25px;
        margin-right:20px;
      }
      .down{
      margin-top:13px;
      margin-left: 25px;
    }
    .button-container{
      display: flex;
      flex-direction: row;
      overflow-x: auto;
      margin-left: 20px;
      margin-right: 23px;
    }
    .btn1{
      margin-left: 5px;
      padding:10px;
      width: 216px;
      height: 48px;  
      font-size: 17px;      
    }    
    .box{
    width: 385px;
    height: 270px;
    margin-left: 20px;
    margin-right: 80px;
    top: 200px;
   }

   .btn11{
  width:140px;
  height: 64px;
  margin-top:4rem;
  margin-right:10px;
}
    }


@media screen and (min-width: 420px) and (max-width: 720px) {
  .content{
       overflow: hidden;
       display: flex;
       flex-direction: column;
       height: 90%;
       width: 100%;
       left: 30px;
       font-family: 'Poppins';
       font-style: normal;
       padding: 5px;
       /* margin-top: rem; */
       position: relative;
      margin-top:-20px;
     } 
  .top{
    margin-top:-60px;
   }
  .top p{
       width:195px;
        margin-top:40px;
        font-size: 34px;
        margin-left: 1px;
    }
     .top img {
          height:20px;
          width: 20px;
          margin-top:55px;
          margin-left: 20px;
     } 
  .top-right{
          display: flex;
         justify-content: space-between;
         align-items: center;
         margin-top:8px;
         width: 50%; 
      }
      .top-right .btn{
        position: relative;
        border-radius: 10px;
        height: 50px;
        margin-top:-2px;
        margin-left: 7rem;
      
    }
    .top-right img{
        width: 25x;
        height: 25px;
        margin-right:20px;
      }
      .down{
      margin-top:13px;
      margin-left: 42px;
    }
    
    .day-band{  
      margin-left:-3rem;
      }
      
    .button-container{
      display: flex;
      flex-direction: row;
      overflow-x: auto;
      margin-left: 5px;
    
    }
    .btn1{
      margin-left: 5px;
      padding:10px;
      width: 150px;
      height: 48px;  
      margin-left: 10px;
      font-size: 17px;      
    }    
    .box{
    width: 650px;
    height: 170px;
    margin-left: 20px;
    margin-right: 80px;
    top: 200px;
   }
   .btn11{
  width:110px;
  height: 64px;
  margin-top:4rem;
  margin-right:14px;
}

}

@media screen and (min-width: 0px) and (max-width: 420px) {
  .day{
    margin-right:0px;
      margin-left:0px;
    padding:10px;
  }
  
  .content{
       overflow: hidden;
       display: flex;
       flex-direction: column;
       height: 90%;
       width: 100%;
       left: 30px;
       font-family: 'Poppins';
       font-style: normal;
       padding: 5px;
       /* margin-top: rem; */
       position: relative;
      margin-top:-20px;
     } 
  .top{
    margin-top:-60px;
   }
  .top p{
       width:195px;
        margin-top:-60px;
        font-size: 34px;
        margin-left: auto;
    }
     .top img {
          height:20px;
          width: 20px;
          margin-top: -43px;
          margin-left: 20px;
     } 
     .top-right{
          display: flex;
         justify-content: space-between;
         align-items: center;
         margin-top:100px;
         width: 50%; 
      }
      .top-right .btn{
        position: relative;
        border-radius: 10px;
        height: 50px;
        margin-top:-2px;
        margin-left:-26rem;
      
    }
    .top-right img{
        width: 25x;
        height: 25px;
        margin-right:20px;
      }
    .down{
      margin-top: 13px;
      left:42px;
      margin-left: auto;
    }
    .day-band{  
      display: flex;
      flex-direction: row;
      overflow-x: auto;
      margin-top: -10px;
      margin-left:auto;
      width:auto;
      }
    .button-container{
      display: flex;
      flex-direction: row;
      overflow-x: auto;
      margin-left: -5px;
      margin-right: 23px;
    }
    .btn1{
      margin-left: 5px;
      padding:10px;
      width: 216px;
      height: 48px;  
      font-size: 17px;      
    }    
.box{
    width: 350px;
    height: 270px;
    margin-left: -5px;
    margin-right: 80px;
    top: 200px;
   }

.tabs{
  margin-top:-20px;
  padding-left:20px;
}
.btn11{
  width:120px;
  height: 64px;
  margin-top:4rem;
  margin-right:10px;
}
.demo .up-right{
  margin-left:20px;
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
        <button class="btn" text="submit">Connect to plan </button>
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




<script>
  const dayButtons = document.querySelectorAll('.day');
  const mealButtons = document.querySelectorAll('.btn1');

  dayButtons.forEach((button) => {
    button.addEventListener('click', () => {
      // Remove active class from all day buttons
      dayButtons.forEach((button) => {
        button.classList.remove('active');
      });
      // Add active class to clicked day button
      button.classList.add('active');
    });
  });

  mealButtons.forEach((button) => {
    button.addEventListener('click', () => {
      // Remove active class from all meal buttons
      mealButtons.forEach((button) => {
        button.classList.remove('active');
      });
      // Add active class to clicked meal button
      button.classList.add('active');
    });
  });
</script>

<br/>
<br/>

    <div class="box" id="box">
        
        <div class="left">
        <h3> In Morning </h3> </div>
        <div class="tabs">
            <button class="btn11">+</button>
            <button class="btn11">+</button>
            <button class="btn11">+</button>
            <button class="btn11" style="margin-right:20px ;">+</button>
        </div>
           
        </div>
        
    
    <br/>
        <div class="box" id="box">
        
        <div class="left">
        <h3> After break </h3> </div>
        <div class="tabs">
            <button class="btn11">+</button>
            <button class="btn11">+</button>
            <button class="btn11">+</button>
            <button class="btn11" style="margin-right:20px ;">+</button>
        </div>

     </div>
           
     <br/>


    <div class="demo">
        <button class="up-right"> Save Plan </button>
    </div>

<!-- </div>
     -->







</div>
</body>
</html>