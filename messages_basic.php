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
    }

    p {
      margin: 0px 0px;
    }

    #messages {
      padding-left: 1.5vw;
      height: 100%;
      width: 30%;
      border-right: 1px solid #EEEEEE;
    }

    #heading {
      margin-top: 5vh;
      font-family: 'Poppins';
      font-style: normal;
      font-weight: 600;
      font-size: 23px;
      color: #000000;
    }

    #search {
      background: #EEEEEE;
      border-radius: 12px;
      margin-top: 1vh;
      width: 90%;
      font-family: 'Poppins';
      font-style: normal;
      font-weight: 400;
      font-size: 14px;
      color: rgba(0, 0, 0, 0.45);
    }

    #sort {
      margin-top: 1vh;
      font-family: 'Poppins';
      font-style: normal;
      font-weight: 400;
      font-size: 12px;
      margin-left: 1vw;
    }

    #label {
      color: rgba(0, 0, 0, 0.65);
    }

    #sort_by {
      color: #0177FD;
      margin-left: 1vw;
      font-family: 'Poppins';
      font-style: normal;
      font-weight: 400;
      font-size: 12px;
    }

    #all_messages {
      overflow: scroll;
      height: 70vh;
      font-size: 13px;
    }

    ::-webkit-scrollbar {
      width: 0;  /* Remove scrollbar space */
      background: transparent;  /* Optional: just make scrollbar invisible */
    }

    #all_messages_content {
      display: flex;
      flex-direction: column;
    }

    .all_messages_message{
      padding-top: 10px;
      padding-bottom: 5px;
      height: 55px;
      display: flex;
    }

    .all_messages_message:hover{
      background-color: #EEEEEE;
    }

    .all_messages_message p{
      margin: 0;
    }

    .all_messages_message_left{
      min-width: fit-content;
      width: 15%;
    }

    .all_messages_message_middle{
      width: 60%;
    }

    .all_messages_message_right{
      width: 15%;
      display: flex;
      flex-direction: column;
      align-items: flex-end;
    }

    .all_messages_message_end{
      width: 20%;
    }

    .all_messages_message_name{
      font-family: 'Poppins';
      font-style: normal;
      font-weight: 500;
      font-size: 13px;
      color: rgba(0, 0, 0, 0.85);
    }

    .all_messages_message_message{
      font-family: 'Poppins';
      font-style: normal;
      font-weight: 400;
      font-size: 12px;
      line-height: 16px;
      color: rgba(0, 0, 0, 0.45);
    }

    .all_messages_message_time{
      font-family: 'Poppins';
      font-style: normal;
      font-weight: 400;
      font-size: 12px;
      line-height: 16px;
      color: rgba(0, 0, 0, 0.65);
    }

    #one_message {
      width: 70%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    #one_message img {
      max-height: 50vh;
      max-width: 50vw;
    }

    #one_message_heading {
      font-family: 'Poppins';
      font-style: normal;
      font-weight: 500;
      font-size: 50px;
      color: #8D8D8D;
      margin: 0;
      margin-top: 2vh;
    }

    .one_message_content {
      font-family: 'NATS', 'Poppins';
      font-style: normal;
      font-weight: 400;
      font-size: 20px;
      text-align: center;
      color: #8D8D8D;
      margin: 0;
    }

    @media (max-width:1440px) {
      .all_messages_message_middle{
        padding-left: 5px;
      }
    }

    @media (max-width:1023px) {
      #contents {
        position: fixed;
        top: 10%;
        width: 100vw;
      }

      .one_message_content:last-child{
        display: none;
      }

      #heading{
        margin-top: 2vh;
      }

      #messages{
        width: 40%;
      }

      #one_message{
        width: 60%;
      }

      .all_messages_message_left{
        min-width: fit-content;
        width: 20%;
      }

      .all_messages_message_middle{
        max-width: 50%;
      }

      .all_messages_message_right{
        width: 20%;
      }
      .all_messages_message_end{
        width: 10%;
      }
    }

    @media (max-width:767px) {
      .all_messages_message_middle{
        padding-left: 5px;
      }
    }
  </style>
</head>
<script>
  <?php
  $messages = array("John Doe" => "Sodales malesuada", "Travis Barker" => "... is typing", "Robert Parker" => "Awesome!", "Rick Owens" => "Sodales malesuada", "Kate Rose" => "you: See you tomorrow!", "Tom Hardy" => "Sodales malesuada", "Vivienne Westwood" => "Sodales malesuada", "Anthony Paul" => "Sodales malesuada", "Stan Smith" => "Sodales malesuada", "Vivienne Westwood1" => "Sodales malesuada", "Anthony Paul1" => "Sodales malesuada", "Stan Smith1" => "Sodales malesuada", "Vivienne Westwood2" => "Sodales malesuada", "Anthony Paul2" => "Sodales malesuada", "Stan Smith2" => "Sodales malesuada", "Vivienne Westwood3" => "Sodales malesuada", "Anthony Paul3" => "Sodales malesuada", "Stan Smith3" => "Sodales malesuada");
  ?>
</script>

<body>
  <?php include 'event_calendar.php'; ?>
  <div id="contents">
    <div id="messages">
      <p id="heading">Messages</p>
      <input class="form-control" id="search" type="text" placeholder="Search">
      <p id="sort"><span id="label">Sort by</span> <span id="sort_by">Newest</span> <img src="./icons/dropdown.png"></p>
      <div id="all_messages">
        <div id="all_messages_content">
          <?php
          foreach ($messages as $x => $val) {
          ?>
            <div class="all_messages_message">
              <div class="all_messages_message_left">
                <img src="./icons/profile1.png">
              </div>
              <div class="all_messages_message_middle"> 
                <p class="all_messages_message_name"><?php echo $x; ?></p>
                <p class="all_messages_message_message"><?php echo $val; ?></p>
              </div>
              <div class="all_messages_message_right">
                <p class="all_messages_message_time">16:45</p>
                <img src="./icons/read.png" style="margin-top: 5px;"></p>
              </div>
              <div class="all_messages_message_end">
              </div>
            </div>
          <?php }
          ?>
        </div>
      </div>
    </div>
    
