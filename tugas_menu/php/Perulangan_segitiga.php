<?php
 declare(strict_types=1); 
echo "1. bentuk segitiga siku siku sama kaki <br>";
echo "<br>";
$jumlah_baris = 4;
for ($i = 1; $i <= $jumlah_baris; $i++) { 
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
        }
        echo "<br>";
    }
    
    echo "<br>";
    
echo "2. bentuk segitiga";
echo "<br>";
echo "<br>";
$jumlah_baris = 3;


for ($i = 1; $i <= $jumlah_baris; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

$jumlah_baris = 3;
for ($i = $jumlah_baris - 1; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

echo "<br>";

echo "3. bentuk segitiga terbalik";
echo "<br>";
echo "<br>";
$jumlah_baris = 3;

echo "<pre>";

for ($i = 1; $i <= $jumlah_baris; $i++) {
    for ($j = $jumlah_baris; $j > $i; $j--) {
        echo " ";
    }
    
    for ($k = 1; $k <= $i; $k++) {
        echo "*";
    }
    
    echo "\n";
}

for ($i = $jumlah_baris- 1; $i >= 1; $i--) {
    for ($j = $jumlah_baris; $j > $i; $j--) {
        echo " ";
    }
    
    for ($k = 1; $k <= $i; $k++) {
        echo "*";
    }
    
    echo "\n";
}

echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
    <button class="kembali" onclick="window.history.back()">Kembali</button>
</body>
</html>

