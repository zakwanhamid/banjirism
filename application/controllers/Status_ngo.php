<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status_ngo extends CI_Controller {

	public function index()
	{
        $data['title'] = "Status NGO";

        
		$this->load->model('StatusCommModel');
        $data['status_ngo'] = $this->StatusCommModel->get_StatusComm();

		$this->load->view('templates/header',$data);
		$this->load->view('management/status_ngo');
		$this->load->view('templates/footer');
	}

	
}