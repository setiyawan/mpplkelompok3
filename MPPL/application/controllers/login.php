<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user');
	} 
	public function index()
	{
		$data['flag']=-1;
		$this->load->view('signin',$data);
	}
	public function signin()
	{
		$hasil = $this->user->getAll();
		$data['flag']=0;

		foreach ($hasil as $key) 
		{
			if($_POST['email'] == $key->Email)
			{
				if($_POST['password'] == $key->Password)
				{
					$kirim['User'] = $this->user->GetID($key->Email);
					if($key->StatusUser == 1)
						$data['flag']=1;
					elseif($key->StatusUser == 2)
						$data['flag']=2;
				}
			}
		}
		if($data['flag']==1)
			$this->load->view('beranda',$kirim);
		elseif ($data['flag']==2) 
			$this->load->view('beranda_admin',$kirim);
		else
			$this->load->view('signin',$data);
	}
	public function registerasi()
	{
		$data['flag']=1;
		$this->load->view('registerasi',$data);
	}
	public function guest()
	{
		$this->load->view('beranda_guest');
	}
	public function ubah_pass($NRP)
	{
		$data['User'] = $this->user->getNRP($NRP);
		$data['flag'] = '';
		//var_dump($_POST);
		if(sizeof($_POST)!=0)
		{
			if($_POST['passBaru']!=$_POST['passBaru_2'])
			{
				$data['flag'] = 'Ulangi masukkan Password baru. Password tidak sama';
				if ($data['User'][0]->StatusUser==2)
					$this->load->view('gantipass_admin',$data);
				elseif ($data['User'][0]->StatusUser==1)
					$this->load->view('gantipass_user',$data);	
			}
			else
			{
				if($data['User'][0]->Password==$_POST['pass_lama'])
				{
					$this->user->update_pass($NRP,$_POST['passBaru']);
					$this->load->view('gantipass_result',$data);
				}
				else
				{
					$data['flag']='Password lama tidak sesuai. Masukkan lagi password lama';
					if ($data['User'][0]->StatusUser==2)
						$this->load->view('gantipass_admin',$data);
					elseif ($data['User'][0]->StatusUser==1)
						$this->load->view('gantipass_user',$data);	
				}
			}
		}
	}
	public function ganti_pass($NRP)
	{
		$data['User'] = $this->user->getNRP($NRP);
		$data['flag'] = '';
		//var_dump($data);
		if ($data['User'][0]->StatusUser==2)
			$this->load->view('gantipass_admin',$data);
		elseif ($data['User'][0]->StatusUser==1)
			$this->load->view('gantipass_user',$data);
	}
	public function daftar()
	{
		//var_dump($_POST);
		if($_POST['Nama']==NULL and $_POST['NRP']==NULL and $_POST['Pekerjaan']==NULL and $_POST['HP']==NULL and $_POST['email_1']==NULL and $_POST['Alamat']==NULL)
		{
			$data['flag']=0;
			$this->load->view('registerasi',$data);
		}	
		else
		{
			$email = $_POST['email_1']."@".$_POST['email_2'];
			//echo $email;
			$data = array(
				'NamaUser' => $_POST['Nama'], 
				'NRP' => $_POST['NRP'], 
				'Pekerjaan' => $_POST['Pekerjaan'], 
				'NoTelp' => $_POST['HP'], 
				'Email' => $email,
				'Alamat' => $_POST['Alamat'],
				'JenisKel' => $_POST['jenis_kel']
			);
			//var_dump($data);
			$this->user->register($data);
			$this->load->view('registerasi_result');
		}
	}
}