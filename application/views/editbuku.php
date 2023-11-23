<form action="<?php echo base_url().'buku/update/'.$buku[0]->id_buku;?>" method="POST">
<table>
	<tr><td colspan="2">FORM UBAH BUKU</td></tr>
	<tr>
		<td>Kode Buku</td><td><input type="text" name="kode" value="<?php echo $buku[0]->kode;?>"></td>
	</tr>
	<tr>
		<td>Judul</td><td><input type="text" name="judul" value="<?php echo $buku[0]->judul;?>"></td>
	</tr>
	<tr>
		<td>Tahun</td><td><input type="text" name="tahun" value="<?php echo $buku[0]->tahun;?>"></td>
	</tr>
	<tr>
		<td>Stok</td><td><input type="number" name="stok" value="<?php echo $buku[0]->stok;?>"></td>
	</tr>
	<tr><td colspan="2"><input type="submit" value="Update"></td></tr>
</table>
</form>