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

	
}