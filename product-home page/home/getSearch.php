
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="basket.js"></script>
    <title>Home Page</title>
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
            
            <li class="cart"><a href="home.php"><i class="fa fa-shopping-cart"></i><span>Cart</span></a></li>

        </ul>
        <a>
    </nav>


    <?php

        //Include libraries
        require 'vendor/autoload.php';
    
        //Create instance of MongoDB client
        $mongoClient = (new MongoDB\Client);

        $db = $mongoClient->local;

        $collection = $db->product;

        $Search = filter_input(INPUT_POST, 'Search', FILTER_SANITIZE_STRING);

        //creating an array with our criteria

        $criteriaToFind = ["Name" => $Search];

        $resultArray = $collection->find($criteriaToFind)->toArray();

    

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
                
                echo '<div class="product-container">';
                echo'<div class="product">';
                echo'<h1> Search item </h1>';
                echo'<br>';
                echo'<img src="'.$Pimage.'" alt="Product 1">';
                echo'<p>'.$Pname.'</p>';
                echo'<p>Price:'.$Pprice.'</p>';
                echo'<p>Quantity:'.$Pquantity.'</p>';
                echo'<button onclick= \'addToBasket("' . $document["_id"] . '", "' . $document["Name"] . '","' . $document["Price"] . '")\' class="add-to-cart" data-product-id="1">Add to Cart</button>';
                echo'</div>';
                echo'</div>';
            } 
        }
    ?>
    <br>
    <hr>
    <div class="top-deals">
        <h2>Most popular</h2>
        <div class="product-container">




        <?php
        $filter = [];
        $options = ['sort' => ['Amountsold' => -1]];
        $result1Array = $collection->find($filter,$options)->toArray();
        $result2Array = array_slice($result1Array, 0, 3);
    
    
        foreach ($result2Array as $document) {
            $Pid = $document["_id"];
            $Pname = $document["Name"];
            $Pprice = $document["Price"];
            $Pquantity = $document["Quantity"];
            $Pimage = $document["Image"];
            $Pamount = $document["Amountsold"];
            echo'<div class="product">';
            echo'<img src="'.$Pimage.'" alt="Product 1">';
            echo'<p>'.$Pname.'</p>';
            echo'<p>Price:'.$Pprice.'</p>';
            echo'<p>Quantity:'.$Pquantity.'</p>';
            echo'<button onclick= \'addToBasket("' . $document["_id"] . '", "' . $document["Name"] . '","' . $document["Price"] . '")\' class="add-to-cart" data-product-id="1">Add to Cart</button>';
            echo'</div>';
            
        }
        ?>
    </div>