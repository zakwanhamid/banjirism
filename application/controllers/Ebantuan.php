<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ebantuan extends CI_Controller {

	public function index()
	{
        $data['title'] = "Ebantuan";

		$this->load->view('templates/header',$data);
		$this->load->view('ebantuan');
		$this->load->view('templates/footer');
	}

	
}