<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Showhall extends CI_Controller
{

  public function index()
  {
    $data['title'] = "Community Hall";

    $this->load->view('templates/header', $data);
    $this->load->view('showhall');
    $this->load->view('templates/footer');
  }


}