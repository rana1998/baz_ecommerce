<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_shop extends CI_Controller {
function __construct(){
    parent::__construct();
    $this->load->model('login_model');
$this->load->library("email");
// if($this->session->userdata('logged_in') !== TRUE){
//    $this->load->view('online/signup'); 

//   }


  }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 // * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		$this->load->library('user_agent');
		if($this->session->userdata('logged_in') !== TRUE){
	  

        if ($this->agent->is_mobile()) {
        
        	$this->load->Model('Model_shop');
            $data['com_info']	= $this->Model_shop->com_info();

            $data['cateInfo'] = $this->Model_shop->cat();

            // $data['image_info']	= $this->Model_shop->image_info();
            $data['image_info'] = $this->Model_shop->mobimage_info();

            $data['user_info'] = $this->Model_shop->getuserInfo();
            $data['pin']  = $this->Model_shop->getpincodetempusr();

            $data['dairy']     = $this->Model_shop->getdairydata();
        $data['drinks']    = $this->Model_shop->getdrinksdata();
        $data['masale']    = $this->Model_shop->getMasaladata();


        	$this->load->view('online/e_commerce',$data);
         }
        else{
         $this->load->Model('Model_shop');
         $data['com_info']	= $this->Model_shop->com_info();

         $data['cateInfo'] = $this->Model_shop->cat();

         // $data['image_info']	= $this->Model_shop->image_info();
         $data['image_info'] = $this->Model_shop->webimage_info();
         $data['pin']  = $this->Model_shop->getpincodetempusr();

         $data['dairy']     = $this->Model_shop->getdairydata();
        $data['drinks']    = $this->Model_shop->getdrinksdata();
        $data['masale']    = $this->Model_shop->getMasaladata();

         $this->load->view('e_commerce/e_commerce',$data);
         }


	  }else{
	  	$this->dashboard();
	  }
		
	}




   public function dashboard()
	{

    $this->load->library('user_agent');


	if($this->session->userdata('logged_in') !== TRUE){
	   // $this->load->view('online/signup'); 
		// $this->load->view('e_commerce/logIn');
		if ($this->agent->is_mobile()) {
         // $this->load->view('online/signup');
			$this->load->helper('url');
			$this->load->Model('Model_shop');
			$data['item_info'] = $this->Model_shop->getitemInfo1();
			// $data['milk_info'] = $this->Model_shop->getmilkInfo1();
			// $data['medicine_info'] = $this->Model_shop->getmedicineInfo1();
			// $data['dailyneeds_info'] = $this->Model_shop->getdailyneedsInfo1();
			$data['feat_info']  = $this->Model_shop->getfeatInfo1();

			$data['cardcount'] = $this->Model_shop->cardCount();

			$data['cardcountberorelog'] = $this->Model_shop->cardCountceforelogin();
			// $this->load->view('online/dashboard',$data);
			// $this->load->view('e_commerce/home',$data);

			$data['com_info']	= $this->Model_shop->com_info();
			$data['cateInfo'] = $this->Model_shop->cat();

			// $data['image_info']	= $this->Model_shop->image_info();
			$data['image_info'] = $this->Model_shop->mobimage_info();

			$data['featimage']	= $this->Model_shop->featimage();
			$data['footer_info']	= $this->Model_shop->footer_info();

			$data['user_info'] = $this->Model_shop->getuserInfo();

			$data['pin']  = $this->Model_shop->getpincodetempusr();


			$data['dairy']     = $this->Model_shop->getdairydata();
        $data['drinks']    = $this->Model_shop->getdrinksdata();
        $data['masale']    = $this->Model_shop->getMasaladata();
			$this->load->view('online/dashboard',$data);
         }
        else{

        	$this->load->helper('url');
			$this->load->Model('Model_shop');

           $data['item_info'] = $this->Model_shop->getitemInfo1();
			// $data['milk_info'] = $this->Model_shop->getmilkInfo1();
			// $data['medicine_info'] = $this->Model_shop->getmedicineInfo1();
			// $data['dailyneeds_info'] = $this->Model_shop->getdailyneedsInfo1();
			$data['feat_info']  = $this->Model_shop->getfeatInfo1();

			$data['cardcount'] = $this->Model_shop->cardCount();

			$data['cardcountberorelog'] = $this->Model_shop->cardCountceforelogin();

			$data['com_info']	= $this->Model_shop->com_info();

			// $data['image_info']	= $this->Model_shop->image_info();

			$data['image_info'] = $this->Model_shop->webimage_info();

			$data['cateInfo'] = $this->Model_shop->cat();

			$data['allItem']  = $this->Model_shop->getallitems();

			$data['footimage_info']	= $this->Model_shop->footimage_info();

			$data['featimage']	= $this->Model_shop->featimage();

			$data['footer_info']	= $this->Model_shop->footer_info();

			$data['pin']  = $this->Model_shop->getpincodetempusr();


			$data['dairy']     = $this->Model_shop->getdairydata();
        $data['drinks']    = $this->Model_shop->getdrinksdata();
        $data['masale']    = $this->Model_shop->getMasaladata();

			$this->load->view('e_commerce/e_commerce',$data);
         }

	  }else{
	  	# code...
	  
			$this->load->helper('url');
			$this->load->Model('Model_shop');
			$data['item_info'] = $this->Model_shop->getitemInfo1();
			// $data['milk_info'] = $this->Model_shop->getmilkInfo1();
			// $data['medicine_info'] = $this->Model_shop->getmedicineInfo1();
			// $data['dailyneeds_info'] = $this->Model_shop->getdailyneedsInfo1();
			$data['feat_info']  = $this->Model_shop->getfeatInfo1();

			$data['cardcount'] = $this->Model_shop->cardCount();

			$data['cardcountberorelog'] = $this->Model_shop->cardCountceforelogin();
			// $this->load->view('online/dashboard',$data);
			// $this->load->view('e_commerce/home',$data);

			$data['com_info']	= $this->Model_shop->com_info();
			$data['cateInfo'] = $this->Model_shop->cat();

			// $data['image_info']	= $this->Model_shop->image_info();

			$data['featimage']	= $this->Model_shop->featimage();
			$data['footer_info']	= $this->Model_shop->footer_info();

			$data['user_info'] = $this->Model_shop->getuserInfo();

			$data['pin']  = $this->Model_shop->getpincodetempusr();

			$data['dairy']     = $this->Model_shop->getdairydata();
        $data['drinks']    = $this->Model_shop->getdrinksdata();
        $data['masale']    = $this->Model_shop->getMasaladata();

			if ($this->agent->is_mobile()) {
				  $data['image_info'] = $this->Model_shop->mobimage_info();
                  $this->load->view('online/dashboard',$data);
              }
           else{

           	     $data['image_info'] = $this->Model_shop->webimage_info();
                 $this->load->view('e_commerce/home',$data);
              }
		}
	}




	public function grocery_manage()
	{

	if($this->session->userdata('logged_in') !== TRUE){
	   // $this->load->view('online/signup'); 
		$this->load->view('e_commerce/logIn');

	  }else{

		$this->load->helper('url');
		$this->load->Model('Model_shop');
		$data['item_info'] = $this->Model_shop->getitemInfo();
		// $data['milk_info'] = $this->Model_shop->getmilkInfo();

		$data['cardcount'] = $this->Model_shop->cardCount();

		$data['cardcountberorelog'] = $this->Model_shop->cardCountceforelogin();

		$data['cateInfo'] = $this->Model_shop->cat();
		$this->load->view('e_commerce/grocery_manage',$data);
	}
	}

	public function milk_manage()
	{

	if($this->session->userdata('logged_in') !== TRUE){
	   // $this->load->view('online/signup'); 
		$this->load->view('e_commerce/logIn');

	  }else{
		$this->load->helper('url');
		$this->load->Model('Model_shop');
		// $data['item_info'] = $this->Model_shop->getitemInfo();
		$data['milk_info'] = $this->Model_shop->getmilkInfo();

		$data['cardcount'] = $this->Model_shop->cardCount();
		$data['cardcountberorelog'] = $this->Model_shop->cardCountceforelogin();
		$data['cateInfo'] = $this->Model_shop->cat();
		$this->load->view('e_commerce/milk_manage',$data);
	}
	}

	public function medicine_manage()
	{

	if($this->session->userdata('logged_in') !== TRUE){
	   // $this->load->view('online/signup'); 
		$this->load->view('e_commerce/logIn');

	  }else{
		$this->load->helper('url');
		$this->load->Model('Model_shop');
		// $data['item_info'] = $this->Model_shop->getitemInfo();
		$data['medicine_info'] = $this->Model_shop->getmedicineInfo();
		// print_r($data['medicine_info']);

		$data['cardcount'] = $this->Model_shop->cardCount();

		$data['cardcountberorelog'] = $this->Model_shop->cardCountceforelogin();

		$data['cateInfo'] = $this->Model_shop->cat();
		$this->load->view('e_commerce/medicine',$data);
	}
}

	public function dailyneeds_manage()
	{

	if($this->session->userdata('logged_in') !== TRUE){
	   // $this->load->view('online/signup');
	   $this->load->view('e_commerce/logIn'); 

	  }else{
		$this->load->helper('url');
		$this->load->Model('Model_shop');
		// $data['item_info'] = $this->Model_shop->getitemInfo();
		$data['dailyneeds_info'] = $this->Model_shop->getdailyneedsInfo();

        $data['cardcount'] = $this->Model_shop->cardCount();


        $data['cardcountberorelog'] = $this->Model_shop->cardCountceforelogin();

        $data['cateInfo'] = $this->Model_shop->cat();
		$this->load->view('e_commerce/daily_needs',$data);
	}
	}

	public function feat_manage()
	{

    $this->load->library('user_agent');

	// if($this->session->userdata('logged_in') !== TRUE){
	//    // $this->load->view('online/signup'); 
	// 	// $this->load->view('e_commerce/logIn');
	// 	if ($this->agent->is_mobile()) {
 //                  $this->load->view('online/signup');
 //              }
 //           else{
 //                 $this->load->view('e_commerce/logIn');
 //              }

	//   }else{
		$this->load->helper('url');
		$this->load->Model('Model_shop');
		// $data['item_info'] = $this->Model_shop->getitemInfo();
		$data['feat_info'] = $this->Model_shop->getfeatInfo();

        $data['cardcount'] = $this->Model_shop->cardCount();

        $data['cardcountberorelog'] = $this->Model_shop->cardCountceforelogin();
		// $this->load->view('e_commerce/feature',$data);

		$data['com_info']	= $this->Model_shop->com_info();

        $data['cateInfo'] = $this->Model_shop->cat();

        // $data['image_info']	= $this->Model_shop->image_info();
        $data['footer_info']	= $this->Model_shop->footer_info();

        $data['user_info'] = $this->Model_shop->getuserInfo();


		if ($this->agent->is_mobile()) {
			    $data['image_info'] = $this->Model_shop->mobimage_info();
                  $this->load->view('online/feature',$data);
              }
           else{
           	$data['image_info'] = $this->Model_shop->webimage_info();
                 $this->load->view('e_commerce/feature',$data);
              }
	   // }
	}

    public function cart_manage()
     {

    $this->load->library('user_agent');
	// if($this->session->userdata('logged_in') !== TRUE){
	   
		// if ($this->agent->is_mobile()) {
  //                 $this->load->view('online/signup');
  //             }
  //          else{
  //                $this->load->view('e_commerce/logIn');
  //             }

	  // }else{

     	$this->load->helper('url');
		$this->load->Model('Model_shop');
		// $data['product_info'] = $this->Model_shop->getorderInfo();
		$data['product_info'] = $this->Model_shop->getweborderInfo();
		$data['price'] =  $this->Model_shop->totalsum();

		$data['cardcount'] = $this->Model_shop->cardCount();

		$data['cardcountberorelog'] = $this->Model_shop->cardCountceforelogin();
		// print_r($data['price']);
		// $this->load->view('e_commerce/cart',$data);

		$data['com_info']	= $this->Model_shop->com_info();

		$data['cateInfo'] = $this->Model_shop->cat();

		// $data['image_info']	= $this->Model_shop->image_info();
		$data['footer_info']	= $this->Model_shop->footer_info();

		$data['user_info'] = $this->Model_shop->getuserInfo();

		$data['orderitmaccount']  = $this->Model_shop->orderamountinfo();
		if ($this->agent->is_mobile()) {
			$data['image_info'] = $this->Model_shop->mobimage_info();
                 $this->load->view('online/card',$data);
              }
           else{
           	$data['image_info'] = $this->Model_shop->webimage_info();
                 $this->load->view('e_commerce/cart',$data);
              }
	     // }
}


	//inbox Function to post data
	public function addcart()
	{ 

	if($this->session->userdata('logged_in') !== TRUE){
	   // $this->load->view('online/signup'); 
		$this->load->view('e_commerce/logIn');

	  }else{
	    $this->load->model('Model_shop');
	    $this->Model_shop->insert_addcart();
	}
}


//webaddcartFunction to post data
    public function webaddcart()
    {
    	$this->load->model('Model_shop');
	    $this->Model_shop->insert_webaddcart();

    }



	public function contact_us(){

	if($this->session->userdata('logged_in') !== TRUE){
	   // $this->load->view('online/signup');
	   $this->load->view('e_commerce/logIn'); 

	  }else{
        $this->load->model('Model_shop');
	  	$data['user_info'] = $this->Model_shop->getuserInfo();
	  	$data['cateInfo'] = $this->Model_shop->cat();
		$this->load->view('online/contact_us',$data);
	}
	}

	public function rmvItm()
	{

	if($this->session->userdata('logged_in') !== TRUE){
	   // $this->load->view('online/signup'); 
		$this->load->view('e_commerce/logIn');

	  }else{
		$this->load->model('Model_shop');
	    $this->Model_shop->rmv_item();
	}
}



//web removeItm Function 

public function webrmv_item()
	{

	if($this->session->userdata('logged_in') !== TRUE){
	   // $this->load->view('online/signup'); 
		$this->load->view('e_commerce/logIn');

	  }else{
		$this->load->model('Model_shop');
	    $this->Model_shop->webrmvitem();
	}
}


public function webrmv_item2()
	{

	if($this->session->userdata('logged_in') !== TRUE){
	   // $this->load->view('online/signup'); 
		$this->load->view('e_commerce/logIn');

	  }else{
		$this->load->model('Model_shop');
	    $this->Model_shop->webrmvitem2();
	}
}



public function cart2_manage()
     {

      $this->load->library('user_agent');

	 //  if($this->session->userdata('logged_in') !== TRUE){
	 //   // $this->load->view('online/signup'); 
		// // $this->load->view('e_commerce/logIn');
		// if ($this->agent->is_mobile()) {
  //                 $this->load->view('online/signup');
  //             }
  //          else{
  //                $this->load->view('e_commerce/logIn');
  //             }

	 //  }else{


        // $valId = $this->input->get();
	       //  // print_r($valId['valId']);
               
        //     $dat =   $valId['valId'];



     	$this->load->helper('url');
		$this->load->Model('Model_shop');
		// $data['product_info'] = $this->Model_shop->getorderInfo();
		$data['product_info'] = $this->Model_shop->getweborderInfo();

		$data['price'] =  $this->Model_shop->totalsum();
		$data['user_info'] = $this->Model_shop->getuserInfo();

		$data['cardcount'] = $this->Model_shop->cardCount();

		$data['cardcountberorelog'] = $this->Model_shop->cardCountceforelogin();
		// print_r($data['price']);
		// $this->load->view('online/checkout',$data);
		// $this->load->view('e_commerce/checkout',$data);

		$data['com_info']	= $this->Model_shop->com_info();

		$data['cateInfo'] = $this->Model_shop->cat();

		// $data['image_info']	= $this->Model_shop->image_info();

		$data['footer_info']	= $this->Model_shop->footer_info();

		// $data['feat_info']  = $this->Model_shop->getfeatInfo1();
		$data['feat_info']  = $this->Model_shop->getfeatInfo();

		$data['user_info'] = $this->Model_shop->webuserInfo();

		$data['allItem']  = $this->Model_shop->getallitems();

		// $data['new_pro'] = $this->Model_shop->pro_info($dat);

		if ($this->agent->is_mobile()) {

			      $data['image_info'] = $this->Model_shop->mobimage_info();
                  $this->load->view('online/checkout',$data);
              }
           else{
           	      $data['image_info'] = $this->Model_shop->webimage_info();
                 // $this->load->view('e_commerce/checkout',$data);
           	       $this->load->view('e_commerce/cart2',$data);
              }
	     // }
}



//

	public function checkout_manage()
     {

      $this->load->library('user_agent');

	 //  if($this->session->userdata('logged_in') !== TRUE){
	 //   // $this->load->view('online/signup'); 
		// // $this->load->view('e_commerce/logIn');
		// if ($this->agent->is_mobile()) {
  //                 $this->load->view('online/signup');
  //             }
  //          else{
  //                $this->load->view('e_commerce/logIn');
  //             }

	 //  }else{

       $valId = $this->input->get();
	       //  // print_r($valId['valId']);
               
        if(isset($valId['content']))
        {
        	$dat =   $valId['content'];
        }       
        



     	$this->load->helper('url');
		$this->load->Model('Model_shop');

        if(isset($dat))
        {
          $data['ship_adr']     = $this->Model_shop->shipadr($dat);
        }
		// $data['ship_adr']     = $this->Model_shop->shipadr($dat);


		$data['product_info'] = $this->Model_shop->getorderInfo();
		$data['price'] =  $this->Model_shop->totalsum();
		$data['user_info'] = $this->Model_shop->getuserInfo();

		$data['cardcount'] = $this->Model_shop->cardCount();

		$data['cardcountberorelog'] = $this->Model_shop->cardCountceforelogin();
		// print_r($data['price']);
		// $this->load->view('online/checkout',$data);
		// $this->load->view('e_commerce/checkout',$data);

		$data['com_info']	= $this->Model_shop->com_info();

		$data['cateInfo'] = $this->Model_shop->cat();

		// $data['image_info']	= $this->Model_shop->image_info();

		$data['footer_info']	= $this->Model_shop->footer_info();

		// $data['feat_info']  = $this->Model_shop->getfeatInfo1();
		$data['feat_info']  = $this->Model_shop->getfeatInfo();

		$data['user_info'] = $this->Model_shop->webuserInfo();


		$data['allItem']  = $this->Model_shop->getallitems();

		$data['shipping'] = $this->Model_shop->webshipppingInfo();

		// $data['orderitmaccount']  = $this->Model_shop->orderamountinfo();

		if ($this->agent->is_mobile()) {
			$data['image_info'] = $this->Model_shop->mobimage_info();
                  $this->load->view('online/checkout',$data);
              }
           else{
                 // $this->load->view('e_commerce/checkout',$data);
              $data['image_info'] = $this->Model_shop->webimage_info();
           	       $this->load->view('e_commerce/checkout2',$data);
              }
	     // }
}
	   public function myorder_manage()
     {
       

       $this->load->library('user_agent');

       if($this->session->userdata('logged_in') !== TRUE){
	   // $this->load->view('online/signup'); 
       	// $this->load->view('e_commerce/logIn');
       	if ($this->agent->is_mobile()) {
                  $this->load->view('online/signup');
              }
           else{
                 $this->load->view('e_commerce/logIn');
              } 

	  }else{
     	$this->load->helper('url');
		$this->load->Model('Model_shop');
		// $data['product_info'] = $this->Model_shop->getorderInfo();

        $data['product_info'] = $this->Model_shop->orderItemInfo();
        // print_r($data['product_info']);

		$data['price'] =  $this->Model_shop->totalsum();
		$data['user_info'] = $this->Model_shop->getuserInfo();
		// print_r($data['price']);

		$data['cardcount'] = $this->Model_shop->cardCount();

		$data['cardcountberorelog'] = $this->Model_shop->cardCountceforelogin();
		// $this->load->view('e_commerce/myorder',$data);

		$data['com_info']	= $this->Model_shop->com_info();


		$data['cateInfo'] = $this->Model_shop->cat();

		// $data['image_info']	= $this->Model_shop->image_info();
		$data['footer_info']	= $this->Model_shop->footer_info();
		if ($this->agent->is_mobile()) {
			$data['image_info'] = $this->Model_shop->mobimage_info();
                  $this->load->view('online/myorder',$data);
              }
           else{
           	$data['image_info'] = $this->Model_shop->webimage_info();
                 $this->load->view('e_commerce/myorder',$data);
              } 
	}
 } 

	      
	     public function orderItm()
	{
		if($this->session->userdata('logged_in') !== TRUE){
	   // $this->load->view('online/signup'); 
			$this->load->view('e_commerce/logIn');

	  }else{
		$this->load->model('Model_shop');
	    // $this->Model_shop->odr_item();
	    $arr=array(
	    	'username'		=>$this->session->userdata('username'),
	    	'email'		=>$this->session->userdata('email'),
	    	'user_id'	=>$this->session->userdata('user_id'),
	    );
	    $temp_id= "3";
	    $this->login_model->mail_debug($arr);
	    $this->login_model->mail_send($temp_id,$arr);
	    $this->Model_shop->getordr_ordr();
	  }
	}

	public function addSearchdash()
	{
		if($this->session->userdata('logged_in') !== TRUE){
	       // $this->load->view('online/signup'); 
			$this->load->view('e_commerce/logIn');

	     }else{
		$this->load->model('Model_shop');
	    // $this->Model_shop->odr_item();
	    $this->Model_shop->getallitems();
	    }
    }



    public function product()
	{

      $this->load->library('user_agent');
	// if($this->session->userdata('logged_in') !== TRUE){
	//    // $this->load->view('online/signup'); 
	// 	$this->load->view('e_commerce/logIn');

	//   }else{
	  	# code...

	        $valId = $this->input->get();
	        // print_r($valId['valId']);
               
            $dat =   $valId['valId'];

            $cat =   $valId['valType'];

            // print_r($dat);

			$this->load->helper('url');
			$this->load->Model('Model_shop');
			// $data['item_info'] = $this->Model_shop->getitemInfo1();
			// $data['milk_info'] = $this->Model_shop->getmilkInfo1();
			// $data['medicine_info'] = $this->Model_shop->getmedicineInfo1();
			// $data['dailyneeds_info'] = $this->Model_shop->getdailyneedsInfo1();

			// $data['new_pro'] = $this->Model_shop->pro_info($dat,$cat);
			$data['new_pro'] = $this->Model_shop->pro_info($dat);

			$data['feat']    = $this->Model_shop->fea_info($cat);

			$data['cardcount'] = $this->Model_shop->cardCount();

			$data['cardcountberorelog'] = $this->Model_shop->cardCountceforelogin();

			$data['user_info'] = $this->Model_shop->getuserInfo();
			// $this->load->view('online/dashboard',$data);
			// $this->load->view('e_commerce/product',$data);

			$data['com_info']	= $this->Model_shop->com_info();

			$data['cateInfo'] = $this->Model_shop->cat();

			// $data['image_info']	= $this->Model_shop->image_info();
			$data['footer_info']	= $this->Model_shop->footer_info();


			// $data['feat_info']  = $this->Model_shop->getfeatInfo1();
			$data['feat_info']  = $this->Model_shop->getfeatInfo();
			$data['user_info'] = $this->Model_shop->webuserInfo();

			$data['allItem']  = $this->Model_shop->getallitems();

			$data['review']   = $this->Model_shop->getratingreview($dat);
			if ($this->agent->is_mobile()) {
				$data['image_info'] = $this->Model_shop->mobimage_info();
                  $this->load->view('online/product',$data);
              }
           else{
                 // $this->load->view('e_commerce/product',$data);
                $data['image_info'] = $this->Model_shop->webimage_info();
           	      $this->load->view('e_commerce/product2',$data);
              }
		// }
	}


	public function upaddcart()
	{ 

	if($this->session->userdata('logged_in') !== TRUE){
	   $this->load->view('online/signup'); 

	  }else{
	    $this->load->model('Model_shop');
	    $this->Model_shop->updat_addcart();
	}
  }


  public function rejectInfo()
	{
		$this->load->model('Model_shop');
	    $this->Model_shop->updat_reject();
	}


  public function rejectInfoallindia()
	{
		$this->load->model('Model_shop');
	    $this->Model_shop->updat_rejectallindia();
	}

   public function profile()
	{

    $this->load->library('user_agent');
	if($this->session->userdata('logged_in') !== TRUE){

	   // $this->load->view('online/signup'); 
		// $this->load->view('e_commerce/logIn');
		if ($this->agent->is_mobile()) {
                  // $this->load->view('online/signup');
			      $this->load->helper('url');
		$this->load->Model('Model_shop');
		// $data['item_info'] = $this->Model_shop->getitemInfo();
		$data['user_info'] = $this->Model_shop->getuserInfo();

		$data['cardcount'] = $this->Model_shop->cardCount();
		$data['cardcountberorelog'] = $this->Model_shop->cardCountceforelogin();

		$data['imag_data']           = $this->Model_shop->profile_data();
		// $this->load->view('e_commerce/profile',$data);

		$data['com_info']	= $this->Model_shop->com_info();

		$data['cateInfo'] = $this->Model_shop->cat();

		// $data['image_info']	= $this->Model_shop->image_info();
		$data['footer_info']	= $this->Model_shop->footer_info();
		$data['image_info'] = $this->Model_shop->mobimage_info();
			      $this->load->view('online/profile',$data);
              }
           else{
                 $this->load->view('e_commerce/logIn');
              }

	  }else{

		$this->load->helper('url');
		$this->load->Model('Model_shop');
		// $data['item_info'] = $this->Model_shop->getitemInfo();
		$data['user_info'] = $this->Model_shop->getuserInfo();

		$data['cardcount'] = $this->Model_shop->cardCount();

		$data['cardcountberorelog'] = $this->Model_shop->cardCountceforelogin();

		$data['imag_data']           = $this->Model_shop->profile_data();
		// $this->load->view('e_commerce/profile',$data);

		$data['com_info']	= $this->Model_shop->com_info();

		$data['cateInfo'] = $this->Model_shop->cat();

		// $data['image_info']	= $this->Model_shop->image_info();
		$data['footer_info']	= $this->Model_shop->footer_info();
		if ($this->agent->is_mobile()) {
			$data['image_info'] = $this->Model_shop->mobimage_info();
                  $this->load->view('online/profile',$data);
              }
           else{
           	$data['image_info'] = $this->Model_shop->webimage_info();
                 $this->load->view('e_commerce/profile',$data);
              }

		// $this->load->view('online/profile',$data);
	}
	}



	//  public function cat()
	// {
	// 	$this->load->library('user_agent');
	// 	// if($this->session->userdata('logged_in') !== TRUE){
	//  //   // $this->load->view('online/signup'); 
	// 	// 	$this->load->view('e_commerce/logIn');

	//  //  }else{
	//         $valId = $this->input->get();
	//         // print_r($valId['valId']);
               
 //            $dat =   $valId['valId'];

 //            // $cat =   $valId['valType'];

 //            // print_r($dat);

	// 		$this->load->helper('url');
	// 		$this->load->Model('Model_shop');

	// 		$data['item_info'] = $this->Model_shop->cat_info($dat);

	// 		// $data['feat']    = $this->Model_shop->fea_info($cat);

	// 		$data['cardcount'] = $this->Model_shop->cardCount();

	// 		$data['cardcountberorelog'] = $this->Model_shop->cardCountceforelogin();
	// 		// $this->load->view('online/dashboard',$data);
	// 		// $this->load->view('e_commerce/cat',$data);
	// 		$data['user_info'] = $this->Model_shop->getuserInfo();

	// 		$data['com_info']	= $this->Model_shop->com_info();

	// 		$data['cateInfo'] = $this->Model_shop->cat();


	// 		// $data['image_info']	= $this->Model_shop->image_info();

	// 		$data['footer_info']	= $this->Model_shop->footer_info();
	// 		$data['feat_info']  = $this->Model_shop->getfeatInfo1();
	// 		$data['user_info'] = $this->Model_shop->webuserInfo();


	// 		$data['allItem']  = $this->Model_shop->getallitems();

	// 		if ($this->agent->is_mobile()) {
	// 			$data['image_info'] = $this->Model_shop->mobimage_info();
 //                  $this->load->view('online/cat',$data);
 //              }
 //           else{
 //                // $this->load->view('e_commerce/cat',$data);
 //           	$data['image_info'] = $this->Model_shop->webimage_info();
 //           	    $this->load->view('e_commerce/cat2',$data);
 //              }


	// 	// }
	// }


	 public function cat()
	{
		$this->load->library('user_agent');

		$this->load->library('pagination');
		// if($this->session->userdata('logged_in') !== TRUE){
	 //   // $this->load->view('online/signup'); 
		// 	$this->load->view('e_commerce/logIn');

	 //  }else{
	        // $valId = $this->input->get();
	        // print_r($valId['valId']);
               
            $dat =   $this->uri->segment(3);

            // $cat =   $valId['valType'];

            // print_r($dat);

			$this->load->helper('url');
			$this->load->Model('Model_shop');

			// $data['item_info'] = $this->Model_shop->cat_info($dat);


			

			$data['cardcount'] = $this->Model_shop->cardCount();

			$data['cardcountberorelog'] = $this->Model_shop->cardCountceforelogin();
			// $this->load->view('online/dashboard',$data);
			// $this->load->view('e_commerce/cat',$data);
			$data['user_info'] = $this->Model_shop->getuserInfo();

			$data['com_info']	= $this->Model_shop->com_info();

			$data['cateInfo'] = $this->Model_shop->cat();


			// $data['image_info']	= $this->Model_shop->image_info();

			$data['footer_info']	= $this->Model_shop->footer_info();
			$data['feat_info']  = $this->Model_shop->getfeatInfo1();
			$data['user_info'] = $this->Model_shop->webuserInfo();


			$data['allItem']  = $this->Model_shop->getallitems();

			// $data['feat']    = $this->Model_shop->fea_info($cat);


			 

             
			 $config = Array(

                  'base_url'  => base_url('index.php/Control_shop/cat/'.$dat),
                  'per_page'  =>10,
                  // 'num_links' =>5,
                  'total_rows'=>$this->Model_shop->totalnum_info($dat),
                  'full_tag_open' => "<ul class='pagination'>",
                  'full_tag_close' => "</ul>",
                  'first_tag_open'  => '<li class="page-item">',
                  'first_tag_close'  => '</li>',
                  'last_tag_open'  => '<li class="page-item">',
                  'last_tag_close'  => '</li>',
                  'next_tag_open'  => '<li class="page-item">',
                  'next_tag_close'  => '</li>',
                  'prev_tag_open'  => '<li class="page-item">',
                  'prev_tag_close'  => '</li>',
                  'num_tag_open'  => '<li class="page-item">',
                  'num_tag_close'  => '</li>',
                  'cur_tag_open'  => "<li class='active'><a>",
                  'cur_tag_close'  => '</a></li>',
			 );
                  

			
             
			 $this->pagination->initialize($config);

			 $data['item_info'] = $this->Model_shop->updatedcat_info($dat,$config['per_page'],$this->uri->segment(4));



			if ($this->agent->is_mobile()) {
				$data['image_info'] = $this->Model_shop->mobimage_info();
                  $this->load->view('online/cat',$data);
              }
           else{
                // $this->load->view('e_commerce/cat',$data);
           	$data['image_info'] = $this->Model_shop->webimage_info();
           	    $this->load->view('e_commerce/cat2',$data);
              }


		// }
	}
	


	public function userUpdate()
	{

		$this->load->library('user_agent');

		if($this->session->userdata('logged_in') !== TRUE){
	   // $this->load->view('online/signup'); 
			// $this->load->view('e_commerce/logIn');
			if ($this->agent->is_mobile()) {
                  $this->load->view('online/signup');
              }
           else{
                 $this->load->view('e_commerce/logIn');
              }

	  }else{

		$this->load->helper('url');
		$this->load->Model('Model_shop');
		// $data['item_info'] = $this->Model_shop->getitemInfo();
		$data['user_info'] = $this->Model_shop->getuserInfo();

		$data['cardcount'] = $this->Model_shop->cardCount();

		$data['cardcountberorelog'] = $this->Model_shop->cardCountceforelogin();

		$data['cateInfo'] = $this->Model_shop->cat();
		// $this->load->view('online/userUpdate',$data);
		// $this->load->view('e_commerce/userUpdate',$data);
		if ($this->agent->is_mobile()) {
                   $this->load->view('online/userUpdate',$data);
              }
           else{
                 $this->load->view('e_commerce/userUpdate',$data);
              }
	   }
	}

	public function updtuser()
	{
		$this->load->model('Model_shop');
	    $this->Model_shop->updat_user();
	}


	public function upload_file(){
		if(isset($_FILES["input_file"]["name"])){
		$config['upload_path'] = "./assets/";
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('input_file') ) {
            // $this->load->view('admin/admin', $error);
            $error = array('error' => $this->upload->display_errors());
            echo '<p style="color:red">The filetype you are attempting to upload is not allowed.</p>';
            // print_r($error);
        } else {
        	$data = array('image_metadata' => $this->upload->data());
        	// echo  $data['image_metadata']["file_name"];
        	$name=$data['image_metadata']["file_name"];
        	$path= 'assets/'.$name;
        	// print_r($data);
        	$arr=array(
        		'file_type'		=> 'Profile_image',
        		'file_name' 	=> $name,
        		'file_path'		=> base_url().$path,
 				'user_id'		=>$this->session->userdata('user_id'),
        	);
        	$this->db->insert('app_files',$arr);
        	// print_r($arr);
          	echo '<img src="'.base_url().'assets/'.$data['image_metadata']["file_name"].'" id="myImg" style="width: 30%;border-radius: 50%;"/>' ;
            // print_r($data);
        	// $this->load->view('admin/upload_result', $data);
        }	
		}
    }



    public function nameupdtuser()
	{
		$this->load->model('Model_shop');
	    $this->Model_shop->nameupdat_user();
	}


	public function addupdtuser()
	{
		$this->load->model('Model_shop');
	    $this->Model_shop->addupdat_user();
	}


	public function pinupdtuser()
	{
		$this->load->model('Model_shop');
	    $this->Model_shop->pinupdat_user();
	}


	public function emaupdtuser()
	{
		$this->load->model('Model_shop');
	    $this->Model_shop->emaupdat_user();
	}


	public function mobupdtuser()
	{
		$this->load->model('Model_shop');
	    $this->Model_shop->mobupdat_user();
	}

	public function pay_manage()
     {

      // $this->load->library('user_agent');

	  // if($this->session->userdata('logged_in') !== TRUE){
	   // $this->load->view('online/signup'); 
		// $this->load->view('e_commerce/logIn');
		// if ($this->agent->is_mobile()) {
  //                 $this->load->view('online/signup');
  //             }
  //          else{
  //                $this->load->view('e_commerce/logIn');
  //             }

	  // }else{

	  	 $valId = $this->input->get();
	        // echo ($valId['valId']);
               
            if(isset($valId['valId']))
            {
            	$data['dat'] =   $valId['valId'];
            }   
            


          

            // echo ($data['dat']);


     	$this->load->helper('url');
		$this->load->Model('Model_shop');
		$data['product_info'] = $this->Model_shop->getorderInfo();
		$data['price'] =  $this->Model_shop->totalsum();
		$data['user_info'] = $this->Model_shop->getuserInfo();

		$data['cardcount'] = $this->Model_shop->cardCount();

		$data['cardcountberorelog'] = $this->Model_shop->cardCountceforelogin();
		// print_r($data['price']);
		// $this->load->view('online/checkout',$data);
		// $this->load->view('e_commerce/checkout',$data);

		$data['com_info']	= $this->Model_shop->com_info();

		$data['cateInfo'] = $this->Model_shop->cat();

		// $data['image_info']	= $this->Model_shop->image_info();

		$data['latest_shipping_info']	= $this->Model_shop->latest_shippingOrder();

		$data['footer_info']	= $this->Model_shop->footer_info();


		$data['orderitmaccount']  = $this->Model_shop->orderamountinfo($valId['valId']);



		$data['orderamountalliteminfo']  = $this->Model_shop->orderamountalliteminfo();

		$data['orderamountalliteminfo1']  = $this->Model_shop->ONWORKorderamountalliteminfo();

		     // if ($this->agent->is_mobile()) {
		     // 	$data['image_info'] = $this->Model_shop->mobimage_info();
       //            $this->load->view('online/checkout',$data);
       //        }
       //      else{
            	$data['image_info'] = $this->Model_shop->webimage_info();
                 $this->load->view('e_commerce/pay',$data);
              // }
	     // }
}


public function shipping_manage()
     {

      $this->load->library('user_agent');

	  if($this->session->userdata('logged_in') !== TRUE){
	   // $this->load->view('online/signup'); 
		// $this->load->view('e_commerce/logIn');
		if ($this->agent->is_mobile()) {
                  $this->load->view('online/signup');
              }
           else{
                 $this->load->view('e_commerce/logIn');
              }

	  }else{
     	$this->load->helper('url');
		$this->load->Model('Model_shop');
		$data['product_info'] = $this->Model_shop->getorderInfo();
		$data['price'] =  $this->Model_shop->totalsum();
		$data['user_info'] = $this->Model_shop->getuserInfo();

		$data['cardcount'] = $this->Model_shop->cardCount();


		$data['cardcountberorelog'] = $this->Model_shop->cardCountceforelogin();
		// print_r($data['price']);
		// $this->load->view('online/checkout',$data);
		// $this->load->view('e_commerce/checkout',$data);

		$data['com_info']	= $this->Model_shop->com_info();

		$data['cateInfo'] = $this->Model_shop->cat();

		// $data['image_info']	= $this->Model_shop->image_info();

		$data['shipping_info']	= $this->Model_shop->shipping_addr();

		$data['latest_shipping_info']	= $this->Model_shop->latest_shippingOrder();

		$data['footer_info']	= $this->Model_shop->footer_info();

		if ($this->agent->is_mobile()) {
			$data['image_info'] = $this->Model_shop->mobimage_info();
                  $this->load->view('online/checkout',$data);
              }
           else{
           	$data['image_info'] = $this->Model_shop->webimage_info();
                 $this->load->view('e_commerce/shipping',$data);
              }
	     }
}



public function UpdateAdd()
{
	$this->load->model('Model_shop');
	$this->Model_shop->updateAddress();
}



 function register2(){
    
      $this->load->helper('url');
	  $this->load->Model('Model_shop');
	  $data['product_info'] = $this->Model_shop->getorderInfo();
		$data['price'] =  $this->Model_shop->totalsum();
		$data['user_info'] = $this->Model_shop->getuserInfo();

		$data['cardcount'] = $this->Model_shop->cardCount();

		$data['cardcountberorelog'] = $this->Model_shop->cardCountceforelogin();

		$data['com_info']	= $this->Model_shop->com_info();

		$data['cateInfo'] = $this->Model_shop->cat();

		// $data['image_info']	= $this->Model_shop->image_info();

		$data['shipping_info']	= $this->Model_shop->shipping_addr();

		$data['latest_shipping_info']	= $this->Model_shop->latest_shippingOrder();

		$data['footer_info']	= $this->Model_shop->footer_info();
	  // $data['feat_info']  = $this->Model_shop->getfeatInfo1();
		$data['feat_info']  = $this->Model_shop->getfeatInfo();

		$data['allItem']  = $this->Model_shop->getallitems();

	  $data['user_info'] = $this->Model_shop->webuserInfo();
	  $data['image_info'] = $this->Model_shop->webimage_info();
      $this->load->view('e_commerce/register2',$data);	     
  }


   function login2(){
      $this->load->helper('url');
	  $this->load->Model('Model_shop');
	  $data['product_info'] = $this->Model_shop->getorderInfo();
		$data['price'] =  $this->Model_shop->totalsum();
		$data['user_info'] = $this->Model_shop->getuserInfo();

		$data['cardcount'] = $this->Model_shop->cardCount();

		$data['cardcountberorelog'] = $this->Model_shop->cardCountceforelogin();

		$data['com_info']	= $this->Model_shop->com_info();

		$data['cateInfo'] = $this->Model_shop->cat();

		// $data['image_info']	= $this->Model_shop->image_info();

		$data['shipping_info']	= $this->Model_shop->shipping_addr();

		$data['latest_shipping_info']	= $this->Model_shop->latest_shippingOrder();

		$data['footer_info']	= $this->Model_shop->footer_info();
	  // $data['feat_info']  = $this->Model_shop->getfeatInfo1();
		$data['feat_info']  = $this->Model_shop->getfeatInfo();

		$data['allItem']  = $this->Model_shop->getallitems();


	  $data['user_info'] = $this->Model_shop->webuserInfo();
	  $data['image_info'] = $this->Model_shop->webimage_info();
      $this->load->view('e_commerce/login2',$data);	     
  }

//web address function
public function webUpdateAdd()
{
	$this->load->model('Model_shop');
	$this->Model_shop->webupdateAddress();
}


//webuser data get function
public function userdata(){
     $this->load->model('Model_shop');
     $data['req'] = $this->Model_shop->webuser();
     $data['cateInfo'] = $this->Model_shop->cat();
	 $this->load->view('e_commerce/userdata',$data);
}


//webpage update function
public function updawebloginPass()
{
    $this->load->model('Model_shop');
	$this->Model_shop->updatwebuserlogin();
}

//web update item Quantity
public function webupaddcart()
	{ 

	if($this->session->userdata('logged_in') !== TRUE){
	   $this->load->view('online/signup'); 

	  }else{
	    $this->load->model('Model_shop');
	    $this->Model_shop->webupdat_addcart();
	}
  }


  //web confirm item order
public function confirmorder()
	{ 

	
      $this->load->library('user_agent');


     	$this->load->helper('url');
		$this->load->Model('Model_shop');
		$data['product_info'] = $this->Model_shop->getorderInfo();
		$data['price'] =  $this->Model_shop->totalsum();
		$data['user_info'] = $this->Model_shop->getuserInfo();

		$data['cardcount'] = $this->Model_shop->cardCount();

		$data['cardcountberorelog'] = $this->Model_shop->cardCountceforelogin();


		$data['com_info']	= $this->Model_shop->com_info();

		$data['cateInfo'] = $this->Model_shop->cat();

		// $data['image_info']	= $this->Model_shop->image_info();

		$data['footer_info']	= $this->Model_shop->footer_info();

		// $data['feat_info']  = $this->Model_shop->getfeatInfo1();
		$data['feat_info']  = $this->Model_shop->getfeatInfo();

		$data['user_info'] = $this->Model_shop->webuserInfo();


		$data['allItem']  = $this->Model_shop->getallitems();

		$data['shipping'] = $this->Model_shop->webshipppingInfo();
		$data['user_info'] = $this->Model_shop->getuserInfo();

		   if ($this->agent->is_mobile()) {
		   	      $data['image_info'] = $this->Model_shop->mobimage_info();
                  $this->load->view('online/checkout',$data);
              }
           else{
             
                 $data['image_info'] = $this->Model_shop->webimage_info();
           	       $this->load->view('e_commerce/confirmorder',$data);
              }
	    
  }

  //add web address 
  public function addweb_address()
  {
  	$this->load->model('Model_shop');
  	$this->Model_shop->insert_webaddress();

  }

  //web add order item
  public function weborderItm()
  {
  	$this->load->model('Model_shop');
  	// $this->Model_shop->getordr_ordr();
  	// $this->Model_shop->ONWORKgetordr_ordr();
  	// $this->Model_shop->addordr();
  	// $this->Model_shop->ONWORKaddordr();

  	$this->Model_shop->ONWORKaddordr2();
  }

  //web dashboard function
  public function webdashboard()
  {
  	$this->load->helper('url');
	$this->load->Model('Model_shop');

    $data['product_info']    = $this->Model_shop->getorderInfo();
		$data['price']       = $this->Model_shop->totalsum();
		$data['user_info']   = $this->Model_shop->getuserInfo();

		$data['cardcount']   = $this->Model_shop->cardCount();


		$data['cardcountberorelog'] = $this->Model_shop->cardCountceforelogin();


		$data['com_info']	 = $this->Model_shop->com_info();

		$data['cateInfo']    = $this->Model_shop->cat();

		// $data['image_info']	= $this->Model_shop->image_info();
		$data['imag_data']   = $this->Model_shop->profile_data();

		$data['footer_info'] = $this->Model_shop->footer_info();

		// $data['feat_info']  = $this->Model_shop->getfeatInfo1();
		$data['feat_info']   = $this->Model_shop->getfeatInfo();

		// $data['user_info'] = $this->Model_shop->webuserInfo();


		$data['allItem']     = $this->Model_shop->getallitems();

		$data['shipping']    = $this->Model_shop->webshipppingInfo();
          
        $data['addrs_web']   = $this->Model_shop->addrsweb(); 

       $data['product_info'] = $this->Model_shop->orderItemInfo();

       $data['image_info']   = $this->Model_shop->webimage_info();

       $data['allindiaprodctinfo'] = $this->Model_shop->orderItemInfoallindia();

	$this->load->view('e_commerce/dashboard',$data);
  }


  public function addresupdateItm()
  {
  	$this->load->model('Model_shop');
  	$this->Model_shop->shipingordr_update();
  }

  //update web user info 
  public function updateweb_userinfo()
  {
  	$this->load->model('Model_shop');
  	$this->Model_shop->update_webuserinfo();

  }


   //update web user info 
  public function addedwebaddress_update()
  {
  	$this->load->model('Model_shop');
  	$this->Model_shop->update_webusershippingaddr();

  }


 //ratings pic upload pic
   public function ratingupload_file(){
		if(isset($_FILES["input_file2"]["name"])){
		$config['upload_path'] = "./assets/";
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('input_file2') ) {
            // $this->load->view('admin/admin', $error);
            $error = array('error' => $this->upload->display_errors());
            echo '<p style="color:red">The filetype you are attempting to upload is not allowed.</p>';
            // print_r($error);
        } else {
        	$data = array('image_metadata' => $this->upload->data());
        	// echo  $data['image_metadata']["file_name"];
        	$name=$data['image_metadata']["file_name"];
        	$path= 'assets/'.$name;
        	// print_r($data);
        	$arr=array(
        		'file_type'		=> 'Profile_image',
        		'file_name' 	=> $name,
        		'file_path'		=> base_url().$path,
 				'user_id'		=>$this->session->userdata('user_id'),
        	);
        	$this->db->insert('ratings_file',$arr);
        	// print_r($arr);
          	echo '<img src="'.base_url().'assets/'.$data['image_metadata']["file_name"].'" id="myImg2" style="width: 30%;border-radius: 50%;"/>' ;
            // print_r($data);
        	// $this->load->view('admin/upload_result', $data);
        }	
		}
    }


   //add web address 
  public function addratings_web()
  {
  	$this->load->model('Model_shop');
  	$this->Model_shop->insert_ratingsweb();

  }


  function checkpincodeid()
  {
  	$this->load->model('Model_shop');
    $this->Model_shop->getpincodeid();
  }

   function address()
   {
   	$this->load->helper('url');
	$this->load->Model('Model_shop');

    $data['shipping'] = $this->Model_shop->webshipppingInfo();

    $data['user_info'] = $this->Model_shop->getuserInfo();

    $data['cateInfo'] = $this->Model_shop->cat();
   	$this->load->view('online/address',$data);
   }


   function updtusr()
   {
   	$this->load->model('Model_shop');
    $this->Model_shop->updt_usr();
   }

   function updt_passusr()
   {
   	$this->load->model('Model_shop');
    $this->Model_shop->updt_pass();
   }

/*delete shipping address*/
   public function dlt_shipaddr()
	{
		$this->load->model('Model_shop');
	    $this->Model_shop->dlt_shipaddr();
  }


/*delete shipping address*/
   public function dlt_webshipaddr()
	{
		$this->load->model('Model_shop');
	    $this->Model_shop->dlt_webshipaddr();
  }


  public function category()
  {
  	        $this->load->helper('url');
			$this->load->Model('Model_shop');
			$data['item_info'] = $this->Model_shop->getitemInfo1();
			$data['milk_info'] = $this->Model_shop->getmilkInfo1();
			$data['medicine_info'] = $this->Model_shop->getmedicineInfo1();
			$data['dailyneeds_info'] = $this->Model_shop->getdailyneedsInfo1();
			$data['feat_info']  = $this->Model_shop->getfeatInfo1();

			$data['cardcount'] = $this->Model_shop->cardCount();

			$data['cardcountberorelog'] = $this->Model_shop->cardCountceforelogin();
			// $this->load->view('online/dashboard',$data);
			// $this->load->view('e_commerce/home',$data);

			$data['com_info']	= $this->Model_shop->com_info();
			$data['cateInfo'] = $this->Model_shop->cat();

			// $data['image_info']	= $this->Model_shop->image_info();
			$data['image_info'] = $this->Model_shop->mobimage_info();

			$data['featimage']	= $this->Model_shop->featimage();
			$data['footer_info']	= $this->Model_shop->footer_info();

			$data['user_info'] = $this->Model_shop->getuserInfo();

			$data['pin']  = $this->Model_shop->getpincodetempusr();
			$this->load->view('online/category',$data);
  }


   public function onlinepayform()
  {
  	        $this->load->helper('url');
			$this->load->Model('Model_shop');
			$data['item_info'] = $this->Model_shop->getitemInfo1();
			$data['milk_info'] = $this->Model_shop->getmilkInfo1();
			$data['medicine_info'] = $this->Model_shop->getmedicineInfo1();
			$data['dailyneeds_info'] = $this->Model_shop->getdailyneedsInfo1();
			$data['feat_info']  = $this->Model_shop->getfeatInfo1();

			$data['cardcount'] = $this->Model_shop->cardCount();

			$data['cardcountberorelog'] = $this->Model_shop->cardCountceforelogin();
			// $this->load->view('online/dashboard',$data);
			// $this->load->view('e_commerce/home',$data);

			$data['com_info']	= $this->Model_shop->com_info();
			$data['cateInfo'] = $this->Model_shop->cat();

			// $data['image_info']	= $this->Model_shop->image_info();
			$data['image_info'] = $this->Model_shop->mobimage_info();

			$data['featimage']	= $this->Model_shop->featimage();
			$data['footer_info']	= $this->Model_shop->footer_info();

			$data['user_info'] = $this->Model_shop->getuserInfo();

			$data['pin']  = $this->Model_shop->getpincodetempusr();
			$this->load->view('e_commerce/onlinepayform',$data);
  }

}
?>