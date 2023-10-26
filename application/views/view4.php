<form action="<?php echo base_url().'pertemuan4/aksi';?>" method="POST">
========================<br>
PEMESANAN TIKET KERETA<br>
========================<br>
Nama Pemesan: <input type="text" name="nama"><br>
Kode Tiket  : <select name="kode">
              <option value="A01">A01</option>
			  <option value="A02">A02</option>
			  </select><br>
Jumlah beli  : <select name="jumlah">
			  <?php
			  for($x=1;$x<=4;$x++){
			  ?>
              <option value="<?php echo $x;?>"><?php echo $x;?></option>
			  <?php
			  }
			  ?>
			  </select><br>
========================<br>
<input type="submit" value="Proses">
</form>