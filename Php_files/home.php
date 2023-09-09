<!DOCTYPE html>
<html lang="en">
    <?php 
    session_start();
    // unset($_SESSION['cart']);
    // session_destroy();
    ?>
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
if(isset($_GET['prod'])){
       if($_GET['prod'] == "Success"){ ?>
            <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            <strong>Product has been added Successfully!</strong>
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
        <li><a class="active" href="home.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="Add_Prouct_Page.php">Add Product</a></li>
      <li><a href="cart.php"><i class="fal-solid fal fa-shopping-cart"></i> </a></li>
      <li><?php 
      if(isset($_SESSION['cart'])){
        echo count($_SESSION['cart']);
      }else{
        echo "0";
      }
      ?></li>
    </ul>
</div>


     </section>

<section id="Hero">
    <h4>Trade on Offer</h4>
    <h2>Super value deals</h2>
    <h1>On all products</h1>
    <p>Save more with coupons & up to 70% off !</p>
    <button>Shop Now</button>
</section>

    <section id="features" class="section-p1">
    <div class="fe-box">
        <img src="./Downloads/features/f1.png" alt="">
        <h6>Free Shipping</h6>
    </div>

    <div class="fe-box">
        <img src="./Downloads/features/f2.png" alt="">
        <h6>Online Order</h6>
    </div>

    <div class="fe-box">
        <img src="./Downloads/features/f3.png" alt="">
        <h6>Save Money</h6>
    </div>

    <div class="fe-box">
        <img src="./Downloads/features/f4.png" alt="">
        <h6>Promotions</h6>
    </div>

    <div class="fe-box">
        <img src="./Downloads/features/f5.png" alt="">
        <h6>Happy Sell</h6>
    </div>

    <div class="fe-box">
        <img src="./Downloads/features/f6.png" alt="">
        <h6>F24/7 Support</h6>
    </div>
</section>


<section id="Product-1" class="section-p1">
    <h2>Featured Products</h2>
    <p>Summer Collection New Morden Design</p>

    <div class="pro-container">
    <?php
 require('database.php');
   
 $mysqli = require __DIR__ . "/database.php";
 $query = "select * from clothes";
 $result = $mysqli->query($query);


//var_dump($_POST);


if (empty($_POST["add"]))  {
    //echo "Add Product to cart".$_POST["product_id"];
    if(isset($_SESSION['cart'])){
        //echo "Already cart has been created";
        $item_product_id = array_column($_SESSION['cart'],"product_id");
        if(in_array($_POST['product_id'],$item_product_id)){
           
        }else{
            $count =  count($_SESSION['cart']);
            echo "Length of the cart is ".$count;
            $item = array(
                'product_id' =>  $_POST["product_id"],
                'product_name' =>  $_POST["product_name"],
                'product_price' => $_POST["product_price"]
            );
    
            $_SESSION['cart'][$count] =  $item;
        }

    }else{
        $item = array(
            'product_id' =>  $_POST["product_id"],
            'product_name' =>  $_POST["product_name"],
            'product_price' => $_POST["product_price"]
        );

        $_SESSION['cart'][0] =  $item;

    }
}else{
    //echo "Error";
}

foreach($result as $clothes){
    // echo $user['name'].$user['email'];
    //var_dump($clothes);
    ?>
   
    <form action="home.php" method="post" novalidate>
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
                <input type="hidden" name="product_id" value="<?php echo $clothes['cloth_id']; ?>"></input>
                <input type="hidden" name="product_name" value="<?php echo $clothes['cloth_name']; ?>"></input>
                <input type="hidden" name="product_price" value="<?php echo $clothes['price']; ?>"></input>
                <button name="add">
                    <a href="#">
                    <i class="fal fa-shopping-cart cart"></i>
                    </a>
                </button>
        </div>
    </form>

    <?php
}

   ?>  

     
    </div>

</section>


<section id="banner" class="section-m1">
    <h4>Repair Services</h4>
    <h2>Up to <span>70% Off</span> - All t-shirts & Accessories</h2>
    <button class="normal">Explore More</button>

</section>

<section id="Product-1" class="section-p1">
    <h2>New Arrivals</h2>
    <p>Summer Collection New Morden Design</p>

    <div class="pro-container">
        <div class="pro">
            <img src="Downloads/products/n1.jpg" alt="">
            <div class="des">
                <span>addidas</span>
                <h5>Cartoon Astronaut T-Shirts</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
                
            </div>  
            <a href="#">
                <i class="fal fa-shopping-cart cart"></i>
            </a>          
        </div>

        <div class="pro">
            <img src="Downloads/products/n2.jpg" alt="">
            <div class="des">
                <span>addidas</span>
                <h5>Cartoon Astronaut T-Shirts</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
                <a href="#">
                    <i class="fal fa-shopping-cart cart"></i>
                </a>
            </div>            
        </div>

        <div class="pro">
            <img src="Downloads/products/n3.jpg" alt="">
            <div class="des">
                <span>addidas</span>
                <h5>Cartoon Astronaut T-Shirts</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
             
            </div>            
            <a href="#">
                <i class="fal fa-shopping-cart cart"></i>
            </a>
        </div>

        <div class="pro">
            <img src="Downloads/products/n4.jpg" alt="">
            <div class="des">
                <span>addidas</span>
                <h5>Cartoon Astronaut T-Shirts</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            
            </div> 
            
            <a href="#">
                <i class="fal fa-shopping-cart cart"></i>
            </a>
        </div>

        <div class="pro">
            <img src="Downloads/products/n5.jpg" alt="">
            <div class="des">
                <span>addidas</span>
                <h5>Cartoon Astronaut T-Shirts</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
                
            </div>  
            <a href="#">
                <i class="fal fa-shopping-cart cart"></i>
            </a>          
        </div>

        <div class="pro">
            <img src="Downloads/products/n6.jpg" alt="">
            <div class="des">
                <span>addidas</span>
                <h5>Cartoon Astronaut T-Shirts</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
               
            </div>  
            <a href="#">
                <i class="fal fa-shopping-cart cart"></i>
            </a>          
        </div>

        <div class="pro">
            <img src="Downloads/products/n7.jpg" alt="">
            <div class="des">
                <span>addidas</span>
                <h5>Cartoon Astronaut T-Shirts</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
               
            </div>  
            <a href="#">
                <i class="fal fa-shopping-cart cart"></i>
            </a>          
        </div>

        <div class="pro">
            <img src="Downloads/products/n8.jpg" alt="">
            <div class="des">
                <span>addidas</span>
                <h5>Cartoon Astronaut T-Shirts</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
              
            </div> 
            <a href="#">
                <i class="fal fa-shopping-cart cart"></i>
            </a>           
        </div>


    </div>

</section>

<section id="sm-banner" class="section-p1">
<div class="banner-box">
    <h4>crazy deals</h4>
    <h2>buy 1 get 1 free</h2>
    <span>The best classic dress is on salt at cara</span>
    <button class="white">Learn More</button>
</div>

<div class="banner-box banner-box2">
    <h4>spring/summer</h4>
    <h2>upcoming season</h2>
    <span>The best classic dress is on salt at cara</span>
    <button class="white">Collection</button>
</div>
</section>

<section id="banner3">
    <div class="banner-box">
        <h2>SEASONAL SALE</h2>
        <h3>Winter Collection -50% OFF</h3>
    </div>

    <div class="banner-box banner-box2">
        <h2>NEW FOOTWEAR COLLECTION</h2>
        <h3>Spring / Summer 2023</h3>
    </div>

    <div class="banner-box banner-box3">
        <h2>T-SHIRTS</h2>
        <h3>New Trendy Prints</h3>
    </div>

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