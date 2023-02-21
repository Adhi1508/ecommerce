<?php
    
    //Include libraries
    require 'vendor/autoload.php';
    
    //Create instance of MongoDB client
    $mongoClient = (new MongoDB\Client);

    $db = $mongoClient->ecommerce;

    $collection = $db->customer;

    //Get strings - need to filter input to reduce chances of SQL injection etc.
    $firstname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
    $lastname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING); 
    $username = filter_input(INPUT_POST, 'uname', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);
    $Cpassword = filter_input(INPUT_POST, 'cpass', FILTER_SANITIZE_STRING);

    $dataArray = [
        "Firstname" => $firstname,
        "Lastname" => $lastname,
        "Username" => $username,
        "Password" => $password,
    ];

    $insertResult = $collection->insertOne($dataArray);

    if($insertResult->getInsertedCount()!=1){
        echo '<script>alert("Error adding customer");</script>';
        echo '<script>window.location.href="./SignUp.php";</script>';
        
    } 
    else
    {
        echo '<script>alert("Successfully Added")</script>';
        echo '<script>window.location.href="./index.php";</script>';
    }

?>




    
   