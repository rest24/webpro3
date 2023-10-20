<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertemuan1 extends CI_Controller {

	public function index()
	{
		echo "Biodata<br>";
		echo"============<br>";
		echo"NIM     : 15210088 <br>";
		echo"Nama    : Restu Andryana <br>";
		echo"Jurusan : Ilmu Komputer <br>";
	}
	public function Segitiga()
	{
		$alas = 10;
		$tinggi = 15;
		$luas = $alas * $tinggi / 2 ;
		echo "Alas = ".$alas."<br>";
		echo "Tinggi = ".$tinggi."<br>";
		echo "Luas Segitiga Adalah ".$luas.".";
	}
}
