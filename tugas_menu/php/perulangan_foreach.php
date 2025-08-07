<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Perulangan: Forech</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
    <h1 style="margin-bottom: 20px;">Perulangan: Foreach</h1>
    <p>* foreach adalah struktur perulangan di PHP yang dirancang
       khusus untuk mengiterasi elemen-elemen dalam sebuah array atau objek.</p> <br>
    <b>Contoh deklarasi penggunaan Foreach:</b><br>
    <code style="font-size: large;">
        //1. Memunculkan Array Belanja <br>
         declare(strict_types=1);  <br>
       $belanja["beras", "gula", "telor"]{<br>
       foreach($belanja as $item);<br>
       echo "beli: $item";<br>
       } <br>
        <br>
        //2. Menampilkan Nama Siswa <br>
         declare(strict_types=1);  <br>
        $siswa["fatur", "rahman", "firzzy"]{<br>
            foreach($siswa as $nama);<br>
            echo "nama: $nama";<br>
        }<br>
    </code> <br>
    <button class="kembali" onclick="window.history.back()">Kembali</button>
</body>
</html>
