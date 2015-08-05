<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Appointments extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    // $this->output->enable_profiler();
    $this->load->model('User');

  }

  public function index()
  {
  	$all_current_app = $this->User->get_current_app();
		// var_dump($all_app);
		// die();
  	$all_other_app = $this->User->get_other_app();
    $this->load->view('reviews/index', array('all_current_apps'=>$all_current_app, "all_other_apps"=>$all_other_app));
  }

	public function add()
	{	
		$app= $this->input->post();
		$is_valid = $this->User->add_app($app);
		  if($is_valid[0] == 'valid'){
	       redirect('appointments/index');
    	} else {
    		 $this->session->set_flashdata('app_errors', $is_valid);
    		 redirect('appointments/index');
    	}
		// redirect('appointments/index');
	}
	public function edit_app($task_id)
	{		
		$this->load->view('reviews/edit_app', array("task_id"=>$task_id));
	}
	public function edit_this_app()
	{
		$post = ($this->input->post());
		// var_dump($post);
		// die();
		$this->User->edit_app($post);
		redirect('appointments/index');

	}
	public function delete_app($task_id)
	{
		$this->User->delete_app($task_id);
		redirect('appointments/index');
		// var_dump($task_id);
		// die();
	}
}



//end of main controller