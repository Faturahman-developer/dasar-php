<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/style.css" />
    <title>Penambahan</title>
</head>
<body>

<div class="container">
    <h1>If statement</h1>
    <p>Jika angka 1 lebih besar dari angka 2, maka angka 1 ditambah dengan angka 2</p>
    <form action="proses.php" method="post">
        angka 1 : <input type="number" name="bil1"><br>
        angka 2 : <input type="number" name="bil2"><br>
        <input type="submit" value="hitung" style="margin-top: 10px;">
        </form>
        <br>
    <button class="kembali" onclick="window.history.back()">Kembali</button>
</div>

</body>
</html>