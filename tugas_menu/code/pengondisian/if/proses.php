<?php
    declare(strict_types = 1);
        $angka1 = (int)$_POST ["bil1"];
        $angka2 = (int)$_POST ["bil2"];

        if($angka1 > $angka2){
            echo $angka1 + $angka2;
        }
?>
<br>
<br><button class="kembali" onclick="window.history.back()">Kembali</button>