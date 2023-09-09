<?php
include('database.php');

if (empty($_POST["sign_name"]))  {
    die("Name is required");
}


if (strlen($_POST["sign_password"]) <8 ) {
    die("Password must be at least 8 characters");
}

if (! preg_match("/[a-z]/i", $_POST["sign_password"])) {
    die("Password must contain at least one letter");
}

if (! preg_match("/[0-9]/", $_POST["sign_password"])) {
    die("Password must contain at least one number");
}



$password_hash = password_hash($_POST["sign_password"], PASSWORD_DEFAULT);

//select -> display information
//insert -> add
//update
//delete

$name = $_POST["sign_name"];
$password = $_POST["sign_password"];
$query = "select * from user where name='$name'";
if($mysqli->query($query)){
    $result = $mysqli->query($query);
    $length = mysqli_num_rows($result);
    if($length==1){
        foreach($result as $user){
            $hash = $user['password_hash'];
            $verify = password_verify($password,$hash);
            if($verify){
                echo "Sucessfull";
                header("Location: http://localhost/shop/home.php", true, 301);
            }else{
                echo "Password Incorrect";
            }
        }
        
    }
    else{
        echo "Invalid User";
    }


    // exit();

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