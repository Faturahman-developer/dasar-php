<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Function</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
    <h1 style="margin-bottom: 20px;">Function</h1>
    <p style="margin-bottom: 0px;">* function input ($a) Pass by Value (Salin Nilai)
    Nilai yang dikirim ke fungsi hanya disalin
    Perubahan dalam fungsi tidak mempengaruhi variabel asli</p> <br>
    <p style="margin-top: 0px;">* function output (&$a) Pass by Reference (Referensi ke Asli)
    Nilai yang dikirim ke fungsi adalah alamat asli variabel
    Perubahan di dalam fungsi akan mempengaruhi variabel asli</p> <br>
    <b>Contoh deklarasi function input :</b><br>
    <code style="font-size: large;">
        declare(strict_types=1);  <br>
        function ubah( int $a) { <br>
        $a = $a * 2;<br>
        }<br>
        <br>
        $x = 10;<br>
        ubah($x);<br>
        echo $x; // Hasil: 10 tidak berubah<br>

        </code>
        <br>
        <br>
        <b>Contoh deklarasi function output :</b><br>
        <code style="font-size: large;">
            declare(strict_types=1);  <br>
            function ubah_lagi(int &$a) { <br>
            $a = $a * 2;<br>
            }<br>
            <br>
            $x = 10;<br>
            ubah_lagi($x);<br>
            echo $x; // Hasil: 20 berubah<br>
            <br>
            </code>
            <br>
    <button class="kembali" onclick="window.history.back()">Kembali</button>
</body>
</html>
