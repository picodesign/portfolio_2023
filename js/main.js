// UI MOBILE FIX
window.addEventListener("resize", () => {
  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty("--vh", `${vh}px`);
});
// fin

// changement video en  fonction du theme
function setThemeAndVideo() {
  const isDarkMode = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
  const lightVideo = document.getElementById("lightVideo");
  const darkVideo = document.getElementById("darkVideo");

  if (isDarkMode) {
    lightVideo.style.display = "none";
    darkVideo.style.display = "block";
  } else {
    lightVideo.style.display = "block";
    darkVideo.style.display = "none";
  }

  lightVideo.play();
  darkVideo.play();
}
window.addEventListener("load", setThemeAndVideo);
// fin

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
document.getElementById("check").addEventListener("change", function () {
  document.body.classList.toggle("active", this.checked);
});

// Animation css visble seulement en hiver
// document.addEventListener("DOMContentLoaded", function () {
//   // Récupérer le mois actuel
//   const moisActuel = new Date().getMonth() + 1; // Les mois commencent à partir de 0

//   if (moisActuel >= 12 || moisActuel <= 2) {
//     // Afficher les div
//     const snowDiv = document.querySelector(".snow");
//     snowDiv.style.display = "block";
//     const calques = document.querySelectorAll(".snow__calque");
//     calques.forEach((calque) => {
//       calque.style.display = "block";
//     });
//     console.log("Nous sommes en hiver. Affichage des éléments.");
//   } else {
//     console.log("Nous ne sommes pas en hiver. Les éléments restent masqués.");
//   }
// });
// fin animation automatique
