<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Modularisasi: Include</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
    <h1 style="margin-bottom: 20px;">Modularisasi: include</h1>
    <p>* Tentu, berikut penjelasan singkat tentang include di PHP.Penjelasan Singkat tentang include di PHP
    include adalah salah satu cara di PHP untuk menyertakan (menambah) isi dari sebuah
    file ke dalam file lain. Sama seperti require, include digunakan untuk modularisasi kode</p> <br>
    <b>Contoh deklarasi penggunaan Include:</b><br>
    <code style="font-size: large;">
        //1. Memunculkan function string <br>
        //file: pesan.php <br>
        echo "selamat datang direstoran kami";<br>
        <br>
        //file utama.php<br>
        include ('pesan.php');<br>

    </code><br>
    <button class="kembali" onclick="window.history.back()">Kembali</button>
</body>
</html>
