let lastScrollTop = 0;
const navbar = document.querySelector("nav");

window.addEventListener("scroll", () => {
  let scrollTop = window.scrollY;

  if (scrollTop <= 50) {
    navbar.style.top = "0";
  } else if (scrollTop > lastScrollTop) {
    navbar.style.top = "-100px";
  } else {
    navbar.style.top = "0";
  }

  lastScrollTop = scrollTop;
});
