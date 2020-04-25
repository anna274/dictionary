const menuIcon = document.querySelector('.hamburger');
const menu = document.querySelector('.menu');
menuIcon.addEventListener('click', function(){
    menu.classList.toggle('change');
})