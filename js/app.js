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
    const galleryItems = document.querySelectorAll('.gallery-image');

    galleryItems.forEach(item => {
        if (item.tagName === 'VIDEO') {
            const sources = item.querySelectorAll('source');
            const videoPath = sources[0].getAttribute('src');
            const videoName = videoPath.split('/').pop().split('.')[0];

            const title = document.createElement('div');
            title.classList.add('image-title');
            title.textContent = videoName;
            item.parentNode.appendChild(title);
        } else if (item.tagName === 'IMG') {
            const imagePath = item.getAttribute('src');
            const imageName = imagePath.split('/').pop().split('.')[0];

            const title = document.createElement('div');
            title.classList.add('image-title');
            title.textContent = imageName;
            item.parentNode.appendChild(title);
        }
    });
});


