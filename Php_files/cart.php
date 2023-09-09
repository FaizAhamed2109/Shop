
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

    <section id="header">  
      <a href="#"><img src="Downloads/img/logo.png" class="logo" alt=""></a>
    

<div>
    <ul id="navbar">
        <li><a href="home.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a  href="blog.php">Blog</a></li>
        <li><a  href="about.php">About</a></li>
        <li><a  href="contact.php">Contact</a></li>
        <li><a href="Add_Prouct_Page.php">Add Product</a></li>
      <li><a  class="active" href="cart.php"><i class="fal-solid fal fa-shopping-cart"></i> </a></li>
    </ul>
</div>


     </section>

<section id="page-header" class="about-header">
    <h2>#Let's_Talk</h2>
    <p>LEAVE A MESSAGE, We love to hear from you1</p>
</section>

<section id="cart" class="section-p1">
    <table width="100%">
        <thead>
            <tr>
             <td>Remove</td>
             <td>Image</td>
             <td>Product</td>
             <td>Price</td>
             <td>Quantity</td>
             <td>Subtotal</td>
            </tr>
        </thead>


            <tbody>

            <?php
 require('database.php');
   session_start();
 $mysqli = require __DIR__ . "/database.php";
 $query = "select * from clothes";
 $result = $mysqli->query($query);

 if(isset($_GET['id'])){
    $id = $_GET['id'];
    echo "Id for the product is ".$id;
    // $query = "delete from clothes where id='$id'";
    // if($mysqli->query($query)){
    //     //echo Product has been deleted
    // }
    unset($_SESSION['cart'][$id]);
 }
$cart_list = $_SESSION['cart'];
$index =0;
foreach($cart_list as $clothes){
    // echo $user['name'].$user['email'];
    
    ?>

                <tr>
                 <td><a href="<?php echo "cart.php?id=$index"?>"><i class="far fa-times-circle"></i></a></td>
                 <td><img src="<?php echo "";?>" alt=""></td>
                 <td><?php echo $clothes['product_name']?></td>
                 <td><?php echo $clothes['product_price']?></td>
                 <td><input type="number" value="1"></td>
                 <td><?php echo $clothes['product_price']?></td>
                </tr>
              
                <?php
                $index++;
             }
                ?>
            </tbody>
    
    </table>

</section>

<section id="cart-add" class="section-p1">

    <div id="coupon">
        <h3>Apply Coupon</h3>
        <div>
            <input type="text" placeholder="Enter Your Coupon">
            <button class="normal">Apply</button>
        </div>
    </div>
    
    <div id="sub-total">
        <h3>Cart Total</h3>
        <table>
            <tr>
                <td>Cart Subtotal</td>
                <td>$ 335</td>
            </tr>

            <tr>
                <td>Shipping</td>
                <td>Free</td>
            </tr>
            
            <tr>
                <td><strong>Total</strong></td>
                <td><strong>$335</strong></td>
            </tr>

        </table>

        <button class="normal">Proceed To Checkout</button>

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

