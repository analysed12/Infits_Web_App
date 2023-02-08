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

        <link rel="stylesheet" href="css/forms_and_documents.css">
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

                <div class="client-cards">
                    <img class="vector" src="icons/client-card-vector.svg">
                    <div class="card-content">
                        <img src="images/client.png" alt="Profile" id="clientProfile">
                        <p>Ronald Richard</p>
                        <div class="btn-box">
                            <button>Form</button>
                            <button>Documents</button>
                        </div>
                    </div>
                </div>

                <div class="client-cards">
                    <img class="vector" src="icons/client-card-vector.svg">
                    <div class="card-content">
                        <img src="images/client.png" alt="Profile" id="clientProfile">
                        <p>Ronald Richard</p>
                        <div class="btn-box">
                            <button>Form</button>
                            <button>Documents</button>
                        </div>
                    </div>
                </div>

                <div class="client-cards">
                    <img class="vector" src="icons/client-card-vector.svg">
                    <div class="card-content">
                        <img src="images/client.png" alt="Profile" id="clientProfile">
                        <p>Ronald Richard</p>
                        <div class="btn-box">
                            <button>Form</button>
                            <button>Documents</button>
                        </div>
                    </div>
                </div>

                <div class="client-cards">
                    <img class="vector" src="icons/client-card-vector.svg">
                    <div class="card-content">
                        <img src="images/client.png" alt="Profile" id="clientProfile">
                        <p>Ronald Richard</p>
                        <div class="btn-box">
                            <button>Form</button>
                            <button>Documents</button>
                        </div>
                    </div>
                </div>

                <div class="client-cards">
                    <img class="vector" src="icons/client-card-vector.svg">
                    <div class="card-content">
                        <img src="images/client.png" alt="Profile" id="clientProfile">
                        <p>Ronald Richard</p>
                        <div class="btn-box">
                            <button>Form</button>
                            <button>Documents</button>
                        </div>
                    </div>
                </div>

                <div class="client-cards">
                    <img class="vector" src="icons/client-card-vector.svg">
                    <div class="card-content">
                        <img src="images/client.png" alt="Profile" id="clientProfile">
                        <p>Ronald Richard</p>
                        <div class="btn-box">
                            <button>Form</button>
                            <button>Documents</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        const optionBtn = document.querySelector(".options");
        // const optionPopup = document.querySelector(".option-popup");

        function showPopup(e) {
            e.parentNode.children[3].classList.toggle("show");
        };
    </script>
</body>

</html>