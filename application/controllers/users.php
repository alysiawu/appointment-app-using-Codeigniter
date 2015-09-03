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
		$all_questions = $this->User->get_all_questions();
		$this->load->view('users/index', array('all_questions'=>$all_questions));
	}
	public function add(){
		$answer= $this->input->post();
		$this->User->add_answer($answer);
		redirect("users/show_stat");
}

	public function show_stat(){
		$female_relationship=$this->User->female_relationship();
		$female_country=$this->User->female_country();
		$female_sport=$this->User->female_sport();
		$female_language=$this->User->female_language();
		$male_relationship=$this->User->male_relationship();
		$male_country=$this->User->male_country();
		$male_sport=$this->User->male_sport();
		$male_language=$this->User->male_language();

		 $this->load->view('users/results', array('female_relationship'=>$female_relationship, 'female_country'=>$female_country, 'female_sport'=>$female_sport, 'female_language'=>$female_language, 'male_relationship'=>$male_relationship, 'male_country'=>$male_country, 'male_sport'=>$male_sport, 'male_language'=>$male_language));
	}

}



