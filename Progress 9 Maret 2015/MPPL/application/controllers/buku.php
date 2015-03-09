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
			$data['flag'] = 1;
			$this->load->view('tambahbuku',$data);
		}
		public function insert($NRP)
		{
			if ($_POST['Nama_Buku']==NULL and $_POST['Deskripsi']==NULL and $_POST['Tahun']==NULL and $_POST['Penerbit']==NULL and $_POST['Penulis']==NULL)
			{
				$data['flag']=0;
				$data['User']=$this->_buku->getUser($NRP);
				$this->load->view('tambahbuku',$data);
			}
			else
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
		}

		public function edit($NRP)
		{
			$data['User'] = $this->_buku->getUser($NRP);
			$this->load->view('editbuku',$data);
		}
		public function editbuku($NRP)
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
			$this->_buku->update($data);
			$ale['User'] = $this->_buku->getUser($NRP);
			$this->load->view('tambahbuku_result',$ale);
		}


		public function detailbuku($NRP,$ID_Buku)
		{
			$data['Mahasiswa'] = $this->_buku->getOneBuku($ID_Buku);
			$data['Other'] = $this->_buku->getUser($NRP);
			$data['ID_Buku'] = $ID_Buku;
			$this->load->view('buku_detail',$data);	
		}

	}
?>