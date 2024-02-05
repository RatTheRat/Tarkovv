<?php 
include 'connect.php';

$query = mysqli_query($connect,"SELECT * FROM product ORDER BY product.Price");
$queryid = mysqli_query($connect,"SELECT * FROM Category");
$id=mysqli_fetch_assoc($queryid);


function intprice(){

}


function userlogin($id){
  global $connect; 
  $query=mysqli_query($connect,"SELECT * FROM `users` WHERE users.id_users='$id'");
  $mess=mysqli_fetch_assoc($query); 
  return $mess;
}




function Profile($id){
global $connect;  
$query =mysqli_query($connect, "SELECT 
                              
product.name,
product.image,
product.descrip,
product.Price,
users.id_users,
users.login,
Category.id AS CategID,
Category.name AS CategName,
cardtovars.id AS id_buy,
cardtovars.ban
from cardtovars


LEFT JOIN product ON (product.id_product) =cardtovars.id_product
LEFT JOIN users ON (users.id_users) = cardtovars.User_id
LEFT JOIN Category ON (Category.id) = cardtovars.id_category
WHERE users.id_users='$id'
");
$id=mysqli_fetch_assoc($query);  
return $id;

}

function history($id){
  global $connect;
  $query=mysqli_query($connect,"SELECT * FROM `history` WHERE Id_user='$id'");
  return $query;
}


function updateVersion($iduser){
  global $connect;
  $query=mysqli_query($connect,"SELECT 
  cardtovars.id AS buyid,
  users.id_users
  from cardtovars 
  
  LEFT JOIN users ON (users.id_users) = cardtovars.User_id
  WHERE users.id_users='$iduser'");
  return $query;
}


function allcards(){
global $connect;  
$query =mysqli_query($connect, "SELECT 
                              
product.name,
product.image,
product.descrip,
product.Price,
Category.id AS Ctgid,
Category.name
from allcard


LEFT JOIN product ON (product.id_product) =allcard.id_product
LEFT JOIN Category ON (Category.id) =allcard.id_category
ORDER BY product.Price

");

return $query;

}



function Productbyid($id){
  global $connect;  
  $query =mysqli_query($connect,"SELECT 
                              
  product.name,
  product.image,
  product.descrip,
  product.Price,
  product.id_product AS productID,
  Category.id AS Ctgid,
  Category.name AS CategoryName
  from allcard
  
  
  LEFT JOIN product ON (product.id_product) =allcard.id_product
  LEFT JOIN Category ON (Category.id) =allcard.id_category
  WHERE Category.id='$id'");
  return $query;

}






// function queryById($id){

// global $connect;  
// $query =mysqli_query($connect, "SELECT 
// product.name,
// product.image,
// product.descrip,
// product.Price,
// cardtovars.id
// from cardtovars

// LEFT JOIN product ON (product.id_product) =cardtovars.id_product
// WHERE id='$id'");

// return $query;



// }





?>