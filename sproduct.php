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
        <li><a class="active" href="shop.php">Shop</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="Add_Prouct_Page.php">Add Product</a></li>
      <li><a href="cart.php"><i class="fal-solid fal fa-shopping-cart"></i> </a></li>
    </ul>
</div>


     </section>

     <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="./Downloads/products/f1.jpg" width="100%" id="Mainimg" alt="">
            <div class="small-image-group">
                <div class="sm-img-col">
                    <img src="./Downloads/products/f1.jpg" width="100%" class="smimg" alt="">
                </div>
                <div class="sm-img-col">
                    <img src="./Downloads/products/f2.jpg" width="100%" class="smimg" alt="">
                </div>
                <div class="sm-img-col">
                    <img src="./Downloads/products/f3.jpg" width="100%" class="smimg" alt="">
                </div>
                <div class="sm-img-col">
                    <img src="./Downloads/products/f4.jpg" width="100%" class="smimg" alt="">
                </div>
                
            </div>
        </div>

        <div class="single-pro-details">
            <h6>Home / T-Shirts</h6>
            <h4>Men's Fashion T-Shirts</h4>
            <h2>$139</h2>
            <select> 
                <option>Select Size</option>
                <option>XL</option>
                <option>XXL</option>
                <option>Small</option>
                <option>Large</option>
                </select>

                <input type="number" value="1">
                <button class="normal">Add to Cart</button>
                <h4>Product Details</h4>
                <span>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.  
                </span>
        </div>
     </section>

     <section id="Product-1" class="section-p1">
        <h2>Featured Products</h2>
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


    <script>
        var Mainimg = document.getElementById("Mainimg");
        var smimg = document.getElementsByClassName("smimg");

        smimg[0].onclick = function(){
            Mainimg.src = smimg[0].src;
        }

        
        smimg[1].onclick = function(){
            Mainimg.src = smimg[1].src;
        }

        
        smimg[2].onclick = function(){
            Mainimg.src = smimg[2].src;
        }

        
        smimg[3].onclick = function(){
            Mainimg.src = smimg[3].src;
        }

    </script>
    <script src="script.js"></script>

</body>
</html>