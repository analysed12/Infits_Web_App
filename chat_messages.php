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
    </head>

    <body>
        <div class="d-flex flex-row" style="margin: 0; height: 100%; overflow: hidden">
            <div class="d-flex
                flex-coloumn
                vh-100 chat" style="outline: 2px solid #EEEEEE; padding:20px!important;">
                <div class="w-300" style="width:300px">
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
                                <h5 class="chat-message-header">Messages</h5>
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
                </style>
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