<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Pengkondisian: If Else If</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
    <h1 style="margin-bottom: 20px;">Pengkondisian: If Else If</h1>
    <p>* if...else if...else adalah pernyataan bersyarat
       di PHP yang memungkinkan Anda untuk memeriksa lebih dari satu kondisi.</p> <br>
    <b>Contoh deklarasi penggunaan If Else If:</b><br>
    <code style="font-size: large;">
        //1. Grade Nilai <br>
        declare(strict_types=1);  <br>
        $nilai= (int)$_POST['nilai'];<br>
        <br>
        if ($nilai >= 90) { <br>
            echo "Nilai anda A"; <br>
        }elseif ($nilai >= 75 ) { <br>
            echo "nilai anda B";<br>
        }elseif ($nilai >= 60) {<br>
            echo "nilai anda C";<br>
        }elseif ($nilai <= 60) {<br>
            echo "nilai anda D";<br>
        }else {<br>
            echo "nilai anda E";<br>
        }<br>
        <br>
        //2. Operasi Kali<br>
        declare(strict_types=1);  <br>
        $angka1 = (int)$_POST ["bil1"];<br>
        $angka2 = (int)$_POST ["bil2"];<br>
        <br>
       if ($angka1 * $angka2 == 6) {<br>
        echo "hasil benar";<br>
       }elseif ($angka1 * $angka2 > 6) {<br>
        echo "hasil lebih besar";<br>
       }elseif ($angka1 * $angka2 < 6) {<br>
        echo "lebih kecil";<br>
       }<br>
    </code>
    <br>
    <b style="margin-top: 20px;">Contoh kasus:</b><br>
    <a href="../code/pengondisian/ifelseif/gradeNilai/form.php">(Grade Nilai)</a>
    <P ><a href="../code/pengondisian/ifelseif/operasiKali/form.php">(Operasi Kali)</a></P>
    
    <button class="kembali" onclick="window.history.back()">Kembali</button>
</body>
</html>
