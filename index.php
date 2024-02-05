<?php 
include 'connect.php';
session_start();

$route = $_GET['route'];



switch ($route){
        case '':
                require 'tem/includsheader.php';
                require 'tem/main.php';
                require 'tem/includsfooter.php';
                break;
        case 'About':
                require 'tem/includsheader.php';
                require 'pages/About.php';
                require 'tem/includsfooter.php';
                break;
        case 'Support':
                require 'tem/includsheader.php';
                require 'pages/Support.php';
                require 'tem/includsfooter.php';
                break;
        case 'preoder':
                require 'tem/includsheader.php';
                require 'pages/preoderbuy.php';
                require 'tem/includsfooter.php';
                break;
        case 'Product':
                require 'tem/includsheader.php';
                require 'pages/Product.php';
                require 'tem/includsfooter.php';
                break;   
        case 'Profile':
                require 'tem/includsheader.php';
                require 'pages/lc.php';
                require 'tem/includsfooter.php';
                break;      
        case 'Auth':
                require 'settings/Auth.php';
                break;  
        case 'reg':
                require 'settings/reg.php';
                break;    
        case 'buy':
                require 'preorder/buy.php';
                break;  
        case 'upgradeVer':
                require 'upgrade/upgrade.php';
                break; 
        case 'ResetPassword':
                require 'tem/includsheader.php';
                require 'settings/resetpass.php';
                require 'tem/includsfooter.php';
                break; 
        case 'supportQuery':
                require 'settings/supportQuery.php';
                break; 
        case 'queryres':
                require 'settings/queryres.php';
                break; 
        case 'logout':
                require 'settings/logout.php';
                break;        
        default:
                require 'tem/404.php';
                break;
}






?>

