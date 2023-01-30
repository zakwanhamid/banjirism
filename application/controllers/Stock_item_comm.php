<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stock_item_comm extends CI_Controller
{

	public function index()
	{
		$data['title'] = "Stock item comm";
		$this->load->library('session');
		$this->session->userdata('loggedIn')['comm_id'];

		$this->load->database();
		$this->load->model('StockItemCommModel');
		$data['item_requests'] = $this->StockItemCommModel->get_StockItemComm();

		$this->load->view('templates/headerComm', $data);
		$this->load->view('management/stock_item_comm', $data);
		$this->load->view('templates/footer');
	}

	public function get_item_requests($item_id)
	{

		$this->load->database();
		$this->load->model('StockItemCommModel');
		$data['item_requests'] = $this->StockItemCommModel->get_item_requests($item_id);

		$this->load->view('templates/header', $data);
		$this->load->view('management/item_request_view', $data);
		$this->load->view('templates/footer');
		//$this->db->where("item_id", $item_id);
		//return $this->db->get("item_request")->result();
	}

	public function requestView($item_id)
	{
		$this->load->model("StockItemCommModel");
		$data["item_requests"] = $this->StockItemCommModel->get_item_requests($item_id);

		$this->load->view('templates/headerComm', $data);
		$this->load->view("management/item_request_view", $data);
		$this->load->view('templates/footer');
	}


	public function itemForm()
	{
		$data['title'] = "create stock item";
		$this->load->library('session');
		$comm_id = $this->session->userdata('loggedIn')['comm_id'];

		$this->load->database();
		$this->load->model('StockItemCommModel');
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$data['category'] = $this->StockItemCommModel->getItem();

		$this->load->view('templates/headerComm', $data);
		$this->load->view('management/create_stock_item_comm', $data);
		$this->load->view('templates/footer');

	}

	public function createItem()
	{

		$this->load->database();
		$this->load->model('StockItemCommModel');
		$this->load->library('session');
		$this->session->userdata('loggedIn')['comm_id'];

		$data = array(
			'item_CAT_id' => $this->input->post('item_cat_name'),
			'item_name' => $this->input->post('item_name'),
			'item_desc' => $this->input->post('item_desc')
		);

		$this->StockItemCommModel->insertItem1($data);
		redirect('Stock_item_comm/index');
	}

	public function showItemHall()
	{
		$this->load->model('StockItemCommModel');
		$id = $this->input->get('id');

		$data['commHall'] = $this->StockItemCommModel->getHall($id);

		$this->load->view('templates/headerComm', $data);
		$this->load->view('management');
	}
}

?>