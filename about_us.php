<?php
include('navbar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
    <title>About US</title>

 <style>
               @font-face {
    font-family: 'NATS';
    src:url('font/NATS.ttf.woff') format('woff'),
        url('font/NATS.ttf.svg#NATS') format('svg'),
        url('font/NATS.ttf.eot'),
        url('font/NATS.ttf.eot?#iefix') format('embedded-opentype'); 
    font-weight: normal;
    font-style: normal;
}
body {
        font-family: 'NATS', sans-serif;
        
    }
    .header{
        margin:20px;
        margin-left:17rem;
    }
    .middle{
        text-align:center;
        margin-top:3rem;
    }
    .image{
    
  width:18%;
    }
    .row{
        font-size: 30px;
line-height: 30px;
/* or 117% */
text-align: justify;
width: 700px;
height: 140px;
margin:3rem;
margin-left:35%;

    }
    @media screen and (max-width: 720px) {
        .header{
        
        margin-left:1.5rem;
    }
    .image{
    
    width:35%;
      }
      .row{
        margin:1.5rem;
        width: auto;
height: auto;
      }


    }
 </style>
</head>
<h2 class="header">About Us</h2>

<div class="middle">
    <img src="images/aboutus.png" class="image">

</div>
<div class="row" style="display: flex;">
<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique sem integer eros, velit vitae aliquam libero commodo. Id posuere elementum consectetur purus massa consequat. Morbi risus purus libero.</span>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<body>
    
</body>
</html>