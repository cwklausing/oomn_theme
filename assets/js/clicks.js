var menuIsOpen = false;
var mobileMenuButton = document.getElementById("mobile-menu-button");

mobileMenuButton.addEventListener("click", function() {
  if (!menuIsOpen) {
    var mobileNav = document.getElementById("mobile-nav");
    mobileMenuButton.classList.add("is-active");
    mobileNav.classList.add("is-active");
    menuIsOpen = true;
  } else {
    menuIsOpen = false;
    var mobileNav = document.getElementById("mobile-nav");
    mobileMenuButton.classList.remove("is-active");
    mobileNav.classList.remove("is-active");
  }
});
