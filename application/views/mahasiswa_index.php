<!DOCTYPE html>
<html>
<head>
	<title>Kelompok A</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/
	bootstrap.min.css') ?>">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<a href="" class="navbar-brand">
			Tugas
		</a>
		<div class="navbar-nav">
			<a href="" class="nav-link active">Home</a>
			<a href="<?= site_url('CController/tambah') ?>" class="nav-link">Tambah Data</a>
		
		</div>

		<div class="navbar-nav ml-auto">
			<a href="" class="nav-link active">Sherly</a>
		
		</div>

	</nav>

	<div class="alert alert-success text-center mt-2">
		Data Mahasiswa
	</div>

	<div class="container">
	 <table class="table table-bordered table-sm">
	 	<tr>
	 		<th width="10%">No</th>
	 		<th>Id_024</th>
	 		<th>Jurusan</th>
	 		<th>Kelas</th>
	 		<th>Isi</th>
	 		
	 	</tr>
	 	<?php $no = 1; ?>
	 	<?php foreach ($data_tabel as $key): ?>

	 	<tr>
	 		<td><?= $no++ ?></td>
	 		<td><?= $key->id_024 ?></td>
	 		<td><?= $key->kolom_jurusan ?></td>
	 		<td><?= $key->kolom_kelas ?></td>
	 		<td><?= $key->kolom_isi ?></td>
	 		
	 	</tr>
	 	<?php endforeach ?>
	 </table> 
	</div>	

</body>
</html>