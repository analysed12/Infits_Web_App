<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infits | Health Details</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<style>
    .content {
        height: 85vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .content img {
        width: 250px;
        height: 250px;
    }

    .content h1,
    .content button#createForm {
        font-size: 1.4rem;
    }

    .content h1 {
        font-family: "Poppins";
        font-weight: 500;
        text-align: center;
        width: 250px;
        margin-top: 32px;
    }

    .content button#createForm {
        background-color: #8C68F8;
        color: #ffffff;
        border: none;
        width: 230px;
        height: 50px;
        border-radius: 10px;
        font-weight: 400;
        font-family: "NATS";
        margin-top: 51px;
    }
</style>

<body>
    <?php include 'navbar.php' ?>
    <div class="content">

        <img src="images/No messages.svg" alt="No Forms">
        <h1>You haven't created any form yet!</h1>
        <button id="createForm">Create Form</button>

    </div>
</body>

</html>