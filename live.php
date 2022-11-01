<html>

<head>
  <style>
    body {
      height: 100vh;
      overflow: hidden;
    }
    #contents {
      display: flex;
      height: 90%;
      font-family: 'Poppins';
      font-style: normal;
      font-weight: 500;
      font-size: 35px;
      padding: 20px;
    }
    p {
      margin: 0px 0px;
    }
    #live{
      display: flex;
    }
    #live-left{
      width: 60vw;
    }
    #live-topnav{
      display: flex;
      flex-direction: column;
      border-bottom: 1px solid #EEEEEE;
      align-items: center;
      background-color: #13131A;
      padding-bottom: 20px;
      height: fit-content;
      min-height: 20vh;
    }
    #live-topnav-1{
      display: flex;
      justify-content: space-between;
      width: 100%;
      padding: 10px 15px;
    }
    #live-topnav-1 p{
      font-family: 'NATS', 'Poppins';
      font-style: normal;
      font-weight: 400;
      font-size: 26px;
      color: #FFFFFF;
      margin: 0;
    }
    #live-topnav-1 button{
      background: linear-gradient(90deg, #2667FF 0%, #D553E7 79.17%);
      box-shadow: 0px 8px 24px rgba(176, 190, 197, 0.32), 0px 3px 5px rgba(176, 190, 197, 0.32);
      border-radius: 46px;
      color: white;
      font-family: 'NATS', 'Poppins';
      font-style: normal;
      font-weight: 400;
      font-size: 18px;
      padding: 3px 40px;
    }
    #live-topnav-2{
      display: flex;
      width: 100%;
      padding: 10px 15px;
    }
    #live-topnav-2 img{
      margin-right: 15px;
    }
    #live-topnav-2-name{
      font-family: 'NATS', 'Poppins';
      font-style: normal;
      font-weight: 400;
      font-size: 24px;
      display: flex;
      align-items: center;
      color: #FFFFFF;
      margin: 0;
    }
    #live-topnav-2-status{
      font-family: 'NATS', 'Poppins';
      font-style: normal;
      font-weight: 400;
      font-size: 14px;
      line-height: 111.34%;
      color: #D9D9D9;
      margin: 0;
      width: 70%;
    }
    #live-topnav-3{
      display: flex;
      width: 100%;
      justify-content: right;
      padding: 0px 15px;
    }
    #live-topnav-3 img{
      position: relative;
    }
    #live-topnav-3 p{
      margin: 0;
      font-family: 'NATS', 'Poppins';
      font-style: normal;
      font-weight: 400;
      font-size: 16px;
      color: #FFFFFF;
      text-align: center;
    }
    #upcoming-lives{
      display: flex;
      flex-direction: column;
      width: 60vw;
      padding: 10px 20px;
      height: fit-content;
    }
    #upcoming-lives p{
      font-family: 'NATS';
      font-style: normal;
      font-weight: 400;
      font-size: 26px;
      color: #000000;
    }
    #all-upcoming-lives{
      max-height: 50vh;
      width: 60%;
      display: grid;
      grid-template-columns: 49% 49%;
      column-gap: 1%;
      row-gap: 20px;
      overflow: scroll;
      margin-bottom: 50px;
    }
    ::-webkit-scrollbar {
      width: 0;  /* Remove scrollbar space */
      background: transparent;  /* Optional: just make scrollbar invisible */
    }
    .one-upcoming-live{
      display: flex;
      flex-direction: column;
      width: 70%;
      height: fit-content;
      border: 1px solid #E3E3E3;
      border-radius: 14px;
      align-items: center;
      padding: 0px 5px 20px 5px;
    }
    .one-upcoming-live div{
      margin-top: 10px;
    }
    .profilepic{
      width: 73px;
      height: 73px;
    }
    .livename{
      font-family: 'NATS';
      font-style: normal;
      font-weight: 400;
      font-size: 20px;
      color: #000000;
      margin: 0;
    }
    .date, .time{
      font-family: 'NATS';
      font-style: normal;
      font-weight: 400;
      font-size: 14px;
      color: #000000;
      text-align: left;
      width: 100%;
      padding-left: 10%;
    }
    .date img, .time img{
      margin-right: 5px;
    }
    .set-reminder{
      font-family: 'NATS';
      font-style: normal;
      font-weight: 400;
      font-size: 16px;
      width: 100px;
      border-radius: 46px;
      border: solid 2px transparent;
      box-shadow: 0px 8px 24px rgba(176, 190, 197, 0.32), 0px 3px 5px rgba(176, 190, 197, 0.32);
      background-image: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)), linear-gradient(101deg, #2667FF,#D553E7);
      background-origin: border-box;
      background-clip: content-box, border-box;
      box-shadow: 2px 1000px 1px #fff inset;
    }
    #upcoming-lives .set-reminder p{
      font-size: 16px;
      margin: 0;
    }
    #live-right{
      width: 25vw;
    }
    #go-live{
      height: 25vh;
      display: flex;
      justify-content: end;
    }
    #go-live img{
      width: 50px;
      height: 50px;
      margin-right: 20px;
    }
    @media (max-width:1023px) {
      #contents {
        position: fixed;
        top: 10%;
        width: 100vw;
      }
    }
  </style>
</head>
<script>
  <?php
    $name="John Wayne";
    $status="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis.";
  ?>
</script>
<body>
  <?php include 'event_calendar.php'; ?>
  <div id="contents">
    <div id="live">
      <div id="live-left">
        <div id="live-topnav">
          <div id="live-topnav-1">
            <p>Now Streaming Live</p>
            <button>Go Live</button>
          </div>
          <div id="live-topnav-2">
            <img src="./icons/profile5.png">
            <div>
              <p id="live-topnav-2-name"><?php echo $name; ?></p>
              <p id="live-topnav-2-status"><?php echo $status; ?></p>
            </div>
          </div>
          <div id="live-topnav-3">
            <div>
              <img src="./icons/profile4.png">
              <img src="./icons/profile4.png">
              <img src="./icons/profile4.png">
              <img src="./icons/profile4.png">
            </div>
            <p>+256<br>Viewers</p>
          </div>
        </div>
        <div id="upcoming-lives">
          <p>Upcoming Live</p>
          <div id="all-upcoming-lives">
            <?php
              for($i=0;$i<4;$i++){
                echo "<div class='one-upcoming-live'>";
                echo "<div><img src='./icons/profile5.png' class='profilepic'></div>";
                echo "<div class='livename'>".$name."</div>";
                echo "<div class='date'><img src='./icons/date.png'> 09/05/2022</img></div>";
                echo "<div class='time'><img src='./icons/time.png'> 2:00px</img></div>";
                echo "<div><button class='set-reminder'><p>Set Reminder</p></button></div>";
                echo "</div>";
              }
            ?>
          </div>
        </div>

      </div>
      <div id="live-right">
        <div id="go-live">
          <img src="./icons/golive.png">
        </div>
      </div>
    </div>
  </div>
</body>
</html>
