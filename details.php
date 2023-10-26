<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            echo "<title> Order #" . htmlspecialchars($id). "</title>";
        } else {
            echo "ERROR IN ID !!!.";
        }
        echo "<title>Order #". $id. "</title>";

    ?>

    
    <link rel="stylesheet" href="a3.css">
    
</head>
<body>
    
    <?php

    ########################### Making curl to consume json format and print it #############################################
    $curl = curl_init();
    $url = "https://titan.csit.rmit.edu.au/~e103884/wp/.services/.orders/?id=" . $id;

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($curl);
    curl_close($curl);
    echo "<h1>Order Details for Order#".$id. " </h1>";
    $product = json_decode($output, true);
    if ($id == 1000 ){
        echo "product ID: " . $product['orderID'] . "<br>";
        echo "product Date: " . $product['orderDate'] . "<br>";
        echo "Customer Name: " . $product['customerName'] . "<br>";
        echo "Delivery Address: " . $product['deliveryAddress'] . "<br>";
        echo "Delivery Date: " . $product['deliveredDate'] . "<br>";
        echo "products: <br>". "<ul>";
        echo "<li>Name: ".  $product["products"][0]["name"]. "</li>";
        echo "<li>price: ".  $product["products"][0]["price"]. "</li>";
        echo "<li>quantity: ". $product["products"][0]["quantity"]. "</li><br>";
        echo "<li>Name: ".  $product["products"][1]["name"]. "</li>";
        echo "<li>price: ".  $product["products"][1]["price"]. "</li>";
        echo "<li>quantity: ". $product["products"][1]["quantity"]. "</li>";
        echo "<br>";
    }

    elseif ($id == 2000){

        echo "product ID: " . $product['orderID'] . "<br>";
        echo "product Date: " . $product['orderDate'] . "<br>";
        echo "Customer Name: " . $product['customerName'] . "<br>";
        echo "Delivery Address: " . $product['deliveryAddress'] . "<br>";
        echo "Delivery Date: " . $product['deliveredDate'] . "<br>";
        echo "products: <br>". "<ul>";
        echo "<li>Name: ".  $product["products"][0]["name"]. "</li>";
        echo "<li>price: ".  $product["products"][0]["price"]. "</li>";
        echo "<li>quantity: ". $product["products"][0]["quantity"]. "</li><br>";
        echo "<br>";

    }

    elseif ($id == 3000){

        echo "product ID: " . $product['orderID'] . "<br>";
        echo "product Date: " . $product['orderDate'] . "<br>";
        echo "Customer Name: " . $product['customerName'] . "<br>";
        echo "Delivery Address: " . $product['deliveryAddress'] . "<br>";
        echo "Delivery Date: " . $product['deliveredDate'] . "<br>";
        echo "products: <br>". "<ul>";
        echo "<li>Name: ".  $product["products"][0]["name"]. "</li>";
        echo "<li>price: ".  $product["products"][0]["price"]. "</li>";
        echo "<li>quantity: ". $product["products"][0]["quantity"]. "</li><br>";
        echo "<li>Name: ".  $product["products"][1]["name"]. "</li>";
        echo "<li>price: ".  $product["products"][1]["price"]. "</li>";
        echo "<li>quantity: ". $product["products"][1]["quantity"]. "</li><br>";
        echo "<li>Name: ".  $product["products"][2]["name"]. "</li>";
        echo "<li>price: ".  $product["products"][2]["price"]. "</li>";
        echo "<li>quantity: ". $product["products"][2]["quantity"]. "</li><br>";
        echo "<br>";
    }

    else{
        echo "Wrong ID input !!!";
    }

    
    ?>
   

    <hr>
    <?php require_once("parts/sitemap.php") ?>

    
  </body>
</html>