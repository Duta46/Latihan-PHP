<?php

$gender = "PRIA";
$hi = null;

if($gender == "PRIA"):
    $hi = "Hello Brother";
else:
    $hi = "Hello Sister";
endif;

echo $hi . PHP_EOL;