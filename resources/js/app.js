require('./bootstrap');

const buttons = document.querySelectorAll('.move-option');

// Container
const popupContainer = document.querySelector('.popup-container');

// Tekst
const popupContent = document.querySelector('.popup-content');

const skills = ['Illustrator', 'Laravel-Dusk', 'Javascript', 'HTML', 'PHP', 'Laravel', 'PHPUnit', 'CSS', 'Bootstrap', 'SQL', 'Photoshop', 'InDesign'];

buttons.forEach(button => {
  button.addEventListener('mouseover', () => {
      popupContent.textContent = skills[button.attributes.value.value-1];
      popupContainer.style.display = 'block';

      const buttonRect = button.getBoundingClientRect();
      popupContainer.style.left = `${buttonRect.left + buttonRect.width / 2}px`;
      popupContainer.style.top = `${buttonRect.bottom + popupContainer.clientHeight}px`;
  });

  button.addEventListener('mouseout', () => {
      popupContainer.style.display = 'none';
  });
});