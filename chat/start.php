<?php
session_start();

if (isset($_SESSION['username'])) {
    # database connection file
    include 'app/db.conn.php';
    include 'navbar.php';

    include 'app/helpers/user.php';
    include 'app/helpers/conversations.php';
    include 'app/helpers/timeAgo.php';
    include 'app/helpers/timeHM.php';
    include 'app/helpers/last_chat.php';


    # Getting User data data
    $user = getUser($_SESSION['username'], $conn);

    # Getting User conversations
    $conversations = getConversation($user['user_id'], $conn);

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
        <div class=" d-flex flex-column ">
            <h3 class="m-4">Messages</h3>
            <div class="container-fluid mt-3">


                <!-- <div class="d-flex flex-column
                flex-fill
             vh-100 justify-content-center align-items-center md-3"> -->
                <!-- <div class="flex-fill chat align-center"> -->
                <!-- <a href="home.php" class="fs-4 link-dark">&#8592;</a> -->


                <!-- <div d-flex align-items-end>
						<div class=" p-4 rounded
    	               d-flex flex-column
    	               mt-2 chat-box" id="chatBox"> -->

                <!-- <class="alert alert-info text-center"> -->

                <img src="images/NoMessages.png" class="no-message d-block">

                <h4 class="d-flex justify-content-center mt-3 pt-2" style="color: #000000; text-align: center;">You haven't started any <br /> chat yet! </h4>


                <div class="d-flex justify-content-center">
                    <a href="home.php" class="btn btn-primary mt-3 px-5" style="background :#8C68F8">Start a chat</a>
                </div>
                <!-- </div> -->

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