<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="Add_Product.css">
    <title>Login Page</title>
</head>
<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="Add_Success.php" method="post" novalidate enctype="multipart/form-data">
                <h1>Add You Product Here !</h1>
                <input type="text" placeholder="Enter the product name" name="cloth_name" id="name">            
                <input type="text" placeholder="Enter the product description" name="cloth_desc" id="email">
                <input type="text"  placeholder="Enter the product price" id="price" name="price">
                <input type="file"  name="uploadfile" value="" />
                <input type="text"  placeholder="Enter the product rating" id="rating" name="rating">
                <button>Add Your Product !</button>
            </form>
        </div>
       




    </div>

    <script src="script.js"></script>
</body>


</html>