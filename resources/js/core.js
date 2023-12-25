$(document).ready(function() {

  $('.mob-nav__link').on('click', function () {
    $('.mob-nav__drop').toggleClass('active')
  })
  $(' .adm-mask .close').on('click', function () {
    $(this).closest('.mob-nav__drop').removeClass('active')
  })
  $('.drop-mob-lang__link').on('click', function () {
    $('.drop-mob-lang__list').toggleClass('active')
  })

// Swiper: Slider
  new Swiper('.swiper', {
    loop: true,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    slidesPerView: 3,
    paginationClickable: true,
    spaceBetween: 20,
    breakpoints: {
      1920: {
        slidesPerView: 3,
        spaceBetween: 30
      },
      1028: {
        slidesPerView: 2,
        spaceBetween: 30
      },
      480: {
        slidesPerView: 1,
        spaceBetween: 10
      }
    }
  });
});

let countDown = new Date("dec 1 2023 23:59").getTime();

let counter = setInterval(() => {
  let dateNow = new Date().getTime();
  //date defferente
  let dateDeff = countDown - dateNow;

  //days
  let days = Math.floor(dateDeff / (1000 * 60 * 60 * 24));

  //hours
  let hours = Math.floor((dateDeff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));

  //minute
  let minutes = Math.floor((dateDeff % (1000 * 60 * 60)) / (1000 * 60));

  //seconds
  let seconds = Math.floor((dateDeff % (1000 * 60)) / 1000);


  days < 10 ? document.querySelector(".days").innerHTML = `0${days}` : document.querySelector(".days").innerHTML = days;;
  hours < 10 ? document.querySelector(".hours").innerHTML = `0${hours}` : document.querySelector(".hours").innerHTML = hours;;
  minutes < 10 ? document.querySelector(".minutes").innerHTML = `0${minutes}` : document.querySelector(".minutes").innerHTML = minutes;;
  seconds < 10 ? document.querySelector(".seconds").innerHTML = `0${seconds}` : document.querySelector(".seconds").innerHTML = seconds;;


  if (dateDeff  <= 1000) {
    clearInterval(counter);
  }
}, 1000);
