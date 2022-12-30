<?php include('connection.php'); ?>
<?php
   

?>


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
    width: 70%;
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
    padding:10px;
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

@media (min-width: 0px) and (max-width: 720px) {
    .plan_form {
    margin-left: 0% !important;
    width: 100% !important;
    /* background-color: aquamarine; */
}
.event_form {
    margin-left:15% !important;
    width: 60%;
}
    .tag_title{
        font-size:15px !important;
    }
    .tag-item{
font-size:15px !important;
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
        <form action =" " method="post" > 
        <div class="plan_form">
            <div class="event-image">
                <div class="ev-img">
                    <i class="fa-solid fa-user"></i>
                </div>
               
            </div>

            <div class="event_form">
                <div class="evt-form">
                    <div class="tags">
                        <div class="tag_title">Tags</div>
                        <div class="tag">
                            <div style="display: inline-block" class="tag-item">Keto Diet</div>
                            <div style="display: inline-block" class="tag-item">Vegan Diet</div>
                            <div style="display: inline-block" class="tag-item">Diet Chart</div>
                            <div style="display: inline-block" class="tag-item">+</div>
                        </div>
                        <br>
                    </div>
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

            <div class="btns">
                <button>Select</button>
                <button style="float: right;">Save</button>
            </div>
            <br><br><br>
        </div>
    </div>
    <!-- Contents End -->
</body>

</html>