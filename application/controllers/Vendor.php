<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends CI_Controller {

	//  function __construct(){
  //   parent::__construct();
  //   $this->load->model('Login_model');
  //   $this->load->library('email');
  //   if($this->session->userdata('logged_in') !== TRUE){
  //     echo $this->session->set_flashdata('msg','Username or Password is Wrong');
  //     redirect('login');
  //   }
  // }


	public function index()
	{

		// $this->load->view('vendor/profile');

	}
 

  public function vendordetails()
  {
    $this->load->view('vendor/vendordetails');
  }

  public function verification()
  {
    $this->load->view('vendor/verification');
  }

  public function card()
  {
    $this->load->view('vendor/card');
  }
	

  public function addvendor()
{

  $this->load->model('Model_shop');
  $this->Model_shop->insert_vendorname();
}


public function addaadharpaninfo()
{

  $this->load->model('Model_shop');
  $this->Model_shop->adhrpan();
}


}

?>
