<?php
    include 'koneksi.php'; //menghhubungkan ke file koneksi untuk ke database
    $id = $_GET['id']; //menghapus id

    //query hapus
    $datas = mysqli_query($koneksi, "delete from tb_barang where id ='$id'") or die(mysqli_connect_error($koneksi));

    //alert dan redirect ke index.php
    echo "<script>alert('data berhasil dihapus.');window.location='index.php';</script>";
