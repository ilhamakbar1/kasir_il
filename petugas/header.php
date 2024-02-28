<?php
session_start();

// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['level'] == "") {
	header("location:../index.php?pesan=gagal");
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>Halaman Petugas</title>
	<link href="../assets/tu.jpg" rel="shortcut icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="datatebles/datatables.css">
	<script type="text/javascript" src="datatebles/datatables.js"></script>
</head>
<script type="text/javascript">
	$(document).ready(function() {
		$('#taruna').DataTable();
	});
</script>

<body>
	<div class="">
		<div class="content">