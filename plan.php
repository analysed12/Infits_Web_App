<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Plan</title>
</head>
<style>
html {
    overflow-x: hidden;
}

#content {
    display: flex;
    flex-direction: column;
    height: 90%;
    font-family: "Poppins";
    font-style: normal;
    font-weight: 500;
    font-size: 35px;
    padding: 20px;
}

.plan_form {
    margin-left: 10%;
    width: 80%;
    /* background-color: aquamarine; */
}

.event-image {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 5%;
}

.ev-img {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #667080;
    color: white;
    height: auto;
    width: auto;
    padding: 2%;
    border-radius: 50%;
}

.event-image i {
    font-size: 85px;
    padding: 10px;
    /* width: 10%;
    height: 10%; */
}

.event_form {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left: 20%;
    width: 60%;
    /* background-color: brown; */
    margin-top: 5%;
    padding: 2%;
    margin-bottom: 5%;
}

.tag_title {
    font-size: 25px;
    letter-spacing: 1.5px;
    text-transform: capitalize;
    font-weight: 600;
    color: #1D1E20;
}

.tag-item {
    background: #7282fb;
    border-radius: 10px;
    color: white;
    padding: 10px;
    /* margin: 10px; */
    font-size: 20px;
    width: auto;
}

.subject {
    display: block;
    /* font-size: 18px; */

    width: 100%;
}

.subject-text {
    font-size: 18px;
}

.btns button {
    width: 40%;
    height: 62px;
    background: #FFFFFF;
    border: 2px solid #7282FB;
    border-radius: 10px;
    font-size: 18px;
}

.openBtn {
    display: flex;
    justify-content: left;
}

.openButton {
    /* border: none;
    padding: 14px 20px;
    cursor: pointer; */
    /* position: fixed; */
}

.loginPopup {
    position: relative;
    text-align: center;
    width: 100%;
}

.formPopup {
    display: none;
    position: fixed;
    left: 45%;
    top: 5%;
    transform: translate(-50%, 5%);
    border: 3px solid #999999;
    z-index: 9;
}

.formContainer {
    max-width: 300px;
    padding: 20px;
    background-color: #fff;
}

.formContainer input[type=text],
.formContainer input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 20px 0;
    border: none;
    background: #eee;
}

.formContainer input[type=text]:focus,
.formContainer input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

.formContainer .btn {
    padding: 12px 20px;
    border: none;
    background-color: #8ebf42;
    color: #fff;
    cursor: pointer;
    width: 100%;
    margin-bottom: 15px;
    opacity: 0.8;
}

.formContainer .cancel {
    background-color: #cc0000;
}

.formContainer .btn:hover,
.openButton:hover {
    opacity: 1;
}

.plan_name{
    text-align :center !important;
    border-top:none !important;
    border-left:none !important;
    border-right:none !important;
    outline:none;
    font-size:25px;

}
@media (min-width: 0px) and (max-width: 720px) {
    .plan_name_box{
        text-align:center:
        /* width:50% !important; */
    }
    .plan_form {
        margin-left: 0% !important;
        width: 100% !important;
        /* background-color: aquamarine; */
    }

    .event_form {
        margin-left: 0% !important;
        width: 100%;
    }

    .tag_title {
        font-size: 15px !important;
    }

    .tag-item {
        font-size: 15px !important;
    }
}
</style>

<body>
    <!-- Navbar Start -->
    <?php
    include("navbar.php")
    ?>
    <!-- Navbar End -->

    <!-- Contents Start -->
    <div id="content">
        <!-- Calendar -->
        <h4 class="header">Create Plan</h4>

        <!-- Other content -->
        <div class="plan_form">
            <div class="event-image">
                <div class="ev-img">
                    <i class="fa-solid fa-user"></i>
                </div>


            </div>
            <br>
            <!-- <div style="text-align:center" class="plan_name_box">
                <input type="text" placeholder="Plan Name"  class="plan_name">
            </div> -->
            <div class="event_form">
                <div class="evt-form">


                    <div class="tags">
                        <div class="tag_title">Tags</div>
                        <div class="tag">
                            <?php
                        include "config.php";
                        $sql = "SELECT * FROM plans";
                        $result=mysqli_query($conn,$sql);
                        $num = mysqli_num_rows($result);
                        if ($num >0){
                            while ($row =mysqli_fetch_assoc($result)){
                                ?>
                            <div style="display: inline-block" class="tag-item" name="<?php echo $row['planname']?>">
                                <?php echo $row['planname']?></div>
                            <?php
                        }
                    }
                        ?>

                            <button type="submit" style="display: inline-block; border:none;"
                                class="tag-item openButton openBtn" onclick="openForm()">+</button>
                        </div>
                        <!-- <br> -->

                    </div>
                    <?php
                             if($_SERVER['REQUEST_METHOD'] == "POST"){
                             $planname = $_POST['tag_name']; 
                             if ($planname != ""){
                             $sql1 = "INSERT INTO plans  VALUES ('$planname')";
                             $result1=mysqli_query($conn,$sql1);
                             echo "<meta http-equiv='refresh' content='0'>";
                             }
                             }
                             ?>
                             <br>
                    <label for="subject" class="subject tag_title">Plan Duration</label>
                    <input class="subject subject-text" type="datetime-local" name="subject" style="height: 45px;" />
                    <br />
                    <label for="subject" class="subject tag_title">Description</label>
                    <input class="subject " type="text" name="subject" style="height: 79px;" />
                    <br />
                    <label for="subject" class="subject tag_title">Price</label>
                    <input class="subject subject-text" type="text" name="subject" placeholder="Rs. /month"
                        style="height: 45px;" />
                </div>
            </div>


            <!-- Pop up for adding new tags -->
            <div class="loginPopup">
                <div class="formPopup" id="popupForm">
                    <form action="plan.php" method="post">
                        <input type="text" name="tag_name">
                        <button type="submit">Add</button>
                    </form>
                </div>
            </div>
            <div class="btns">
                <button>Select</button>
                <button style="float: right;">Save</button>
            </div>
            <br><br><br>
        </div>
    </div>
    <!-- Contents End -->
</body>
<script>
function openForm() {
    document.getElementById("popupForm").style.display = "block";
}

function closeForm() {
    document.getElementById("popupForm").style.display = "none";
}
</script>

</html>