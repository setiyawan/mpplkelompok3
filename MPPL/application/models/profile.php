<?php
	
	class profile extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		
		function GetAll($NRP){
			$saksake = $this->db->query("SELECT * FROM  `user` WHERE NRP = '$NRP'")->result();
			return $saksake;
		}
		
		function insert($file)
		{
			$data = array(
				'file'=>$file
			);
			$this->db->insert("user",$data);
		}
		function update($NRP,$data)
		{
			//var_dump($data);
			$this->db->where("NRP",$NRP);
			$this->db->update('user', $data);
		}

		function getBuku($NRP)
		{
			$hasil = $this->db->query("SELECT * FROM `buku` WHERE NRP = '$NRP'")->result();
			return $hasil;
		}
	}

?>