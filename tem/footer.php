<?php
$route = $_GET['route'];
if(isset($_GET['route'])){
    switch ($route){
        case 'Animal':
            require 'tem/includsfooter.php';
            break;
        case 'Phone':
            require 'tem/includsfooter.php';
            break;
        case 'Cars':
            require 'tem/includsfooter.php';
            break;
            case 'cart':
                require 'tem/includsfooter.php';
                break;
                case 'Product':
                    require 'tem/includsfooter.php';
                break;
        case 'cardTovars':

             break;
            
    }
}
?>
