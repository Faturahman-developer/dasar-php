<?php
declare(strict_types = 1);
function totalakhir(int &$a,int &$b){
    $totalakhir = $a - $b;
    echo "total belanja anda setelah diskon rp $totalakhir";
}

function diskon10(int $a){
    return($a * 0.10);
}
function diskon20(int $a){
     return($a * 0.20);
}
function diskon30(int $a){
     return($a * 0.30);
}
function diskon40(int $a){
     return ($a * 0.40);
}

