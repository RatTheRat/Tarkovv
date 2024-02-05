let emailchange = document.querySelector('.email_change');
let loginchange = document.querySelector('.login_change');
let pass_change = document.querySelector('.pass_change');
let blackfon = document.querySelector('.blackfon');
let form = document.querySelector('.formsetting');
let closemodal = document.querySelector('.closemodal');
let titileblock = document.querySelector('.titile');
let changeblock = document.querySelector('.changeblock');
let otvet = document.querySelector('.otvet');


let buttons = document.querySelectorAll('.UserButton a');





function animation(){
    form.style.transition='all cubic-bezier(0,-1.64, 0.84,-0.1) 1s'
    form.style.overflow='visible'
    form.style.opacity='1'
    blackfon.style.transition='all cubic-bezier(0,-1.64, 0.84,-0.1) 1s'
    blackfon.style.display='flex'
    document.body.style.overflow = 'hidden';
}

function refresh(){
    window.location.href='Profile'
}
  
buttons.forEach(element => {
  
  element.addEventListener('click',(event)=> {
    event.preventDefault();

    if(event.target.attributes[1].value == 'changeLogin'){
      titileblock.style.display='flex';
      changeblock.style.display='flex';
      titileblock.innerHTML='<h1>СМЕНА ЛОГИНА</h1>'
      changeblock.innerHTML='<p>ЛОГИН</p><input type="text" class="AuthEmail Newlogin"> <button class="Authsumb send" value="">ИЗМЕНИТЬ</button>'
      form.style.display='flex'
      setTimeout(animation, 10);
      
    
      let sendBut = document.querySelector('.send');
      sendBut.addEventListener('click',(event)=> {
          event.preventDefault();
          console.log('gf')
        });

  }else if(event.target.innerHTML == 'СМЕНИТЬ ПОЧТУ'){
      //console.log('ПОЧТA');
  }else if(event.target.attributes[1].value == 'changePass'){
      titileblock.style.display='flex';
      changeblock.style.display='flex';
      titileblock.innerHTML='<h1>СМЕНА ПАРОЛЯ</h1>'

      titileblock.innerHTML='<h1>СМЕНА ПАРОЛЯ</h1>'
      changeblock.innerHTML='<p>СТАРЫЙ ПАРОЛЬ</p><input type="text" class="AuthEmail oldpass"></input> <p>НОВЫЙ ПАРОЛЬ</p> <input type="text" class="AuthEmail newpass"></input> <p>ПОВТОРИТЕ ПАРОЛЬ</p> <input type="text" class="AuthEmail newpass_repeat"></input> <button class="Authsumb send" value="">ИЗМЕНИТЬ</button>'
      form.style.display='flex'
      setTimeout(animation, 10);
      

      let sendBut = document.querySelector('.send');
      sendBut.addEventListener('click',(event)=> {
          event.preventDefault();
          let oldpass = document.querySelector('.oldpass').value;
          let newpass = document.querySelector('.newpass').value;
          let newpass_repeat = document.querySelector('.newpass_repeat').value;
        
          
              $.ajax({
                  url: "queryres",
                  type: "POST",
                  dataType: 'json',
                    data:{
                      oldPass:oldpass,
                      newpass:newpass,
                      newpass_repeat:newpass_repeat,
                    },
                    success: function (data) {
                      
                    if(data.status===false){
                      otvet.classList.remove('Success');
                      otvet.classList.remove('hidden');
                      otvet.classList.add('failed');
                      otvet.innerHTML=data.message
                    
                    }else if(data.status===true){
                      otvet.classList.remove('hidden');
                      otvet.classList.add('Success');
                      otvet.innerHTML=data.message
                      setTimeout(refresh, 1500);
      
                    }
                  
                  
            
                  }
            
            
                });





        });

  }


  });


});



closemodal.addEventListener('click',(event)=> {
    event.preventDefault();
    form.style.transition='all 1s ease'
    form.style.overflow='hidden'
    form.style.opacity='0'
    document.body.style.overflow = 'visible';
    otvet.innerHTML=''
    otvet.classList.remove('failed');
    otvet.classList.remove('Success');
    blackfon.style.display='none';
    titileblock.style.display='none';
    changeblock.style.display='none';
    let AuthEmail = document.querySelector('.AuthEmail');
    AuthEmail.style.display='none';
});
   