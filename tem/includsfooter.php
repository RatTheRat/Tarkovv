<footer>
    <div class="container">

        <div class="headerContent">
            <a class="logo" href="/"><img src="../img/logo.svg" alt=""></a>
            <p><?=  $Lang['footer'] ?></p>
        </div>

    </div>
    <div class="up">
    <svg class="ArrowUP" width="50" height="50" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g clip-path="url(#clip0_720_2)">
    <path d="M1.5 7.5L7.5 1.5L13.5 7.5" stroke="#9A8866" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
    </g>
    <defs>
    <clipPath id="clip0_720_2">
    <rect width="15" height="9" fill="white" transform="matrix(-1 0 0 -1 15 9)"/>
    </clipPath>
    </defs>
    </svg>

    </div>
</footer>
<?php 

        if(!empty($_SESSION['user'])){

              // if($route=='Profile'){
              //   echo '<script src="../js/profile.js"></script>';
              // }
              if(!empty($userinfo['Price'])){
                if($route=="Product"){
                  echo '<script src="../js/upgrade.js"></script>';
                }
                if($route=='Profile'){
                  echo '<script src="../js/profile.js"></script>';
                }
              }else{
                if($route=="Product"){
                  echo '<script src="../js/preorder.js"></script>';
                }
               
              }
              if($route=="Support"){
                echo '<script src="../js/support.js"></script>';
              }
              echo '<script src="../js/scroll.js"></script>';
              echo '<script src="../js/burgermenu.js"></script>';
             
        }else{
          echo '<script src="../js/scroll.js"></script>';
          echo '<script src="../js/lc.js"></script>';
          echo '<script src="../js/ajax.js"></script>';
          echo '<script src="../js/recover.js"></script>';
          echo '<script src="../js/burgermenu.js"></script>';
          echo '<script src="../js/register.js"></script>';
        }
  //   if(!empty($_SESSION['user']) && $route=='Product' ){
  //                           if(!empty($userinfo['Price'])){
  //                             echo '<script src="../js/upgrade.js"></script>';
                              
  //                           }else{
  //                             echo '<script src="../js/preorder.js"></script>';
  //                           }
  
  //             echo '<script src="../js/lc.js"></script>';
  //             echo '<script src="../js/ajax.js"></script>';
  //             echo '<script src="../js/new.js"></script>';
  //             echo '<script src="../js/burgermenu.js"></script>';
              
              
  //   }else if(!empty($_SESSION['user'])){
  //     if($route=='Profile'){
  //       echo '<script src="../js/profile.js"></script>';
  //     }
  //     echo '<script src="../js/new.js"></script>';
  //     echo '<script src="../js/burgermenu.js"></script>';
  //   }
  //   else if($route=='preoder'){
  //     echo '<script src="../js/lc.js"></script>';
  //     echo '<script src="../js/ajax.js"></script>';
  //     echo '<script src="../js/new.js"></script>';
  //     echo '<script src="../js/burgermenu.js"></script>';
  //   }
  //   else if($route==''){
  //             echo '<script src="../js/lc.js"></script>';
  //             echo '<script src="../js/ajax.js"></script>';
  //             echo '<script src="../js/new.js"></script>';
  //             echo '<script src="../js/burgermenu.js"></script>';
  //             echo '<script src="../js/recover.js"></script>';
  //     }else if($route=='ResetPassword'){
  //         echo '<script src="../js/resetpass.js"></script>';
  //         echo '<script src="../js/new.js"></script>';
  //         echo '<script src="../js/burgermenu.js"></script>';
        
  //     }else{
  //       echo '<script src="../js/lc.js"></script>';
  //       echo '<script src="../js/ajax.js"></script>';
  //       echo '<script src="../js/new.js"></script>';
  //       echo '<script src="../js/burgermenu.js"></script>';
  //       // echo '<script src="../js/emptyacc.js"></script>';
  // }




?>

</body>

</html>