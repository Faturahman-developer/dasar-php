<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Pengkondisian: if Else</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
    <h1 style="margin-bottom: 20px;">Pengkondisian: if</h1>
    <p>* if...else adalah pernyataan bersyarat di PHP yang memungkinkan Anda untuk menjalankan satu blok kode jika suatu kondisi bernilai true (benar),
       dan menjalankan blok kode lain jika kondisi tersebut bernilai false (salah).</p> <br>
    <b>Contoh deklarasi penggunaan If Else :</b><br>
    <code style="font-size: large;">
        //persamaan hasil <br>
        declare(strict_types=1);  <br>
        $angka1 = (int)$_POST ["bil1"];<br>
        $angka2 = (int)$_POST ["bil2"];<br>

        if($angka1 == $angka2){ <br>
            echo "nilai sama";<br>
        }else{<br>
            echo "nilai berbeda";<br>
        }<br>
        <br>
        //persamaan hasil kali<br>
        declare(strict_types=1);  <br>
            $angka1 = (int)$_POST ["bil1"];<br>
        $angka2 = (int)$_POST ["bil2"];<br>

        if($angka1 ==  10){<br>
            echo $angka1 * $angka2;<br>
        }else{<br>
            echo $a + $b;<br>
        }<br>
    </code>
    <br>
    <b style="margin-top: 20px;">Coba contoh kasus: </b>
    <a style="margin-bottom: 0px;" href="../code/pengondisian/ifelse/persamaanHasil/form.php">(1.If Else Statement)</a></P>
    <a style="margin-top: 0px;"href="../code/pengondisian/ifelse/persamaanHasilKali/form.php">(2.If Else Statement)</a></P>
    
    <button class="kembali" onclick="window.history.back()">Kembali</button>
</body>
</html>
