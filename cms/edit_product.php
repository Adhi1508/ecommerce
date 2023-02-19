<?php

//Include libraries
require __DIR__ . '/vendor/autoload.php';
    
//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->local;

//Extract the customer details 
$name= filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_STRING);
$quantity = filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_STRING);
$image = filter_input(INPUT_POST, 'image', FILTER_SANITIZE_STRING);
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);

//Criteria for finding document to replace
$replaceCriteria = [
    "_id" => new MongoDB\BSON\ObjectID($id)
];

//Data to replace
$customerData = [
    "Name" => $name,
    "Price" => $price,
    "Quantity" => $quantity,
    "Image" => $image
];

//Replace customer data for this ID
$updateRes = $db->product->replaceOne($replaceCriteria, $customerData);

//Echo result back to user
if($updateRes->getModifiedCount() == 1){
    $response = array('success' => true, 'message' => 'Product updated successfully.');
} else {
    $response = array('success' => false, 'message' => 'Error updating product.');
}

//Encode response as JSON
header('Content-Type: application/json');
echo json_encode($response);


