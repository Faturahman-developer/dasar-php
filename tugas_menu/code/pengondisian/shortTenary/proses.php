<?php
$nilai = $_POST['angka'];
$hasil = $nilai ?: 100 + 5;
echo $hasil;
?>
<br>
<br>
<button class="kembali" onclick="window.history.back()">Kembali</button>