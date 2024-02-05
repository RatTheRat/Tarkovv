<?php 
if(empty($_SESSION['user'])){
    header('Location: /');
    ob_end_flush();
}






?>
<main>
<div class="container">
        <div class="Reset_wrapper">
            <div class="blockreset">
                    <p class=" Change hidden"></p> <!--Success -->
                    <h2>СБРОС ПАРОЛЬ</h2>
                    <p>ВВЕДИТЕ СТАРЫЙ ПАРОЛЬ</p>
                <input class="input oldpass" type="text" >
                
                <p >ВВЕДИТЕ НОВЫЙ ПАРОЛЬ</p>
                <input class="input newpass" type="text" >
               
                <p>ПОВТОРИТЕ ПАРОЛЬ</p>
                <input class="input newpass_repeat" type="text" >
               
                <button class="btn send">ИЗМЕНИТЬ</button>
            </div>
            
        </div>
    </div>

</main>
 


