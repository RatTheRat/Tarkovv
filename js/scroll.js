let news=document.querySelector('.headerinks a[href*="#new"]')
let UP=document.querySelector('.ArrowUP')
let header=document.querySelector('.wrapper')

function funcScroll(event){
        event.preventDefault();
       
        let id=this.getAttribute('href')
        // console.log(id);
        // this.style.color='red';

        document.querySelector(id).scrollIntoView({
            behavior: 'smooth', block:'start'
        });

}
news.addEventListener('click', funcScroll)
// UP.addEventListener('click', funcScroll)
function disableScroll(){
    document.body.style.overflow = 'hidden';
}
function EnableScroll(){
    document.body.style.overflow = 'visible';
}

function ScrollUP(){
    header.scrollIntoView({
        
        behavior: 'smooth', block:'start'
    });
    
}



UP.addEventListener('click',(event)=> { 
    document.body.style.overflow = 'hidden';
    setTimeout(ScrollUP, 100);
   
    setTimeout(EnableScroll, 1000);
});
// news.addEventListener('click', (event) => {
//     event.preventDefault();
//     //let id=this //.getAttribute('href')
//     //console.log(this);
//     this.style.color='red';
// })



// window.addEventListener('scroll', () => {
//     let scroll = window.scrollY;
//     //console.log(scroll);
// })