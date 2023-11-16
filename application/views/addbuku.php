<form action="<?php echo base_url().'buku/simpan';?>" method="POST">
<table>
	<tr><td colspan="2">FORM TAMBAH BUKU</td></tr>
	<tr>
		<td>Kode Buku</td><td><input type="text" name="kode"></td>
	</tr>
	<tr>
		<td>Judul</td><td><input type="text" name="judul"></td>
	</tr>
	<tr>
		<td>Tahun</td><td><input type="text" name="tahun"></td>
	</tr>
	<tr>
		<td>Stok</td><td><input type="number" name="stok"></td>
	</tr>
	<tr><td colspan="2"><input type="submit" value="Simpan"></td></tr>
</table>
</form>