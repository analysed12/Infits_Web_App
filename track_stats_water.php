<?php  include('config.php');?>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
            $(document).ready(function(){
            $(".graph_button_left").click();
            });
            $(document).ready(function(){
            $("#defaultOpen").click(function(){
                
            });
            });
        </script>
        <script>
            
            $(document).ready(function(){
            $("#setbut").click(function(){
            
            }); 
            });
            $(document).ready(function(){
            $(".pheader p").click(function(){
                $(".activity_pop").animate({
                    height: 'toggle'
                });
            }); 
            });
            $(document).ready(function(){
            $(".activity_pop img").click(function(){
                $(".activity_pop").animate({
                    height: 'toggle'
                });
            }); 
            });
            
            var cl=document.getElementById('defaultOpen');
                        cl.click();
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
.client-card p {
    font-size: 15px;
}

.client-card i {
    font-size: 15px;
}
.client-card-water{
    background: linear-gradient(216.13deg, #5CA7F8 9.2%, #ABB3F0 91.57%);
    border: 1px solid #52A4FF;
    border-radius: 10px;
}
.client-card-water p{
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 19px;
    line-height: 120%;
    /* or 23px */

    text-align: center;

    color: #FFFFFF;

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
    background: linear-gradient(263.28deg, #FA8686 0%, #9FB0F2 0.01%, #5CA7F8 93.31%);
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.28);
    border-radius: 10px;
}
.activity_pop{
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 369px;
    height: 545px;
    background: #FFFEFE;
    border-radius: 32px;
    box-shadow: 0px 3px 4px rgba(0.16, 0.16, 0.16, 0.16);
    margin-top: -190px;
    padding: 2px;

}
.activity_pop img{
    align-self: flex-end;
    margin-right: 20px;
}
.pop_box{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: space-between;
    margin: 10 px;
    padding: 10px;
}
.pop_box_info{
    display: flex !important;
    flex-direction: column !important;
    justify-content: space-between !important;
    align-items: flex-end !important;
    height: 49px;
font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 22px;
line-height: 20px;
padding : 0 px !important;
color: #000000;
}
.pop_header span{
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 25px;
line-height: 53px;
/* identical to box height */


color: #FF7B44;
}
/* a:hover, .active {
    align-items: center;
    border: 1px solid #E5F1FF;
    background-color:  #FF8B8B !important;
    color: #FFFFFF !important;
    border-radius: 10px;
} */
.pop_box{

    width: 344px;
    height: 49px;
    background: linear-gradient(135deg, rgba(219, 236, 255, 0.48) 0%, rgba(99, 174, 255, 0.48) 100%);
    border-radius: 10px;
    margin:5px;
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
    place-items: center ;
    margin-bottom:-50px;
    
    box-shadow: -9px 9px 18px rgba(217, 217, 217, 0.2), 9px -9px 18px rgba(217, 217, 217, 0.2), -9px -9px 18px rgba(255, 255, 255, 0.9), 9px 9px 23px rgba(217, 217, 217, 0.9), inset 1px 1px 2px rgba(255, 255, 255, 0.3), inset -1px -1px 2px rgba(217, 217, 217, 0.5);
    background:
        radial-gradient(closest-side, white 80%, transparent 0 99.9%, white 0),
        conic-gradient(var(--fg) calc(var(--pgPercentage) * 1%), var(--bg) 0);
    font-family: Helvetica, Arial, sans-serif;
    font-size: calc(var(--size) / 10);
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
    padding:2px;
 display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 19px;
line-height: 40px;cpb_box

color: #5D5D5D;
}
.heart_info span span{
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
/* font-size: 15px; */

text-align: center;

color: #000000;
}
.cpb{
    width: 100%;
    height: 100%;
    display: flex;
    align-items: top;
    justify-content: center;
    margin-top: 20px;
}
.cpb_box{
    display: flex;
    flex-direction: row;
    justify-content: center;    
    align-items: center;
}
.cpb_box_right{
    display: flex;
    flex-direction: column;
    justify-content: space-between;    
    align-items: space-between;
    padding: 10px;
}
.cpb_box_right div{
    margin: 5px;
}
.cpb_box_right span{
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 22px;
    line-height: 10px;
    letter-spacing: 0.03em;
    
    color: #000000;
}
.cpb img{
    margin-left:-96px;
    margin-top: -20px;
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
/* css for graph tabs */
/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}
.tab_button_side{
   border-radius: 12px;
}
/* Style the buttons that are used to open the tab content */
.tab {
  overflow: hidden;
  /* border: 1px solid #ccc;
  background-color: #f1f1f1; */
  border: 1px solid #F8F5F5;
  width: 365px;
height: 27px;
margin-left: 3%;
border-top-left-radius: 1em!important;
border-bottom-left-radius: 1em!important;
border-top-right-radius: 1em!important;
  border-bottom-right-radius: 1em!important;
}


/* Style the buttons that are used to open the tab content */
.tab button {
    background: #FFFFFF;
    border: 1px solid #FCFBFB;
    border-radius: 0px;
    width: 85.35px;
height: 24px;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  /* padding: 14px 16px; */
  transition: 0.3s;
  font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 13px;
line-height: 27px;

color: #4D4D4D;
}
.graph_button_side{
    border: 1px solid #F8F5F5;
  border-top-right-radius: 1em!important;
  border-bottom-right-radius: 1em!important;
}
.graph_button_left{
  width: 106.69px !important;
border-top-left-radius: 1em!important;
border-bottom-left-radius: 1em!important;
}
/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #63AEFF;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #63AEFF;
  color: white !important;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  /* border: 1px solid #ccc; */
  border-top: none;
}
#setgoalweight{
    background: #FFFFFF;
border: 0px solid #DFDFDF;
box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.08);
border-radius: 10px;
width: 163px;
height: 45px;
}
.graph_button{
    width: 365px !important;
    height: 27px !important;
        
    font-family: 'NATS' !important;
    font-style: normal !important;
    font-weight: 400 !important;
    font-size: 13px !important;
    line-height: 27px !important;

    color: #4D4D4D;
}
.graph_button_side{
  
    border-top-right-radius: 1em!important;
    border-bottom-right-radius: 1em!important;
}
.graph_button_left{
    width: 106.69px !important;
  border-top-left-radius: 1em!important;
  border-bottom-left-radius: 1em!important;
}
.graph_button>button{
    width: 76px;
    height: 27px;
    background: #FFFFFF;
    border: 1px solid #FCFBFB;
    box-sizing: border-box;
    border-radius: 2px;
    font-family: 'NATS';
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
                        <div class="client-card client-card-water " style="color:#52A4FF; border: 1px solid #52A4FF;">
                            <img src="images/water_selected.svg" alt="">
                            <p>Water</p>
                        </div>
                        <div class="client-card" style="color:#7D5DE6; border: 1px solid #7D5DE6;">
                            <i class="fa-solid fa-weight-hanging"></i>
                            <p>Weight Track</p>
                        </div>
                        <div class="client-card" style="color:#54AFAC; border: 1px solid #54AFAC;">
                            <i class="fa-solid fa-moon"></i>
                            <p>Sleep</p>
                        </div>
                        <div class="client-card" style="color:#E3738D; border: 1px solid #E3738D;">
                            <i class="fa-solid fa-stopwatch-20"></i>
                            <p>Calorie Track</p>
                        </div>
                    </div>

                </div>
                <div id="inner12">
                                        <div class="tab">
                                           <button class="tablinks graph_button_left " onclick="openCity(event, 'London')">Custom Dates</button>
                                           <button class="tablinks" onclick="openCity(event, 'Year')">Year</button>
                                           <button class="tablinks" onclick="openCity(event, 'Month')">Month</button>
                                           <button class="tablinks graph_button_side" class="tab_button_side" onclick="openCity(event, 'Week')">Week</button>
                                        </div>
                <div class="graph">
                 <?php 
                //  yearly graph
                    function getArr($from,$to,$clientID){
                        $server="localhost";
                        $username="root";
                        $password="";
                        $database = "infits1"; 
                        
                        $conn=mysqli_connect($server,$username,$password,$database);
                        
                        if ($conn->connect_error) {
                          die("Connection failed: " . $conn->connect_error);
                        }
                            
                            $sql = "SELECT avg(amount) 
                            FROM watertracker
                            WHERE clientID='$clientID' AND `date` between '$from' and '$to' AND `time` IN (
                              SELECT MAX(`time`) 
                              FROM watertracker
                                
                              GROUP BY DATE(`date`)
                             );";
                            
                        
                            $result = mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($connection));
                            
                                $emparray = array();
                                $mon = array();
                                while($row =mysqli_fetch_assoc($result))
                                {
                                    $emparray['drinkConsumed'] = $row['avg(amount)'];
                                    $full[] = $emparray;
                                    $mon[] = $row['avg(amount)'];
                                }
                                
                                $sig = 0;
                                for ($i=0; $i < count($mon) ; $i++) { 
                                    $sig = $sig + $mon[$i];
                                }
                                if(count($mon) != 0){
                                    return $sig/count($mon);
                                }
                        }
                        
                        $from = array("2022-01-01","2022-02-01","2022-03-01","2022-04-01","2022-05-01","2022-06-01","2022-07-01","2022-08-01","2022-09-01","2022-10-01","2022-11-01","2022-12-01");
                        $to = array("2022-01-31","2022-02-28","2022-03-31","2022-04-30","2022-05-31","2022-06-30","2022-07-31","2022-08-30","2022-09-31","2022-10-30","2022-11-31","2022-12-30");
                        // $clientID = $_POST["userID"];
                        $clientID = "Azarudeen";
                        // $clientID = "dilip";
                            $avgArr = array();
                            for ($i=0; $i < 12 ; $i++) { 
                                $avgArr['av'] = getArr($from[$i],$to[$i],$clientID);
                                $avgJson[] = $avgArr;
                            }
                        // echo json_encode(['water'=>$avgJson]);
                        $yearlydata = array_column($avgJson, 'av');
                        for ($i=0; $i < count($yearlydata); $i++) { 
                            $yearlydata[$i] = $yearlydata[$i]-'0';
                        }
                 



                        // monthly graph
                        // if ($_POST['option'] == 'Week') {
                                $from = date("Y-m-d", strtotime("first day of this month"));
                                $to = date("Y-m-d", strtotime("last day of this month"));

                                // $clientID = $_POST['userID'];

                                $sql = "select drinkConsumed,date from watertracker where clientID = '$clientID' and type='water' and date between '$from' and '$to';";

                                $result = mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($connection));
                                    
                                    $emparray = array();
                                    while($row =mysqli_fetch_assoc($result))
                                    {
                                        $emparray['date'] = date("d",strtotime($row['date']));
                                        $emparray['drinkConsumed'] = $row['drinkConsumed'];
                                        $full[] = $emparray;
                                    }
                                    // echo json_encode(['drinkConsumed' => $full]);
                                    $monthlydata = array_column($full, 'drinkConsumed');
                                    $monthlydate = array_column($full, 'date');
                                    for ($i=0; $i < count($monthlydata); $i++) { 
                                        $monthlydata[$i] = $monthlydata[$i]-'0';
                                    }
                            // $from = date("Y-m-d", strtotime("first day of this month"));
                            // $to = date("Y-m-d", strtotime("last day of this month"));

                            // // $clientID = $_POST['userID'];

                            // $clientID = "dilip";

                            // $sql = "SELECT * 
                            // FROM watertracker
                            // WHERE clientID='$clientID' AND `date` between '$from' and '$to' AND `time` IN (
                            // SELECT MAX(`time`) 
                            // FROM watertracker
                                
                            // GROUP BY DATE(`date`)
                            // );";

                            // $result = mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($connection));
                            //     $full=array();
                            //     $emparray = array();
                            //     while($row =mysqli_fetch_assoc($result))
                            //     {
                            //         $emparray['drink'] = $row['drinkConsumed'];
                            //         $emparray['date'] = date("d",strtotime($row['date']));
                            //         $full[] = $emparray;
                            //     }
                            //     echo json_encode(['water' => $full]);

                            // week graph
                            function date_compare($a, $b)
                                {
                                    $t1 = $a['date'];
                                    $t2 = $b['date'];
                                    return $t1 - $t2;
                                }
                            $from = date('Y-m-d', strtotime("-6 day"));

                            $to = date('Y-m-d');

                            $end = date('Y-m-d',strtotime("1 day"));

                            // $clientID = $_POST['userID'];

                            $clientID = "dilip";

                            $sql = "SELECT * 
                            FROM watertracker
                            WHERE clientID='$clientID' AND `date` between '$from' and '$to' AND `time` IN (
                            SELECT MAX(`time`) 
                            FROM watertracker
                                
                            GROUP BY DATE(`date`)
                            );";

                            $full = array();

                            $dateArr = array();

                            $dateArray = array();

                            $result = mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($connection));


                                $emparray = array();
                                while($row =mysqli_fetch_assoc($result))
                                {
                                    $emparray['drink'] = $row['drinkConsumed'];
                                    $emparray['date'] = date("d",strtotime($row['date']));
                                    $dateArray[] = date("d",strtotime($row['date']));
                                    $full[] = $emparray;
                                }

                                $missingDates = array();

                                $dateStart = date_create($from);
                                $dateEnd   = date_create($end);

                                $interval  = new DateInterval('P1D');
                                $period    = new DatePeriod($dateStart, $interval, $dateEnd);

                                foreach($period as $day) {
                                $formatted = $day->format("d");
                                // echo gettype($formatted);
                                if(!in_array($formatted, $dateArray)) {
                                    $missingDates['date'] = $formatted;
                                    $missingDates['drink'] = '0';
                                    $full[] = $missingDates;
                                }}

                                usort($full, 'date_compare');

                                // echo json_encode(['water' => $full]);
                                $weeklydata= array_column($full, 'drink');
                                $weeklydate = array_column($full, 'date');
                                for ($i=0; $i < count($weeklydata); $i++) { 
                                    $weeklydata[$i] = $weeklydata[$i]-'0';
                                }
                 ?>                         
                
                                <!-- Tab content -->
                                <div id="London" id="defaultOpen"class="tabcontent">
                                
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                                <canvas id="myChartwater"></canvas>
                                </div>

                                <div id="Year" class="tabcontent">
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                                <canvas id="myChartYearly"></canvas>
                                </div>

                                <div id="Month" class="tabcontent">
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                                <canvas id="myChartMonthly"></canvas>
                                </div>
                                
                                <div id="Week" class="tabcontent">
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                                <canvas id="myChartWeekly"></canvas>
                                </div>
                                       <script>
                                            function openCity(evt, cityName) {
                                                /* Declare all variables */
                                                var i, tabcontent, tablinks;
                    
                                                /* // Get all elements with class="tabcontent" and hide them */
                                                tabcontent = document.getElementsByClassName("tabcontent");
                                                for (i = 0; i < tabcontent.length; i++) {
                                                    tabcontent[i].style.display = "none";
                                                }
                    
                                                /* // Get all elements with class="tablinks" and remove the class "active" */
                                                tablinks = document.getElementsByClassName("tablinks");
                                                for (i = 0; i < tablinks.length; i++) {
                                                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                                                }
                    
                                                /* // Show the current tab, and add an "active" class to the button that opened the tab */
                                                document.getElementById(cityName).style.display = "block";
                                                evt.currentTarget.className += " active";
                                            }
                    
                                            /* // Get the element with id="defaultOpen" and click on it */
                                            document.getElementById("defaultOpen").click();
                                       </script> 
                               </div>
                </div>
            </div>
            <div id="inner2">
                <div class="inner21">
                    <div class="inner21-title">
                        Set Goals
                    </div>
                    <div class="inner21-image">
                        <img src="images/man_drinking_water.svg" alt="">
                    </div>
                    <div class="box-title">Daily Steps</div>
                    <div class="box-counter">
                    Goal:<input type="number" id="setgoalweight" name="weightgoal">
                    </div>
                    <buttpn id="setbut"class="box-btn">Set</buttpn>
                </div>
            </div>
        </div>

        <div id="wrapper-lower">
        <div class="row">
            <div class="col-sm-8">

                <div class="bottom-btns">
                    
                <div class="flex-container-bottom">
                <?php 
                //  water consumption data
                        // $userID = $_POST['userID'];

                        $userID = "Azarudeen";
                        
                        $stmnt = $conn -> prepare("SELECT SUM(drinkConsumed) FROM watertracker WHERE WEEKOFYEAR(cast(watertracker.date as DATE))=WEEKOFYEAR(NOW()) AND clientid=?");
                        
                        $stmnt-> bind_param("s",$userID);
                        $stmnt-> execute();
                        $stmnt-> bind_result($Sum);
                        
                        $products = array();
                        
                        while($stmnt->fetch()){
                        $temp = array();
                        
                        $temp['SumWeek']= $Sum;
                            
                        array_push($products,$temp);
                        }
                    
                        $stmnt = $conn -> prepare("SELECT SUM(drinkConsumed) FROM watertracker WHERE YEAR(cast(watertracker.date as DATE)) = YEAR(NOW()) AND MONTH(cast(watertracker.date as DATE))=MONTH(NOW()) AND clientid=?");
                        
                        $stmnt-> bind_param("s",$userID);
                        $stmnt-> execute();
                        $stmnt-> bind_result($Sum);
                        
                        while($stmnt->fetch()){
                        $temp = array();
                        
                        $temp['SumMonth']= $Sum;
                            
                        array_push($products,$temp);
                        }
                    
                        $stmnt = $conn -> prepare("SELECT SUM(drinkConsumed) FROM watertracker WHERE cast(watertracker.date as DATE)=CURRENT_DATE AND clientid=?");
                        
                        $stmnt-> bind_param("s",$userID);
                        $stmnt-> execute();
                        $stmnt-> bind_result($Sum);
                        
                        while($stmnt->fetch()){
                        $temp = array();
                        
                        $temp['SumDaily']= $Sum;
                            
                        array_push($products,$temp);
                        }
                    
                        $stmnt = $conn -> prepare("SELECT SUM(drinkConsumed)  FROM watertracker WHERE clientid=?");
                        
                        $stmnt-> bind_param("s",$userID);
                        $stmnt-> execute();
                        $stmnt-> bind_result($Sum);
                        
                        while($stmnt->fetch()){
                        $temp = array();
                        
                        $temp['SumTotal']= $Sum;
                       
                        array_push($products,$temp);
                        }
                    $waterWeek= array_column($products, 'SumWeek');
                    $waterMonth= array_column($products, 'SumMonth');
                    $waterDaily= array_column($products, 'SumDaily');
                    $waterTotal= array_column($products, 'SumTotal');
                   

                    $stmnt = $conn -> prepare("SELECT  goal FROM watertracker WHERE clientid=?");
                        
                        $stmnt-> bind_param("s",$userID);
                        $stmnt-> execute();
                        $stmnt-> bind_result($goal);
                        
                        while($stmnt->fetch()){
                        $temp = array();
                        
                       
                        $temp['goal']= $goal;
                        array_push($products,$temp);
                        }
                    $waterGoal= array_column($products, 'goal');
                    // if(count($products)>-1){
                    // echo json_encode($products);
                    // }
                    
                    // else {
                    // echo "failure";
                    // }
                
                ?>
                            <div class="bottom-stats-btn">
                                <div class="heart_info">
                                    <span>Daily Count</span>
                                    <span><span><?php echo (int)$waterDaily[0]?></span> Glasses</span>

                                </div>
                                
                            </div>

                            <div class="bottom-stats-btn">
                                <div class="heart_info">
                                    <span>Weekly Avg</span>
                                    <span><span><?php echo (int)($waterWeek[0]/7)?>  </span> Glasses</span>
                                </div>
                                
                            </div>
                    
                      
                      
                            <div class="bottom-stats-btn">
                                <div class="heart_info">
                                <span>Monthly Avg</span>
                                <span><span><?php echo (int)($waterMonth[0]/30)?>  </span> Glasses</span>
                                </div>
                             
                            </div>

                            <div class="bottom-stats-btn">
                                <div class="heart_info">
                                <span>Total</span>
                                <span><span><?php echo (int)$waterTotal[0]?>  </span> Glasses</span>
                                </div>
                                
                            </div>
                    </div>
                           
                </div>
                <div class="row">
                    <div class="col-sm-12">
                    <?php
                    //pastActivity
                    $today = date('Y-m-d');

                    $from = date('Y-m-d', strtotime('-8 days', strtotime($today)));
                    
                    $to = date('Y-m-d', strtotime('1 days', strtotime($today)));
                    
                    // $clientID = $_POST['clientID'];
                    
                    $clientID = "Azarudeen";
                    
                    // $sql = "SELECT * 
                    // FROM watertracker
                    // WHERE clientID='$clientID' AND `date` between '$from' and '$to' AND `time` IN (
                    //   SELECT MAX(`time`) 
                    //   FROM watertracker
                        
                    //   GROUP BY DATE(`date`)
                    //  );";
                    
                    $sql = "SELECT SUM(amount) ,date, type
                    FROM watertracker
                    WHERE clientID='$clientID' AND `date` between '$from' and '$to' GROUP BY Cast(date as date) ORDER BY Cast(date as date)";
                    
                    $result = mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($connection));
                    
                        $emparray = array();
                        while($row =mysqli_fetch_assoc($result))
                        {
                          $emparray['date'] = date("d-m-Y",strtotime($row['date']));
                          $emparray['water'] = $row['SUM(amount)'];
                          // $emparray['water'] = $row['drinkConsumed'];
                          $emparray['type'] = $row['type'];
                          $full[] = $emparray;
                        }
                        // echo json_encode(['water' => $full]);
                        $pastDate= array_column($full, 'date');
                        $pastWater= array_column($full, 'water');
                        $pastType= array_column($full, 'type');
                    ?>
                    <div class="table">
                        <div class="table_top">
                     <span>Past Activity</span>
                      </div>
                     
                     
                     <?php
                     $a=1;
                     for ($i=0; $i <4 ; $i++) { ?>
                         <div class="table_element">
                        <div class="date">
                        <span>Sep</span>
                        <p><?php echo $pastDate[$i]?></p>
                        </div>
                        <div class="table_activity">
                        <span>Water</span>
                        <p><?php echo $pastWater[$i]?></p>
                        <?php
                        echo ' </div>';
                        echo '<div class="table_time">';
                        echo '   <span>9:10 AM</span>';
                        echo ' </div>';
                        echo '</div>';
                     }

                     
                    
                     ?>
                    
                     
                      </div> 
               
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
            <div class="pheader">
						<h4>Daily Progress</h4>
						<p>View Activity</p>
					</div>
                <div class="cpb_box">
                    <div class="cpb">
                        <div role="progressbar" style="--value:<?php $value = (((int)$waterGoal[0]/$waterDaily[0])-1)*100; echo (int)$value; ?>"></div>
                        <img src="images/water_drop.svg" alt="">
                    </div>

                    <div class="cpb_box_right">
                        <div>
                                <span><?php  if(((int)$waterGoal[0]-$waterDaily[0])>=0){
                                    echo (int)$waterGoal[0]-$waterDaily[0];
                                    }
                                    else{
                                        echo 0;
                                    }
                                    ?> Glasses</span>                    
                                <span>Remaining</span>
                        </div>
                        <div>
                                <span>
                                <?php echo (int)$waterDaily[0]                                 ?> Glasses
                                </span>
                                <span>Consumed</span>
                        </div>
                     </div>
                </div>
              
                <div class="activity_pop">
                
                <?php
                   
                ?>
                <img src="images/exit.svg" alt="">
                    <div class="pop_header">
                        <span>Activity</span>
                    </div>
                    <?php 
                    for ($i=0; $i <6; $i++) { 
                        ?>
                   
                    <div class="pop_box">
                       <img src="images/mug.svg" alt="">
                        <div class="pop_box_info">
                            <span><?php echo $pastType[$i]?></span>
                            <p> <?php echo $pastWater[$i]?> ML</p>
                        </div>
                        <div class="pop_box_info">
                        <span><?php echo $pastDate[$i]?></span>
                            <p><?php echo $pastDate[$i]?></p>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                   

            </div>
        </div>
           
        </div>
    </div>
</body>
<script>
 var xValues = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];  
 var yValues = [1000, 2000, 3000, 5000, 2000, 5000, 6000];
 var xValuesY = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    var yValuesY = [<?php echo '"'.implode('","',  $yearlydata ).'"' ?>];
var xValuesM = [<?php echo '"'.implode('","',  $monthlydate ).'"' ?>];
var yValuesM = [<?php echo '"'.implode('","',  $monthlydata ).'"' ?>];
var xValuesW = [<?php echo '"'.implode('","',  $weeklydate ).'"' ?>];
var yValuesW = [<?php echo '"'.implode('","',  $weeklydata ).'"' ?>];

                    new Chart("myChartwater", {
                                type: "line",
                                data: {
                                    labels: xValues,
                                    datasets: [{
                                        fill: false,
                                        lineTension: 0,
                                        backgroundColor: "#63AEFF",
                                        borderColor: "#63AEFF",
                                        data: yValues
                                    }]
                                },
                                options: {
                                    legend: {
                                        display: true
                                    },
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                min: 0,
                                                max: 50
                                            }
                                        }],
                                    }
                                }
                            });
                        new Chart("myChartYearly", {
                                type: "line",
                                data: {
                                    labels: xValuesY,
                                    datasets: [{
                                        fill: false,
                                        lineTension: 0,
                                        backgroundColor: "#63AEFF",
                                        borderColor: "#63AEFF",
                                        data: yValuesY
                                    }]
                                },
                                options: {
                                    legend: {
                                        display: false
                                    },
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                min: 0,
                                                max: 50
                                            }
                                        }],
                                    }
                                }
                            });
                            
                            new Chart("myChartMonthly", {
                                type: "line",
                                data: {
                                    labels: xValuesM,
                                    datasets: [{
                                        fill: false,
                                        lineTension: 0,
                                        backgroundColor: "#63AEFF",
                                        borderColor: "#63AEFF",
                                        data: yValuesM
                                    }]
                                },
                                options: {
                                    legend: {
                                        display: false
                                    },
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                min: 0,
                                                max: 3500
                                            }
                                        }],
                                    }
                                }
                            });
                            new Chart("myChartWeekly", {
                                type: "line",
                                data: {
                                    labels: xValuesW,
                                    datasets: [{
                                        fill: false,
                                        lineTension: 0,
                                        backgroundColor: "#63AEFF",
                                        borderColor: "#63AEFF",
                                        data: yValuesW
                                    }]
                                },
                                options: {
                                    legend: {
                                        display: false
                                    },
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                min: 0,
                                                max: 50
                                            }
                                        }],
                                    }
                                }
                            });

</script>

</html>
