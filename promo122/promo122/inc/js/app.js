const burgerMenu = document.getElementById('burger-menu');
const nav = document.getElementById('menu');

burgerMenu.addEventListener('click', function(e){
    e.preventDefault();
    nav.classList.toggle('show');
    burgerMenu.classList.toggle('open');
});