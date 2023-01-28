<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock_item_comm extends CI_Controller {

	public function index()
	{
        $data['title'] = "Stock item comm";

        
        $this->load->database();
		$this->load->model('StockItemCommModel');
        $data['item'] = $this->StockItemCommModel->get_StockItemComm();

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

		$this->load->model('StockItemCommModel');

		$data1 = array( 
			'item_CAT_id' => $this->input->post('item_cat_name'), 'item_name' => $this->input->post('item_name'), 'item_desc' => $this->input->post('item_desc')
		);

		$this->StockItemCommModel->insertItem($data1);

	}
	
}

?>