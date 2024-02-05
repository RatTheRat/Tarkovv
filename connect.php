<?php

$connect = mysqli_connect('127.0.0.1', 'root','','tarkov');

    if(!$connect){
        die('connection Error to DataBase!');
    }

?>