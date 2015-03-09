<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sistem extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user');
	}

	public function aboutus($NRP)
	{
		if($NRP=='Guest')
			$this->load->view('aboutus_guest');
		else
		{
			$data['User'] = $this->user->getNRP($NRP);

		//var_dump($data);
			if ($data['User'][0]->StatusUser==2)
				$this->load->view('aboutus_admin',$data);
			elseif ($data['User'][0]->StatusUser==1)
				$this->load->view('aboutus',$data);
		}
	}
	public function pengaduan($NRP)
	{
		if($NRP=='Guest')
			$this->load->view('pengaduan_guest');
		else
		{
			$data['User'] = $this->user->getNRP($NRP);
			//var_dump($data);
			if ($data['User'][0]->StatusUser==1)
				$this->load->view('pengaduan',$data);
			/*elseif ($data['User'][0]->StatusUser==2)
				$this->load->view('aboutus_admin',$data);*/
		}
	}
	public function adu($NRP)
	{
		if($NRP=='Guest')
			$this->load->view('pengaduan_result_guest');
		else
		{
			$data['User'] = $this->user->getNRP($NRP);
			//var_dump($data);
			if ($data['User'][0]->StatusUser==1)
				$this->load->view('pengaduan_result',$data);
			/*elseif ($data['User'][0]->StatusUser==2)
				$this->load->view('aboutus_admin',$data);*/
		}
	}
}
?>