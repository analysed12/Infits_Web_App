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
        display: flex;
        flex-direction: column;
        height: 90%;
        width: 90! important;
        font-family: 'Poppins';
        font-style: normal;
        padding: 20px;
        margin: 0px;
        overflow: clip;
    }

    /*------------------HELP-----------------------*/
    .help-box{
    margin-left: 42px;
    background: #FFFFFF;
    border: 1px solid #F4F4F4;
    box-shadow: 0px 8px 24px rgba(176, 190, 197, 0.32), 0px 3px 5px rgba(176, 190, 197, 0.32);
    border-radius: 12px;
    width: 90%;
    padding: 5px;
    margin: 10px;
    }
    .help-content{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    }
    .help-text{
    display: flex;
    align-items: flex-start;
    flex-direction: column;
    justify-content: center;
    }
    .main {
 
  float: left;
  margin-left:25%;
  width: 50%;
  padding: 0 40px;
}
        
    </style>
  </head>

  <body>
  <div id="page">
    <?php include 'navbar.php'; ?>

    <div id="content">
      <!------------------------------------------------DASHBOARD--------------------------------------------------------->
        <h1 style="font-size: 32px; color: #202224; font-weight: 600;">Help</h1>

      <!-----------------------------------------------EVENTS--------------------------------------------------------->
      <center>
      <div class="main">
      <div class="center-flex">
      <img src="images/help.png" height="300px">
    </div>  

    <a href="FAQ.php" style="text-decoration: none;">
    <div class="help-box">
      <div class="help-content">
      <img src="images/faq.png" style="margin-right:20px ;margin-left:20px ; height: 100px;">
      <div class="help-text">
        <p style="font-size: 20px; margin: 0;">FAQs 
          <br> 
          <p style="font-size: 15px; margin: 0; color:#747688;">Frequently Asked Questions
    </div>
    </div>
    </div>
  </a>

    <a href="email.html" style="text-decoration: none;">
    <div class="help-box">
      <div class="help-content">
      <img src="images/email.png" style="margin-right:20px ;margin-left:20px ; height: 100px;">
      <div class="help-text">
        
        <p style="font-size: 20px; margin-left: 10px; margin: 0;">EMAIL
          <br> 
          <p style="font-size: 15px; margin: 0; color:#747688;">Reach us through Email
      </div>
      </div>
    </div>
  </a>
  </center>
    </div>


</div>
</body>
</html>