<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class buku extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
			$this->load->model('_buku');
		} 
		public function daftarbuku($NRP)
		{
			$data['Mahasiswa'] = $this->_buku->getBuku($NRP);
			$data['Other'] = $this->_buku->getUser($NRP);
			//var_dump($data);
			$this->load->view('buku_detail',$data);
		}
	}
?>