<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status_comm extends CI_Controller {

	public function index()
	{
        $data['title'] = "Status comm";
        
		$this->load->model('ItemRequestModel');
        $data['status_comm'] = $this->ItemRequestModel->get_StatusComm();
		$this->load->view('templates/header',$data);
		$this->load->view('management/status_comm');
		$this->load->view('templates/footer');
	}

	// public function itemForm()
	// {
	// 	$this->load->library('session');
	// 	$comm_id = $this->session->userdata('loggedIn')['comm_id'];
	//     $data['title'] = "create request item";

	// 	$this->load->database();
	// 	$this->load->model('ItemRequestModel');
	//     $this->load->helper(array('form', 'url'));

	//     $this->load->library('form_validation');

	// 	$data['item_name'] = $this->ItemRequestModel->getItemName();

	// 	$this->load->view('templates/header',$data);
	// 	$this->load->view('management/create_request', $data,$comm_id);
	// 	$this->load->view('templates/footer');

	// }

	// public function createItem() {
	// 	$this->load->library('session');
	// 	$comm_id = $this->session->userdata('loggedIn')['comm_id'];
	// 	$this->load->model('ItemRequestModel');

	// 	$data1 = array( 
	// 		'quantity_request' => $this->input->post('quantity_request'), 'item_name' => $this->input->post('item_name'), 'item_desc' => $this->input->post('item_desc')
	// 	);

	// 	$this->ItemRequestModel->insertItem($data1);

	// }

	public function edit($item_request_id,$item_id) {
		$this->load->library('session');
		$comm_id = $this->session->userdata('loggedIn')['comm_id'];
		$this->load->model('ItemRequestModel');
		$data['item_request'] = $this->ItemRequestModel->get_item_request($item_request_id);

	 	$this->load->view('templates/header');
	 	$this->load->view('management/create_request', $data);
	 	$this->load->view('templates/footer');
	}

	public function update() {
		$this->load->library('session');
		$comm_id = $this->session->userdata('loggedIn')['comm_id'];
		$this->load->model('ItemRequestModel');
		$item_request_id = $this->input->post('item_request_id');
		$data = array(
			'quantity_request' => $this->input->post('quantity_request'),
			'current_quantity' => '0',
			'balance_quantity' => $this->input->post('quantity_request')
		);
		$this->ItemRequestModel->update_item_request($item_request_id, $data);
		redirect("Stock_item_comm/requestView");
	}
	
}