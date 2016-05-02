<?php
	class User_model extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}

		public function get_user($where)
		{
			if(!is_array($where))
			{
				$query = $this->db->get('user');
				return $query->result_array();
			}
			$query = $this->db->get_where('user',$where);
			return $query->row_array();
		}

	}