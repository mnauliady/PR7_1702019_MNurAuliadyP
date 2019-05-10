<!DOCTYPE html>
<html>
<head>
	<title>Hasil Inner Join</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>/css/bootstrap.min.css" />
</head>
<body>
<div class="container">
<h2>Hasil Inner Join</h2>
<hr>
<table border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>Kode Kereta</th>
			<th>Nama Kereta</th>
			<th>Kode Gerbong</th>
			<th>Nama Gerbong</th>
			<th>Kode Kursi</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$no = 0;
		foreach ($krt as $key):
		$no++ ?>
			<tr>
				<td><?=$no?>
				<td><?=$key->kd_kereta?></td>
				<td><?=$key->nama_kereta?></td>
				<td><?=$key->kd_gerbong?></td>
				<td><?=$key->nama_gerbong?></td>
				<td><?=$key->kd_kursi?></td>
			</tr>
		<?php endforeach; ?>
	<tbody>
</table>
</div>
</body>
</html>