<?php
include("operator.php");
$bil1= $_POST['bil1'];
$bil2= $_POST['bil2'];
$jenis= $_POST['jenis'];
switch ($jenis) {
    case 'tambah':
        tambah($bil1,$bil2);
        break;
    case 'kurang':
        kurang($bil1,$bil2);
        break;
    case 'kali':
        kali($bil1,$bil2);
        break;
    case 'bagi':
        bagi($bil1,$bil2);
        break;
    
    default:
        echo "pilihan tidak ada";
        break;
}
?>
<br>
<br><button class="kembali" onclick="window.history.back()">Kembali</button>