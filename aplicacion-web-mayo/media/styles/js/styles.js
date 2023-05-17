// Comprueba si se ha establecido la cookie de modo oscuro
const isDarkModeEnabled = () => {
  return document.cookie.split(';').some((item) => item.trim().startsWith('darkMode=1'));
}

// Configura el modo oscuro según la cookie o el estado predeterminado
const setDarkMode = () => {
  const body = document.body;
  const nav = document.querySelector("nav");
  const darkModeBtn = document.getElementById("dark-mode-btn");

  if (isDarkModeEnabled()) {
    body.classList.add("dark-mode");
    nav.classList.add("navbar-dark");
    nav.classList.add("bg-dark");
    darkModeBtn.innerHTML = '<i class="bi bi-sun"></i>';
  } else {
    body.classList.remove("dark-mode");
    nav.classList.remove("navbar-dark");
    nav.classList.remove("bg-dark");
    darkModeBtn.innerHTML = '<i class="bi bi-moon"></i>';
  }
}

document.addEventListener("DOMContentLoaded", () => {
  //------------------------------------------------------------------------------ Añade el evento de clic al botón de modo oscuro
  const darkModeBtn = document.getElementById("dark-mode-btn");
  darkModeBtn.addEventListener("click", () => {
    // Alterna el modo oscuro
    const body = document.body;
    const nav = document.querySelector("nav");
    body.classList.toggle("dark-mode");
    nav.classList.toggle("navbar-dark");
    nav.classList.toggle("bg-dark");

    // Actualiza el estado de la cookie
    if (isDarkModeEnabled()) {
      document.cookie = "darkMode=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
      darkModeBtn.innerHTML = '<i class="bi bi-moon"></i>';
    } else {
      document.cookie = "darkMode=1; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
      darkModeBtn.innerHTML = '<i class="bi bi-sun"></i>';
    }
  });

  // Configura el modo oscuro según la cookie o el estado predeterminado
  setDarkMode();

  // Configura el modo oscuro según la cookie o el estado predeterminado
  setDarkMode();

  /// --------------------------------------------------------------------------------- código para el botón de scroll
  const scrollBtn = document.createElement('button');
  scrollBtn.id = 'scroll-to-top';
  scrollBtn.innerHTML = '<i class="bi bi-arrow-up"></i>';
  document.body.appendChild(scrollBtn);

  window.addEventListener('scroll', () => {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      scrollBtn.style.display = "block";
    } else {
      scrollBtn.style.display = "none";
    }
  });

  scrollBtn.addEventListener('click', () => {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  });
});


