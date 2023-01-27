<?php
    class FinanceModel extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
            parent::__construct();
        }

        public function get_finance()
        {
            $query = $this->db->get('finance');
		   return $query;
        }
    }