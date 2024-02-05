<?php
session_start();
$email=$_POST['Email'];
$Password=$_POST['Password'];

$checkuser = mysqli_query($connect,"SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$Password' ");

if((mysqli_num_rows($checkuser) > 0) AND(!empty($Password))){
    $user = mysqli_fetch_assoc($checkuser);
    $_SESSION['user']=[
        "id" => $user['id_users'],
        "loginUser"=> $user['login'],
        "email" => $user['email'],
    ];

    $response = [
        "status"=> true,
        "message"=> 'Вы успешно вошли <br> Перенаправление через....'
    ];

    echo json_encode($response);

}else{

    $response = [
        "status"=> false,
        "message"=> 'Не верный Email или пароль'
    ];

    echo json_encode($response);

};





?>