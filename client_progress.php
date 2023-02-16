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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<style>
@import url('https://fonts.googleapis.com/earlyaccess/nats.css');
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap');

@font-face {
    font-family: 'NATS';
    src:url('font/NATS.ttf.woff') format('woff'),
        url('font/NATS.ttf.svg#NATS') format('svg'),
        url('font/NATS.ttf.eot'),
        url('font/NATS.ttf.eot?#iefix') format('embedded-opentype'); 
    font-weight: normal;
    font-style: normal;
}
.body{
    font-family: 'NATS', sans-serif;
}
.client_progress{
    margin-top: 2rem;
    margin-left: 18rem;
    font-family: poppins;
    display: flex;
    flex-direction: column;
    gap: 1rem;
    margin-bottom: 1rem;
}
#details{
    color: #717171;
    border: none;
    background-color: white;

}
.details{
    margin-left: 45rem;
    border:none;
}
.dashboard_container3{
    display: flex;
    margin-top:0.5rem;
}
.dashboard_container4{
    margin-left: 3.7rem;
   
}
.container4_wrapper1{
    display: flex;
    gap: 2.5rem;
    font-weight: 500;
    margin-left: 16rem;
    margin-top: 1rem;
}
.material-symbols-outlined{
    margin-top: 0.1rem;
    margin-right: 0.3rem;
}
.symbols{
    display: flex;
    gap:0.2rem;
}

.container4_wrapper2{
    display: flex;
  
    background-color: #FDFDFD;
    border: 1px solid #e4e1e1;
    width:fit-content;
    padding: 0.7rem;
    padding-left:1rem;
    padding-right:1.5rem;
    border-radius: 0.5rem;
    margin-top: 1rem;

    
}
#values{
    margin-top: 2rem;
    background-color:#FDFDFD;
    color:#454545;
    font-weight:300;
    border:none;
}
.steps{
  margin-top: 1rem;
}
#two{
    background-color:#0177FD;
    border-radius: 100%;
    padding:0.09rem;
    color:white;
    padding-left:0.3rem;
    padding-right:0.3rem;
    font-size:0.6rem;

}
.list1{
    display:flex;
    gap:13rem;
}
.list2{
    display:flex;
    gap:14rem;
}
.mobileview_clientprogress{
    
    display: none;
}
@media screen and (max-width: 720px){
    .dashboard_container4{
        display: none;
    }
    .details{
        margin-left:0;
    }
    .dashboard_container3{
        display:flex;
        gap:1rem !important;
        
        justify-content:space-between;
    }
    .client_progress{
        margin-left:1rem;
        
    }
  
    .mobileview_clientprogress{
        display: flex;
        flex-direction: column;
        gap: 1rem;
        box-shadow: 0 4px 7px rgba(0,0,0,0.12);
        border-radius: 0.7rem;
        padding: 1rem;
        width: 260px;
        height: 283px;
        margin-left: 2rem;
    }
    .list1{
    display:flex;
    gap:8rem;
}
.list2{
    display:flex;
    gap:9rem;
}
}
</style>
<body>
    <div class="client_progress">
    <div class="dashboard_container3">
            <div style="font-size:1.5rem; font-weight:600"> Client Progress</div>
            <div class="details">
                <a href="client_detailed_progress.php"><button id="details">View Detailed Progress</button></a>
            </div>
            
        </div>

        <div class="dashboard_container4">

            <div class="container4_wrapper1">
                <div class="symbols"><div><img src="images/Frame.png" style="width:1.8rem"></div><div><span>Steps</span></div></div>
                <div class="symbols"><div><img src="images/Frame-1.png" style="width:1.8rem"></div><div><span>Heart Rate</span></div></div>
                <div class="symbols"><div><img src="images/Frame-2.png" style="width:1.8rem"></div><div><span>Water</span></div></div>
                <div class="symbols"><div><img src="images/Frame-3.png" style="width:1.8rem"></div><div><span>Sleep</span></div></div>
                <div class="symbols"><div><img src="images/Frame-4.png" style="width:1.8rem"></div><div><span>Weight</span></div></div>
                <div class="symbols"><div><img src="images/Frame-5.png" style="width:1.8rem"></div><div><span>Calories</span></div></div>
                
            </div>

            <div class="container4_wrapper2">
                <span><a href="" style="background-color:#FDFDFD; color:black;font-weight:600; border:none; margin-top:1rem"><span><img src="images/ronald.jpg" style="width:2rem; background-color:#FDFDFD;border-radius:1rem"> Ronald Richards</span></a></span>
                <span><a href="" id="values" style="margin-left:5rem">5256/6000</a></span>
                <span><a href="" id="values" style=" margin-left:3rem">123 bpm</a></span>
                <span><a href="" id="values" style=" margin-left:4rem">2/3 ltrs</a></span>
                <span><a href="" id="values" style=" margin-left:4rem">7/8 hrs.</a></span>
                <span><a href="" id="values" style="margin-left:3rem">0.53/2 kg</a></span>
                <span><a href="" id="values" style=" margin-left:3rem">122/300 kcal</a></span>
            </div>
            <div class="container4_wrapper2">
                <span><a href="" style="background-color:#FDFDFD; color:black;font-weight:600; border:none; margin-top:1rem"><span><img src="images/ronald.jpg" style="width:2rem; background-color:#FDFDFD;border-radius:1rem"> Ronald Richards</span></a></span>
                <span><a href="" id="values" style="margin-left:5rem">5256/6000</a></span>
                <span><a href="" id="values" style=" margin-left:3rem">123 bpm</a></span>
                <span><a href="" id="values" style=" margin-left:4rem">2/3 ltrs</a></span>
                <span><a href="" id="values" style=" margin-left:4rem">7/8 hrs.</a></span>
                <span><a href="" id="values" style="margin-left:3rem">0.53/2 kg</a></span>
                <span><a href="" id="values" style=" margin-left:3rem">122/300 kcal</a></span>
            </div>
            <div class="container4_wrapper2">
                <span><a href="" style="background-color:#FDFDFD; color:black;font-weight:600; border:none; margin-top:1rem"><span><img src="images/ronald.jpg" style="width:2rem; background-color:#f8f6f6;border-radius:1rem"> Ronald Richards</span></a></span>
                <span><a href="" id="values" style="margin-left:5rem">5256/6000</a></span>
                <span><a href="" id="values" style=" margin-left:3rem">123 bpm</a></span>
                <span><a href="" id="values" style=" margin-left:4rem">2/3 ltrs</a></span>
                <span><a href="" id="values" style=" margin-left:4rem">7/8 hrs.</a></span>
                <span><a href="" id="values" style="margin-left:3rem">0.53/2 kg</a></span>
                <span><a href="" id="values" style=" margin-left:3rem">122/300 kcal</a></span>
            </div>
            <div class="container4_wrapper2">
                <span><a href="" style="background-color:#FDFDFD; color:black;font-weight:600; border:none; margin-top:1rem"><span><img src="images/ronald.jpg" style="width:2rem; background-color:#FDFDFD;border-radius:1rem"> Ronald Richards</span></a></span>
                <span><a href="" id="values" style="margin-left:5rem">5256/6000</a></span>
                <span><a href="" id="values" style=" margin-left:3rem">123 bpm</a></span>
                <span><a href="" id="values" style=" margin-left:4rem">2/3 ltrs</a></span>
                <span><a href="" id="values" style=" margin-left:4rem">7/8 hrs.</a></span>
                <span><a href="" id="values" style="margin-left:3rem">0.53/2 kg</a></span>
                <span><a href="" id="values" style=" margin-left:3rem">122/300 kcal</a></span>
            </div>

    </div> 
    
                

                <!----------------------------MOBILE VIEW OF CLIENT PROGRESSS-------------------->

                <div class="mobileview_clientprogress">



            <div class="mob_wrapper1" >
                <span><a href="" style=" color:black;font-weight:500; border:none; margin-top:1rem;background-color:white; margin-left:1rem"><span><img src="images/ronald.jpg" style="width:2rem;border-radius:1rem"> Ronald Richards</span></a></span>
                <div class="row1" style="display:flex ; gap:2rem ">
                        <div class="steps">
                            <div class="symbols">
                            <div style="color:#F6A682"><img src="images/Frame.png" style="width:1.8rem"></div><div style="margin-top:0.2rem; font-weight:500"><span>Steps</span></div></div>
                            <span style="font-size:0.9rem;color:#454545">5256/6000</span>
                        </div>
                        <div class="steps">
                            <div class="symbols">
                            <div style="color:#EF80B2"><img src="images/Frame-1.png" style="width:1.8rem"></div><div style="margin-top:0.2rem; font-weight:500"><span>Heart Rate</span></div></div>
                            <span style="font-size:0.9rem;color:#454545">123 bpm</span>
                        </div>
                </div>

                <div class="row2" style="display:flex ; gap:2rem">
                        <div class="steps">
                            <div class="symbols">
                            <div style="color:#8FAFF3"><img src="images/Frame-2.png" style="width:1.8rem"></div><div style="margin-top:0.2rem; font-weight:500"><span>Water</span></div></div>
                            <span style="font-size:0.9rem;color:#454545">2/3 ltrs</span>
                        </div>
                        <div class="steps">
                            <div class="symbols">
                            <div style="color:#7550E2"><img src="images/Frame-3.png" style="width:1.8rem"></div><div style="margin-top:0.2rem; font-weight:500"><span>Sleep</span></div></div>
                            <span style="font-size:0.9rem;color:#454545">7/8 hrs.</span>
                        </div>
                </div>

                <div class="row3" style="display:flex ; gap:2rem">
                        <div class="steps">
                            <div class="symbols">
                            <div style="color:#788F96"><img src="images/Frame-4.png" style="width:1.8rem"></div><div style="margin-top:0.2rem; font-weight:500"><span>Weight</span></div></div>
                            <span style="font-size:0.9rem;color:#454545">0.53/2 kg</span>
                        </div>
                        <div class="steps">
                            <div class="symbols">
                            <div style="color:#E388A0"><img src="images/Frame-5.png" style="width:1.8rem"></div><div style="margin-top:0.2rem; font-weight:500"><span>Calories</span></div></div>
                            <span style="font-size:0.9rem;color:#454545">122/300 kcal</span>
                        </div>
                </div>




            </div>


    
    
    </div>
    
</body>
</html>