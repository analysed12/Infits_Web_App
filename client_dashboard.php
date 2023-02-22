<?php
include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Infit</title>
    <!-- <link rel="stylesheet"  /> -->
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
</head>
<style>


body {
    height: 100vh;
    overflow: auto;
    font-family: 'NATS', sans-serif !important;
}

#content {
    display: flex;
    flex-direction: column;
    height: 90%;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 500;
    font-size: 15px;
    padding: 20px;
}

.col {
    margin-right: 50px !important;
    width: 24% !important;
    margin-bottom: 20px !important;
    border-radius: 15px;
    padding: 15px;
    height: 279.26px;
}

i {
    font-size: 100px;
    margin-top: 20px;
    margin-bottom: 20px;
}

a {
    text-decoration: none !important;
}

</style>

<body>
    <div id="content">
        <?php
        $client_id = $_GET['client_id'];
        $sql = "SELECT name FROM addclient where client_id = $client_id";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        ?>
        <h4>Client Dashboard for "<span style="text-transform:uppercase;font-weight:bold"><?php echo $name ?></span>"</h4>
        <br>
        <div class="row row-cols-2 row-cols-lg-3" style="margin-left:20px; " ;>

            <div class="col " style="border: 1px solid #FFA381;color: #FFA381;text-align:center;">
                <?php echo '<a style="color:#FFA381" href="client_profile.php?client_id='.$client_id.'">' ?>

                    <div class="row">
                        <p style="text-align:center !important;">Personal Info</p>
                    </div>
                    <div class="row"><img src="images/User copy.png" style="width:60%;margin-left:6rem" alt=""></div>
                    <div class="row">
                        <p style="text-align:center;">Name,Plan,etc</p>
                    </div>
                </a>

            </div>

            <div class="col " style="border: 1px solid #9C74F5;
        color: #9C74F5;text-align:center;">
                <?php echo '<a style="color: #9C74F5;" href="nameofpage.php?client_id='.$client_id.'">' ?>

                    <div class="row">
                        <p style="text-align:center !important;">Diet Chart</p>
                    </div>
                    <div class="row"><img src="images/Clipboard.png" style="width:70%;margin-left:4.5rem" alt=""></div>
                    <div class="row">
                        <p style="text-align:center;">Plan your diet</p>
                    </div>
                </a>
            </div>

            <div class="col " style="border: 1px solid #E375B3;
        color: #E375B3;text-align:center;">
                <?php echo '<a style="color: #E375B3;" href="nameofpage.php?client_id='.$client_id.'">' ?>

                    <div class="row">
                        <p style="text-align:center !important;">Metrics</p>
                    </div>
                    <div class="row"><img src="images/Combo Chart.png" style="width:60%;margin-left:6rem" alt=""></div>
                    <div class="row">
                        <p style="text-align:center;">Check progress</p>
                    </div>
                </a>
            </div>

            

            <div class="col " style="border: 1px solid #76A5FF;
        color: #76A5FF;text-align:center;">
                <?php echo '<a style="color:#76A5FF;" href="mealTracker.php?client_id='.$client_id.'">' ?>

                    <div class="row">
                        <p style="text-align:center !important;">Tracker</p>
                    </div>
                    <div class="row"><img src="images/Cutlery.png" style="width:55%;margin-left:9.5rem" alt=""></div>
                    <div class="row">
                        <p style="text-align:center;">Track Meal</p>
                    </div>
                </a>
            </div>

            <div class="col " style="border: 1px solid #1FB688;
        color: #1FB688;text-align:center;">
                <?php echo '<a style="color: #1FB688;" href="nameofpage.php?client_id='.$client_id.'">' ?>
                    <div class="row">
                        <p style="text-align:center !important;">Health Details</p>
                    </div>
                    <div class="row"><img src="images/Health Report.png" style="width:55%;margin-left:7rem" alt=""></div>
                    <div class="row">
                        <p style="text-align:center;">Form,Document</p>
                    </div>
                </a>
            </div>

            <div class="col " style="border: 1px solid #FFA381;
        color: #FFA381;text-align:center;">
                <?php echo '<a style="color: #FFA381;" href="nameofpage.php?client_id='.$client_id.'">' ?>

                    <div class="row">
                        <p style="text-align:center !important;">Chats</p>
                    </div>
                    <div class="row"><img src="images/Chat Bubble.png" style="width:55%;margin-left:7rem" alt=""></div>
                    <div class="row">
                        <p style="text-align:center;">Chat with ...</p>
                    </div>
                </a>
            </div>



        </div>
    </div>
</body>

</html>