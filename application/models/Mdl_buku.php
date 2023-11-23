<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_buku extends CI_Model {

	public function getBuku(){
		$query=$this->db->get('buku');
		return $query->result();
	}
	public function findBuku($where=''){
		$this->db->where($where);
		$query=$this->db->get('buku');
		return $query->result();
	}
	public function insertBuku($data=''){
		$this->db->insert('buku',$data);
		return true;
	}
	public function updateBuku($data='',$where=''){
		$this->db->where($where);
		$this->db->update('buku',$data);
		return true;
	}
	public function deleteBuku($where=''){
		$this->db->where($where);
		$this->db->delete('buku');
		return true;
	}
}
