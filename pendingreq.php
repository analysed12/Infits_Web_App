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
if ($conn->connect_error) {
    die("Connection failed :" . $conn->connect_error);
}
?>

<style>
    @import url('https://fonts.googleapis.com/earlyaccess/nats.css');
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap');

    .container-sm {
        font-family: 'NATS';
        font-style: normal;
        font-weight: 400;
        margin-left: 200px;
    }

    .heading p {

        font-weight: 600;
        margin: 3% 5% 0% 5%;
        padding-top: 12px;
        font-size: 40px;
        color: #000000;
    }

    .forms {

        margin: 3% 15%;
        display: flex;
        justify-content: space-between;
        align-items: center;


    }

    .forms p {
        margin: 2%;
        font-size: 25px;
    }

    .start {
        display: flex;
        justify-content: flex-start;
        padding: 10px;
        margin: 5px 20px;


        align-items: center;
    }

    .end {
        display: flex;
        justify-content: flex-end;
        margin: 5% 15%;


        align-items: center;
    }

    .accept {
        background-color: #9E5EF4;
        color: white;
        padding: 7px 40px;
        border-radius: 5px;

    }

    .leftMargin {
        /* margin-left: 200px; */
        padding-left: 80px;
    }

    .bold {
        font-weight: bolder;
    }

    .forms .input-box {

        background: #FFFFFF;
        box-shadow: 0px 5px 5px #FFFFFF;
        /*0px 4px 4px rgba(0, 0, 0, 0.25);*/
        border-radius: 15px;
        padding-left: 40px;
        font-size: 27px;
        line-height: 57px;
        color: #D7D7D7;
    }

    .forms .buttons {
        margin-top: 30px;
        width: 606px;
        height: 50px;
        background: #9E5EF4;
        color: #FFFFFF;
        font-size: 27px;
        border: solid 1px #9E5EF4;
        border-radius: 10px;
    }

    .forms .ref-code {
        box-sizing: border-box;
        margin-top: 25px;
        width: 606px;
        height: 50px;
        font-size: 27px;
        background: #FFFFFF;
        border: 1px solid #9E5EF4;
        border-radius: 9.1346px;
    }

    .box .btn {
        font-size: 25px;
        line-height: 50px;
        margin: 2% 6%;
        color: #000000;
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
    a{
        text-decoration: none;
        cursor:pointer;
        color: #9E5EF4;
    }
    a :hover{
        background-color:#ffffff;
        text-decoration: none;
        cursor:pointer;
        color: #9E5EF4;
    }

    .box .current,
    .box .btn:hover {
        outline: none;
        color: #000000;
        padding: 10px 16px;
        margin: 2% 6%;
        border: none;
        background-color: #ffffff;
        border-bottom: 3px solid #9E5EF4;
        border-radius: 0px;
    }
</style>

<body>
    <div class="container-sm">
        <div class="heading">
            <p> Add a Client </p>
        </div>

        <div id="myDIV" class="box">
            <button onclick="window.location.href ='http://localhost:8080/add-client/add-client.php';" class="btn "> Verification Codes </button>
            <button onclick="window.location.href ='http://localhost:8080/add-client/acceptedverify.php';" class="btn"> Verified Clients </button>
            <button onclick="window.location.href ='http://localhost:8080/add-client/pendingreq.php';" class="btn current"> Pending Verifications </button>
        </div>
        <!-- 
        <div class="forms">
            <div class="start">
                <img class="profile-icon" src="icons/profile-icon.svg" alt="userprofile">
                </img>
                <p class="bold"> Ronald Richards </p>
                <p style="color:#9E5EF4; "> <a href = "#">Profile</a></p>
            </div>
            <div class="end">
                <p class="end" style="color: #CACACA; "> Dec 23, 2022 18:52 </p>
                <button class="accept end" href="#" type="submit">Accept</button>
            </div>
        </div> -->
        <div class="forms">
            <img class="profile-icon" src="icons/profile-icon.svg" alt="userprofile"></img>
            <p class="bold"> Ronald Richards </p>
            <p class="small" style="color:#9E5EF4;  font-size:20px;"> <a href = "#">Profile</a></p>
            <p class="leftMargin" style="color: #CACACA;  font-size:17px;"> Dec 23, 2022 18:52 </p>
            <p style="color: #FF0000;"> Pending <img src="icons/pending.svg"></img></p>
        </div>
        <div class="forms">
            <img class="profile-icon" src="icons/profile-icon.svg" alt="userprofile"></img>
            <p class="bold"> Ronald Richards </p>
            <p class="small" style="color:#9E5EF4;  font-size:20px;"> <a href = "#">Profile</a></p>
            <p class="leftMargin" style="color: #CACACA;  font-size:17px;"> Dec 23, 2022 18:52 </p>
            <p style="color: #FF0000;"> Pending <img src="icons/pending.svg"></img></p>
        </div>
        <div class="forms">
            <img class="profile-icon" src="icons/profile-icon.svg" alt="userprofile"></img>
            <p class="bold"> Ronald Richards </p>
            <p class="small" style="color:#9E5EF4;  font-size:20px;"> <a href = "#">Profile</a></p>
            <p class="leftMargin" style="color: #CACACA;  font-size:17px;"> Dec 23, 2022 18:52 </p>
            <p style="color: #FF0000;"> Pending <img src="icons/pending.svg"></img></p>
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
function random_strings()
{
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    return substr(str_shuffle($str_result), 0, 8); //length of the random code is 8
}
echo random_strings();

?>