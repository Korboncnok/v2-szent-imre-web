/**
* Template Name: Mentor
* Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
* Updated: Apr 25 2024 with Bootstrap v5.3.3
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

(function() {
  "use strict";

  /**
   * Apply .scrolled class to the body as the page is scrolled down
   */
  function toggleScrolled() {
    const selectBody = document.querySelector('body');
    const selectHeader = document.querySelector('#header');
    if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
    window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
  }

  document.addEventListener('scroll', toggleScrolled);
  window.addEventListener('load', toggleScrolled);

  /**
   * Mobile nav toggle
   */
  const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavToggleBtn.classList.toggle('bi-list');
    mobileNavToggleBtn.classList.toggle('bi-x');
  }
  mobileNavToggleBtn.addEventListener('click', mobileNavToogle);

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll('#navmenu a').forEach(navmenu => {
    navmenu.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
      }
    });

  });

  /**
   * Toggle mobile nav dropdowns
   */
  document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
    navmenu.addEventListener('click', function(e) {
      if (document.querySelector('.mobile-nav-active')) {
        e.preventDefault();
        this.parentNode.classList.toggle('active');
        this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
        e.stopImmediatePropagation();
      }
    });
  });

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
  }

  /**
   * Scroll top button
   */
  let scrollTop = document.querySelector('.scroll-top');

  function toggleScrollTop() {
    if (scrollTop) {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
  }
  scrollTop.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

  window.addEventListener('load', toggleScrollTop);
  document.addEventListener('scroll', toggleScrollTop);

  /**
   * Animation on scroll function and init
   */
  function aosInit() {
    AOS.init({
      duration: 600,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', aosInit);

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Initiate Pure Counter
   */
  new PureCounter();

  /**
   * Init swiper sliders
   */
  function initSwiper() {
    document.querySelectorAll('.swiper').forEach(function(swiper) {
      let config = JSON.parse(swiper.querySelector('.swiper-config').innerHTML.trim());
      new Swiper(swiper, config);
    });
  }
  window.addEventListener('load', initSwiper);

})();

$('#sponsor-carousel').carousel({
  interval: 3000,
  cycle: true
}); 

  /**
   * Infinity logo slider
   */
   
        window.onload = function() {
            var copy = document.querySelector(".logos-slide").cloneNode(true);
            document.querySelector(".logo-slider").appendChild(copy);
        };

// Random címlap kép

document.addEventListener("DOMContentLoaded", function() {
    var imageContainer = document.getElementById("imageContainer");

    // Képek listája
    var images = [
        "https://via.placeholder.com/150/0000FF",
        "https://via.placeholder.com/150/FF0000",
        "https://via.placeholder.com/150/00FF00",
        "https://via.placeholder.com/150/FFFF00"
    ];

    // Véletlenszerű kép kiválasztása
    function getRandomImage() {
        var randomIndex = Math.floor(Math.random() * images.length);
        return images[randomIndex];
    }

    // Kép frissítése
    function updateImage() {
        var imgElement = document.createElement("img");
        imgElement.src = getRandomImage();
        imgElement.alt = "Random Kép";

        // Törli az előző képet (ha van) és hozzáadja az újat
        while (imageContainer.firstChild) {
            imageContainer.removeChild(imageContainer.firstChild);
        }
        imageContainer.appendChild(imgElement);
    }

    // Kép frissítése minden 5 másodpercben
    setInterval(updateImage, 5000);

    // Az első kép betöltése
    updateImage();
});

// Auto zene indítása
document.addEventListener('DOMContentLoaded', (event) => {
  const playDivs = document.querySelectorAll('.playDiv');

  playDivs.forEach(div => {
      const audioSrc = div.getAttribute('data-audio');
      const audio = new Audio(audioSrc);

      div.addEventListener('mouseenter', () => {
          audio.play().catch(error => {
              console.error('Hiba az audio lejátszásakor:', error);
          });
      });

      div.addEventListener('mouseleave', () => {
          audio.pause();
          audio.currentTime = 0;
      });
  });
});