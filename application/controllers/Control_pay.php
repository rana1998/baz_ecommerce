<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_pay extends CI_Controller {
	function __construct(){
    parent::__construct();
    // $this->load->library('instamojo');
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
  }
public function index(){
  $this->load->view('payment');
}
public function display(){
  $this->load->view('display'); 
}

public function payment(){
   // $result = $long = $res = $part = $longu = "";

    // $_SESSION['name']=$_POST['name'];
    // $_SESSION['email']=$_POST['email'];
    // $_SESSION['phno']=$_POST['phno'];
    // $_SESSION['amount']=$_POST['amount'];
    
        $user_id=$this->session->userdata('user_id');
        // print_r($user_id);
        // $this->db->select('*');
        $this->db->where('id',$user_id);
        $admin_id=$this->db->get('app_users')->row_array();
        // echo $this->db->last_query();
        // print_r($admin_id);
        // $this->db->where('user_id',$admin_id['parent_id']);
        $auth_details=$this->db->get('app_payment_gateway')->row_array();
        // print_r($auth_details);
        $auth_key="X-Api-Key:".$auth_details['auth_key'];
        $auth_token="X-Auth-Token:".$auth_details['auth_token'];
      //  echo 'X-Api-Key:'.$auth_key.', X-Auth-Token:'.$auth_token;
//      $credntial= "'X-Api-Key:".$auth_key."',"."'X-Auth-Token:".$auth_token."'";
//      echo "<br> cr:".$credntial."<br>";
        $pst=$this->input->post();
    $arr=Array(
    'user_id'   =>$admin_id['id'],
    // 'admin_id'  =>$admin_id['parent_id'],
    'name'      =>$admin_id['name'],
    'email'     =>$admin_id['email'],
    'phno'      =>$admin_id['mobile'],
    'amount'    =>$this->input->POST('order_amount'),
    'auth_key'  =>$auth_key,
    'auth_token'=>$auth_token,
    );
//     print_r($arr);
// echo "<br> Post->::::::";
// print_r($pst);

  $this->load->model('Payment_model');
  $this->Payment_model->payment($arr,$pst);
 // print_r(json_encode(1));
}
public function reslt(){
        $user_id=$this->session->userdata('user_id');
        $this->db->where('id',$user_id);
        $admin_id=$this->db->get('app_users')->row_array();
        // echo $this->db->last_query();
        // print_r($admin_id);
        // $this->db->where('user_id',$admin_id['parent_id']);
        $auth_details=$this->db->get('app_payment_gateway')->row_array();
        // print_r($auth_details);
        $auth_key="X-Api-Key:".$auth_details['auth_key'];
        $auth_token="X-Auth-Token:".$auth_details['auth_token'];
      //  echo 'X-Api-Key:'.$auth_key.', X-Auth-Token:'.$auth_token;
//      $credntial= "'X-Api-Key:".$auth_key."',"."'X-Auth-Token:".$auth_token."'";
//      echo "<br> cr:".$credntial."<br>";
        $pst=$this->input->post();  
        $arr=Array(
            'user_id'   =>$admin_id['id'],
            // 'admin_id'  =>$admin_id['parent_id'],
            'name'      =>$admin_id['name'],
            'email'     =>$admin_id['email'],
            'phno'      =>$admin_id['mobile'],
            'amount'    =>$this->input->POST('order_amount'),
            'auth_key'  =>$auth_key,
            'auth_token'=>$auth_token,
        );
 $this->load->model('Payment_model');
  $this->Payment_model->res($arr); 
}
}
?>
