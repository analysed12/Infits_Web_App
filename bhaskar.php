<?php
include('navbar.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family='NATS'">
    <title>Document</title>
</head>
<style>
   


    

    

     .text2 {

        font-family: 'NATS';
        width: 101px;
        height: 100px;
        left: 851px;
        top: 197px;
        font-style: normal;
        font-weight: 400;
        font-size: 40px;

        margin-left: 26px
           
        ; 

     } 

   
</style>
<script src="https://cdn.tailwindcss.com"></script>

<body>
    


   
     

    <div class="flex justify-center items-center md:flex-row flex-col items-center my-4 drop-shadow-md ">
        <img class="rounded-2xl" src="./Unsplash-Avatars_0004s_0005_laurence-cruz-P7yvmajPvkM-unsplashjohnwayne.svg " class="h-40 w-40">
        <p class="text2 ">John <br> Wayne</p>

    </div>
    <div class="flex justify-center">
        <div class="  grid grid-rows-2 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-12 ">
            <div class="border rounded flex flex-col justify-around items-center shadow-md" style="height: 171px; width: 171px">
                <div class="h-16 w-16 rounded-full bg-slate-200 justify-center items-center flex">
                    <img src="./Vectormyprofile.svg">
                </div>
                <p style="font-family: 'NATS'">My Profile</p>
            </div>
            <div class="border rounded flex flex-col justify-around items-center shadow-md" style="height: 171px; width: 171px">
                <div class="h-16 w-16 rounded-full bg-slate-200 justify-center items-center flex">
                    <img src="./Vectorrefferalcode.svg">
                </div>

                <p style="font-family: 'NATS'">Referral Code</p>
            </div>
            <div class="border rounded flex flex-col justify-around items-center shadow-md" style="height: 171px; width: 171px">
                <div class="h-16 w-16 rounded-full bg-slate-300 justify-center items-center flex">
                    <img src="./Vectoraboutus.svg">
                </div>
                <p style="font-family: 'NATS'">About Us</p>
            </div>
            <div class="border rounded flex flex-col justify-around items-center shadow-md" style="height: 171px; width: 171px;">
                <div class="h-16 w-16 rounded-full bg-slate-200 justify-center items-center flex">
                    <div class="h-10 w-10 rounded-full bg-violet-500 justify-center items-center flex">
                        <img src="./Vectormyachievements.svg" style="background:#814BFF; border-radius: 5px; ;">
                    </div>
                </div>
                <p style="font-family: 'NATS'"> MyAchivements</p>
            </div>
            <div class="border rounded flex flex-col justify-around items-center shadow-md" style="height: 171px; width: 171px">
                <div class="h-16 w-16 rounded-full bg-slate-200 justify-center items-center flex">
                    <img src="./Vectorrefertofriends.svg">
                </div>
                <p style="font-family: 'NATS'">Refer to <br>friends</p>
            </div>
            <div class="border rounded flex flex-col justify-around items-center shadow-md" style="height: 171px; width: 171px">
                <div class="h-16 w-16 rounded-full bg-slate-200 justify-center items-center flex">
                    <div class="h-10 w-10 rounded-full bg-teal-300 justify-center items-center flex">


                        <img src="./Vectornotifications.svg">
                    </div>
                </div>
                <p style="font-family: 'NATS'">Notifications</p>
            </div>
        </div>
    </div>

    <div class="flex justify-end mx-32 my-4">
        <button class="bg-red-600 px-3 py-2 rounded ">Logout</button>
    </div>


</body>

</html>