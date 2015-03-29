<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
                $this->load->view('upload_form', array('error' => ' ' ));
        }

        public function do_upload($NRP)
        {
            $this->load->model('_buku');
			if ($_POST['Nama_Buku']==NULL or $_POST['Deskripsi']==NULL or $_POST['Tahun']==NULL or $_POST['Penerbit']==NULL or $_POST['Penulis']==NULL)
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
				$this->_buku->insert($data);
				$b=$this->_buku->GetAllB();
				$c="1";
				foreach($b as $row)
				{
					$c=$row->ID_Buku;
				}
				$this->_buku->UpdateGambar($c);
				$config['upload_path']          = './image/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
				$config['file_name']			= $c+'.png';
				
                $this->load->library('upload', $config);
				$this->upload->initialize($config);
				
				  if ( ! $this->upload->do_upload())
                {
                        $data['error'] = array('error' => $this->upload->display_errors());
						$data['User']=$this->_buku->getUser($NRP);
						$this->load->view('tambahbuku',$data);
                }
				$ale['User'] = $this->_buku->getUser($NRP);
				$this->load->view('tambahbuku_result',$ale);
			}
        }
}
?>