
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Home Page</title>
    <script src="basket.js"></script>
</head>

<body>
    <!-- Start of navigation bar -->
    <nav>
        <ul>
            <!-- Added the name of the website with a small icon -->
            <li class="cart"><a href="home.html"><i
                        class="fas fa-dumbbell"></i><span></span><span></span><span>FitFury</span></a></li>

            <!-- Added a search bar in the navigation bar -->
            <form class="search-form" action="getSearch.php" method="post">
                <input type="text" placeholder="Search for products" Name = "Search" id = "Search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>

            <!-- Added the anchor tags to navigate through the pages -->
            <li><a href="home.php">Home</a></li>
            <?php
                session_start();
                if (array_key_exists("username", $_SESSION) ) { 
                ?>
                <li><a id ="login/logout" href="../login_signup/logout.php">Logout</a></li> 

                <?php }

                else { ?>
                <li><a id ="login/logout" href="../login_signup/login.php">Login</a></li>
                <li><a href="../login_signup/Signup.php">SignUp</a></li> 
                <?php } 
            ?>
            <!-- <li><a id ="login/logout" href="../login_signup/login.php">Login</a></li> -->
            
            <li class="cart"><a href=#CartSec><i class="fa fa-shopping-cart"></i><span>Cart</span></a></li>

        </ul>
        <a>
    </nav>
    <!-- End of navigation bar -->

    <!-- Slideshow of two images -->
    <div class="slideshow-container">

        <!-- First Image of slideshow -->
        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="../images/gymcollection1.png" style="width:100%">
        </div>

        <!-- Second Image of slideshow -->
        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="../images/gymcollection2.png" style="width:100%">
        </div>

        <!-- Next and previous buttons to slide images-->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles at the bottom of the slideshow-->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
    </div>

    <!-- End of slideshow -->

    <!-- Start of displaying the products which can be added to cart -->

    <!-- Displaying a text on the website -->
    <div class="top-deals">
        <h2>Top deals</h2>
    </div>

    <div class="product-container">
    <!-- Displaying the products which are for sale -->
    <?php
    //Include libraries
    require 'vendor/autoload.php';

    //Create instance of MongoDB client
    $mongoClient = (new MongoDB\Client);

    $db = $mongoClient->local;

    $collection = $db->product;

    $resultArray = $collection->find()->toArray();

    if (count($resultArray) == 0) 
    {
        echo '<div class="product-container">';
        echo'<div class="product">';
        echo'<h1> Search item </h1>';
        echo'<br>';
        echo'<p id="NotFound" style="color:red">No matching product for '.$Search.'.</p>';
        echo'<p> Try another name </p>';
    }

    else 
    {
    foreach ($resultArray as $document) {
        $Pid = $document["_id"];
        $Pname = $document["Name"];
        $Pprice = $document["Price"];
        $Pquantity = $document["Quantity"];
        $Pimage = $document["Image"];
        
        echo'<div class="product">';
        echo'<img src="'.$Pimage.'" alt="Product 1">';
        echo'<p>'.$Pname.'</p>';
        echo'<p>Price:'.$Pprice.'</p>';
        echo'<p>Quantity:'.$Pquantity.'</p>';
        echo'<button onclick= \'addToBasket("' . $document["_id"] . '", "' . $document["Name"] . '","' . $document["Price"] . '")\' class="add-to-cart" data-product-id="1">Add to Cart</button>';
        echo'</div>';
        
    } 
    }

    ?>
    </div>
    <!-- End of displaying the products which can be added to cart -->


    <!-- Start of products already added to cart -->

    <!-- Displaying text on the website -->
    <div class="top-deals">
        <h2>Your Cart</h2>
    </div>

    <!-- Added a table for the cart -->
    <section id = CartSec>
        <div class="cart-container">
            <div id = "basketdiv"></div>
        
        </div>
    <section>
    <!-- End of products already added to cart -->


    <!-- Start of footer -->
    <footer>
        <p>Copyright © 2021 FitFury.com. All rights reserved.</p>

        <!-- Displaying social media icons -->
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
    </footer>
    <!-- End of footer -->
    
    <script src="home.js"></script>
    <script src="Scroll.js"></script>
</body>

</html>