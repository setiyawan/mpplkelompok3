<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pengaduan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	} 
	public function index($nrp)
	{
		$this->load->model('profile');
		$data['User']=$this->profile->GetAll($nrp);
		$this->load->view('pengaduan',$data);
	}
	
	public function ins($nrp)
	{
		$data = array(
				'Isi_Pengaduan'=>$_POST['text'],
				'NRP'=>$nrp,
				'waktu_Pengaduan'=>date("Y-m-d")
			);
		$this->load->model('dbpengaduan');
		$this->dbpengaduan->insert($data);
		$this->load->model('profile');
		$dat['User']=$this->profile->GetAll($nrp);
		$this->load->view('pengaduan_result',$dat);
	}
	
}