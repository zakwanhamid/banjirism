<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status_comm extends CI_Controller {

	public function index()
	{
        $data['title'] = "Status comm";

        
		$this->load->model('StatusCommModel');
        $data['status'] = $this->StatusCommModel->get_StatusComm();

		$this->load->view('templates/header',$data);
		$this->load->view('management/status_comm');
		$this->load->view('templates/footer');
	}

	
}