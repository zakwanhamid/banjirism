<?php
    class SuppliesModel extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
            parent::__construct();
        }

        public function get_supplies()
        {
            $query = $this->db->get('supplies');
		   return $query;
        }

        public function create_post()
        {
            $data = array(
                'location_supplies' => $this->input->post('location_supplies'),
                'unit_item_supplies' => $this->input->post('unit_item_supplies'),
                'phone_number_supplies' => $this->input->post('phone_number_supplies')
            );
            return $this->db->insert('supplies',$data);
        }
    }