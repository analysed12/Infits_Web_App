<?php include('connection.php'); 
$diet_id = $_SESSION['dietitianuserID'];?>


<!-----send requests------>
<?php
if(isset($_POST['sendbtn']))
{
    $sql ="select `name`,`dietitianuserID` from `dietitian` where `dietitianuserID` != '{$diet_id}'";
    $result = $conn ->query($sql);
    $cnt =1;
    if($result -> num_rows > 0)
    {
        while($row = $result -> fetch_assoc())
        {?>
    <?php }}}?>



<html>
    <title> Sending / pending Request </title>
    <head>
        <link rel = "stylesheet" href=".\css\new_clientcode.css">
 
         <style>
            .dc-rs-ac{
                position:absolute;
                height:63px;
                width: 164px;
                margin-left:100px
            }
            .dc-rs-pr{
                position:absolute;
                height: 63px;
                width: 200px;
            }
            .dc-rs-sc{
                position:absolute;
                height: 63px;
                width: 214px;
                right:91px;
                
            }
            </style>

</head>
<body>
   <!----------sidebar------>
  <?php include('event_calendar.php'); ?>
  
  <div class ="wrapper">
    <div class="header">
        <p id="header1" style="position:absolute;font-family:NATS;font-style:normal; font-weight:bold; font-size:30px; word-spacing:1px;"> Add a Client</p>
</div>

  <!-------Send request----->
<div class="send-request">
   <div class="header-send">
   <div class="dc-rs-ac"> <p class="pp-cs-st" style="font-size:28px;font-weight:500; font-family:NATS;font-style:normal;"> Send Requests </p> </div>
   <div class="dc-rs-pr" style="margin-left:500px;">   <p class ="pp-cs-st" style="font-size:28px;font-weight:500; font-family:NATS;font-style:normal;"> Pending Requests </p></div>
   <div class="dc-rs-sc" style="margin-left:500px;"> <p class ="pp-cs-st" style="font-size:28px;font-weight:500; font-family:NATS;font-style:normal;">
    Accepted Requests </p></div>
    
</div>
    <div class = "box-plc" style="text-align:center; position:absolute; padding-top:260px; padding-left:550px;">
    <div class ="box- req" style=" position:absolute; justify-content: space-between;top:300px;">
        <input id="client-code" name="client-code" class="btn-rfl-cd" placeholder ="Enter client code here" style ="border-radius: 14.3266px; height: 60px;
         width:606px;position:absolute; ">
         <br>
        <button class="btn-rfl-cd" name="sendbtn" style ="width:606px; height:56px; position:absolute; top:90px; border-radius: 9.1346px; background: #9E5EF4; color:white;">
         Send Request </button><br>
        <button class="btn-rfl-cd" style ="width:606px; height:56px; position:absolute; top:180px; border-radius: 9.1346px; color: #9E5EF4; background:white;">
        Share Referral Code </button>
</div>
</div>
</div>

</div>

<!----------Pending request------->
<div class = "pending-request">

</div>
</div>


</body>

    <html>