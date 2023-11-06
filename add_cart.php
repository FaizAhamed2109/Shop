<?php 
//require('database.php');
session_start();
//var_dump($_POST);


if (empty($_POST["add"]))  {
    echo "Sowung";
    var_dump($_POST["product"]);
}
//     //echo "Add Product to cart".$_POST["product_id"];
//     if(isset($_SESSION['cart'])){
//         //echo "Already cart has been created";
//         $item_product_id = array_column($_SESSION['cart'],"product_id");
//         print_r($item_product_id);
//         if(in_array($_POST['product_id'],$item_product_id)){

//         }
//     }else{
//         echo "NO session created ";
//         $item = array(
//             'product_id' =>  $_POST["product_id"],
//             'product_name' =>  "H & M Shirt"
//         );

//         $_SESSION['cart'][0] =  $item;

//         print_r($_SESSION['cart']);
//     }
// }else{
//     //echo "Error";
// }
?>