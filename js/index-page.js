// for the login custom modal

function showLogin(){
    const loginWrapper =  document.querySelector(".login-wrapper");
    loginWrapper.style.visibility = "visible";

  }


  
  
//  handles what happens when the user doesn't want to login... form-close icon is clicked
var closeButton = document.getElementById("myspan");

closeButton.addEventListener("click", function() {
  
  window.location.href = "index.php";
});

