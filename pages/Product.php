<?php 
include 'settings/set.php';
$id=$_GET['id'];
$queryy=Productbyid($id);
$allcards=mysqli_fetch_assoc($queryy);

$datethis = date('d.m.y');

$idUser=$_SESSION['user']['id'];

if(!empty($_SESSION['user'])){
    $_SESSION['Date']=[
        "datethis"=>$datethis
    ];
    
    $userinfo=Profile($idUser);
    if(!empty($userinfo)){
        $alreadybuy=(int)$userinfo['Price'];

    }
}

$price=(int)$allcards['Price'];






?>
<main>
    <div class="emptyAccount">

        <div class="formempty">
            <div class="closeEmpty">
            </div>
            <h3>СНАЧАЛО ВАМ НУЖНО ВОЙТИ ИЛИ ЗАРЕГИСТРИРОВАТЬСЯ</h3>
            <button class="auth button mod login">ВОЙТИ</button>
            <button class="reg button mod registration">РЕГИСТРАЦИЯ</button>
        </div>

    </div>
    <div class="container">
        <div class="wrapper">
            <div class="wraptitle">
                <h1><?= $allcards['name']?>
            </div>
            <div class="itemcard">
                <div class="itemimg">
                    <div class="image">
                        <img src=" <?= $allcards['image']?>" alt="" width="100%" height="100%">
                    </div>
                </div>

                <div class="iteminformation">
                    <div class="Descripinfo">
                        <p> <?= $allcards['name']?>
                            <br>
                            <br>
                            <?= $Lang['fullDesc1']?>
                            <br>
                            <br>
                            <?= $Lang['fullDesc2']?>
                            <br>
                            <br>
                            <?php 
                 if($allcards['Price'] =='1600'){
                    echo($Lang['СхронСтандарт']);
                }elseif($allcards['Price'] =='4999'){
                    echo($Lang['СхронОгромный']);
                }else{
                    echo($Lang['Схронбольше']);
                }
                ?>
                            <br>
                            <br>
                            <?= $Lang['fullDesc3']?>
                            <br>
                            <br>
                            <?= $Lang['Unic']?>

                            <br>
                            <br>
                            <?php 
            
                if($allcards['Price'] =='4999'){
                    echo($Lang['fullDesc4']);
                }
    
                ?>

                        </p>

                    </div>


                    <?php 
                 if(!empty($_SESSION['user'])){
                     //если есть сессия
                     if($alreadybuy >=$price){
                        ?>
                    <div class="PriceBuy alredybuy">
                        <h1>уже куплен</h1>
                    </div>
                    <?php 
                     
                    }elseif(!empty($userinfo['Price'])){
                        $newprice=$price-$alreadybuy;
                        ?>
                    <div class="PriceBuy ">
                        <div class="price cursor">
                            <h1><?= $newprice?> P</h1>
                        </div>
                        <button class="btn Upgrade" data-selected="<?= $id?>"><?= $Lang['УЛУЧШИТЬ']?></button>
                        <?php 
                    }
                    else{
                        ?>
                        <div class="PriceBuy ">
                            <div class="price cursor">
                                <h1><?= $allcards['Price']?> P</h1>
                            </div>
                            <button class="btn buyitem" data-selected="<?= $id?>"><?=  $Lang['ПРЕДЗАКАЗ'] ?></button>
                            <?php 
                       
                    }
                     ?>

                            <?php 
                   }else{
                    //если нету сессии
                    ?>
                            <h2 class="color"> <?=  $Lang['needAuth'] ?></h2>

                            <?php 
                 }
                ?>


                        </div>
                        <div class="moreinformation">

                        </div>
                    </div>


                </div>



            </div>
        </div>


</main>