<?php
include("functiondis.php");
$diskon = $_POST['diskon'];
$total = $_POST['total'];
$diskon = $_POST['diskon'];

$potongan = match ($diskon) {
    "diskon10" => diskon10($total),
    "diskon20" => diskon20($total),
    "diskon30" => diskon30($total),
    "diskon40" => diskon40($total),
    default => 0
};

totalakhir($total,$potongan);
?>
<br>
<br><button class="kembali" onclick="window.history.back()">Kembali</button>