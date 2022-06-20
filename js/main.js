let login = document.querySelector("#loginBtn");
let loginContainer = document.querySelector("#logincontainer");
login.addEventListener("click", (e) => {
  loginContainer.style.display = "flex";
  window.onclick = (e) => {
    if (e.target == loginContainer) {
      loginContainer.style.display = "none";
    }
  };
});

let signUp = document.querySelector("#signUpBtn");
let signupcontianer = document.querySelector("#signupcontainer");
signUp.addEventListener("click", (e) => {
  signupcontianer.style.display = "flex";
  window.onclick = (e) => {
    if (e.target == signupcontianer) {
      signupcontianer.style.display = "none";
    }
  };
});

let filters = document.querySelector("#filters");
let filterBtn = document.querySelector("#filerbutton");
filterBtn.addEventListener("click", (e) => {
  if (filters.style.display == "flex") {
    filters.style.display = "none";
  } else {
    filters.style.display = "flex";
  }
});

let RvwBtn = document.querySelector("#newRvw");
let RvwCtnr = document.querySelector("#RvwCtnr");
RvwBtn.addEventListener("click", (e) => {
  RvwCtnr.style.display = "flex";
  window.onclick = (e) => {
    if (e.target == RvwCtnr) {
      RvwCtnr.style.display = "none";
    }
  };
});
