<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
function __construct(){
    parent::__construct();
    $this->load->model('login_model');
    $this->load->library("email");
    $this->load->model('google_login_model');
  }
 
function index(){
    // print_r($this->session->userdata());

    $this->load->library('user_agent');

    include_once APPPATH . "libraries/vendor/autoload.php";
        $google_client = new Google_Client();
        $google_client->setClientId('809908597455-i53vliggt5lfbkusa2v4fsni7kfk8t7l.apps.googleusercontent.com'); //Define your ClientID
        $google_client->setClientSecret('H84BU_2iB1q1HniCGhPC2WE8'); //Define your Client Secret Key
        $google_client->setRedirectUri('http://361.osculant.in/index.php/login'); //Define your Redirect Uri
        $google_client->addScope('email');
        $google_client->addScope('profile');
        $this->google_login_model->login($google_client);
   if($this->session->userdata('logged_in') !== TRUE){
   	// $this->load->view('online/signup'); 
    // $this->load->view('e_commerce/logIn');
    if ($this->agent->is_mobile()) {
        $login_button = '';
        if(!$this->session->userdata('access_token'))
        {
         $login_button = '<a max-width=50px; alt="Google sign-in" href="'.$google_client->createAuthUrl().'"><img src="'.base_url().'assets/images/gmail-sign-in.png"  align="Center" width=80%; height=10%;/></a>';
           $data['login_button'] = $login_button;
           $this->load->view('online/signup', $data);
          }
          else
          {
            $data=$this->session->userdata();
           $this->load->view('online/signup', $data);
          }  
                 // // redirect('control_shop/dashboard');
                 // $this->load->view('online/signup');
                 }
                else{
                  $login_button = '';
                   if(!$this->session->userdata('access_token'))
                   {
                    $login_button = '<a max-width=50px; alt="Google sign-in" href="'.$google_client->createAuthUrl().'"><img src="'.base_url().'assets/images/gmail-sign-in.png" width=80%; height=10%; align="Center"/></a>';
                     $data['login_button'] = $login_button;
                     $this->load->view('e_commerce/logIn', $data);
                    }
                    else
                    {
                      $data=$this->session->userdata();
                     $this->load->view('e_commerce/logIn', $data);
                    }  
                 // $view_folder = 'online/signup';
                 // $this->load->view('e_commerce/logIn');
                 }
        
          }else{
            $this->switching();

  
 }
   
    // $this->logout();
  }
  
 
function auth(){
    $email    = $this->input->post('email');
    $password =$this->input->post('psw');
    $validate = $this->login_model->validate($email,$password);
    // print_r($validate);
    if($validate->num_rows() > 0){

        $data  = $validate->row_array();
        
        $user_id=$data['id'];
        $name  = $data['name'];
        $email = $data['email'];
        $sesdata = array(
            'user_id'   => $user_id,
            'username'  => $name,
            'email'     => $email,
            'logged_in' => TRUE,
        );
        $temp_id= '1';
        $this->session->set_userdata($sesdata);
        $this->mail_debug($sesdata);
        $this->session->set_flashdata('msg','Sucess'); 
        // prireturn "sucess";
        // print_r($this->session->userdata());
        // $this->mail_debug($sesdata);
        $this->mail_send($temp_id,$sesdata);
        // $this->index();
        // print_r($validate);
         // print_r($sesdata);
        // return $sesdata;
        // access login for admin
        
      }
    else if($validate->num_rows() == 0){
      echo $this->session->set_flashdata('msg','Username or Password is Wrong');
        redirect('login');
    }else{
      echo "Something went Wrong! Please try again";
     	
    }
  }// switch to swicthing
function switching(){

    
             $from = $this->session->userdata('username');
             $this->db->where('id',$this->session->userdata('user_id'));
             $req = $this->db->get('app_users')->row_array();

             $user_id      =  $this->session->userdata('user_id');
             $email        =  $this->session->userdata('email');
			// print_r($this->session->userdata());
			// echo $user_id;
			// print_r($sesdata);
			// if($this->session->userdata('logged_in') !== 1){
			//   // echo "yes";
			// $this->load->view('online/signup');
			// }
			             // $sta =array(
			             //       'message'    => "Log In".' '.$this->session->userdata('user_id').' at '.$email.' on '.date('Y-m-d H:i:s') ,
			             //       'user_id' 	=>$user_id,
			             //   );  
			             // $this->db->insert('app_activity',$sta);
			
			
			    // $level    = $this->session->userdata('level');
			    // $category = $this->session->userdata('user_type');
			// echo $level;
			
			        // if($user_id !== '0'){
			        //        redirect('control_shop/dashboard');
			        //  }
			        //  else{
			        //       redirect('control_shop');
			        //  }

    if($req['ques1'] === ''){
         
           redirect('Login/logsecurequs');
      }
      else
      {
        
        if($user_id !== '0'){
               redirect('Control_shop/dashboard');
         }
         else{
              redirect('Control_shop');
         }
      }


	}


public function addsignUp()
	{
		$this->load->model('Model_shop');
	 	$qur=$this->Model_shop->insert_signUp();
    $temp_id="2";
	 	// echo $qur;
	 	// print_r($qur);
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
            'logged_in' => TRUE,
        );
        
        $this->mail_debug($sesdata);
        
        $this->session->set_userdata($sesdata);
        $this->mail_send($temp_id,$sesdata);
        $this->switching();
	 	}else{
	 		   redirect('login');
	 	}
	 }


  function logout(){
      $this->session->sess_destroy();
      // redirect('login');
      // redirect('Control_shop/dashboard');
       redirect('Control_e_commerce');
  }


  function logsecurequs()
  {
    // if($this->session->userdata('logged_in') !== TRUE){
    //  $this->load->view('online/signup'); 

    // }else{

    $this->load->helper('url');
    $this->load->Model('Model_shop');
    // $data['item_info'] = $this->Model_shop->getitemInfo();
    // $data['user_info'] = $this->Model_shop->getuserInfo();

    $data['cardcount'] = $this->Model_shop->cardCount();
    $this->load->view('online/logsecurequs',$data);
  // }

  }

  function loginsecurQues()
  {
    $this->load->Model('Model_shop'); 
    $this->Model_shop->loginsecure_info();
  }
  function mail_debug($data){
    $this->login_model->mail_debug($data);
  }
  function mail_send($temp_id,$data){
    $this->login_model->mail_send($temp_id,$data);
  }

}
