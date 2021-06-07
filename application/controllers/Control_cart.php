<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_cart extends CI_Controller {

	
	public function cart()
	{
		$this->load->view('e_commerce/cart');
	}
}