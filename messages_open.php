<html>
<head>
  <style>
    #one_message-open {
      display: flex;
      flex-direction: column;
      width: 70%;
    }
    #message-topnav{
      display: flex;
      height: 10%;
      width: 100%;
      border-bottom: 1px solid #EEEEEE;
      align-items: center;
    }
    #message-topnav-1{
      padding-left: 20px;
      width: 10%;
    }
    #message-topnav-2{
      width: 70%;
    }
    #message-topnav-3{
      width: 20%;
      text-align: right;
      margin-right: 30px;
    }
    #message-topnav-2-name{
      font-family: 'Poppins';
      font-style: normal;
      font-weight: 400;
      font-size: 16px;
      color: rgba(0, 0, 0, 0.85);
      margin: 0;
    }
    #message-topnav-2-status{
      font-family: 'Poppins';
      font-style: normal;
      font-weight: 400;
      font-size: 14px;
      color: #0177FD;
      margin: 0;
    }
    #message-content{
      display: flex;
      flex-direction: column;
      height: 78%;
      width: 100%;
      border-bottom: 1px solid #EEEEEE;
      padding: 30px;
      padding-top:0;
      font-family: 'Poppins';
      font-style: normal;
      font-weight: 400;
      font-size: 14px;
      color: rgba(0, 0, 0, 0.85);
      overflow: scroll;
    }
    #message-content .single-message-div{
      background: #F4F4F7;
      border-radius: 16px;
      max-width: 65%;
      padding: 18px;
      margin-top: 15px;
      padding-right: 45px;
      width: fit-content;
    }
    #message-content .single-message-div p{
      margin: 0;
    }
    #message-content .single-message-div-me{
      padding-right: 18px;
      padding-left: 45px;
      text-align: right;
      align-self: end;
    }
    #message-content .single-message-image{
      width: 240;
      height: 240;
      border-radius: 16px;
      margin-top: 10px;
      padding-right: 0;
      padding-left: 0;
    }
    .single-message-div-link{
      color: #2D9CDB;
    }
    .single-message-div-time{
      margin-top:5px;
      font-family: 'Poppins'; /* SF Pro Display*/
      font-style: normal;
      font-weight: 300;
      font-size: 12px;
      color: rgba(0, 0, 0, 0.45);
    }
    #message-type{
      display: flex;
      height: 10%;
      width: 100%;
      align-items: center;
    }
    #message-type-1{
      justify-content: center;
      padding-left: 2.5%;
      width: 10%;
    }
    #message-type-2{
      width: 72%;
    }
    #message-type-3{
      width: 28%;
      text-align: left;
      font-family: 'Poppins';
    }
    #message-type-3-send{
      font-style: normal;
      font-weight: 400;
      font-size: 14px;
      margin: 0;
      color: #0177FD;
    }
    #message-type-input {
      background: #FAFAFA;
      border: 0px;
      outline: none;
      border-radius: 12px;
      width: 97%;
      font-family: 'Poppins'; /* SF Pro Display*/
      font-style: normal;
      font-weight: 400;
      font-size: 14px;
      color: rgba(0, 0, 0, 0.45);
    }
  </style>
</head>
<script>
  <?php
    $name = "Travis Barker";
    $status = "Online";
    $msgs = array(
      array("15:42","travis","image","msg1.png"),
      array("15:42","travis","text","https://dribbble.com/shots/17742253-ui-kit-designjam"),
      array("15:42","travis","text","See you at office tomorrow!"),
      array("15:42","me","text","Thank you for work, see you!"),
      array("15:42","travis","text","Hello! Have you seen my backpack anywhere in office?"),
      array("15:42","me","text","Hi, yes, David have found it, ask our concierge 👀"),
    );
  ?>
</script>
<body>
  <?php include 'messages_basic.php'; ?>
  <div id="one_message-open">
    <div id="message-topnav">
      <div id="message-topnav-1">
        <img src="./icons/profile1.png">
      </div>
      <div id="message-topnav-2">
        <p id="message-topnav-2-name"><?php echo $name; ?></p>
        <p id="message-topnav-2-status"><?php echo $status; ?></p>
      </div>
      <div id="message-topnav-3">
        <img src="./icons/videocall.png" style="width: 18px; height: 12.46px; margin-right: 15px;">
        <img src="./icons/info.png" style="width: 18px; height: 18px;">
      </div>
    </div>
    <div id="message-content">
      <?php
        for ($i = 0; $i < count($msgs); $i++) {
          $msgname=$msgs[$i][1];
          $msgtype=$msgs[$i][2];
          $msgcontent=$msgs[$i][3];
          $msgtime=$msgs[$i][0];
          $msgnextname="";
          if($i+1<count($msgs)){
            $msgnextname=$msgs[$i+1][1];
          }
          if($msgtype=="text"){
            echo "<div class='single-message-div ";
            if($msgname=="me"){
              echo "single-message-div-me ";
            }
            echo "'>";
            
              echo "<p";
              if (str_contains($msgcontent, '.com') || str_contains($msgcontent, 'http://') || str_contains($msgcontent, 'https://')) { 
                echo " class='single-message-div-link'";
              }
              echo ">".$msgcontent."</p>";
              if($msgname!=$msgnextname){
                echo "<p class='single-message-div-time'>";
                if($msgname=="me"){
                  echo "<img src='./icons/read.png' style='margin-right:10px;'>";
                }
                echo $msgtime."</p>";
              }
              echo "</div>";
          }
          else if($msgtype=="image"){
            echo "<img src='./images/msgimages/".$msgcontent."' class='single-message-image ";
            if($msgname=="me"){
              echo "single-message-div-me ";
            }
            echo "'>";
          }
        }
      ?>
    </div>
    <div id="message-type">
      <div id="message-type-1">
          <img src="./icons/attach.png">
        </div>
        <div id="message-type-2">
          <input class="form-control" id="message-type-input" type="text" placeholder="Type your message here..">
        </div>
        <div id="message-type-3">
          <p id="message-type-3-send">Send message</p>
        </div>
      </div>
  </div>

</body>

</html>