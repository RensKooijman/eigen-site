require('./bootstrap');

const buttons = document.querySelectorAll('.move-option');

// Container
const popupContainer = document.querySelector('.popup-container');

// Tekst
const popupContent = document.querySelector('.popup-content');

const skills = ['Illustrator', 'Laravel-Dusk', 'Javascript', 'HTML', 'PHP', 'Laravel', 'PHPUnit', 'CSS', 'Bootstrap', 'SQL', 'Photoshop', 'InDesign'];

// made by anthony schuurmans
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
// end of copied code

const experiences = document.querySelectorAll('.life-experiences');
let large = false;

  experiences.forEach(experience => {
    experience.addEventListener('click', () => {
    if(large == false){
      experiences.forEach(experience2 => {
        experience2.style.display = 'none';
      });
      experience.style.display = 'flex';
      experience.querySelectorAll('.experiences').forEach(experience => {
        experience.style.width = '25%';
        experience.style.display = 'flex';
      })
      large = true;
    }else{
      experiences.forEach(experience2 => {
        experience2.style.display = "flex";
        experience2.querySelectorAll('.experiences').forEach(experience => {
          experience.style.width = '100%';
        })
        experience2.querySelectorAll('.hidExperiences').forEach(experience => {
          experience.style.display = 'none';
        })
      })
      large = false;
    }
  })
})