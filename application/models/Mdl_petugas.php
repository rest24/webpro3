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
	public function findPetugas($where=''){
		$this->db->where($where);
		$query=$this->db->get('petugas');
		return $query->result();
	}
	public function updatePetugas($data='',$where=''){
		$this->db->where($where);
		$this->db->update('petugas',$data);
		return true;
	}
	public function deletePetugas($where=''){
		$this->db->where($where);
		$this->db->delete('petugas');
		return true;
	}
}
