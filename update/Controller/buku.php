<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class buku extends CI_Controller 
	{
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
			$this->load->view('buku_daftar',$data);
		}

		public function tambah($NRP)
		{
			$data['User'] = $this->_buku->getUser($NRP);
			$this->load->view('tambahbuku',$data);
		}
		public function insert($NRP)
		{
			$data = array(
				'NRP' => $NRP, 
				'Nama_Buku' => $_POST['Nama_Buku'], 
				'Deskripsi' => $_POST['Deskripsi'], 
				'Tahun' => $_POST['Tahun'],
				'Penerbit' => $_POST['Penerbit'],
				'Kategori' => $_POST['optionsRadios'],
				'Penulis' => $_POST['Penulis'],
				'Status' => $_POST['Status'],
			);
			//var_dump($data);
			$this->_buku->insert($data);
			$ale['User'] = $this->_buku->getUser($NRP);
			$this->load->view('tambahbuku_result',$ale);
		}

		public function detailbuku($NRP)
		{
			$data['Mahasiswa'] = $this->_buku->getBuku($NRP);
			$data['Other'] = $this->_buku->getUser($NRP);
			$this->load->view('buku_detail',$data);	
		}

	}
?>