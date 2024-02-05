let Sendsup = document.querySelector('.support_send');
let textsup = document.querySelector('.search');
let msg = document.querySelector('.message');



Sendsup.addEventListener('click',(event)=> {
    event.preventDefault();
    value=textsup.value;
    

    $.ajax({
      url: "supportQuery",
      type: "POST",
      dataType: 'json',
        data:{
          Suptext:value,
        },
        success: function (data) {
     
        if(data.status===false){
          msg.classList.remove('Success');
          msg.classList.add('failed');
          msg.innerHTML=data.message
        
        }else if(data.status===true){
          msg.classList.remove('failed');
          msg.classList.add('Success');
          msg.innerHTML=data.message

        }
      
      

      }


    });


});
