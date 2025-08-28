const burger = document.querySelector(".nav-burger");
const nav = document.querySelector(".nav-menu");
const allLinks = document.querySelectorAll("nav-menu li a ");

burger.addEventListener("click", () => {
  burger.classList.toggle("active");
  nav.classList.toggle("active");
});

allLinks.forEach((item) => {
  item.addEventListener("click", () => {
    burger.classList.remove("active");
    nav.classList.remove("active");
  });
});

////////////////*****NavBar*****/////////////////////

let lastScrollTop = 0;
const navbar = document.querySelector("nav");
window.addEventListener("scroll", () => {
  let scrollTop = window.scrollY;

  if (scrollTop <= 50) {
    navbar.style.top = "0";
  } else if (scrollTop > lastScrollTop) {
    navbar.style.top = "-80px";
  } else {
    navbar.style.top = "0";
  }

  lastScrollTop = scrollTop;
});
