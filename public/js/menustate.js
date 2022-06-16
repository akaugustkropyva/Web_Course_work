document.querySelector('.menu-icon').addEventListener('click', function(){
    document.querySelector('.menu-icon').classList.toggle('active');
    document.querySelector('.menu').classList.toggle('active');
    document.querySelector('body').classList.toggle('lock');
})

