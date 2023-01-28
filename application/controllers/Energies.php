<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Energies extends CI_Controller {


	public function index()
	{
		$data['title'] = "Energies";


		$this->load->database();
		$this->load->model('EnergiesModel');
        $data['energies'] = $this->EnergiesModel->get_energies();

		$this->load->view('templates/header');
		$this->load->view('ebantuan/energies',$data);
		$this->load->view('templates/footer');
	}

	public function create()
	{
	    $data['title'] = "create energies";

		$this->load->database();
		$this->load->model('EnergiesModel');
	    $this->load->helper(array('form', 'url'));

	    $this->load->library('form_validation'); 
		
	    
	    $this->form_validation->set_rules('location_energies', 'Location', 'required');
	    $this->form_validation->set_rules('num_member_energies', 'Number Member', 'required');
	    $this->form_validation->set_rules('phone_number_energies', 'Phone Number', 'required');

	    if($this->form_validation->run() == FALSE)
	    {
	        $this->load->view('templates/header');
	        $this->load->view('ebantuan/energiesCreates',$data);
	        $this->load->view('templates/footer');
	    }
	    else
	    {
	        $this->EnergiesModel->create_post();
	        redirect('energies/index');
	    }
	}

	
}