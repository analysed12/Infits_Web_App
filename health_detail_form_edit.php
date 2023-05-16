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

    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <style>

      @media (max-width:720px) and (min-width:300px) {
        
      }
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "NATS" !important;

}

.content {
  display: flex;
  align-items: center;
  flex-direction: column;
  padding: 20px 16px;
}
.content .heading-box {
  height: 70px;
  width: 94%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 8px;
}
.content .heading-box h1 {
  font-size: 40px;
  font-weight: 400;
  margin-top:2rem;
  margin-left: -25px;
}

.form-title input{
  height:34px;
  width:100%;
  margin-left:10px;
  font-size: 25px;
  font-weight: 100;
  color:#BDBDBD;
  font-family: 'NATS';
  font-style: normal;
  border: none;
line-height: 111.34%;
}
.content .heading-box button#save {
  background-color: #6883fb;
  color: #ffffff;
  width: 160px;
  font-size: 1.5rem;
  padding: 5px 20px;
  border: none;
  border-radius: 5px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
}
.form-container{
  width:100%;
}
.form-question-container{
  border: none;
  width:80%;
  margin-right: 10px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 30px;
 }
.form-values-box{
  display: flex;  
  padding: 10px 30px;
  box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.25);
  border-radius: 15px;
  width:70%;
  margin-left:-11.6rem; 
}
.form-values-box .options{
  margin-left: 500px;
}
.content .flex-container {
  position: relative;
  display: flex;
  justify-content: space-around;
  width: 100%;
  margin-top: 30px;
  margin-left:20%;
}
.content .flex-container .form-container {
  width: 60%;
  padding: 0px 20px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}
.flex-container .form-container .form-title {
  width: 67%;
  display: flex;
  margin-left: 90px;
  /* margin-right: auto; */
  margin-top: 5px;
  align-items: center;
  padding: 10px 20px;
  box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.25);
  border-radius: 13px;
}
.content .flex-container .form-container{
  width: 100%;
  padding: 10px 20px;
  border: none;
  font-size: 1.6rem;
}
.content .flex-container .form-container .form-title input#formName:focus {
  outline: none;
}
.content .flex-container .form-container .form-question-container {
  width: 100%;
  margin-top: 40px;
  display: flex;
  flex-direction: column;
  gap: 30px;
  max-height: 500px;
}
.content {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 30px;
  }
.content .flex-container .form-container .form-question-container .form-value {
  display: flex;
  flex-direction: column;
  justify-content: space-evenly;
}
.content .flex-container .form-container .form-question-container .form-values-box .form-value h4.question {
  font-size: 1.6rem;
  -webkit-user-select: none;
     -moz-user-select: none;
          user-select: none;
}
.content .flex-container .form-container .form-question-container .form-values-box .form-value p.answer {
  margin: 0;
  color: #D6D6D6;
  font-size: 1.6rem;
  -webkit-user-select: none;
     -moz-user-select: none;
          user-select: none;
}
.content .flex-container .form-container .form-values-box .options {
  width: 60px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.content .flex-container .form-container .form-question-container .form-values-box .options .option {
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
          user-select: none;
}
.content .flex-container .form-container .form-question-container .form-values-box .options .option:first-child svg {
  fill: #000000;
}
.content .flex-container .form-container .form-question-container .form-values-box .options .option:last-child svg {
  fill: #FF2929;
}
#addQuestion{
  margin-left: 57%;
}
.content .flex-container .form-container button#addQuestion {
  border: 2px solid #6883fb;
  background-color: #ffffff;
  color: #6883fb;
  height: 60px;
  width: 200px;
  font-size: 1.6rem;
  margin-top: 40px;
  border-radius: 15px;
  transition: all 0.3s ease;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
}
.content .flex-container .form-container button#addQuestion:hover {
  background-color: #6883fb;
  color: #ffffff;
}
.content .flex-container #popup {
  position: fixed;
  top: 0;
  left: 0;
  transform: translate(50%, 20%);
  background-color: #ffffff;
  height: 500px;
  width: 750px;
  display: none;
  align-items: center;
  flex-direction: column;
  z-index: 1;
  box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.25);
  border-radius: 15px;
}
.content .flex-container #popup.show {
  display: flex;
}
.content .flex-container #popup h2 {
  padding: 20px 0px 10px;
}
.content .flex-container #popup input[type=text]#question {
  border: none;
  width: 90%;
  font-size: 1.6rem;
  padding: 10px 35px;
  box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.25);
  border-radius: 15px;
}
.content .flex-container #popup input[type=text]#question:focus {
  outline: none;
}
.content .flex-container #popup .options-container {
  width: 90%;
  display: flex;
  align-items: center;
  justify-content: space-around;
  margin-top: 30px;
}
.content .flex-container #popup .options-container .radio-box {
  display: flex;
  align-items: center;
  font-size: 1.6rem;
}
.content .flex-container #popup .options-container .radio-box input[name=options] {
  margin-right: 10px;
  height: 20px;
  width: 20px;
}
.content .flex-container #popup .custom-input-container {
  border-top: 1px solid #8E8E8E;
  width: 90%;
  display: none;
  flex-direction: column;
  align-items: center;
  margin-top: 20px;
}
.content .flex-container #popup .custom-input-container .btn-box {
  position: relative;
  width: 100%;
  padding: 20px 0px;
  display: flex;
  align-items: center;
  gap: 30px;
}
.content .flex-container #popup .custom-input-container .btn-box button {
  border: 2px solid #6883fb;
  background-color: #ffffff;
  color: #6883fb;
  display: flex;
  align-items: center;
  padding: 2px 10px;
  font-size: 1.4rem;
  border-radius: 10px;
}
.content .flex-container #popup .custom-input-container .btn-box button.close {
  position: absolute;
  right: 10px;
  display: none;
  align-items: center;
  justify-content: center;
  padding: 0;
  height: 30px;
  width: 30px;
  margin-left: 20px;
}
.content .flex-container #popup .custom-input-container .btn-box button.close img {
  margin: 0;
  height: 10px;
  width: 10px;
}
.content .flex-container #popup .custom-input-container .btn-box button img {
  margin-right: 15px;
}
.content .flex-container #popup .custom-input-container .custom-input-row {
  width: 100%;
  height: 150px;
  overflow-y: auto;
  display: none;
  flex-direction: column;
  align-items: flex-start;
  padding: 0 10px;
}
.content .flex-container #popup .custom-input-container .custom-input-row .rowOnly {
  width: 100%;
  display: flex;
  align-items: center;
}
.content .flex-container #popup .custom-input-container .custom-input-row .rowOnly p {
  font-size: 1.6rem;
  color: #6883fb;
  margin: 0;
}
.content .flex-container #popup .custom-input-container .custom-input-row .rowOnly p input {
  border: 2px solid #6883fb;
  width: 150px;
  font-size: 1.4rem;
  padding: 0px 10px;
  border-radius: 15px;
}
.content .flex-container #popup .custom-input-container .custom-input-row .rowOnly p input:focus {
  outline: none;
}
.content .flex-container #popup .custom-input-container .custom-input-row .rowOnly img {
  margin-left: 20px;
  cursor: pointer;
}
.content .flex-container #popup .custom-input-container .custom-input-row .rowOnly img[title=Save] {
  display: none;
}
.content .flex-container #popup .custom-input-table-container {
  border-top: 1px solid #8E8E8E;
  width: 90%;
  display: none;
  flex-direction: column;
  align-items: center;
  margin-top: 20px;
}
.content .flex-container #popup .custom-input-table-container .btn-box {
  position: relative;
  width: 100%;
  padding: 20px 0px;
  display: flex;
  align-items: center;
  gap: 30px;
}
.content .flex-container #popup .custom-input-table-container .btn-box button {
  border: 2px solid #6883fb;
  background-color: #ffffff;
  color: #6883fb;
  display: flex;
  align-items: center;
  padding: 2px 10px;
  font-size: 1.4rem;
  border-radius: 10px;
}
.content .flex-container #popup .custom-input-table-container .btn-box button.close-custom-input-container {
  position: absolute;
  right: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0;
  height: 30px;
  width: 30px;
  margin-left: 20px;
}
.content .flex-container #popup .custom-input-table-container .btn-box button.close-custom-input-container img {
  margin: 0;
  height: 10px;
  width: 10px;
}
.content .flex-container #popup .custom-input-table-container .btn-box button img {
  margin-right: 15px;
}
.content .flex-container #popup .custom-input-table-container .custom-input-table {
  width: 100%;
  height: 180px;
  display: none;
  overflow: auto;
  padding: 10px;
}
.content .flex-container #popup .custom-input-table-container .custom-input-table .flex-input-container {
  display: flex;
  align-items: center;
  gap: 40px;
}
.content .flex-container #popup .custom-input-table-container .custom-input-table .flex-input-container .column-container, .content .flex-container #popup .custom-input-table-container .custom-input-table .flex-input-container .row-container {
  display: flex;
  flex-direction: column;
  align-items: center;
}
.content .flex-container #popup .custom-input-table-container .custom-input-table .flex-input-container .column-container .column, .content .flex-container #popup .custom-input-table-container .custom-input-table .flex-input-container .column-container .rowInput, .content .flex-container #popup .custom-input-table-container .custom-input-table .flex-input-container .row-container .column, .content .flex-container #popup .custom-input-table-container .custom-input-table .flex-input-container .row-container .rowInput {
  display: flex;
  align-items: center;
}
.content .flex-container #popup .custom-input-table-container .custom-input-table .flex-input-container .column-container .column p, .content .flex-container #popup .custom-input-table-container .custom-input-table .flex-input-container .column-container .rowInput p, .content .flex-container #popup .custom-input-table-container .custom-input-table .flex-input-container .row-container .column p, .content .flex-container #popup .custom-input-table-container .custom-input-table .flex-input-container .row-container .rowInput p {
  font-size: 1.6rem;
  color: #6883fb;
  margin: 0;
}
.content .flex-container #popup .custom-input-table-container .custom-input-table .flex-input-container .column-container .column p input, .content .flex-container #popup .custom-input-table-container .custom-input-table .flex-input-container .column-container .rowInput p input, .content .flex-container #popup .custom-input-table-container .custom-input-table .flex-input-container .row-container .column p input, .content .flex-container #popup .custom-input-table-container .custom-input-table .flex-input-container .row-container .rowInput p input {
  border: 2px solid #6883fb;
  width: 150px;
  font-size: 1.4rem;
  padding: 0px 10px;
  border-radius: 15px;
}
.content .flex-container #popup .custom-input-table-container .custom-input-table .flex-input-container .column-container .column p input:focus, .content .flex-container #popup .custom-input-table-container .custom-input-table .flex-input-container .column-container .rowInput p input:focus, .content .flex-container #popup .custom-input-table-container .custom-input-table .flex-input-container .row-container .column p input:focus, .content .flex-container #popup .custom-input-table-container .custom-input-table .flex-input-container .row-container .rowInput p input:focus {
  outline: none;
}
.content .flex-container #popup .custom-input-table-container .custom-input-table .flex-input-container .column-container .column img, .content .flex-container #popup .custom-input-table-container .custom-input-table .flex-input-container .column-container .rowInput img, .content .flex-container #popup .custom-input-table-container .custom-input-table .flex-input-container .row-container .column img, .content .flex-container #popup .custom-input-table-container .custom-input-table .flex-input-container .row-container .rowInput img {
  margin-left: 20px;
  cursor: pointer;
}
.content .flex-container #popup .custom-input-table-container .custom-input-table .flex-input-container .column-container .column img[title=Save], .content .flex-container #popup .custom-input-table-container .custom-input-table .flex-input-container .column-container .rowInput img[title=Save], .content .flex-container #popup .custom-input-table-container .custom-input-table .flex-input-container .row-container .column img[title=Save], .content .flex-container #popup .custom-input-table-container .custom-input-table .flex-input-container .row-container .rowInput img[title=Save] {
  display: none;
}
.content .flex-container #popup .controller-box {
  position: absolute;
  bottom: 0;
  right: 0;
  width: 250px;
  height: 70px;
  display: flex;
  justify-content: space-around;
  align-items: center;
}
.content .flex-container #popup .controller-box button {
  padding: 5px 20px;
  border-radius: 10px;
  font-size: 1.6rem;
}
.content .flex-container #popup .controller-box button#cancel {
  border: 2px solid #6883fb;
  background-color: #ffffff;
  color: #6883fb;
}
.content .flex-container #popup .controller-box button#cancel:hover {
  background-color: #6883fb;
  color: #ffffff;
}
.content .flex-container #popup .controller-box button#popupSave {
  border: 2px solid #6883fb;
  background-color: #6883fb;
  color: #ffffff;
}
.content .flex-container #popup .controller-box button#popupSave:hover {
  background-color: #4d6cf7;
  color: #ffffff;
}
.share-box{
  margin-right: 25px;
  margin-bottom: 20px;
  height:497px;
  margin-top:5px;
  
}
.content .flex-container .share-box {
  display: flex;
  align-items: center;
  flex-direction: column;
  /* height: 600px; */
  width: 40%;
  max-width: 400px;
  min-width: 350px;
  box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.25);
  padding: 15px;
  border-radius: 15px;
}
.content .flex-container .share-box h3 {
  font-size: 1.8rem;
}
/*   */
.content .flex-container .share-box {
  display: flex;
  align-items: center;
  font-size: 1.6rem;
  padding: 5px 15px;
  margin-top: 10px;
  box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.25);
  border-radius: 15px;
}
.search-box1{
  display: flex;
  align-items: center;
  font-size: 1.3rem;
  padding: 5px 15px;
  margin-top: 10px;
  box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.25);
  border-radius: 12px;
}
.content .flex-container .share-box .search-box1 img {
  -webkit-user-select: none;
     -moz-user-select: none;
          user-select: none;
  margin-right: 10px;
}
.content .flex-container .share-box .search-box1 input#search {
  border: none;
  padding: 5px 5px;
}
.content .flex-container .share-box .search-box1 input#search:focus {
  outline: none;
}
.content .flex-container .share-box #selectedUser-box {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  width: 100%;
  padding-top: 20px;
  margin-top: 10px;
}
.content .flex-container .share-box #selectedUser-box .selectedUser {
  background-color: #EFF4FF;
  display: flex;
  align-items: center;
  width: -moz-fit-content;
  width: fit-content;
  padding: 5px 10px;
  border-radius: 15px;
}
.content .flex-container .share-box #selectedUser-box .selectedUser p.userName {
  margin: 0;
  color: #6883fb;
}
.content .flex-container .share-box #selectedUser-box .selectedUser img {
  margin-left: 20px;
  -webkit-user-select: none;
     -moz-user-select: none;
          user-select: none;
  cursor: pointer;
}
.content .flex-container .share-box ul#usersList {
  display: flex;
  flex-direction: column;
  gap: 20px;
  height: 300px;
  width: 100%;
  margin-top: 20px;
  overflow-y: auto;
}
.content .flex-container .share-box ul#usersList li {
  display: flex;
  align-items: center;
  font-size: 1.8rem;
  position: relative;
}
.content .flex-container .share-box ul#usersList li input.checkBox {
  display: flex;
  align-items: center;
  justify-content: center;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  outline: 2px solid #6883fb;
  height: 20px;
  width: 20px;
  cursor: pointer;
  border-radius: 5px;
}
.content .flex-container .share-box ul#usersList li input.checkBox::after {
  content: "\f00c";
  font-size: 18px;
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
  color: #ffffff;
  display: none;
}
.content .flex-container .share-box ul#usersList li input.checkBox:checked {
  background-color: #6883fb;
}
.content .flex-container .share-box ul#usersList li input.checkBox:checked::after {
  display: block;
}
.content .flex-container .share-box ul#usersList li label.userName {
  color: #6883fb;
  margin: 0 0 0 30px;
  cursor: pointer;
}/*# sourceMappingURL=health_detail_form_create.css.map */

@media screen and (max-width:1200px){
  .content{
    overflow-x: hidden;
  }
 
  .form-values-box{
    width:82%;
  }
  .form-question-container{
    width: auto;
    margin-left: 5%;
  }
  .form-container{
    margin-left: -80px;
  }
  .form-title{
    margin-left:50px !important;
    width: 76% !important;
  }
  .form-value{
    width:100rem;
  }
  #addQuestion{
    margin-left: 6.5%;
  }
  .form-values-box .options{
  margin-left: auto;
  gap:20px;

}
}
@media screen and (max-width:950px){
  .form-question-container{
    margin-left: 70px;
  }
  #addQuestion{
    margin-left: 10%;
  }
}

@media screen and (max-width:450px){

.form-question-container{
 margin-left: 20px;
 }
.form-values-box{
  width:250px;
  margin-left: 20px;
  margin-right: 10px;
}
#addQuestion{
  margin-left: 65px;
}
} 
@media screen and (max-width:400px){
  .heading-box h1{
    margin-top: 30px !important;
  }
  .form-values-box{
   margin-left: 60px;
 }
}
    </style>

</head>

<body >
  
    <?php 
    error_reporting(0);
    include 'navbar.php' ?>

    <div class="content">
        <div class="heading-box">
            <h1>Health Details Form</h1>
            <button id="save">Save</button>
        </div>

        <div class="flex-container">
            <div class="form-container">

                <div class="form-title">
                    <img src="icons/form-name.svg">
                    <input type="text" name="formName" id="formName" placeholder="Enter form name/ client name here..">
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