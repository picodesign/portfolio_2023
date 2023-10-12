//script pour filtres
const filterButtons = document.querySelectorAll('.filtre');
const travaux = document.querySelectorAll('.travail');

filterButtons.forEach(button => {
  button.addEventListener('click', () => {
    const selectedTag = button.dataset.filter;
    const isFilterActive = button.classList.contains('active');

    if (isFilterActive) {
      travaux.forEach(travail => {
        travail.style.display = 'block';
      });
      button.classList.remove('active');
    } else {
      travaux.forEach(travail => {
        const tags = travail.querySelector('a').dataset.tags.split(',').map(tag => tag.trim());
        if (tags.includes(selectedTag)) {
          travail.style.display = 'block';
        } else {
          travail.style.display = 'none';
        }
      });
      filterButtons.forEach(btn => btn.classList.remove('active'));
      button.classList.add('active');
    }
  });
});
//fin script filtre