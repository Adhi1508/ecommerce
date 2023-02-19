<?php

//Include libraries
require __DIR__ . '/vendor/autoload.php';

//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->local;

//Extract ID from POST data
$prodID = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);

//Build PHP array with delete criteria 
$deleteCriteria = [
    "_id" => new MongoDB\BSON\ObjectID($prodID)
];

//Delete the product document
$deleteRes = $db->product->deleteOne($deleteCriteria);

//Echo result back to user
if($deleteRes->getDeletedCount() == 1){
    echo 'Customer deleted successfully.';
}
else{
   echo 'Error deleting customer';
}

