<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <link rel="stylesheet" href="a3.css">
    
</head>
<body>
    
    <?php
    
    // to show the handeled errors in case of invalid input.
    require_once("parts/functions.php");

    ########################### Making curl to consume json format and print it #############################################
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "https://titan.csit.rmit.edu.au/~e103884/wp/.services/.orders/");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($curl);
    curl_close($curl);
    echo "<h1>Orders</h1>";
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
   

    <hr>
    <?php require_once("parts/sitemap.php") ?>

    
  </body>
</html>