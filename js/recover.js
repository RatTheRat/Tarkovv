let recoverpass =document.querySelector('.Authrecover');
let remember =document.querySelector('.remember');
let passP =document.querySelector('.Ppas');
let titileAuth =document.querySelector('.titileAuth h1');



function none(){
    password.style.display='none'
    remember.style.display='none'
    passP.style.display='none'
    Sendbutton.style.display='none'
   
}
function visible(){
  password.style.display='flex'
  remember.style.display='flex'
  passP.style.display='flex'
  Sendbutton.style.display='flex'
  Sendbutton.style.justifyContent='center'
  password.style.overflow='visible'
  password.style.opacity='1'
  remember.style.overflow='visible'
  remember.style.opacity='1'
  passP.style.overflow='visible'
  passP.style.opacity='1'
  Sendbutton.style.overflow='visible'
  Sendbutton.style.opacity='0.4'
  titileAuth.innerHTML='АВТОРИЗАЦИЯ';
  recoverpass.innerHTML='Забыли пароль?'
}

recoverpass.addEventListener('click',(event)=> {
    event.preventDefault();
    password.style.overflow='hidden'
    password.style.opacity='0'
    remember.style.overflow='hidden'
    remember.style.opacity='0'
    passP.style.overflow='hidden'
    passP.style.opacity='0'
    Sendbutton.style.overflow='hidden'
    Sendbutton.style.opacity='0'
    //Sendbutton.classList.remove('Authsumb');
    titileAuth.innerHTML='СМЕНИТЬ ПАРОЛЬ';
    recoverpass.innerHTML='ОТПРАВИТЬ'
    setTimeout(none, 1000);
    recoverpass.classList.add('sendrecover');
    
    
    $.ajax({
        url: "reg",
        type: "POST",
        dataType: 'text',
          data:{
            Email:str,
          },
          success: function (data) {
          console.log(data);
  
          
  
        }
  
  
      });

});


closemodalAuth.addEventListener('click',(event)=> { 
  recoverpass.classList.remove('sendrecover');
  event.preventDefault();
  visible();
});

