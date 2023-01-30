<?php
    class ItemRequestModel extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
            parent::__construct();
        }

        // public function get_ItemRequest()
        // {

        //     $this->db->select('*');
        //     $this->db->from('item_category');
        //     $this->db->join('item', 'item_category.item_CAT_id = item.item_CAT_id');
        //     $this->db->join('item_request', 'item.item_id = item_request.item_id');
        //     $this->db->join('user', 'user.user_id = item_request.user_id');
        //     $this->db->join('ngo_staff', 'ngo_staff.ngo_id = user.user_id');
        //     $query = $this->db->get();
        //     return $query ->result();
        // }

        // // public function create_post()
        // // {
        // //     $this->db->insert('energies',$data);
        // // }

        // public function getItemName()
        // {
        //     return $this->db->get('item')->result();
        // }

        public function get_item_request($item_request_id) {
            $this->db->where('item_request_id', $item_request_id);
            $query = $this->db->get('item_request');
            return $query->row();
        }
    
        public function update_item_request($item_request_id, $data) {
            $this->db->where('item_request_id', $item_request_id);
            $this->db->update('item_request', $data);
        }
    }