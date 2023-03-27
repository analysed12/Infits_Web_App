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
       margin:2rem;
       margin-left:18rem;
    }
    .container{
        margin-top:15vh;
    }

    @media screen and (max-width: 720px){

        .text-start{
            margin-left:2rem;
            
            
        }
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

    <h3 class="text-start">Task List</h3>

<div class="container">
<img src="images/Task management.png" class="rounded mx-auto d-block" alt="...">
<h4 class="text-center" style="margin-top:20px;">No task created yet!</h4>
</div>
</body>
</html>