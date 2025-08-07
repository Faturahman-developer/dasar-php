<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Pengkondisian: Switch</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
    <h1 style="margin-bottom: 20px;">Pengkondisian: Switch</h1>
    <p>* switch adalah struktur kontrol yang digunakan di PHP untuk menjalankan
       blok kode yang berbeda berdasarkan nilai dari sebuah variabel atau ekspresi.</p> <br>
    <b>Contoh deklarasi penggunaan Switch:</b><br>
    <code style="font-size: large;">
        //1. Mengecek Nilai <br>
        declare(strict_types=1);  <br>
        $grade = (string)$_POST ['grade'];<br>
        <br>
        switch ($grade) {<br>
        case 'A':<br>
        echo "sangat baik";<br>
        break;<br>
        case 'B':<br>
        echo "baik";<br>
        break;<br>
        case 'C':<br>
        echo "cukup";<br>
        break;<br>
        <br>
        default:<br>
        echo "pilih nilai terlebih dahulu";<br>
        break;<br>
        }<br>
        <br>
        //2. Operator<br>
        declare(strict_types=1);  <br>
        include("operator.php");<br>
        $bil1= (int)$_POST['bil1'];<br>
        $bil2= (int)$_POST['bil2'];<br>
        $jenis= (string)$_POST['jenis'];<br>
        <br>
        switch ($jenis) {<br>
        case 'tambah':<br>
        tambah($bil1,$bil2);<br>
        break;<br>
        case 'kurang':<br>
        kurang($bil1,$bil2);<br>
        break;<br>
        case 'kali':<br>
        kali($bil1,$bil2);<br>
        break;<br>
        case 'bagi':<br>
        bagi($bil1,$bil2);<br>
        break;<br>
        <br>
        default:<br>
        echo "pilihan tidak ada";<br>
        break;<br>
        }<br>
    </code>
    <br>
    <b style="margin-top: 20px;">Contoh kasus:</b>
    <a href="../code/pengondisian/switch/mengecekNilai/form.php">(Mengecek Nilai)</a>
    <P ><a href="../code/pengondisian/switch/operator/form.php">(Operator)</a></P>
    
    <button class="kembali" onclick="window.history.back()">Kembali</button>
</body>
</html>