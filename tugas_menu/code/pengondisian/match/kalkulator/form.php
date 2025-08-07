<html>
    <head>
        <title> form operator </title>
        <link rel="stylesheet" href="../../../../css/style.css" />
    </head>
    <body>
        <h4> Operator Kalkulator </h4>
        <p>Kalkulator sederhana penambahan, perkalian, pembagian dan pengurangan.</p><br>
        <form action="proses.php" method="post">
        bilangan 1 : <input type="text" name="bil1"><br>
        bilangan 2 : <input type="text" name="bil2"><br>
        pilih proses : 
        <select name="jenis" >
            <option value="+">tambah</option>
            <option value="-">kurang</option>
            <option value="*">kali</option>
            <option value="/">bagi</option>
        </select><br>
        <input type="submit" value="hitung" style="margin-top: 10px;">
        </form>
        <button class="kembali" onclick="window.history.back()">Kembali</button>
    </body>
</html>