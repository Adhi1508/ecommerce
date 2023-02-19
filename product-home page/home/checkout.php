<?php

session_start();

//Find out if session exists
if (array_key_exists("username", $_SESSION) )
{
    $Username = $_SESSION["username"];
    //Extract the product IDs that were sent to the server 
    $prodIDs = $_POST['prodIDs'];

    //Convert JSON string to PHP array
    $productArray = json_decode($prodIDs, true);

    //Output the IDs of the products that the customer has ordered 
    echo '<h1>Products Sent to Server</h1>';
    for($i=0; $i<count($productArray); $i++)
    {
        
        $productName = $productArray[$i]['name'];
        $productPrice = $productArray[$i]['price'];
        echo '<p>Username: '. $Username . 'Product ID: ' . $productArray[$i]['id'] . '  Name:' . $productArray[$i]['name'] . '  Price:' . $productArray[$i]['price'] . '</p>';

    
        //Include libraries
        require 'vendor/autoload.php';
    
        //Create instance of MongoDB client
        $mongoClient = (new MongoDB\Client);

        $db = $mongoClient->local;

        $collection = $db->order;

        

        $dataArray = [
        "Username" => $Username,
        "ProductName" => $productName,
        "Price" => $productPrice,
        ];

    $insertResult = $collection->insertOne($dataArray);

    if($insertResult->getInsertedCount()!=1){
        echo '<script>alert("Error adding order");</script>';
        echo '<script>window.location.href="home.php";</script>';
        
    } 
    else
    {
        echo'<script src="..\home\basket.js"></script>';
        echo '<script>emptyBasket()</script>';
        echo '<script>alert("Order Successfully Added")</script>';
        echo '<script>window.location.href="home.php";</script>';
    }

    }
}
else 
{
    echo '<script>alert("Login First.");</script>';
    echo '<script>window.location.href="../login_signup/login.php";</script>';
}


?>

