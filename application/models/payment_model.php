<?php

class Payment_model extends CI_Model
  {
  	public function payment($arr,$pst){
  	     //   echo "<br> arr[credential]:".$arr['credential'];
  	     //   $credntial= "'X-Api-Key:".$auth_key."',"."'X-Auth-Token:".$auth_token."'";
  	        $arr1= array($arr['auth_key'],$arr['auth_token']);
  	     //$arr2= array('X-Api-Key:test_a30469d7e2948a74c35ebc9faed','X-Auth-Token:test_6cdcfe4ea1eba58451305270486');
  	     // //   echo "<br>";
  	     //   print_r($arr1);
  	     //   echo "<br>";
  	     //   print_r($arr);
  	     //       echo "<br>";
  	     //   print_r($pst);

  			$ch = curl_init();
			// curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');  //This is the Test API endpoint
			curl_setopt($ch, CURLOPT_URL, 'https://www.instamojo.com/api/1.1/payment-requests/');  //This is the Live API endpoint
			curl_setopt($ch, CURLOPT_HEADER, FALSE);               
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
			curl_setopt($ch, CURLOPT_HTTPHEADER,$arr1);
		   // curl_setopt($ch, CURLOPT_HTTPHEADER,array('X-Api-Key:test_a30469d7e2948a74c35ebc9faed','X-Auth-Token:test_6cdcfe4ea1eba58451305270486'));
			// $feestatus=array(
			// 'student_id'	=>$arr['user_id'],
			// 'admin_id'		=>$arr['admin_id'],
			// 'fee_type'		=>$pst['fee_type'],
			// 'fee_amount'	=>$pst['fee_amount'],
			// 'fee_status'	=>"Pendeing",
			// 'fee_month'		=>$pst['fee_mon'],
			// 'paid_methd'	=>'Online(payment gateway)',
			// 'paid_by'		=>'self',
			// 'session'		=>$this->session->userdata('sessionn'),
			// );
			$payload = Array(
			    'purpose'		 			=> 'Online Order Payment',
			    'amount' 					=> $arr['amount'],
			    'phone' 					=> '8899377720',
			    'buyer_name' 				=> $arr['name'],
			    'redirect_url' 				=> "http://bazaria.osculant.in/index.php/Control_pay/reslt", 
			    'webhook' 					=> '', 
			    // "customer_id"			=>'87',
			    'send_email' 				=> true,
			    'send_sms' 					=> true,
			    'email' 					=> 'mohit.osculant@gmail.com',
			    'allow_repeated_payments' 	=> false,
			);
			print_r($payload);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
			$response = curl_exec($ch);
			curl_close($ch); 
			print $response;
			echo '<br>'.$response ;
			$myArray = array(json_decode($response, true));
			
			echo '<br>';
			print_r($myArray);
			echo '<br>';
			
			$longu = $myArray[0]["payment_request"]["longurl"];        //Extracting the Payment link from the JSON response
			
			echo '<br>';
			echo $longu;
			header('Location:' .$longu);                               //Redirecting the user to the Payment link. You can comment this line to see the JSON response on your screen.
               
  	
  }
//   public function reslt(){
//   			curl_setopt($ch, CURLOPT_POST, true);
// 			curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
// 			$response = curl_exec($ch);
// 			curl_close($ch); 
// // 			print $response;
// // 			echo '<br>'.$response ;
// 			$myArray = array(json_decode($response, true));
			
// 			echo '<br>';
// 			print_r($myArray);
// 			echo '<br>';
			
// 			$longu = $myArray[0]["payment_request"]["longurl"];        //Extracting the Payment link from the JSON response
			
// 			echo '<br>';
// 			echo $longu;
// 			header('Location:' .$longu);                               //Redirecting the user to the Payment link. You can comment this line to see the JSON response on your screen.
            
//   }
  public function res($arr){
  	$arr1= array($arr['auth_key'],$arr['auth_token']);
  	$ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_URL, 'https://www.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,$arr1);

$response = curl_exec($ch);
curl_close($ch); 
$myArray = array(json_decode($response, true));
			
			// echo '<br>';
			// print_r($myArray);
			// echo '<br>';
			
			// $longu = $myArray[0]["payment_requests"][0]["longurl"];        //Extracting the Payment link from the JSON response
			
			// echo '<br>';
			// echo $longu;
			// header('Location:' .$longu);                               //Redirecting the user to the Payment link. You can comment this line to see 
// echo $response;
// echo $myArray[0]["success"];
// echo '<br>';
// echo '<br>';
// print_r( $myArray[0]['payment_requests']);
// echo '<br>';
// echo $response;
if($myArray[0]["success"]== 1){
	$this->db->where('transaction_id',$myArray[0]['payment_requests'][0]['id']);
	$trns=$this->db->get('app_transaction');

	if($trns->num_rows() <= 0  ){
		$array1=array(
			'transaction_id'	=>$myArray[0]['payment_requests'][0]['id'],
			'transaction_type'	=>'Debited',
			'amount'			=>$myArray[0]['payment_requests'][0]['amount'],
			'purpose'			=>$myArray[0]['payment_requests'][0]['id'].' payment request status ='.$myArray[0]['payment_requests'][0]['status'],
			'status'			=>$myArray[0]['payment_requests'][0]['status'],
			'user_id'			=>$arr['user_id'],
			// 'reciever_id'		=>$arr['admin_id'],
			// 'admin_id'			=>$arr['admin_id'],
		);
		$this->db->insert('app_transaction',$array1);
		// $arra=array(
		// 	'fee_status' => "Done",
		// );
		// $this->db->where('fee_status','Pending');
		// $this->db->where('student_id',$arr['user_id']);
		// $this->db->update('erp_fees_status',$arra);
  	}
  }
  header('Location:' ."http://bazaria.osculant.in");   
//   $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, 'https://osculnt.in');
// curl_exec($ch);
// curl_close($ch);
}
}
  ?>