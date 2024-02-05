let Sendbutton = document.querySelector('.Authsumb');
let email = document.querySelector('.emailLogin');
let password = document.querySelector('.passwordd');
let invalidemail = document.querySelector('.incEmail');

let value;
let emailbool = false;
let passwordbool = false;

let str ='';

Sendbutton.addEventListener('click',(event)=> {
  event.preventDefault();
});
email.addEventListener('blur',(event)=> {
  str ='';
  value=event.target.value;
  if(value.length >3 ){ //&& value.length <32
    let massiveRight=[];
    let massiveLeft=[];
    let tochka=false;
    let allright=true;
    
    for (let index in value){
      if(value[index] !='@'){
        massiveLeft.push(value[index])
      }else{
          for (let i=Number(index)+1; i<value.length; i++){
            massiveRight.push(value[i]);
          }
          
          break;
          
      }
     

    }
      if(massiveLeft.length<1 || massiveLeft.length>32){
        allright=false;
        
      }
      if(massiveRight.length<3){
        allright=false;
        
      }
    for(let i=0; i<massiveLeft.length;i++){
     
      if( (massiveLeft[i].charCodeAt() >47 && massiveLeft[i].charCodeAt() <58) || 
          (massiveLeft[i].charCodeAt() >64 && massiveLeft[i].charCodeAt() <91) ||    
          (massiveLeft[i].charCodeAt() >96 && massiveLeft[i].charCodeAt() <123)|| 
          (massiveLeft[i].charCodeAt() ==46)||
          (massiveLeft[i].charCodeAt() ==95)||
          (massiveLeft[i].charCodeAt() ==150) ){
            
            invalidemail.classList.add('hidden')
            
      }else{
        
        allright=false;
        break
        
      }
    }
  
    for(let i=0; i<massiveRight.length;i++){
      
      if( (massiveRight[i].charCodeAt() >47 && massiveRight[i].charCodeAt() <58) || 
          (massiveRight[i].charCodeAt() >64 && massiveRight[i].charCodeAt() <91) ||    
          (massiveRight[i].charCodeAt() >96 && massiveRight[i].charCodeAt() <123)||
          (massiveRight[i].charCodeAt() ==46 )){
            if(massiveRight[i].charCodeAt() !=46){
              invalidemail.classList.add('hidden')
              
              
            }else{
              if(tochka==false){
                invalidemail.classList.add('hidden')
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
   
  
    //console.log(massiveLeft)
    //console.log(massiveRight)
    if(allright==true){
      massiveLeft.push('@');
      let emailvalue = massiveLeft.concat(massiveRight);
      emailvalue.forEach(element => {
        str+=String(element);
      });
      
     
     Sendbutton.removeAttribute("disabled");
     Sendbutton.style.opacity='1';
    console.log('работает')
    }else{
      Sendbutton.setAttribute("disabled", "true");
      Sendbutton.style.opacity='0.4';
      invalidemail.classList.remove('hidden')
    }
    

 



    
  }else{
    Sendbutton.style.opacity='0.4';
    invalidemail.classList.remove('hidden')
  }

  

});

let invaliduser = document.querySelector('.invaliduser');
function refresh(){
  window.location.href='Profile'
}


password.addEventListener('blur',(event)=> {
  value=event.target.value;
  if(value <6){
    passwordbool=true;
  }
});

Sendbutton.addEventListener('click', function(event) {

    $.ajax({
      url: "Auth",
      type: "POST",
      dataType: 'json',
        data:{
          Email:str,
          Password:password.value
        },
        success: function (data) {
        
          if(data.status === true){
            invaliduser.classList.add('Success')
            invaliduser.innerHTML=data.message;
            setTimeout(refresh, 1500);
           
            
          }else{
            invaliduser.classList.add('failed')
            invaliduser.innerHTML=data.message;
          }

      }


    });
   password.value='';
   email.value='';
});

  





