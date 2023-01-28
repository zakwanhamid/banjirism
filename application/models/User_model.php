<?php
class User_model extends CI_Model
{
	public function registerUser($enc_password)
	{
		//User data array
		$data = array(
			'user_ngo_name' => $this->input->post('user_ngo_name'),
			'user_name' => $this->input->post('user_name'),
			'user_password' => $enc_password
		);

		//Insert user
		return $this->db->insert('users', $data);
	}
}