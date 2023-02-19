<?php

//Include libraries
require __DIR__ . '/vendor/autoload.php';

//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->local;

//Select collections 
$productCollection = $db->product;

//Get category name strings - need to filter input to reduce chances of SQL injection etc.
$id= filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);

//Create a PHP array for portrait criteria
$findProductCriteria = [
    "_id" => new MongoDB\BSON\ObjectId($id)
];

//Find all of the category that match this criteria
$product = $productCollection->find($findProductCriteria);

//If product not found, return error message
if (!$product) {
    http_response_code(404);
    echo json_encode(['error' => 'Product not found']);
    exit();
}

//Create an array with the product data
$data = array(
    'id' => $product['_id'],
    'name' => $product['Name'],
    'price' => $product['Price'],
    'quantity' => $product['Quantity'],
    'image' => $product['Image']
);

//Output data as JSON
header('Content-Type: application/json');
$data1 = json_encode($data);
