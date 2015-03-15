<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class search extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	} 
	public function profilbuku($NRP,$ID)
	{
		$this->load->model('profile');
		$data['User'] = $this->profile->getAll($NRP);
		$this->load->model('buku');
		$data['Detail'] = $this->buku->getAllID($ID);
		$this->load->view('profilbuku',$data);
	}
	public function klasifikasi($NRP,$kategori)
	{
		$this->load->model('profile');
		$data['User'] = $this->profile->getAll($NRP);
		$this->load->model('buku');
		$data['Buku']=$this->buku->getAll($kategori);
		$data['Kat']=$kategori;
		$this->load->view('klasifikasi',$data);
	}
	public function beranda($NRP)
	{
		$this->load->model('profile');
		$data['User'] = $this->profile->getAll($NRP);
		$this->load->view('beranda',$data);
	}
	
	public function cari($nrp)
	{
		$judul=$_POST['judul'];
		$pengarang=$_POST['pengarang'];
		if($_POST['tahun']!="")
			$tahun=$_POST['tahun'];
		else
			$tahun=0;
		$this->load->model('buku');
		$data['Buku']=$this->buku->getAlls($judul,$tahun,$pengarang);
		$this->load->model('profile');
		$data['User'] = $this->profile->getAll($nrp);
		$this->load->view('klasifikasi',$data);
	}

}
