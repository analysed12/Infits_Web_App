<!--  DIET CHART OLD W/ POPUPS  -->
<?php session_start();?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Diet Chart</title>
	  
	  <link rel="stylesheet" href="https://fonts.googleapis.com/css2">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
        <style>

#content {
    overflow: auto;
    display: flex;
    flex-direction: column;
    height: 90%;
    font-family: 'Poppins';
    font-style: normal;
    padding: 10px;
    margin: 0px;
}
/*-------------------------DIET CHART---------------------------*/
    /* Style the tab */
    .tab {
    overflow:hidden;  
    background-color: white;
    flex-wrap: wrap;
    
    }
    @media (min-width: 0px) and (max-width: 720px) {
.tab{
  display: flex;
  flex-wrap: wrap;
}
    }

    /* Style the buttons inside the tab */
    .tab button {
    background-color: white;
    float: left;
    border: 1px solid #9C74F5;
    border-radius: 10px;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
    min-width: 200px;
    
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
    background-color: #9C74F5;
    color: white;
    }

    /* Create an active/current tablink class */
    .tab button.active {
    background-color: #9C74F5;
    color: white !important;
    }

    /* Style the tab content */
    .tabcontent {
    display: none;
    padding: 6px 12px;
    border-top: none;
    max-width: 95%;
    }

    .tab-box{
    box-shadow: 0px 8px 24px rgba(176, 190, 197, 0.32), 0px 3px 5px rgba(176, 190, 197, 0.32);
    border-radius: 10px;
    padding: 20px;
    margin-top: 15px;
    }
    .tab-submit{
    font-size: 20px;
    }

    .space-between-flex{
  display: flex;
  justify-content: space-around;
  display: flex;
  flex-wrap: wrap;
}
/*------------------PLUS BUTTON ------------------------ */
.add-btn {
  background-color: white;
  border: none;
  box-shadow: 0px 8px 24px rgba(176, 190, 197, 0.32), 0px 3px 5px rgba(176, 190, 197, 0.32);
  color: #DF6293;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
  width: 140px;
  border-radius: 10px;
}

/* Darker background on mouse-over */
.add-btn:hover {
  background-color: RoyalBlue;
}

/*--------------MODAL CSS------------------*/
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 50%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    /*position: relative;*/
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 40%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: black;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 5px;
    background-color: white;
    color: black;
    display: flex;
    align-items: center;
    justify-content: center;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}
    
    /*   days buttons  */
    .day-band{
      display: flex;
      flex-direction: row;
      justify-content: space-around;
      flex-wrap: wrap;
      width: 80%;
    }
    .day{
      color: black;
      padding: 10px;
      border:none;
      background: none;
    }
    .day:hover{
      color:white;
      background:#9C74F5;
      border-radius:10px;
    }
</style>
</head>

<div id="page">
    <!--------------sidenav------------------------->
    <?php include 'event_calendar.php'; ?>

    <div id="content">
      <!------------------------------------------------DASHBOARD--------------------------------------------------------->
      <h1 style="font-size: 32px; color: #202224; font-weight: 600;">Diet Chart</h1>
      <p>!!! client name !!!</p>

    <!------------------days of the week----------------->
    <center>
<div class="day-band">
  <button class="day">Mon</button>
  <button class="day">Tue</button>
  <button class="day">Wed</button>
  <button class="day">Thu</button>
  <button class="day">Fri</button>
  <button class="day">Sat</button>
  <button class="day">Sun</button>
</div>

  </center>
    <br>

        <!------------------food of the day----------------->

    <div id="content">
    <div class="tab">
        <div class="space-between-flex">
        <button class="tablinks" onclick="openTab(event, 'Breakfast')">Breakfast</button>
        <button class="tablinks" onclick="openTab(event, 'Lunch')">Lunch</button>
        <button class="tablinks" onclick="openTab(event, 'Snack')">Snack</button>
        <button class="tablinks" onclick="openTab(event, 'Dinner')">Dinner</button>
      </div>
    </div>
      
      <div id="Breakfast" class="tabcontent">
        <div class="tab-box">
            <p style="color:black; font-size: 25px;"> In Morning</p>

            <!-- Trigger/Open The Modal -->
            <button class="modal-button" href="#myModal1">Open Modal</button>

            <!-- The Modal -->
            <div id="myModal1" class="modal">

              <!-- Modal content -->
              <div class="modal-content">
              <div class="modal-header">
                  <span class="close">×</span>
                  <center><h2>Choose Template</h2></center>
                </div>
                <div class="modal-body">
                    <img src="images/add_btn.svg" style="padding: 15px;">

                </div>
              </div>
            </div>
        </div>
      </div>
      
      <div id="Lunch" class="tabcontent">
        <div class="tab-box">
            <p style="color:black; font-size: 25px;"> Afternoon</p>
            <!-- Trigger/Open The Modal -->
            <button class="modal-button" href="#myModal2">Open Modal</button>

            <!-- The Modal -->
            <div id="myModal2" class="modal">

              <!-- Modal content -->
              <div class="modal-content">
              <div class="modal-header">
                  <span class="close">×</span>
                  <h2>Choose Template</h2>
                </div>
                <div class="modal-body">
                  <div class="dashed-border">
                    <img src="images/add_btn.svg" style="padding: 15px;">
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
      
      <div id="Snack" class="tabcontent">
        <div class="tab-box">
            <p style="color:black; font-size: 25px;">Snack</p>
            <?php include 'diet_chart_popup.php'; ?>
        </div>
      </div>

      <div id="Dinner" class="tabcontent">
        <div class="tab-box">
            <p style="color:black; font-size: 25px;"> Dinner</p>
            <?php include 'diet_chart_popup.php'; ?>
        </div>
      </div>
      
      <script>
      function openTab(evt, food) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(food).style.display = "block";
        evt.currentTarget.className += " active";
      }
      </script>
        

        <script>// Get the button that opens the modal
        var btn = document.querySelectorAll("button.modal-button");

        // All page modals
        var modals = document.querySelectorAll('.modal');

        // Get the <span> element that closes the modal
        var spans = document.getElementsByClassName("close");

        // When the user clicks the button, open the modal
        for (var i = 0; i < btn.length; i++) {
        btn[i].onclick = function(e) {
            e.preventDefault();
            modal = document.querySelector(e.target.getAttribute("href"));
            modal.style.display = "block";
        }
        }

        // When the user clicks on <span> (x), close the modal
        for (var i = 0; i < spans.length; i++) {
        spans[i].onclick = function() {
            for (var index in modals) {
              if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";    
            }
        }
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target.classList.contains('modal')) {
            for (var index in modals) {
              if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";    
            }
            }
        }
        //keep page from refreshing
        function m_display(){
            event.preventDefault();
            modal.style.display ="block";
        }
        </script>

        <br><br>
    <button type="button" class="btn btn-primary btn-lg btn-block" style="background-color: #9C74F5">Save Plan</button>
    <br>
          </div>
		</div>
</div>

  </body>
</html>