<?php
$route = $_GET['route'];
if(isset($_GET['route'])){
    switch ($route){
        case 'Animal':
            require 'tem/includsheader.php';
            break;
        case 'Phone':
          require 'tem/includsheader.php';
            break;
        case 'Cars':
          require 'tem/includsheader.php';
            break;
            case 'cart':
              require 'tem/includsheader.php';
              break;
              case 'Product':
                require 'tem/includsheader.php';
                break;
        
    }
}
?>
