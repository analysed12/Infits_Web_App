<html>
  <head>
    <style>
      #contents{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 80vh;
        flex-direction: column;
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 600;
        font-size: 30px;
      }
      #contents p{
        margin: 0px;
      }
      #contents button{
        margin-top:6vh;
        margin-bottom: 100px;
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-size: 26px;
        background-color: #0177FD;
        color: white;
        width: 452px;
        height: 65px;
        border-radius: 10px;
      }
      @media (max-width:1023px){
        #contents{
          position: fixed;
          top: 15vh;
          width: 100vw;
        }
      }
    </style>
  </head>
  <body>
  <?php include 'event_calendar.php';?>
  <div id="contents">
    <img src="./images/Chat.png" style="width:290; height: 269px;">
    <p>You Have not</p>
    <p>Started Chatting Yet</p>
    <button>Start Chatting</button>
  </div>

  </body>
</html>