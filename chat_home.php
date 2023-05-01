<?php
ob_start();
// session_start();
include 'navbar.php';

// die();
if (isset($_SESSION['dietitianuserID'])) {
    $user=$_SESSION['dietitianuserID'];
    $sql="SELECT * FROM messages where dietitianID='$user'";
    $result=$conn->query($sql);
    if(mysqli_num_rows($result)<1){
        header('Location:message.php');
    }
    # database connection file
    include 'app/db.conn.php';

    include 'app/helpers/user.php';
    include 'app/helpers/conversations.php';
    include 'app/helpers/timeAgo.php';
    include 'app/helpers/last_chat.php';
    include 'app/helpers/timeHM.php';



    # Getting User data data

    $user = getUser($_SESSION['dietitianuserID'], $conn);
    // print_r($user);
    // die();

    # Getting User conversations //working for getting the clients user in left side
    $conversations = getConversation($user['dietitian_id'], $conn);

    // $chatWith = getClient($_GET['user'], $conn);
    // $chats = getChats($_SESSION['dietitian_id'], $chatWith['client_id'], $conn);

    // opened($chatWith['client_id'], $conn, $chats);


?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chat App - Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="css/chat_style.css">
        <link rel="icon" href="images/logo.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            .card-body{
                padding: 0% !important;
            }
            .w-300{
                    width: 99% !important;
                }
                 .search__div{
                border-radius: 0.6rem;
                padding: 3px;
                background: white;
                box-shadow: 0.6px 0.6px 2px 1px #ccc;
            }
            ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #BBBBBB;
  opacity: 1; /* Firefox */
}
            @media (min-width: 75px){
                body{
                    overflow-x: hidden !important;
                }
            }
            
            /* For screens smaller than 576px (extra small screens) */
            @media (min-width: 215px) and (max-width: 387.98px) { 
            /* CSS rules for extra small screens */
            
                .d-flex.flex-row{
                    margin: 0;
                    height: 100%;
                    display: flex !important;
                    flex-direction: column !important;
                    overflow: hidden !important;
                    /* width:665px !important; */
                }
                
            }
            @media (max-width: 575.98px) and (min-width: 388px) { 
            /* CSS rules for extra small screens */
            
                .d-flex.flex-row{
                    margin-top: -10px;
                    height: 100%;
                    display: flex !important;
                    flex-direction: column !important;
                    overflow: hidden !important;
                    /* width:665px !important; */
                }
                
            }

            /* For screens larger than or equal to 576px (small screens) */
            @media (min-width: 576px) and (max-width: 767.99px) {
            /* CSS rules for small screens */
            .d-flex.flex-row{
                    margin-top: -100px;
                    height: 100%;
                    display: flex !important;
                    flex-direction: column !important;
                }
                .w-300{
                    margin-top:86px;
                }
            }
            .bt-outline{
                border: none;
            }
        </style>
    </head>

    <body style="z-index:-10;">
        <div class="d-flex flex-row">
            <div class="d-flex
                flex-coloumn
                vh-100 chat" style="outline: 2px solid #EEEEEE; padding:20px!important;z-index:0;">
                <div class="w-300">
                    <div style="margin-left:1rem;">
                        <div class="d-flex
    		            mb-2 p-2 
			            justify-content-between
			            ">

                            <!-- Use this for profile dp and name -->
                            <!-- <div class="d-flex
    			            align-items-center">
								<img src="uploads/<?= $user['p_p'] ?>" class="w-25 rounded-circle">
								<h3 class="fs-xs m-2"><?= $user['name'] ?></h3>
							</div> -->
                            <div class="mt-1">
                                <h3 class="chat-message-header" style="margin-top:1rem">Messages</h3>
                            </div>
                            <!-- <a href="logout.php" class="btn fs-xs">L </a> -->
                        </div>

                        <div class="input-group mb-3 bt-outline ">
                            <!-- <button class="btn  grey-color text-secondary" id="serachBtn">
                                <i class="fa fa-search"></i>
                            </button>
                            <input type="text" placeholder="Search" id="searchText" class="form-control bg-light text-secondary"> -->
                            <!-- <div class="card-body dig searchbox">
                            <form method="POST" class="search-form form-inline " style="display: flex; border: none; border-radius: 0.6rem; font-size: 20px; font-weight: 400; padding-top: 0.5rem; padding-right: 0.5rem; color: #BBBBBB; background-color: white; box-shadow: 0.6px 0.6px 2px 1px #ccc;">
                            //<button type="submit" id="btn_search" class="search-icon" name="search-btn"><i
                                   //     class="fa-solid fa-magnifying-glass"></i></button>
                                //<input type="text" placeholder="Search plan" class="search-box form-control w-75" id="search"
                                  //  name="search" >  NOT NEEDE FRom start
                                    <button style="background-color:white;border:none;" id="btn_search" class="search-icon" name="search-btn"><img src="images/vec_search.png" alt=""></button> 
                                    <input type="text" placeholder="Search Client" class="search-box form-control w-50" id="search" name="search" style="border:none;font-size:1rem;margin-left:1rem  ">

                                <div id="display">
                                </div>
                            </form>
                        </div>-->
                        <div class="input-group mb-3 bt-outline d-flex align-items-center search__div" >
                            <button class="btn  grey-color text-secondary" style="background: white !important; border:none;" id="serachBtn">
                                <i class="fa fa-search"></i>
                            </button>
                            <input type="text" placeholder="Search" id="searchText"  style="background: white !important; border:none;" class="form-control bg-light text-secondary">
                        </div>
                        </div>
                        <div class="scroll">
                            <ul id="chatList" class="list-group mvh-50">
                                <?php //if (!empty($conversations)) { ?>
                                    <?php

                                    foreach ($conversations as $conversation) { ?>
                                        <li class="list-group-item">
                                            <a href="chat_messages.php?user=<?= $conversation['clientuserID'] ?>" class="d-flex
	    				          justify-content-between
	    				          align-items-center">
                                                <div class="d-flex
	    					            align-items-center">
                                                    <img src="chat/uploads/<?= $conversation['p_p'] ?>" class="rounded-circle" style="width:40px">
                                                    <h3 class="fs-xs m-2 text-dark">
                                                        <?= $conversation['name'] ?><br>
                                                        <small>
                                                            <?php
                                                            echo lastChat($_SESSION['dietitian_id'], $conversation['client_id'], $conn);
                                                            ?>
                                                        </small>

                                                    </h3>
                                                </div>
                                                <div class="d-flex
	    					            align-items-center " style="margin-left: auto;" >
                                                    <h3 class="fs-xs p-2 text-dark">

                                                        <small>
                                                            <?php
                                                            echo last_time($conversation['last_seen']);
                                                            ?>
                                                        </small><br />
                                                        <img class="" src="icons/DoubleTick.svg" style="width:16px">
                                                    </h3>


                                                </div>
                                                <?php if (last_seen($conversation['last_seen']) == "1") { ?>
                                                    <div title="online">

                                                    </div>
                                                <?php } else { ?>
                                                    <div title="offline">
                                                    </div>
                                                <?php } ?>
                                            </a>
                                        </li>
                                    <?php } ?>
                                <?php //} else {
                                    //header("Location: index.php");
                                    //exit;
                                //} ?>
                                <!-- <div class="alert alert-info 
    				            text-center">
									<i class="fa fa-comments d-block fs-big"></i>
									No messages yet, Start the conversation
								</div> -->
                            </ul>
                        </div>
                    </div>
                </div>


                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

                <script>
                    $(document).ready(function() {

                        // Search
                        $("#searchText").on("input", function() {
                            var searchText = $(this).val();
                            if (searchText == "") return;
                            $.post('app/ajax/search.php', {
                                    key: searchText
                                },
                                function(data, status) {
                                    $("#chatList").html(data);
                                });
                        });

                        // Search using the button
                        $("#serachBtn").on("click", function() {
                            var searchText = $("#searchText").val();
                            if (searchText == "") return;
                            $.post('app/ajax/search.php', {
                                    key: searchText
                                },
                                function(data, status) {
                                    $("#chatList").html(data);
                                });
                        });


                        /** 
                        auto update last seen 
                        for logged in user
                        **/
                        let lastSeenUpdate = function() {
                            $.get("app/ajax/update_last_seen.php");
                        }
                        lastSeenUpdate();
                        /** 
                        auto update last seen 
                        every 10 sec
                        **/
                        setInterval(lastSeenUpdate, 10000);

                    });
                </script>
            </div>
            <div class="d-flex flex-column
                flex-fill
             vh-100 justify-content-center align-items-center md-3">
                <!-- <div class="flex-fill chat align-center"> -->
                <!-- <a href="home.php" class="fs-4 link-dark">&#8592;</a> -->


                <!-- <div d-flex align-items-end>
						<div class=" p-4 rounded
    	               d-flex flex-column
    	               mt-2 chat-box" id="chatBox"> -->

                <!-- <class="alert alert-info text-center"> -->

                <img src="images/infitsWeb.png" class="d-block fs-big" style="height:250px; width:250px; padding-bottom:20px;">

                <h1 class="mt-5 pt-2" style="color: #8D8D8D;"> Infits for Web </h1>

                <!-- </div> -->

                <!-- </div> -->

            </div>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script>
            var scrollDown = function() {
                let chatBox = document.getElementById('chatBox');
                chatBox.scrollTop = chatBox.scrollHeight;
            }

            scrollDown();

            $(document).ready(function() {

                $("#sendBtn").on('click', function() {
                    message = $("#message").val();
                    if (message == "") return;

                    $.post("app/ajax/insert.php", {
                            message: message,
                            to_id: <?= $chatWith['client_id'] ?>
                        },
                        function(data, status) {
                            $("#message").val("");
                            $("#chatBox").append(data);
                            scrollDown();
                        });
                });

                /** 
                auto update last seen 
                for logged in user
                **/
                let lastSeenUpdate = function() {
                    $.get("app/ajax/update_last_seen.php");
                }
                lastSeenUpdate();
                /** 
                auto update last seen 
                every 10 sec
                **/
                setInterval(lastSeenUpdate, 10000);



                // auto refresh / reload
                let fechData = function() {
                    $.post("app/ajax/getMessage.php", {
                            id_2: <?= $chatWith['client_id'] ?>
                        },
                        function(data, status) {
                            $("#chatBox").append(data);
                            if (data != "") scrollDown();
                        });
                }

                fechData();
                /** 
                auto update last seen 
                every 0.5 sec
                **/
                setInterval(fechData, 500);

            });
        </script>
        </div>
        </div>

    </body>
    </body>

    </html>
<?php
} else {
    header("Location: index.php");
    // echo "<script>window.location.href='index.php'</script>";
    exit;
}
$output = ob_get_clean();

// Modify the headers
header('Content-Type: text/html');
header('Cache-Control: no-cache');

// Flush the headers to the browser
ob_end_flush();
echo $output;
?>