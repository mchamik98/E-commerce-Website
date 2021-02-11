<?php


	$title = filter_input(INPUT_POST, '_title', FILTER_SANITIZE_STRING);
	$price = filter_input(INPUT_POST, '_price', FILTER_SANITIZE_STRING);
	$description = filter_input(INPUT_POST, '_description', FILTER_SANITIZE_STRING);
	$category = filter_input(INPUT_POST, '_category', FILTER_SANITIZE_STRING);
    $manufacturer = filter_input(INPUT_POST, '_manufacturer', FILTER_SANITIZE_STRING);
    $image = filter_input(INPUT_POST, '_image', FILTER_SANITIZE_STRING);
	
	if($title != "" && $price != "" && $description != "" && $category != "" && $manufacturer != "" && $image != ""){//Check query parameters
    //Connect to MongoDB and select database
    require __DIR__ . '/vendor/autoload.php';
    //Connect to database
    $mongoClient = (new MongoDB\Client);
    //Select database
    $db = $mongoClient->ecommerce;
    //Select a collection 
    $collection = $db->Products;

	$newProduct = [
		"Title" => $title,
		"Price" => $price,
		"Description" => $description,
		"Category" => $category,
        "Manufacturer" => $manufacturer,
        "Image" => $image,
	];

	$checkValue = $collection -> insertOne($newProduct);
	
        //Output message confirming registration
        echo 'Product added!';

    }

    else{//A query string parameter cannot be found
        echo 'Please enter all details!';
    }
?>	