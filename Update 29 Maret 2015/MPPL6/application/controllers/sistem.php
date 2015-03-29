<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sistem extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user');
	}

	public function aboutus($NRP)
	{
		if($NRP=='guest')
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
		if($NRP=='guest')
			$this->load->view('pengaduan_guest');
		else
		{
			$data['User'] = $this->user->getNRP($NRP);
			//var_dump($data);
			if ($data['User'][0]->StatusUser==1)
				$this->load->view('pengaduan',$data);
			elseif ($data['User'][0]->StatusUser==2)
				{
					$this->load->model('dbpengaduan');
					$data['pengaduan']=$this->dbpengaduan->GetAll();
					$data['nama']=$this->user->GetAll();
					$this->load->view('list_pengaduan_admin',$data);
				}
		}
	}
	public function adu($NRP)
	{
		if($NRP=='guest')
			{
				$this->load->model('dbpengaduan');
				$tanggal=getdate();
				$hari=$tanggal['mday'];
				$bulan=$tanggal['mon'];
				$tahun=$tanggal['year'];
				$dat = array(
					'NRP' => "guest",
					'Isi_Pengaduan' => $_POST['text1'],
					'Waktu_Pengaduan' => date("Y-m-d"), 
					);
				$this->dbpengaduan->insert($dat);$this->load->view('pengaduan_result_guest');
			}
		else
		{
			$data['User'] = $this->user->getNRP($NRP);
			if ($data['User'][0]->StatusUser==1)
				{
					$this->load->model('dbpengaduan');
					$tanggal=getdate();
					$hari=$tanggal['mday'];
					$bulan=$tanggal['mon'];
					$tahun=$tanggal['year'];
					$dat = array(
						'NRP' => $NRP,
						'Isi_Pengaduan' => $_POST['text1'],
						'Waktu_Pengaduan' => date("Y-m-d"), 
						);
					$this->dbpengaduan->insert($dat);
					$this->load->view('pengaduan_result',$data);
				}
		}
	}
	
	public function beranda($NRP)
	{
		$data['User'] = $this->user->getNRP($NRP);
		$this->load->view('beranda_admin',$data);
	}
	
	public function DetailPengaduan($NRP,$no)
	{
		$this->load->model('dbpengaduan');
		$data['pengaduan']=$this->dbpengaduan->GetNo($no);
		$data['User']=$this->user->getNRP($NRP);
		$data['User2']=$this->user->getNRP($data['pengaduan'][0]->NRP);
		$this->load->view('pesan_pengaduan_admin',$data);
	}
	
	public function deletePengaduan($NRP,$no)
	{
		$this->load->model('dbpengaduan');
		$data['User']=$this->user->getNRP($NRP);
		$this->dbpengaduan->HapusP($no);
		$this->load->view('delete_result_admin',$data);
	}
	public function statistik($NRP)
	{
		$data['User'] = $this->user->getNRP($NRP);
		if($data['User'][0]->StatusUser==2) $this->load->view('statistik_admin',$data);
		else if ($data['User'][0]->StatusUser==1)
			$this->load->view('statistik', $data);
		else
			$this->load->view('statistik_guest');
	}
}
?>