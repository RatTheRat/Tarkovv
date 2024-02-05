let buy = document.querySelector('.buyitem');

function refresh(){
  window.location.href='Profile'
}



buy.addEventListener('click',(event)=> {
    event.preventDefault();
    ctg=buy.getAttribute("data-selected");
   
      $.ajax({
        url: "buy",
        type: "POST",
        dataType: 'json',
          data:{
            ctg:ctg
          },
          success: function (data) {
         
            if(data.status===true){
              let blackfon=document.querySelector('.blackfon');
              blackfon.style.display='flex';
              let messageblock = document.querySelector('.Message');
              let messageh3 = document.querySelector('.Message p');
              messageblock.classList.remove('hidden')
              messageh3.classList.add('Success')
                messageh3.innerHTML=data.message;
                setTimeout(refresh, 500);
                
            }else{

              let messageblock = document.querySelector('.Message');
              let messageh3 = document.querySelector('.Message p');
              messageblock.classList.remove('hidden')
              messageh3.classList.add('failed')
                messageh3.innerHTML=data.message;
                setTimeout(document.location.reload(), 100);

            }
          
  
        }
  
  
      });


});
