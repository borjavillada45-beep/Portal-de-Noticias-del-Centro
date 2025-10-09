// Cambiar color del navbar al hacer scroll
const navbar = document.getElementById('navbar');

window.addEventListener('scroll', () => {
  if (window.scrollY > 50) {
    navbar.classList.add('scrolled');
  } else {
    navbar.classList.remove('scrolled');
  }
});

//Para el nuevo calendario
flatpickr("#fecha", {
  dateFormat: "Y-m-d",
  //Elegir idioma
  locale: "es"
});