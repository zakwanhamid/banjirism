<?php

class Auth extends CI_Controller
{

  public function register()
  {
    $this->load->view('templates/header');
    $this->load->view('register');
    $this->load->view('templates/footer');
  }
  public function loginComm()
  {
    $this->load->view('templates/header');
    $this->load->view('loginComm');
    $this->load->view('templates/footer');
  }
  public function loginNGO()
  {
    $this->load->view('templates/header');
    $this->load->view('loginNGO');
    $this->load->view('templates/footer');
  }
  public function welcomeNGO()
  {
    redirect('Showhall/index');
  }

  public function welcomeComm()
  {
    $this->load->view('templates/headerComm');
    $this->load->view('welcomeComm');
    $this->load->view('templates/footer');
  }

  public function signupInsert()
  {
    $this->load->model('AuthModel');
    $data = array(
      'ngo_name' => $this->input->post('ngo_name'),
      'ngo_username' => $this->input->post('ngo_username'),
      'ngo_password' => $this->input->post('ngo_password'),
      'ngo_register_date' => date('Y-m-d')
    );
    // $confirm_password = $this->input->post('user_password2');
    $ngo_password = $this->input->post('ngo_password');
    $ngo_username = $this->input->post('ngo_username');
    if ($this->AuthModel->check_username_exists($ngo_username)) {
      echo 'This email is already exists';
      // $data = array(
      //   'exists' => true);
      // $a = 'sdfsfd';
      // $this->load->view('register', $a);
    } else {
      // if ($password === $confirm_password) {
      $this->AuthModel->insert_data_to_db($data);
      redirect('Auth/loginNGO');
      // } else {
      //   // Display error message if passwords do not match
      // }
    }
  }

  //to verify ngo login
  public function verifyLoginNGO()
  {
    $this->load->library('form_validation');
    $this->load->library('session');
    $this->load->model('AuthModel');
    $this->form_validation->set_rules('ngo_username', 'Username', 'trim|required');
    $this->form_validation->set_rules('ngo_password', 'Password', 'trim|required');
    if ($this->form_validation->run() == FALSE) {
      $this->session->set_flashdata('error', validation_errors());
      redirect('Auth/loginNGO');
    } else {
      $ngo_username = $this->input->post('ngo_username');
      $ngo_password = $this->input->post('ngo_password');
      $session = $this->AuthModel->user_check_NGO($ngo_username, $ngo_password);
      if (count($session) > 0) {
        $sess_array = array('ngo_id' => $session[0]->ngo_id, 'ngo_username' => $session[0]->ngo_username);
        $this->session->set_userdata('loggedIn', $sess_array);
        redirect('Auth/secureNGO');
      }else{
        $this->session->set_flashdata('error','Usermame or password is incorrect');
        redirect('Auth/loginNGO');
      }
    }
  }

  //to verify comm login
  public function verifyLoginComm()
  {
    $this->load->library('form_validation');
    $this->load->library('session');
    $this->load->model('AuthModel');
    $this->form_validation->set_rules('comm_username', 'Usernname', 'trim|required');
    $this->form_validation->set_rules('comm_password', 'Password', 'trim|required');
    if ($this->form_validation->run() == FALSE) {
      $this->session->set_flashdata('error', validation_errors());
      redirect('Auth/loginComm');
    } else {
      $comm_username = $this->input->post('comm_username');
      $comm_password = $this->input->post('comm_password');
      $session = $this->AuthModel->user_check_comm($comm_username, $comm_password);
      if (count($session) > 0) {
        $sess_array = array('comm_id' => $session[0]->comm_id, 'comm_username' => $session[0]->comm_username);
        $this->session->set_userdata('loggedIn', $sess_array);
        redirect('Auth/secureComm');
      } else {
        $this->session->set_flashdata('error', 'Something went wrong');
        redirect('Auth/loginComm');

      }
    }
  }

  public function secureNGO()
  {
    if ($this->session->userdata('loggedIn')) {
      redirect('Auth/welcomeNGO');
    } else {
      redirect('Auth/verifyLoginNGO');
    }
  }
  public function secureComm()
  {
    if ($this->session->userdata('loggedIn')) {
      //redirect('Auth/welcomeComm');
      redirect('stock_item_comm/index');
    } else {
      redirect('Auth/verifyLoginComm');
    }
  }

  public function logoutNGO()
  {
    $this->session->sess_destroy();
    redirect('Auth/loginNGO');
  }

  public function logoutComm()
  {
    $this->session->sess_destroy();
    redirect('Auth/loginComm');
  }



}