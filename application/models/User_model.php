<?php
	class User_model extends CI_Model{
		public function register($enc_password){
			//User data array
			$data = array(
				'user_ngo_name' => $this->post('user_ngo_name'),
				'user_name' => $this->post('user_name'),
				'user_password' => $this->post('user_password')
			);

			//Insert user
			return $this->db->insert('users', $data);
		}
	}