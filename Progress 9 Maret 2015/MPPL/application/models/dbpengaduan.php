<?php
	
	class dbpengaduan extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		
		function GetAll(){
			$saksake = $this->db->query("SELECT * FROM  `pengaduan` WHERE 1")->result();
			return $saksake;
		}
		
		function insert($data)
		{
			$this->db->insert('pengaduan',$data);
		}
	}

?>