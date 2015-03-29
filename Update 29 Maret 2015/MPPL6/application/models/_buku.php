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
		    $saksake=$this->db->query("Select * from `buku` where Nama_Buku like '%$judul%' AND Penulis like '%$pengarang%' AND Penerbit like '%$penerbit%'")->result();
		  else
		    $saksake=$this->db->query("Select * from `buku` where Nama_Buku like '%$judul%' AND Penulis like '%$pengarang%' AND Tahun=$tahun AND Penerbit like '%$pengarang%'")->result();
		  return $saksake;
		}
		function deleteBuku($ID_Buku)
		{
			$this->db->delete('buku',array('ID_Buku' => $ID_Buku));
		}
		function insert($data)
		{
			$this->db->insert('buku',$data);
		}
		function UpdateR($id,$nilai)
		{
			$this->db->query("UPDATE `buku` SET `JReservasi`=$nilai WHERE ID_Buku=$id");
		}
		function update($ID_Buku, $data)
		{
			$this->db->where("ID_Buku",$ID_Buku);
			$this->db->update('buku', $data);
		}
		function grafik()
		{
			$saksake = $this->db->query("Select * from `buku`")->result();
			return $saksake;
		}
		function urutan()
		{
			$saksake = $this->db->query("SELECT * FROM `buku` ORDER BY JReservasi DESC")->result();
			return  $saksake;
		}
	}
?>