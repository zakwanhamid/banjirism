<?php
    class ShowhallModel extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
            parent::__construct();
        }

        public function get_Showhall_detail()
        {
            $query = $this->db->get('finance');
		   return $query;
        }
    }