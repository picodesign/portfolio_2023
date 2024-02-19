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
    const videos = document.querySelectorAll('.gallery video');

    videos.forEach(video => {
        const sources = video.querySelectorAll('source');
        const videoPath = sources[0].getAttribute('src'); // Prend le chemin de la première source
        const videoName = videoPath.split('/').pop().split('.')[0]; // Extrait le nom de fichier sans extension

        const title = document.createElement('div');
        title.classList.add('image-title');
        title.textContent = videoName;
        video.parentNode.appendChild(title);
    });
});

