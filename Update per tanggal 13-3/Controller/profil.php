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
		$data['flag']=1;
		if($data['Mahasiswa'][0]->StatusUser == 1)
		{
			$this->load->view('profil',$data);
		}
		elseif($data['Mahasiswa'][0]->StatusUser == 2)
		{
			$ala['Mahasiswa'] = $this->profile->getAllUser();
			$this->load->view('profil_admin',$ala);
		}
	}
	public function editprofile($NRP)
	{
		$data['Mahasiswa'] = $this->profile->getAll($NRP);
		$data['flag']=1;
		$this->load->view('editprofile',$data);
		
	}
	public function ubah ($NRP)
	{
		$target_dir = 'C:\wamp\www\MPPL/image/';
		//cho $target_dir;
		$uploadOk = 1;
		$data['Mahasiswa'] = $this->profile->getAll($NRP);
		$data['flag']=1;
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		$_FILES["fileToUpload"]["name"] = $NRP.'.'.$imageFileType;
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		// Check if image file is a actual image or fake image
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg")
		{
		    $data['error']="Maaf, hanya file JPG, JPEG & PNG yang diperbolehkan.";
		    $data['flag']=0;
		    $this->load->view('editprofile',$data);
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
		}
		// if everything is ok, try to upload file
		else
		{
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
		    {
				$ala = array(
						   'NamaUser' => $_POST['Nama'],
						   'Pekerjaan' => $_POST['Pekerjaan'],
						   'NoTelp' => $_POST['HP'],
						   'Foto' => $_FILES["fileToUpload"]["name"],
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
			else
		    {
		        $data['error']="Maaf, file anda tidak terunggah.";
		    	$data['flag']=0;
		    	$this->load->view('registerasi',$data);
		    }
		}
	}
}