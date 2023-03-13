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
    .text-start{
        font-weight:500;
        color:#000000;
        position:absolute;
        left:295px;
        top:100px;
        line-height:20px;
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
    @media screen and (max-width:400px){
        .text-start{
            margin-top:100px;
            font-size:18px;
            font-weight:600;
            margin-right:20px;
            flex-wrap:no-wrap;
            width:100px;
        }
        .text-center{
            margin-left:20px;
        }
    }
    
</style>
<body>
<?php
include 'navbar.php';
?>

    <h3 class="text-start">Messages</h3>

<div class="container">
    <img src="images/form.png" class="rounded mx-auto d-block" alt="...">
    <h4 class="text-center">You haven't started any chat yet!</h4>
    <div class="d-grid col-4 mx-auto " id="button">
  <button class="button" type="button" style="margin-top:20px;">Start a chat</button>
  
</div>
</div>

</body>
</html>