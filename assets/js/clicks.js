// Mobile Menu
var menuIsOpen = false
var mobileMenuButton = document.getElementById("mobile-menu-button")
var hamburgerMenu = document.getElementById("hamburger-menu")

mobileMenuButton.addEventListener("click", function() {
  if (!menuIsOpen) {
    var mobileNav = document.getElementById("mobile-nav")
    hamburgerMenu.classList.add("is-active")
    mobileNav.classList.add("is-active")
    menuIsOpen = true
  } else {
    menuIsOpen = false
    var mobileNav = document.getElementById("mobile-nav")
    hamburgerMenu.classList.remove("is-active")
    mobileNav.classList.remove("is-active")
  }
})

// Post CTA button

var triggerPoint = 1000
var ctaButton = document.getElementById("post-cta")

if (ctaButton) {
  window.addEventListener("scroll", function() {
    if (window.scrollY > triggerPoint) {
      if (!ctaButton.classList.contains("active")) {
        ctaButton.classList.add("active")
      }
    } else {
      ctaButton.classList.remove("active")
    }
  })
}

// Post CTA 'close' button
var closeButton = document.getElementById("close-button")

if (closeButton) {
  closeButton.addEventListener("click", function() {
    ctaButton.classList.add("closed")
  })
}