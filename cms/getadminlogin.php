<?php

    session_start();

    require 'vendor/autoload.php';
    
    //Create instance of MongoDB client
    $mongoClient = (new MongoDB\Client);

    //Select a database
    $db = $mongoClient->local;

    //Select a collection 
    $collection = $db->staff;

    //Get email and password strings - need to filter input to reduce chances of SQL injection etc.
    $username= filter_input(INPUT_POST, 'uname', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);

    //creating an array with our criteria

    $criteriaToFind = ["Username" => $username];

    $resultArray = $collection->find($criteriaToFind)->toArray();

    //Check if account exist
    if (count($resultArray) == 0) 
    {
        echo '<script>alert("Invalid Account. Please input again!");</script>';
        echo '<script>window.location.href="login.php";</script>';
        return;
    } 

    else if (count($resultArray) > 1) 
    {
        echo '<script>alert("Database error: Multiple user have the same Username. Please input again!");</script>';
        echo '<script>window.location.href="./login.php";</script>';
        return;
    }

    else
    {
        //Get customer and check password
        $admin = $resultArray[0];
        if ($admin['Password'] != $password)
        {
            echo '<script>alert("Incorrect password.");</script>';
            echo '<script>window.location.href="./login.php";</script>';
            return;
        }
        else
        {
            //Start session for this user
            $_SESSION['username'] = $username;
    
            //Inform web page that login is successful
            echo '<script>alert("Successfully logged in");</script>';
            echo '<script>window.location.href="cms.php";</script>';
            
        }
    }
   