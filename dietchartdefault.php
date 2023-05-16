<?php
include('navbar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.items{
    width:307px; 
    /* height:221px; */
    padding:20px; 
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
    border-radius:15px;
    display:flex;
    flex-direction:column;
    gap:10px;
}
.item{
    display: flex;
    justify-content: space-between;
}
.item1{
    justify-content:space-between;
}
.item1 .left{
    width: 150px;
height: 38px;
left: 52px;
top: 28px;
padding-left:8%;
font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 25px;
line-height: 150%;
/* identical to box height, or 38px */

display: flex;
align-items: center;
background: #9C74F5;
border-radius: 10px;
color: #FFFFFF;
}
.to{
    width: 110px;
height: 30px;
left: 32px;
top: 82px;

font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 20px;
line-height: 150%;
/* identical to box height, or 30px */

display: flex;
align-items: center;

color: #D2D2D2;
}
.name{
    width: 180px;
height: 30px;
left: 32px;
top: 82px;

font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 20px;
line-height: 150%;
/* identical to box height, or 30px */

display: flex;
align-items: center;

color: black;
}
.text{
height: 23px;
left: 32px;
top: 123px;
font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 18px;
line-height: 150%;
/* identical to box height, or 22px */

display: flex;
align-items: center;

color: #000000;
}
.no{
    width: 22px;
height: 22px;
left: 32px;
top: 165px;
border-radius:50%;
background-color: #9C74F5;
color:white;
font-size: 18px;
font-weight:500;
padding-left: 2px;
    padding-bottom: 25px;
}
.item3{
    display:flex;
    gap:10px;
}
.item .dayes{
    width: 121px;
height: 30px;
left: 159px;
top: 162px;

background: #9C74F5;
border-radius: 8px;
font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 15px;
line-height: 32px;
padding-left:5%;
/* identical to box height */


color: #FFFFFF;
}
.r{
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 15px;
margin-top: 3px;
}

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
     background: linear-gradient(180deg, rgba(156, 116, 245, 0.61) 33.65%, #9C74F5 70.62%);
    cursor: pointer;
  } 
.itemes {
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
background: linear-gradient(180deg, rgba(156, 116, 245, 0.61) 33.65%, #9C74F5 70.62%);
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
.maindiv{
    display:flex;
   gap:20px;
   flex-wrap:wrap;
   margin-top: 4%;
    margin-left: 20%;
}
.main .right{
height: 74px;
left: 532px;
top: 93px;

font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 35px;
line-height: 74px;
/* identical to box height */

letter-spacing: -0.114286px;

color: #CBCBCB;
}
.left h1{
  margin-top:20px;
  margin-left:10%;
}
.flex{
  display:flex;
  gap:50px;
}
@media screen and (min-width: 720px) and (max-width:1500px) {
.sliding-cal {
  position: relative;
  width: auto;
  }
 
.button-container{
  display: flex;
  flex-direction: row;
  overflow-x: auto;
  margin-right: 40px;
  margin-left:-20px; 

}
.btn1{
  margin-left: 30px;
}
}

@media screen and (min-width:500px) and (max-width:720px) {

  .sliding-cal {
  margin-right: -95px;
  width: auto;
  margin-left: -55px;
  margin-top:60px;
}
.maindiv{
    margin-left:12%;
  }
}

@media screen and (min-width:0px) and (max-width:500px) {
  .main-content{
    overflow: none;
    margin-right:20px;
   }
   .flex{
    
   }
   .maindiv{
    margin-left:12%;
    justify-content: center;
  }
  .sliding-cal{
    width:auto;
    margin-top: 60px;
    
  margin-right: -60px;
  width: auto;
  margin-left: -55px;
  margin-top:60px; 
  }

}


</style>
<body>
    <div class="main">
    <div> 
     <div class="flex">
      <div class="left" style="width: 42%;"> 
        <h1>Diet Chart</h1> 
      </div> 
      <div class="right">
      Ronald Richards
      </div> 
     </div>
    <div class="sliding-cal col-sm-12">
      <div id="slider-content"> </div>
    </div>




     <div class="maindiv">
       <div class="items">
           <div class="item item1">
              <div class="left">Diet Chart 1</div>
              <div>
               <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M10 6.25C10.6904 6.25 11.25 5.69036 11.25 5C11.25 4.30964 10.6904 3.75 10 3.75C9.30964 3.75 8.75 4.30964 8.75 5C8.75 5.69036 9.30964 6.25 10 6.25Z" fill="black"/>
               <path d="M10 11.25C10.6904 11.25 11.25 10.6904 11.25 10C11.25 9.30964 10.6904 8.75 10 8.75C9.30964 8.75 8.75 9.30964 8.75 10C8.75 10.6904 9.30964 11.25 10 11.25Z" fill="black"/>
               <path d="M10 16.25C10.6904 16.25 11.25 15.6904 11.25 15C11.25 14.3096 10.6904 13.75 10 13.75C9.30964 13.75 8.75 14.3096 8.75 15C8.75 15.6904 9.30964 16.25 10 16.25Z" fill="black"/>
               </svg>
             </div>
           </div>
           <div class="item">
              <div class="to">Assigned to: </div>
              <div class="name"> Ronald Richards</div>
           </div>
           <div class="item text">Breakfast, Lunch, Snacks, Dinner</div>
           <div class="item">
              <div class="item3">
                <div class="no">12</div>
                <div class="r">Recipes</div>
              </div>
              <div class="dayes"> Monday - Sunday</div>
           </div>
       </div>
       <div class="items">
           <div class="item item1">
              <div class="left">Diet Chart 1</div>
              <div>
               <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M10 6.25C10.6904 6.25 11.25 5.69036 11.25 5C11.25 4.30964 10.6904 3.75 10 3.75C9.30964 3.75 8.75 4.30964 8.75 5C8.75 5.69036 9.30964 6.25 10 6.25Z" fill="black"/>
               <path d="M10 11.25C10.6904 11.25 11.25 10.6904 11.25 10C11.25 9.30964 10.6904 8.75 10 8.75C9.30964 8.75 8.75 9.30964 8.75 10C8.75 10.6904 9.30964 11.25 10 11.25Z" fill="black"/>
               <path d="M10 16.25C10.6904 16.25 11.25 15.6904 11.25 15C11.25 14.3096 10.6904 13.75 10 13.75C9.30964 13.75 8.75 14.3096 8.75 15C8.75 15.6904 9.30964 16.25 10 16.25Z" fill="black"/>
               </svg>
             </div>
           </div>
           <div class="item">
              <div class="to">Assigned to: </div>
              <div class="name"> Ronald Richards</div>
           </div>
           <div class="item text">Breakfast, Lunch, Snacks, Dinner</div>
           <div class="item">
              <div class="item3">
                <div class="no">12</div>
                <div class="r">Recipes</div>
              </div>
              <div class="dayes"> Monday - Sunday</div>
           </div>
       </div>
       <div class="items">
           <div class="item item1">
              <div class="left">Diet Chart 1</div>
              <div>
               <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M10 6.25C10.6904 6.25 11.25 5.69036 11.25 5C11.25 4.30964 10.6904 3.75 10 3.75C9.30964 3.75 8.75 4.30964 8.75 5C8.75 5.69036 9.30964 6.25 10 6.25Z" fill="black"/>
               <path d="M10 11.25C10.6904 11.25 11.25 10.6904 11.25 10C11.25 9.30964 10.6904 8.75 10 8.75C9.30964 8.75 8.75 9.30964 8.75 10C8.75 10.6904 9.30964 11.25 10 11.25Z" fill="black"/>
               <path d="M10 16.25C10.6904 16.25 11.25 15.6904 11.25 15C11.25 14.3096 10.6904 13.75 10 13.75C9.30964 13.75 8.75 14.3096 8.75 15C8.75 15.6904 9.30964 16.25 10 16.25Z" fill="black"/>
               </svg>
             </div>
           </div>
           <div class="item">
              <div class="to">Assigned to: </div>
              <div class="name"> Ronald Richards</div>
           </div>
           <div class="item text">Breakfast, Lunch, Snacks, Dinner</div>
           <div class="item">
              <div class="item3">
                <div class="no">12</div>
                <div class="r">Recipes</div>
              </div>
              <div class="dayes"> Monday - Sunday</div>
           </div>
       </div>
       <div class="items">
           <div class="item item1">
              <div class="left">Diet Chart 1</div>
              <div>
               <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M10 6.25C10.6904 6.25 11.25 5.69036 11.25 5C11.25 4.30964 10.6904 3.75 10 3.75C9.30964 3.75 8.75 4.30964 8.75 5C8.75 5.69036 9.30964 6.25 10 6.25Z" fill="black"/>
               <path d="M10 11.25C10.6904 11.25 11.25 10.6904 11.25 10C11.25 9.30964 10.6904 8.75 10 8.75C9.30964 8.75 8.75 9.30964 8.75 10C8.75 10.6904 9.30964 11.25 10 11.25Z" fill="black"/>
               <path d="M10 16.25C10.6904 16.25 11.25 15.6904 11.25 15C11.25 14.3096 10.6904 13.75 10 13.75C9.30964 13.75 8.75 14.3096 8.75 15C8.75 15.6904 9.30964 16.25 10 16.25Z" fill="black"/>
               </svg>
             </div>
           </div>
           <div class="item">
              <div class="to">Assigned to: </div>
              <div class="name"> Ronald Richards</div>
           </div>
           <div class="item text">Breakfast, Lunch, Snacks, Dinner</div>
           <div class="item">
              <div class="item3">
                <div class="no">12</div>
                <div class="r">Recipes</div>
              </div>
              <div class="dayes"> Monday - Sunday</div>
           </div>
       </div>
     </div>
     <div class="d-flex  justify-content-end">
                <a onclick="window.location.href = 'create_plan.php';"><img src="./images/9_plus.png" alt="img"></a>
    </div>
    
    </div>
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
       html = `<div class="itemes">
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