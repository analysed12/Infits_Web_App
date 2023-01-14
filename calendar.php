<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  *{
    margin:0;
  }
    .slider {
      
  position: absolute;
  height: 112px;
  width: 80%;
  overflow: scroll;
  border: 1px solid rgba(225, 225, 225, 0.66);
    box-shadow: 0px 11px 25px rgba(0, 0, 0, 0.1);
    cursor: grab;
}

/* .slider-wrap {
    position: absolute;
    width: 77%;
    height: 112px;
    border: 1px solid rgba(225, 225, 225, 0.66);
    box-shadow: 0px 11px 25px rgba(0, 0, 0, 0.1);
    cursor: grab;
    
    
  } */

#slider-inner {
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
  font-size: 19px;
  width: 150px;
  background-color: white;
}

/* Hide scrollbar for Chrome, Safari and Opera */
.slider::-webkit-scrollbar {
  display: none;
}

/* Hide scrollbar for IE, Edge and Firefox */
.slider {
  -ms-overflow-style: none; /* IE and Edge */
  scrollbar-width: none; /* Firefox */
}

@media only screen and (max-width: 720px) {
    .item {
        width: 80px !important;
      }
      .slider{
        width: 80% !important;
      }
  }
</style>
<body>
     <!-- Calendar -->
     
            <div class="slider">
                <div id="slider-inner">
                </div>
            </div>
   
</body>
<script>
    
const Date_function = () =>{
    var now = new Date();
var value;
const str = obtain_Date(now,-3);
const startdate = new Date(str);

var i=0;
while(i<21)
{
value = obtain_Date(startdate,i);
days = ['Sun','Mon','Tues','Wed','Thurs','Fri','Sat'];
console.log(value.getDate())
html = `<div class="item">
<div>`+days[parseInt(value.getDay())] +`</div><br>
<div>`+value.getDate()+ `</div>

</div>`
document.getElementById('slider-inner').innerHTML += html ;
i++;
}
}

// Obtain specific dates -->
const obtain_Date = (date,x) =>{  
    var newdate = new Date();
    newdate.setDate(date.getDate() + x)

    return newdate;
}


Date_function();


const slider = document.querySelector('#slider-inner');

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
    if(sliderGrabbed){
        slider.parentElement.scrollLeft -= e.movementX;
    }
})

slider.addEventListener('wheel', (e) =>{
    e.preventDefault()
    slider.parentElement.scrollLeft += e.deltaY;
})

function getScrollPercentage(){
   return ((slider.parentElement.scrollLeft / (slider.parentElement.scrollWidth - slider.parentElement.clientWidth) ) * 100);
}

</script>
<br><br><br><br>



</html>