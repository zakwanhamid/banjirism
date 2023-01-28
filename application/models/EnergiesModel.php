<?php
    class EnergiesModel extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
            parent::__construct();
        }

        public function get_energies()
        {
            $query = $this->db->get('energies');
		   return $query;
        }

        public function create_post()
        {
            $data = array( 
                'location_energies' => $this->input->post('location_energies'),
                'num_member_energies' => $this->input->post('num_member_energies'),
                'phone_number_energies' => $this->input->post('phone_number_energies')
            );
            return $this->db->insert('energies',$data);
        }
        
    }