<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="style.css">

    <title>MyFirstWebsite</title>
</head>

<body>

<?php
if(isset($_GET['edit'])){
       if($_GET['edit'] == "Successfull"){ ?>
            <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            <strong>Product has been updated Successfully!</strong>
            </div>
    <?php
        }else{
         
       }
}


?>

<?php
if(isset($_GET['dele'])){
       if($_GET['dele'] == "deleted"){ ?>
            <div class="alert2">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            <strong>Product has been deleted Successfully!</strong>
            </div>
    <?php
        }else{
         
       }
}


?>
    <section id="header">  
      <a href="#"><img src="Downloads/img/logo.png" class="logo" alt=""></a>
    

<div>
    <ul id="navbar">
        <li><a href="home.php">Home</a></li>
        <li><a class="active" href="shop.php">Shop</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="Add_Prouct_Page.php">Add Product</a></li>
      <li><a href="cart.php"><i class="fal-solid fal fa-shopping-cart"></i> </a></li>
    </ul>
</div>


     </section>

<section id="page-header">
    <h2>#stayhome</h2>
    <p>Save more with coupons & up to 70% off !</p>
</section>


<section id="Product-1" class="section-p1">
    <h2>Featured Products</h2>
    <p>Summer Collection New Morden Design</p>

    <div class="pro-container">
    <?php
 require('database.php');

//  if(isset($_GET['edit'])){
//     if($_GET == "Successful"){
      
      ?>
       
       <?php
//     }
//  }


 $mysqli = require __DIR__ . "/database.php";
 $query = "select * from clothes";
 $result = $mysqli->query($query);

 if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $query = "delete from clothes where cloth_id = $id";

    if($mysqli->query($query)){
        echo "<script>
        alert('Delete successful')</script>";
    }else{
        echo"Error while deleting the product.";
    }
    header("location:http://localhost/shop/shop.php?dele=deleted");
 }
 
foreach($result as $clothes){
    // echo $user['name'].$user['email'];

    ?>
   

   <div class="pro">
            <img src="<?php echo $clothes['cloth_image'];?> " alt="">
            <div class="des">
                <span><?php echo $clothes['cloth_type'] ?></span>
                <h5><?php echo $clothes['cloth_name']?></h5>
                <div class="star">
                <?php 
                for($i=0;$i<$clothes['rating'];$i++) {
                ?>
                    <i class="fas fa-star"></i>
                <?php } ?>

                </div>
                <h4><?php echo  $clothes['price'] ?></h4>
               
            </div>   
            <div class="options">
            <div>
            <a href="">
                <i class="fal fa-shopping-cart cart"></i>
            </a>
            </div>
           <div>
           <a href="<?php echo"shop.php?delete=".$clothes['cloth_id']?>"><i class="far fa-times-circle cross"></i></a>
           </div>

           <div>
           <a href="<?php echo"edit_product.php?edit=".$clothes['cloth_id']?>"><i class="fas fa-edit edit"></i></a>
           </div>
           </div>

        </div>

       

    <?php
}
   ?>  

     
    </div>

</section>

<section id="pagi" class="section-p1">
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#"><i class="fal fa-long-arrow-alt-right"></i></a>

</section>


<section id="news-letter" class="section-p1 section-m1">
    <div class="newstext">
        <h4>Sign Up For Newletters</h4>
        <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
    </div>

    <div class="form">
        <input type="text" placeholder="Your E-mail address">
        <button class="normal">Sign Up</button>
    </div>

</section>


<footer class="section-p1">

    <div class="col">
            <img class="logo"src="./Downloads/img/logo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address:</strong> 562 Wellington Road, Street 32, San Francisco</p>
            <p><strong>Phone:</strong> +01 2222 365 / (+91) 01 2345 6789</p>
            <p><strong>Hours:</strong> 10:00 - 18:00, Mon - Sat</p>

            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
    </div>

    <div class="col">
        <h4>About</h4>
        <a href="#">About Us</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
        <a href="#">Contact Us</a>
    </div>

    <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign In</a>
        <a href="#">View Cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Track My Order</a>
        <a href="#">Help</a>
    </div>

    <div class="col install">
        <h4>Install App</h4>
        <p>From App Store or Google Play</p>
        <div class="row">
            <img src="./Downloads/pay/app.jpg" alt="">
            <img src="./Downloads/pay/play.jpg" alt="">
        </div>
        <p>Secured Payment Gateway</p>
        <img src="./Downloads/pay/pay.png" alt="">
    
    </div>
   
    <div class="copyright">
        <p>© 2023, Tech2 etc - HTML CSS Ecommerce Template</p>
    </div>
    
 
</footer>



    <script src="script.js"></script>

</body>
</html>