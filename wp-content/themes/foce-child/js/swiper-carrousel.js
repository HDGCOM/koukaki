  var swiper = new Swiper(".swiper-container", {
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
  });
