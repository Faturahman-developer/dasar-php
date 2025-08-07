<?php
include("function.php");
$bil1= $_POST['bil1'];
$bil2= $_POST['bil2'];
$jenis= $_POST['jenis'];

$hasil = match ($jenis) {
    "+" => tambah($bil1, $bil2),
    "-" => kurang($bil1, $bil2),
    "*" => kali($bil1, $bil2),
    "/" => bagi($bil1, $bil2),
};
?>
<br>
<br><button class="kembali" onclick="window.history.back()">Kembali</button>