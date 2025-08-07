<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Modularisasi: Require</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
    <h1 style="margin-bottom: 20px;">Modularisasi: Require</h1>
    <p>* Modularisasi adalah praktik membagi kode program menjadi beberapa file terpisah yang lebih kecil
       (disebut modul). Setiap modul bertanggung jawab untuk tugas atau fungsionalitas tertentu.
       require adalah salah satu cara untuk melakukan modularisasi di PHP. Fungsinya adalah untuk menyertakan 
       (include) isi dari satu file PHP ke dalam file PHP lainnya.</p> <br>
    <b>Contoh deklarasi penggunaan require:</b> <br>
    <code style="font-size: large;">
        //1. Perkalian menggunakan function <br>
        //file: operasi.php <br>
        function kali($a, $b){<br>
            return $a * $b;<br>
        }<br>
        <br>
        //file utama.php<br>
        require ('operasi.php');<br>
        echo "hasil perkalian: " . kali(5,6);<br>

    </code> <br>
    <button class="kembali" onclick="window.history.back()">Kembali</button>
</body>
</html>
