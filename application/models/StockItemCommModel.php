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
            $this->db->from('item');
            $this->db->join('item_category', 'item.item_CAT_id = item_category.item_CAT_id');
            $query = $this->db->get();
            return $query->result_array();

        }

        public function get_item_requests($item_id) {
            $this->db->select('*');
            $this->db->from('item_request');
            $this->db->where('item_id', $item_id);
            $query = $this->db->get();
            return $query->result();
          }

        public function getItem()
        {
            return $this->db->get('item_category')->result();
        }

        public function insertItem1($query)
        {
            $this->db->insert('item',$query);
        }

        public function insertItem2($query)
        {
            $this->db->insert('item_request',$query);
        }
    }
    ?>