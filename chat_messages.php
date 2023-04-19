<?php
ob_start();
// session_start();


include 'navbar.php';


if (isset($_SESSION['dietitianuserID'])) {
    # database connection file
    include 'app/db.conn.php';

    include 'app/helpers/user.php';
    include 'app/helpers/chat.php';
    include 'app/helpers/opened.php';

    include 'app/helpers/timeAgo.php';
    include 'app/helpers/timeHM.php';

    include 'app/helpers/conversations.php';

    include 'app/helpers/last_chat.php';

    # Getting User data data
    $user = getUser($_SESSION['dietitianuserID'], $conn);

    # Getting User conversations
    $conversations = getConversation($user['dietitian_id'], $conn);

    if (!isset($_GET['user'])) {
        header("Location: chat_home.php");
        exit;
    }
    // echo $_GET['user'];
    //  print_r(getUser($_GET['user'], $conn));
    // die();

    # Getting User data data
    $chatWith = getClient($_GET['user'], $conn);
    // print_r($chatWith);

    if (empty($chatWith)) {
        header("Location: chat_home.php");
        exit;
    }

    $chats = getChats($_SESSION['dietitian_id'], $chatWith['client_id'], $conn);

    opened($chatWith['client_id'], $conn, $chats);

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chat App</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="css/chat_style.css">
        <link rel="icon" href="images/logo.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- <style>
            .hide-input {
                position: absolute;
                top: 0;
                left: 0;
                opacity: 0;
                width: 0;
                height: 0;
                visibility: hidden;
            }
            .w-300{
                width:300px !important;
            }
            @media (min-width: 75px){
                body{
                    overflow-x: hidden !important;
                }
                .hr-mid hr{
                    margin-left: 55px;
                    margin-right: 55px;

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
                d-flex.flex-column.flex-fill.chat{
                    margin-top: -250px !important; 
                    width: 95% !important;
                    align-self: center !important;
                }
                div.d-flex.flex-coloumn.vh-100.chat{
                    margin-top: -230px !important; 
                    width: 95% !important;
                    align-self: center !important;
                    outline: none !important;
                }
                div.w-300{
                    width: 95% !important;
                    align-self: center !important;
                    margin-top: 80px;
                }
                /* .input-group.align-items-center.chat-end-align{
                    margin-bottom: -700px;
                    width: 160% !important;
                }
                .d-flex.mb-2.p-2.justify-content-between{
                margin-top: -240px !important;
                }*/
                .scroll{
                overflow: hidden !important;
                } 
                .chat-box {
                    overflow-y: auto;
                    overflow-x: hidden;
                    max-height: 11vh;
                }
                .chat {
                    margin-top: -116px !important;
                    padding: 11px !important;
                }
                .w-1st{
                margin-top: -55px !important;
                }
                .d-flex.flex-row.justify-content-between{
                    display: flex !important;
                    flex-direction: row !important;
                }
                .hr-mid hr{
                    margin-top: -213px;
                    color: darkorchid;
                    height: 3px;
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
                d-flex.flex-column.flex-fill.chat{
                    margin-top: -230px !important; 
                    width: 95% !important;
                    align-self: center !important;
                }
                div.d-flex.flex-coloumn.vh-100.chat{
                    margin-top: -250px !important; 
                    width: 95% !important;
                    align-self: center !important;
                    outline: none !important;
                }
                div.w-300{
                    width: 95% !important;
                    align-self: center !important;
                }
                /* .input-group.align-items-center.chat-end-align{ */
                    /* margin-bottom: -700px; */
                    /* width: 160% !important; */
                /* } */
                /* .d-flex.mb-2.p-2.justify-content-between{ */
                /* margin-top: -240px !important; */
                /* } */
                .scroll{
                overflow: hidden !important;
                }
                .chat-box {
                    overflow-y: auto;
                    overflow-x: hidden;
                    max-height: 130px;
                }
                .chat {
                    margin-top: -106px !important;
                    padding: 11px !important;
                }
                .w-1st{ 
                margin-top: 25px !important;
                }
                .d-flex.flex-row.justify-content-between{
                    display: flex !important;
                    flex-direction: row !important;
                }
                .hr-mid hr{
                    margin-top: -209px;
                    color: darkorchid;
                    height: 3px;
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
                d-flex.flex-column.flex-fill.chat{
                    margin-top: -200px !important; 
                    width: 95% !important;
                    align-self: center !important;
                }
                .chat-box {
                    overflow-y: auto;
                    overflow-x: hidden;
                    max-height: 160px;
                }
                .chat {
                    margin-top: -126px !important;
                    padding: 11px !important;
                }
            .scroll{
                overflow: hidden !important;
            }
            /* .input-group.align-items-center.chat-end-align{ */
                    /* margin-bottom: -780px; */
            /* } */
            .d-flex.mb-2.p-2.justify-content-between{
                /* width: 145% !important; */
                /* margin-left: 20px !important; */
                align-items: center !important;
            }
            div.w-300{
                    width: 145% !important;
                    align-self: center !important;
                    margin-top: -95px !important;
                }
            .w-1st{
                margin-top: -135px !important;
            }
            .d-flex.flex-row.justify-content-between{
                    display: flex !important;
                    flex-direction: row !important;
                }
                .hr-mid hr{
                    margin-top: -343px;
                    color: darkorchid;
                    height: 3px;
                }
            }

            /* For screens larger than or equal to 768px (medium screens) */
            @media (min-width: 768px) {
            /* CSS rules for medium screens */
            .hr-mid hr{
                    display: none !important;
                    opacity: 0 !important;
                }
            }

            /* For screens larger than or equal to 992px (large screens) */
            @media (min-width: 992px) {
            /* CSS rules for large screens */
            }

            /* For screens larger than or equal to 1200px (extra large screens) */
            @media (min-width: 1200px) {
            /* CSS rules for extra large screens */
            }
        </style> -->
        <style>
            .hide-input {
                position: absolute;
                top: 0;
                left: 0;
                opacity: 0;
                width: 0;
                height: 0;
                visibility: hidden;
            }
            .w-300{
                width:300px !important;
            }

            @media (min-width: 76px) and (max-width: 767.99px) {
                div.d-flex.flex-coloumn.vh-100.chat{
                outline: none !important;
            }
            }
            @media (min-width: 75px){
                body{
                    overflow-x: hidden !important;
                }
                .vh-100{
                    height: 25% !important;
                }
            }
            
         
            @media (min-width: 215px) and (max-width: 387.98px) { 
         
            
                .vh-100{
                    min-height: 50px !important;
                }
                .d-flex.flex-row{
                    margin: 0;
                    height: 100%;
                    display: flex !important;
                    flex-direction: column !important;
                    overflow: hidden !important;
                    /* width:665px !important; */
                }
                d-flex.flex-column.flex-fill.chat{
                    /* margin-top: -250px !important;  */
                    width: 95% !important;
                    align-self: center !important;
                }
                div.d-flex.flex-coloumn.vh-100.chat{
                    /* margin-top: -230px !important;  */
                    width: 95% !important;
                    align-self: center !important;
                    outline: none !important;
                }
                div.w-300{
                    width: 95% !important;
                    align-self: center !important;
                    /* margin-top: 80px; */
                }
                /* .input-group.align-items-center.chat-end-align{
                    margin-bottom: -700px;
                    width: 160% !important;
                }
                .d-flex.mb-2.p-2.justify-content-between{
                margin-top: -240px !important;
                }*/ 
                .scroll{
                overflow-y: auto !important;
                max-height: 120px;
            } 
                .chat-box {
                    overflow-y: auto;
                    overflow-x: hidden;
                    max-height: 60px;
                }
                .chat {
                    /* margin-top: -110px !important; */
                    padding: 11px !important;
                }
                
                .d-flex.flex-row.justify-content-between{
                    display: flex !important;
                    flex-direction: row !important;
                }
            }
            @media (max-width: 575.98px) and (min-width: 375px) { 
            /* CSS rules for extra small screens */
            
            .d-flex.flex-row{
                height: 100%;
                display: flex !important;
                flex-direction: column !important;
                overflow: hidden !important;
            }
            .vh-100{
                min-height: 100px !important;
            }
            d-flex.flex-column.flex-fill.chat{
                width: 95% !important;
                align-self: center !important;
            }
            div.d-flex.flex-coloumn.vh-100.chat{
                width: 95% !important;
                align-self: center !important;
                outline: none !important;
            }
            div.w-300{
                width: 95% !important;
                align-self: center !important;
            }
            .scroll{
                overflow-y: auto !important;
                max-height: 150px;
            }
            .chat {
                padding: 11px !important;
            }
            .chat-box {
                overflow-y: auto;
                overflow-x: hidden;
                max-height: 110px;
            }
                           
            .d-flex.flex-row.justify-content-between{
                display: flex !important;
                flex-direction: row !important;
            }
            }

            @media (min-width: 576px) and (max-width: 767.99px) {
            .d-flex.flex-row{
                height: 100%;
                display: flex !important;
                flex-direction: column !important;
            }
            d-flex.flex-column.flex-fill.chat{
                
                width: 95% !important;
                align-self: center !important;
            }
            .chat-box {
                overflow-y: auto;
                overflow-x: hidden;
                max-height: 130px;
            }
            .chat {
                padding: 11px !important;
            }
            .scroll{
                overflow-y: auto !important;
                max-height: 175px;
            }
            .d-flex.mb-2.p-2.justify-content-between{
                align-items: center !important;
            }
            div.w-300{
                    width: 145% !important;
                    align-self: center !important;
                }
            .vh-100{
                    min-height: 100px !important;
                }
            .d-flex.flex-row.justify-content-between{
                    display: flex !important;
                    flex-direction: row !important;
                }
            }
        </style>
        
        </style>
    </head>

    <body style="overflow: hidden">
        <div class="d-flex flex-row" style="margin: 0; height: 100%; overflow: hidden">
        
            <div class="d-flex
                flex-coloumn
                vh-100 chat" style="outline: 2px solid #EEEEEE; padding:20px!important;">
                <div class="w-300" >
                    <div class="w-1st">
                        <div class="d-flex
    		            mb-2 p-2 
			            justify-content-between
			            " >

                            <!-- Use this for profile dp and name -->
                            <!-- <div class="d-flex
    			            align-items-center">
								<img src="uploads/<?= $user['p_p'] ?>" class="w-25 rounded-circle">
								<h3 class="fs-xs m-2"><?= $user['name'] ?></h3>
							</div> -->
                            <div class="mt-1">
                                <h5 class="chat-message-header">Messages</h5>
                            </div>
                            <!-- <a href="logout.php" class="btn fs-xs">L </a> -->
                        </div>

                       <!--  <div class="card-body dig searchbox">
                            <form method="POST" class="search-form form-inline " style="display: flex; border: none; border-radius: 0.6rem; font-size: 20px; font-weight: 400; padding-top: 0.5rem; padding-right: 0.5rem; color: #BBBBBB; background-color: white; box-shadow: 0.6px 0.6px 2px 1px #ccc;">
                            //<button type="submit" id="btn_search" class="search-icon" name="search-btn"><i
                              //          class="fa-solid fa-magnifying-glass"></i></button>
                                //<input type="text" placeholder="Search plan" class="search-box form-control w-75" id="search"
                                  //  name="search" >  NOT NEEDE FRom start
                                    <button style="background-color:white;border:none;" id="btn_search" class="search-icon" name="search-btn"><img src="images/vec_search.png" alt=""></button> 
                                    <input type="text" placeholder="Search client" class="search-box form-control w-50" id="search" name="search" style="border:none;font-size:1rem;margin-left:1rem  ">
                                
                                <div id="display">
                                </div>
                            </form>
                        </div>-->
                        <div class="input-group mb-3 bt-outline " style="display: flex; border: none; border-radius: 0.6rem; font-size: 20px; font-weight: 400; padding-top: 0.5rem; padding-right: 0.5rem; color: #BBBBBB; background-color: white; box-shadow: 0.6px 0.6px 2px 1px #ccc;">
                            <button class="btn  grey-color text-secondary" style="background-color:white !important;border:none;" id="serachBtn">
                                <i class="fa fa-search"></i>
                            </button>
                            <input type="text" placeholder="Search" id="searchText"  style="background-color:white !important;border:none;" class="form-control bg-light text-secondary">
                        </div>
                        <div class="scroll">
                            <ul id="chatList" class="list-group mvh-50">
                                <?php //if (!empty($conversations)) { ?>
                                    <?php

                                    foreach ($conversations as $conversation) { ?>
                                        <li class="list-group-item">
                                            <a href="chat_messages.php?user=<?= $conversation['dietitianuserID'] ?>" class="d-flex
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
              chat">
                <div class="  d-inline-block p-2 flex-fill justify-content-between chat">
                
                    <!-- <a href="home.php" class="fs-4 link-dark">&#8592;</a> -->
                    <div class="d-flex flex-row justify-content-between">
                        <div class="d-flex  align-items-center">
                            <img src="chat/uploads/<?= $chatWith['p_p'] ?>" class="rounded-circle" style="width:50px">
                           
                            <h6 class="display-4 fs-sm m-2">
                                <?= $chatWith['name'] ?> <br>
                                <div class="d-flex
               	              align-items-center" title="online">
                                    <?php
                                    if (last_seen($chatWith['last_seen']) == "1") {
                                    ?>

                                        <div class="fs-xs p-1 online-text" style="color: #0177FD">Online</div>
                                    <?php } else { ?>
                                        <small class="d-block p-1">
                                            Last seen:
                                            <?= last_seen($chatWith['last_seen']) ?>
                                        </small>
                                    <?php } ?>
                                </div>

                            </h6>

                        </div>

                        <div class="d-flex  align-items-center ">
                            <div onclick="videocall('<?= $chatWith['clientuserID'] ?>', '<?=  $_SESSION['name']?>')"><img class="m-2" src="icons/videocall.png" style="width:20px"/></div>
                            <img class="m-2 mr-5" src="icons/vector-i.png" style="width:20px">
                          

                        </div>
                        

                    </div>


                    <div d-flex>
                        <div class=" p-4 rounded
    	               d-flex flex-column
    	               mt-2 chat-box" id="chatBox">
                            <?php
                            // print_r($chats);

                            if (!empty($chats)) {
                                foreach ($chats as $chat) {
                                    if ($chat['from_id'] == $_SESSION['dietitian_id']) { ?>
                                        <?php if (substr($chat['message'], 0, 4) == "IMG-") { ?>

                                            <p class="rtext align-self-end">

                                                <img src="chat/uploads/<?= $chat['message'] ?>" style="max-width: 250px">
                                                <small class="d-block mt-2">
                                                    <?= last_time($chat['created_at']) ?>
                                                </small>
                                            </p>
                                        <?php                                } else { ?>
                                            <p class="rtext align-self-end">
                                                <?= $chat['message'] ?>
                                                <small class="d-block">
                                                    <?= last_time($chat['created_at']) ?>
                                                </small>
                                            </p>
                                        <?php    }
                                        ?>


                                    <?php } else { ?>
                                        <?php if (substr($chat['message'], 0, 4) == "IMG-") { ?>

                                            <p class="ltext align-self-start">

                                                <img src="chat/uploads/<?= $chat['message'] ?>" style="max-width: 250px">
                                                <small class="d-block mt-2">
                                                    <?= last_time($chat['created_at']) ?>
                                                </small>
                                            </p>
                                        <?php                                } else { ?>
                                            <p class="ltext align-self-end">
                                                <?= $chat['message'] ?>
                                                <small class="d-block">
                                                    <?= last_time($chat['created_at']) ?>
                                                </small>
                                            </p>
                                        <?php    }
                                        ?>

                                <?php }
                                }
                            } else { ?>
                                <div class="alert alert-info 
    				            text-center">
                                    <i class="fa fa-comments d-block fs-big"></i>
                                    No messages yet, Start the conversation
                                </div>
                            <?php } ?>
                        </div>
                    </div>




                    <div class="input-group align-items-center chat-end-align ">

                        <form id="form_input" action="app/ajax/upload.php" method="post" enctype="multipart/form-data">

                            <label for="file-input" class="file-input-label" style="margin-left: 20px">
                                <i class="fa fa-paperclip "></i>
                            </label>
                            <input type="file" id="file-input" name="my_image" class="hide_input" style="position: absolute;top: 0;
								left: 0;
								opacity: 0;
								width: 0;
								height: 0;
								visibility: hidden;">

                            <input type="hidden" name="to_id" value="<?= $chatWith['client_id'] ?>">

                        </form>

                        <input type="text" id="message" class="form-control rounded-pill m-3 align-items-center " style="height: 50px;" ></input>
                        <button class="btn text-primary " styles="color: #0177FD!importtant;" id="sendBtn">
                            Send Message

                        </button>
                    </div>
                </div>





                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

                <script>

                    function videocall(user, display_name){
                        console.log("helloooooooo")
                        console.log(user);
                        sessionStorage.setItem('display_name', display_name);


                        window.location = `./live_streaming.php?room=${user}`;
                        console.log(user);

                    }


                    var scrollDown = function() {
                        let chatBox = document.getElementById('chatBox');
                        chatBox.scrollTop = chatBox.scrollHeight;
                    }

                    scrollDown();

                    // Get the file input field
                    var fileInput = document.getElementById("file-input");

                    // When the file input field changes, submit the form
                    fileInput.addEventListener("change", function() {
                        document.getElementById("form_input").submit();
                    });

                    $(document).ready(function() {

                        $("#sendBtn").on('click', function() {
                            console.log("sendBtn works");
                            message = $("#message").val();
                            if (message == "") return;

                            $.post("app/ajax/insert.php", {
                                    message: message,
                                    to_id: <?= $chatWith['client_id'] ?>,
                                },
                                function(data, status) {
                                    $("#message").val("");
                                    $("#chatBox").append(data);
                                    scrollDown();
                                });
                        });

                        $("#photoBtn").on('click', function() {
                            console.log("photoBtn works")
                            var imageInput = $('input[type="file"]#image');
                            console.log(imageInput);
                            var formData = new FormData();

                            formData.append('my_image', imageInput);
                            formData.append('to_id', <?= $chatWith['client_id'] ?>);
                            console.log(imageInput);

                            $.post("app/ajax/upload.php", {
                                    my_image: imageInput,
                                    to_id: <?= $chatWith['client_id'] ?>
                                },
                                function(data, status) {
                                    console.log("no error");
                                    $("#image").val("");
                                });
                            // $.ajax({
                            // 	url: "app/ajax/upload.php",
                            // 	type: "POST",
                            // 	data: formData,

                            // 	success: function(data) {
                            // 		// handle success response
                            // 		console.log("no error");
                            // 		$("#image").val("");
                            // 	},
                            // 	error: function(jqXHR, textStatus, errorMessage) {
                            // 		// handle error response
                            // 		console.log("error");

                            // 		console.log(errorMessage);
                            // 	}
                            // });
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

    </html>
<?php
} else {
    // echo "<script>window.location.href='index.php'</script>";

    header("Location: index.php");
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