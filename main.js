let rightArrow = document.getElementById('rightArrow');
let leftArrow = document.getElementById('leftArrow');
let slides = document.querySelectorAll('#list-slide .slide');
let nbSlide = slides.length;
let currentSlide = 0;
let intervalId;

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.style.display = (i === index) ? 'block' : 'none';
    });
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % nbSlide;
    showSlide(currentSlide);
}

function prevSlide() {
    currentSlide = (currentSlide - 1 + nbSlide) % nbSlide;
    showSlide(currentSlide);
}

rightArrow.addEventListener('click', nextSlide);
leftArrow.addEventListener('click', prevSlide);

// Affiche la première slide au chargement
showSlide(currentSlide);

// Carousel automatique (toutes les 3 secondes)
intervalId = setInterval(nextSlide, 3000);

// Pause le carousel au survol
const slider = document.getElementById('slider');
slider.addEventListener('mouseenter', () => clearInterval(intervalId));
slider.addEventListener('mouseleave', () => intervalId = setInterval(nextSlide, 3000));

// Swipe mobile
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

const listSlide = document.getElementById('list-slide');
listSlide.addEventListener('touchstart', handleTouchStart, false);
listSlide.addEventListener('touchmove', handleTouchMove, false);

function countCharacters(textarea) {
    var characterCount = textarea.value.length;
    var counterElement = document.getElementById('characterCount');
    counterElement.textContent = characterCount + '/500';

    if (characterCount < 20) {
        counterElement.style.color = 'red';
    } else {
        counterElement.style.color = 'green';
    }
}
