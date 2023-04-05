document.addEventListener('DOMContentLoaded', function () {
  //Slider section 'rooms'
  new Swiper(".swiper-rooms", {
    slidesPerView: 'auto',
    centeredSlides: true,
    grabCursor: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      type: 'progressbar',
    },
    breakpoints: {
      768: {
        spaceBetween: 24,
        pagination: {
          el: ".swiper-pagination",
          type: 'fraction',
        },
      }
    }
  })
  //Slider section 'restaurants-and-bars'
  new Swiper(".swiper-restaurants", {
    loop: true,
    slidesPerView: 'auto',
    spaceBetween: 24,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    scrollbar: {
      el: '.swiper-scrollbar',
      draggable: true,
    }
  })
  //Slider section 'comments'
  new Swiper('.swiper-comments', {
    scrollbar: {
      el: '.swiper-scrollbar',
      draggable: true,
      grabCursor: true,
    }
  })

});