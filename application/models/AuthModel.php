<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AuthModel extends CI_Model{
  public function __construct(){
    parent::__construct();
  }

  public function check_username_exists($ngo_username)
  {
    $this->db->where('ngo_username', $ngo_username);
    $query = $this->db->get('ngo');
    if ($query->num_rows() > 0) {
      return true;
    } else {
      return false;
    }
  }

  public function insert_data_to_db($data) {
    $this->db->insert('ngo', $data);
  }

  public function user_check_NGO($ngo_username , $ngo_password){
    $query = $this->db->where('ngo_username', $ngo_username)->where('ngo_password', $ngo_password)->get('ngo');
    return $query->result();
  }

  public function user_check_comm($comm_username , $comm_password){
    $query = $this->db->where('comm_username', $comm_username)->where('comm_password', $comm_password)->get('communityhall');
    return $query->result();
  }

  
}
