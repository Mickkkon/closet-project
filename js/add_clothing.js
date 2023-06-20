//  grab elements for dom manipulations
const submitButton = document.getElementById("add-clothing-btn");
const formWrapper = document.querySelector(".form-wrapper");
const myButton = document.getElementById("form-btn");
const backBtn = document.getElementById("back-btn");

// show form window when add clothing btn is clicked
myButton.addEventListener("click", function() {
    formWrapper.style.visibility = "visible";
});

// hide form window when submit btn is clicked
submitButton.addEventListener("click", function() {
  formWrapper.style.visibility = "hidden";
});

// hide the form window when form close btn is clicked
backBtn.addEventListener('click', () => {
    formWrapper.style.visibility = "hidden";
});


 


