<?php
class Coupon_model extends CI_Model{
 
 	function apply_code(){

		$coupon=$this->input->post();	 		
		if(!empty($coupon)){
			$this->db->where('coupon_code',$coupon['code']);
			$direct=$this->db->get('coupon_direct_off')->row_array();
			// print_r($direct->row_array());
			$this->db->where('coupon_code',$coupon['code']);
			$percent=$this->db->get('coupon_percentage_off')->row_array();
			// print_r($percent);
			if (!empty($direct) && empty($percent)) {
				// $direct=$direct->row_array();
				$arr=array(
					'type'				=>'Direct',
					'amount'			=>$direct['amount'],
					'mini_order'		=>$direct['mini_order'],
					'status'			=>$direct['status'],
				);
				// return $arr;
				print_r(json_encode($arr));
			}elseif(empty($direct) && !empty($percent)){
				// $percent=$percent->row_array();
				$arr=array(
					'type'				=>'Percent',
					'amount'			=>$percent['amount'],
					'mini_order'		=>$percent['mini_order'],
					'status'			=>$percent['status'],
					'max_offer_amount'	=>$percent['max_offer_amount'],
				);
				// return $arr;
				print_r(json_encode($arr));
			}else{
				echo "Invalid Coupon";
			}
		}else{
			echo "Please Enter Coupon Code";	
		}
	}
}
?>