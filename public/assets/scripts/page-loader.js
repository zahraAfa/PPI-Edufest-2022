// Page Loader
const preloader = document.querySelector('.page-loader');

const fadeEffect = setInterval(() => {
    if (!preloader.style.opacity) {
      preloader.style.opacity = 1;
    }
    if (preloader.style.opacity > 0) {
      preloader.style.opacity -= 0.1;
      if (preloader.style.opacity < 0){
        preloader.style.display="none";
      }
    } else {
      clearInterval(fadeEffect);
      preloader.style.display="none";
    }
  }, 100);
window.addEventListener('load', fadeEffect);
