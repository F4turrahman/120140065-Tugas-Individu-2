<?php
$nama = $_GET['nama'];
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post">
        <center><h1>Detail Produk</h1></center>
        <table>
            <tr>
                <td>ID Produk</td>
                <td>: <?php echo $id; ?></td>
            </tr>
            <tr>
                <td>Nama Produk</td>
                <td>: <?php echo $nama; ?></td>
            </tr>
        </table>
    </form>
</body>
</html>