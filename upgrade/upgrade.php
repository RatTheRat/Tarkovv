<?php 
include 'settings/set.php';
session_start();
$id=$_POST['ctg'];

$Update=Productbyid($id);



if(mysqli_num_rows($Update) > 0){
    $iduser=$_SESSION['user']['id'];
    $query=updateVersion($iduser);
    $cards = mysqli_fetch_assoc($query);
    $assoc = mysqli_fetch_assoc($Update);// histoey
    
    $BUyid=$cards['buyid'];
    $productid=$assoc['productID']; 
    $nameCategory=$assoc['CategoryName']; 
    $date=$_SESSION['Date']['datethis'];
    $image=$assoc['image'];

    $ctgchange =mysqli_query($connect,"UPDATE `cardtovars` SET `id_category` = '$id' WHERE `cardtovars`.`id` = '$BUyid'");

    
    $prodchange =mysqli_query($connect,"UPDATE `cardtovars` SET `id_product` = '$productid' WHERE `cardtovars`.`id` = '$BUyid'");


    $history=mysqli_query($connect,"INSERT INTO `history` (`id`, `Id_user`, `Category`, `buyDate`, `img`) 
                                            VALUES (NULL, '$iduser', '$nameCategory', '$date', '$image')");

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