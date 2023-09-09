<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            background-color:black;
            color:purple;
        }
        .red{
            color:red;
        }
        .blue{
            color:blue;
        }

        
 .pro-container{
    display: flex;
    justify-content: space-between;
    padding-top: 20px;
    flex-wrap: wrap;
  }

 .pro-container .pro{
    width: 23%;
    min-width: 250px;
    padding: 10px 12px;
    border: 1px solid #cce7d0;
    border-radius: 25px;
    cursor: pointer;
    box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.02);
    margin: 15px 0;
    transition:  .2s ease;
    position: relative;
  
  }

    </style>
</head>
<body>
 
<div class="pro-container">
<?php
 require('database.php');
   
 $mysqli = require __DIR__ . "/database.php";
 $query = "select * from user";
 $result = $mysqli->query($query);

foreach($result as $user){
    // echo $user['name'].$user['email'];

    ?>
   

   <div class="pro">
            <img src="Downloads/products/f2.jpg" alt="">
            <div class="des">
                <span><?php echo $user['email'] ?></span>
                <h5><?php echo $user['name']?></h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4><?php echo "trial period" ?></h4>
               
            </div>   
            <a href="#">
                <i class="fal fa-shopping-cart cart"></i>
            </a>
        </div>

    <?php
}

   ?>  
</div>

</body>
</html>