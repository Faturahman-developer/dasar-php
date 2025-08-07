<?php
        $angka1 = (int)$_POST ["bil1"] ;
        $angka2 = (int)$_POST ["bil2"] ;

        if($angka1 == $angka2){
            echo "nilai sama";
        }else{
            echo "nilai berbeda";
        }
?>
<br>
<br><button class="kembali" onclick="window.history.back()">Kembali</button>