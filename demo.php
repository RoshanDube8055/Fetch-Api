<?php
// Define an array of fruits information
$fruits = [
    [
        "name" => "Apple",
        "color" => "Red",
        "taste" => "Sweet",
        "image" =>"apple.jpg",
    ],
    [
        "name" => "Banana",
        "color" => "Yellow",
        "taste" => "Sweet",
        "image" => "banana.jpg", // Ensure this path is correct
    ],
    [
        "name" => "Orange",
        "color" => "Orange",
        "taste" => "Citrus",
        "image" => "orange.jpg", // Added image path
    ],
    [
        "name" => "Grapes",
        "color" => "Purple",
        "taste" => "Sweet",
        "image" => "grephs.jpg", // Added image path
    ],
    [
        "name"=>"stobery",
        "color"=>"red",
        "tast"=>"sweet",
        "image"=>"stobery.webp",
    ]
];

// Set the Content-Type header to application/json
header('Content-Type: application/json');

// Output the JSON encoded data
echo json_encode($fruits);
?>
