<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_product extends CI_Controller {

	
	public function product()
	{
		$this->load->view('e_commerce/product');
	}
}