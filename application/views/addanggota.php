<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Anggota</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			background-color: #f4f4f4;
		}
		form {
			background-color: #fff;
			padding: 20px;
			border-radius: 8px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}
		table {
			width: 100%;
		}
		td {
			padding: 8px;
		}
		input[type="text"],
		input[type="password"],
		input[type="submit"] {
			width: 100%;
			padding: 8px;
			margin-bottom: 10px;
			border-radius: 4px;
			border: 1px solid #ccc;
			box-sizing: border-box;
		}
		input[type="submit"] {
			background-color: #007bff;
			color: #fff;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: #0056b3;
		}
	</style>
</head>
<body>
<form action="<?php echo base_url().'anggota/simpan';?>" method="POST">
	<table>
		<tr><td colspan="2">FORM TAMBAH ANGGOTA</td></tr>
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