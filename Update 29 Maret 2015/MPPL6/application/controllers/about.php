<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class about extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	} 
	public function index($nrp)
	{
		$this->load->model('profile');
		$data['User']=$this->profile->GetAll($nrp);
		$this->load->view('aboutus',$data);
	}
	
}
