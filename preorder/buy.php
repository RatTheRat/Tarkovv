<?php 
include 'settings/set.php';
session_start();
$id=$_POST['ctg'];


$Prod=Productbyid($id);



if(mysqli_num_rows($Prod) > 0){
    
    $assoc = mysqli_fetch_assoc($Prod);
   
    $image=$assoc['image'];
    $id_user=$_SESSION['user']['id'];
    $date=$_SESSION['Date']['datethis'];
    $id_categ=$assoc['Ctgid'];
    $id_prod=$assoc['productID']; 
   
    $nameCategory=$assoc['CategoryName']; 
    $buy =mysqli_query($connect,"INSERT INTO `cardtovars` (`id`, `id_product`, `User_id`, `id_category`, `ban`) 
                                                    VALUES (NULL, ' $id_prod', '$id_user', '$id_categ', NULL)");
    
    // $history=mysqli_query($connect,"INSERT INTO `history` (`id`, `Id_user`, `Category`, `buyDate`)
                                                     // VALUES (NULL, '$id_user', '$nameCategory', '$date')");

    $history=mysqli_query($connect,"INSERT INTO `history` (`id`, `Id_user`, `Category`, `buyDate`, `img`) 
                                            VALUES (NULL, '$id_user', '$nameCategory', '$date', '$image')");
    

$response=[ 
    "status"=>true,
    "message"=>'Успешно'
];
echo json_encode($response);
    



}else{
    $response=[ 
        "status"=>false,
        "message"=>'что-то пошло не так...'
    ];
    echo json_encode($response);
}


?>