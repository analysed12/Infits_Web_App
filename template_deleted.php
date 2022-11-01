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
        font-weight: 500;
        font-size: 35px;
      }
      #contents p{
        margin: 0px 0px;
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
    <img src="./images/Done.png" style="width:100; height: 95px; background-color:#FF7F50; border-radius:100%;margin-bottom:20px;">
    <p>Template</p>
    <p>Deleted</p>
  </div>

  </body>
</html>