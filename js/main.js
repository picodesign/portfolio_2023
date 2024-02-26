function setThemeAndVideo() {
  // console.log('La fonction setThemeAndVideo est exécutée.');

  const now = new Date();
  const hours = now.getHours();
  // console.log('Heures actuelles :', hours);

  const isDaytime = hours >= 8 && hours < 19;
  // console.log('Est-ce la journée ?', isDaytime);

  const root = document.documentElement;
  root.style.setProperty('--text', isDaytime ? '#1c1917' : '#E8E5E3');
  root.style.setProperty('--background', isDaytime ? '#efebeb' : '#141010');
  root.style.setProperty('--primary', isDaytime ? '#524a42' : '#BDB5AD');
  root.style.setProperty('--secondary', isDaytime ? '#b2b4a2' : '#5b5d4b');
  root.style.setProperty('--accent', isDaytime ? '#6f775f' : '#98a088');

  const lightVideo = document.getElementById('lightVideo');
  const darkVideo = document.getElementById('darkVideo');

  if (isDaytime) {
      // console.log('C\'est la journée. Affichage de la vidéo "light".');
      lightVideo.style.display = 'block';
      darkVideo.style.display = 'none';
  } else {
      // console.log('C\'est la nuit. Affichage de la vidéo "dark".');
      lightVideo.style.display = 'none';
      darkVideo.style.display = 'block';
  }

  lightVideo.play();
  darkVideo.play();
}

window.addEventListener('load', setThemeAndVideo);


//script pour filtres
const filterButtons = document.querySelectorAll(".filtre");
const travaux = document.querySelectorAll(".travail");

filterButtons.forEach((button) => {
  button.addEventListener("click", () => {
    const selectedTag = button.dataset.filter;
    const isFilterActive = button.classList.contains("active");

    if (isFilterActive) {
      travaux.forEach((travail) => {
        travail.style.display = "block";
      });
      button.classList.remove("active");
    } else {
      travaux.forEach((travail) => {
        const tags = travail
          .querySelector("a")
          .dataset.tags.split(",")
          .map((tag) => tag.trim());
        if (tags.includes(selectedTag)) {
          travail.style.display = "block";
        } else {
          travail.style.display = "none";
        }
      });
      filterButtons.forEach((btn) => btn.classList.remove("active"));
      button.classList.add("active");
    }
  });
});


// menu mobile
document.getElementById('check').addEventListener('change', function() {
  document.body.classList.toggle('active', this.checked);
});

// Animation css visble seulement en hiver
document.addEventListener("DOMContentLoaded", function () {
  // Récupérer le mois actuel
  const moisActuel = new Date().getMonth() + 1; // Les mois commencent à partir de 0

  if (moisActuel >= 12 || moisActuel <= 2) {
      // Afficher les div
      const snowDiv = document.querySelector('.snow');
      snowDiv.style.display = 'block';
      const calques = document.querySelectorAll('.snow__calque');
      calques.forEach(calque => {
          calque.style.display = 'block';
      });
      console.log("Nous sommes en hiver. Affichage des éléments.");

  } else{
    console.log("Nous ne sommes pas en hiver. Les éléments restent masqués.");
  }
});
// fin animation automatique