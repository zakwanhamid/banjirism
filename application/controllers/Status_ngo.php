<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status_ngo extends CI_Controller {

	public function index()
	{
        $data['title'] = "Status NGO";

		$this->load->library('session');
		$data['comm_id']=$this->session->userdata('loggedIn');
        $this->load->database();
		$this->load->model('StatusNgoModel');
		$data['item_requests'] = $this->StatusNgoModel->get_StatusNgo();

		$this->load->view('templates/header',$data);
		$this->load->view('management/status_ngo');
		$this->load->view('templates/footer');
	}
}