<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Perulangan: For</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
    <h1 style="margin-bottom: 20px;">Perulangan: For</h1>
    <p>* for adalah salah satu struktur perulangan (loop) paling umum di PHP.
       Perulangan ini digunakan untuk menjalankan sebuah blok kode berulang kali, selama sebuah kondisi terpenuhi (perulangan dengan jumlah yang pasti)</p> <br>
    <b>Contoh deklarasi penggunaan For:</b><br>
    <code style="font-size: large;">
         declare(strict_types=1);  <br>
        //1. Hitung angka 1 - 5 <br>
        for($i = 1; $i <=5; $i++){ <br>
            echo "angka ke- $i";<br>
        }<br>
        <br>
        //2. Cetak String 5 kali <br>
         declare(strict_types=1);  <br>
        for ($i = 1; $i <= 5; $i++){ <br>
            echo "fatur"; <br>
        }<br>
    </code>
    <br>
    <b style="margin-top: 20px;">Coba contoh kasus for: </b>
    <a href="../code/pengulangan/for/form.php">(Pengulangan string)</a></P>
    <button class="kembali" onclick="window.history.back()">Kembali</button>
</body>
</html>
