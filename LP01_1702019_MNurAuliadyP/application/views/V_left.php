<!DOCTYPE html>
<html>
<head>
	<title>Hasil Left Join</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>/css/bootstrap.min.css" />
</head>
<body>
<div class="container">
<h2>Hasil Left Join</h2>
<hr>
<table border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>Kode Kereta</th>
			<th>Nama Kereta</th>
			<th>Kode Kursi</th>
			<th>Kode Gerbong</th>
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
				<td><?=$key->nama?></td>
				<td><?=$key->kd_kursi?></td>
				<td><?=$key->kd_gerbong?></td>
			</tr>
		<?php endforeach; ?>
	<tbody>
</table>
</div>
</body>
</html>