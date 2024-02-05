<?php 
include 'settings/set.php';


$id_user=$_SESSION['user']['id'];
$text=$_POST['Suptext'];

$Day=time()+(1*24*60*60);
$Next=date('y-m-d',$Day);

if(!empty($text)){
    $sendmessage = mysqli_query($connect,"INSERT INTO `Support` (`id`, `name`, `id_user`, `NextTime`) 
    VALUES (NULL, '$text', '$id_user','$Next')");


//INSERT INTO `Support` (`id`, `name`, `id_user`, `NextTime`) VALUES (NULL, 'hgh', '8', '2023-05-17 23:02:54')
     $response = [
                "status"=> true,
                "message"=> 'Сообщение успешно отправлено'
            ];
        
            echo json_encode($response);
           // echo 'все ок';

}else{

    $response = [
        "status"=> false,
        "message"=> 'Поле не может быть пустым'
    ];

    echo json_encode($response);
    //echo 'все не ок';
}







?>

