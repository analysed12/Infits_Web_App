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
    
    .container{
        margin-top:15vh;
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
        
        .text-center{
            margin-left:20px;
        }
    }
</style>
<body>
<?php
include 'navbar.php';
?>
<div class="container">
<img src="images/form.png" class="rounded mx-auto d-block" alt="...">
<h4 class="text-center">You haven't created any form yet!</h4>
<div class="d-grid col-3 mx-auto " id="button">
  <button class="button" type="button">Create form</button>
  
</div>
</div>

</body>
</html>