<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_anggota extends CI_Model {

	public function getAnggota(){
		$query=$this->db->get('anggota');
		return $query->result();
	}
	public function insertAnggota($data=''){
		$this->db->insert('anggota',$data);
		return true;
	}
	// public function updateBuku($data='',$where=''){
	// 	$this->db->where($where);
	// 	$this->db->update('buku',$buku);
	// 	return true;
	// }
	// public function deleteBuku($where=''){
	// 	$this->db->where($where);
	// 	$this->db->delete('buku');
	// 	return true;
	// }
}
