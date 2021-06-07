<!DOCTYPE HTML>  

<html>
<head>
</head>
<body>  

<?php

$var1 = $_GET['payment_id'];
$var2 = $_GET['payment_request_id'];
$user_id=$this->session->userdata('user_id');
  			$this->db->select('parent_id');
  			$this->db->where('id',$user_id);
  			$admin_id=$this->db->get('users')->row_array();
  			$this->db->where('user_id',$admin_id['parent_id']);
  			$auth_details=$this->db->get('erp_payment_gateway')->row_array();
$ch = curl_init();

// curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/'.$var2);	//This is the Test API endpoint
curl_setopt($ch, CURLOPT_URL, 'https://www.instamojo.com/api/1.1/payment-requests/'.$var2);  //This is the Live API endpoint
curl_setopt($ch, CURLOPT_HEADER, FALSE);               
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,array("X-Api-Key:".$auth_details['gateway_auth_key']."", "X-Auth-Token:".$auth_details['gateway_auth_token']."");
// eg: curl_setopt($ch, CURLOPT_HTTPHEADER,array("X-Api-Key:test_e92f2f1b554813ba81572a4ffh5", "X-Auth-Token:test_e9daf6854265ecd67d274k91t064"));
$response = curl_exec($ch);
curl_close($ch); 

$myArray = array(json_decode($response, true));

echo '<br>';
print($response);
echo '<br>';

echo '<br>';
print_r($myArray);
echo '<br>';

$payment_id 	= $myArray[0]["payment"]["payment_id"];
$amount 		= $myArray[0]["payment"]["amount"];
$buyer_name 	= $myArray[0]["payment"]["buyer_name"];
$buyer_phone 	= $myArray[0]["payment"]["buyer_phone"];
$buyer_email 	= $myArray[0]["payment"]["buyer_email"];
$status 		= $myArray[0]["payment"]["status"];                 
//The status that confirms your Payment. Credit = Successful transaction, Failed = Failed transaction.  

echo "<br>Buyer name: ".$buyer_name;
echo "<br>Buyer_phone: ".$buyer_phone;
echo "<br>Buyer_email: ".$buyer_email;
echo "<br>Amount: ".$amount;
echo "<br>Payment ID: ".$payment_id;
echo "<br>Status: ".$status;

?>
</body>
</html>