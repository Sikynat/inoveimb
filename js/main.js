//Navigation bar effects on scroll
window.addEventListener("scroll", function(){
    const header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);

})

//Portfolio section - Modal

const portfolioModals = document.querySelectorAll(".portfolio-model")
const imgCards = document.querySelectorAll(".img-card") 
const portfolioCloseBtns = document.querySelectorAll(".portfolio-close-btn")

var portfolioModal = function (modalClick){
    portfolioModals[modalClick].classList.add("active");
}

imgCards.forEach((imgCard, i) => {
    imgCard.addEventListener("click", () => {
        portfolioModal(i);
    });
});

portfolioCloseBtns.forEach((portfolioCloseBtn) => {
    portfolioCloseBtn.addEventListener("click", () => {
        portfolioModals.forEach((portfolioModalView) => {
            portfolioModalView.classList.remove("active")
        })
    })
})





//Our clients - Swiper

//Website dark/light theme

//Scroll to top button

//Navigation menu items active on page scroll

//Responsive navigation menu toggle
const menuBtn = document.querySelector(".nav-menu-btn")
const closeBtn = document.querySelector(".nav-close-btn")
const navigation = document.querySelector(".navigation")
const navItems = document.querySelectorAll(".nav-items a")

menuBtn.addEventListener("click", () => {
    navigation.classList.add("active")
})

closeBtn.addEventListener("click", () => {
    navigation.classList.remove("active")
})

navItems.forEach((navItem) => {
    navItem.addEventListener("click", () => {
        navigation.classList.remove("active")
    })
})

//Scroll reveal animations
//Common reveal options to create reveal animations
ScrollReveal({ 
    reset: true,
    distance: '60px',
    duration: 2500,
    delay: 100
});

//Target elements, and specify options to create reveal animations

ScrollReveal().reveal('.home .info h2, .section-title-01, .section-title-02', { delay: 500, origin: 'left'});
ScrollReveal().reveal('.home .info h3, .home .info p, .about-info .btn', { delay: 500, origin: 'right'});
ScrollReveal().reveal('.home .info .btn, .scroll-down', { delay: 700, origin: 'bottom'});
ScrollReveal().reveal('.media-icons i', { delay: 500, origin: 'left', interval: 200 });
ScrollReveal().reveal('.home-img, .about-img', { delay: 500, origin: 'bottom'});
ScrollReveal().reveal('.about, .description', { delay: 500, origin: 'bottom'});
ScrollReveal().reveal('footer .group, .copy', { delay: 500, origin: 'top', interval: 200});

ScrollReveal().reveal('.portfolio .img-card', { delay: 500, origin: 'bottom'});


