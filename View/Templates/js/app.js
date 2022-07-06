
const button = document.getElementById("burger")
const menu = document.getElementById('menu')
const logo = document.getElementById('logo-x')

button.addEventListener('click', function(){
    menu.classList.toggle('show');
    logo.classList.toggle('show');
});


let btn = document.getElementById('scroll')

window.onscroll = function() {
    scrollFunction();
}

function scrollFunction() {
    if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5 ){
        btn.style.display = "block";
    } else{
        btn.style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}



