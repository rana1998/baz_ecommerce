<?php
class Google_login_model extends CI_Model
{
  function login($google_client){

  if(isset($_GET["code"]))
  {
   $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

   if(!isset($token["error"]))
   {
    $google_client->setAccessToken($token['access_token']);

    $this->session->set_userdata('access_token', $token['access_token']);

    $google_service = new Google_Service_Oauth2($google_client);

    $data = $google_service->userinfo->get();
    print_r($data);
    // exit();
    // $current_datetime = date('Y-m-d H:i:s');

    if($this->Is_already_register($data['id']))
    {

     $qur=$this->Update_user_data($data);
    $sesdata=array(
            'user_id'   => $qur['id'],
            'username'  => $qur['name'],
            'email'     => $qur['email'],
            'logged_in' => TRUE,
            // 'mobile'     => $mobile,
            // 'user_type' => $user_type,
            // 'sessionn'  => '2020-21',
            
        );
        print_r($sesdata);
     $this->session->set_userdata($sesdata);
    }
    else
    {
     //insert data
     $qur=$this->Insert_user_data($data);
     $sesdata=array(
            'user_id'   => $qur['id'],
            'username'  => $qur['name'],
            'email'     => $qur['email'],
            // 'mobile'     => $mobile,
            // 'user_type' => $user_type,
            // 'sessionn'  => '2020-21',
            'logged_in' => TRUE,
        );
        
     $this->session->set_userdata($sesdata);
     // $this->session->set_userdata('user_data', $user_data);
    }
    }
  }
  }
 function Is_already_register($id)
 {
  $this->db->where('login_oauth_uid', $id);
  $query = $this->db->get('app_users');
  if($query->num_rows() > 0)
  {
   return true;
  }
  else
  {
   return false;
  }
 }

 function Update_user_data($data)
 {
       //update data
print_r($data);
  $user_data = array(
      'login_oauth_uid' => $data['id'],
      'name'            => $data['given_name']." ". $data['family_name'],
      'email'           => $data['email'],
      'password'        =>$data['id'],
      // 'profile_picture' => $data['picture'],
      // 'created_at'  => $current_datetime
     );
  print_r($user_data);
  $this->db->where('email',$data['email']);

  $this->db->where('login_oauth_uid', $data['id']);
  $this->db->update('app_users', $user_data);
  // echo $last_id;
  $this->db->where('email',$data['email']);
  $this->db->where('login_oauth_uid', $data['id']);
  $last_id=$this->db->get('app_users')->row_array();
  // $this->db->where('id',$last_id);
  // $arrr=$this->db->get('app_users');
  return $last_id;
  
 }

 function Insert_user_data($data)
 {
     $user_data = array(
      'login_oauth_uid'   => $data['id'],
      'name'              => $data['given_name']." ". $data['family_name'],
      'email'             => $data['email'],
      'password'          =>$data['id'],
      // 'profile_picture' => $data['picture'],
      // 'created_at'  => $current_datetime
     );
  // print_r($user_data);
  $this->db->insert('app_users', $user_data);
  $last_id=$this->db->insert_id();
  $this->db->where('id',$last_id);
  $arrr=$this->db->get('app_users');
  return $arrr->row_array();
          
 }
}
?>