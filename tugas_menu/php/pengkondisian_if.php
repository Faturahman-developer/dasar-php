<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Pengkondisian: if</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
    <h1 style="margin-bottom: 20px;">Pengkondisian: if</h1>
    <p>* If adalah pernyataan bersyarat yang digunakan untuk menjalankan blok kode hanya jika suatu kondisi tertentu bernilai benar (true).</p> <br>
    <b>Contoh deklarasi penggunaan If :</b><br>
    <code style="font-size: large;">
        declare(strict_types=1);  <br>
        $angka1 = (int)$_POST ["bil1"]; <br>
        $angka2 = (int)$_POST ["bil2"]; <br>

        if($angka1 > $angka2){ <br>
            echo $angka1 + $angka2; <br>
        }
    </code>
    <br>
    <br>
    <b style="margin-top: 20px;">Coba contoh kasus: </b>
    <a href="../code/pengondisian/if/form.php">(If Statement)</a>
    <br>
    <button class="kembali" onclick="window.history.back()">Kembali</button>
</body>
</html>
