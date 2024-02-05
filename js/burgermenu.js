let openburger = document.querySelector('.burger');
let menu = document.querySelector('.burger_menu');

openburger.addEventListener('click',(event)=> {
    //openburger.style.display='none';
    event.preventDefault;
    openburger.classList.toggle('is_open');
    menu.classList.toggle('openburger');
    window.addEventListener('scroll', () => {
        let scroll = window.scrollY;
        //console.log(scroll);
    })
});



