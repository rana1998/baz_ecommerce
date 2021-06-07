<?php
class Login_model extends CI_Model{
 
  function validate($email,$password){
    $this->db->where('email',$email);
    $this->db->where('password',$password);
    $result = $this->db->get('app_users');
    return $result;
  }
  	function mail_debug($data){
  		$arr=array(
  			'name'		=>$data['username'],
  			'to_email'	=>$data['email'],
  			'user_id'	=>$data['user_id'],
  		);
  		$this->db->insert('email_debug',$arr);
  	}
  	function mail_send($temp_id,$data){
  		$arr=array(
  			'name'					=>$data['username'],
  			'email'					=>$data['email'],
  			'email_template_id'		=>$temp_id,
  			'status'				=>'Processing',
  		);
  		$this->db->insert('send_mail',$arr);
  		$this->mail_cron();

  	}
	function mail_cron(){
		$this->db->where('status','Processing');
		$dat=$this->db->get('send_mail')->result_array();
		if($dat){
			foreach ($dat as $data) {
				$this->db->where('id',$data['email_template_id']);
				$daa=$this->db->get('email_template')->row_array();
				$body=$daa['mail_content'];
				$subject="Osculnat|".$daa['subject'];
						if($subject && $body){
							$result=$this->email
							->from('ceo@osculant.in')
							->reply_to('')
							->to($data['email'])
							->cc('mohit.osculant@gmail.com')
							->subject($subject)
							->message($body)
							->send(FALSE);
							 print_r($result);
							 if($result==1){
							 	$arr=array('status'=>'Send',);
							 	$this->db->update('send_mail',$arr);
							 	echo 'Mail Send...';
							 }
						}
			}
		}
	}







}