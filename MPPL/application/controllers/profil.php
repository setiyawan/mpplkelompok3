<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class profil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('profile');
	} 
	public function beranda($NRP)
	{
		$data['User'] = $this->profile->getAll($NRP);
		// var_dump($data['User'][0]);
		if($data['User'][0]->StatusUser == 1)
			$this->load->view('beranda',$data);
		elseif($data['User'][0]->StatusUser == 2) 
			$this->load->view('beranda_admin',$data);
	}
	public function index($NRP)
	{
		$data['Mahasiswa'] = $this->profile->getAll($NRP);
		if($data['Mahasiswa'][0]->StatusUser == 1)
			$this->load->view('profil',$data);
		elseif($data['Mahasiswa'][0]->StatusUser == 2)
			$this->load->view('profil_admin',$data);
	}
	public function editprofile($NRP)
	{
		$data['Mahasiswa'] = $this->profile->getAll($NRP);
		$this->load->view('editprofile',$data);
		
	}
	public function ubah ($NRP)
	{
		$ala = array(
				   'NamaUser' => $_POST['Nama'],
				   'Pekerjaan' => $_POST['Pekerjaan'],
				   'NoTelp' => $_POST['HP'],
				   'Alamat' => $_POST['Alamat'],
				);
		//var_dump($ala);
		$this->profile->update($NRP,$ala);
		$data['Mahasiswa'] = $this->profile->getAll($NRP);
		if($data['Mahasiswa'][0]->StatusUser == 1)
			$this->load->view('profil',$data);
		elseif($data['Mahasiswa'][0]->StatusUser == 2)
			$this->load->view('profil_admin',$data);
	}

	public function daftarbuku($NRP)
	{
		$data['Mahasiswa'] = $this->profile->getBuku($NRP);
		$this->load->view('buku_detail',$data);
	}
}