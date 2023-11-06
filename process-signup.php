<?php
include('database.php');

if (empty($_POST["name"]))  {
    die("Name is required");
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL )) {

    die("Valid email is required");
}   

if (strlen($_POST["password"]) <8 ) {
    die("Password must be at least 8 characters");
}

if (! preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one letter");
}

if (! preg_match("/[0-9]/", $_POST["password"])) {
    die("Password must contain at least one number");
}

// if ($_POST["password"] !== $_POST["password_confirmation"]) {
//     die("Password doesn't match");
// }

// $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

//select -> display information
//insert -> add
//update
//delete

$name = $_POST["name"];
$email = $_POST["email"];

$query = "INSERT INTO `user` (`name`, `email`, `password_hash`) VALUES ( '$name', '$email', '$password_hash');";
if($mysqli->query($query)){
    echo "Sucessfull";
    header("Location: http://localhost/shop/home.php ", true, 301);

    exit();
}else{
    echo "Error";
}

// $mysqli = require __DIR__ . "/database.php";
// $query = "select * from user";
// $result = $mysqli->query($query);
// var_dump($result);
// foreach($result as $item){
//     var_dump($item);
// }

// print_r($_POST);
// var_dump($password_hash);