<?php 
session_start();
if (!isset($_SESSION['username'])){
	header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>TABEL BARANG</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<body>
	<div class="container col-md-10 mt-2">
		<h1>Tabel Barang</h1>
		<div class="card">
			<div class="card-header bg-success text-white ">
				DATA BARANG <a href="logout.php" class="btn btn-sm btn-primary float-right">Logout</a>
			</div>
			<div class="card-header bg-success text-white ">
				<a href="cetak.php" class="btn btn-sm btn-primary float-right">PRINT</a>
				<a href="tambah.php" class="btn btn-sm btn-primary float-left">Tambah</a>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Kode Barang</th>
							<th>Nama</th>
							<th>Harga</th>
							<th>Stok</th>
							<th>Aksi</th>
						</tr>
				    </thead>
				<tbody>
					
                        <?php
                            include('koneksi.php'); //memanggil file koneksi
                            $datas =mysqli_query($koneksi, "select * from tb_barang") or die(mysqli_connect_error($koneksi));//script untuk menampilkan data barang

                            $no = 1; //untuk pengurutan nomor

                            //melakukan perulangan
                            while($row = mysqli_fetch_assoc($datas)) {
                        ?>
                        
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $row['kode_barang']; ?></td>
						<td><?= $row['nama']; ?></td>
                        <td>Rp <?= $row['harga']; ?></td>
						<td><?= $row['stok']; ?></td>
                        <td>
								<a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
								<a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" 
								onclick="return confirm('anda yakin ingin hapus?');">Hapus</a>
						</td>
                    </tr>
                           <?php $no++; } ?>
                </tbody>
            </table>
		</div>
	</div>
</div>


<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>
