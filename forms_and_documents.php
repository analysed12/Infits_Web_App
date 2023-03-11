<?php
$conn = new mysqli("localhost", "root", "", "infits");

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}
?>
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

   <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.content {
    display: flex;
    align-items: center;
    flex-direction: column;
    padding: 20px 16px;
    font-family: "NATS";
}

.content .heading-box {
    /* border: 1px solid red; */
    height: 70px;
    width: 94%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 8px;
}

.content .heading-box h1 {
    font-size: 2.3rem;
    font-weight: 400;
}

.content .heading-box .search-box {
    /* height: 30px; */
    width: 320px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 5px 10px;
    box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    -ms-border-radius: 10px;
    -o-border-radius: 10px;
}

/* .content .search-box img{
    border: 1px solid red;
} */
.content .heading-box .search-box input {
    width: 100%;
    font-size: 1.2rem;
    padding: 5px 10px;
    margin-left: 10px;
    border: none;
}

.content .heading-box .search-box input:focus {
    outline: none;
}

.content .created-form-container,
.content .created-client-form-container {
    /* border: 1px solid rgb(0, 0, 0); */
    width: 87%;
}

.content .created-client-form-container {
    margin-top: 30px;
}

.content .created-form-container .heading-box,
.content .created-client-form-container .heading-box {
    /* border: 1px solid red; */
    width: 100%;
}

.content .created-form-container .heading-box h2,
.content .created-client-form-container .heading-box h2 {
    font-size: 1.8rem;
    font-weight: 400;
}

.content .created-form-container .heading-box button,
.content .created-client-form-container .heading-box button {
    border: none;
    background-color: transparent;
}

.content .created-form-container .heading-box button a,
.content .created-client-form-container .heading-box button a {
    color: #525252;
    font-size: 1.1rem;
    text-decoration: none;
}

.content .created-form-container .heading-box button a:hover,
.content .created-client-form-container .heading-box button a:hover {

    background-color: transparent;
    color: #525252;
    border: none;
    border-radius: 0;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    -o-border-radius: 0;
}

.content .created-form-container .form-card-container,
.content .created-client-form-container .client-card-container {
    /* border: 1px solid red; */
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    gap: 30px;

}

.content .created-form-container .form-card-container .form-cards {
    position: relative;
    height: 100px;
    max-width: 450px;
    width: 45%;
    min-width: 350px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 5px 20px;
    box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.25);
    border-radius: 15px;
    -webkit-border-radius: 15px;
    -moz-border-radius: 15px;
    -ms-border-radius: 15px;
    -o-border-radius: 15px;
}

.content .created-form-container .form-card-container .form-cards img.vector {
    /* border: 1px solid red; */
    position: absolute;
    bottom: 0;
    right: 0;
    height: 80px;
    user-select: none;
    pointer-events: none;
}

.content .created-form-container .form-card-container .form-cards .form-content {
    /* border: 1px solid red; */
    /* background-color: #d3d1d1; */
    height: 70px !important;
    display: flex;
    align-items: flex-start;
    flex-direction: column;
    justify-content: space-evenly;
}

.content .created-form-container .form-card-container .form-cards .form-content h4 {
    /* border: 1px solid red; */
    /* height: 30px; */
    font-size: 1.4rem;
    font-weight: 400;
}

.content .created-form-container .form-card-container .form-cards .form-content p {
    margin: 0;
    /* height: 20px; */
    width: 100px;
    /* border: 1px solid red; */
    display: flex;
    align-items: center;
    justify-content: flex-start;
    font-size: 1rem;
    font-weight: 400;
}

.content .created-form-container .form-card-container .form-cards .form-content p span {
    background-color: #9C74F5;
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 20px;
    height: 20px;
    margin-right: 5px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
}

.content .created-form-container .form-card-container .form-cards .options {
    z-index: 1;
    cursor: pointer;
    user-select: none;
}

.content .created-form-container .form-card-container .form-cards .option-popup {
    display: none;
}

.content .created-form-container .form-card-container .form-cards .option-popup.show {
    background-color: #FFFFFF;
    width: 250px;
    height: 70px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-40%, -50%);
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    -webkit-transform: translate(-40%, -50%);
    -moz-transform: translate(-40%, -50%);
    -ms-transform: translate(-40%, -50%);
    -o-transform: translate(-40%, -50%);
}

.content .created-form-container .form-card-container .form-cards .option-popup button {
    background-color: #FF2929;
    color: #FFFFFF;
    padding: 5px 30px;
    font-size: 1rem;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.content .created-form-container .form-card-container .form-cards .option-popup button:last-child {
    background-color: #9C74F5;
}

.content .created-client-form-container .client-card-container {
    /* border: 1px solid red; */
    gap: 60px;
}

.content .created-client-form-container .client-card-container .client-cards {
    /* border: 1px solid red; */
    height: 190px;
    width: 186px;
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-evenly;
    box-shadow: 0px 2px 6px 0px rgba(0, 0, 0, 0.25);
    border-radius: 18px;
    -webkit-border-radius: 18px;
    -moz-border-radius: 18px;
    -ms-border-radius: 18px;
    -o-border-radius: 18px;
}

.content .created-client-form-container .client-card-container .client-cards .card-content {
    /* border: 1px solid red; */
    height: 90%;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-evenly;
}

.content .created-client-form-container .client-card-container .client-cards img.vector {
    /* border: 1px solid red; */
    position: absolute;
    bottom: 0;
    right: 0;
    height: 120px;
    user-select: none;
    pointer-events: none;
}

/* .content .created-client-form-container .client-card-container .client-cards img#clientProfile {
    border: 1px solid red;
} */

.content .created-client-form-container .client-card-container .client-cards .card-content p {
    margin: 0;
    /* border: 1px solid red; */
    font-size: 1.5rem;
    font-weight: 500;
    z-index: 1;
}

.content .created-client-form-container .client-card-container .client-cards .card-content .btn-box {
    /* border: 1px solid red; */
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    z-index: 1;
}

.content .created-client-form-container .client-card-container .client-cards .card-content .btn-box button {
    border: none;
    background-color: #4B9AFB;
    color: #ffffff;
    padding: 5px 15px;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
}
   </style>
</head>

<body>
    <?php include 'navbar.php' ?>

    <div class="content">
        <div class="heading-box">
            <h1>Forms and Documents</h1>
            <div class="search-box">
                <img src="icons/search.svg" alt="#">
                <input type="search" name="form" id="form" placeholder="Search forms or clients">
            </div>
        </div>
        <div class="created-form-container">
            <div class="heading-box">
                <h2>My Forms</h2>
                <button><a href="#">View all</a></button>
            </div>
            <div class="form-card-container">

                <div class="form-cards">
                    <img class="vector" src="icons/form-card-vector.svg">
                    <div class="form-content">
                        <h4>Form 1(Default)</h4>
                        <p><span>20</span> Question</p>
                    </div>
                    <div class="options" onclick="showPopup(this)">
                        <img src="icons/3dots.svg" alt="options" title="options">
                    </div>
                    <div class="option-popup">
                        <button>Delete</button>
                        <button>Edit</button>
                    </div>
                </div>


                <div class="form-cards">
                    <img class="vector" src="icons/form-card-vector.svg">
                    <div class="form-content">
                        <h4>Form 1(Default)</h4>
                        <p><span>20</span> Question</p>
                    </div>
                    <div class="options" onclick="showPopup(this)">
                        <img src="icons/3dots.svg" alt="options" title="options">
                    </div>
                    <div class="option-popup">
                        <button>Delete</button>
                        <button>Edit</button>
                    </div>
                </div>

                <div class="form-cards">
                    <img class="vector" src="icons/form-card-vector.svg">
                    <div class="form-content">
                        <h4>Form 1(Default)</h4>
                        <p><span>20</span> Question</p>
                    </div>
                    <div class="options" onclick="showPopup(this)">
                        <img src="icons/3dots.svg" alt="options" title="options">
                    </div>
                    <div class="option-popup">
                        <button>Delete</button>
                        <button>Edit</button>
                    </div>
                </div>

            </div>
        </div>
        <div class="created-client-form-container">
            <div class="heading-box">
                <h2>Client forms and documents</h2>
                <button><a href="#">View all</a></button>
            </div>
            <div class="client-card-container">
                <?php
                    $sql = "SELECT DISTINCT ClientName FROM `clientcon` LIMIT 8";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                        ?>
                            <div class="client-cards">
                            <img class="vector" src="icons/client-card-vector.svg">
                            <div class="card-content">
                                <img src="images/client.png" alt="Profile" id="clientProfile">
                                <p> <?php echo $row["ClientName"]; ?> </p>
                                <div class="btn-box">
                                    <button id="clientForm">Form</button>
                                    <button id="clientDocument">Documents</button>
                                </div>
                            </div>
                        </div>
                        <?php
                          }
                    }
                ?>
            </div>
        </div>
    </div>

    <script>
        const optionBtn = document.querySelector(".options");
        const clientForm = document.querySelector("#clientForm");
        const clientDocument = document.querySelector("#clientDocument");
        // const optionPopup = document.querySelector(".option-popup");

        function showPopup(e) {
            e.parentNode.children[3].classList.toggle("show");
        };

        clientForm.addEventListener("click", () => {
            document.location.href = 'health_detail_form.php?form=show';
        });
        clientDocument.addEventListener("click", () => {
            document.location.href = 'health_detail_form.php?documents=show';
        });
    </script>
</body>

</html>