<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplies extends CI_Controller {


	public function index()
	{
		$data['title'] = "Supplies";


		$this->load->database();
		$this->load->model('SuppliesModel');
        $data['supplies'] = $this->SuppliesModel->get_supplies();

		$this->load->view('templates/header');
		$this->load->view('ebantuan/supplies',$data);
		$this->load->view('templates/footer');
	}

    public function create()
	{
	    $data['title'] = "create supplies";

		$this->load->database();
		$this->load->model('SuppliesModel');
	    $this->load->helper(array('form', 'url'));

	    $this->load->library('form_validation'); 

	    $this->form_validation->set_rules('location_supplies', 'Location', 'required');
	    $this->form_validation->set_rules('unit_item_supplies', 'Unit Item Supplies', 'required');
	    $this->form_validation->set_rules('phone_number_supplies', 'Phone Number', 'required');

	    if($this->form_validation->run() == FALSE)
	    {
	        $this->load->view('templates/header');
	        $this->load->view('ebantuan/suppliesCreates',$data);
	        $this->load->view('templates/footer');
	    }
	    else
	    {
	        $this->SuppliesModel->create_post();
	        redirect('supplies/index');
	    }
	}
	
}