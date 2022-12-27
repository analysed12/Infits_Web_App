<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infits</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
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

    .box{
      border-radius: 9px;
      border: 1px solid #7963FB;
      width: fit-content;
      padding: 10px;
      background: white;
    }
        
    </style>
  </head>

  <body>
  <div id="page">
    <?php include 'event_calendar.php'; ?>

    <div id="content">
      <p>Tab here</p>


        <button class = "box"><img src="images/plus.svg" style="width:25px; float: left;"> &nbsp; Add Directions</button>
        <button class = "box"><img src="images/upload.svg" style="width:25px; float: left;"> &nbsp; Upload Video</button>
        <button class = "box"><img src="images/link.svg" style="width:25px; float: left;"> &nbsp; Upload URL</button>

  </body>
  </html>
