<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infits</title>
    <link rel="stylesheet" href="css/email.css">
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
        
    </style>
  </head>

  <body>
  <div id="page">
    <?php include 'event_calendar.php'; ?>

    <div id="content">

      <!------------------------------------------------DASHBOARD--------------------------------------------------------->
      <center>
        <h1 style="font-size: 28px; color: #0177FD; font-weight: 700; margin-bottom: 0;">Let’s Have a chat</h1>
        <h3 style="font-size: 40px; color: #202224; font-weight: 700; margin-top: 0;">An expert at your services</h3>
    </center>

      <!-----------------------------------------------FORM--------------------------------------------------------->
      <div class="email-area">
      <form>
        Your name:<br> <input type = "text" name = "first_name">
        <br><br>
        Last Name:<br> <input type = "text" name = "last_name">
        <br><br>
        Email:<br> <input type = "email" name = "email">
        <br><br>
        Message: <br><input type = "message" name = "message">
        <br>
        <input type="submit" name="submit" value="Submit">
      </form>
    </div>
    
    </div>

</body>
</html>