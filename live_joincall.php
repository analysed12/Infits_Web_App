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
    <title>LIVE</title>
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
        font-weight:400;
        overflow-x: hidden;
        
    }
    .live_personal{
        margin:2rem;
        margin-left:18rem;
    }
    .leftside{
        margin-top:5rem;
    }
    .main{
        display:flex;
        gap:2rem;
        
    }
    .rightside{
        margin-top:12rem;
        display:flex;
        flex-direction:column;
        gap:1rem;
        margin-left:9rem;
        
    }
    .joincall{
        width: 140px;
        height: 49px;
        background: #4B9AFB;
        border-radius: 15px;
        border:none;
        color:white;
        font-size: 27px;
    }
    .cancel{
        width: 140px;
        height: 49px;
        background: #FFFFFF;
        border: 1px solid #4B9AFB;
        border-radius: 15px;
        color:#4B9AFB;
        font-size: 27px;

    }
    .h1{
        margin-left:3rem;
    }
    #micon{
        background: #FF0000;
        border:none;
        border-radius:50%;
        padding:0.4rem;
        padding-left:0.7rem;
        padding-right:0.7rem;
    }
    #micoff{
        background: #FFFFFF;
        box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.25);
        border:none;
        border-radius:50%;
        padding:0.4rem;
        padding-left:0.5rem;
        padding-right:0.5rem;
        
        display:none;
    }
    #cameraon{
        background: #FF0000;
        border:none;
        border-radius:50%;
        padding:0.4rem;
        padding-left:0.6rem;
        padding-right:0.6rem;

    }
    #cameraof{
        background: #FFFFFF;
        box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.25);
        border:none;
        border-radius:50%;
        padding:0.4rem;
        padding-left:0.5rem;
        padding-right:0.5rem;
       
        display:none;
    }
    .buttons1{
        display:flex;
        gap:1.5rem;
        justify-content:center;
        margin-top:1.5rem;
    }
    @media screen and (max-width: 1200px){
        .rightside{
       
        margin-left:0;
    
    }
}
    @media screen and (max-width: 1100px){
        .rightside{
            margin-top:0.1rem;
        text-align:center;
        margin-left:0;
    
    }
    .main{
        display:flex;
        flex-direction:column;
        gap:2rem;
    }
    .buttons{
        justify-content:center;
    }
    

    }

    @media screen and (max-width: 720px){
        .live_personal{
            margin-left:2rem;

        }
        .h1{
        margin-left:0;
    }
        .leftside{
        margin-top:3rem;
    }
        .pic{
            width:98%;
        }
        .main{
        display:flex;
        flex-direction:column;
        gap:2rem;
    }
    .rightside{
        margin-top:0.1rem;
        text-align:center;
        margin-left:0;
    
    }
    .buttons{
        justify-content:center;
    }
}
    </style>
</head>
<body>
    <div class="live_personal">
        <h2>Video call with Ronald Richards </h2>
        <div class="main">
        <div class="leftside">
            <img src="images/ronald_small.png" class="pic">
            <div class="buttons1">
                <div class="firstbutton1">
                <button  id="micon"><img src="images/micon.png" alt=""></button>
                <button id="micoff"><img src="images/micoff.png" alt=""></button>
                <script>
                     var x = document.getElementById("micoff");
                        var selectbtn1 = document.getElementById("micon");
                        selectbtn1.onclick = function() {
                            
                        if (x.style.display === "block") {
                        x.style.display = "none";
                        selectbtn1.style.display="block";
                        
                    } else {
                        x.style.display = "block";
                        selectbtn1.style.display="none";
                       
                    }
                    }
                    var y = document.getElementById("micon");
                        var selectbtn2 = document.getElementById("micoff");
                        selectbtn2.onclick = function() {
                            
                        if (y.style.display === "none") {
                        y.style.display = "block";
                        selectbtn2.style.display="none";
                        
                    } else {
                        y.style.display = "none";
                        selectbtn2.style.display="block";
                       
                    }
                    }
                        
                </script> 
                </div>

                <div class="firstbutton2">
                <button  id="cameraon"><img src="images/cameraon.png" alt=""></button>
                <button id="cameraof"><img src="images/cameraof.png" alt=""></button>
                <script>
                     var a = document.getElementById("cameraof");
                        var selectbtn3 = document.getElementById("cameraon");
                        selectbtn3.onclick = function() {
                            
                        if (a.style.display === "block") {
                        a.style.display = "none";
                        selectbtn3.style.display="block";
                        
                    } else {
                        a.style.display = "block";
                        selectbtn3.style.display="none";
                       
                    }
                    }
                    var b = document.getElementById("cameraon");
                        var selectbtn4 = document.getElementById("cameraof");
                        selectbtn4.onclick = function() {
                            
                        if (b.style.display === "none") {
                        b.style.display = "block";
                        selectbtn4.style.display="none";
                        
                    } else {
                        b.style.display = "none";
                        selectbtn4.style.display="block";
                       
                    }
                    }
                        
                </script> 
                </div>

            </div>
            
        </div>
        <div class="rightside">
            <h1 class="h1">Ready to join?</h1>
            <div class="buttons" style="display:flex;gap:1.5rem;">
                <a href="live_personalcall.php" style="background-color:none"><button class="joincall">Join Call</button></a>
                <button class="cancel">Cancel</button>
                
            </div>
        </div>
        </div>
    </div>
 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>