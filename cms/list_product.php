<!-- PHP loads product information -->        
<?php

//Connect to MongoDB and select database
require __DIR__ . '/vendor/autoload.php';
$mongoClient = (new MongoDB\Client);
$db = $mongoClient->local;

//Find all products
$products = $db->product->find();

//Output results onto page
echo '<table>';
echo '<tr><th>ID</th><th>Product Name</th><th>Price(Rs)</th><th>Quantity</th><th>Image</th></tr>';
foreach ($products as $document) {
    echo '<tr>';
    echo '<td>' . $document["_id"] . "</td>";
    echo '<td>' . $document["Name"] . "</td>";
    echo '<td>' . $document["Price"] . "</td>";
    echo '<td>' . $document["Quantity"] . "</td>";
    echo '<td>' . $document["Image"] . "</td>";
    echo '</tr>';
}
echo '</table>';

?>