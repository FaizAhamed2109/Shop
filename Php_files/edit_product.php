<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Add_Product.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
        <title>Document</title>
    </head>
    <body>
    <?php 
     $mysqli = require __DIR__ . "/database.php";
     if(isset($_GET['edit'])){
            $id=$_GET['edit'];
            $query = "select * from clothes where cloth_id='$id'";
            $result = $mysqli->query($query);
     }


    if(isset($_POST['submit'])){
        $cloth_id = $_POST["cloth_id"];
        $cloth_name = $_POST["cloth_name"];
        $cloth_desc = $_POST["cloth_desc"];
        $price = $_POST["price"];
        $rating = $_POST["rating"];
        $cloth_image = $_POST["uploadfile"];

            $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "./images/" . $filename;



        echo $filename."                        ";
        echo $tempname."                        ";
        echo $folder;


        $query = "update clothes set cloth_name='$cloth_name',cloth_desc='$cloth_desc',price='$price',cloth_image='$folder',rating='$rating' where cloth_id='$cloth_id'";
        if($mysqli->query($query)){
            header("location:http://localhost/shop/shop.php?edit=Successfull");
           
            if (move_uploaded_file($tempname, $folder)) {
                echo "<h3> Image uploaded successfully!</h3>";
            }
        }
        else{
                echo "Error" ;
        }
    }

    foreach($result as $product){
        ?>
    <form action="edit_product.php" method="post" novalidate enctype="multipart/form-data">
             <h1>Add New Products</h1>
            <div>
            <input type="hidden" name="cloth_id" id="name" value="<?php echo $product['cloth_id']; ?>">
            <label>Cloth Name</label>
            <input type="text" name="cloth_name" id="name" value="<?php echo $product['cloth_name']; ?>">
            </div>

            <div>
            <label>Cloth Description</label>
            <input type="text" name="cloth_desc" id="email" value="<?php echo $product['cloth_desc']; ?>">
            </div>
            
            <div>
                <label>Price</label>
                <input type="text" id="price" name="price" value="<?php echo $product['price']; ?>">
            </div>

            <div>
            <label>Cloth Image</label>
            <div style="display:flex;">>
            <input type="file" name="uploadfile"/>
            <input name="old_uploadfile" value="<?php echo $product['cloth_image']; ?>"/>
            </div>

            </div>
            
            <div>
                <label>Rating</label>
                <input type="text" id="rating" name="rating" value="<?php echo $product['rating']; ?>">
            </div>

            <input name="submit" type="submit"></input>

        </form>


    
    

        <?php
    }
    ?>
    
    </body>
    </html>