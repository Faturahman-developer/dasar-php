<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Perulangan: While</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
    <h1 style="margin-bottom: 20px;">Perulangan: While</h1>
    <p>* while adalah salah satu struktur perulangan (loop) di PHP yang berfungsi untuk menjalankan
       sebuah blok kode berulang kali selama sebuah kondisi bernilai true (mengulang selama kondisi masih benar)</p> <br>
    <b>Contoh deklarasi penggunaan While:</b><br>
    <code style="font-size: large;">
        //1. Hitung mundur dari 5 ke 1 <br>
        declare(strict_types=1);  <br>
        $angka = 5;<br>
        while($angka > 0){
            echo "mundur: $angka"; <br>
        $angka--;<br>
        }<br>
        <br>
        //2. Mengisi bensin selama belum penuh <br>
         declare(strict_types=1);  <br>
        $isi = 0;<br>
        while($isi < 2 ){<br>
            echo "mengisi bensin ke- $sisi";<br>
            $isi++;<br>
        }<br>
    </code>
    <P style="margin-top: 20px;">Contoh kasus: <a href="../code/pengulangan/while/form.php">(Diskon Kupon)</a></P>
    <button class="kembali" onclick="window.history.back()">Kembali</button>
</body>
</html>
