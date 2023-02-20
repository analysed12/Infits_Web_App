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
        margin-top:150px;
        margin-left:330px;
    }

    .forms .input-box{
        height: 70px; 
        width: 606px;   
        background: #FFFFFF;
        box-shadow: 0px 5px 5px #FFFFFF ;  /*0px 4px 4px rgba(0, 0, 0, 0.25);*/
        border-radius: 15px;
        padding-left:40px;
        font-size: 27px;
        line-height: 57px;
        color: #D7D7D7;
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

    .forms .ref-code{
        box-sizing: border-box;
        margin-top: 25px;
        width: 606px;   
        height: 50px;
        font-size: 27px;
        background: #FFFFFF;
        border: 1px solid #9E5EF4;
        border-radius: 9.1346px;
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

</style>

<body>
    <div class = "container-sm">
        <div class = "heading">
            <p> Add a Client </p>
        </div>

        <div id="myDIV" class ="box">
            <button href = "#" class="btn current" style="margin-left:70px;margin-right:237px;"> Send Requests </button>
            <button href = "#" class="btn" style="margin-right:200px;"> Pending Requests </button>
            <button href = "#" class="btn"> Accepted Requests </button>
        </div>

        <div class = "forms">
            <input class ="input-box" type="text" placeholder = "Enter client code here"></input>
            <button class ="buttons" type="submit" href ="#"> Send Request </button>
            <button class ="ref-code" type="submit" href ="#"> Share Referral Code </button>
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
