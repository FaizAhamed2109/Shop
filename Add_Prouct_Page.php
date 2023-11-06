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
    
    <form action="Add_Success.php" method="post" novalidate enctype="multipart/form-data">
             <h1>Add New Products</h1>
            <div>
            <label>Cloth Name</label>
            <input type="text" name="cloth_name" id="name">
            </div>

            <div>
            <label>Cloth Description</label>
            <input type="text" name="cloth_desc" id="email">
            </div>
            
            <div>
                <label>Price</label>
                <input type="text" id="price" name="price">
            </div>

            <div>
            <label>Cloth Image</label>
            <input type="file" name="uploadfile" value="" />
            </div>
            
            <div>
                <label>Rating</label>
                <input type="text" id="rating" name="rating">
            </div>

            <button>Add Product</button>

        </form>


    
    
    
    </body>
    </html>