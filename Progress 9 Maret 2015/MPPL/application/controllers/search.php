<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class search extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	} 
	
	public function reservasi($NRP,$id_Buku)
	{
	  $this->load->model('profile');
	  $data['User'] = $this->profile->getAll($NRP);
	  $this->load->model('reservasi');
	  $datadb= array (
		'NRP'=>$NRP,
		'ID_Buku'=>$id_Buku,
		'Tanggal'=>date("Y-m-d")
	  );
	  $this->reservasi->insert($datadb);
	  $this->load->model('_buku');
		$data['Detail'] = $this->_buku->getAllID($id_Buku);
		$this->load->model('user');
		$data['dbUser']=$this->user->getAll();
	  $this->load->view('profilbuku',$data);
	}
	public function profilbuku($NRP,$ID)
	{
		$this->load->model('profile');
		$data['User'] = $this->profile->getAll($NRP);
		$this->load->model('_buku');
		$data['Detail'] = $this->_buku->getAllID($ID);
		$this->load->model('user');
		$data['dbUser']=$this->user->getAll();
		$this->load->view('profilbuku',$data);
	}
	public function klasifikasi($NRP,$kategori)
	{
		$this->load->model('profile');
		$data['User'] = $this->profile->getAll($NRP);
		$this->load->model('_buku');
		$data['Buku']=$this->_buku->getAll($kategori);
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
		//var_dump($_POST);
		$judul=$_POST['judul'];
		$pengarang=$_POST['pengarang'];
		$penerbit=$_POST['penerbit'];
		if($_POST['tahun']!="")
			$tahun=$_POST['tahun'];
		else
			$tahun=0;
		$this->load->model('_buku');
		$data['Buku']=$this->_buku->getAlls($judul,$tahun,$pengarang,$penerbit);
		$this->load->model('profile');
		$data['User'] = $this->profile->getAll($nrp);
		$this->load->view('klasifikasi',$data);
	}

}