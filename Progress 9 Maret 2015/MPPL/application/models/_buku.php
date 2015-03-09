<?php
	class _buku extends CI_Model
	{
		function __construct()
		{
			parent:: __construct();
		}
		function getBuku($NRP)
		{
			$hasil = $this->db->query("SELECT * FROM `buku` WHERE NRP = '$NRP'")->result();
			return $hasil;
		}
		function getOneBuku($ID_Buku)
		{
			$hasil = $this->db->query("SELECT * FROM `buku` WHERE ID_Buku = '$ID_Buku'")->result();
			return $hasil;
		}
		function getUser($NRP)
		{
			$saksake = $this->db->query("SELECT * FROM `user` WHERE NRP = '$NRP'")->result();
			return $saksake;
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

		function GetAlls($judul,$tahun,$pengarang,$penerbit)
		{
		  if($tahun==0)
		    $saksake=$this->db->query("Select * from `buku` where Nama_Buku like '%$judul%' AND Penulis like '%$pengarang%'")->result();
		  else
		    $saksake=$this->db->query("Select * from `buku` where Nama_Buku like '%$judul%' AND Penulis like '%$pengarang%' AND Tahun_Terbit=$tahun")->result();
		  return $saksake;
		}
		

		function insert($data)
		{
			$this->db->insert('buku',$data);
		}
	}
?>