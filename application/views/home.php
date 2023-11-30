<table align="center" width="800px" border="0" cellspacing="3" cellpadding="3">
	<tr>
		<td height="125" align="center" bgcolor="#FFFFCC">
			<strong>Aplikasi Perpustakaan Online</strong>
		</td>
	</tr>
	<tr>
		<td bgcolor="#CCFFFF">
			<a href="<?php echo base_url().'home';?>">Beranda</a> | 
			<a href="<?php echo base_url().'petugas';?>">Data Petugas</a> | 
			<a href="<?php echo base_url().'buku';?>">Data Buku</a> | 
			<a href="<?php echo base_url().'anggota';?>">Data Anggota</a> | 
			Peminjaman | 
			Pengembalian | 
			Laporan
		</td>
	</tr>
	<tr>
		<td height="400px" align="justify" valign="top">
			<?php 
			if(!empty($konten)){
				$this->load->view($konten);
			}else{
				echo "Selamat datang, ";
			}
			?>
		</td>
	</tr>
	<tr>
		<td align="center" bgcolor="#FFFFCC">www.perpusonline.com</td>
	</tr>
</table>