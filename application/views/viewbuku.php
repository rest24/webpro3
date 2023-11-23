<a href="<?php echo base_url().'buku/tambah';?>">Tambah Data</a>
<table border='1'>
	<tr>
		<td>No</td>
		<td>Kode</td>
		<td>Judul</td>
		<td>Tahun</td>
		<td>Stok</td>
		<td>Aksi</td>
	</tr>
	<?php
	if(!empty($buku)){
		$no=1;
		foreach($buku as $b){
		?>
		<tr>
			<td><?php echo $no++;?></td>
			<td><?php echo $b->kode;?></td>
			<td><?php echo $b->judul;?></td>
			<td><?php echo $b->tahun;?></td>
			<td><?php echo $b->stok;?></td>
			<td>
 			<a href="<?php echo base_url().'buku/ubah/'.$b->id_buku;?>">Ubah</a> |
 			<a href="<?php echo base_url().'buku/hapus/'.$b->id_buku;?>">Hapus</a>
			</td>
		</tr>
		<?php
		}
	}
	?>
</table>