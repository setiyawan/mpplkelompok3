<?php
	
	class reservasi extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		
		function GetAll($id)
		{
			$saksake = $this->db->query("SELECT * FROM  `reservasi` WHERE ID_BUKU=$id")->result();
			return $saksake;
		}
		
		function insert($data)
		{
			$this->db->insert('reservasi',$data);
		}
	}

?>