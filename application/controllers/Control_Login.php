<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_Login extends CI_Controller {

	
	public function login()
	{
		redirect('login');
		// $this->load->library('user_agent');

		// $this->load->view('e_commerce/logIn');
		// if ($this->agent->is_mobile()) {
  //                 $this->load->view('online/signup');
  //             }
  //          else{
  //                $this->load->view('e_commerce/logIn');
  //             }
	}
}