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
		$data['konten']='viewbuku';
		$this->load->view('home',$data);
	}
	public function tambah()
	{
		//Perintah lempar data ke view
		$data['konten']='addbuku';
		$this->load->view('home',$data);
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
		
		$simpan=$this->mdl_buku->insertBuku($data);
		redirect('buku');
	}
	public function hapus($id_buku='')
	{
		$this->load->model('mdl_buku');
		$where="id_buku='".$id_buku."'";
		
		$hapus=$this->mdl_buku->deleteBuku($where);
		redirect('buku');
	}
	public function ubah($id_buku='')
	{		
		//Perintah ambil model buku
		$this->load->model('mdl_buku');
		$where="id_buku='".$id_buku."'";
		$data['buku']=$this->mdl_buku->findBuku($where);
		
		//Perintah lempar data ke view
		$data['konten']='editbuku';
		$this->load->view('home',$data);
	}
	public function update($id_buku='')
	{
		$this->load->model('mdl_buku');
		$data=array(
			'kode'=>$this->input->post('kode'),
			'judul'=>$this->input->post('judul'),
			'tahun'=>$this->input->post('tahun'),
			'stok'=>$this->input->post('stok')
		);
		$where="id_buku='".$id_buku."'";
		
		$ubah=$this->mdl_buku->updateBuku($data,$where);
		
		redirect('buku');
	}
}