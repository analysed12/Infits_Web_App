<?php
include('navbar.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<script src="https://cdn.tailwindcss.com"></script>

<body>

    <style>
        .footer {
            display: flex;
            justify-content: center;
        }

        .footer .footText {
            border-radius: 20px;
            background-color: #FFF0D3;
            padding: 30px 20px 30px 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;

        }


        .footer .footText div {
            width: 850px;
            display: flex;
            justify-content: space-between;
        }

        .footer .footText h2 {
            font-weight: 100;
            font-size: 36px;
            width: 450px;
            display: inline;
            font-family: 'Julius Sans One', sans-serif;
            width: 806px;
            height: 61px;

        }

        .footer .footText div img {

            height: 25px;
            opacity: 50%;
        }

        .heading h1 {
            margin-right: 50px;
        }

        /* p{
            height: 53px;
            width: 184px;
            font-family: 'Poppins';
            color: #0177FD;
        } */
    </style>
    <div class="heading  my-6">
        <h1 class="px-64" style="font-weight: 400;
                font-size: 48px; font-family: 'NATS'; ">Clients</h1>
    </div>
    <!--  <div class="flex justify-center">
        <div class="  grid grid-rows-1 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-12 ">
            <div class="border rounded flex flex-col justify-around items-center shadow-md" style="height: 171px; width: 171px">
                <div class="h-16 w-16 rounded-full bg-slate-200 justify-center items-center flex">
                    <img src="./Vectormyprofile.svg">
                </div>
                <p style="font-family: 'NATS'">My Profile</p>
            </div>
            <div class="border rounded flex flex-col justify-around items-center shadow-md" style="height: 171px; width: 171px">
                <div class="h-16 w-16 rounded-full bg-slate-200 justify-center items-center flex">
                    <img src="./Vectorrefferalcode.svg">
                </div> -->

    <!-- <p style="font-family: 'NATS'">Referral Code</p> -->
    <!-- </div> -- -->
    <div class="flex flex-col md:flex-row justify-center my-12 gap-x-16">

        <div class="border rounded flex flex-col justify-around items-center shadow-lg " style="height: 274.96px; width: 278px">
            <div class="h-16 w-16   justify-center items-center flex">
                <img src="./Vectoraddclient.svg">
            </div>
            <p class="text-cyan-800" style="font-size: 25px; font-weight: 500; font-family: 'Poppins' " height: 53px; width: 184px; color: blue ;>Add Client</p>
        </div>

        <div class="border rounded flex flex-col justify-around items-center shadow-lg " style="height: 274.96px; width: 278px">
            <div class="h-16 w-16  justify-center items-center flex">
                <img src="./Vectorclientlist.svg">
            </div>

            <p class="text-cyan-800 " style=" font-size: 25px;font-weight: 500; font-family: 'Poppins'" height: 53px; width: 184px; >Client List</p>
        </div>

    </div>



    <div class="footer">
        <div class="footText">
            <div>
                <img src="./Vectorcommaleft.svg" alt="">
                <img src="./Vectorcommaright.svg" alt="">
            </div>
            <h2>Never Give Up! Great Things Take Time.</h2>
        </div>
    </div>





</body>

</html>