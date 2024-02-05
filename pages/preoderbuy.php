<?php 
include 'settings/set.php';
$id=$_GET['id'];
$queryy=Productbyid($id);
$allcards=mysqli_fetch_assoc($queryy);

$idUser=$_SESSION['user']['id'];

$querycard=allcards();


if(!empty($idUser)){
    $userinfo=Profile($idUser);
    $alreadyprice=$userinfo['Price'];
}



?>
    <main>
        <div class="container">
            <div class="Wrapper">
                <h1 class="wraptitle">

                    <img class="Title_image" src="<?= $Lang['imgpreorder']?>" alt="" width="100%">
                </h1>
                <div class="block1 ">
                    <div class="cards">
                        <?php 
       
        while($resl=mysqli_fetch_assoc($querycard)){
          
            ?>

                        <div class="itemcard">

                            <img src="<?= $resl['image']?>" alt="" width="100%" height="auto">
                            <a class="productid" href="/Product?id=<?= $resl['Ctgid']?>">
                                <div class="DescriptCard">
                                    <span class="Descripspan">
                                        <?= $resl['name']?>
                                        <br>
                                        <br>
                                        <?= $Lang['fullDesc1']?>
                                        <?php 
                                   
                                   if($resl['Price'] <=1600){
              
                                    echo($Lang['СхронСтандарт']);
                                    
                                     }elseif($resl['Price'] =='4999'){
                                        echo($Lang['СхронОгромный']);
                                     }else{
                                        echo($Lang['Схронбольше']);
                                     }
                                    ?>


                                    </span>

                                </div>
                            </a>
                            <div class="priceCard padd">
                            <?php 
                                if(!empty($alreadyprice)){
                                    if($resl['Price']<=$alreadyprice){
                                        
                                        ?>
                                       <h4>УЖЕ КУПЛЕН</h4> 
                                         <?php
                                    }else{
                                       $newprice= $resl['Price']-$alreadyprice;
                                        ?>
                                <h1><?= $newprice?> ₽</h1>
                                <div class="buybtn">
                                    <a class="productid" href="/Product?id=<?= $resl['Ctgid']?>">
                                        <button value="<?= $resl['id']?>"
                                            class="btn Carzine"><?=  $Lang['ПРЕДЗАКАЗ'] ?></button>
                                    </a>

                                </div>
                                         <?php
                                    }
                                    
                                }else{
                                    ?>
                                     <h1><?= $resl['Price']?> ₽</h1>
                                     <div class="buybtn">
                                    <a class="productid" href="/Product?id=<?= $resl['Ctgid']?>">
                                        <button value="<?= $resl['id']?>"
                                            class="btn Carzine"><?=  $Lang['ПРЕДЗАКАЗ'] ?></button>
                                    </a>

                                </div>
                                    <?php
                                }
                            ?>
                                
                               
                               

                            </div>


                        </div>

                        <?php 
           
    
        }
    
    ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

</main>