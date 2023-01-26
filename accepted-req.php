<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">    
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Infits - Add Client</title>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<?php 
    include 'navbar.php'; 
    $conn = new mysqli("localhost", "root", "", "infits");
    if($conn->connect_error){
        die("Connection failed :" . $conn->connect_error);
    }
?>

<style>
    .container-sm{
        font-family: 'NATS';
        font-style: normal;
        font-weight: 400;
    }

    .heading p {
        font-weight: 400;
        padding-left: 100px;
        padding-top: 12px;
        font-size: 44px;
        line-height: 70px;
        color: #000000;
    }
    
    .forms{
        margin-top:50px;
        margin-left:150px;
        display:flex;
    }

    .forms .buttons{
        margin-top: 30px;
        width: 606px;
        height: 50px;
        background: #9E5EF4;
        color:#FFFFFF;
        font-size: 27px;
        border : solid 1px #9E5EF4;
        border-radius: 10px;
    }

    .forms p{
        font-size: 27px;
        line-height: 57px;
        color: #000000;
    }

    .box .btn{
        font-size: 30px;
        line-height: 63px;
        color : #000000;
        border: none;
        outline: none;
        padding: 10px 16px;
        background-color: #ffffff;
        cursor: pointer; 
    }
    
    .box {
        display: flex;
        top: 0px;
        padding: 5px 30px;
        margin-top: 0px;
        justify-content: center;
    }

    .box .current, .box .btn:hover {
        outline: none;
        color: #000000;
        padding: 10px 16px;
        border : none;
        background-color: #ffffff;
        border-bottom : 3px solid #9E5EF4;
        border-radius: 0px;
    }

    .forms img{
        padding-right : 10px;
        margin-left :0px;
    }

    .accept{
        border: 1px solid #9E5EF4;
        border-radius: 10px;
        background-color: #9E5EF4;
        color: #FFFFFF;
        width:142px;
        height:50px;
        font-size: 24px;
    }
    
</style>

<body>
    <div class = "container-sm">
        <div class = "heading">
            <p> Add a Client </p>
        </div>

        <div id="myDIV" class ="box">
            <button onclick = "window.location.href ='http://localhost:8080/task-3/task-4/add-client.php';" class="btn" style="margin-left:70px;margin-right:237px;"> Send Requests </button>
            <button onclick = "window.location.href ='http://localhost:8080/task-3/task-4/pendingreq.php';" class="btn" style="margin-right:200px;"> Pending Requests </button>
            <button onclick = "window.location.href ='http://localhost:8080/task-3/task-4/accepted-req.php';"class="btn current"> Accepted Requests </button>
        </div>

        <div class = "forms">
                <img class="profile-icon" src = "icons/profile-icon.svg" alt = "userprofile"></img>
                <p style="padding-right:80px;"> Ronald Richards </p>
                <p style="color:#9E5EF4; padding-right:320px;"> Profile </p>
                <p style="color: #CACACA; padding-right:80px;"> Dec 23, 2022   18:52 </p>
                <p style="color: #96C362;"> Accepted <img src="icons/Approval.svg"></img></p>
        </div>
        <div class = "forms">
                <img class="profile-icon" src = "icons/profile-icon.svg" alt = "userprofile"></img>
                <p style="padding-right:80px;"> Ronald Richards </p>
                <p style="color:#9E5EF4; padding-right:320px;"> Profile </p>
                <p style="color: #CACACA; padding-right:80px;"> Dec 23, 2022   18:52 </p>
                <p style="color: #96C362;"> Accepted <img src="icons/Approval.svg"></img></p>
        </div>
        <div class = "forms">
                <img class="profile-icon" src = "icons/profile-icon.svg" alt = "userprofile"></img>
                <p style="padding-right:80px;"> Ronald Richards </p>
                <p style="color: #9E5EF4; padding-right:320px;"> Profile </p>
                <p style="color: #CACACA; padding-right:80px;"> Dec 23, 2022   18:52 </p>
                <p style="color: #96C362;"> Accepted <img src="icons/Approval.svg"></img></p>
        </div>

    </div>

<script>
    var header = document.getElementById("myDIV");
    var btns = header.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("current");
            current[0].className = current[0].className.replace(" current", "");
            this.className += " current";
        });
    }
</script>
</body>
</html>


<!-- 8 digit random code generator -->
<?php
    function random_strings(){
	    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
	    return substr(str_shuffle($str_result), 0, 8); //length of the random code is 8
    }
    echo random_strings();
?>
