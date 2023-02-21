<?php

$nilai = 20;
$absen = 50;

if($nilai >= 80 && $absen >= 80){
    echo "Selamat anda mendapatkan nilai A". PHP_EOL;
}else if($nilai >= 60 && $absen >= 60){
    echo "Selamat anda mendapatkan nilai B". PHP_EOL;
}else if($nilai >= 40 && $absen >= 40){
    echo "Selamat anda mendapatkan nilai C". PHP_EOL;
}else{
    echo "Anda tidak lulus". PHP_EOL;
}

//if statement dengan colon

if($nilai >= 80 && $absen >= 80):
    echo "Selamat anda mendapatkan nilai A". PHP_EOL;
elseif($nilai >= 60 && $absen >= 60):
    echo "Selamat anda mendapatkan nilai B". PHP_EOL;
elseif($nilai >= 40 && $absen >= 40):
    echo "Selamat anda mendapatkan nilai C". PHP_EOL;
else:
    echo "Anda tidak lulus". PHP_EOL;

endif;  
