// Hero animation
window.addEventListener('load', function() {
    heroAnimation.play()
})
const heroAnimation = gsap.timeline( {defaults: {duration: .5, opacity: 0}, delay: .4, paused: true } );
heroAnimation.from('.hero-title', {y: -50})
             .from('.hero-paragraf', {y: -30})
             .from('.hero .btn-primary-custom', {y: -30})
             .from('.hero img', {x: 150, duration: .8});

// download section animation
gsap.to(".img-scroll-1", {
    y: -400,
    scrollTrigger: {
        start: 'top bottom',
        trigger: '.download',
        scrub: true
    },
});

gsap.to(".img-scroll-2", {
    y: 400,
    scrollTrigger: {
        start: 'top bottom',
        trigger: '.download',
        scrub: true
    },
});

gsap.to(".img-scroll-hr", {
    x: -500,
    scrollTrigger: {
        start: 'top center',
        trigger: '.download',
        scrub: true
    },
})

// navbar animation
const navbar = document.querySelector('.navbar');
const navToggler = document.querySelector('.navbar-toggler');

navToggler.addEventListener('click', ()=> {
    navToggler.classList.toggle('active')
})
