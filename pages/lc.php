<?php 
include 'settings/set.php';
if(empty($_SESSION['user'])){
    header('Location: /');
    ob_end_flush();
}

$idUser=$_SESSION['user']['id'];
$userlogin=userlogin($idUser); //ник юзера
$userinfo=Profile($idUser); //данные об покупки
$history=history($idUser);



?>
<main>
    <div class="container">
        
  
                        <form class="formsetting">
                            <div class="otvet"></div>
                            <span class="invaliduser "></span>
                            <div class="closemodal"></div>
                            <div class="titile">

                               
                                
                               
                            </div>
                            
                        
                            <div class="changeblock">
                            <input class="AuthEmail" type="email" name="EMAIL">
                            <input class="Authsumb " type="submit" disabled="disabled" value="ИЗМЕНИТЬ"></input>
                            </div>
                            
                     
                           

                          
                        </form>
                    


        <div class="Profile_wrapper">
            <div class="Userinfo">
                <div class="username">
                <h1 ><?=  $userlogin['login'] ?></h1>
                <?php 
                if($userinfo['ban']==1){
                    ?>
                <h1 class="failed"><?=  $Lang['ЗАБАНЕН'] ?></h1>
                    <?php 
                } 
                ?>
               

                </div>
               
                <p><?=  $Lang['Привет'] ?>, <?=  $userlogin['login'] ?></p>
                <p><?=  $Lang['Welcome'] ?> </p>
                <p><?=  $Lang['Test'] ?></p>
                <p><?=  $Lang['Удачи'] ?></p>

                <?php 
    
                if(!empty($userinfo['name'])){
                    ?>
                <div class="Version">
                    <h2><?=  $Lang['Версия'] ?></h2>
                    <p class="versiongame"><?=  $userinfo['CategName'] ?></p>
                    <!-- <a class="btn links button" href="/preoder"><?=  $Lang['УЛУЧШИТЬ'] ?></a> -->
                </div>


                <div class="Download">
                    <a href="BsgLauncher.12.12.3.1981.exe"> <img src="<?=  $Lang['install'] ?>" alt="Скачать"></a>

                </div>
                <?php 

                }

                ?>






                <div class="Profilevk">
                    <p><?=  $Lang['Подпишись'] ?>  <a href=""><?=  $Lang['Twitter'] ?></a>  <?=  $Lang['Подпишись2'] ?> </p>
                    
                   
                   
                </div>
            </div>
            <div class="Action">

            <div class="UserButton">
                <a class="btn links  button resett" href="" value="aobba"><?=  $Lang['Сбросить'] ?> </a>
                <a class="btn links  button email_change " title="пока не доступно" value="aobba" href=""><?= $Lang['почта'] ?></a>
                <a class="btn links  button login_change" value="changeLogin" href=""><?= $Lang['логин'] ?></a>
                <a class="btn links  button pass_change" value="changePass" href="ResetPassword"><?=$Lang['Пароль'] ?></a>
               

            </div>
                <div class="UserExit">
                <a class="btn links button" title="ВЫЙТИ С АККАУНТА" href="/logout"><?=  $Lang['Выйти']?></a>
                </div>
            </div>
           

        </div>

        <?php 

            if(!empty($userinfo['name'])){
                ?>
        <h4 class="Title_Tranc"><?=  $Lang['Ваши транзакции'] ?></h4>
        <div class="Tranc">
            <?php  
                while($historyinfo=mysqli_fetch_assoc($history)){
                    ?>
                <div class="itemcard">
                <img src="<?=  $userinfo['image'] ?>" height='200px' alt="">
                <a class="productid">
                    <div class="DescriptCard">
                        <?=  $historyinfo['Category'] ?>
                        <p> <?=  $historyinfo['buyDate'] ?></p>
                    </div>

                </a>
                <div>

                </div>
            </div>
            <?php  
                }
             ?>
        

        </div>
        <?php 
            }
            ?>




    </div>


</main>