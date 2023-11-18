<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

	public function index()
	{
		//Perintah koneksi database
		$this->load->database();
		
		//Perintah ambil model buku
		$this->load->model('mdl_petugas');
		$data['petugas']=$this->mdl_petugas->getPetugas();
		
		//Perintah lempar data ke view
		$this->load->view('viewpetugas',$data);
	}
	public function tambah()
	{
		//Perintah lempar data ke view
		$this->load->view('addpetugas');
	}
	public function simpan()
	{
		$this->load->model('mdl_petugas');
		$data=array(
			'user_petugas'=>$this->input->post('user'),
			'nama_petugas'=>$this->input->post('nama'),
			'pass_petugas'=>$this->input->post('password')
		);
		
		$proses=$this->mdl_petugas->insertPetugas($data);
		redirect('petugas');
	 }
	}