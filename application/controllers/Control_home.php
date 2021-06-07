<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_home extends CI_Controller {

	
	public function home()
	{
		$this->load->view('e_commerce/home');
	}
}