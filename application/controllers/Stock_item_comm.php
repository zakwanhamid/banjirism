<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock_item_comm extends CI_Controller {

	public function index($comm_id)
	{
        $data['title'] = "Stock item comm";

        
        $this->load->database();
		$this->load->model('StockItemCommModel');
        $data['item'] = $this->StockItemCommModel->get_StockItemComm($comm_id);

		$this->load->view('templates/header',$data);
		$this->load->view('management/stock_item_comm');
		$this->load->view('templates/footer');
	}

	
	public function itemForm()
	{
	    $data['title'] = "create stock item";

		$this->load->database();
		$this->load->model('StockItemCommModel');
	    $this->load->helper(array('form', 'url'));

	    $this->load->library('form_validation');

		$data['category'] = $this->StockItemCommModel->getCategory();

		$this->load->view('templates/header',$data);
		$this->load->view('management/create_stock_item_comm', $data);
		$this->load->view('templates/footer');

	}

	public function createItem() {

		$this->load->database();
		$this->load->model('StockItemCommModel');

		$this->db->select('id');
		$this->db->from('user');
		$query = $this->db->get();
		$result = $query->result_array();
		
		foreach ($result as $row) {
			$data = array(
				'user_id' => $row['id']
			);
			$this->db->insert('item_request', $data);
		}

		$data1 = array( 
			'item_CAT_id' => $this->input->post('item_cat_name'), 'item_name' => $this->input->post('item_name'), 'item_desc' => $this->input->post('item_desc')
		);

		$this->StockItemCommModel->insertItem($data1);

	}
	
}

?>