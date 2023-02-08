let addQuestion = document.querySelector("#addQuestion");
let editQuestion = document.getElementsByClassName("editQuestion");
let deleteQuestion = document.getElementsByClassName("deleteQuestion");
let popup = document.querySelector("#popup");
let options = document.getElementsByName("options");

// For Popup CheckBox Value
for (const index of options) {
  index.addEventListener("change", () => {
    if (index.checked == true) {
      // if value is Text
      if (index.value == "text") {
        popup.children[3].style.display = "none";

        // add column only
        popup.children[3].children[0].children[0].addEventListener(
          "click",
          () => {
            popup.children[3].children[1].style.display = "none";
          }
        );

        // add table
        popup.children[3].children[0].children[1].addEventListener(
          "click",
          () => {
            popup.children[3].children[1].style.display = "none";
          }
        );
      }

      // if value is checkBox
      if (index.value == "checkbox") {
        popup.children[3].style.display = "flex";
        popup.children[3].children[0].children[0].children[1].innerText =
          "Add Checkbox";
        popup.children[3].children[0].children[1].children[1].innerText =
          "Create a table of Checkboxes";

        // add column only
        popup.children[3].children[0].children[0].addEventListener(
          "click",
          () => {
            popup.children[3].children[1].style.display = "flex";
            popup.children[3].children[0].children[2].style.display = "flex";
          }
        );

        // add table
        popup.children[3].children[0].children[1].addEventListener(
          "click",
          () => {
            popup.children[3].children[1].style.display = "flex";
            popup.children[3].children[0].children[2].style.display = "flex";
          }
        );
      }

      // if value is checkBox
      if (index.value == "radio") {
        popup.children[3].style.display = "flex";
        popup.children[3].children[0].children[0].children[1].innerText =
          "Add Radio Buttons";
        popup.children[3].children[0].children[1].children[1].innerText =
          "Create a table of Radio Buttons";

        // add column only
        popup.children[3].children[0].children[0].addEventListener(
          "click",
          () => {
            popup.children[3].children[1].style.display = "flex";
            popup.children[3].children[0].children[2].style.display = "flex";
          }
        );

        // add table
        popup.children[3].children[0].children[1].addEventListener(
          "click",
          () => {
            popup.children[3].children[1].style.display = "flex";
            popup.children[3].children[0].children[2].style.display = "flex";
          }
        );
      }

      // Close custom input container
      popup.children[3].children[0].children[2].addEventListener(
        "click",
        () => {
          popup.children[3].children[1].style.display = "none";
          popup.children[3].children[0].children[2].style.display = "none";
        }
      );
    }
  });
}

// console.log(popup.children[3].children[0].children[2]);
// console.log(popup.children[2].children[1].childNodes[1]);

for (const index of editQuestion) {
  index.addEventListener("click", function editQuestion() {
    popup.classList.add("show");
    popup.childNodes[1].innerText = "Edit Question";
  });
}

for (const index of deleteQuestion) {
  index.addEventListener("click", function deleteQuestion(e) {
    this.parentElement.parentElement.remove();
    console.log(this.parentElement.parentElement.remove());
  });
}

// Add Question
addQuestion.addEventListener("click", function newQuestion() {
  popup.classList.add("show");
  popup.childNodes[1].innerText = "Add Question";
});

// Popup Cancel
popup.children[4].childNodes[1].addEventListener("click", () => {
  popup.classList.remove("show");
});

// Popup Save
popup.children[3].childNodes[3].addEventListener("click", () => {
  console.log(popup.children[1].value);
});

// Share Section Code Start Here ================================================================
let usersList = document.querySelector("#usersList");
let selectedUserBox = document.querySelector("#selectedUser-box");
let ShareCheckBox = document.getElementsByClassName("checkBox");
let selectedUser = document.getElementsByClassName("selectedUser");

const clientName = [
  "client 1",
  "client 2",
  "client 3",
  "client 4",
  "client 5",
  "client 6",
  "client 7",
  "client 8",
  "client 9",
];

for (const index of clientName) {
  usersList.innerHTML += `<li>
<input type="checkbox" name="checkBox" class="checkBox" data-user="${index}">
<label for="checkBox" class="userName">${index}</label>
</li>`;
}

for (const x of ShareCheckBox) {
  x.addEventListener("change", () => {
    if (x.checked == true) {
      console.log(x.getAttribute("data-user"));

      selectedUserBox.innerHTML += `                    <div class="selectedUser">
      <p class="userName">${x.getAttribute("data-user")}</p>
      <img src="icons/CrossX.svg" alt="Remove" title="Remove">
  </div>`;

      x.parentElement.remove();
    }
    // else if(x.checked == false){

    //   // console.log(`${x.getAttribute("data-user")} Removed`);

    //   for (const index of selectedUser) {

    //     if(index.children[0].innerText === x.getAttribute("data-user")){
    //       index.remove();
    //     }
    //   }
    // }

    for (const index of selectedUser) {

      index.children[1].addEventListener("click", () => {
        index.remove();

        usersList.innerHTML += `<li>
        <input type="checkbox" name="checkBox" class="checkBox" data-user="${index.children[0].innerText}">
        <label for="checkBox" class="userName">${index.children[0].innerText}</label>
        </li>`;
      });
    }
  });
}

// console.log(`${selectedUser}`);
// console.log(selectedUser);
// console.log(ShareCheckBox[0])
