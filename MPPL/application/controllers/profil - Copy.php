<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class profil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('profile');
	} 
	public function index()
	{
		$data['Laporan'] = $this->profile->getAll();

		$this->load->view('profil',$data);
	}

	
}