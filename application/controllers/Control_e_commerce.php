<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_e_commerce extends CI_Controller {
	public function index()
	{

    // if($this->session->userdata('logged_in') !== 1){

       $this->load->library('user_agent');

       if ($this->agent->is_mobile()) {
         // $this->load->view('online/signup');
           $this->load->Model('Model_shop');
      $data['item_info'] = $this->Model_shop->getitemInfo1();
      // $data['milk_info'] = $this->Model_shop->getmilkInfo1();
      // $data['medicine_info'] = $this->Model_shop->getmedicineInfo1();
      // $data['dailyneeds_info'] = $this->Model_shop->getdailyneedsInfo1();
      $data['feat_info']  = $this->Model_shop->getfeatInfo1();

      $data['cardcount'] = $this->Model_shop->cardCount();

      $data['com_info'] = $this->Model_shop->com_info();

      
      // $data['image_info'] = $this->Model_shop->image_info();
      $data['image_info'] = $this->Model_shop->mobimage_info();


      $data['cateInfo'] = $this->Model_shop->cat();
        // $this->load->view('online/dashboard',$data); 

        if($this->session->userdata('logged_in')  !== TRUE){
       $this->load->model('Model_shop');
       $qur=$this->Model_shop->insert_webtempsession();

       if($qur > 0 ){

            
        $user_id=$qur['temp_user'];
            
     

            $sesdata = array(
               'user_id'   => $user_id,
           
               'logged_in' => TRUE,
           );
        
              $this->session->set_userdata($sesdata);
              $this->switching();
            }
            else{
                redirect('Control_e_commerce/logout');
             }
        }else{
         redirect('Control_e_commerce/switching');
        }
        
      }




      if($this->session->userdata('logged_in')  !== TRUE){
       $this->load->model('Model_shop');
	     $qur=$this->Model_shop->insert_webtempsession();

	 	   if($qur > 0 ){

            
	 			$user_id=$qur['temp_user'];
            
     

            $sesdata = array(
               'user_id'   => $user_id,
           
               'logged_in' => TRUE,
           );
        
              $this->session->set_userdata($sesdata);
              $this->switching();
            }
            else{
                redirect('Control_e_commerce/logout');
             }
	 			}else{
	 		   redirect('Control_e_commerce/switching');
	 	    }
 }



	
	function switching(){
             // $this->db->where('id',$this->session->userdata('user_id'));
             // $req = $this->db->get('web_tempuser')->row_array();

             // $cat      =  $this->session->userdata('category');

     // $this->db->where('id',$this->session->userdata('user_id'));
     // $result = $this->db->get('app_users')->row_array();

     // $this->db->where('id',$this->session->userdata('user_id'));
     // $req = $this->db->get('Users')->row_array();


          
			// if($this->session->userdata('logged_in') !== 1){

       $this->load->library('user_agent');

       if ($this->agent->is_mobile()) {
         // $this->load->view('online/signup');
       	   $this->load->Model('Model_shop');
			$data['item_info'] = $this->Model_shop->getitemInfo1();
			// $data['milk_info'] = $this->Model_shop->getmilkInfo1();
			// $data['medicine_info'] = $this->Model_shop->getmedicineInfo1();
			// $data['dailyneeds_info'] = $this->Model_shop->getdailyneedsInfo1();
			$data['feat_info']  = $this->Model_shop->getfeatInfo1();

			$data['cardcount'] = $this->Model_shop->cardCount();

			$data['com_info']	= $this->Model_shop->com_info();

			
			// $data['image_info']	= $this->Model_shop->image_info();
      
      $data['image_info'] = $this->Model_shop->mobimage_info();


      $data['user_info'] = $this->Model_shop->getuserInfo();


			$data['cateInfo'] = $this->Model_shop->cat();

      $data['pin']  = $this->Model_shop->getpincodetempusr();

        $data['dairy']     = $this->Model_shop->getdairydata();
        $data['drinks']    = $this->Model_shop->getdrinksdata();
        $data['masale']    = $this->Model_shop->getMasaladata();

        
        $data['cardcountberorelog'] = $this->Model_shop->cardCountceforelogin();
        
		    $this->load->view('online/dashboard',$data);
         }
        else{

        	// $this->db->where('id',$this->session->userdata('user_id'));
         //     $req = $this->db->get('web_user')->row_array();

             // if($req['name'] === '' || $req['email'] === '' || $req['mobile'] === ''){
                
               // redirect('Login/logsecurequs');
              //	redirect('Control_shop/userdata',$req);
             // }
           // else
            // {
  
      $this->load->Model('Model_shop');
			$data['item_info']      = $this->Model_shop->getitemInfo1();
			// $data['milk_info'] = $this->Model_shop->getmilkInfo1();
			// $data['medicine_info'] = $this->Model_shop->getmedicineInfo1();
			// $data['dailyneeds_info'] = $this->Model_shop->getdailyneedsInfo1();
			// $data['feat_info']  = $this->Model_shop->getfeatInfo1();
			$data['feat_info']      = $this->Model_shop->getfeatInfo();

			$data['cardcount']      = $this->Model_shop->cardCount();

      $data['cardcountberorelog'] = $this->Model_shop->cardCountceforelogin();

			$data['com_info']	      = $this->Model_shop->com_info();

			// $data['image_info']	= $this->Model_shop->image_info();

			$data['cateInfo']       = $this->Model_shop->cat();

			$data['allItem']        = $this->Model_shop->getallitems();

			$data['footimage_info']	= $this->Model_shop->footimage_info();

			$data['featimage']	    = $this->Model_shop->featimage();

			$data['footer_info']	  = $this->Model_shop->footer_info();

			// $data['user_info'] = $this->Model_shop->webuserInfo();

      $data['user_info']      = $this->Model_shop->getuserInfo();
		    // $this->load->view('e_commerce/e_commerce',$data);

		    $data['adver_left']   = $this->Model_shop->advertiesimgLeft();
		    $data['adver_middle'] = $this->Model_shop->advertiesimgMiddle();

        $data['pin']          = $this->Model_shop->getpincodetempusr();


        $data['image_info']   = $this->Model_shop->webimage_info();




        $data['dairy']     = $this->Model_shop->getdairydata();
        $data['drinks']    = $this->Model_shop->getdrinksdata();
        $data['masale']    = $this->Model_shop->getMasaladata();

        // if($cat !== 'Vendor')
        // {
         $this->load->view('e_commerce/e_com',$data); 
        // }
        // elseif ($cat === 'Vendor') {
        //   # code...
        //    redirect('http://adminbazaria.osculant.in/index.php/vendor/');
        // }
		    // $this->load->view('e_commerce/e_com',$data);

             //}

         }

     // }
}





public function addsignUp()
	{
		$this->load->model('Model_shop');
	 	$qur=$this->Model_shop->insert_websignUp();
    $temp_id="2";
	 	
	 	if($qur > 0 ){
	 
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
        
        // $this->mail_debug($sesdata);
        
        $this->session->set_userdata($sesdata);
        // $this->mail_send($temp_id,$sesdata);
        $this->switching();
	 	}else{
	 		   redirect('login');
	 	}
	 }


 function auth(){
    $this->load->model('Model_shop');	
    $email    = $this->input->post('email');
    $password =$this->input->post('psw');
    $validate = $this->Model_shop->validate($email,$password);

   // print_r($this->session->userdata('user_id')
    // $this->logout();
    // print_r($validate);

    echo $this->session->userdata('user_id');
   


    if($validate->num_rows() > 0){

        $data  = $validate->row_array();
        
        $user_id=$data['id'];
        $name  = $data['name'];
        $email = $data['email'];
        $cat   = $data['category'];
        $sesdata = array(
            'user_id'   => $user_id,
            'username'  => $name,
            'email'     => $email,
            'category'  => $cat,
            'logged_in' => TRUE,
        );
        print_r($sesdata);


        $temp_id= '1';
        $this->session->set_userdata($sesdata);
        $this->session->set_flashdata('msg','Sucess'); 

         echo $this->session->userdata('user_id');
       
        
      }
    else if($validate->num_rows() == 0){
      echo $this->session->set_flashdata('msg','Username or Password is Wrong');
        redirect('Control_shop/login2');
    }else{
      echo "Something went Wrong! Please try again";
     	
    }
  }


 function logout(){
      $this->session->sess_destroy();
      // redirect('Control_shop/login2');
      redirect('Control_e_commerce');
      // echo 'session destroy';
      // echo $this->session->userdata('user_id');
  }

  function login()
  {
    $this->load->view('online/signup');
  }


  function updpincodetempusr()
  {
    $this->load->model('Model_shop');
    $this->Model_shop->updt_pintmpuser();
  }


  // switch to swicthing



	// public function e_com()
	// {
	// 	$this->load->Model('Model_shop');
	// 		$data['item_info'] = $this->Model_shop->getitemInfo1();
	// 		$data['milk_info'] = $this->Model_shop->getmilkInfo1();
	// 		$data['medicine_info'] = $this->Model_shop->getmedicineInfo1();
	// 		$data['dailyneeds_info'] = $this->Model_shop->getdailyneedsInfo1();
	// 		$data['feat_info']  = $this->Model_shop->getfeatInfo1();

	// 		$data['cardcount'] = $this->Model_shop->cardCount();

	// 		$data['com_info']	= $this->Model_shop->com_info();

	// 		$data['image_info']	= $this->Model_shop->image_info();

	// 		$data['cateInfo'] = $this->Model_shop->cat();

	// 		$data['allItem']  = $this->Model_shop->getallitems();

	// 		$data['footimage_info']	= $this->Model_shop->footimage_info();

	// 		$data['featimage']	= $this->Model_shop->featimage();

	// 		$data['footer_info']	= $this->Model_shop->footer_info();
	// 	$this->load->view('e_commerce/e_com',$data);
	// }
}
