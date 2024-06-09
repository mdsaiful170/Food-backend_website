let proFile = document.querySelector('.profile');
document.querySelector('#user-btn').onclick = () => {
    proFile.classList.add('active');
    navList.classList.remove('active');

}



function loader() {
    document.querySelector('.loader').style.display = 'none';
}

function fadeOut() {
    setInterval(loader, 1000);
}

window.onscroll = () => {
    navList.classList.remove('active');
    proFile.classList.remove('active');

}

window.onload = fadeOut;


let barBtn = document.querySelector('#bar-btn');
let navList = document.querySelector('.navlist');

barBtn.addEventListener('click', () => {
    navList.classList.toggle('active');
    proFile.classList.remove('active');

});


var swiper = new Swiper(".review-slider", {
    loop: true,
    grabCursor: true,
    spaceBetween: 20,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        550: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    },
});



var swiper = new Swiper(".home-slider", {
    loop: true,
    grabCursor: true,
    effect: "flip",
    autoplay: {
        delay: 3000,
        disableOninteraction: false
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});



$(document).ready(function () {
    $('.gallery-owl').owlCarousel({
        loop: true,
        margin: 20,
        
        grabCursor: true,
        center:true,
        autoplay: {
            delay: 3000,
            disableOninteraction: false
        },
        responsive: {
            0: {
                items: 1,
                nav: true,
            },
            768: {
                items: 2,
                nav: false,
            },
            991: {
                items: 2,
                nav: false,
            },
            1000: {
                items: 3,
                nav: true,
                loop: true,
            }
        }
    })
});
$(document).ready(function () {
    $('.navtab-owl').owlCarousel({
        loop: true,
        margin: 10,
        center:true,
        autoplay: {
            delay: 3000,
            disableOninteraction: false
        },
        responsive: {
            0: {
                items: 3,
                nav: true,
            },
            768: {
                items: 3,
                nav: false,
            },
            991: {
                items: 4,
                nav: false,
            },
            1000: {
                items: 5,
                nav: true,
                loop: true,
            }
        }
    })
});   
$(document).ready(function () {
    $('.steps-owl').owlCarousel({
        loop: true,
        margin: 20,
        responsiveClass: true,
        grabCursor: true,
        center:true,
        navText:["<i class='fas fa-arrow-left'></i>", "<i class='fas fa-arrow-right'></i>"],
        autoplay: {
            delay: 3000,
            disableOninteraction: false
        },
        responsive: {
            0: {
                items: 1,
                nav: true,
            },
            768: {
                items: 2,
                nav: false,
            },
            991: {
                items: 2,
                nav: false,
            },
            1000: {
                items: 4,
                nav: true,
                loop: true,
            }
        }
    })
});   