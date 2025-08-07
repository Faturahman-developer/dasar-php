<html>
    <head>
        <title> Cek Makan </title>
        <link rel="stylesheet" href="../../../../css/style.css" />
    </head>
    <body>
        <h4>Cek makan </h4>
        <p>Jika sudah, maka kenyang</p>
        <p>Jika belum, maka lapar</p><br>
        
        <form action="proses.php" method="post">
        <select name="jenis" >
            <option value="sudah">sudah</option>
            <option value="belum">Belum</option>
        </select><br>
        <input type="submit" value="submit" style="margin-top: 10px;">
        </form>
        <button class="kembali" onclick="window.history.back()">Kembali</button>
    </body>
</html>