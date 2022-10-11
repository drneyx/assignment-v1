<?php

if(isset($_POST['submit'])){

    // Get data from the form
    $sku = $_POST['sku'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $productType = $_POST['productType'];

    $size = $_POST['size'];
    $weight = $_POST['weight'];
    $length = $_POST['length'];
    $width = $_POST['width'];
    $height = $_POST['height'];

    // Instantiate SignUpControl class
    include "../classes/dbh.class.php";
    include "../classes/product.class.php";
    include "../classes/productcontr.class.php";

    $product = new SignUpContr($user, $email, $password, $password2);

    $product->signUpUser();

    header("location: ../index.php?error=none");


}