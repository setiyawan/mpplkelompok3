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
		
		function GetNo($no){
			$saksake= $this->db->query("Select * from `pengaduan` where ID_Pengaduan=$no")->result();
			return $saksake;
		}
		
		function HapusP($no)
		{
			$this->db->query("DELETE FROM `pengaduan` WHERE Id_Pengaduan=$no");
		}
		
		function insert($data)
		{
			$this->db->insert('pengaduan',$data);
		}
	}

?>