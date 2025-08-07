<?php
        $angka1 = (int)$_POST ["bil1"];
        $angka2 = (int)$_POST ["bil2"];

        if($angka1 ==  10){
            echo $angka1 * $angka2;
        }else{
            echo $angka1 + $angka2;
        }
?>

<br>
<br><button class="kembali" onclick="window.history.back()">Kembali</button>