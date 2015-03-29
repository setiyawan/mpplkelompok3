<?php
	
	class profile extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		
		function GetAll(){
			$saksake = $this->db->query('SELECT * FROM `user` WHERE 1')->result();
			return $saksake;
		}
		
		function insert($file)
		{
			$data = array(
				'file'=>$file
			);
			$this->db->insert("user",$data);
		}
	}

?>