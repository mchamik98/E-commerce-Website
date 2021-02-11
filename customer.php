<?php

    //Connect to MongoDB and select database
    require __DIR__ . '/vendor/autoload.php';
    //Connect to database
    $mongoClient = (new MongoDB\Client);
    //Select database
    $db = $mongoClient->ecommerce;
    //Select a collection 
    $collection = $db->Customers;

    //Start session management
    session_start();

    //Extract logged in user data
    $usrEmail = $_SESSION["loggedInUserEmail"];

    //Create a PHP array with the search criteria
    $findCriteria = [
    "email" => $usrEmail, 
    ];

    $cursor = $db->Customers->findOne($findCriteria);

    echo json_encode($cursor);


?>