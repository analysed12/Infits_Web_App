<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infits - Add Client</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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

        margin: 5% 25%;

    }

    .forms .input-box {
        height: 50px;
        width: 606px;
        background: #FFFFFF;
        /* box-shadow: 0px 5px 5px #FFFFFF; */
        /*0px 4px 4px rgba(0, 0, 0, 0.25);*/
        border-radius: 15px;
        padding-left: 40px;
        font-size: 23px;
        line-height: 57px;
        outline: none;
        outline-color: #FFFFFF;
        /* color: #D7D7D7; */
        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);

    }

    .forms .buttons {
        margin-top: 30px;
        width: 606px;
        height: 50px;
        background: #9E5EF4;
        color: #FFFFFF;
        font-size: 23px;
        border: solid 1px #9E5EF4;
        border-radius: 10px;
    }

    .forms .ref-code {
        box-sizing: border-box;
        margin-top: 25px;
        width: 606px;
        height: 50px;
        font-size: 23px;
        background: #FFFFFF;
        border: 1px solid #9E5EF4;
        border-radius: 9.1346px;
        color: #9E5EF4;
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
<?php
function random_strings()
{
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    // return substr(str_shuffle($str_result), 0, 8); //length of the random code is 8
}
$query = "UPDATE `dietitian` SET `dietician-referral` = 'random_strings()' WHERE `dietitianuserID` = 'John_wayne';";
echo random_strings();
$query = "UPDATE `dietitian` SET `dietician-referral` = 'random_strings()' WHERE `dietitianuserID` = 'Paul_weasely';";
$query = "UPDATE `dietitian` SET `dietician-referral` = 'random_strings()' WHERE `dietitianuserID` = 'Priya';";
?>
<body>
    <div class="container-sm">
        <div class="heading">
            <p> Add a Client </p>
        </div>

        <div id="myDIV" class="box">
            <button onclick="window.location.href ='http://localhost:8080/add-client/add-client.php';" class="btn current"> Verification Codes </button>
            <button onclick="window.location.href ='http://localhost:8080/add-client/acceptedverify.php';" class="btn"> Verified Clients </button>
            <button onclick="window.location.href ='http://localhost:8080/add-client/pendingreq.php';" class="btn"> Pending Verification </button>
        </div>

        <!-- <div class="forms">
            <input class="input-box" type="text" placeholder="Enter client code here"></input>
            <button class="buttons" type="submit" href="#"> Send Request </button>
            <button class="ref-code" type="submit" href="#"> Share Referral Code </button>
        </div> -->
        <div class="d-flex justify-content-around flex-wrap md-5">
            <div class="card text-center m-3" style="width: 12rem;">
                <div class="card-body center-block">
                    <img class="card-img-top rounded-circle img-center" src="images/account_name.svg" alt="Card image cap" style="width:80px;">
                    <p class="text-center">Ronald Richards</p>
                    <p class="card-text text-center">Profile</p>
                    <button type="button" class="btn btn-primary text-center" onclick="">Generate a verification code</button>

                </div>
            </div>
            <div class="card text-center m-3" style="width: 12rem;">
                <div class="card-body center-block">
                    <img class="card-img-top rounded-circle img-center" src="images/account_name.svg" alt="Card image cap" style="width:80px;">
                    <p class="text-center">Ronald Richards</p>
                    <p class="card-text text-center">Profile</p>
                    <button type="button" class="btn btn-primary text-center">Generate a verification code</button>
                </div>
            </div>
            <div class="card text-center m-3" style="width: 12rem;">
                <div class="card-body center-block">
                    <img class="card-img-top rounded-circle img-center" src="images/account_name.svg" alt="Card image cap" style="width:80px;">
                    <p class="text-center">Ronald Richards</p>
                    <p class="card-text text-center">Profile</p>
                    <button type="button" class="btn btn-primary text-center">Generate a verification code</button>
                </div>
            </div>
            <div class="card text-center m-3" style="width: 12rem;">
                <div class="card-body center-block">
                    <img class="card-img-top rounded-circle img-center" src="images/account_name.svg" alt="Card image cap" style="width:80px;">
                    <p class="text-center">Ronald Richards</p>
                    <p class="card-text text-center">Profile</p>
                    <button type="button" class="btn btn-primary text-center">Generate a verification code</button>
                </div>
            </div>
            <div class="card text-center m-3" style="width: 12rem;">
                <div class="card-body center-block">
                    <img class="card-img-top rounded-circle img-center" src="images/account_name.svg" alt="Card image cap" style="width:80px;">
                    <p class="text-center">Ronald Richards</p>
                    <p class="card-text text-center">Profile</p>
                    <button type="button" class="btn btn-primary text-center">Generate a verification code</button>
                </div>
            </div>
            <div class="card text-center m-3" style="width: 12rem;">
                <div class="card-body center-block">
                    <img class="card-img-top rounded-circle img-center" src="images/account_name.svg" alt="Card image cap" style="width:80px;">
                    <p class="text-center">Ronald Richards</p>
                    <p class="card-text text-center">Profile</p>
                    <button type="button" class="btn btn-primary text-center">Generate a verification code</button>
                </div>
            </div>
            <div class="card text-center m-3" style="width: 12rem;">
                <div class="card-body center-block">
                    <img class="card-img-top rounded-circle img-center" src="images/account_name.svg" alt="Card image cap" style="width:80px;">
                    <p class="text-center">Ronald Richards</p>
                    <p class="card-text text-center">Profile</p>
                    <button type="button" class="btn btn-primary text-center">Generate a verification code</button>
                </div>
            </div>
            <div class="card text-center m-3" style="width: 12rem;">
                <div class="card-body center-block">
                    <img class="card-img-top rounded-circle img-center" src="images/account_name.svg" alt="Card image cap" style="width:80px;">
                    <p class="text-center">Ronald Richards</p>
                    <p class="card-text text-center">Profile</p>
                    <button type="button" class="btn btn-primary text-center">Generate a verification code</button>
                </div>
            </div>
            <div class="card text-center m-3" style="width: 12rem;">
                <div class="card-body center-block">
                    <img class="card-img-top rounded-circle img-center" src="images/account_name.svg" alt="Card image cap" style="width:80px;">
                    <p class="text-center">Ronald Richards</p>
                    <p class="card-text text-center">Profile</p>
                    <button type="button" class="btn btn-primary text-center">Generate a verification code</button>
                </div>
            </div>
            <div class="card text-center m-3" style="width: 12rem;">
                <div class="card-body center-block">
                    <img class="card-img-top rounded-circle img-center" src="images/account_name.svg" alt="Card image cap" style="width:80px;">
                    <p class="text-center">Ronald Richards</p>
                    <p class="card-text text-center">Profile</p>
                    <button type="button" class="btn btn-primary text-center">Generate a verification code</button>
                </div>
            </div>
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