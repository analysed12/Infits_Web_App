  <?php
  // session_start();
  error_reporting(0);
  include("navbar.php");
  // if(isset($_GET['client_id'])){
  //   $clientId = $_GET['client_id'];
  // }else{
  //   header('Location: client_list.php');
  // }
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
      
    />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <title>MealTracker</title>
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
  
  .left {     
          position: relative;
        display:inline-block;
        margin-top: 20px;
        margin-left: 30px;
  }
  .left p{
    
  margin-top: -30px;
  font-family: 'NATS';
  font-style: normal;
  font-weight: 400;
  font-size: 28px;
  line-height: 70px;
  letter-spacing: -0.114286px;
  color: #CBCBCB;
  }
  .content img{    
  width: 320px;
  height: 220px;
  margin-left: 28%;
  margin-top: 35px;
  }
  .content p{
  font-family: 'NATS';
  font-style: normal;
  font-weight: 400;
  font-size: 36px;
  line-height: 90%;
  text-align: center;
  color: #000000;
   margin-right:110px;
  margin-top: -10px;

  }
  
  .recipe-add-btn{
  display: flex;
    margin-left:78rem;
    bottom:20px;
    margin-top:-3.5rem;
    width: 250px;
    height: 80px;
    background: #FFFFFF;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.25);
    border-radius: 50px;
    }

  /*-----------------------------Calendar css--------------------------------*/

  .sliding-cal {
    position: relative;
    width: 81.5rem;
    height: 115px;
    margin-left:230px;
    overflow: scroll;
    background: #FFFFFF;
    margin-top:-1rem;
    border: 1px solid rgba(225, 225, 225, 0.66);
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
    }

    #slider-content {
      position: absolute;
    display: flex;
      justify-content: space-around;
      height: 100%;
    display: flex;

  }
  .item {
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    width: 80px;
    background-color: white;
    padding:20px;
  }
  .day {
    font-family: 'NATS';
  font-style: normal;
  font-weight: 500;
  font-size: 20px;
  line-height: 50px;
  margin-top: 10px;
    
  }
  .date {
    font-family: 'NATS';
  font-style: normal;
  font-weight: 700;
  font-size: 19px;
  line-height: 40px;
  margin-top:-10px; 
  margin-bottom: 10px;
  }
.day:hover{
  border-radius: 100%; 
    color: white;
    width:55px;
    height:100px;
    text-align: center;
    background: linear-gradient(180deg, rgba(156, 116, 245, 0.61) 33.65%, #9C74F5 70.62%);
    cursor: pointer;
}
  .current-day { 
    border-radius: 100%; 
    color: white;
    width:55px;
    height:100px;
    text-align: center;
    background: linear-gradient(180deg, rgba(156, 116, 245, 0.61) 33.65%, #9C74F5 70.62%);
    cursor: pointer;
  } 
  .sliding-cal::-webkit-scrollbar {
    display: none;
  }
  .sliding-cal {
    -ms-overflow-style: none;
    scrollbar-width: none;
  }
  

  @media screen and (min-width: 720px) and (max-width:830px) {

    .content p{
      font-size: 24px;
    margin-right:-70px;
    }
  }
  @media screen and (min-width: 825px) and (max-width:1050px) {
.content p{
  font-size: 24px;
  margin-right:-20px;
}
}
@media screen and (min-width:830px) and (max-width:1500px) {
 .content p{
font-size: 24px;
margin-left:-30px;
}
}
 @media screen and (min-width: 720px) and (max-width:1500px) {
    .main-content{
      overflow: auto;
    }
   .sliding-cal {
  position: relative;
  width: auto;
  margin-left:-2px;
  }
  .content img{
    margin-top: 50px;
    width: 260px;
    height: 200px;
   
  }
  .recipe-add-btn{
   margin-top:  60px;
   margin-right: 30px;
   margin-bottom:20px; 
  float: right;
  }
  }

  @media screen and (min-width: 0px) and (max-width: 600px) {
.sliding-cal {
  width:auto;
  margin-left:1px;
  margin-right:-55px;
  margin-top: -20px;
}
  }
  @media screen and (min-width: 600px) and (max-width: 720px) {
   .main-content{
    overflow: auto;
   } 
  .sliding-cal {
      margin-right:-20px;
      margin-left:1px;
      width: auto;
  }
  } 
  
  @media screen and (min-width:550px) and (max-width: 720px) {
    .content img{ 
    width:260px;
    height:200px;
    margin-left:15  0px; 
    margin-right: auto;
    margin-top:4rem;
  }
  }
  @media screen and (min-width: 0px) and (max-width: 550px) {
    .content img{ 
    width:260px;
    height:200px;
    margin-left:50px; 
    margin-right: auto;
    margin-top:4rem;
  }
  }
  
  @media screen and (min-width: 0px) and (max-width: 720px) {
  
.left{
    margin-top:-140px;
    margin-left: 80px;
 }.content p{
      margin-left: 20px;
      margin-top: 0.5rem;
      font-size: 24px;
      width:100%;
  }
  .recipe-add-btn{
    margin-top:30px;
    margin-right: 20px;
    float: right;
   margin-bottom:20px;
  }
  } 


  </style>
  </head>
  <body>

  <div class="main-content" style="margin-top:1.5rem">
      <div> 
        <div class="left" style="font-weight:600"> 
          <h1 style="font-size:35px;margin-left:1rem">Diet Chart</h1> 
          <p style="margin-left:1rem">Ronald Richard</p>
        </div> 
      </div> 
      <div class="sliding-cal col-sm-12">
        <div id="slider-content"> </div>
      </div>
      <div class="content">
          <img src="./images/dietchart_default.svg">
          <p>You haven't created<br> any chart yet!<br><br>
          Create one now!</p>
      </div>
      <div class="recipe-add-btn" style="padding-right:40px; cursor:pointer;" >
            <h3 style="margin-left:20px; margin-top:25px; font-size:29px;color: #4B9AFB;">Create Recipe</h3>
            <img src="./images/receipe_create.png" alt="" style="width:40px; height:40px; margin-top:20px; margin-right:-20px; margin-left:18px;">
        </div>
  </div>

  <!-----------------------------Calender-------------------------------->
  <script>
    
const Date_function = () => {
  var now = new Date();
  var value;
  const str = obtain_Date(now, 0);
  const startdate = new Date(str);
  const currentDate = new Date();
  const daysInMonth = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0).getDate();
  var i = 0;
  while (i < daysInMonth) {
    value = obtain_Date(startdate, i);
    const isCurrentDate = value.toDateString() === currentDate.toDateString();
    days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
    const dayClass = isCurrentDate ? 'day current-day' : 'day';
    const dateClass = isCurrentDate ? 'date current-date' : 'date';
    html = `<div class="item">
      <div class="${dayClass}">${days[parseInt(value.getDay())]}</div><br>
        <div class="${dateClass}">${value.getDate()}</div>
      </div>`;
    document.getElementById('slider-content').innerHTML += html;
    i++;
  }
};

      // Obtain specific dates -->

      const obtain_Date = (date, x) => {
        var newdate = new Date();
        newdate.setDate(date.getDate() + x)
        return newdate;
      }
      Date_function();
        const slider = document.querySelector('#slider-content');
        let sliderGrabbed = false;
        slider.addEventListener('mousedown', (e) => {
          sliderGrabbed = true;
          slider.style.cursor = 'grabbing';
        })
        slider.addEventListener('mouseup', (e) => {
          sliderGrabbed = false;
          slider.style.cursor = 'grab';
        })
        slider.addEventListener('mouseleave', (e) => {
          sliderGrabbed = false;
        })
        slider.addEventListener('mousemove', (e) => {
          if (sliderGrabbed) {
            slider.parentElement.scrollLeft -= e.movementX;
          }
        })
        slider.addEventListener('wheel', (e) => {
          e.preventDefault()
          slider.parentElement.scrollLeft += e.deltaY;
        })
        function getScrollPercentage() {
          return ((slider.parentElement.scrollLeft / (slider.parentElement.scrollWidth - slider.parentElement.clientWidth)) * 100);
        }
    
    </script>
  </body>
  </html>
