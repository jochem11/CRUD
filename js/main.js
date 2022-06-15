let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }

  slides[slideIndex - 1].style.display = "block";
  setTimeout(showSlides, 5000);
}

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
  if (filters.style.display == "block") {
    filters.style.display = "none";
  } else {
    filters.style.display = "block";
  }
});
