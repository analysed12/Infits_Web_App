<!-- Dashboard -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infits</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    
    <style>
      #page{
        overflow: hidden;
      }
      #content {
    display: flex;
    flex-direction: column;
    height: 90%;
    font-family: 'Poppins';
    font-style: normal;
    padding: 10px;
    margin: 0px;
}
/*UPCOMING EVENTS*/
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
  width: 370px !important;
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

/*TASK LIST*/
.list{
  display: flex;
  
}
.task-buts{
  display: flex;
  flex-direction: row;
  justify-content: space-around;
}
.box{
  margin-left: 42px;
  background: #FFFFFF;
  border: 1px solid #F4F4F4;
  box-shadow: 0px 64px 64px -64px rgba(50, 50, 50, 0.11);
  border-radius: 12px;
  width: 90%;
}
.small-box{
  margin: 10px;
  padding: 10px;
  background: #FFFFFF;
  border: 1px solid #EFEEEE;
  border-radius: 12px;
}
.task-button{
  background-color: #4B9AFB;
  padding: 10px;
  width: 40%;
  border: 1px solid #4B9AFB;
  border-radius: 10px;
  color: white;
  font-size: 20px;
}
.task-box{
  display: flex;
  align-items: center;
  justify-content: space-between;
  background-color: #EFF8FF;
  padding: 10px;
  width: 70%;
  border: 1px solid #EFF8FF;
  border-radius: 10px;
  color: #120D26;
  font-size: 20px;
  margin-bottom: 15px;
}
.min-box{
  display: flex;
  flex-direction: column;
  width: 49%;
  align-items: center;
}
.task-content{
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
}
.task-text{
  display: flex;
  align-items: flex-start;
  flex-direction: column;

}
.center-flex{
display: flex;
align-items: center;
justify-content: center;
}
    </style>
  </head>

  <body>
    <?php include 'navbar.php';?>

    <div id="content">

      <!------------------------------------------------DASHBOARD--------------------------------------------------------->
        <h1 style="font-size: 32px; color: #202224; font-weight: 600;">Dashboard</h1>
        <h3 style="font-size: 24px; color: #202224; font-weight: 500; margin-bottom:0px ;">Upcoming Events</h3>


      <!-----------------------------------------------EVENTS--------------------------------------------------------->
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

       <!-----------------------------------------------TASK-LIST------------------------------------------------------>
        <div class="list">
          <div class="box">
            
              <div class="small-box">
                <div class="task-buts">
                  <button class="task-button">Task List</button>
                  <button class="task-button">Completed</button>
              </div>
            </div>
            
        <div class="task-content">
            <div class="min-box">
              <div class="task-box">
                <img src="images/vec_notification.png">
                <div class="task-text"><p style="font-size: 20px; margin: 0;">Client Recipe Design <br> <p style="font-size: 15px; margin: 0; color:#747688;">10AM-11AM</div>
                <img src="images/vec_more.png">
              </div>

                <div class="task-box">
                  <img src="images/vec_notification.png">
                  <div class="task-text"><p style="font-size: 20px; margin: 0;">Client Recipe Design <br> <p style="font-size: 15px; margin: 0; color:#747688;">10AM-11AM</div>
                  <img src="images/vec_more.png">
                </div>

                <div class="task-box">
                  <img src="images/vec_notification.png">
                  <div class="task-text"><p style="font-size: 20px; margin: 0;">Client Recipe Design <br> <p style="font-size: 15px; margin: 0; color:#747688;">10AM-11AM</div>
                  <img src="images/vec_more.png">
                </div>

              </div>

              <div class="min-box">

                <div class="task-box">
                  <img src="images/vec_notification.png">
                  <div class="task-text"><p style="font-size: 20px; margin: 0;">Client Recipe Design <br> <p style="font-size: 15px; margin: 0; color:#747688;">10AM-11AM</div>
                  <img src="images/vec_more.png">
                </div>
  
                  <div class="task-box">
                    <img src="images/vec_notification.png">
                    <div class="task-text"><p style="font-size: 20px; margin: 0;">Client Recipe Design <br> <p style="font-size: 15px; margin: 0; color:#747688;">10AM-11AM</div>
                    <img src="images/vec_more.png">
                  </div>
  
                  <div class="task-box">
                    <img src="images/vec_notification.png">
                    <div class="task-text"><p style="font-size: 20px; margin: 0;">Client Recipe Design <br> <p style="font-size: 15px; margin: 0; color:#747688;">10AM-11AM</div>
                    <img src="images/vec_more.png">
                  </div>
                  
                </div>
              </div>
          </div>
        </div>

      </div>
        <br>

    </div>
</div>
</div>

</body>
</html>