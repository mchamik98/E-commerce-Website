<?php

    //Connect to MongoDB and select database
    require __DIR__ . '/vendor/autoload.php';
    //Connect to database
    $mongoClient = (new MongoDB\Client);
    //Select database
    $db = $mongoClient->ecommerce;
    //Select a collection 
    $collection = $db->Orders;


    $total= filter_input(INPUT_POST, 'total', FILTER_SANITIZE_STRING);
    $prdtotal= filter_input(INPUT_POST, 'prdtotal', FILTER_SANITIZE_STRING);
    $date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
    $basket = filter_input(INPUT_POST, 'basket', FILTER_SANITIZE_STRING);


    session_start();

    if(array_key_exists("loggedInUserEmail", $_SESSION)){
        $email = $_SESSION["loggedInUserEmail"];

        $findCriteria = [
            "email" => $email
        ];
    }

    $customerArray = $db->Customers->find($findCriteria)->toArray();

    $customer = $customerArray[0];
    $custID = $customer['_id'];

    $productArray = [
        "custID" => $custID,
        "date" => $date,
        "products" => $basket,
        "productno" => $prdtotal,
        "total" => $total
    ];

    $checkValue = $collection -> insertOne($productArray);
	
        //Output message confirming registration
        echo 'Product added!';



?>