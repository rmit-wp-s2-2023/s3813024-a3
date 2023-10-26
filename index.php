<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <link rel="stylesheet" href="a3.css">
    
</head>
<body>
    
    <?php require_once("parts/functions.php");
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