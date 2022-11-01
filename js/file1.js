
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

