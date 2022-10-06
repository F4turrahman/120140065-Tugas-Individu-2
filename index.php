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
    <form method="GET" action="submit.php">
        <fieldset>
            <center><legend>Data Produk</legend></center>
            <table>
                <tr>
                    <td>ID Produk</td>
                    <td>: 
                        <input type="text" name ="id" id="id">
                    </td>
                </tr>
                <tr>
                    <td>Nama Produk</td>
                    <td>: 
                        <input type="text" name ="nama" id="nama">
                    </td>
                </tr>
            </table>
            <center><input type="submit"/></center>
        </fieldset>
    </form>
</body>
</html>