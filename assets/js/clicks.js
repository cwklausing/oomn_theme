var menuIsOpen = false;
var mobileMenuButton = document.getElementById("mobile-menu-button");
var hamburgerMenu = document.getElementById("hamburger-menu");

mobileMenuButton.addEventListener("click", function() {
  if (!menuIsOpen) {
    var mobileNav = document.getElementById("mobile-nav");
    hamburgerMenu.classList.add("is-active");
    mobileNav.classList.add("is-active");
    menuIsOpen = true;
  } else {
    menuIsOpen = false;
    var mobileNav = document.getElementById("mobile-nav");
    hamburgerMenu.classList.remove("is-active");
    mobileNav.classList.remove("is-active");
  }
});
