let sendBut = document.querySelector('.send');
let Change = document.querySelector('.Change');


function refresh(){
    window.location.href='Profile'
  }
  


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
                Change.classList.remove('Success');
                Change.classList.remove('hidden');
                Change.classList.add('failed');
                Change.innerHTML=data.message
              
              }else if(data.status===true){
                Change.classList.remove('hidden');
                Change.classList.add('Success');
                Change.innerHTML=data.message
                setTimeout(refresh, 1500);

              }
            
            
      
            }
      
      
          });


    
   
        
    
    

});
