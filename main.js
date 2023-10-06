let rightArrow = document.getElementById('rightArrow');
let leftArrow = document.getElementById('leftArrow');
let windowSlider = document.getElementById('window-slider').offsetWidth;
let listSlide = document.getElementById('list-slide')
let slide = document.getElementsByClassName('slide');
let nbSlide = slide.length;
let mLeft = 0;
let intervalId; 


rightArrow.addEventListener('click', function () {
   if (mLeft - windowSlider == windowSlider * -10) {

      this.click.stopPropagation()
   }
   else {
      mLeft -= windowSlider;
      listSlide.style.marginLeft = mLeft + 'px';
   }
});



leftArrow.addEventListener('click', function () {
   if (mLeft + windowSlider == windowSlider) {

      this.click.stopPropagation()
   }
   else {
      mLeft += windowSlider;
      listSlide.style.marginLeft = mLeft + 'px';
   }

});
let currentSlide = 0;


function nextSlide() {
   slide[currentSlide].style.display = "none";
   currentSlide = (currentSlide + 1) % nbSlide;
   slide[currentSlide].style.display = "block";
}

function prevSlide() {
   slide[currentSlide].style.display = "none";
   currentSlide = (currentSlide - 1 + nbSlide) % nbSlide;
   slide[currentSlide].style.display = "block";
}

// Fonction pour démarrer le changement automatique d'images
function startAutoSlide() {
   intervalId = setInterval(nextSlide, 1000); // Change d'image toutes les 3 secondes (3000 millisecondes)
}

// Fonction pour arrêter le changement automatique d'images
function stopAutoSlide() {
   clearInterval(intervalId); // Arrête l'intervalle
}

startAutoSlide();
listSlide.addEventListener("touchstart", handleTouchStart, false);
listSlide.addEventListener("touchmove", handleTouchMove, false);


let xDown = null;
let yDown = null;

function handleTouchStart(evt) {
   xDown = evt.touches[0].clientX;
   yDown = evt.touches[0].clientY;
}

function handleTouchMove(evt) {
   if (!xDown || !yDown) {
      return;
   }

   let xUp = evt.touches[0].clientX;
   let yUp = evt.touches[0].clientY;

   let xDiff = xDown - xUp;
   let yDiff = yDown - yUp;


   if (Math.abs(xDiff) > Math.abs(yDiff)) {
      if (xDiff > 0) {

         nextSlide();
      } else {

         prevSlide();
      }
   }

   xDown = null;
   yDown = null;
}

document.addEventListener('DOMContentLoaded', function() {
   const elements = document.querySelectorAll('.has-animation');
   elements.forEach(function(element, index) {
     const delay = element.dataset.delay;
 
     setTimeout(function() {
       element.classList.add('animate-in');
     }, delay);
   });
 });

 const observer = new IntersectionObserver(entries => {
   // Loop over the entries
   entries.forEach(entry => {
     // If the element is visible
     if (entry.isIntersecting) {
       // Add the animation class
       entry.target.classList.add('image-animation');
     }
   });
 });
 
 const viewbox = document.querySelectorAll('.image');
 viewbox.forEach(image => {
   observer.observe(image);
 });