<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan3 extends CI_Controller {

	public function index()
	{
		$alas = 25;
		$tinggi = 45;
		$luas = $alas * $tinggi / 2 ;_
	$data['luas']=$luas;
	$this->load->view('Latihan3',$data);
	}
}
