<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		// $query = $this->db->get('test');
		// $results = $query->result();
		// foreach ($results as $row) {
		// 	echo 'ini adalah nama:'.$row->name_tab.'<br>'; // replace column_name with the actual name of the column you want to print
		// }
		$data['title'] = "Home";

		$this->load->view('templates/header',$data);
		$this->load->view('home');
		$this->load->view('templates/footer');
	}

	
	
}
