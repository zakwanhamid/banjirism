<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ngo_home extends CI_Controller {

    

	public function index()
	{
        $data['title'] = "NGO Home";

		$this->load->view('templates/header',$data);
		$this->load->view('ngo_home');
		$this->load->view('templates/footer');
	}

	
}