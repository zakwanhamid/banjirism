<?php
  class Users extends CI_Controller{
    public function register(){
      $data['title'] = 'Sign Up';

      $this->form_validation->set_rules('user_ngo_name', 'Name', 'required');
      $this->form_validation->set_rules('user_name', 'Username', 'required');
      $this->form_validation->set_rules('user_password', 'Password', 'required');
      $this->form_validation->set_rules('user_password', 'Confirm Password', 'matches[user_password]');

      if($this->form_validation->run() === FALSE ){
        $this->load->view('templates/header');
        $this->load->view('users/register', $data);
        $this->load->view('templates/footer');

      }else{
        die('Continue');
      }

    }
  }
