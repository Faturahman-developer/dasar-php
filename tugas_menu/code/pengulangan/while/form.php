    <head>
        <title> Form Operator </title>
        <link rel="stylesheet" href="../../../css/style.css" />
    </head>
    <body>
        <h4>Operator Kalkulator </h4>
        <p>Kalkulator sederhana penambahan, pengurangan, perkalian, pembagian</p><br>
        
        <form action="proses.php" method="post">
        Isi bensin : 
        <select name="isi" >
            <option value="satu">1</option>
            <option value="dua">2</option>
            <option value="tiga">3</option>
            <option value="empat">4</option>
        </select><br>
        <input type="submit" value="hitung" style="margin-top: 10px;">
        </form>
        <button class="kembali" onclick="window.history.back()">Kembali</button>
    </body>
</html>