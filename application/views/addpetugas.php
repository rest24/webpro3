<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Petugas</title>
</head>
<body>
<form action="<?php echo base_url().'petugas/simpan';?>" method="POST">
	<table>
		<tr><td colspan="2">FORM TAMBAH PETUGAS</td></tr>
		<tr>
			<td>User</td><td><input type="text" name="user"></td>
		</tr>
		<tr>
			<td>Nama</td><td><input type="text" name="nama"></td>
		</tr>
	<tr>
		<td>Password</td><td><input type="password" name="password"></td>
	</tr>
	<tr><td colspan="2"><input type="submit" value="Simpan"></td></tr>
</table>
</form>
</body>
</html>