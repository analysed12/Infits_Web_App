<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infits | Health Details</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="css/health_detail_form_create.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

</head>

<body>
    <?php include 'navbar.php' ?>

    <div class="content">
        <div class="heading-box">
            <h1>Health Details Form</h1>
            <button id="save">Save</button>
        </div>

        <div class="flex-container">
            <div class="form-container">

                <div class="form-title">
                    <img src="icons/form-name.svg">
                    <input type="text" name="formName" id="formName" placeholder="Enter form name">
                </div>

                <div class="form-question-container">

                    <!-- Don't Add Elements here Elements are Added With JavaScript -->

                </div>
                <button type="button" id="addQuestion" data-target="Add Question" onClick="addQuestion(this)">Add
                    Question</button>
            </div>
            <div id="popup" data-ans-type="text">
                <h2>Edit Question</h2>

                <input type="text" name="question" id="question" placeholder="Type your question here..">

                <div class="options-container">
                    <div class="radio-box">
                        <input type="radio" name="options" id="text" value="text" checked>
                        <label for="text">Text Field</label>
                    </div>

                    <div class="radio-box">
                        <input type="radio" name="options" id="checkbox" value="checkbox">
                        <label for="checkbox">Checkbox</label>
                    </div>

                    <div class="radio-box">
                        <input type="radio" name="options" id="radio" value="radio">
                        <label for="text">Radio Button</label>
                    </div>
                </div>

                <div class="custom-input-container">
                    <div class="btn-box">
                        <button id="addCheckbox" type="button" onclick="addQuestionOption(this)">
                            <img src="icons/add.svg">
                            <span>Add Checkboxes</span></button>
                        <button id="tableCheckbox" type="button"><img src="icons/add.svg"> <span>Create a table of
                                Checkboxes</span></button>

                        <button class="close" type="button" onclick="closeOptions(this)"><img src="icons/CrossX.svg"
                                alt="Close"></button>
                    </div>
                    <div class="custom-input-row">

                        <!-- Don't Add Elements here Elements are Added With JavaScript -->

                    </div>
                </div>
                <div class="custom-input-table-container">
                    <div class="btn-box">
                        <button id="addColumn" type="button" onclick="addColumn(this)"><img src="icons/add.svg">
                            <span>Add Column</span></button>
                        <button id="addRow" type="button" onclick="addRow(this)"><img src="icons/add.svg">
                            <span>Add Row</span></button>

                        <button class="close-custom-input-container" type="button" onclick="rmTable(this)"><img
                                src="icons/CrossX.svg" alt="Close"></button>
                    </div>
                    <div class="custom-input-table">

                        <div class="flex-input-container">
                            <div class="column-container">

                                <!-- Don't Add Elements here Elements are Added With JavaScript -->

                            </div>
                            <div class="row-container">

                                <!-- Don't Add Elements here Elements are Added With JavaScript -->

                            </div>
                        </div>
                    </div>
                </div>

                <div class="controller-box">
                    <button id="cancel" type="button" onclick="closePopup()">Cancel</button>
                    <button id="popupSave" onclick="savePopup(this)">Save</button>
                </div>
            </div>

            <div class="share-box">
                <h3>Assign form to the clients</h3>

                <div class="search-box">
                    <img src="icons/search.svg">
                    <input type="search" name="search" id="search" placeholder="Search clients">
                </div>

                <div id="selectedUser-box">

                    <!-- Don't Add Elements here Elements are Added With JavaScript -->


                    <!-- <div class="selectedUser">
                        <p class="userName">Client 1</p>
                        <img src="icons/CrossX.svg" alt="Remove" title="Remove">
                    </div> -->

                    <!-- <div class="selectedUser">
                        <p class="userName">Client 2</p>
                        <img src="icons/CrossX.svg" alt="Remove" title="Remove">
                    </div>

                    <div class="selectedUser">
                        <p class="userName">Client 3</p>
                        <img src="icons/CrossX.svg" alt="Remove" title="Remove">
                    </div>

                    <div class="selectedUser">
                        <p class="userName">Client 4</p>
                        <img src="icons/CrossX.svg" alt="Remove" title="Remove">
                    </div> -->

                </div>

                <ul id="usersList">

                    <!-- Don't Add Elements here Elements are Added With JavaScript -->


                    <!-- <li>
                        <input type="checkbox" name="checkBox" id="checkBox">
                        <label for="checkBox" class="userName">Client 1</label>
                    </li>

                    <li>
                        <input type="checkbox" name="checkBox" id="checkBox">
                        <label for="checkBox" class="userName">Client 2</label>
                    </li> -->

                </ul>
            </div>
        </div>
    </div>

    <script src="js/health_detail_form_create.js"></script>

    <?php

    $conn = new mysqli("localhost", "root", "", "infits");

    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }

    $uniqueFormID = uniqid();

    echo $uniqueFormID;


    if(isset($_POST['formName'])){
        $formName = $_POST['formName'];

        $sql = "INSERT INTO `health_form_details`(`formID`, `formName`, `uniqueFormID`, `dietitianID`, `createdAt`, `updatedAt`) VALUES (null,'$formName','$uniqueFormID','13',null,null)";

        $result = $conn->query($sql);

        if($result){
            echo "fORM nAME cREATED";
        }
    }
    ?>
</body>

</html>