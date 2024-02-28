<html>
<link href="../image/y.png" rel="shortcut icon">

<body>
	<style>
		body {
			margin: 0;
			padding: 0;
			background: url(../image/2k2k.jpg);
			background-size: cover;
			background-position: center;

		}
	</style>
</body>

</html>
<?php
include "header.php";
include "navbar.php";
?>

<div class="container" style="margin-top: 10rem;">
	<div class="">
		<div class="card-body">
			<div class="row">
				<div class="col-sm-6">
					<div class="card">
						<div class="card-body bg-danger text-white">
							<p style="font-size: 15px;"> <i class="fa-solid fa-list"> Data Barang</i></p>
							<?php
							include '../koneksi.php';
							$data_produk = mysqli_query($koneksi, "SELECT * FROM produk");
							$jumlah_produk = mysqli_num_rows($data_produk);
							?>
							<h3><?php echo $jumlah_produk; ?></h3>
							<a href="data_barang.php" class="btn btn-outline-primary text-white btn-sm">Detail</a>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="card">
						<div class="card-body bg-warning text-white">
							<p style="font-size: 15px;"> <i class="fa-solid fa-cart-shopping"> Data Pembelian</i></p>
							<?php
							include '../koneksi.php';
							$data_penjualan = mysqli_query($koneksi, "SELECT * FROM penjualan");
							$jumlah_penjualan = mysqli_num_rows($data_penjualan);
							?>
							<h3><?php echo $jumlah_penjualan; ?></h3>
							<a href="pembelian.php" class="btn btn-outline-danger text-white btn-sm">Detail</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class=" mt-5">
		<div class="row text-center">
			<p class=""></p>
		</div>
	</div>
</div>
<div style="margin-top:200px;">
	<?php
	include "footer.php";
	?>
</div>