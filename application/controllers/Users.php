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
        //Encrypt password
        $enc_password = md5($this->input->post('user_password'));

        $this->user_model->register($enc_password);

        //Set message
      $this->session->set_flashdata('user_registered', 'You are now registered and can log in');

      redirect('ngo_home');
      }
    }
  }
