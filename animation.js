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
  

