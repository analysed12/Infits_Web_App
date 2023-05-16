<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
     body {
    font-family: "NATS", sans-serif !important;
    
    font-weight: 400;   
    position: relative;
}
    .text-start{
       
        color:#000000;
        position:absolute;
        left:270px;
        top:105px;
        display:flex;
        align-items:center;
    }
    .container{
        margin-top:15vh;
    }

    @media screen and (max-width: 720px){
        .text-start{
            margin-top:40px;
        }
    }
    .button{
        color:white;
        background-color:#8C68F8;
        border-radius:10px;
        margin:auto;
        width:200px;
        height:50px;
        font-size:20px;
        font-weight:400;
        border:1px solid white;
    }
    @media screen and (min-width:0px) and (max-width: 720px){
        .text-start{
            margin-left:-15rem !important;
            margin-top:3rem !important;
        }
    }
    @media screen and (min-width:0px) and (max-width: 380px){
        .text-start{
            margin-top:8rem !important;
        }
        .button{
            margin-left:-30px !important;
        }
        .rounded{
            width:250px;
        }
    }

</style>
<body>
<?php
include 'navbar.php';
?>

    <h3 class="text-start" style="font-size:40px">Messages</h3>

<div class="container">
    <img src="images/form (1).png" class="rounded mx-auto d-block" alt="...">
    <h4 class="text-center" style="font-size:35px !important;">You haven't started any</h4>
    <h4 class="text-center" style="font-size:35px !important;">chat yet!</h4>
    <div class="d-grid col-4 mx-auto " id="button">
  <a href="chat_home.php" class="button" style="margin-top:20px;display:flex;align-items:center;justify-content:center;">Start a chat</a>

</div>
</div>

</body>
</html>