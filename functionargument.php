<?php

function sum(int $firstnumber, int $lastnumber){
    $total = $firstnumber + $lastnumber;
    echo "Total penjumlahan dari $firstnumber + $lastnumber = $total" . PHP_EOL;
}

sum(100, 100);
sum("100", "100");
sum(true, false);
// sum([], []);


