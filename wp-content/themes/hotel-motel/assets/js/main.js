document.addEventListener('DOMContentLoaded', function () {
console.log('gth')
  //Changing the 'header' when scrolling
  const header = document.getElementsByTagName('header')[0];
  window.addEventListener("scroll", function () {
    const windowScrollTop = window.pageYOffset;
    if (windowScrollTop > 0) {
      header.classList.add('header-scroll');
    } else {
      header.classList.remove('header-scroll');
    }
  })
  //Slider section 'model-1-swiper'
  new Swiper('.swiper-model-1', {
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    spaceBetween: 20,
    pagination: {
      el: ".swiper-pagination",
      type: 'fraction',
    }
  })
  //Slider section 'socials'
  new Swiper('.swiper-socials', {
    slidesPerView: 'auto',
    spaceBetween: 22,
    grabCursor: true,
  })
  //Opening the selector ''selected
  let filter = document.getElementsByClassName('selected');
  for (let i = 0; i < filter.length; i++) {
    filter[i].addEventListener('click', function () {
      filter[i].classList.toggle('selected-active');
    })
  }
  //Activation of the selected selection from the selector 'selected'
  let linkItem = document.getElementsByClassName('link-item');
  let filterSearch = document.getElementsByClassName('selected-search');
  for (let k = 0; k < filterSearch.length; k++) {
    for (let i = 0; i < linkItem.length; i++) {
      linkItem[i].addEventListener('click', function () {
        filterSearch[k].textContent = linkItem[i].innerHTML;
      })
    }
  }
  //Slider section 'swiper-big'
  new Swiper('.swiper-big', {
    slidesPerView: 'auto',
    centeredSlides: true,
    grabCursor: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    spaceBetween: 15,
    scrollbar: {
      el: '.swiper-scrollbar',
      draggable: true,
      grabCursor: true,
    },
    breakpoints: {
      1024: {
        spaceBetween: 115,
      },
    },
  })
  //Slider section 'swiper-small'
  new Swiper(".swiper-small", {
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

});