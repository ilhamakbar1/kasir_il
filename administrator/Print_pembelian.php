<html>
<link href="../image/y.png" rel="shortcut icon">

<head>
    <title>Print Laporan penjualan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../assets/tu.jpg" rel="shortcut icon">
</head>

<body onload="window.print()">
    <center>
        <h3 style="font-family: times new roman;">Laporan Penjualan</h3>
    </center>
    <hr>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>ID Pelanggan</th>
                <th>Nama Pelanggan</th>
                <th>No. Telepon</th>
                <th>Alamat</th>
                <th>Total Pembayaran</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include '../koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM pelanggan INNER JOIN penjualan ON pelanggan.PelangganID=penjualan.PelangganID");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['PelangganID']; ?></td>
                    <td><?php echo $d['NamaPelanggan']; ?></td>
                    <td><?php echo $d['NomorTelepon']; ?></td>
                    <td><?php echo $d['Alamat']; ?></td>
                    <td>Rp. <?php echo number_format($d['TotalHarga'], 0, ',', '.') ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="mt-10">
        <div class="">
            <h6 style="margin-top: 50px;  margin-left: 500px">Pariaman,
                <script>
                    var today = new Date();
                    var dd = String(today.getDate()).padStart(2, '0');
                    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                    var yyyy = today.getFullYear();

                    today = dd + '-' + mm + '-' + yyyy;
                    document.write(today);
                </script>
            </h6>
            <h6 style="margin-left: 500px">Kepala Toko,</h6>
            <h6 style="margin-top: 60px;  margin-left: 500px">ILHAM AKBAR WAHYUDI</h6>

            <script type="text/javascript">
                window.print();
            </script>
        </div>
    </div>
</body>

</html>