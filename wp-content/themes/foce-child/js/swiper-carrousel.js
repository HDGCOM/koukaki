  /*var swiper = new Swiper(".swiper-container", {
    effect: "coverflow",
    loop:true,
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "3", 
    spaceBetween: 30,
    initialSlide: 0,   
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
  });*/

 
  var swiper;

  function initSwiper() {
    if (window.innerWidth < 700) { 
      swiper = new Swiper(".swiper-container", {
        effect: "coverflow",
        loop: true,
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 1, // Afficher une seule image à la fois en version mobile
        spaceBetween: 30,
        initialSlide: 0,
        coverflowEffect: {
          rotate: 0,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: true,
        },
      });
    } else {
      swiper = new Swiper(".swiper-container", {
        effect: "coverflow",
        loop: true,
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 3, // Afficher 3 images à la fois sur les écrans non mobiles
        spaceBetween: 30,
        initialSlide: 0,
        coverflowEffect: {
          rotate: 0,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: true,
        },
      });
    }
  }
  
  // Initialisation du swiper lors du chargement de la page
  initSwiper();
  
  // Mettre à jour le swiper lors du redimensionnement de la fenêtre
  window.addEventListener("resize", function () {
    swiper.destroy(true, true); // Détruit le swiper actuel
    initSwiper(); // Initialise le swiper en fonction de la nouvelle largeur d'écran
  });
  

