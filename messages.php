<?php
session_start();

if (isset($_SESSION['dietitianuserID'])) {
    # database connection file
    include 'chat/app/db.conn.php';
    include 'navbar.php';

    

    include 'chat/app/helpers/user.php';
    include 'chat/app/helpers/conversations.php';
    include 'chat/app/helpers/timeAgo.php';
    include 'chat/app/helpers/last_chat.php';
    include 'chat/app/helpers/timeHM.php';

    # Getting User data data
    $user = getUser($_SESSION['dietitianuserID'], $conn);

    # Getting User conversations
    $conversations = getConversation($user['dietitian_id'], $conn);

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chat App - Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="img/logo.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <div class="d-flex flex-row">
            <div class="d-flex
                flex-coloumn
                vh-100 chat" style="outline: 2px solid #EEEEEE; padding:20px!important;">
                <div class="w-300" style="width:275px">
                    <div>
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
                                <h5>Messages</h5>
                            </div>
                            <!-- <a href="logout.php" class="btn fs-xs">L </a> -->
                        </div>

                        <div class="input-group mb-3 bt-outline ">
                            <button class="btn  grey-color text-secondary" id="serachBtn">
                                <i class="fa fa-search"></i>
                            </button>
                            <input type="text" placeholder="Search" id="searchText" class="form-control bg-light text-secondary">

                        </div>
                        <div class="scroll">
                            <ul id="chatList" class="list-group mvh-50 overflow-auto">
                                <?php if (!empty($conversations)) { ?>
                                    <?php

                                    foreach ($conversations as $conversation) { ?>
                                        <li class="list-group-item">
                                            <a href="chat.php?user=<?= $conversation['dietitianuserID'] ?>" class="d-flex
	    				          justify-content-between
	    				          align-items-center p-1">
                                                <div class="d-flex
	    					            align-items-center">
                                                    <img src="uploads/<?= $conversation['p_p'] ?>" class="w-10 rounded-circle">
                                                    <h3 class="fs-xs m-2 text-dark">
                                                        <?= $conversation['name'] ?><br>
                                                        <small>
                                                            <?php
                                                            echo lastChat($_SESSION['dietitian_id'], $conversation['dietitian_id'], $conn);
                                                            ?>
                                                        </small>

                                                    </h3>
                                                </div>
                                                <div class="d-flex
	    					            align-items-center">
                                                    <h3 class="fs-xs p-2 text-dark">

                                                        <small>
                                                            <?php
                                                            echo last_time($conversation['last_seen']);
                                                            ?>
                                                        </small>

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
                                <?php } else {
                                    header("Location: index.php");
                                    exit;
                                } ?>
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
                            $.post('chat/app/ajax/search.php', {
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
                            $.post('chat/app/ajax/search.php', {
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
                            $.get("chat/app/ajax/update_last_seen.php");
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

                    $.post("chat/app/ajax/insert.php", {
                            message: message,
                            to_id: <?= $chatWith['dietitian_id'] ?>
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
                    $.get("chat/app/ajax/update_last_seen.php");
                }
                lastSeenUpdate();
                /** 
                auto update last seen 
                every 10 sec
                **/
                setInterval(lastSeenUpdate, 10000);



                // auto refresh / reload
                let fechData = function() {
                    $.post("chat/app/ajax/getMessage.php", {
                            id_2: <?= $chatWith['dietitian_id'] ?>
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
    exit;
}
?>