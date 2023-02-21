<?php

//Connect to MongoDB and select database
require __DIR__ . '/vendor/autoload.php';
$mongoClient = (new MongoDB\Client);
$db = $mongoClient->ecommerce;

//Find all orders
$orders = $db->order->find();

//Output results onto page
echo '<table>';
echo '<tr><th>OrderID</th><th>Username</th><th>Product</th><th>Price(Rs)</th></tr>';
foreach ($orders as $document) {
    echo '<tr>';
    echo '<td>' . $document["_id"] . "</td>";
    echo '<td>' . $document["Username"] . "</td>";
    echo '<td>' . $document["ProductName"] . "</td>";
    echo '<td>' . $document["Price"] . "</td>";
    echo '</tr>';
}
echo '</table>';

?>