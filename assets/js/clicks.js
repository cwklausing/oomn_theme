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

window.addEventListener("scroll", function() {
  if (window.scrollY > triggerPoint) {
    if (!ctaButton.classList.contains("active")) {
      ctaButton.classList.add("active")
    }
  } else {
    ctaButton.classList.remove("active")
  }
})

// Post CTA 'close' button
var closeButton = document.getElementById("close-button")

closeButton.addEventListener("click", function() {
  ctaButton.classList.add("closed")
})

// Image lightbox for post page
// var postSection = document.getElementById("post-single")
// var postImages = postSection.getElementsByTagName("img")
// var modal = document.getElementById("main-modal")
// var body = document.getElementsByTagName("body")

// modal.addEventListener("click", function() {
//   modal.classList.toggle("active")
//   if(body.length === 1) {
//     body[0].classList.toggle("scroll-lock")
//   }
//   modal.removeChild(modal.lastChild)
// })

// function initLightBox() {
//   var imgDimensionRgx = /-[0-9]*x[0-9]*/
//   for(var i = 0; i < postImages.length; i++) {
//     postImages[i].addEventListener("click", function() {
//       var src = String(this.src);
//       var bigImage = src.replace(imgDimensionRgx, "");
//       var newImage = document.createElement("img")
//       newImage.src = bigImage
//       modal.appendChild(newImage)
//       modal.classList.toggle("active")
      
//       // lock body when modal is active
//       if(body.length === 1) {
//         body[0].classList.toggle("scroll-lock")
//       }
//     })
//   }
// }

// initLightBox()