<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Finance extends CI_Controller {


	public function index()
	{
		$data['title'] = "Finance";


		$this->load->database();
		$this->load->model('FinanceModel');
        $data['finance'] = $this->FinanceModel->get_finance();

		$this->load->view('templates/header');
		$this->load->view('ebantuan/finance',$data);
		$this->load->view('templates/footer');
	}

	
}