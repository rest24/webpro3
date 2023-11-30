<form action="<?php echo base_url().'anggota/update/'.$anggota[0]->id_anggota;?>" method="POST">
<table>
	<tr><td colspan="2">FORM UBAH ANGGOTA</td></tr>
	<tr>
		<td>User</td><td><input type="text" name="user" value="<?php echo $anggota[0]->user_anggota;?>"></td>
	</tr>
	<tr>
		<td>Nama</td><td><input type="text" name="nama" value="<?php echo $anggota[0]->nama_anggota;?>"></td>
	</tr>
	<tr>
		<td>Password</td><td><input type="text" name="password" value="<?php echo $anggota[0]->pass_anggota;?>"></td>
	</tr>
	<tr><td colspan="2"><input type="submit" value="Update"></td></tr>
</table>
</form>