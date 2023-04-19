<?php
include('navbar.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel='stylesheet' type='text/css' media='screen' href='styles/main.css'>

    <link rel='stylesheet' type='text/css' media='screen' href='styles/room.css'>
    <title>LIVE CALL</title>
    <style>
        @font-face {
            font-family: 'NATS';
            src: url('font/NATS.ttf.woff') format('woff'),
                url('font/NATS.ttf.svg#NATS') format('svg'),
                url('font/NATS.ttf.eot'),
                url('font/NATS.ttf.eot?#iefix') format('embedded-opentype');
            font-weight: normal;
            font-style: normal;
        }

        ::placeholder {
            /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: white;
        }

        body {
            font-family: 'NATS', sans-serif;
            font-weight: 400;


        }

        .live_call {
            display: flex;



        }

        .livecall_leftside {
            margin: 2rem;
            width: 625px;
            height: 400px;

        }

        .livecall_rightside {
            margin: 2rem;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            padding-left: 13px;

        }


        .btn_endlive {
            width: 176px;
            height: 45px;
            background: #FF0000;
            box-shadow: 0px 8px 24px rgba(176, 190, 197, 0.32), 0px 3px 5px rgba(176, 190, 197, 0.32);
            border-radius: 10px;
            border: none;
            color: white;
            margin-top: 1rem;
        }

        .rightside_header {
            display: flex;
            gap: 1rem;
            float: left;
        }

        .mic_icon {
            padding: 0.5rem;
            padding-left: 0.7rem;
            padding-right: 0.7rem;
            background: rgba(175, 175, 175, 0.4);
            border-radius: 50%;
        }

        .live {
            width: 70.8px;
            height: 30.29px;
            background: linear-gradient(90deg, #2667FF -0.43%, #D553E7 100%);
            box-shadow: 0px 8px 24px rgba(176, 190, 197, 0.32), 0px 3px 5px rgba(176, 190, 197, 0.32);
            border-radius: 46px;
            color: white;
            text-align: center;
            font-size: 16px;
            margin-top: 0.3rem;
            padding-top: 0.2rem;
        }

        .eye {
            width: 70px;
            height: 30.38px;
            background: #676767;
            box-shadow: 0px 8px 24px rgba(176, 190, 197, 0.32), 0px 3px 5px rgba(176, 190, 197, 0.32);
            border-radius: 46px;
            display: flex;
            color: white;
            font-size: 20px;
            padding-left: 0.5rem;
            margin-top: 0.25rem;

        }

        .cross {
            width: 41px;
            height: 41px;
            background: linear-gradient(90deg, #2667FF 10.19%, #D553E7 100%);
            color: white;
            border-radius: 50%;
            font-size: 30px;
            padding-left: 0.9rem;
        }

        .rightside_main {
            width: 364px;
            height: 545px;
            background: #FFFFFF;
            border: 2px solid #F3F3FF;
            border-radius: 15px;
            position: relative;
        }

        .chatbottom {
            bottom: 0px;
            position: absolute;
            display: flex;
            gap: 0.7rem;
            padding: 10px;
        }

        .meassage_input {
            width: 80%;
            height: 36px;
            background: #C9C9C9;
            border-radius: 8px;
            color: white;
            font-size: 20px;
            border: none;
            padding: 15px;
        }

        .thumb {
            width: 36px;
            height: 36px;
            background: #C9C9C9;
            backdrop-filter: blur(2.4px);
            border-radius: 50%;
            text-align: center;
            padding-top: 0.2rem;
        }

        .overlay {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.6);
            transition: opacity 500ms;
            visibility: hidden;
            opacity: 0;
        }

        .overlay:target {
            visibility: visible;
            opacity: 1;
        }

        .popup {

            margin: 290px;
            margin-left: 550px;
            padding: 20px;
            position: relative;
            transition: all 5s ease-in-out;
            width: 400px;
            height: 250px;
            background: #FFFFFF;
            border: 1.74869px solid #E4E4E4;
            box-shadow: 0px 5.24607px 6.99476px rgba(0, 0, 0, 0.09);
            border-radius: 31.4764px;
            display: flex;
            flex-direction: column;
            gap: 2rem;
            align-items: center;
        }

        .popup_msg {
            width: 257px;
            height: 100px;
            display: flex;
            align-items: center;
            text-align: center;
            font-size: 40px;
        }

        .end {
            width: 130px;
            height: 46px;
            font-size: 25px;
            border: none;
            text-decoration: none;
            color: white;
            background-color: #FF0000;
            border-radius: 10px;

        }

        .cancel {

            width: 130px;
            height: 46px;
            font-size: 25px;
            color: #B636DF;
            background: #FFFFFF;
            border: 1px solid #B636DF;
            border-radius: 10px;

        }

        @media screen and (max-width: 1200px) {
            .popup {
                margin: 10%;
                margin-top: 50%;
                width: auto;
            }

            .live_call {
                display: flex;
                flex-direction: column;
                gap: 1.5rem;

            }

            .pic_live {
                width: 85%;
                height: 80%;

            }

            .btn_endlive {
                width: auto;
                height: auto;
            }

            .end {
                width: auto;
                height: auto;
            }

            .cancel {
                width: auto;
                height: auto;
            }


        }






        #stream__container {
            justify-self: center;
            width: 80vw;
            /* default width */
            max-width: calc(100% - 40.7rem);
            /* maximum width */
            position: fixed;
            left: 15.7rem;
            top: calc(100vh - 72px);
            overflow-y: auto;
            height: 100%;

        }


        #stream__box {
            background-color: #3f434a;
            height: 40vh;
            width: 90%;
            display: block;
            background-image: url("./images/ronald_small.png");
            background-repeat: no-repeat;
            background-size: cover;
        }

        #stream__box .video__container {
            border: 2px solid #000;
            border-radius: 0;
            height: 100% !important;
            width: 100% !important;

            background-size: 300px;
            border-radius: 15px;
        }

        #stream__box video {
            border-radius: 0;
        }

        #streams__container {
            display: flex;
            flex-wrap: wrap;
            gap: 2em;
            justify-content: center;
            align-items: center;
            margin-top: 25px;
            margin-bottom: 20px;
            width: 625px;
            height: 432px;
        }

        .video__container {
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px solid #b366f9;
            border-radius: 5%;
            cursor: pointer;
            overflow: hidden;
            height: 440px;
            width: 700px;

            background-image: url("/images/logo.png");
            background-repeat: no-repeat;
            background-position: center;
            background-size: 75px;
        }

        .video-player {
            height: 100%;
            width: 100%;
        }

        .video-player video {
            border-radius: 5%;
        }

        #stream__box {
            position: relative;
            border-radius: 15px;
        }

        .stream__focus {
            width: 100%;
            height: 100%;
        }

        .stream__focus iframe {
            width: 100%;
            height: 100%;
        }

        .stream__actions {
            /* position: fixed;
  bottom: 1rem; */
            border-radius: 20px;
            /* background-color: #1a1a1a60; */
            padding: 1rem;
            /* left: 50%;
  display: none; */
            gap: 1rem;
            /* transform: translateX(-50%); */
            display: flex;
        }

        .flex-container {
            display: flex;
            flex-direction: row;
            justify-content: space-between;


        }

        .stream__actions a,
        .stream__actions button {
            cursor: pointer;
            background-color: #A8AEBC;
            color: #fff;
            border: black;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            transition: all 0.2s ease-in-out;
            box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.25);
            height: 50px;
            width: 50px;
        }

        .stream__actions a svg,
        .stream__actions button svg {
            width: 1.5rem;
            height: 1.5rem;
            fill: #ede0e0;
        }

        .stream__actions a.active,
        .stream__actions button.active,
        .stream__actions a:hover,
        .stream__actions button:hover {
            background-color:#FF0000 ;
        }


        #join-btn {
            background-color: #845695;
            font-size: 18px;
            border: none;
            color: #fff;

            /* position: fixed;
  bottom: 1rem; */
            border-radius: 8px;
            /* left:50%;
  transform: translateX(-50%); */
            cursor: pointer;

        }

        #_messages {
            padding-left: 12px;
            padding-top: 8px;
        }
    </style>
</head>

<body>
    <div class="live_call">
        <div class="livecall_leftside">
            <div style="display:flex;gap:1rem"><img src="images/liveprofile.png" style="width: 40.91px;height: 40.91px;border-radius:50%"> <span style="font-size:30px"><?php echo $_SESSION["name"]; ?></span></div>
            <div style="height: 449px; margin-top:1rem">


                <div id="stream__box"></div>

                <!-- <div id="streams__container"></div> -->
                <div class="flex-container">
                    <div class="stream__actions">
                        <div>
                            <button id="join-btn">join</button>
                        </div>

                        <button id="camera-btn" class="active">
                            <img src="./icons/Video.png" alt="">
                        </button>

                        <button id="mic-btn" class="active">
                            <img src="./icons/Mute.png" alt="">
                        </button>

                        <button id="screen-btn" style="background-color:white">
                            <img src="./icons/shareScreen.png" alt="">
                        </button>


                    </div>


                    <a href="#popup1">
                        <div style="float:right"><button class="btn_endlive">End Live Video</button></div>
                    </a>
                    <!-- <button id="leave-btn" style="background-color: #FF5050;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M16 10v-5l8 7-8 7v-5h-8v-4h8zm-16-8v20h14v-2h-12v-16h12v-2h-14z" />
                        </svg>
                    </button> -->

                </div>

            </div>


        </div>
        <div class="livecall_rightside">
            <div class="rightside_header">
                <!-- <img src="images/mic.png" style="width:13%" class="mic_icon"> -->
                <span class="live">LIVE</span>
                <span class="eye"><img src="images/darkeye.png" style="margin-right:0.3rem;width:40%;height:50%;margin-top:0.5rem">2k</span>
                <span class="cross">x</span>


            </div>

            <div class="rightside_main">
                <div id="_messages"></div>
                <form id="message__form">
                    <div class="chatbottom">

                        <input id="myInputMessage" type="text" class="meassage_input" name="message" placeholder="Send a message....">
                        <span onclick="submitThumb()" class="thumb"><img src="images/thumbsup.png" style="width:49%"></span>
                        <span onclick="submitEmoji()" class="thumb" type="submit"><img src="images/emoji.png" style="width:70%"></span>


                    </div>
                </form>

            </div>


        </div>


    </div>

    <div id="popup1" class="overlay">
        <div class="popup">
            <div class="popup_msg">Sure you want to end live video?</div>
            <div>
                <a href="live.php" style="background-color:none"><button class="end">End</button></a>
                <a href="live_streaming.php" style="background-color:none"><button class="cancel">Cancel</button></a>
            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
<script type="text/javascript" src="./live/js/AgoraRTC_N-4.11.0.js"></script>
<script type="text/javascript" src="./live/js/agora-rtm-sdk-1.4.4.js"></script>
<script type="text/javascript" src="./live/js/room.js"></script>
<script type="text/javascript" src="./live/js/room_rtm.js"></script>
<script type="text/javascript" src="./live/js/room_rtc.js"></script>




</html>