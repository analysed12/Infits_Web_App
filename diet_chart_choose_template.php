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

    .temps{
    display: flex;
    flex-direction: column;
    
    }
    .container {
    padding: 32px;
    display: flex;
    flex: 1;
    align-content: center;
    flex-wrap: wrap;
    }
    .card {
    padding: 16px;
    margin: 16px;
    border: none;
    box-shadow: 2px 4px 16px rgba(0,0,0,.06);
    border-radius: 10px;
    color: black;
    }
    .add-button{
        background: #7282FB;
        border-radius: 8px;
        border: none;
        padding: 10px;
        color: white;
        margin: 5px;
        width: 100%;
    }
    .text{
        font-size: 18px;
        padding: 5px;
        margin-bottom: 0px;
    } 
    .items{
        font-size: 16px;
        padding: 5px;
    }
    .center-flex{
display: flex;
align-content: center;
justify-content: center;
    }
    </style>
  </head>

  <body>
  <div id="page">
    <?php include 'event_calendar.php'; ?>

    <div id="content">

      <!------------------------------------------------DASHBOARD--------------------------------------------------------->
      <h3 style="font-size: 30px; color: #202224; font-weight: 400; margin: 5px;">Diet Chart </h3>
      <p style="font-size: 20px; color: #CBCBCB; font-weight: 400; margin: 5px;"> 
      <?php 
        $clientID = "Eden";
        echo $clientID;
      ?>

<br><br>

    <h3 style="font-size: 28px; color: #202224; font-weight: 500; margin: 5px;">Choose a Template</h3>
    <h3 style="font-size: 22px; color: #202224; font-weight: 500; margin: 5px;">All Templates</h3>

    <!-- templates -->
    <div class="temps">
        <div class="container">

            <?php 
                //  $sql= "Select `name` from `addclient`";
         
                    $sql = "SELECT template_name FROM template_name";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0)
                    {
                      while($row = mysqli_fetch_assoc($result))
                    {
                
                    echo "<div class='card'>";
                    echo "<div class='center-flex'>";
                    echo "<div><img src='images/template_default.svg'></div>";
                    echo "</div>";
                    echo "<div class='text'>".$row["template_name"]."</div>";
                    echo "<div class='items'> Breakfast, Lunch, Snack, Dinner </div>";
                    echo "<div class='center-flex'>";
                    echo "<button class='add-button'>Choose Template</button>";
                    echo "</div>";
                    echo "</div>";
                
                 }} ?>

        </div>
    </div>
