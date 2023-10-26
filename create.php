<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a product Page</title>

    <link rel="stylesheet" href="a3.css">
    
</head>
<body>
    <h1>Create a product</h1>
    <?php require_once("parts/functions.php");?>
    <form action="index.php" method="post">
        <div>
            <label >Product ID:</label>
            <input type="text" id="product-id" name="productID" >
        </div>
        <div>
            <label>Product Name:</label>
            <input type="text" id="product-name" name="productName">
        </div>
        <div>
            <label >Price:</label>
            <input type="text" id="product-price" name="productPrice">
        </div>
        <input type="submit" value="Submit">
    </form>

    <hr>
    <?php require_once("parts/sitemap.php") ?>
  </body>
</html>