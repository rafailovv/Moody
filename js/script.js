// Slider
const swiper = new Swiper('.swiper-container', {
    direction: 'horizontal',
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

// Redirect on catalog
const lookButton = document.querySelector('.look-button');
lookButton.addEventListener('click', () => { window.location.replace("/catalog.php"); });