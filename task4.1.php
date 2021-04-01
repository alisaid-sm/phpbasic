<?php 

$data = [
    "id" => 1,
    "name" => "Miftakh Ali Said",
    "username" => "ali",
    "email" => "alisaid7170@gmail.com",
    "address" => [
        "street" => "Jl. Combongan",
        "suite" => null,
        "city" => "Bantul",
        "zipcode" => null
    ],
    "phone" => "089688621331",
    "website" => null
];

[$strt, $city] = [$data["address"]["street"], $data["address"]["city"]];

echo "Street : $strt </br>";
echo "City : $city";