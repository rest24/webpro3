<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertemuan4 extends CI_Controller {

	public function index()
	{
		$this->load->view(('view4'));
	}

	public function aksi(){
		$pemesan=$_POST['nama'];
		$tiket=$_POST['kode'];
		$beli=$_POST['jumlah'];
		if($tiket=='A01'){
			$kereta='Brantas';
			$jurusan='SBY-JKT';
			$harga=290000;
		}else{
			$kereta='Argo Bromo';
			$jurusan='SBY-SMG';
			$harga=450000;
		}
		$total=$harga*$beli;
		echo "===========================<br>";
		echo "PEMESANAN TIKET KERETA<br>";
		echo "===========================<br>";
		echo "Nama Pemesan: ".$pemesan."<br>";
		echo "Kode Tiket  : ".$tiket."<br>";
		echo "Nama Kereta : ".$kereta."<br>";
		echo "Jurusan     : ".$jurusan."<br>";
		echo "Harga       : ".$harga."<br>";
		echo "Jumlah Beli : ".$beli."<br>";
		echo "===========================<br>";
		echo "Total Harga : ".$total."<br>";
		echo "<a href=".base_url()."pertemuan4>Kembali</a>";
	}
}