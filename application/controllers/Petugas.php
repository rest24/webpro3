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

	public function hapus($id_petugas='')
	{
		$this->load->model('mdl_petugas');
		$where="id_petugas='".$id_petugas."'";
		
		$hapus=$this->mdl_petugas->deletePetugas($where);
		redirect('petugas');
	}
	
	public function ubah($id_petugas='')
	{		
		//Perintah ambil model petugas
		$this->load->model('mdl_petugas');
		$where="id_petugas='".$id_petugas."'";
		$data['petugas']=$this->mdl_petugas->findPetugas($where);
		
		//Perintah lempar data ke view
		$this->load->view('editpetugas',$data);
	}
	public function update($id_petugas='')
	{
		$this->load->model('mdl_petugas');
		$data=array(
			'user_petugas'=>$this->input->post('user_petugas'),
			'nama_petugas'=>$this->input->post('nama_petugas'),
			'pass_petugas'=>$this->input->post('pass_petugas')
		);
		$where="id_petugas='".$id_petugas."'";
		
		$ubah=$this->mdl_petugas->updatePetugas($data,$where);
		
		redirect('petugas');
	}
	}