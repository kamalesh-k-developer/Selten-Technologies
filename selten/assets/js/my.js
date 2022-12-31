// const buttons = document.querySelectorAll("[data-carousel-button]")

//  buttons.forEach(button => {
//     button.addEventListener("click",() =>{
//         const offset = button.dataset.carouselButton === "next" ? 1: -1
//         const slides = button.closest("[data-carousel]").querySelector("[data-slides]")

//         const activeSlide = slides.querySelector("[data-active]")
//         let newIndex = [...slides.children].indexOf(activeSlide) + offset
//         if (newIndex < 0) newIndex = slides.children.length -1 
//         if (newIndex >= slides.children.length) newIndex = 0

//         slides.children[newIndex].dataset.active = true
//         delete activeSlide.dataset.active
//     })
//  });

//  $(function() {
  
//   $('.carousel').carousel({
//     interval: 5000
//   });
  
// });

// //Make the caption responsive to window width
// $(document).ready(function() {
//     $('.carousel .carousel-caption').css('zoom', $('.carousel').width()/1250);
//   });

//   $(window).resize(function() {
//     $('.carousel .carousel-caption').css('zoom', $('.carousel').width()/1250);
//   });


// nav-design//

//  humburger menu


const menu = document.querySelector(".nav-ul");
const menuItems = document.querySelectorAll(".nav-link");
const hamburger= document.querySelector(".hamburger");
const closeIcon= document.querySelector(".closeIcon");
const menuIcon = document.querySelector(".menuIcon");

function toggleMenu() {
  if (menu.classList.contains("showMenu")) {
    menu.classList.remove("showMenu");
    closeIcon.style.display = "none";
    menuIcon.style.display = "block";
  } else {
    menu.classList.add("showMenu");
    closeIcon.style.display = "block";
    menuIcon.style.display = "none";
  }
}

hamburger.addEventListener("click", toggleMenu);

menuItems.forEach( 
  function(menuItem) { 
    menuItem.addEventListener("click", toggleMenu);
  }
)
// testimonial// 

var btn = document.getElementsByClassName ("btn");
var testslide = document.getElementById ("testslide")
var timer;

btn [0].onclick = function (){
    testslide.style.transform = "translateX(0px)";
    for (i=0; i<4; i++){
      btn[i].classList.remove("active-test");
      this.classList.add("active-test");
    }
    
}
btn [1].onclick = function (){
    testslide.style.transform = "translateX(-800px)";
    for (i=0; i<4; i++){
      btn[i].classList.remove("active-test");
      this.classList.add("active-test");
    }
}

btn [2].onclick = function (){
    testslide.style.transform = "translateX(-1600px)";
    for (i=0; i<4; i++){
      btn[i].classList.remove("active-test");
      this.classList.add("active-test");
    }
}
console.log("test")

btn [3].onclick = function (){
    testslide.style.transform = "translateX(-2400px)";
    for (i=0; i<4; i++){
      btn[i].classList.remove("active-test");
      this.classList.add("active-test");
    }
} 



// slider animation//
var counter = 1
setInterval(function(){
  Document.getElementsByClassName('btn' + testslide).checked = true;
  counter++;
  if(counter > 4){
    counter = 1;
  }
},3000);

