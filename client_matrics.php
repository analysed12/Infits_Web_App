<?php

include("navbar.php");

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
    font-family: 'NATS' !important;
    /* overflow-y:hidden; */
    overflow-x:hidden;
}
.left {     
        position: relative;
      display:inline-block;
     
    }

   
 img,svg{
  vertical-align:inherit !important;
 }
.date2{
  text-align: center;
  color: #C1C1C1;
  line-height: 237.5%;
  font-family: 'NATS';
  font-style: normal;
  font-weight: 400;
  font-size: 16.6px;
  margin-left:158px;
  margin-top:-77px;
}
.time{
  text-align: center;
  color: #C1C1C1;
  line-height: 237.5%;
  font-style: normal;
  font-weight: 200;
  font-size: 16px;
  margin-left:170px;
  margin-top:-19px;
}

/*-----------------------------Calendar css--------------------------------*/

.sliding-cal {
  position: relative;
  width: 80.5rem;
  height: 115px;
 overflow: scroll;
 background: #FFFFFF;
 margin-top: 20px;
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
 
 .current-day { 
    border-radius: 100%; 
    color: white;
    width:55px;
    height:100px;
    text-align: center;
     background: linear-gradient(180deg, rgba(118, 165, 255, 0.61) 44.58%, #76A5FF 70.62%);
    cursor: pointer;
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
  
font-style: normal;
font-weight: 500;
font-size: 20px;
line-height: 50px;
margin-top: 10px;
  
}
.day:hover{
  border-radius: 100%; 
    color: white;
    width:55px;
    text-align: center;
    height:100px;      
background: linear-gradient(180deg, rgba(118, 165, 255, 0.61) 44.58%, #76A5FF 70.62%);
    cursor: pointer;

}
.date {
font-style: normal;
font-weight: 700;
font-size: 19px;
line-height: 24px;
margin-top:-10px; 
margin-bottom: 10px;
}
.main-content{
   
    margin-top:2rem;
  margin-left: 17rem;
}
.sliding-cal{
    margin-left:-2.6rem;
}
/* .day:hover { 
  border-radius: 100%; 
  color: white;
  width:60px;
  height:100px;
  text-align: center;
  background: linear-gradient(180deg, rgba(118, 165, 255, 0.61) 44.58%, #76A5FF 70.62%);
  cursor: pointer;
 } */
.sliding-cal::-webkit-scrollbar {
  display: none;
}
.sliding-cal {
  -ms-overflow-style: none;
  scrollbar-width: none;
}

@media screen and (min-width: 720px) and (max-width:1500px) {
.sliding-cal {
  position: relative;
  width: auto;
  margin-left:-3.4rem;
  }

}

@media screen and (min-width:500px) and (max-width:720px) {

  .sliding-cal {
  /* margin-right: -95px; */
  width: auto;
  margin-left: -55px;
  margin-top:60px;
}
}

@media screen and (min-width:0px) and (max-width:500px) {
  .main-content{
    overflow: none;
    margin-right:20px;
   }
  .sliding-cal{
    width:auto;
    margin-top: 60px !important;
    
  margin-right: -18px;
  width: auto;
  margin-left: -55px;
  margin-top:60px; 
  }

}
  @media screen and (min-width:600px) and (max-width:720px) {
   
   .main-content{
    overflow: none;
    margin-right:20px;
   }
    .sliding-cal{

  margin-right: -16px;
  width:auto;
  margin-left: -55px;
  margin-top:60px; 
 
}

}

@media screen and (min-width:0px) and (max-width:720px) {
 
.main-content{
  margin-top:-40px;
  bottom: 20px;
  margin-left:60px;
  overflow: none;
}
.left{     
  
 
  margin-top:2rem;
}
.left h1{
  font-size: 40px;
 
}
.img{
  margin-top:15px !important;
  margin: 15px auto auto auto!important;
  display:flex;
  flex-direction:column !important;
}

}
.img_title{
  position: relative;
width: 83px;
height: 85px;
left: 96px;
top: -8px;

font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 40px;
line-height: 85px;
color:#ffffff;
}
/* .ellipse{
  position:relative;
left: 65px;
top:-40px;
} */
.gl{
  width: 37.64px;
height: 48.15px;

font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 21.0981px;
line-height: 45px;
}
</style>
</head>
<body>

  <div class="main-content">
    <div> 
      <div class="left"> 
        <h1>Client Matrics</h1> 
      </div> 
      
    </div> 
    <div class="sliding-cal col-sm-12">
      <div id="slider-content"> </div>
    </div>

    <div class="images" style="display:flex;flex-wrap:wrap;width:100%; margin-top:50px;flex-direction:row !important; justify-content: center">
        <div class="img "style="background: linear-gradient(208.27deg, rgba(255, 108, 108, 0.891) 40.23%, rgba(255, 92, 0, 0.468) 95.3%);border-radius: 20px;width: 274.26px;height: 270.88px; margin:30px 65px;">
        <div class="" style="flex-direction:column;display:flex;">

        <p  class="img_title">Steps</p>
        <div style="margin-top:-30px !important;">
      
      <div class="" style="background-image:url('images/Group 1410112811.svg');background-repeat:no-repeat;background-position:center;position:relative;">
      
        <div><img src="images/Ellipse 401.svg" style="margin-left:64px;"></div>
        <div style="position:absolute;left: 40%;right: 33.33%;top: 6.9%;bottom: 34.83%;">
          <p style="color:white;font-family: 'NATS';font-style: normal;font-weight: 400;font-size: 40px;line-height: 85px;">500</p>
          <p style="font-family: 'NATS';font-style: normal;font-weight: 400;font-size: 23.85px;line-height: 50px;color:#ffffff;left: 4.33%;right: 39.33%;top: 54.54%;bottom: 24.99%;position:absolute;">steps</p>
        </div>
      </div>
        
        <div class="goal" style="display:flex;flex-direction:rows;justify-content:space-between; margin:0px 20px 0px 20px">
          <div style="display:flex;">
                <img src="images/Group 10407.svg" style="margin-right:10px;margin-bottom:23px;">
                <p class="gl"style="color:white;">Goal</p>
          </div>
          <div class="right" style="font-family: 'NATS';font-style: normal;font-weight: 400;font-size: 20.1808px;line-height: 43px;color:white;">1100 Steps</div>
        </div>
         </div>
  
        </div>

</div>
        <div class="img "style="background: linear-gradient(206.14deg, rgba(255, 96, 145, 0.81) 0%, rgba(81, 39, 221, 0.468) 145.34%);border-radius: 20px;width: 274.26px;height: 270.88px; margin:30px 65px">
        <div class="" style="flex-direction:column;display:flex;">

        <p  style="width: 157px;height: 85px;left: 58px;top: -6px;font-family: 'NATS';font-style: normal;font-weight: 400;font-size: 40px;line-height: 85px;color: #FFFFFF;position:relative;">Heart Rate</p>

        <div style="margin-top:-30px !important;">
      
      <div class="" style="background-image:url('images/Vector (11).svg');background-repeat:no-repeat;background-position:center;position:relative;">
      
        <div><img src="images/Ellipse 401.svg" style="margin-left:69px;"></div>
        <div style="position:absolute;left: 42%;right: 33.33%;top: 6.9%;bottom: 34.83%;">
          <p style="color:white;font-family: 'NATS';font-style: normal;font-weight: 400;font-size: 40px;line-height: 85px;">85</p>
          <p style="font-family: 'NATS';font-style: normal;font-weight: 400;font-size: 23.85px;line-height: 50px;color:#ffffff;right: 39.33%;top: 54.54%;bottom: 24.99%;position:absolute;">bpm</p>
        </div>
      </div>
        <div class="goal" style="display:flex;flex-direction:rows;justify-content:space-between; margin:0px 20px 0px 20px">
          <div style="display:flex;">
                <img src="images/Vector (1).svg" style="margin-right:10px;margin-bottom:23px;">
                
          </div>
          <div><img src="images/Vector (6).svg" style="margin-top:12px"></div>
          <div class="right" style="font-family: 'NATS';font-style: normal;font-weight: 400;font-size: 20.1808px;line-height: 43px;color:white;margin-bottom:10px !important;">120 bpm</div>
          <div><img src="images/Vector (7).svg" style="margin-top:12px"></div>
          <div class="right" style="font-family: 'NATS';font-style: normal;font-weight: 400;font-size: 20.1808px;line-height: 43px;color:white;">72 bpm</div>
        </div>
         </div>
  
        </div>

</div>
        <div class="img "style="background: linear-gradient(208.27deg, rgba(39, 142, 255, 0.72) 41.57%, rgba(98, 113, 255, 0.416) 93.17%);border-radius: 20px;width: 274.26px;height: 270.88px;margin:30px 65px;">
        <div class="" style="flex-direction:column;display:flex;">

        <p  class="img_title">Water</p>

        <div style="margin-top:-30px !important;">
      
      <div class="" style="background-image:url('images/Vector (13).svg');background-repeat:no-repeat;background-position:center;position:relative;background-size:contain;">
      
        <div><img src="images/Ellipse 401.svg" style="margin-left:74px;"></div>
        <div style="position:absolute;left: 42%;right: 33.33%;top: 7.9%;bottom: 34.83%;">
          <p style="color:white;font-family: 'NATS';font-style: normal;font-weight: 400;font-size: 40px;line-height: 85px; margin:auto;">500</p>
          <p style="font-family: 'NATS';font-style: normal;font-weight: 400;font-size: 23.85px;line-height: 50px;color:#ffffff;left: 20.33%;right: 39.33%;top: 54.54%;bottom: 24.99%;position:absolute;">ml</p>
        </div>
      </div>
        
        <div class="goal" style="display:flex;flex-direction:rows;justify-content:space-between; margin:0px 20px 0px 20px">
          <div style="display:flex;">
                <img src="images/Vector (2).svg" style="margin-right:10px;margin-bottom:23px;">
                <p class="gl"style="color:white;">Goal</p>
          </div>
          <div class="right" style="font-family: 'NATS';font-style: normal;font-weight: 400;font-size: 20.1808px;line-height: 43px;color:white;">1500 ml</div>
        </div>
         </div>
  
        </div>
</div>


        
         <div class="img "style="background: linear-gradient(237.6deg, rgba(78, 205, 196, 0.468) -24.24%, rgba(85, 98, 112, 0.81) 100%);border-radius: 20px;width: 274.26px;height: 270.88px;margin:30px 65px;">
        <div class="" style="flex-direction:column;display:flex;">

        <p  class="img_title" style="left: 84.12px;top: -1px;">Weight</p>
        
        <div style="margin-top:-30px !important;">
      
      <div class="" style="background-image:url('images/Vector (12).svg');background-repeat:no-repeat;background-position:center;position:relative;">
      
        <div><img src="images/Ellipse 401.svg" style="margin-left:69px;"></div>
        <div style="position:absolute;left: 40%;right: 33.33%;top: 6.9%;bottom: 34.83%;">
          <p style="color:white;font-family: 'NATS';font-style: normal;font-weight: 400;font-size: 40px;line-height: 85px;">80</p>
          <p style="font-family: 'NATS';font-style: normal;font-weight: 400;font-size: 23.85px;line-height: 50px;color:#ffffff;left: 10.33%;right: 39.33%;top: 54.54%;bottom: 24.99%;position:absolute;">kg</p>
        </div>
      </div>
        <div class="goal" style="display:flex;flex-direction:rows;justify-content:space-between; margin:0px 20px 0px 20px">
          <div style="display:flex;">
                <img src="images/Vector (3).svg" style="margin-right:10px;margin-bottom:23px;">
                <p class="gl"style="color:white;">Goal</p>
          </div>
          <div class="right" style="font-family: 'NATS';font-style: normal;font-weight: 400;font-size: 20.1808px;line-height: 43px;color:white;">100 kg</div>
        </div>
         </div>
  
        </div>
</div>

        <div class="img "style="background: linear-gradient(208.27deg, rgba(69, 24, 219, 0.81) 30.7%, rgba(123, 41, 255, 0.468) 95.3%);border-radius: 20px;width: 274.26px;height: 270.88px;margin:30px 65px;">
        <div class="" style="flex-direction:column;display:flex;">

        <p  class="img_title">Sleep</p>

        <div style="margin-top:-35px !important;">
      
      <div class="" style="background-image:url('images/Vector (10).svg');background-repeat:no-repeat;background-position:center;position:relative;">
      
        <div><img src="images/Ellipse 401.svg" style="margin-left:64px;"></div>
        <div style="position:absolute;left: 40%;right: 33.33%;top: 1.9%;bottom: 34.83%;">
          <p style="color:white;font-family: 'NATS';font-style: normal;font-weight: 400;font-size: 40px;line-height: 85px;">7 hr</p>
          <p style="font-family: 'NATS';font-style: normal;font-weight: 400;font-size: 39.85px;line-height: 50px;color:#ffffff;left: 1%;right: 39.33%;top: 60.54%;bottom: 24.99%;position:absolute;">35min</p>
        </div>
      </div>
        
        <div class="goal" style="display:flex;flex-direction:rows;justify-content:space-between; margin:0px 20px 0px 20px">
          <div style="display:flex;">
                <img src="images/Vector (4).svg" style="margin-right:10px;margin-bottom:23px;">
                <p class="gl"style="color:white;">Goal</p>
          </div>
          <div class="right" style="font-family: 'NATS';font-style: normal;font-weight: 400;font-size: 20.1808px;line-height: 43px;color:white;">8 hrs</div>
        </div>
         </div>
  
        </div>
</div>

        <div class="img "style="background: linear-gradient(61.08deg, rgba(221, 94, 137, 0.9) 0%, rgba(247, 187, 151, 0.52) 130.74%);border-radius: 20px;width: 274.26px;height: 270.88px;margin:30px 65px;">
        <div class="" style="flex-direction:column;display:flex;">

        <p  class="img_title" style="left: 78.26px;top: -1px;">Calories</p>

        <div style="margin-top:-30px !important;">
      
          <div class="" style="background-image:url('images/Vector (9).svg');background-repeat:no-repeat;background-position:center;position:relative;">
          
            <div><img src="images/Ellipse 401.svg" style="margin-left:63px;"></div>
            <div style="position:absolute;left: 40%;right: 33.33%;top: 6.9%;bottom: 34.83%;">
              <p style="color:white;font-family: 'NATS';font-style: normal;font-weight: 400;font-size: 40px;line-height: 85px;">326</p>
              <p style="font-family: 'NATS';font-style: normal;font-weight: 400;font-size: 23.85px;line-height: 50px;color:#ffffff;left: 10.33%;right: 39.33%;top: 54.54%;bottom: 24.99%;position:absolute;">kcal</p>
            </div>
          </div>
          

        </div>
        
        <div class="goal" style="display:flex;flex-direction:rows;justify-content:space-between; margin:0px 20px 0px 20px">
          <div style="display:flex;">
                <img src="images/Vector (5).svg" style="margin-right:10px;margin-bottom:23px;">
                <p class="gl"style="color:white;">Goal</p>
          </div>
          <div class="right" style="font-family: 'NATS';font-style: normal;font-weight: 400;font-size: 20.1808px;line-height: 43px;color:white;">1000 kcal</div>
        </div>
         </div>
  
        </div>
</div>
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
