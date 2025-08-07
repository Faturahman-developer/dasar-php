<?php
$makan = $_POST['jenis'];

echo $makan == "makan" ? "kenyang" : "lapar";
?>
<br>
<br>
<button class="kembali" onclick="window.history.back()">Kembali</button><br>