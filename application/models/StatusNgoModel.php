<?php
    class StatusNgoModel extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
            parent::__construct();
        }

        public function get_StatusNgo()
        {
            $this->db->select('*');
            $this->db->from('item');
            $this->db->join('item_category', 'item.item_CAT_id = item_category.item_CAT_id');
            $query = $this->db->get();
            return $query->result_array();
        }
    }