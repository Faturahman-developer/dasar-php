<html>
    <head>
        <title> Grade Nilai </title>
        <link rel="stylesheet" href="../../../../css/style.css" />
    </head>
    <body>
        <h4> Form Nilai </h4>
        <p>Jika angka lebih dari 90, maka grade nilai A</p>
        <p>Jika angka lebih dari 75, maka grade nilai B</p>
        <p>Jika angka lebih dari 60, maka grade nilai C</p>
        <p>Jika angka selain itu, maka grade nilai D</p><br>
        <form action="proses.php" method="post">
        Nilai : <input type="text" name="nilai"><br>
        <input type="submit" value="hitung " style="margin-top: 10px;">
        </form>
        <button class="kembali" onclick="window.history.back()">Kembali</button>
    </body>

</html>