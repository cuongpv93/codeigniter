<?php

	class User_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		function listuser(){
			$data = $this->db->select("*")->from('user')->get()->result_array();
			return $data;
		}
	}
?>