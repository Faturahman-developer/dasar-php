<?php
        declare(strict_types = 1);
        $angka1 = (int)$_POST ["bil1"];
        $angka2 = (int)$_POST ["bil2"];

       if ($angka1 * $angka2 == 6) {
        echo "hasil benar";
       }elseif ($angka1 * $angka2 > 6) {
        echo "hasil lebih besar";
       }elseif ($angka1 * $angka2 < 6) {
        echo "lebih kecil";
       }
?>
<br>
<br><button class="kembali" onclick="window.history.back()">Kembali</button>