<?php
include 'koneksi.php';

$datas = mysqli_query($koneksi, "SELECT * FROM tb_barang");

$p = mysqli_fetch_object($datas);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stok Barang</title>
    <link rel="stylesheet" type="text/css" href="css/sytle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">

        <script>
           window.print() 
        </script>

</head>
<body>
<h2>Buti Data Barang</h2>
<table class="table-data" border="0">
    <tr>
        <td>Kode Barang</td>
        <td>:</td>
        <td><?php echo $p->kode_barang ?></td>
    </tr>
    <tr>
        <td>Nama Barang</td>
        <td>:</td>
        <td><?php echo $p->nama ?></td>
    </tr>
    <tr>
        <td>Harga</td>
        <td>:</td>
        <td><?php echo $p->harga ?></td>
    </tr>
    <tr>
        <td>Stok Barang</td>
        <td>:</td>
        <td><?php echo $p->stok ?></td>
    </tr>
</table>
</body>
</html>