<?php 
$login = $_POST['login'];
$Email = $_POST['Email'];
$Pass = $_POST['Pass'];
$PasswordRep = $_POST['PasswordRep'];
$accept = $_POST['accept'];
$checkuser = mysqli_query($connect,"SELECT * FROM users WHERE email = '$Email' ");
if(mysqli_num_rows($checkuser) > 0){  
    $response = [
        "status"=> false,
        "message"=> 'Такая почта уже занята'
    ];

    echo json_encode($response);

}else{
    if(!empty($login) && !empty($Email) && !empty($Pass) && !empty($PasswordRep) && !empty($accept)){
        $checkuser = mysqli_query($connect,"INSERT INTO users (id_users, login, password, email)
        VALUES (NULL, '$login', '$Pass', '$Email') ");
    $response = [
        "status"=> true,
        "message"=> 'Вы успешно зарегистрировались<br>Войдите в аккаунт'
    ];

    echo json_encode($response);
    }else{
        $response = [
            "status"=> true,
            "message"=> 'Все поля должны быть заполнены!'
        ];
    
        echo json_encode($response);
    }
    
    



   
   

}




 



?>