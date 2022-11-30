<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Create Plan</title>
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
        display: flex;
        align-items: center;
        justify-content: center;
        width: 60%;
        margin-left:10%;
    }

    .add{
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .text{
        font-size:25px;
        text-align:center;
        margin-top:30px;
    }

    .add i{
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 150px;
        padding: 30px;
        border-radius: 50%;
        border: 10px solid #7282FB;
        color: #7282FB ;
        width: 206px;
        height: 206px;
    }

    .add_btn{
        width: 100%;
        padding: 15px;
        text-align: center;
        background: #7282FB;
border-radius: 10px;
font-size:15px;
color:white;
    }


    @media (min-width: 0px) and (max-width: 720px) {
        .plan_form{
            width:100% !important;
            margin-left:0 !important;
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

            <div class="add_icon">
                <br>
                <div class="add">
                    <i class="fa-solid fa-plus"></i>
                </div>
                <p class="text">You have not created any plan yet</p>
                <br>
                <p class="add_btn">Add Plan</p>
            </div>



        </div>
    </div>
    <!-- Contents End -->
</body>

</html>