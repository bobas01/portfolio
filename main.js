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

// Gestion de la grille responsive des compétences
function initSkillsGrid() {
    const skillsGroups = document.querySelectorAll('.skills-group');
    
    skillsGroups.forEach(group => {
        const skills = group.querySelectorAll('.image');
        const skillsCount = skills.length;
        
        // Calculer le nombre optimal d'éléments par ligne DANS chaque groupe
        function updateGrid() {
            const screenWidth = window.innerWidth;
            let itemsPerRow;
            let iconSize = '80px'; // Taille constante pour toutes les tailles d'écran
            
            if (screenWidth >= 800) {
                // Desktop : répartir les icônes de chaque groupe
                if (skillsCount <= 3) {
                    itemsPerRow = skillsCount; // Tout sur une ligne si 3 ou moins
                } else if (skillsCount <= 6) {
                    itemsPerRow = 3; // 3 par ligne pour 4-6 icônes
                } else {
                    itemsPerRow = 3; // 3 par ligne pour plus de 6
                }
            } else if (screenWidth >= 600) {
                // Tablette : 2-3 par ligne
                itemsPerRow = Math.min(3, Math.ceil(skillsCount / 2));
            } else if (screenWidth >= 420) {
                // Mobile large : 2 par ligne
                itemsPerRow = 2;
            } else {
                // Mobile petit : 2 par ligne aussi (pas 1)
                itemsPerRow = 2;
            }
            
            // Appliquer la grille CSS à chaque groupe individuellement
            group.style.display = 'grid';
            group.style.gridTemplateColumns = `repeat(${itemsPerRow}, 1fr)`;
            group.style.gap = '20px';
            group.style.justifyItems = 'center';
            group.style.alignItems = 'start';
            group.style.width = '100%';
            
            // Ajuster la taille des icônes dans chaque groupe
            skills.forEach(skill => {
                const img = skill.querySelector('img');
                const span = skill.querySelector('span');
                
                img.style.width = iconSize;
                img.style.height = iconSize;
                
                // Toujours garder l'icône centrée avec le span en dessous
                skill.style.display = 'flex';
                skill.style.flexDirection = 'column';
                skill.style.alignItems = 'center';
                skill.style.justifyContent = 'center';
                skill.style.width = 'auto';
                span.style.textAlign = 'center';
                span.style.marginTop = '8px';
                
                // Garder le style uniforme du span
                span.style.fontFamily = 'inherit';
                span.style.fontWeight = '500';
                span.style.fontSize = '1rem';
            });
        }
        
        // Initialiser et mettre à jour lors du redimensionnement
        updateGrid();
        window.addEventListener('resize', updateGrid);
    });
    
    // Gérer l'affichage des 3 groupes principaux
    function updateMainLayout() {
        const screenWidth = window.innerWidth;
        const competencesList = document.querySelector('#competences ul');
        
        // Toujours empiler les groupes verticalement
        competencesList.style.display = 'block';
        competencesList.style.width = '100%';
        
        // Ajuster l'espacement entre les groupes
        if (screenWidth >= 800) {
            competencesList.style.gap = '60px';
        } else if (screenWidth >= 600) {
            competencesList.style.gap = '50px';
        } else {
            competencesList.style.gap = '40px';
        }
    }
    
    updateMainLayout();
    window.addEventListener('resize', updateMainLayout);
}

// Initialiser la grille des compétences au chargement
document.addEventListener('DOMContentLoaded', function() {
    initSkillsGrid();
});
