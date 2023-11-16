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
	public function tambah()
	{
		//Perintah lempar data ke view
		$this->load->view('addbuku');
	}
	public function simpan()
	{
		$this->load->model('mdl_buku');
		$data=array(
			'kode'=>$this->input->post('kode'),
			'judul'=>$this->input->post('judul'),
			'tahun'=>$this->input->post('tahun'),
			'stok'=>$this->input->post('stok')
		);
		
		$proses=$this->mdl_buku->insertBuku($data);
		redirect('buku');
	}
}