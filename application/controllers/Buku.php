<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	public function index()
	{
		//Perintah koneksi database
		$this->load->database();
		
		//Perintah ambil model buku
		$this->load->model('mdl_buku');
		$data['buku']=$this->mdl_buku->getbuku();
		
		//Perintah lempar data ke view
		$this->load->view('viewbuku',$data);
	}
	
}