<?php
declare(strict_types = 1);
$nilai= (string)$_POST['nilai'];

if ($nilai >= 90) {
    echo "Nilai anda A";
}elseif ($nilai >= 75 ) {
    echo "nilai anda B";
}elseif ($nilai >= 60) {
    echo "nilai anda C";
}elseif ($nilai <= 60) {
    echo "nilai anda D";
}else {
    echo "nilai anda E";
}
?>
<br>
<br><button class="kembali" onclick="window.history.back()">Kembali</button>