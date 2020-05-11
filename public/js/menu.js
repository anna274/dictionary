const menu = document.querySelector('.dropdown');
menu.addEventListener('click', (event) => {
    console.log(event.target);
    if(event.targer.closest('a')){
        document.querySelectorAll('.menu-item').forEach((item) => item.classList.remove('active'));
        event.target.closest('.menu-item').classList.add('active');
    }
});