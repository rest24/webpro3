<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_anggota extends CI_Model {

	public function getAnggota(){
		$query=$this->db->get('anggota');
		return $query->result();
	}
	public function findAnggota($where=''){
		$this->db->where($where);
		$query=$this->db->get('anggota');
		return $query->result();
	}
	public function insertAnggota($data=''){
		$this->db->insert('anggota',$data);
		return true;
	}
	public function updateAnggota($data='',$where=''){
	 	$this->db->where($where);
	 	$this->db->update('anggota',$data);
	 	return true;
	 }
	public function deleteAnggota($where=''){
	 	$this->db->where($where);
		$this->db->delete('anggota');
	 	return true;
	 }
}
