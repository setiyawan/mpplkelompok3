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
		$encrypt = md5($_POST['password']);
		foreach ($hasil as $key) 
		{
			if($_POST['email'] == $key->Email)
			{
				if( $encrypt == $key->Password)
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
			$data['error']="Maaf, Harap mengisi semua informasi";
			$this->load->view('registerasi',$data);
		}	
		else
		{
			$target_dir = 'C:\wamp\www\MPPL/image/';
			//cho $target_dir;
			$uploadOk = 1;
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			$_FILES["fileToUpload"]["name"] = $_POST['NRP'].'.'.$imageFileType;
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			// Check if image file is a actual image or fake image
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg")
			{
			    $data['error']="Maaf, hanya file JPG, JPEG & PNG yang diperbolehkan.";
			    $data['flag']=0;
			    $this->load->view('registerasi',$data);
			}
			elseif(isset($_POST["submit"])) 
			{
			    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			    if($check !== false) {
			        echo "File is an image - " . $check["mime"] . ".";
			        $uploadOk = 1;
			    } else {
			        echo "File is not an image.";
			        $uploadOk = 0;
			    }
			}
			elseif ($uploadOk == 0) 
			{
			    echo "Maaf file anda tidak terunggah.";
			// if everything is ok, try to upload file
			}
			else
			{
			    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
			    {
			        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
			        $email = $_POST['email_1']."@".$_POST['email_2'];
					//echo $email;
					$bulbul = array(
						'NamaUser' => $_POST['Nama'], 
						'NRP' => $_POST['NRP'], 
						'Pekerjaan' => $_POST['Pekerjaan'], 
						'NoTelp' => $_POST['HP'], 
						'Email' => $email,
						'Foto' => $_FILES["fileToUpload"]["name"],
						'Alamat' => $_POST['Alamat'],
						'JenisKel' => $_POST['jenis_kel']
					);
					//var_dump($data);
					$this->user->register($bulbul);
					$this->load->view('registerasi_result');
			    }
			    else
			    {
			        $data['error']="Maaf, file anda tidak terunggah.";
			    	$data['flag']=0;
			    	$this->load->view('registerasi',$data);
			    }
			}
		}
	}
}