// script pour titre qui size 
window.addEventListener('scroll', () => {
    const minFontSize = 2.27; // Taille de police minimale
    const scrollTarget = 800; // Distance de scroll pour terminer l'effet
    const scrollTop = window.scrollY;
    const maxScrollTop = document.documentElement.scrollHeight - window.innerHeight;
  
    const newFontSize = scrollTop <= scrollTarget
      ? 5.5 - (scrollTop / scrollTarget) * (5.5 - minFontSize)
      : minFontSize;
  
    document.querySelector('.titre').style.fontSize = `${newFontSize}vw`;
  });

  // titre description pour chaque image chargé
  document.addEventListener('DOMContentLoaded', function () {
    const images = document.querySelectorAll('.gallery-image');

    images.forEach(image => {
        const imagePath = image.getAttribute('src');
        const imageName = imagePath.split('/').pop().split('.')[0]; // Extracts the filename without extension
        const title = document.createElement('div');
        title.classList.add('image-title');
        title.textContent = imageName;
        image.parentNode.appendChild(title);
    });
});
