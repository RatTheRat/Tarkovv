let regbtn = document.querySelector('.Register');
let loginreg = document.querySelector('.loginregist');
let emailreg = document.querySelector('.emailregist');
let passwordregist = document.querySelector('.passwordregist');
let passwordrepeat = document.querySelector('.passwordrepeat');
let accept = document.querySelector('.accept');


let login=''
let emailvalue=''
let passvalue=''
let passRepeatvalue=''


let loginbool= false;
let EMbool= false;
let passbool= false;
let passrepbool= false;


loginreg.addEventListener('blur',(event)=> {
    login=event.target.value;
    

    if(login.length >3){
      document.querySelector('.invlogin').classList.add('hidden');
      loginbool=true;
      if(loginbool==true && EMbool==true && passbool==true && passrepbool==true){
        regbtn.removeAttribute("disabled");
        regbtn.style.opacity='1';
      }else{
        regbtn.setAttribute("disabled", "true");
        regbtn.style.opacity='0.4';
      }
      
    }else{
      document.querySelector('.invlogin').classList.remove('hidden');
      loginbool=false;
    }


});


emailreg.addEventListener('blur',(event)=> {
  str ='';
  emailvalue=event.target.value;

    if(emailvalue.length >3 ){ //&& value.length <32
    let massiveRight=[];
    let massiveLeft=[];
    let tochka=false;
    let allright=true;
    
    for (let index in emailvalue){
      if(emailvalue[index] !='@'){
        massiveLeft.push(emailvalue[index])
      }else{
          for (let i=Number(index)+1; i<emailvalue.length; i++){
            massiveRight.push(emailvalue[i]);
          }
          
          break;
          
      }
     

    }
      if(massiveLeft.length<1 && massiveLeft.length>32){
        allright=false;
        
      }
      if(massiveRight.length<3){
        allright=false;
        
      }
    for(let i=0; i<massiveLeft.length;i++){
     
      if( (massiveLeft[i].charCodeAt() >47 && massiveLeft[i].charCodeAt() <58)  
          (massiveLeft[i].charCodeAt() >64 && massiveLeft[i].charCodeAt() <91)     
          (massiveLeft[i].charCodeAt() >96 && massiveLeft[i].charCodeAt() <123) 
          (massiveLeft[i].charCodeAt() ==46)
          (massiveLeft[i].charCodeAt() ==95)
          (massiveLeft[i].charCodeAt() ==150) ){
            
            document.querySelector('.invemail').classList.add('hidden')
            
      }else{
        
        allright=false;
        break
        
      }
    }
  
    for(let i=0; i<massiveRight.length;i++){
      
      if( (massiveRight[i].charCodeAt() >47 && massiveRight[i].charCodeAt() <58)  
          (massiveRight[i].charCodeAt() >64 && massiveRight[i].charCodeAt() <91)     
          (massiveRight[i].charCodeAt() >96 && massiveRight[i].charCodeAt() <123)||
          (massiveRight[i].charCodeAt() ==46 )){
            if(massiveRight[i].charCodeAt() !=46){
              document.querySelector('.invemail').classList.add('hidden')
              
              
            }else{
              if(tochka==false){
                document.querySelector('.invemail').classList.add('hidden')
                tochka=true;
              }else{
                
                allright=false;
                break
                
              }
            }
              
      }else{
        
        allright=false;
        break;
  
      }

    }

    if(allright==true){
      EMbool=true;
      massiveLeft.push('@');
      let emailvalue = massiveLeft.concat(massiveRight);
      emailvalue.forEach(element => {
        str+=String(element);

      });
      
     
  
    console.log('работает')
    }else{
      // regbtn.setAttribute("disabled", "true");
      // regbtn.style.opacity='0.4';
      document.querySelector('.invemail').classList.remove('hidden')
      EMbool=false
    }
    
    
  }else{
    // regbtn.style.opacity='0.4';
    document.querySelector('.invemail').classList.remove('hidden')
  }

 




});


passwordregist.addEventListener('blur',(event)=> {
  passvalue=event.target.value;


if(passvalue.length>6 && passvalue.length<15){
   
    document.querySelector('.invPass').classList.add('hidden')
    passbool=true
   
  

  }else{
    
    document.querySelector('.invPass').classList.remove('hidden')
    passbool=false
  }



});





passwordrepeat.addEventListener('blur',(event)=> {
  console.log(passvalue)
  passRepeatvalue=event.target.value;
  if(passRepeatvalue == passvalue){
    document.querySelector('.invPassRepeat').classList.add('hidden')
    passrepbool=true
    
    
    
  }else{
    document.querySelector('.invPassRepeat').classList.remove('hidden')
    passrepbool=false
  }
});

accept.addEventListener('click',(event)=> {
  if(event.target.checked == true){
    regbtn.removeAttribute("disabled");
    regbtn.style.opacity='1';
  }else{
    regbtn.setAttribute("disabled", "true");
    regbtn.style.opacity='0.4';
  }
});


regbtn.addEventListener('click',(event)=> {
  event.preventDefault();



  $.ajax({
    url: "reg",
    type: "POST",
    dataType: 'json',
      data:{
        login:login,
        Email:emailvalue,
        Pass:passvalue,
        PasswordRep:passRepeatvalue,
        accept:accept.checked
      },
      success: function (data) {
        if(data.status===false){
          document.querySelector('.UserInvalid').classList.remove('success');
          document.querySelector('.UserInvalid').innerHTML=data.message;
          document.querySelector('.UserInvalid').classList.add('failed');
        }else{
          document.querySelector('.UserInvalid').classList.remove('failed');
          document.querySelector('.UserInvalid').innerHTML=data.message;
          document.querySelector('.UserInvalid').classList.add('Success');
          setTimeout(refresh, 2500);
        }
        
       console.log(data)

    }


  });


});