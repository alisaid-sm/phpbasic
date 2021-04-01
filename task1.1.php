<?php 

$biodata = [
    "name" => "Miftakh Ali Said",
    "age" => 18,
    "hobbies" => ['musik', 'film'],
    "IsMaried" => false,
    "schoolList" => [
        [
        "name" => "SMK N 3 YK",
        "yearIn" => 2017,
        "yearOut" => 2020,
        "major" => "TKJ"
        ],[
        "name" => "SMP N 1 Pleret",
        "yearIn" => 2014,
        "yearOut" => 2017,
        "major" => null
        ]
    ],
    "skills" => [
        [
        "skillName" => "VueJS",
        "level" => "advanced"
        ],
        [
        "skillName" => "NodeJS",
        "level" => "advanced"
        ]
    ],
    "interestInCoding" => true
];

var_dump($biodata);