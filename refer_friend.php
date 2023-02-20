<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Refer friend </title>

    <style>
        #content h1 {
            margin-left: 30px;
            margin-top: 10px;
            font-size: 2rem;
        }

        #content .flex-container {
            /* border: 1px solid red; */
            display: flex;
            align-items: center;
            justify-content: center;
            align-items: flex-start;
            margin-top: 50px;
            flex-wrap: wrap;
            gap: 20px;
        }

        #content .flex-container .refer-code-container {
            /* border: 1px solid red; */
            width: 500px;
            display: flex;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        #content .flex-container .refer-code-container img {
            width: 100%;
        }

        #content .flex-container .refer-code-container .refer-code-box {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            flex-direction: column;
        }

        #content .flex-container .refer-code-container .refer-code-box p {
            border: 1px solid #4b9afb;
            color: #4b9afb;
            width: 250px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 5px 15px;
            border-radius: 10px;
        }

        #content .flex-container .refer-code-container .refer-code-box p button {
            color: #4b9afb;
            border: none;
            font-size: 0.8rem;
            background-color: white;
        }

        #content .flex-container .refer-code-container .refer-code-box button#share {
            border: none;
            background-color: #4b9afb;
            color: white;
            width: 125px;
            height: 45px;
            margin-top: 10px;
            border-radius: 10px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            -ms-border-radius: 10px;
            -o-border-radius: 10px;
        }

        #content .flex-container .friend-list-box {
            width: 400px;
            padding: 20px;
        }

        #content .flex-container .friend-list-box .heading-box {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        #content .flex-container .friend-list-box .heading-box h3 {
            font-size: 1.4rem;
        }

        #content .flex-container .friend-list-box{
            /* border: 1px solid red; */
            width: 500px;
        }
        #content .flex-container .friend-list-box ul {
            /* border: 1px solid red; */
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            justify-content: space-between;
            list-style: none;
            padding: 20px;
            position: relative;
            height: 100%;
            width: 100%;
            overflow-x: auto;
        }

        #content .flex-container .friend-list-box ul::-webkit-scrollbar {
            width: 10px;
        }

        #content .flex-container .friend-list-box ul::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px #4b9afb;
            border-radius: 10px;
        }

        #content .flex-container .friend-list-box ul::-webkit-scrollbar-thumb {
            background: rgb(111, 174, 245);
            border-radius: 10px;
        }

        #content .flex-container .friend-list-box ul li {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        #content .flex-container .friend-list-box ul li .user {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #content .flex-container .friend-list-box ul li .user .para-box {
            padding-top: 15px;
            padding-left: 10px;
        }

        #content .flex-container .friend-list-box ul li .user .para-box p {
            line-height: 2px;
        }

        #content .flex-container .friend-list-box ul li .user .para-box p.company {
            font-size: 0.7rem;
            padding-left: 2px;
        }

        #content .flex-container .friend-list-box ul li .status {
            width: 100px;
            text-align: center;
        }

        #content .flex-container .friend-list-box ul li .status span {
            color: #4b9afb;
        }

        #content .flex-container .friend-list-box ul li .status span.accepted {
            color: #45e945;
        }
    </style>

</head>

<body>

    <?php include 'navbar.php' ?>

    <div id="content">
        <h1>Refer to a friend</h1>
        <div class="flex-container">
            <div class="refer-code-container">
                <img src="images/istockphoto-1394169876-612x612 1.svg" alt="SVG">
                <div class="refer-code-box">
                    <p id="refer-code">mir20220320 <button id="copyBtn">Copy</button></p>
                    <button id="share">Share</button>
                </div>
            </div>
            <div class="friend-list-box">
                <div class="heading-box">
                    <h3>Invite a friend</h3>
                    <img src="icons/search.svg" alt="Search">
                </div>
                <ul>

                    <?php for ($i = 0; $i < 7; $i++) { ?>
                        <li>
                            <div class="user">
                                <img src="images/friend1.svg" alt="">
                                <div class="para-box">
                                    <p class="name">Tongkun Lee</p>
                                    <p class="company">Facebook</p>
                                </div>
                            </div>
                            <div class="status">
                                <span>Invite</span>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>

</html>