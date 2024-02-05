let AuthBtn = document.querySelectorAll('.auth');
let RegBtn = document.querySelectorAll('.reg');
let blackfon = document.querySelector('.blackfon');
let formAuth = document.querySelector('.formAuth');
let closemodalAuth = document.querySelector('.closemodal');
let closemodalReg= document.querySelector('.closemodalReg');
let blcok1= document.querySelector('.fon');
let blockreg =document.querySelector('.blockReg');
let setblock =document.querySelector('.formsetting');



//функция закрытия
function closemodal(){
  setblock.style.display='none';
  blcok1.style.display='none';
  blackfon.style.display='none';
  document.body.style.overflow = 'visible';
  blockreg.style.display='none';
  invaliduser.classList.remove('failed');
  invaliduser.innerHTML='';
}
function auth(){
  blackfon.style.display='flex';
  let positionUser= window.pageYOffset;
  document.body.style.overflow = 'hidden';

  formAuth.style.display='flex';
  //block.style.marginTop=positionUser+100+'px'
  setblock.style.display='flex';
  
}

function reg(){
  blackfon.style.display='flex';
  document.body.style.overflow = 'hidden';
  blockreg.style.display='flex';
}
//открытие окна входа/регистрации
AuthBtn.forEach(element => {
  element.addEventListener('click',auth);
});

RegBtn.forEach(element => {
  element.addEventListener('click',reg);
});



//закрытие окна входа/регистрации
closemodalAuth.addEventListener('click',closemodal)
closemodalReg.addEventListener('click',closemodal);


let CloseMessage= document.querySelector('.closeMessage');
let MessageBlock= document.querySelector('.Message');

CloseMessage.addEventListener('click',(event)=> {
  MessageBlock.classList.add('hidden');
});

//смена пароля

