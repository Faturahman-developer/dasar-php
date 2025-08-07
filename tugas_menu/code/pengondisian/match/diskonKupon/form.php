<html>
    <head>
        <title> form diskon </title>
        <link rel="stylesheet" href="../../../../css/style.css" />
    </head>
    <body>
        <h4> Diskon Kupon </h4>
        <p>Jika diskon10, maka potongan 10%</p>
        <p>Jika diskon20, maka potongan 20%</p>
        <p>Jika diskon30, maka potongan 30%</p>
        <p>Jika diskon40, maka potongan 40%</p><br>
        <form action="proses.php" method="post">
        total belanja : <input type="number" name="total"><br>
        pilih kode kupon : 
        <select name="diskon" >
            <option value="diskon10">diskon 10</option>
            <option value="diskon20">diskon 20</option>
            <option value="diskon30">diskon 30</option>
            <option value="diskon40">diskon 40</option>
        </select><br>
        <input type="submit" value="hitung " style="margin-top: 10px;">
        </form>
        <button class="kembali" onclick="window.history.back()">Kembali</button>
    </body>

</html>