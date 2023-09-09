
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
        <li><a href="index.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a  href="blog.php">Blog</a></li>
        <li><a  href="about.php">About</a></li>
        <li><a  class="active" href="contact.php">Contact</a></li>
        <li><a href="Add_Prouct_Page.php">Add Product</a></li>
      <li><a href="cart.php"><i class="fal-solid fal fa-shopping-cart"></i> </a></li>
    </ul>
</div>


     </section>

<section id="page-header" class="about-header">
    <h2>#Let's_Talk</h2>
    <p>LEAVE A MESSAGE, We love to hear from you1</p>
</section>

<section id="contact-details" class="section-p1">

    <div class="details">
        <span>GET IN TOUCH</span>
        <h2>Visit one of our agecy locations or contact us today</h2>
        <h3>Head Office</h3>
       
        <div>
            <li>
                <i class="fal fa-map"></i>
                <p>56 Glassford Street Glassgow G1 1UL New York</p>
            </li>
            <li>
                <i class="far fa-envelope"></i>
                <p>contact@example.com</p>
            </li>
            <li>
                <i class="fas fa-phone-alt"></i>
                <p>contact@example.com</p>

            </li>
            <li>
                <i class="far fa-clock"></i>
                <p>Monday to Saturday: 9.00am to 16.00pm</p>
            </li>
        </div>
    </div>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2469.870223891961!2d-1.2570712!3d51.7536966!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876c6a9ef8c485b%3A0xd2ff1883a001afed!2sUniversity%20of%20Oxford!5e0!3m2!1sen!2sae!4v1686760785876!5m2!1sen!2sae" 
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</section>

<section id="form-details">
    <form action="">
        <span>LEAVE A MESSAGE</span>
        <h2>We love to hear from you</h2>
        <input type="text" placeholder="Your Name">
        <input type="text" placeholder="E-mail">
        <input type="text" placeholder="Subject">
        <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
        <button class="normal">Submit</button>
    </form>

    <div class="people">
        <div>
            <img src="./Downloads/people/1.png" alt="">
            <p><span>John Doe</span>Senior Marketing Manager <br>Phone: + 000 123 000 78 78 <br>E-mail: contact@example.com</p>
        </div>
        <div>
            <img src="./Downloads/people/2.png" alt="">
            <p><span>John Doe</span>Senior Marketing Manager <br>Phone: + 000 123 000 78 78 <br>E-mail: contact@example.com</p>
        </div>
        <div>
            <img src="./Downloads/people/3.png" alt="">
            <p><span>John Doe</span>Senior Marketing Manager <br>Phone: + 000 123 000 78 78 <br>E-mail: contact@example.com</p>
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



    <script src="script.js"></script>

</body>
</html>