<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertemuan3 extends CI_Controller {

	public function index()
	{
	  $nilai = 76;
	  if ($nilai>=80){
		$grade = 'A';
	  }else if ($nilai>=65){
		$grade = 'B';
	  }else if($nilai>=50){
		$grade = 'C';
	  }else{
		$grade = 'D';
	  }
	  $data['grade']=$grade;
	  $this->load->view('view3',$data);_
	}
}
