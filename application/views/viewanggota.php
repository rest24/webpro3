<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Anggota</title>
</head>
<body>
<a href="<?php echo base_url().'anggota/tambah';?>">Tambah Data</a>
	<table border='1'>
		<tr>
		<td>No</td>
		<td>User</td>
		<td>Nama</td>
		<td>Password</td>
		<td>Aksi</td>
	</tr>
	<?php
	if(!empty($anggota)){
		$no=1;
		foreach($anggota as $b){
			?>
		<tr>
			<td><?php echo $no++;?></td>
			<td><?php echo $b->user_anggota;?></td>
			<td><?php echo $b->nama_anggota;?></td>
			<td><?php echo $b->pass_anggota;?></td>
			<td></td>
		</tr>
		<?php
		}
	}
	?>
</table>
</body>
</html>