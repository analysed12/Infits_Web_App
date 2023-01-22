<?php
session_start();
// $conn = new mysqli("localhost", "root", "", "infits");

// if($conn->connect_error){
//     die("Connection failed :" . $conn->connect_error);
// }
//$query="SELECT name FROM dietitian WHERE deititianuserId = 'John_wayne'";
//$result = $conn->query($query) or die("Query Failed");
//$_SESSION["clientName"] = "$query";
//$conn->close();
// $_SESSION["clientName"] = "John Wayne";
$name =  explode(" ", $_SESSION["clientName"] );
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infits | Dietician Profile</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    
    <style>

#content {
    display: flex;
    flex-direction: column;
    height: 90%;
    font-family: 'Poppins';
    font-style: normal;
    padding: 10px;
    margin: 0px;
}

.dietician-box{
  display: flex;
  flex-direction: row;
}

.view-message{
  border-radius: 10px; 
  background: #4B9AFB; 
  color: white; 
  padding: 10px; 
  margin: 5px; 
  border: none;
}

.events{
  display: flex;
  flex-direction: column;
}
.container {
  padding: 32px;
  display: flex;
  flex: 1;
}
.card {
  padding: 16px;
  margin: 16px;
  border: 1px solid #eee;
  box-shadow: 2px 4px 16px rgba(0,0,0,.06);
  border-radius: 10px;
  
  background-color: #EFF8FF;
  color: black;
  height: 200px;
  width: 400px !important;
}
.time{
  display: flex;
  justify-content: flex-end;
  font-size: 18px;
  font-weight: 400;
}
.pp, .text{
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 18px;
  font-weight: 500;
  margin-top: 5px;
}
.join-button{

  background: white;
  border: 1px solid #4B9AFB;
  border-radius: 30px;
  color: black;
  box-shadow: 2px 4px 16px rgba(0,0,0,.2);
  color: #4B9AFB;
  padding: 8px 16px;
  border-radius: 20px;
  margin-top: 25px;
  font-size: 15px;
}

.space-between-flex{
  display: flex;
  justify-content: space-between;
}

.center-flex{
display: flex;
align-items: center;
justify-content: center;
}
    
</style>
</head>

<body>
<?php include 'event_calendar.php'; ?>

<div id="content">
      <!------------------------------------------------DASHBOARD--------------------------------------------------------->
      <div class="dietician-box">

        <img src="images/pp2.png" height="80px" style="margin-right: 20px;">
          <div class="task-text">
            <h1 style="font-size: 16px; color: grey; font-weight: 400; margin-bottom: 0;">Welcome Back</h1>
             <h3 style="font-size: 24px; color: #202224; font-weight: 500; margin:0px ;"><var><?php echo($name[0].'<br>'.$name[1]) ?></var></h3>
          </div>
        </div>

      <!-----------------------------------------------EVENTS--------------------------------------------------------->
<br>
<div class="space-between-flex">
  <h3 style="font-size: 24px; color: #202224; font-weight: 500; margin-bottom:0px ;">Upcoming Consultations</h3>
  <a href="#"><img src="images/vec_rt_arrow.png" height="15px" style="margin-top: 30px;"></a>
 </div>
      


        <div class="events">
          <div class="container">
            <div class="card" style="background-color: #4B9AFB;">
              <div class="time">5.00PM</div>
              <div class="pp"><img src="images/pp2.png"></div>
              <div class="text" style="color: white;">Michael Simpson</div>
              <div class="center-flex">
                <button class="join-button">Join the Call</button>
              </div>
            </div>

            <div class="card">
              <div class="time">5.00PM</div>
              <div class="pp"><img src="images/pp2.png"></div>
              <div class="text">Live Class</div>
              <div class="center-flex">
                <button class="join-button">Join the Call</button>
              </div>
            </div>

            <div class="card">
              <div class="time">5.00PM</div>
              <div class="pp"><img src="images/pp2.png"></div>
              <div class="text">Client Meeting</div>
              <div class="center-flex">
                <button class="join-button">Join the Call</button>
              </div>
            </div>

            <div class="card">
              <div class="time">5.00PM</div>
              <div class="pp"><img src="images/pp2.png"></div>
              <div class="text">Michael Simpson</div>
              <div class="center-flex">
                <button class="join-button">Join the Call</button>
              </div>
            </div>
          </div>
        </div>

       <!-----------------------------------------------PATIENT PROFILES------------------------------------------------------>
       <div class="space-between-flex">
       <h3 style="font-size: 24px; color: #202224; font-weight: 500; margin-bottom:0px ;">Patient Profiles</h3>
       <a href="#"><img src="images/vec_rt_arrow.png" height="15px" style="margin-top: 30px;"></a>
       </div>

      <br>

      <div class="space-between-flex">
      <img src="images/pp.png" alt="Avatar" style="border-radius: 50%; margin-right: 10px; height: 20px;">
      <img src="images/pp.png" alt="Avatar" style="border-radius: 50%; margin-right: 10px; height: 20px;">
      <img src="images/pp.png" alt="Avatar" style="border-radius: 50%; margin-right: 10px; height: 20px;">
      <img src="images/pp.png" alt="Avatar" style="border-radius: 50%; margin-right: 10px; height: 20px;">
      <img src="images/pp.png" alt="Avatar" style="border-radius: 50%; margin-right: 10px; height: 20px;">
      <img src="images/pp.png" alt="Avatar" style="border-radius: 50%; margin-right: 10px; height: 20px;">
      <img src="images/pp.png" alt="Avatar" style="border-radius: 50%; margin-right: 10px; height: 20px;">
      <img src="images/pp.png" alt="Avatar" style="border-radius: 50%; margin-right: 10px; height: 20px;">
      <img src="images/pp.png" alt="Avatar" style="border-radius: 50%; margin-right: 10px; height: 20px;">
      <img src="images/pp.png" alt="Avatar" style="border-radius: 50%; margin-right: 10px; height: 20px;">
      <img src="images/pp.png" alt="Avatar" style="border-radius: 50%; margin-right: 10px; height: 20px;">
      <img src="images/pp.png" alt="Avatar" style="border-radius: 50%; margin-right: 10px; height: 20px;">
      <img src="images/pp.png" alt="Avatar" style="border-radius: 50%; margin-right: 10px; height: 20px;">
      <img src="images/pp.png" alt="Avatar" style="border-radius: 50%; margin-right: 10px; height: 20px;">
      <img src="images/pp.png" alt="Avatar" style="border-radius: 50%; margin-right: 10px; height: 20px;">
    </div>
      
    
           <!-----------------------------------------------MESSAGES------------------------------------------------------>
           <div class="space-between-flex">
            <h3 style="font-size: 24px; color: #202224; font-weight: 500; margin-bottom:0px ;">Unread Messages</h3>
            <a href="#"><img src="images/vec_rt_arrow.png" height="15px" style="margin-top: 30px;"></a>
           </div>

           <div class="help-box refer-a-friend">
            <div class="space-between-flex">
              <div class="help-content">
                <img src="images/pp2.png" style="margin:20px; height: 50px;">
                <div class="help-text">
                  <p style="font-size: 20px; margin: 0;">Tongkun Lee
                </div>
              </div>
              <div class="center-flex">
                <button class="view-message">View Message</button> </div>
            </div>
          </div>

          <div class="help-box refer-a-friend">
            <div class="space-between-flex">
              <div class="help-content">
                <img src="images/pp2.png" style="margin:20px; height: 50px;">
                <div class="help-text">
                  <p style="font-size: 20px; margin: 0;">Tongkun Lee
                </div>
              </div>
              <div class="center-flex">
                <button class="view-message">View Message</button> </div>
            </div>
          </div>

          <div class="help-box refer-a-friend">
            <div class="space-between-flex">
              <div class="help-content">
                <img src="images/pp2.png" style="margin:20px; height: 50px;">
                <div class="help-text">
                  <p style="font-size: 20px; margin: 0;">Tongkun Lee
                </div>
              </div>
              <div class="center-flex">
                <button class="view-message">View Message</button> </div>
            </div>
          </div>

          <div class="help-box refer-a-friend">
            <div class="space-between-flex">
              <div class="help-content">
                <img src="images/pp2.png" style="margin:20px; height: 50px;">
                <div class="help-text">
                  <p style="font-size: 20px; margin: 0;">Tongkun Lee
                </div>
              </div>
              <div class="center-flex">
                <button class="view-message">View Message</button> </div>
            </div>
          </div>

          <div class="help-box refer-a-friend">
            <div class="space-between-flex">
              <div class="help-content">
                <img src="images/pp2.png" style="margin:20px; height: 50px;">
                <div class="help-text">
                  <p style="font-size: 20px; margin: 0;">Tongkun Lee
                </div>
              </div>
              <div class="center-flex">
                <button class="view-message">View Message</button> </div>
            </div>
          </div>

      </div>

</body>
</html>