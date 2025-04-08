var swiper = new Swiper(".ourServiceSlider", {
    slidesPerView: 1.5,
    spaceBetween: 30,
    // loop: true,
    // autoplay: {
    //   delay: 4000,
    // },
    breakpoints: {
      // when window width is >= 320px
   
      // when window width is >= 480px
      768: {
          slidesPerView: 3.5,
      },
      // when window width is >= 640px
      991: {
          slidesPerView: 4.5,
      }
  }
  });


  var swiper = new Swiper(".swiperAbout", {
    slidesPerView: 1,
    spaceBetween: 30,
    centeredSlides: true,
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints: {
      991: {
          slidesPerView: 2.1,
      }
    }
  });

  lightGallery(document.getElementById('light-gallery-show'));


  lightGallery(document.getElementById('gallery-mixed-content-demo'));
  lightGallery(document.getElementById('gallery-mixed-content-demo-2'));


  document.addEventListener('DOMContentLoaded', function () {
    const counters = document.querySelectorAll('.advantages_number');
    let hasAnimated = false;

    function animateCounters() {
        if (hasAnimated) return; // Профилактика повторного вызова

        counters.forEach(counter => {
            const target = +counter.innerText.replace(/\s/g, '').replace('+', ''); // Получаем целевое число, убирая пробелы и знак +

            let current = 0;
            const increment = Math.ceil(target / 100); // Задаём шаг инкремента (зависит от желаемой скорости)

            const interval = setInterval(() => {
                if (current < target) {
                    current += increment;
                    counter.innerText = current.toLocaleString() + '+'; // Форматируем число и добавляем '+'
                } else {
                    counter.innerText = target.toLocaleString() + '+'; // Устанавливаем финальное значение
                    clearInterval(interval); // Останавливаем таймер
                }
            }, 30); // Интервал обновления (в миллисекундах)
        });

        hasAnimated = true; // Устанавливаем флаг, что анимация уже была выполнена
    }

    // Проверяем прокрутку
    function onScroll() {
        const section = document.getElementById('advantagesCount');
        const sectionTop = section.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;

        if (sectionTop <= windowHeight) {
            animateCounters();
            window.removeEventListener('scroll', onScroll); // Удаляем слушатель после анимации
        }
    }

    window.addEventListener('scroll', onScroll);
});