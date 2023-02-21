<?php

$names = ["Duta", "Alif", "Gunawan"];

for($i = 0; $i < count($names); $i++){
    echo "Hello $names[$i]". PHP_EOL;
}

//Menggunakan foreach
foreach($names as $name){
    echo "hello $name" .PHP_EOL;
}

//foreach dengan key
$person = [
    "first_name" => "Duta",
    "middle_name" => "Alif",
    "last_name" => "Gunawan"
];
foreach($person as $key => $value){
    echo "$key : $value" . PHP_EOL;
}
