<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

	public function index()
	{
		//Perintah koneksi database
		$this->load->database();
		
		//Perintah ambil model buku
		$this->load->model('mdl_anggota');
		$data['anggota']=$this->mdl_anggota->getAnggota();
		
		//Perintah lempar data ke view
		$this->load->view('viewanggota',$data);
	}
	public function tambah()
	{
		//Perintah lempar data ke view
		$this->load->view('addanggota');
	}
	public function simpan()
	{
		$this->load->model('mdl_anggota');
		$data=array(
			'user_anggota'=>$this->input->post('user'),
			'nama_anggota'=>$this->input->post('nama'),
			'pass_anggota'=>$this->input->post('password')
		);
		
		$proses=$this->mdl_anggota->insertAnggota($data);
		redirect('anggota');
	 }
	}