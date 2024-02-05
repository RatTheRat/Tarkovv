<?php 
include 'settings/set.php';
$idUser=$_SESSION['user']['id'];

$time=time();
var_dump(date('y-m-d',$time));

?>
<main>


    <div class="container">
        <div class="block_support">
        <div class="message">
                
                </div>
                <h1><?=  $Lang['support'] ?></h1>
            <form class="support_search"  method="POST">
           
                <textarea class="search" name="search" id="" cols="30" rows="10" placeholder="<?=  $Lang['searchtext'] ?>"></textarea>
                <?php 
                if(!empty($idUser)){
                    ?> 
                    <input class="support_send" type="submit" value="<?=  $Lang['ОТПРАВИТЬ'] ?>">
                    <?php 
                }else{
                    ?> 
                    <h1><?=  $Lang['logging'] ?></h1>
                    <?php 
                }
                ?>
                
            </form>


        </div>

    </div>




</main>