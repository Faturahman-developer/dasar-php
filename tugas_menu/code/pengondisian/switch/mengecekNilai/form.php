<html>
    <head>
        <title> cek nilai </title>
        <link rel="stylesheet" href="../../../../css/style.css" />
    </head>
    <body>
        <h4> Pengecekan Nilai </h4>
        <p>Jika  nilai A, maka sangat baik</p>
        <p>Jika  nilai B, maka baik</p>
        <p>Jika  nilai C, maka cukup</p><br>
        <form action="proses.php" method="post">
        pilih nilai : 
        <select name="grade">
            <option value="A">A</option>
            <option valu e="B">B</option>
            <option value="C">C</option>
        </select><br>
        <input type="submit" value="submit" style="margin-top: 10px;">
        </form>
        <button class="kembali" onclick="window.history.back()">Kembali</button>
    </body>
</html>