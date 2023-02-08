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
                    <img src="icons/form-name.svg"><input type="text" name="formName" id="formName"
                        placeholder="Enter form name">
                </div>

                <div class="form-question-container">

                    <div class="form-values-box">
                        <div class="form-value">
                            <h4 class="question">Question</h4>
                            <p class="answer">Answer</p>
                        </div>
                        <div class="options">
                            <div class="option editQuestion" title="Edit">
                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.71 5.04055C18.1 4.65055 18.1 4.00055 17.71 3.63055L15.37 1.29055C15 0.900547 14.35 0.900547 13.96 1.29055L12.12 3.12055L15.87 6.87055M0 15.2505V19.0005H3.75L14.81 7.93055L11.06 4.18055L0 15.2505Z" />
                                </svg>
                            </div>
                            <div class="option deleteQuestion" title="Delete">
                                <svg width="14" height="17" viewBox="0 0 14 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1.56534 16.3636H12.4745V3.63636H1.56534V16.3636ZM13.3836 0.909091H10.2017L9.29265 0H4.74718L3.83808 0.909091H0.65625V2.72727H13.3836V0.909091Z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="form-values-box">
                        <div class="form-value">
                            <h4 class="question">Question</h4>
                            <p class="answer">Answer</p>
                        </div>
                        <div class="options">
                            <div class="option editQuestion" title="Edit">
                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.71 5.04055C18.1 4.65055 18.1 4.00055 17.71 3.63055L15.37 1.29055C15 0.900547 14.35 0.900547 13.96 1.29055L12.12 3.12055L15.87 6.87055M0 15.2505V19.0005H3.75L14.81 7.93055L11.06 4.18055L0 15.2505Z" />
                                </svg>
                            </div>
                            <div class="option deleteQuestion" title="Delete">
                                <svg width="14" height="17" viewBox="0 0 14 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1.56534 16.3636H12.4745V3.63636H1.56534V16.3636ZM13.3836 0.909091H10.2017L9.29265 0H4.74718L3.83808 0.909091H0.65625V2.72727H13.3836V0.909091Z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <button id="addQuestion">Add Question</button>
                </div>
            </div>

            <div id="popup">
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
                        <button id="addCheckbox"><img src="icons/add.svg"> <span>Add Checkbox</span></button>
                        <button id="tableCheckbox"><img src="icons/add.svg"> <span>Create a table of Checkboxes</span></button>

                        <button class="close"><img src="icons/CrossX.svg" alt="Close"></button>
                    </div>
                    <div class="custom-input-row">
                        <div class="rowOnly">
                            <input type="checkbox" name="singleRow" id="singleRow">
                            <label for="singleRow"><span>Yes</span> <img src="icons/edit-pencile.svg"
                                    title="Edit"></label>
                        </div>
                        <div class="rowOnly">
                            <input type="checkbox" name="singleRow" id="singleRow">
                            <label for="singleRow"><span>No</span> <img src="icons/edit-pencile.svg"
                                    title="Edit"></label>
                        </div>
                    </div>
                    <!-- <div class="custom-input-table">
                        <div class="btn-box">
                            <button id="addColumn"><img src="icons/add.svg"> Add Column</button>
                            <button id="addRow"><img src="icons/add.svg"> Add Row</button>

                            <button id="close"><img src="icons/CrossX.svg" alt="Close"></button>
                        </div>
                        <div class="table-input-container">
                            <ul id="Column">
                                <li><p>Yes </p> <img src="icons/edit-pencile.svg" alt="Edit" title="Edit"></li>
                                <li><p>No </p> <img src="icons/edit-pencile.svg" alt="Edit" title="Edit"></li>
                            </ul>
                        </div>
                    </div> -->
                </div>

                <div class="controller-box">
                    <button id="cancel">Cancel</button>
                    <button id="save">Save</button>
                </div>
            </div>

            <div class="share-box">
                <h3>Assign form to the clients</h3>

                <div class="search-box">
                    <img src="icons/search.svg">
                    <input type="search" name="search" id="search" placeholder="Search clients">
                </div>

                <div id="selectedUser-box">

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

</body>

</html>