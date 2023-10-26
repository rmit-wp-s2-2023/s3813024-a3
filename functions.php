<?php
$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "https://titan.csit.rmit.edu.au/~e103884/wp/.services/.orders/");

curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

$output = curl_exec($curl);

curl_close($curl);

$products = json_decode($output, true);
foreach ($products as $product){
    echo "product ID: " . $product['orderID'] . "<br>";
    echo "product Date: " . $product['orderDate'] . "<br>";
    echo "Customer Name: " . $product['customerName'] . "<br>";
    echo "Delivery Address: " . $product['deliveryAddress'] . "<br>";
    echo "Delivery Date: " . $product['deliveredDate'] . "<br>";
    echo "<br>";
}

?>