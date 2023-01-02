<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutUs extends CI_Controller {

	public function index()
	{
        $data['title'] = "AboutUs";

		$this->load->view('templates/header',$data);
		$this->load->view('pages/about');
		$this->load->view('templates/footer');
	}

	
} 