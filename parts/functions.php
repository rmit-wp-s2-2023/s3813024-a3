<?php
########################### Making curl to receive data orders #############################################
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://titan.csit.rmit.edu.au/~e103884/wp/.services/.orders/");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($curl);
curl_close($curl);



##################################### Server-Sider Validation ###############################################################


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // handling the posted inputs into variables
    $productID = $_POST["productID"];
    $productName = $_POST["productName"];
    $productPrice = $_POST["productPrice"];

    // an array that handle an error/errors from the input to validates the data.
    $errors = [];

    // Validating Product ID
    if (empty($productID) || !is_numeric($productID)) {
        $errors[] = "incorrect or invaild Product ID. !!!";
    }

    // Validating Product Name
    if (empty($productName)) {
        $errors[] = "Product Name cannot be left empty. !!!";
    }

    // Validating Product Price
    if (empty($productPrice) || !is_numeric($productPrice) || $productPrice < 1 || $productPrice > 1000) {
        $errors[] = "Invalid Product Price. !!!";
    }


    // now we chech, if $errors is empty then everything is correct and will print a massage indicated the data is correct
    if (empty($errors)) {

        echo "Product added successfully!";

    } 
    // in case we catch an error, the following condition will show all the errors
        else {
       
        foreach ($errors as $error) {
            echo "<p>" . htmlspecialchars($error) . "</p>";
        }
    }


}
?>