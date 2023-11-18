<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_petugas extends CI_Model {

	public function getPetugas(){
		$query=$this->db->get('petugas');
		return $query->result();
	}
	public function insertPetugas($data=''){
		$this->db->insert('petugas',$data);
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
