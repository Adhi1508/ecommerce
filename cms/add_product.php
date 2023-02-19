<?php

//Include libraries
require __DIR__ . '/vendor/autoload.php';
    
//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->local;

//Select a collection 
$collection = $db->product;

//Extract the data that was sent to the server
// $id= filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
$name= filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$price= filter_input(INPUT_POST, 'price', FILTER_SANITIZE_STRING);
$quantity = filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_STRING);
$image = filter_input(INPUT_POST, 'image', FILTER_SANITIZE_STRING);

//Convert to PHP array
$dataArray = [
    // "id" => $id, 
    "Name" => $name, 
    "Price" => $price,
    "Quantity" => $quantity,
    "Image" => $image
];

//Add the new product to the database
$insertResult = $collection->insertOne($dataArray);

//Check if the product was added successfully
if ($insertResult->getInsertedCount() === 1) {
  $response = [
    'status' => 'success',
    'message' => 'Product added successfully'
  ];
} else {
  $response = [
    'status' => 'error',
    'message' => 'Failed to add product'
  ];
}

//Encode the response as JSON and return it
echo json_encode($response);







