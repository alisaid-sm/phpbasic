<?php 
function printSegitiga($int){
    if (is_numeric($int)) {
        for($i = 0; $i < $int; $i++){
            for($j = 1; $j <= ($int - $i); $j++){
                echo "$j ";
            };
            echo "\n";
        };
    } else {
        echo "Data Harus Number";
    }
};

printSegitiga(30);

