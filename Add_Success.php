<?php 
require('database.php');

$cloth_name = $_POST["cloth_name"];
$cloth_desc = $_POST["cloth_desc"];
$price = $_POST["price"];
$rating = $_POST["rating"];



// For inserting an image into the DATABASE and to the LOCAL FOLDER
$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./images/" . $filename;



echo $filename."                        ";
echo $tempname."                        ";
echo $folder;
$query = "INSERT INTO `clothes` (`cloth_name`, `cloth_desc`, `cloth_image`, `price`, `rating`) VALUES ( '$cloth_name', '$cloth_desc', '$folder', '$price' , '$rating');";
if($mysqli->query($query)){
    echo "Sucessfull";
    // Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> Image uploaded successfully!</h3>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
    header("Location: http://localhost/shop/home.php?prod=Success", true, 301);

    exit();
}else{
    echo "Error";
}
    
    



?>