<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    // $this->output->enable_profiler();
    $this->load->model('User');
  }

  public function index()
  {
    $this->load->view('users/index');
  }

  public function register(){
    $is_valid = $this->User->register($this->input->post());
    if($is_valid[0] == 'valid'){
      //redirect to appointments index
      $user = $this->User->get_user_by_id($is_valid[1]);
      // var_dump($user);
      $this->session->set_userdata('id', $user['id']);
      $this->session->set_userdata('name', $user['name']);
      redirect('appointments/index');
    } else {
      // set session error messages
      $this->session->set_flashdata('reg_errors', $is_valid);
      // redirect to index
      redirect('/');
      // show session error messages
    }
  }

  public function login(){
    $is_logged = $this->User->login($this->input->post());
    if($is_logged){
      // var_dump($is_logged);
      // die();
      $this->session->set_userdata('id', $is_logged['id']);
      $this->session->set_userdata('name', $is_logged['name']);
      redirect('/appointments/index');

    } else {
      $this->session->set_flashdata('log_errors', "<p class='errors'>Invalid login credentials</p>");
      redirect('/');
    }
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect('/');
  }
}



