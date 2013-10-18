<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller{
	
	public function login(){
		$this->load->view('login');
	}

	public function process_login(){

		$this->load->library('form_validation');

		$this->form_validation->set_rules('email', 'Email Address', 'valid_email|required');

		var_dump($this->input->post());

		if ($this->form_validation->run()===FALSE) {
			echo validation_errors();
		}

		// echo $this->input->post('email');
	}

}