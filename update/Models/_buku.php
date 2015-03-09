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
		function getUser($NRP)
		{
			$saksake = $this->db->query("SELECT * FROM `user` WHERE NRP = '$NRP'")->result();
			return $saksake;
		}
		function insert($data)
		{
			$this->db->insert('buku',$data);
		}
	}
?>