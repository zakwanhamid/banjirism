<?php
    class StockItemCommModel extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
            parent::__construct();
        }

        public function get_StockItemComm()
        {

            $this->db->select('*');
            $this->db->from('item_category');
            $this->db->join('item', 'item_category.item_CAT_id = item.item_CAT_id');
            $this->db->join('item_request', 'item.item_id = item_request.item_id');
            $query = $this->db->get();
            return $query ->result();
        }

        public function create_post()
        {
            $this->db->insert('energies',$data);
        }

        public function getItem()
        {
            return $this->db->get('item_category')->result();
        }

        public function insertItem($query)
        {
            $this->db->insert('item',$query);
        }
    }
    ?>