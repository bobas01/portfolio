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

// Effet parallax avec simpleParallax.js pour les projets
function initProjectParallax() {
    const projectImages = document.querySelectorAll('.project-image img');
    
    // Vérifier si on est sur mobile/tablette (largeur < 800px)
    const isMobileTablet = window.innerWidth < 800;
    
    if (isMobileTablet && projectImages.length > 0) {
        // Vérifier si simpleParallax est disponible
        if (typeof simpleParallaxVanilla !== 'undefined') {
            // Appliquer l'effet parallax sur toutes les images de projets
            const parallaxInstances = simpleParallaxVanilla(projectImages, {
                orientation: 'up',
                scale: 1.15,
                delay: 0.4,
                transition: 'cubic-bezier(0.25, 0.46, 0.45, 0.94)',
                overflow: false
            });
            
            // Ajouter un effet au scroll pour afficher les icônes
            const projectContainers = document.querySelectorAll('.project-image');
            
            projectContainers.forEach((container, index) => {
                const imageObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            // Ajouter la classe pour activer l'effet
                            entry.target.classList.add('scroll-active');
                            
                            // Retirer la classe après un délai plus long
                            setTimeout(() => {
                                entry.target.classList.remove('scroll-active');
                            }, 4000);
                        }
                    });
                }, {
                    threshold: 0.6, // Déclenche quand 60% de l'image est visible
                    rootMargin: '0px 0px -80px 0px'
                });
                
                imageObserver.observe(container);
            });
        } else {
            console.log('SimpleParallax non disponible, utilisation de l\'effet de base');
            // Fallback vers l'effet de base si simpleParallax n'est pas disponible
            initFallbackEffect();
        }
    }
}

// Effet de fallback si simpleParallax n'est pas disponible
function initFallbackEffect() {
    const projectContainers = document.querySelectorAll('.project-image');
    
    projectContainers.forEach(container => {
        const imageObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('scroll-active');
                    
                    setTimeout(() => {
                        entry.target.classList.remove('scroll-active');
                    }, 4000);
                }
            });
        }, {
            threshold: 0.6,
            rootMargin: '0px 0px -80px 0px'
        });
        
        imageObserver.observe(container);
    });
}

// Initialiser l'effet parallax au chargement
initProjectParallax();

// Réinitialiser lors du redimensionnement de la fenêtre
window.addEventListener('resize', initProjectParallax);
  

