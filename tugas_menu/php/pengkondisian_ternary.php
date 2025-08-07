<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Pengkondisian: Tenary Dan Short Tenary</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
    <h1 style="margin-bottom: 20px;">Pengkondisian: Tenary Dan Short Tenary</h1>
    <p>* Tenary (atau operator tenary) adalah cara singkat dan ringkas di PHP untuk
       menulis pernyataan if-else sederhana dalam satu baris dan dan short tenary penyederhanaan dari tenary (??)</p> <br>
    <p ><b>Contoh deklarasi penggunaan Tenary:</b></p>
    <code style="font-size: large;">
        //1. Sudah makan atau belum <br>
        declare(strict_types=1);  <br>
        $makan = "sudah"; <br>
        echo $makan == "sudah" ? "kenyang" : "lapar"; <br>
        <br>
        //2. Tambah atau kurang<br>
         declare(strict_types=1);  <br>
        $a = 10;<br>
        $b =5;<br>
        echo $a > $b ? $a + $b : $a - $b;<br>
        <br>
        //3. Dikalikan   <br>
         declare(strict_types=1);  <br>
        $a = 10;<br>
        $b = 5; <br>
        echo $a == $b ? $a * $b : 0;<br>
        <br>
        //4. Cek String <br>
         declare(strict_types=1);  <br>
        $nama = "fatur";<br>
        echo $nama == "fatur" ? "hallo fatur" : "halo, teman";<br>
    </code>
    <br>
    <p><b>Contoh penggunaan Short Tenary:</b></p><br>
    <code style="font-size: large;">
        //1. Jika kosong maka default<br>
         declare(strict_types=1);  <br>
        $nilai = 0;<br>
        $hasil = $nilai ?: 100 + 5;<br>
        <br>
        //2. Dikali dengan default jika variable tidak ada<br>
         declare(strict_types=1);  <br>
        $diskon;<br>
        $hasil = ($diskon ?? 10) * 2;<br>
        echo $hasil;<br>
        <br>
        //3. Dikali dengan nilai default jika kosong<br>
         declare(strict_types=1);  <br>
        $angka = 0;<br>
        $hasil = $angka ?: 50 - 10;<br>
        echo $hasil;<br>
        <br>
        //4. Dibagi dari input, Jika tidak null (ada)<br>
         declare(strict_types=1);  <br>
        $input = null;<br>
        $hasil = ($input ?? 100) / 2;<br>
        echo $hasil;<br>
        <br>
        //5. Kurangi nilai input, atau pakai default<br>
         declare(strict_types=1);  <br>
        $input = $_POST['jumlah'] ?? 20;<br>
        $hasil = $input - 5;<br>
        echo $hasil;<br>
    </code>
    <br>
    <b style="margin-top: 20px;">Coba contoh kasus tenary: </b>
    <a href="../code/pengondisian/tenary/cekMakan/form.php">(Cek makan)</a></P>
    <br>
    <b style="margin-top: 20px;">Coba contoh kasus short tenary: </b>
    <a href="../code/pengondisian/shortTenary/form.php">(Default)</a></P>

    <button class="kembali" onclick="window.history.back()">Kembali</button>
</body>
</html>