<?php 

$array1 = [
    "fruits" => [
      "apple",
      "manggo",
      "pineapple"
    ],
    "hobbies" => [
      "football",
      "swiming",
      "basketball"
    ]
  ];

foreach($array1 as $value){
    for($i = 0; $i < count($value); $i++){
        echo $value[$i];
    }
}
?>