<?php
	
	class reservasi extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		
		function GetAll($kategori)
		{
			$saksake = $this->db->query("SELECT * FROM  `buku` WHERE kategori='$kategori'")->result();
			return $saksake;
		}
		
		function insert($data)
		{
			$this->db->insert('reservasi',$data);
		}
	}

?>