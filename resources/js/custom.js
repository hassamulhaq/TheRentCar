function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

window.scrollToTop = scrollToTop;


function swiperVehicle() {
    const slider = document.querySelector('.vehicle-swiper');
    const columnWrapper = slider.querySelector('.swiper-wrapper');

    const progressCircle = document.querySelector(".autoplay-progress svg");
    const progressContent = document.querySelector(".autoplay-progress span");

    let extraControls = `
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    `;

    slider.innerHTML = `
                        <div class="swiper-container" style="overflow:hidden">
                            ${columnWrapper.outerHTML}
                        </div>
                        ${extraControls}
                    `;

    const swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        loop: true,
        spaceBetween: 15,
        grabCursor: true,
        watchSlidesProgress: true,
        autoplay: {
            delay: 1000
        },
        speed: 600,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 1,
                spaceBetween: 15,
            },
            981: {
                slidesPerView: 1,
                spaceBetween: 15,
            },
        }
    });
}

window.swiperVehicle = swiperVehicle;

