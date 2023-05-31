const popup = document.querySelector("#popup");
let options = document.getElementsByName("options");
let customInputContainer = document.querySelector(".custom-input-container");
let customInputTableContainer = document.querySelector(".custom-input-table-container");
let addCheckBoxBtn = document.querySelector("#addCheckbox");


//Input for Form Name
const formName = document.querySelector("#formName");
//Setting ID for Form
formId = create_UUID();
formName.setAttribute("data-formId", `${formId}`);
console.log(`Form Id : ${formId}`);

// For creating Two question by Default (onLoad) ========================
let number = 0;
window.addEventListener("load", async () => {
    try {
        const queId = create_UUID();
        if (number === 0) {
            number++;
            for (let index = 0; index < 1; index++) {
                newQuestion(formId, queId, number);
            }
        }
        number++;
        newQuestion(formId, queId, number);
    } catch (error) {
        console.log(error);
    }
});


// OnClick Function For Adding New Question
function addQuestion(e) {
    const questionContainer = document.querySelector(".form-question-container");
    let questionCount = questionContainer.children.length + 1;
    const queId = create_UUID();

    console.log(`Que Id : ${queId}`);

    console.log(`Que Count : ${questionCount}`);


    popup.classList.add("show");

    // Changing Popup Heading
    popup.children[0].textContent = "Add New Question";
    // passing Existing Question into Popup Input
    popup.children[1].setAttribute("placeholder", `Question ${questionCount}`);
    popup.children[1].setAttribute("value", `Question ${questionCount}`);
    popup.setAttribute("data-queId", `${queId}`);
    popup.setAttribute("data-que-number", `${questionCount}`);

    console.log(popup);
}

// OnClick Function For Editing Existing Question
function editQuestion(e) {
    const questionElement = e.parentElement.previousElementSibling.children[0];
    console.log(questionElement);
    const queId = questionElement.getAttribute("data-queId");
    console.log(queId);
    const questionCount = questionElement.getAttribute("data-que-number");
    const question = questionElement.textContent;
    console.log(question);

    popup.classList.add("show");

    // Changing Popup Heading
    popup.children[0].textContent = "Edit Question";
    // passing Existing Question into Popup Input
    popup.children[1].setAttribute("placeholder", `${question}`);
    popup.children[1].setAttribute("value", `${question}`);
    popup.setAttribute("data-queId", `${queId}`);
    popup.setAttribute("data-que-number", `${questionCount}`);
    // popup.setAttribute("data-queId", `${queId}`);

    console.log(popup);
}

// OnClick Function For Deleting Existing Question
function deleteQuestion(e) {
    const questionContainer = e.parentElement.parentElement;
    questionContainer.remove();
    console.log(`Removed Question ${e.parentElement.previousElementSibling.children[0].textContent}`);
}

// OnClick Function For Adding New Question Option
let optionCount = 1;
function addQuestionOption(e) {
    let container = document.querySelector(".custom-input-row");
    const closeOption = document.querySelector(".close");

    container.style.display = "flex";
    closeOption.style.display = "flex";
    const optionId = create_UUID();
    console.log(`Que Id : ${optionId}`);

    console.log(`Number : ${optionCount}`);
    newQuestionOption(container, "rowOnly", optionId, optionCount, "Option");

    optionCount++;
    // console.log(`Que Count : ${questionCount}`);
    // console.log(popup);
}

//Onclick Create Table Input Btn
customInputContainer.children[0].children[1].addEventListener("click", () => {
    const closeOption = document.querySelector(".close-custom-input-container");

    // Showing Create Table buttons
    customInputContainer.style.display = "none";
    customInputTableContainer.style.display = "flex";

    // Showing Table inputs container
    customInputTableContainer.children[1].style.display = "block";

    // Showing Table container Close Btn
    closeOption.style.display = "flex";
});

// OnClick Function For Adding New Question Row
let rowCount = 1;
function addRow(e) {
    let rowContainer = document.querySelector(".row-container");

    // document.querySelector(".custom-input-row").style.display = "flex";
    const rowId = create_UUID();
    console.log(`Que Id : ${rowId}`);

    console.log(`Number : ${rowCount}`);
    newQuestionOption(rowContainer, "rowInput", rowId, rowCount, "Row");

    rowCount++;
}

// OnClick Function For Adding New Question Row
let columnCount = 1;
function addColumn(e) {
    let columnContainer = document.querySelector(".column-container");

    // document.querySelector(".custom-input-row").style.display = "flex";
    const columnId = create_UUID();
    console.log(`Que Id : ${columnId}`);

    console.log(`Number : ${columnCount}`);
    newQuestionOption(columnContainer, "column", columnId, columnCount, "Column");

    columnCount++;
}

function rmTable(e) {
    // Showing Create Table buttons
    customInputContainer.style.display = "flex";
    customInputTableContainer.style.display = "none";
}

function editInputRow(e) {
    // Getting Value From Label Span
    var value = e.parentElement.children[0].textContent;

    // passing Input tag inside span tag
    e.parentElement.children[0].innerHTML = `<input type="text value="${value}" placeholder="${value}">`;
    // Edit Icon Display none
    e.parentElement.children[1].style.display = "none";
    // Save Icon Display Block
    e.parentElement.children[2].style.display = "block";
}

function getEditInputRow(e) {
    // Getting Value From Label Span Input
    var value = e.parentElement.children[0].children[0].value;

    console.log(value);
    // passing Input value inside label span
    e.parentElement.children[0].innerHTML = `${value}`;
    e.parentElement.children[2].style.display = "none";
    e.parentElement.children[1].style.display = "block";
}

// Delete Input Rows
function rm(e) {
    e.parentElement.remove();
}

function closeOptions(e) {
    customInputContainer.children[1].style.display = "none";
    e.style.display = "none";

    document.querySelector(".custom-input-row").innerHTML = "";
}

// OnClick Function to Close Popup
function closePopup() {
    document.querySelector("#popup").classList.remove("show");
    // console.log("Close Popup");
}

// OnClick Function to Save Popup Details
function savePopup(e) {
    // console.log(e);
    // console.log(popup);

    const queId = popup.getAttribute("data-queId");
    const queNumber = popup.getAttribute("data-que-number");
    const question = popup.children[1].value;
    const ansType = popup.getAttribute("data-ans-type");

    const questionDetails = {
        "Question Id" : queId,
        "Question Number" : queNumber,
        "Question Value" : question,
        "Question Answer Type" : ansType
    }
    // newQuestion(1, 1, 1);
    // addQuestionOption();

console.log('sdksncksnc');
    console.log(questionDetails);
}

// For Checking Popup Options Input Type
for (const inputType of options) {
    inputType.addEventListener("change", () => {
        let inputTypeValue = inputType.value;

        if (inputTypeValue === "text") {

            customInputContainer.style.display = "none";
            customInputTableContainer.style.display = "none";
            popup.setAttribute("data-ans-type", `text`);

            console.log(`Type = ${inputTypeValue}`);
            // If Input Type CheckBox
        } else if (inputTypeValue === "checkbox") {
            customInputContainer.style.display = "flex";
            customInputTableContainer.style.display = "none";

            popup.setAttribute("data-ans-type", `checkbox`);
            // Setting addRow Btn Name
            addCheckBoxBtn.children[1].textContent = "Add Checkbox";
            // Setting create Table Btn Name
            addCheckBoxBtn.nextElementSibling.children[1].textContent = "Create a table of Checkbox";

            console.log(`Type = ${inputTypeValue}`);

            // If Input Type Radio
        } else if (inputTypeValue === "radio") {
            customInputContainer.style.display = "flex";
            customInputTableContainer.style.display = "none";
            popup.setAttribute("data-ans-type", `radio`);

            // Setting addRow Btn Name
            addCheckBoxBtn.children[1].textContent = "Add Radio Button";

            // Setting create Table Btn Name
            addCheckBoxBtn.nextElementSibling.children[1].textContent = "Create a table of Radio Button";

            console.log(`Type = ${inputTypeValue}`);
        }
    });
}


//Function For generating New Questions ========================
function newQuestion(formID, queId, number) {
    let newQuestion = document.createElement("div");
    newQuestion.classList.add("form-values-box");
    newQuestion.setAttribute("data-formId", `${formID}`);
    newQuestion.setAttribute("data-queId", `${queId}`);
    newQuestion.setAttribute("data-que-number", `${number}`);

    let questionContent = `<div class="form-value">
                                <h4 class="question" data-queId="${queId}" data-que-number="${number}">Question ${number}</h4>
                                <p class="answer">Answer</p>
                            </div>

                        <div class="options">
                            <img src="icons/edit-pencile.svg" alt="Edit" class="option editQuestion" title="Edit Question" onClick="editQuestion(this)">
                            <img src="icons/delete.svg" alt="Delete" class="option deleteQuestion" title="Delete Question" onCLick="deleteQuestion(this)">
                        </div>`

    newQuestion.innerHTML = questionContent;
    document.querySelector(".form-question-container").appendChild(newQuestion);
}

//Function For generating question Option input ========================
function newQuestionOption(container, divClass, optionId, number, value) {
    let newQuestionOption = document.createElement("div");
    newQuestionOption.classList.add(`${divClass}`);
    newQuestionOption.setAttribute("data-optionId", `${optionId}`);
    newQuestionOption.setAttribute("data-option-number", `${number}`);

    let OptionContent = `<p>${value} ${number}</p>

    <img src="icons/edit-pencile.svg" title="Edit" onclick="editInputRow(this)">
    <img src="icons/tick_button.svg" alt="Save" title="Save" id="saveValue" onclick="getEditInputRow(this)">
    <img src="icons/delete.svg" alt="Delete" title="Delete" id="deleteInput" onclick="rm(this)">`

    newQuestionOption.innerHTML = OptionContent;
    // document.querySelector(".custom-input-row").appendChild(newQuestionOption);
    container.appendChild(newQuestionOption);
}






// Function for generating New Unique Id
function create_UUID() {
    var dt = new Date().getTime();
    var uuid = 'xxxxxxxxxxxx4xxxyxxxxxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
        var r = (dt + Math.random() * 16) % 16 | 0;
        dt = Math.floor(dt / 16);
        return (c == 'x' ? r : (r & 0x3 | 0x8)).toString(16);
    });
    return uuid;
}