let searchBtn = document.querySelector("#search-btn");
let searchBar = document.querySelector(".search-bar-container");
let formBtn = document.querySelector("#login-btn");
let loginForm = document.querySelector("#login");
// edited
let regformClose = document.querySelector("#regform-close");
let logformClose = document.querySelector("#loginform-close");

let menu = document.querySelector("#menu-bar");
let navbar = document.querySelector(".navbar");
let videoBtn = document.querySelectorAll(".vid-btn");
//edited
let regformbtn = document.querySelector("#register");
let regForm = document.querySelector("#reg");
let relogform = document.querySelector("#relog");

window.onscroll = () => {
  searchBtn.classList.remove("fa-times");
  searchBar.classList.remove("active");
  menu.classList.remove("fa-times");
  navbar.classList.remove("active");
  loginForm.classList.remove("active");
};

menu.addEventListener("click", () => {
  menu.classList.toggle("fa-times");
  navbar.classList.toggle("active");
});

searchBtn.addEventListener("click", () => {
  searchBtn.classList.toggle("fa-times");
  searchBar.classList.toggle("active");
});
// edited
formBtn.addEventListener("click", () => {
  loginForm.classList.add("active");
});

logformClose.addEventListener("click", () => {
  loginForm.classList.remove("active");
});
regformbtn.addEventListener("click", () => {
  loginForm.classList.remove("active");
  regForm.classList.add("active");
});

regformClose.addEventListener("click", () => {
  regForm.classList.remove("active");
});

relogform.addEventListener("click", () => {
  regForm.classList.remove("active");
  loginForm.classList.add("active");
});
// edited
videoBtn.forEach((btn) => {
  btn.addEventListener("click", () => {
    document.querySelector(".controls .active").classList.remove("active");
    btn.classList.add("active");
    let src = btn.getAttribute("data-src");
    document.querySelector("#video-slider").src = src;
  });
});

var swiper = new Swiper(".review-slider", {
  spaceBetween: 20,
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  breakpoints: {
    640: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});
