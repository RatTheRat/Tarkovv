<?php 
ob_start();


$LangArray = array("ru", "en");
$DefaultLang = "ru";
if($_SESSION['NowLang']) {
	if(!in_array($_SESSION['NowLang'], $LangArray)) {
		$_SESSION['NowLang'] = $DefaultLang;
	}
}
else {
	$_SESSION['NowLang'] = $DefaultLang;
}
$language = addslashes($_GET['lang']);
if($language) {
	if(!in_array($language, $LangArray)) {
		$_SESSION['NowLang'] = $DefaultLang;
	}
	else {
		$_SESSION['NowLang'] = $language;
	}
}
$CurentLang = addslashes($_SESSION['NowLang']);
include_once ("lang/lang.".$CurentLang.".php");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarkov</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/second.css">
    <link rel="stylesheet" href="../css/responce.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <?php 
$route = $_GET['route'];
switch ($route){
            case 'Product':

                echo '<link rel="stylesheet" href="../css/product.css">';
                break;
            case 'Profile':

                echo '<link rel="stylesheet" href="../css/side.css">';
                break;

           

            default:
                    echo '<link rel="stylesheet" href="../css/style.css">';
                    echo '<link rel="stylesheet" href="../css/second.css">';
                    echo '<link rel="stylesheet" href="../css/responce.css">';
                    break;
}


?>

</head>

<body>


    <div class="Message hidden">
        <p></p>

        <div class="closeMessage">
        </div>
    </div>


    <div class="blackfon"></div>


    <?php 
            if(!empty($_SESSION['user'])){

            }else{
                //окно авторизации
                ?> 

                    <div class="formAuth fon">
                        <form class="formauth formsetting" action="" method="POST">
                            <div class="otvet">

                            </div>
                            <span class="invaliduser "></span>
                            <div class="titileAuth">

                                <h1 class="mb">АВТОРИЗАЦИЯ</h1>
                                <div class="closemodal">

                                </div>
                              
                            </div>

                            <p>E-MAIL</p>

                            <input class="AuthEmail emailLogin" type="email" name="EMAIL">
                            <span class="incEmail invalid hidden">НЕКОРРЕКТНЫЙ E-MAIL</span>
                            <p class="Ppas">ПАРОЛЬ</p>

                            <input class="AuthPass passwordd" autocomplete type="password" name="PASSWORD">

                            <div class="remember flex">
                                <input class="rememberme" type="checkbox" value="1">запомнить меня
                            </div>

                            <input class="Authsumb " type="submit" disabled="disabled" value="Войти"></input>

                            <button class="Authrecover" type="submit">Забыли пароль?</button>
                        </form>
                    </div>

                
               
                    <div class="blockReg fon">
        <form class="formreg formsetting" action="">
            <div class="titileAuth">
                <h1 class="mb">СОЗДАТЬ НОВЫЙ АККАУНТ</h1>
                <div class="closemodalReg">

                </div>
               
            </div>
            <span class="UserInvalid">
                
               </span>
            <p>ЛОГИН*</p>

            <input class="AuthEmail loginregist " type="text" name="LOGIN">
            <span class="incEmail invalid invlogin hidden">НЕКОРРЕКТНЫЙ НИКНЕЙМ</span>
            <p>E-MAIL</p>

            <input class="AuthEmail emailregist" type="text" name="EMAIL">
            <span class="incEmail invalid invemail hidden">НЕКОРРЕКТНЫЙ E-MAIL</span>
            <p>Пароль</p>
            <input class="AuthPass passwordregist" autocomplete type="password" name="PASSWORD">
            <span class="incEmail invalid invPass hidden">НЕКОРРЕКТНЫЙ ПАРОЛЬ</span>
            <p>Повтор пароля</p>
            <input class="AuthPass passwordrepeat" autocomplete type="password" name="REPEATPASSWORD">
            <span class="incEmail invalid invPassRepeat hidden">ПОВТОРОНЫЙ ПАРОЛЬ НЕ ВЕРНЫЙ</span>

            
            <div class="flex">
                <input class="accept" type="checkbox" name="conditions" value="1">Я ПРИНИМАЮ УСЛОВИЯ...
            </div>
            <input class="Authsumb Register" disabled="disabled"  type="submit" value="ЗАРЕГИСТРИРОВАТЬСЯ">
        </form>
    </div>




                     <?php //окно регистрации

            }
            ?>


    




    <header>

        <div class="container">

            <div class="headerContent">

                <a class="logo" href="/"><img src="../img/logo.svg" alt=""></a>

                <div class="burger_menu openburger">

                    <div class="burgerstyle">
                        <a class="new" href="/#new"><?=  $Lang['НОВОСТИ'] ?></a>
                        <a href="Support"><?=  $Lang['ПОДДЕРЖКА'] ?></a>
                        <a href="About"><?=  $Lang['ОБ ИГРЕ'] ?></a>
                        <?php 

              if(!empty($_SESSION['user'])){
                ?>
                        <a href="Profile">
                            <?=  $Lang['Профиль'] ?>
                        </a>
                        <a href="logout">
                            <?=  $Lang['Выйти'] ?>
                        </a>

                        <?php 
              }else{
                ?>
                        <a class="auth  "><?=  $Lang['ВОЙТИ'] ?></a>
                        <a class="reg  "><?=  $Lang['РЕГИСТРАЦИЯ'] ?></a>
                        <?php 
              }
              ?>
                    </div>

                </div>

                <div class="headerinks">
                    <a class="new" href="#new"><?=  $Lang['НОВОСТИ'] ?></a>
                    <a href="Support"><?=  $Lang['ПОДДЕРЖКА'] ?></a>
                    <a href="About"><?=  $Lang['ОБ ИГРЕ'] ?></a>


                </div>
                <div class="buttons">

                    <div class="card"><img src="../img/icons/Vector.png" alt="" height="30px">
                        <img class="openlang" src="../img/icons/open.svg" alt="">
                        <!-- <img  class="closelang" src="../img/icons/close.png" alt=""> -->
                        <div class="switchLanguage">


                            <?php 
         switch ($route){
          case 'Product':
                echo ' <a class="links" href="/Product?id=' . $_GET['id'] . '&lang=ru"><p>RU</p></a>';
                echo ' <a class="links" href="/Product?id=' . $_GET['id'] . '&lang=en"><p>EN</p></a>';
                break;
            default:
              echo ' <a class="links" href="?lang=ru"><p>RU</p></a>';
              echo '  <a class="links" href="?lang=en"><p>ENG</p></a>';
                break;
     
    }
          ?>


                            <p>DE</p>
                            <p>ESP</p>
                        </div>

                    </div>
                    <?php 

              if(!empty($_SESSION['user'])){
                ?>
                    <a class="prof links" href="Profile">
                        <button class="Profile button"><?=  $Lang['Профиль'] ?></button>
                    </a>
                    <a class="log links" href="logout">
                        <button class="logout button"><?=  $Lang['Выйти'] ?></button>
                    </a>

                    <?php 
              }else{
                ?>
                    <button class="auth button mod"><?=  $Lang['ВОЙТИ'] ?></button>
                    <button class="reg button mod"><?=  $Lang['РЕГИСТРАЦИЯ'] ?></button>
                    <?php 
              }
            ?>


                    <button class="burger">
                        <div class="burger-line"></div>
                        <div class="burger-line"></div>
                        <div class="burger-line"></div>
                    </button>
                </div>

            </div>


    </header>