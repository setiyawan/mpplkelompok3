<?php
	
	class pengaduan extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		
		function GetAll($NRP){
			$saksake = $this->db->query("SELECT * FROM  `pengaduan` WHERE Pengadu = '$NRP'")->result();
			return $saksake;
		}
		
		function insert($file)
		{
			$data = array(
				'file'=>$file
			);
			$this->db->insert("pengaduan",$data);
		}
	}

?>