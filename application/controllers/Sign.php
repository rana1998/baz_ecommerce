
<?php
class Sign extends CI_Controller{
  
 
  function index(){
    $this->load->view('online/sign');
    // $this->load->view('e_commerce/signUp');
  }

  // function addregister()
  // {
  // 	$this->load->model('SignUpRegister');
  // 	$this->SignUpRegister->insert_register();

  // }


  public function addsignUp()
	{
		$this->load->model('Model_shop');
	 	$qur=$this->Model_shop->insert_signUp();

	 	echo $qur;
	 	print_r($qur);
	 	if($qur > 0 ){
	 		// print_r(expression);
	 	 // echo "if";	
	 		$user_id=$qur['id'];
        $name  = $qur['name'];
        $email = $qur['email'];
        $mobile = $qur['mobile'];
        // $user_type = $data['user_category'];
        $sesdata = array(
            'user_id'   => $user_id,
            'username'  => $name,
            'email'     => $email,
            'mobile'     => $mobile,
            // 'user_type' => $user_type,
            // 'sessionn'  => '2020-21',
            'logged_in' => TRUE
        );
        
        $this->session->set_userdata($sesdata);
        $this->switching();
	 	}else{
	 		   redirect('login');
	 	}
	 }


   public function forget()
  {

    $this->load->library('user_agent');
    $valId = $this->input->get();
    $dat =   $valId['emaId'];

    $this->load->Model('Model_shop'); 
    $data['new_forget'] = $this->Model_shop->forget_info($dat);

    // $this->load->view('online/forget',$data);
    // $this->load->view('e_commerce/forget',$data);
    if ($this->agent->is_mobile()) {
                  $this->load->view('online/forget',$data);
              }
           else{
                 $this->load->view('e_commerce/forget',$data);
              }
    
   }


   public function securQues()
   {
    $this->load->Model('Model_shop'); 
    $this->Model_shop->secure_info();
   }

   public function updaPass()
   {
      $this->load->Model('Model_shop'); 
      $this->Model_shop->updatpass();
   }

}  