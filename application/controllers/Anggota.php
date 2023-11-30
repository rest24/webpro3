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
		$data['konten']='viewanggota';
		$this->load->view('home',$data);
	}
	public function tambah()
	{
		//Perintah lempar data ke view
		$data['konten']='addanggota';
		$this->load->view('home',$data);
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
	 
	 public function hapus($id_anggota='')
	{
		$this->load->model('mdl_anggota');
		$where="id_anggota='".$id_anggota."'";
		
		$hapus=$this->mdl_anggota->deleteAnggota($where);
		redirect('anggota');
	}

	public function ubah($id_anggota='')
	{		
		//Perintah ambil model buku
		$this->load->model('mdl_anggota');
		$where="id_anggota='".$id_anggota."'";
		$data['anggota']=$this->mdl_anggota->findAnggota($where);
		
		//Perintah lempar data ke view
		$data['konten']='editanggota';
		$this->load->view('home',$data);
	}
	
	public function update($id_anggota='')
	{
		$this->load->model('mdl_anggota');
		$data=array(
			'user_anggota'=>$this->input->post('user'),
			'nama_anggota'=>$this->input->post('nama'),
			'pass_anggota'=>$this->input->post('password')
		);
		$where="id_anggota='".$id_anggota."'";
		
		$ubah=$this->mdl_anggota->updateAnggota($data,$where);
		
		redirect('anggota');
	}
}