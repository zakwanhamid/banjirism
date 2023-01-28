<?php
    class StatusCommModel extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
            parent::__construct();
        }

        public function get_StatusComm()
        {

            $this->db->select('*');
            $this->db->from('item_category');
            $this->db->join('item', 'item_category.item_CAT_id = item.item_CAT_id');
            $this->db->join('item_request', 'item.item_id = item_request.item_id');
            $this->db->join('user', 'user.user_id = item_request.user_id');
            $this->db->join('ngo_staff', 'ngo_staff.ngo_id = user.user_id');
            $query = $this->db->get();
            return $query ->result();
        }
    }