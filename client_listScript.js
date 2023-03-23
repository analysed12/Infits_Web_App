const popUp = document.querySelector("#toast");
const btn1 = document.querySelector(".btn1");
const btn2 = document.querySelector(".btn2");
const btn__span = document.querySelector(".btn__span");
const myCheckBox = document.querySelectorAll(".myCheckboxs");

const toast = (val) => {
  popUp.style.display = "inline-flex";
  btn__span.innerHTML = val;
  myCheckBox.forEach((items) => {
    items.style.display = "block";
    // console.log(items.value);
  });
  // console.log(myCheckBox, "the checkBox");
};
btn1.addEventListener("click", (e) => {
  if (btn__span.innerHTML == "Set Goals") {
    myCheckBox.forEach((items) => {
      if (items.checked) {
        console.log(items.value);
      }
    });
    window.location.href = "setgoals.php";
    console.log(myCheckBox, "the checkBox");
  } else if (btn__span.innerHTML == "Set Reminders") {
    myCheckBox.forEach((items) => {
      if (items.checked) {
        console.log(items.value);
      }
    });
    window.location.href = "set_reminders.php";
  }
});
btn2.addEventListener("click", () => {
  popUp.style.display = "none";
  myCheckBox.forEach((items) => {
    items.style.display = "none";
  });
});
