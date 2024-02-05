<?php
$id_user=$_SESSION['user']['id'];
$oldpass=$_POST['oldPass'];
$newpass=$_POST['newpass'];
$newpass_repeat=$_POST['newpass_repeat'];

if(!empty($oldpass) AND !empty($newpass) AND !empty($newpass_repeat)){
    $query = mysqli_query($connect,"SELECT * FROM `users`");
    $assoc = mysqli_fetch_assoc($query);
    $passuser=$assoc['password'];
    if($passuser == $oldpass){

        if($newpass == $newpass_repeat){

                
            $checkuser = mysqli_query($connect,"SELECT * FROM `users` WHERE `id_users` = '$id_user' ");
            $user = mysqli_fetch_assoc($checkuser);
            
            $checkuser = mysqli_query($connect,"UPDATE `users` SET `password` = '$newpass' WHERE `users`.`id_users` = '$id_user'");


           

            $response = [
                "status"=> true,
                "message"=> 'Пароль изменен'
            ];
        
            echo json_encode($response);
            
        }else{
            

            $response = [
                "status"=> false,
                "message"=> 'Пароли не совпадают'
            ];
        
            echo json_encode($response);
        }


    }else{

        $response = [
            "status"=> false,
            "message"=> 'Старый пароль не верный!'
        ];
    
        echo json_encode($response);
        


    }
  
    
    



}else{
        $response = [
        "status"=> false,
        "message"=> 'Все поля должны быть заполнены'
    ];

    echo json_encode($response);
   
}

?>