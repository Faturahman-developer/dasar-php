<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Pengkondisian: Match</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
    <h1 style="margin-bottom: 20px;">Pengkondisian: Match</h1>
    <p>* match adalah ekspresi percabangan baru yang diperkenalkan di PHP 8. 
       Ini adalah alternatif yang lebih modern dan ringkas dari pernyataan switch.</p> <br>
    <b>Contoh deklarasi penggunaan match:</b><br>
    <code style="font-size: large;">
        //1. Diskon Kupon <br>
        include("functiondis.php");<br>
        declare(strict_types=1);  <br>
        $diskon = (string)$_POST['diskon'];<br>
        $total = (int)$_POST['total'];<br>
        <br>
        $potongan = match ($diskon) {<br>
        "diskon10" => diskon10($total),<br>
        "diskon20" => diskon20($total),<br>
        "diskon30" => diskon30($total),<br>
        "diskon40" => diskon40($total),<br>
        default => 0<br>
        };<br>
        <br>
        totalakhir($total,$potongan);<br>
        <br>
        //2. kalkulator<br>
        declare(strict_types=1);  <br>
        include("functiondis.php");<br>
        $diskon = (string)$_POST['diskon'];<br>
        $total = (int)$_POST['total'];<br>
        <br>
        $potongan = match ($diskon) {<br>
        "diskon10" => diskon10($total),<br>
        "diskon20" => diskon20($total),<br>
        "diskon30" => diskon30($total),<br>
        "diskon40" => diskon40($total),<br>
        default => 0<br>
        };<br>
        <br>
        totalakhir($total,$potongan);<br>
    </code>
    <br>
    <b style="margin-top: 20px;">Contoh kasus:</b> 
    <a href="../code/pengondisian/match/diskonKupon/form.php">(Diskon Kupon)</a>
    <P ><a href="../code/pengondisian/match/kalkulator/form.php">(Kalkulator)</a></P>
    
    <button class="kembali" onclick="window.history.back()">Kembali</button>
</body>
</html>