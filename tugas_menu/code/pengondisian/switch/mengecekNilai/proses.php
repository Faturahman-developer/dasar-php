<?php
$grade = $_POST ['grade'];

switch ($grade) {
    case 'A':
        echo "sangat baik";
        break;
    case 'B':
        echo "baik";
        break;
    case 'C':
        echo "cukup";
        break;

    default:
     echo "pilih nilai terlebih dahulu";
        break;
}
?>
<br>
<br><button class="kembali" onclick="window.history.back()">Kembali</button>