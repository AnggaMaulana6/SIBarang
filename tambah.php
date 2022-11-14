<!DOCTYPE html>
<html>

<head>
	<title>inventori Barang</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<body>
	<div class="container col-md-6 mt-4">
		<h1>Tabel Barang</h1>
		<div class="card">
			<div class="card-header bg-success text-white">
				Tambah Barang
			</div>
			<div class="card-body">
				<form action="" method="post" role="form">
					<div class="form-group">
						<label>Kode Barang</label>
						<input type="text" name="kode_barang" required="" class="form-control">
					</div>
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="nama" required="" class="form-control">
					</div>
					<div class="form-group">
						<label>Harga</label>
						<input type="text" name="harga" required="" class="form-control">
					</div>
					<div class="form-group">
						<label>Stok</label>
						<input type="text" name="stok" required="" class="form-control">
					</div>

					<button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button>
				</form>

				<?php
				include('koneksi.php');
				
				//melakukan pengecekan jika button submit diklik maka akan menjalankan perintah simpan dibawah ini
				if (isset($_POST['submit'])) {
					//menampung data dari inputan
					$kode = $_POST['kode_barang'];
					$nama = $_POST['nama'];
					$harga = $_POST['harga'];
					$stok = $_POST['stok'];

					//query untuk menambahkan barang ke database, pastikan urutan nya sama dengan di database
					$datas = mysqli_query($koneksi, "insert into tb_barang (kode_barang,nama,harga,stok)
								values('$kode', '$nama', '$harga', '$stok')") or die(mysqli_error($koneksi));
					//id barang tidak dimasukkan, karena sudah menggunakan AUTO_INCREMENT, id akan otomatis

					//ini untuk menampilkan alert berhasil dan redirect ke halaman index
					echo "<script>alert('data berhasil disimpan.');window.location='index.php';</script>";
				}
				?>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>