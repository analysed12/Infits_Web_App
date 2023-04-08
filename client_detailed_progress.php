<?php
include('navbar.php');
$name = '';
if(isset($_POST['searching_btn'])){
  $name = $_POST['search_client_name'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
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
    margin-bottom:1.5rem;
    
}
.detailed_progress_container1{
    display: flex;
}

.container1_leftside{
    margin-left: 3rem;
    margin-top: 2rem;
}
.search_client{ 
    margin: 1.5rem;
    margin-top: 2.5rem;
    width: 23rem; 
    color: #ACACAC;   
    background-color:white;
    box-shadow: 0.6px 0.6px 2px 1px #ccc;
    border-radius:0.6rem;
    font-size: medium;
    border: none;
    display: flex;
    gap:1rem;
    padding-top: 0.5rem;
    padding-right: 0.5rem;
    
}
#btn1{
    width: auto;
    background-color:white;
    border: none; 
    color: #ACACAC;    
}
.seach_clients_text{
  border: none;  
}
.track_buttons{
  margin-left: 1rem;
  margin-top:4rem;
  display:flex;
  gap:1rem;
}
#btn2{
    background: none;
    color: black;
    border: none;
    font-size: larger;
    font-weight: 500;
    padding: 0.5rem;
    padding-left: 2rem;
    padding-right: 2rem;
    font-size: 1.6rem;

}
#btn2:hover{
    border-bottom:0.25rem solid #4B9AFB; 
}
#btn2:focus{
  border-bottom:0.25rem solid #4B9AFB; 

}
.container1_rightside{
    margin-left: 28.5rem;
    margin-top:38px;
}
.container2_wrapper1{
  width: 70rem;
  display: flex;
  gap: 3rem;
  padding: 0.4rem;
  padding-left:1.5rem;
  border-radius: 0.7rem;
  background-color: #FDFDFD;
  margin-left: 20rem;
  border: 2px solid #F4F4F4;
  margin-top:1.3rem;
  font-weight:500;
  font-size: 1.3rem;
}
.info{
  display: flex;
  flex-direction: column;

}
.symbols{
  display: flex;
}
.detailed_progress_container2{
  display: none;
}
.table{
  visibility: hidden;
}

.search_client:hover + .table{
  visibility: visible;
}


/* Calender css starts */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
.wrapper{
  width: 300px;
  background: #fff;
  border-radius: 10px;
  border: 2px solid #CCCCCC; 
  margin-top: 0.5rem;
}
.wrapper header{
  display: flex;
  align-items: center;
  padding: 0.5rem;
  justify-content: space-between;
 
}
header .icons{
  display: flex;
}
header .icons span{
  height: 38px;
  width: 38px;
  margin: 0 1px;
  cursor: pointer;
  color: #878787;
  text-align: center;
  line-height: 38px;
  font-size: 1.9rem;
  user-select: none;
  border-radius: 50%;
}
.icons span:last-child{
  margin-right: -10px;
}
header .icons span:hover{
  background: #f2f2f2;
}
header .current-date{
  font-size: 1.45rem;
  font-weight: 500;
}
.calendar{
  padding: 1px;
}
.calendar ul{
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  text-align: center;
  
}
.weeks{
    margin-bottom:0%;
}
.calendar .days{
  margin-bottom: 20px;
  
}
.calendar li{
  color: #333;
  width: calc(90% / 7);
  font-size: 1.3rem;
  font-weight: 600;
}
.calendar .weeks li{
  font-weight: 500;
  cursor: default;
 
}
.calendar .days li{
  z-index: 1;
  cursor: pointer;
  position: relative;
  margin-top: 10px;
  font-size: 0.9rem;
}
.days li.inactive{
  color: #aaa;
}
.days li.active{
  color: #fff;
}
.days li::before{
  position: absolute;
  content: "";
  left: 50%;
  top: 50%;
  height: 40px;
  width: 40px;
  z-index: -1;
  border-radius: 50%;
  transform: translate(-50%, -50%);
  color: black;
}
.days li.active::before{
  background: #a6b0fc;
}
.days li:not(.active):hover::before{
  border: 2px solid #7282FB;
}
.mobview_progressdetails{
  display: none;
}

.steps{
  margin-top: 1rem;
}
@media screen and (min-width: 720px) and (max-width: 1500px)  {
  .detailed_progress_container1{
    display: flex;
    flex-direction: column;
    gap: 2rem;
    }
  .container1_leftside p {
    margin-left: 1.8rem;
  }
  
  .container1_leftside .search_client {
   width: 300px;
   margin-left: -2px;
   margin-right: 40px;
  }
  .container1_rightside{
    margin-left:auto;
    margin-top: -190px;
    margin-right: 20px;
  }     
 
.wrapper{
  width: 300px;
}
.track_buttons{
  margin-left: 1.6rem;
  margin-top: 2rem;
  justify-content:space-between !important;
  margin-right: 40px;
  }
.webview_progressdetails{
display: none;
}
.mobview_progressdetails{
  display: flex;
  flex-direction: column;
  overflow-x: auto;
  gap: 3rem;
  
}
.mobview_container1{
  display: inline-block;
  margin-left: 10px;
 justify-content:center;
}
.mob_container1_wrapper1{
  border: 1px;
  width: 250px;
  border-radius: 10px;
  justify-content: center;
  box-shadow:0.6px 0.6px 2px 1px #ccc;
  display:inline-block;
  margin-left:20px;
  margin-top:15px;
}
.steps{
 margin-left: 25px;
}
#track{
  display:none;
}

}
@media screen and (min-width: 720px) and (max-width: 900px) {
  .container1_rightside{
    margin-left: 3rem;
    margin-top: 4px;
       
}
}
@media screen and (min-width: 0px) and (max-width: 720px)  {
  .detailed_progress_container1{
    display: flex;
    flex-direction: column;
    gap: 2rem;
    }
  .container1_leftside p {
    margin-left: 00.7rem;
  }
  
  .container1_leftside .search_client {
   width: 280px;
   margin-left: 10px;
  }
  .container1_rightside{
    margin-left: 3rem;
    margin-top: 4px;
       
}
.track_buttons{
  margin-left:2.2rem;
  margin-top: 2rem;
  justify-content:space-between !important;
  margin-right: 40px;
 
}

.webview_progressdetails{
  display: none;
}
.mobview_progressdetails{
  display: inline-block;
  gap: 3rem;
  
}
.mobview_container1{
  display:inline-block;
  margin-left: 80px;
 justify-content:center;
}
.mob_container1_wrapper1{
  border: 1px;
  width: 250px;
  border-radius: 10px;
  justify-content: center;
  box-shadow:0.6px 0.6px 2px 1px #ccc;
  margin-right: 10px;
  margin-top: 15px;
  margin-left:-15px;
}

.steps{
 margin-left: 25px;
}
#track{
  display:none;
}

}
    </style>
</head>
<body>
    <div class="client_detailed_progress">


        <div class="detailed_progress_container1">
            <div class="container1_leftside">
                <p style="font-size:2rem;font-weight:700">Client Progress Details</p>
               
                
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <div class="search_client">
                <div><button id="btn1" type = "submit" name  = "searching_btn"><span class="material-symbols-outlined">search</span></button> </div>
                    <div> <input type="text" name="search_client_name" oninput="load_data(this.value)" id = "search_bar" placeholder="Search Clients" class="seach_clients_text"  autocomplete="off"></div>  
                    </div>
                </form> 
                <table class = "table" id = "recommendBox">
                <tbody id = "table_data">
                </tbody>
                </table>   
                
                <div class="track_buttons" id="track">
                        <button id="btn2" onclick="myFunction()">On-Track</button>
                        <button id="btn2" onclick="myFunction2()">Off-Track</button>
                </div>

                
                
            </div>
           

<!---------------callender code--------------->

            <div class="container1_rightside">
                <div class="wrapper">
                    <header>
                        <p style="margin-left:1.5rem" class="current-date"></p>
                        <div class="icons">
                        <span id="prev" class="material-symbols-rounded">chevron_left</span>
                        <span id="next" class="material-symbols-rounded">chevron_right</span>
                        </div>
                    </header>
                    <div class="calendar">
                        <ul class="weeks">
                        <li>S</li>
                        <li>M</li>
                        <li>T</li>
                        <li>W</li>
                        <li>T</li>
                        <li>F</li>
                        <li>S</li>
                        </ul>
                        <ul class="days"></ul>
                    </div>
                </div>

                <script>
                    const daysTag = document.querySelector(".days"),
                    currentDate = document.querySelector(".current-date"),
                    prevNextIcon = document.querySelectorAll(".icons span");

                    // getting new date, current year and month
                    let date = new Date(),
                    currYear = date.getFullYear(),
                    currMonth = date.getMonth();

                    // storing full name of all months in array
                    const months = ["January", "February", "March", "April", "May", "June", "July",
                                "August", "September", "October", "November", "December"];

                    const renderCalendar = () => {
                        let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(), // getting first day of month
                        lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(), // getting last date of month
                        lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(), // getting last day of month
                        lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate(); // getting last date of previous month
                        let liTag = "";

                        for (let i = firstDayofMonth; i > 0; i--) { // creating li of previous month last days
                            liTag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
                        }

                        for (let i = 1; i <= lastDateofMonth; i++) { // creating li of all days of current month
                            // adding active class to li if the current day, month, and year matched
                            let isToday = i === date.getDate() && currMonth === new Date().getMonth() 
                                        && currYear === new Date().getFullYear() ? "active" : "";
                            liTag += `<li class="${isToday}">${i}</li>`;
                        }

                        for (let i = lastDayofMonth; i < 6; i++) { // creating li of next month first days
                            liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`
                        }
                        currentDate.innerText = `${months[currMonth]} ${currYear}`; // passing current mon and yr as currentDate text
                        daysTag.innerHTML = liTag;
                    }
                    renderCalendar();

                    prevNextIcon.forEach(icon => { // getting prev and next icons
                        icon.addEventListener("click", () => { // adding click event on both icons
                            // if clicked icon is previous icon then decrement current month by 1 else increment it by 1
                            currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;

                            if(currMonth < 0 || currMonth > 11) { // if current month is less than 0 or greater than 11
                                // creating a new date of current year & month and pass it as date value
                                date = new Date(currYear, currMonth, new Date().getDate());
                                currYear = date.getFullYear(); // updating current year with new date year
                                currMonth = date.getMonth(); // updating current month with new date month
                            } else {
                                date = new Date(); // pass the current date as date value
                            }
                            renderCalendar(); // calling renderCalendar function
                        });
                    });
                                    
                </script>
    
                
            </div>
            
        </div>
        
<!--------------------------------------- webview of progress details--------------------------------------------------->

        
                    
                    <script>
                    function myFunction() {
                    var x = document.getElementById("container2");
                    var y = document.getElementById("container3");
                    
                    if (x.style.display === "block") {
                        x.style.display = "none";
                    } else {
                        x.style.display = "block";
                        y.style.display = "none";
                    }
                    }
                    function myFunction2() {
                    var x = document.getElementById("container3");
                    var y = document.getElementById("container2");
                    if (x.style.display === "block") {
                        x.style.display = "none";
                    } else {
                        x.style.display = "block";
                        y.style.display = "none";
                    }
                    }
                </script>

<?php
              $conn = new mysqli("localhost", "root", "", "infits");
              if($conn->connect_error){
                die("Connection failed :" . $conn->connect_error);
              }
              $on = array();
              $off = array();
              if($name != ''){
              $sql = "SELECT * FROM `goals` WHERE dietition_id = 'Jane' AND client_id LIKE '%$name%'" ;
              }
              else{
                $sql = "SELECT * FROM `goals` WHERE dietition_id = 'Jane'";
              }
              

             
              $result =$conn-> query($sql);
              $i=0;
              if ($result->num_rows > 0) 
              {
               
                while($row = $result->fetch_assoc())
                      {
                        $c_id = $row['client_id'];
                        $q = "SELECT clientUserID FROM `dietitian_client` WHERE  `Client_id` = $c_id";
                        $res =$conn-> query($q);
                        $c_name = mysqli_fetch_array($res);
                        $cname = $c_name['clientUserID'];
                        $on[$i]['name'] = $cname;
                        $off[$i]['name'] = $cname;
                         $dat = date('Y-m-d');
                        //some changes is needed while linking.

                        //for steps 
                        $step = "SELECT steps FROM `steptracker` WHERE clientid = '$cname' AND `dateandtime` >= '{$dat} 00:00:00' AND `dateandtime` < '{$dat} 23:59:59'";
                        // $step = "SELECT steps FROM `steptracker` WHERE clientid = '1' AND `dateandtime` >= '{$dat} 00:00:00' AND `dateandtime` < '{$dat} 23:59:59'";
                       
                        $stepgoal =$conn-> query($step);
                        $stepgoal1 = mysqli_fetch_assoc($stepgoal);
                        if($stepgoal1 != null){

                        
                        if($stepgoal1['steps'] >= $row['steps']){
                            $on[$i]['steps'] = $stepgoal1['steps'];
                            $off[$i]['steps'] = '-1';
                        }
                        else{
                            $on[$i]['steps'] ='-1';
                            $off[$i]['steps'] = $stepgoal1['steps'];
                        }
                      }
                      else{
                        $on[$i]['steps'] ='-1';
                            $off[$i]['steps'] = '-1';
                      }

                        //for heart rate
                        $heart = "SELECT average FROM `heartrate` WHERE clientID = '$cname' AND `dateandtime` >= '{$dat} 00:00:00' AND `dateandtime` < '{$dat} 23:59:59'";
                        // $heart = "SELECT average FROM `heartrate` WHERE clientID = '3' AND `dateandtime` >= '{$dat} 00:00:00' AND `dateandtime` < '{$dat} 23:59:59'";
                        $heartgoal =$conn-> query($heart);
                        $heartgoal1 = mysqli_fetch_assoc($heartgoal);
                        if ($heartgoal1 != null)
                        {
                            if($heartgoal1['average'] >= $row['heart']){
                                $on[$i]['heart'] = $heartgoal1['average'];
                                $off[$i]['heart'] = '-1';
                            }
                            else{
                              $on[$i]['heart'] ='-1';
                              $off[$i]['heart'] = $heartgoal1['average'];
                            }
                      }
                      else{
                        $on[$i]['heart'] ='-1';
                        $off[$i]['heart'] = '-1';
                      }

                        //for weight 
                        $weight = "SELECT goal FROM `weighttracker` WHERE clientID = '$cname' AND `date` >= '{$dat} 00:00:00' AND `date` < '{$dat} 23:59:59'";
                        // $weight = "SELECT goal FROM `weighttracker` WHERE clientID = '3' AND `date` >= '{$dat} 00:00:00' AND `date` < '{$dat} 23:59:59'";
                        $weightgoal =$conn-> query($weight);
                        $weightgoal1 = mysqli_fetch_assoc($weightgoal);
                        if($weightgoal1 != null){
                        if($weightgoal1['goal'] >= $row['weight']){
                            $on[$i]['weight'] = $weightgoal1['goal'];
                            $off[$i]['weight'] = '-1';
                        }
                        // 
                        else{
                          
                          $on[$i]['weight'] ='-1';
                          $off[$i]['weight'] = $weightgoal1['goal'];
                        }
                      }
                      else{
                        $on[$i]['weight'] ='-1';
                          $off[$i]['weight'] = '-1';
                      }

                        

                        //for sleep 
                        $sleep = "SELECT hrsSlept FROM `sleeptracker` WHERE clientID = '$cname' AND `sleeptime` >= '{$dat} 00:00:00' AND `sleeptime` < '{$dat} 23:59:59'";
                        // $sleep = "SELECT hrsSlept FROM `sleeptracker` WHERE clientID = '3' AND `sleeptime` >= '{$dat} 00:00:00' AND `sleeptime` < '{$dat} 23:59:59'";
                        $sleepgoal =$conn-> query($sleep);
                        $sleepgoal1 = mysqli_fetch_assoc($sleepgoal);
                        if($sleepgoal1 != null){
                        if($sleepgoal1['hrsSlept'] >= $row['sleep']){
                            $on[$i]['sleep'] = $sleepgoal1['hrsSlept'];
                            $off[$i]['sleep'] = '-1';
                        }
                        else{
                          $on[$i]['sleep'] ='-1';
                          $off[$i]['sleep'] = $sleepgoal1['hrsSlept'];
                        }
                      }
                      else{
                        $on[$i]['sleep'] ='-1';
                          $off[$i]['sleep'] ='-1';
                      }


                  $i++;
                  }
              }
              
              ?>




<div class="webview_progressdetails">

            <div class="detailed_progress_container2" id="container2">
                <div class="container2_wrapper1">
                <?php
                      foreach($on as $r){
                        if($r['steps']!= '-1' || $r['heart']!= '-1' || $r['weight']!= '-1' || $r['sleep']!= '-1' ){
                           echo('<div style="margin-top:0.5rem"><span><img src="images/ronald.jpg" style="width:2rem; background-color:#f8f6f6;border-radius:1rem;margin-right:0.5rem">Client '.$r["name"].'</span></a></span></div>');
                        }
                        if($r['steps']!= '-1'){
                         
                          echo(' <div class="info"><span>Steps</span> <div class="symbols"><div><img src="images/orange.png" alt=""></div><div style="margin-top:0.1rem"><span style="margin-left:0.5rem">'.$r["steps"].' steps</span></div></div></div>');
                        }
                        if($r['heart']!= '-1'){
                         
                          echo(' <div class="info"><span>Heart Rate</span> <div class="symbols"><div><img src="images/pink.png" alt=""></div><div style="margin-top:0.1rem"><span style="margin-left:0.5rem">'.$r["heart"].' bpm</span></div></div></div>');
                        }
                        if($r['weight']!='-1'){
                         
                          echo('<div class="info"><span>Weight</span> <div class="symbols"><div><img src="images/blue.png" alt=""></div><div style="margin-top:0.1rem"><span style="margin-left:0.5rem">'.$r["weight"].' Kgs</span></div></div></div>');
                        }
                        if($r['sleep']!= '-1' ){
                          echo('<div class="info"><span>Sleep</span> <div class="symbols"><div><img src="images/purple.png" alt=""></div><div style="margin-top:0.1rem"><span style="margin-left:0.5rem">'.$r["sleep"].' hours</span></div></div></div>');
                        }
                      }
                ?>
                  
                </div>

                
            </div>

            
            <div class="detailed_progress_container2" id="container3">
                <div class="container2_wrapper1">
                <?php
                      foreach($off as $r){
                        if($r['steps']!='-1' || $r['heart']!='-1' || $r['weight']!='-1' || $r['sleep']!='-1' ){
                          // echo("hi");
                           echo('<div style="margin-top:0.5rem"><span><img src="images/ronald.jpg" style="width:2rem; background-color:#f8f6f6;border-radius:1rem;margin-right:0.5rem"> Client  '.$r["name"].'</span></a></span></div>');
                        }
                        // echo("hiiii");
                        if($r['steps']!='-1'){
                          // echo("bue steps");
                          echo('<div class="info"><span>Steps</span> <div class="symbols"><div><img src="images/orange.png" alt=""></div><div style="margin-top:0.1rem"><span style="margin-left:0.5rem">'.$r["steps"].' steps</span></div></div></div>');
                        }
                        if($r['heart']!='-1'){
                          
                          echo('<div class="info"><span>Heart Rate</span> <div class="symbols"><div><img src="images/pink.png" alt=""></div><div style="margin-top:0.1rem"><span style="margin-left:0.5rem">'.$r["heart"].' bpm</span></div></div></div>');
                        }
                        if($r['weight']!='-1'){
                         
                          echo('<div class="info"><span>Weight</span> <div class="symbols"><div><img src="images/pink.png" alt=""></div><div style="margin-top:0.1rem"><span style="margin-left:0.5rem">'.$r["weight"].' kgs</span></div></div></div>');
                        }
                        if($r['sleep']!='-1'){
                         
                          echo('<div class="info"><span>Sleep </span> <div class="symbols"><div><img src="images/pink.png" alt=""></div><div style="margin-top:0.1rem"><span style="margin-left:0.5rem">'.$r["sleep"].' hours</span></div></div></div>');
                        }
                        
                      }
                ?>
                  <!-- <div style="margin-top:0.5rem"><span><img src="images/ronald.jpg" style="width:2rem; background-color:#f8f6f6;border-radius:1rem;margin-right:0.5rem"><b>Ronald Richards</b></span></a></span></div>
                  <div class="info"><span>Steps</span> <div class="symbols"><div><img src="images/orange.png" alt=""></div><div style="margin-top:0.1rem"><span style="margin-left:0.5rem">2356 steps</span></div></div></div>
                  <div class="info"><span>Heart Rate</span> <div class="symbols"><div><img src="images/pink.png" alt=""></div><div style="margin-top:0.1rem"><span style="margin-left:0.5rem">150 bpm</span></div></div></div>
                  <div class="info"><span>Weight</span> <div class="symbols"><div><img src="images/blue.png" alt=""></div><div style="margin-top:0.1rem"><span style="margin-left:0.5rem">1.6kg</span></div></div></div>
                  <div class="info"><span>Sleep</span> <div class="symbols"><div><img src="images/purple.png" alt=""></div><div style="margin-top:0.1rem"><span style="margin-left:0.5rem">7 hrs</span></div></div></div> -->
                </div>

               


            
        </div>



        <!--------------------------------------- mobview of progress details--------------------------------------------------->

        <div class="mobview_progressdetails">
                    <div class="track_buttons">
                        <button id="btn2" onclick="myFunction3()">On-Track</button>
                        <button id="btn2" onclick="myFunction4()">Off-Track</button>
                    </div>

                    <script>
                    function myFunction3() {
                    var x = document.getElementById("container4");
                    var y = document.getElementById("container5");
                    
                    if (x.style.display === "block") {
                        x.style.display = "none";
                    } else {
                        x.style.display = "block";
                        y.style.display = "none";
                    }
                    }
                    function myFunction4() {
                    var x = document.getElementById("container5");
                    var y = document.getElementById("container4");
                    if (x.style.display === "block") {
                        x.style.display = "none";
                    } else {
                        x.style.display = "block";
                        y.style.display = "none";
                    }
                    }
                </script>


            <div class="mobview_container1" id="container4">
                    <div class="mob_container1_wrapper1" >
                            <span><a href="" style=" color:black;font-weight:500; border:none; margin-top:1rem;background-color:white; margin-left:1rem"><span><img src="images/ronald.jpg" style="width:2rem;border-radius:1rem"> Ronald Richards</span></a></span>
                            <div class="row1" style="display:flex ; gap:2rem ">
                                    <div class="steps">
                                        <div class="symbols">
                                        <div style="color:#F6A682"><span class="material-symbols-outlined">footprint</span></div><div style="margin-top:0.2rem; font-weight:500"><span>Steps</span></div></div>
                                        <span style="font-size:0.9rem;color:#454545">5256 steps</span>
                                    </div>
                                    <div class="steps">
                                        <div class="symbols">
                                        <div style="color:#EF80B2"><span class="material-symbols-outlined">monitor_heart</span></div><div style="margin-top:0.2rem; font-weight:500"><span>Heart Rate</span></div></div>
                                        <span style="font-size:0.9rem;color:#454545">150 bpm</span>
                                    </div>
                            </div>

                            <div class="row2" style="display:flex ; gap:2rem">
                                    <div class="steps">
                                        <div class="symbols">
                                        <div style="color:#788F96"><span class="material-symbols-outlined">weight</span></div><div style="margin-top:0.2rem; font-weight:500"><span>Weight</span></div></div>
                                        <span style="font-size:0.9rem;color:#454545">1.6 kg</span>
                                    </div>
                                    <div class="steps">
                                        <div class="symbols">
                                        <div style="color:#7550E2"><span class="material-symbols-outlined">bedtime</span></div><div style="margin-top:0.2rem; font-weight:500"><span>Sleep</span></div></div>
                                        <span style="font-size:0.9rem;color:#454545">7 hrs.</span>
                                    </div>
                            </div>
                     </div>
                    
                   
                       
            </div>

            <div class="mobview_container1" id="container5">
                    <div class="mob_container1_wrapper1" >
                                    <span><a href="" style=" color:black;font-weight:500; border:none; margin-top:1rem;background-color:white; margin-left:1rem"><span><img src="images/ronald.jpg" style="width:2rem;border-radius:1rem"> Ronald Richards</span></a></span>
                                    <div class="row1" style="display:flex ; gap:2rem ">
                                            <div class="steps">
                                                <div class="symbols">
                                                <div style="color:#F6A682"><span class="material-symbols-outlined">footprint</span></div><div style="margin-top:0.2rem; font-weight:500"><span>Steps</span></div></div>
                                                <span style="font-size:0.9rem;color:#454545">2356 steps</span>
                                            </div>
                                            <div class="steps">
                                                <div class="symbols">
                                                <div style="color:#EF80B2"><span class="material-symbols-outlined">monitor_heart</span></div><div style="margin-top:0.2rem; font-weight:500"><span>Heart Rate</span></div></div>
                                                <span style="font-size:0.9rem;color:#454545">150 bpm</span>
                                            </div>
                                    </div>

                                    <div class="row2" style="display:flex ; gap:2rem">
                                            <div class="steps">
                                                <div class="symbols">
                                                <div style="color:#788F96"><span class="material-symbols-outlined">weight</span></div><div style="margin-top:0.2rem; font-weight:500"><span>Weight</span></div></div>
                                                <span style="font-size:0.9rem;color:#454545">1.6 kg</span>
                                            </div>
                                            <div class="steps">
                                                <div class="symbols">
                                                <div style="color:#7550E2"><span class="material-symbols-outlined">bedtime</span></div><div style="margin-top:0.2rem; font-weight:500"><span>Sleep</span></div></div>
                                                <span style="font-size:0.9rem;color:#454545">7 hrs.</span>
                                            </div>
                                    </div>
                    </div>


                    
                 



                 
            </div>
      </div>
  </div>
    

  <script>

function load_data(search = ''){
   let xhr = new XMLHttpRequest();
  xhr.open("GET", "searching.php?search="+search,true);
  xhr.onload = function(){
      // console.log(xhr.responseText);
      document.getElementById('table_data').innerHTML = xhr.responseText;
  }
   xhr.send();



}

load_data();


// const searchBar = document.querySelector('#search_bar');
// const recommendationBox = document.querySelector('#recommendBox');

// searchBar.addEventListener('focus', function() {
//   recommendationBox.classList.remove('recommendBox');
// });

// searchBar.addEventListener('blur', function() {
//   recommendationBox.classList.add('recommendBox');
// });




 
  </script>
</body>
</html>