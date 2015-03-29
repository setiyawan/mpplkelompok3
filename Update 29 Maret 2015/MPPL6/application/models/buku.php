<?php
	
	class buku extends CI_Model
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
		
		function GetAllID($ID)
		{
			$saksake = $this->db->query("Select * from `buku` where ID_Buku='$ID'")->result();
			return  $saksake;
		}

		function GetAlls($judul,$tahun,$pengarang)
		{
		  if($tahun==0)
		    $saksake=$this->db->query("Select * from `buku` where Nama_Buku like '%$judul%' AND Penulis like '%$pengarang%'")->result();
		  else
		    $saksake=$this->db->query("Select * from `buku` where Nama_Buku like '%$judul%' AND Penulis like '%$pengarang%' AND Tahun_Terbit=$tahun")->result();
		  return $saksake;
		}
		
		function insert($file)
		{
			$this->db->insert("buku",$file);
		}
	}

?>
