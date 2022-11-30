<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    

    <script>
            $(document).ready(function(){
            $(".calendat_but").click(function(){
                $(".calendar_pop").animate({
                    height: 'toggle'
                });
            }); 
            });
        </script>
        <script>
            $(document).ready(function(){
            $(".pheader p").click(function(){
                $(".activity_pop").animate({
                    height: 'toggle'
                });
            }); 
            });
        </script>
</head>
<style>
html {
    overflow-x: hidden;
}

#content {
    display: flex;
    flex-direction: column;
    height: 90%;
    font-family: "Poppins";
    font-style: normal;
    font-weight: 500;
    font-size: 35px;
    padding: 20px;
}

#wrapper {
    height: auto;
    width: 100%;
    padding: 20px;
}

#inner1 {
    float: left;
    width: 70%;
    height: auto;
}

#inner2 {
    float: left;
    width: 30%;
    height: auto;
    background: #FFFFFF;
    border: 1px solid #EFEFEF;
    border-radius: 31px;
    padding: 20px;
}

#inner11 {
    float: left;
    /* background: green; */
    width: 100%;
}

#inner12 {
    float: left;
    clear: left;
}

.flex-container {
    display: flex;
    flex-wrap: wrap;
}

.flex-container>div {
    width: 90px;
    height: auto;
    /* background: pink; */
    margin: 10px;
    text-align: center;
    /* line-height: 75px; */
    font-size: 30px;
    border-radius: 14px;
    padding: 5px;
}
.flex-container-bottom {
    display: flex;
    flex-wrap: wrap;
}
.flex-container-bottom>div {
    width: 134px;
height: 57.45px;
    /* background: pink; */
    margin: 10px;
    text-align: center;
    /* line-height: 75px; */
    font-size: 30px;
    border-radius: 14px;
    padding: 5px;
}
.client-card-sleep{
    background: linear-gradient(212.32deg, #633FDD 0%, #AB83F0 93.37%);
    

}
.client-card-sleep p{
    color: #FFFFFF;
}
.client-card p {
    font-size: 15px;
}

.client-card i {
    font-size: 15px;
}

.graph {
    width: 450px;
    margin-left: 20px;
    margin-top: 20px;
    height: 100%;
    background: #FFFFFF;
    border: 1px solid #F1F1F1;
    box-shadow: 0px 5px 4px rgba(0, 0, 0, 0.16);
    border-radius: 11px;
    /* border: 1px solid black; */
    padding: 10px;

}

.inner21 {
    text-align: center;
}

.inner21-title {
    font-size: 20px;
}

.box-btn {
    width: auto;
    height: auto;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 30px;
    padding-right: 30px;
    font-size: 20px;
    background: linear-gradient(263.28deg, #AB84F0 0%, #9FB0F2 0.01%, #633FDD 93.31%);
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.28);
border-radius: 10px;
}

.box-title {
    font-size: 15px;
    color: #FF8B8B;
}

.box-counter {
    background: #FFFFFF;
    border: 1px solid #DFDFDF;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.08);
    border-radius: 10px;
    color: grey;
}


#wrapper-lower {
    height: auto;
    width: 100%;
    padding: 20px;
}

#inner1-lower {
    float: left;
    width: 70%;
    height: auto;
    /* background: blue; */
}

#inner2-lower {
    float: left;
    width: 30%;
    height: auto;
    /* background: pink; */
    /* background: #FFFFFF;
    border: 1px solid #EFEFEF;
    border-radius: 31px;
    padding:20px; */
}

#inner11-lower {
    float: left;
    /* background: green; */
    width: 100%;
}

#inner12-lower {
    float: left;
    clear: left;
}

.bottom-btns{
    display: flex;
    flex-direction: row;
    justify-content:space-evenly;
}
.bottom-stats-btn{
    display: flex;
    flex-direction: column;
    justify-content:center;
    width: 88px;
height: 38.95px;
    background: #FFFFFF;
border: 1px solid #F1F1F1;
padding:8px;
box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.08);
border-radius: 16px;
width: 134px;
height: 57.45px;
}
.table{
    display:flex;
    flex-direction:column;
    justify-content:center;
    margin: 2%;

}
@keyframes growProgressBar {

    0%,
    33% {
        --pgPercentage: 0;
    }

    100% {
        --pgPercentage: var(--value);
    }
}

@property --pgPercentage {
    syntax: '<number>';
    inherits: false;
    initial-value: 0;
}

div[role="progressbar"] {
    --size: 10rem;
    --fg: #369;
    --bg: #def;
    --pgPercentage: var(--value);
    animation: growProgressBar 3s 1 forwards;
    width: var(--size);
    height: var(--size);
    border-radius: 50%;
    display: grid;
    place-items: center;
    
    box-shadow: -9px 9px 18px rgba(217, 217, 217, 0.2), 9px -9px 18px rgba(217, 217, 217, 0.2), -9px -9px 18px rgba(255, 255, 255, 0.9), 9px 9px 23px rgba(217, 217, 217, 0.9), inset 1px 1px 2px rgba(255, 255, 255, 0.3), inset -1px -1px 2px rgba(217, 217, 217, 0.5);
    background:
        radial-gradient(closest-side, white 80%, transparent 0 99.9%, white 0),
        conic-gradient(var(--fg) calc(var(--pgPercentage) * 1%), var(--bg) 0);
    font-family: Helvetica, Arial, sans-serif;
    font-size: calc(var(--size) / 5);
    color: var(--fg);
}

div[role="progressbar"]::before {
    counter-reset: percentage var(--value);
    content: counter(percentage) '%';
}


@media (min-width: 0px) and (max-width: 720px) {
    #inner1 {
        width: 100% !important;
    }

    #inner2 {
        clear: left;
        margin-top: 30px !important;
        width: 100% !important;
    }

    #inner11 {
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;

    }

    #inner12 {
        width: 100% !important;
    }

    .graph {
        /* display: flex;
        align-items: center;
        justify-content: center; */
        width: 100% !important;
        margin-left: 0 !important;
    }

    .flex-container>div {
        width: 70px;
        height: auto;
        margin: 10px;
        text-align: center;
        font-size: 20px;
        border-radius: 14px;
        padding: 5px;
    }
}
.heart_info{

    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 19px;
line-height: 40px;

color: #5D5D5D;
}
.cpb{
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction:column;
    align-items: center;
    /* justify-content: center; */
    margin-top: 20px;

}
.pheader{
	display :flex;
	flex-direction:row;
	justify-content:space-between;
}
.pheader p{
	font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 16px;
line-height: 34px;
/* identical to box height */
width: 77px;
height: 34px;
margin-left: 20px;
color: #9C74F5;
}

.table_top{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    margin: 20px;
}
.table_top>span{
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 21px;
line-height: 44px;

color: #000000;
}
.table_element{
    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
    margin: 20px;
    height:60px
}
.table_element>div{
    display: flex;
    flex-direction: column;
    justify-content: center;
    width:200px
}

.table_element>div>span{
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 20px;
line-height: 42px;
letter-spacing: 0.03em;

color: #C986CF;
}
.table_element>div>p{

    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 23px;
line-height: 49px;


}
.pbottom{
    display: flex;
    flex-direction: row;
    align-items:;
    padding:2px;
}
.pbottom-element{
    margin:2px;
}
.pbottom-element p{
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 20px;
line-height: 42px;
letter-spacing: 0.03em;

color: #000000;
}
.pbottom-element span{
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 24px;
line-height: 51px;
/* identical to box height */

letter-spacing: 0.03em;

color: #6844E2;
}
.date{
    
    border-right: 1px solid #C986CF;

}
.table_time>span{
    width: 103.19px;
height: 40px;
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 19px;
line-height: 40px;
letter-spacing: 0.03em;
color: #000000;

opacity: 0.77;
}
</style>

<body>
    <?php include 'navbar.php' ?>

    <div id="content">

        <div id="wrapper">
            <div id="inner1">
                <div id="inner11">
                    <div class="flex-container">
                        <div class="client-card" style="color:#FF6C6CCA ;border: 1px solid #FF6C6CCA;">
                            <i class="fa-solid fa-shoe-prints" style="rotate: -90deg;"></i>
                            <p>Step</p>
                        </div>
                        <div class="client-card" style="color:#E266A9; border: 1px solid #E266A9;">
                            <i class="fa-solid fa-heart-pulse"></i>
                            <p>Heart Rate</p>
                        </div>
                        <div class="client-card" style="color:#52A4FF; border: 1px solid #52A4FF;">
                            <i class="fa-solid fa-droplet"></i>
                            <p>Water</p>
                        </div>
                        <div class="client-card" style="color:#7D5DE6; border: 1px solid #7D5DE6;">
                            <i class="fa-solid fa-weight-hanging"></i>
                            <p>Weight Track</p>
                        </div>
                        <div class="client-card client-card-sleep" style="color:#54AFAC; border: 1px solid #54AFAC;">
                            <img src="images/moon.svg" alt="">
                            <p>Sleep</p>
                        </div>
                        <div class="client-card" style="color:#E3738D; border: 1px solid #E3738D;">
                            <i class="fa-solid fa-stopwatch-20"></i>
                            <p>Calorie Track</p>
                        </div>
                    </div>

                </div>
                <div id="inner12">
                    <div class="graph">
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
            <div id="inner2">
                <div class="inner21">
                    <div class="inner21-title">
                        Set Goals
                    </div>
                    <div class="inner21-image">
                        <img src="images/sleep_table.svg" alt="">
                    </div>
                    <div class="box-title">Daily Steps</div>
                    <div class="box-counter">00000</div>
                    <buttpn class="box-btn">Set</buttpn>
                </div>
            </div>
        </div>

        <div id="wrapper-lower">
        <div class="row">
            <div class="col-sm-8">

                <div class="bottom-btns">
                    
                <div class="flex-container-bottom">
                            <div class="bottom-stats-btn">
                                <div class="heart_info">
                                    <span>Daily Count</span>
                                    <span>72 BPM</span>
                                </div>
                                
                            </div>

                            <div class="bottom-stats-btn">
                                <div class="heart_info">
                                    <span>Weekly Avg</span>
                                    <span>72 BPM</span>
                                </div>
                                
                            </div>
                    
                      
                      
                            <div class="bottom-stats-btn">
                                <div class="heart_info">
                                <span>Monthly Avg</span>
                                <span>72 BPM</span>
                                </div>
                                <div class="heart_info">
                                </div>
                            </div>

                            <div class="bottom-stats-btn">
                                <div class="heart_info">
                                <span>Total</span>
                                <span>72 BPM</span>
                                </div>
                                <div class="heart_info">
                                </div>
                            </div>
                    </div>
                           
                </div>
                <div class="row">
                    <div class="col-sm-12">
                    <div class="table">
                        <div class="table_top">
                     <span>Past Activity</span>
                      </div>
                     <?php
                     $a=1;
                     
                    while ($a <= 4) {
                        
                     echo '<div class="table_element">';
                     echo '<div class="date">';
                     echo '<span>Sep</span>';
                     echo ' <p>18</p>';
                     echo '</div>';
                     echo '<div class="table_activity">';
                     echo '<span>Sep</span>';
                     echo '<p>18</p>';
                     echo ' </div>';
                     echo '<div class="table_time">';
                     echo '   <span>9:10 AM</span>';
                     echo ' </div>';
                     echo '</div>';
                     
                     $a++;
                    }
                     
                    
                     ?>
                      </div> 

                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="cpb">
                <div class="pheader">
						<h4>Daily Progress</h4>
						<p>View Activity</p>
					</div>
                    <div class="concentric">
                        <script>
                            var clock = jQuery("#container").radialMultiProgress("init", {
                            'fill': 25,
                            'font-size': 14,
                            'data': [
                                {'color':"#2DB1E4",'range': [0, 12]},
                                {'color':"#9CCA13",'range': [0, 59]},
                                {'color':"#A4075E",'range': [0, 59]}
                            ]
                            });
                            
                            var startClock =function() {
                            var dh, dm, ds;
                            setInterval(function() {
                                var date =new Date(),
                                    h = date.getHours() % 12,
                                    m = date.getMinutes(),
                                    s = date.getSeconds();
                                if (dh !== h) { clock.radialMultiProgress("to", {
                                "index": 0,'perc': h,'time': (h ? 100 : 10)
                                }); dh = h; }
                                if (dm !== m) { clock.radialMultiProgress("to", {
                                "index": 1,'perc': m,'time': (m ? 100 : 10)
                                }); dm = m; }
                                if (ds !== s) { clock.radialMultiProgress("to", {
                                "index": 2,'perc': s,'time': (s ? 100 : 10)
                                }); ds = s; }
                            }, 1000);
                            
                            };
                            
                            
                            
                            startClock();
                        
                                jQuery("#container").radialProgress("init", {
                            
                                'size': 20,
                            
                                'fill': 2,
                            
                                'text-color':"transparent"
                            
                                }).radialProgress("to", {'perc': 66});

                        </script>    
                    </div>
                <div role="progressbar" style="--value:<?php $value = 50; echo $value; ?>"></div>
                <div class="pbottom">
                    <div class="pbottom-element">
                        <p>Light Sleep</p>
                        <span>16%</span> 
                    </div>
                    <div class="pbottom-element">
                        <p>Awake Period</p>
                        <span>64%</span> 
                    </div>
                    <div class="pbottom-element">
                        <p>Deep Sleep</p>
                        <span>28%</span> 
                    </div>
                </div>
                </div>
            </div>
        </div>
           
        </div>
    </div>
</body>
<script>
var xValues = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
var yValues = [1000, 2000, 3000, 5000, 2000, 5000, 6000];

new Chart("myChart", {
    type: "line",
    data: {
        labels: xValues,
        datasets: [{
            fill: false,
            lineTension: 0,
            backgroundColor: "#FF8B8B",
            borderColor: "#FF8B8B",
            data: yValues
        }]
    },
    options: {
        legend: {
            display: false
        },
        scales: {
            yAxes: [{
                ticks: {
                    min: 1000,
                    max: 9000
                }
            }],
        }
    }
});
</script>
<script src="//code.jquery.com/jquery.min.js"></script>
<script src="radial-progress-bar.js"></script>
</html>
