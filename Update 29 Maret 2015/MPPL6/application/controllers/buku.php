<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class buku extends CI_Controller 
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('_buku');
		} 
		public function detailReservasi($NRP,$id)
		{
			$this->load->model('profile');
			$data['User']=$this->profile->getAll($NRP);
			$this->load->model('reservasi');
			$data['Reservasi']=$this->reservasi->GetAll($id);
			$this->load->model('user');
			$data['User2']=$this->user->GetAll();
			$data['Buku']=$this->_buku->GetAllID($id);
			$this->load->view('detail_reservasi',$data);
		}
		
		public function hapusBukuAdmin($NRP,$id)
		{
			$this->load->model('_buku');
			$this->_buku->deleteBuku($id);
			$this->load->model('profile');
			$data['User'] = $this->profile->getAll($NRP);
			$this->load->view('beranda_admin',$data);
		}
		
		public function daftarbuku($NRP)
		{
			$data['Mahasiswa'] = $this->_buku->getBuku($NRP);
			$data['Other'] = $this->_buku->getUser($NRP);
			//var_dump($data);
			$this->load->view('buku_daftar',$data);
		}

		public function tambah($NRP)
		{
			$data['User'] = $this->_buku->getUser($NRP);
			$data['flag'] = 1;
			$this->load->view('tambahbuku',$data);
		}
		public function insert($NRP)
		{
			if ($_POST['Nama_Buku']==NULL and $_POST['Deskripsi']==NULL and $_POST['Tahun']==NULL and $_POST['Penerbit']==NULL and $_POST['Penulis']==NULL)
			{
				$data['flag']=0;
				$data['User']=$this->_buku->getUser($NRP);
				$this->load->view('tambahbuku',$data);
			}
			else
			{	
				$data = array(
					'NRP' => $NRP, 
					'Nama_Buku' => $_POST['Nama_Buku'], 
					'Deskripsi' => $_POST['Deskripsi'], 
					'Tahun' => $_POST['Tahun'],
					'Penerbit' => $_POST['Penerbit'],
					'Kategori' => $_POST['optionsRadios'],
					'Penulis' => $_POST['Penulis'],
					'Status' => $_POST['Status'],
				);
				//var_dump($data);
				$this->_buku->insert($data);
				$ale['User'] = $this->_buku->getUser($NRP);
				$this->load->view('tambahbuku_result',$ale);
			}
		}

		public function edit($NRP, $ID_Buku)
		{
			$data['User'] = $this->_buku->getUser($NRP);
			$data['buku'] = $this->_buku->getOneBuku($ID_Buku);
			$data['flag'] = 1;
			//var_dump($data['buku'][0]);
			$this->load->view('editbuku',$data);
		}
		public function editbuku($NRP, $ID_Buku)
		{
			$target_dir = 'C:\wamp\www\MPPL/image/buku/';
			//cho $target_dir;
			$uploadOk = 1;
			$data['User'] = $this->_buku->getUser($NRP);
			$data['buku'] = $this->_buku->getBuku($ID_Buku);
			$data['flag']=1;
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			$_FILES["fileToUpload"]["name"] = $ID_Buku.'.'.$imageFileType;
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			// Check if image file is a actual image or fake image
			if($imageFileType!="")
			{
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg")
				{
					$data['error']="Maaf, hanya file JPG, JPEG & PNG yang diperbolehkan.";
					$data['flag']=0;
					$this->load->view('editbuku',$data);
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
				else 
				{
					if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
					{
						$data = array(
							'Nama_Buku' => $_POST['Nama_Buku'], 
							'Deskripsi' => $_POST['Deskripsi'], 
							'Tahun' => $_POST['Tahun'],
							'Penerbit' => $_POST['Penerbit'],
							'Kategori' => $_POST['optionsRadios'],
							'Penulis' => $_POST['Penulis'],
							'Status' => $_POST['Status'],
							'Gambar_Buku' => $_FILES["fileToUpload"]["name"]
							);
						$this->_buku->update($ID_Buku, $data);
						$ale['Mahasiswa'] = $this->_buku->getOneBuku($ID_Buku);
						$ale['Other'] = $this->_buku->getUser($NRP);
						$ale['ID_Buku'] = $ID_Buku;
						$this->load->view('buku_detail',$ale);
					}
					else
					{
						//$data['error']="Maaf, file anda tidak terunggah.";
						//$data['flag']=0;
						//$data['buku'] = $this->_buku->getOneBuku($ID_Buku);
						$ale['Mahasiswa'] = $this->_buku->getOneBuku($ID_Buku);
						$ale['Other'] = $this->_buku->getUser($NRP);
						$ale['ID_Buku'] = $ID_Buku;
						$this->load->view('buku_detail',$ale);
					}
				}
			}
			else
				{
					$data = array(
							'Nama_Buku' => $_POST['Nama_Buku'], 
							'Deskripsi' => $_POST['Deskripsi'], 
							'Tahun' => $_POST['Tahun'],
							'Penerbit' => $_POST['Penerbit'],
							'Kategori' => $_POST['optionsRadios'],
							'Penulis' => $_POST['Penulis'],
							'Status' => $_POST['Status'],
							);
						$this->_buku->update($ID_Buku, $data);
						$ale['Mahasiswa'] = $this->_buku->getOneBuku($ID_Buku);
						$ale['Other'] = $this->_buku->getUser($NRP);
						$ale['ID_Buku'] = $ID_Buku;
						$this->load->view('buku_detail',$ale);
				}
		}
		public function hapus($NRP, $ID_Buku)
		{
			$this->_buku->deleteBuku($ID_Buku);
			$data['Mahasiswa'] = $this->_buku->getBuku($NRP);
			$data['Other'] = $this->_buku->getUser($NRP);
			//var_dump($data);
			$this->load->view('buku_daftar',$data);
		}

		public function detailbuku($NRP,$ID_Buku)
		{
			$data['Mahasiswa'] = $this->_buku->getOneBuku($ID_Buku);
			$data['Other'] = $this->_buku->getUser($NRP);
			$data['ID_Buku'] = $ID_Buku;
			$this->load->view('buku_detail',$data);	
		}
		public function statistik($NRP)
		{
			$data['Mahasiswa'] = $this->_buku->grafik();
			$data['urutan'] = $this->_buku->urutan();
			if($NRP == 'guest') $this->load->view('statistik_guest',$data);
			else
			{
				$data['User'] = $this->_buku->getUser($NRP);
				if($data['User'][0]->StatusUser == 1)
					$this->load->view('statistik',$data);
				elseif($data['User'][0]->StatusUser == 2) 
					$this->load->view('statistik_admin',$data);
			}
		}
	}
?>