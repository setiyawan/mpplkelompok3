<?php
	
	class user extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		
		function GetAll()
		{
			$saksake = $this->db->query('SELECT * FROM  `user` WHERE 1')->result();
			return $saksake;
		}
		function GetNRP($NRP)
		{
			$saksake = $this->db->query("SELECT * FROM `user` where NRP='$NRP'")->result();
			return $saksake;
		}
		function GetID($Email)
		{
			$saksake = $this->db->query("SELECT * FROM  `user` WHERE Email='$Email'")->result();
			return $saksake;
		}
		function register($data)
		{
			$this->db->insert('user',$data);
		}
		function update_pass($NRP,$passBaru)
		{
			$data = array('Password' => $passBaru);
			$this->db->where('NRP',$NRP);
			$this->db->update('user',$data);
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