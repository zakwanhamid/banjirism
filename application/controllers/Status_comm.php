<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status_comm extends CI_Controller {

	public function index()
	{
        $data['title'] = "Status comm";

        
		$this->load->model('StatusCommModel');
        $data['status_comm'] = $this->StatusCommModel->get_StatusComm();

		$this->load->view('templates/header',$data);
		$this->load->view('management/status_comm');
		$this->load->view('templates/footer');
	}

	public function itemForm()
	{
	    $data['title'] = "create request item";

		$this->load->database();
		$this->load->model('StatusCommModel');
	    $this->load->helper(array('form', 'url'));

	    $this->load->library('form_validation');

		$data['item_name'] = $this->StatusCommModel->getItemName();

		$this->load->view('templates/header',$data);
		$this->load->view('management/create_request', $data);
		$this->load->view('templates/footer');

	}

	
}