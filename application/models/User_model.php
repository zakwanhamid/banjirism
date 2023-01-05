<?php
	class User_model extends CI_Model{
		public function register($enc_password){
			//User data array
			$data = array(
				'name' => $this->post('name'),
				''
			)
		}
	}