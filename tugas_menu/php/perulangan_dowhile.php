<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Perulangan: Do While</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
    <h1 style="margin-bottom: 20px;">Perulangan: Do While</h1>
    <p>* while adalah salah satu struktur perulangan (loop) di PHP yang berfungsi untuk menjalankan
       sebuah blok kode berulang kali selama sebuah kondisi bernilai true (mengulang selama kondisi masih benar)</p> <br>
    <b>Contoh deklarasi penggunaan Do While:</b><br>
    <code style="font-size: large;">
        //1. login <br>
         declare(strict_types=1);  <br>
        $loginberhasil = false;<br>
        $percobaan = 1;<br>
        do{<br>
            echo "percobaan login ke- $percobaan";<br>
            $percobaan++;<br>
            <br>
            if($percobaan > 2){<br>
                $loginberhasil = true;<br>
            }<br>
        }while (!$loginberhasil);<br>
        <br>
        //2. Menampilkan angka genap <br>
         declare(strict_types=1);  <br>
        $angka = 2;<br>
        do{<br>
            echo "angka genap : $angka";<br>
            $angka += 2;<br>
        }while ($angka <= 10);<br>
    </code> <br>
    <button class="kembali" onclick="window.history.back()">Kembali</button>
</body>
</html>
