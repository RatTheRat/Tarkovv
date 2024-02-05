<?php 
session_start();



?>
<main>

    <div class="block_Video">
            <div class="video">
                <video  src="../video/about.mp4" type="video/mp4" autoplay muted loop></video>
                <div class="video_fon"></div>
            </div>
              
                    

                
               
            <div class="video_content">
            <div class="container">
            
                    <div class="Video_info">
                    <h1><?=  $Lang['ОБ ИГРЕ'] ?></h1>
                    <p>Escape from Tarkov <?=  $Lang['/ Побег из Таркова'] ?> - <?=  $Lang['about_title'] ?></p>
                    
                    <br>
                    <br>
                    <br>
                    <p> <?=  $Lang['about_title2'] ?></p>
                   
                    <br>
                    <br>
                    <br>
                    <p> <?=  $Lang['about_title3'] ?></p>
                   
                    </div>
            </div>
         
            </div>

    </div>
    
    

    <div class="bgfon ">
        <div class="container">
            <div class="wrapper ">
                <div class="About_title">
                    <div class="About_text">
                    <h2><?=  $Lang['aboutinfo'] ?></h2>
                    </div>
                    
                    <div class="About_card">

                        <br>
                        <br>
                        <img src="../img/image 4.png" alt="">
                        <p class="ml"><?=  $Lang['abouttext'] ?></p>

                    </div>


                    <div class="About_card res">

                        <br>
                        <br>

                        <p class="mr"><?=  $Lang['abouttext2'] ?></p>
                        <img src="../img/image 5.png" alt="" >
                    </div>
                    
                    <div class="About_card ">
                        <div class="cardImage">
                            <img src="../img/image 1.png" alt="">
                            <!-- <img src="../img/image 2.png" alt=""> -->
                        </div>
                        <div class="cardinfo ml">
                            <p><?=  $Lang['abouttext3'] ?></p>
                            <br>
                            <br>
                            <p><?=  $Lang['abouttext4'] ?></p>
                            <br>
                            <br>
                            <p><?=  $Lang['abouttext5'] ?></p>
                            <br>
                            <br>
                            <br>


                           
                        </div>



                    </div>

                    <div class="About_card ">
                            <div class="cardImage">
                                <img src="../img/image 2.png" alt="">
                            </div>
                        <div class="cardinfo ml">
                        <p><?=  $Lang['abouttext6'] ?></p>
                            <br>
                            <br>
                            <p><?=  $Lang['abouttext7'] ?></p>

                            <br>
                            <br>

                            <p><?=  $Lang['abouttext8'] ?></p>
                            <br>
                            <br>
                            <p> <?=  $Lang['abouttext9'] ?></p>
                        </div>



                    </div>


                    <div class="preorder">
                        <a class="btn links" href="/preoder">ПРЕДЗАКАЗ</a>
                    </div>
                </div>

            </div>
        </div>

    </div>

</main>