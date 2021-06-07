
<?php
  
  class Model_shop extends CI_Model
  {



    public function insert_signUp()
    {
     $arr1=$this->input->post();
      $this->db->where('name',$arr1['name']);
      $this->db->where('mobile',$arr1['phone_no']);
      $this->db->where('email',$arr1['email']);
      // $this->db->where('address',$arr1['address']);
      $queryResult=$this->db->get('app_users');  
      $foundRows = $queryResult->num_rows();
      // print_r($queryResult);
      echo $foundRows;
      if($foundRows >= 1) {
        echo "You are already registered";
      } else {
            
          $arr = Array(
                 'name'     => $arr1['name'],
                 'mobile'   => $arr1['phone_no'],
                 'email'    => $arr1['email'],
                 'addresss' => $arr1['address'],
                 'password' => $arr1['psw'],
                 'pincode'  => $arr1['pincode'],
                 'ques1'    => $arr1['secure1'],
                 'ans1'     => $arr1['secureans1'],
                 'ques2'    => $arr1['secure2'],
                 'ans2'     => $arr1['secureans2'],
                 // 'message'  => $arr1['message'],
    
          );
            $this->db->insert('app_users',$arr);
            
            $last_id=$this->db->insert_id();
            $this->db->where('id',$last_id);
            $arrr=$this->db->get('app_users');
            return $arrr->row_array();
          }
    }
     public function getitemInfo()
      {
        
        // $this->db->where('user_level','2');
        $this->db->where('Category','Grocery');
        $res = $this->db->get('app_Items');
        // print_r($res);
        return $res;   
      }
        public function getitemInfo1()
      {
        
        // $this->db->where('priority','1');
        $this->db->where('Category','Grocery');
        // $res = $this->db->get('app_Items',5);
        $res = $this->db->get('app_Items',9);
        // print_r($res);
        return $res;   
      } 

      public function getmilkInfo()
      {
        
        $this->db->where('Category','milk product');
        $res = $this->db->get('app_Items');
        // print_r($res);
        return $res;   
      }
      public function getmilkInfo1()
      {
        // $this->db->where('priority','1');
        $this->db->where('Category','milk product');
        $res = $this->db->get('app_Items',5);
        // print_r($res);
        return $res;   
      }

      public function getdairydata()
      {
        // $this->db->where('priority','1');
        $this->db->where('Category','Dairy');
        $res = $this->db->get('app_Items',5);
        // print_r($res);
        return $res;   
      }


      public function getdrinksdata()
      {
        // $this->db->where('priority','1');
        $this->db->where('Category','Drinks');
        $res = $this->db->get('app_Items',5);
        // print_r($res);
        return $res;   
      }


      public function getMasaladata()
      {
        // $this->db->where('priority','1');
        $this->db->where('Category','Masala(Spices)');
        $res = $this->db->get('app_Items',5);
        // print_r($res);
        return $res;   
      }


    public function  getdailyneedsInfo()
      {
        
        $this->db->where('Category','Daily need');
        $res = $this->db->get('app_Items');
        // print_r($res);
        return $res;   
      }

    public function  getdailyneedsInfo1()
      {
        // $this->db->where('priority','1');
        $this->db->where('Category','Daily need');
        // $res = $this->db->get('app_Items',5);
         $res = $this->db->get('app_Items',9);
        // print_r($res);
        return $res;   
      }

      public function  getmedicineInfo()
      {
        
        $this->db->where('Category','medicine');
        $res = $this->db->get('app_Items');
        // print_r($res);
        return $res;   
      }
      public function  getmedicineInfo1()
      {
        // $this->db->where('priority','1'); 
        $this->db->where('Category','medicine');
        // $res = $this->db->get('app_Items',5);
         $res = $this->db->get('app_Items',9);
        // print_r($res);
        return $res;   
      }

      public function  getfeatInfo()
      {
        $this->db->where('priority','2'); 
        // $this->db->where('Category','medicine');
        $res = $this->db->get('app_Items');
        // print_r($res);
        return $res;   
      }

      public function  getfeatInfo1()
      {
        $this->db->where('priority','1'); 
        // $this->db->where('Category','medicine');
        // $res = $this->db->get('app_Items',3);

         // $res = $this->db->get('app_Items',5);
        $res = $this->db->get('app_Items',9);
        // print_r($res);
        return $res;   
      }


// public function insert_addcart()
//         {
//           $arr1=$this->input->post();
//           //print_r($this->session->userdata());
//          //echo $this->session->userdata('user_name');
//          $user_id=$this->session->userdata('user_id');
//           $arr = Array(
//                  'user_id'  =>$user_id,
//                  'item_id'  => $arr1['item_id'],
//                  'price'    => $arr1['price'],
//                  'quantity' => $arr1['quantity'],
//                  // 'assigned_to'  => $arr1['assigned_to'],
//                  // 'admin_id'     => $this->session->userdata('user_id'),
                 
//           );
//             $this->db->insert('app_cart',$arr);
//  print_r("sucess");  
//            return ;
//         }

        public function insert_addcart()
        {
          $arr1=$this->input->post();
          //print_r($this->session->userdata());
         //echo $this->session->userdata('user_name');
         $user_id=$this->session->userdata('user_id');

         $this->db->where('user_id',$user_id);
         $this->db->where('item_id',$arr1['item_id']);
         $res = $this->db->get('app_cart');

         // print_r(json_encode(4));
        // print_r($res);
         if($res->num_rows()>0)
         {
            $key = $res->row_array();
            $quan = $key['quantity']+$arr1['quantity'];
            $pric = $key['price']+$arr1['price'];
            // print_r($key['quantity']);
            // print_r($arr1['quantity']);
            // print_r($quan);
            $arrnew = Array(
              'quantity' => $quan,
              'price'    => $pric,
            );

            $this->db->where('id',$key['id']);
            $this->db->where('user_id',$user_id);
            $this->db->update('app_cart',$arrnew);
             // echo "string1";
            // print_r(json_encode(3));
         }
         else{
          $arr = Array(
                 'user_id'  =>$user_id,
                 'item_id'  => $arr1['item_id'],
                 'price'    => $arr1['price'],
                 'quantity' => $arr1['quantity'],
                 // 'assigned_to'  => $arr1['assigned_to'],
                 // 'admin_id'     => $this->session->userdata('user_id'),
                 
          );
            $this->db->insert('app_cart',$arr);
             // echo "string2";
             // print_r(json_encode(2));
          }  
          // echo "string";
print_r(json_encode(1));
           // return ;
        }



//insert_webaddcart post data 
  public function insert_webaddcart()
        {
          $arr1=$this->input->post();
          // $this->load->helper('string');
       
        
          // $user_id = random_string('alnum', 5);
          $user_id = $this->session->userdata('user_id');
          // print_r($user_id);

         $this->db->where('id',$user_id);
        $result = $this->db->get('app_users');

        if($result->num_rows() < 1)
        {


          $arr = Array(
                 'tempuser_id'  =>$user_id,
                 'item_id'  => $arr1['item_id'],
                 'price'    => $arr1['price'],
                 'quantity' => $arr1['quantity'],
                 
                 
          );
            $this->db->insert('web_cart',$arr);

            $last_id=$this->db->insert_id();
            $this->db->where('id',$last_id);
            $arrr=$this->db->get('web_cart')->row();

          

            print_r(json_encode($arrr));

          }
          else{
            $arr = Array(
                 'user_id'  =>$user_id,
                 'item_id'  => $arr1['item_id'],
                 'price'    => $arr1['price'],
                 'quantity' => $arr1['quantity'],
                 
                 
          );
            $this->db->insert('app_cart',$arr);

            $last_id=$this->db->insert_id();
            $this->db->where('id',$last_id);
            $arrr=$this->db->get('app_cart')->row();

          

            print_r(json_encode($arrr));

          }  

          
        }




     // public function getorderInfo()
     //  {
     //    $user_id = $this->session->userdata('user_id');
     //    $this->db->where('user_id',$user_id);
     //    $res = $this->db->get('app_cart');
     //    // print_r($res);
     //    return $res;   
     //  }

      public function getorderInfo()
      {
        $user_id = $this->session->userdata('user_id');
        $this->db->where('user_id',$user_id);
        $res = $this->db->get('app_cart');

        // if($res->num_rows() >= 1){
          $arr=Array();
          foreach ($res->result_array() as $key ) {
          // $this->db->select('user_name');
          $this->db->where('id',$key['item_id']);
          $user_dat=$this->db->get('app_Items')->row_array();
          // print_r($user_dat);
          $array1=array(
            'id'                  => $user_dat['id'],
            'item_name'           =>$user_dat['item_name'],
            'Item_code'           =>$user_dat['Item_code'],
            'item_mrp'            =>$user_dat['item_mrp'],
            'available_quantity'  =>$user_dat['available_quantity'],
            'Item_weight'         =>$user_dat['Item_weight'],
            'item_image_path'     =>$user_dat['item_image_path'],
            'item_quant'          =>$key['quantity'],
            'app_cartItem_id'     =>$key['id'],
            'offer_mrp'           =>$user_dat['offer_mrp'],

            // 'total_student'       =>$key['total_student'],
            // 'admin_id'            =>$key['admin_id'],
                );
            array_push($arr, $array1);
            }
            // print_r($arr);
            // print_r(json_encode($arr));
            return $arr;
        // }

        // print_r($res);
        // return $res;   
      }





//web order Info Function
       public function getweborderInfo()
      {

        // $valId = $this->input->get();
          // print_r($valId['valId']);
               
            // $dat =   $valId['valId'];
        $dat = $this->session->userdata('user_id');




        $user_id = $this->session->userdata('user_id');
      
        $this->db->where('id',$user_id);
        $result = $this->db->get('app_users');



        if($result->num_rows() > 0)
        {
        
         $this->db->where('user_id',$user_id);
         $res = $this->db->get('app_cart');
        }
        else
        {
         // $this->db->where('tempuser_id',$dat);
        $this->db->where('tempuser_id',$user_id);  
        $res = $this->db->get('web_cart');
        }

        // $this->db->where('tempuser_id',$dat);
        // $res = $this->db->get('web_cart');

         // $this->db->where('user_id',$user_id);
         // $res = $this->db->get('app_cart');

        // if($res->num_rows() >= 1){
          $arr=Array();
          foreach ($res->result_array() as $key ) {
          // $this->db->select('user_name');
          $this->db->where('id',$key['item_id']);
          $user_dat=$this->db->get('app_Items')->row_array();
          // print_r($user_dat);
          $array1=array(
            'id'                  => $user_dat['id'],
            'item_name'           =>$user_dat['item_name'],
            'Item_code'           =>$user_dat['Item_code'],
            'item_mrp'            =>$user_dat['item_mrp'],
            'available_quantity'  =>$user_dat['available_quantity'],
            'Item_weight'         =>$user_dat['Item_weight'],
            'item_image_path'     =>$user_dat['item_image_path'],
            'item_quant'          =>$key['quantity'],
            'app_cartItem_id'     =>$key['id'],
            'offer_mrp'           =>$user_dat['offer_mrp'],
            'tempuser_id'         =>$dat,
            'item_total'          =>$key['price'],
            'sellingprice'        =>$user_dat['sellingprice'],

            
                );
            array_push($arr, $array1);
            }
            // print_r($arr);
            
            return $arr;
       
      }

      public function rmv_item()
      {
        $user_id = $this->session->userdata('user_id');
        $itemId = $this->input->post('val');

        $this->db->where('user_id',$user_id);
        $this->db->where('item_id',$itemId);
        $this->db->delete('app_cart');
      }

      public function totalsum()
      {
        $user_id = $this->session->userdata('user_id');
        
        // $user_dat=$this->db->get('app_Items')->result_array();

         $user_id = $this->session->userdata('user_id');
      
        $this->db->where('id',$user_id);
        $result = $this->db->get('app_users');

        if($result->num_rows() > 0)
        {
        $this->db->select_sum('price');
        $this->db->where('user_id',$user_id);
        $result = $this->db->get('app_cart')->row(); 
        // print_r($result->price); 
        return $result->price;
      }
      else
      {
        $this->db->select_sum('price');
        $this->db->where('tempuser_id',$user_id);
        $result = $this->db->get('web_cart')->row(); 
        // print_r($result->price); 
        return $result->price;
      }

      } 


      public function  getuserInfo()
      {

        $user_info = $this->session->userdata('user_id');
        $this->db->where('id',$user_info);
        $res = $this->db->get('app_users')->row_array();
        // print_r($res);
        return $res;   
      }

      public function odr_item()
      {
         $user_id = $this->session->userdata('user_id');
         $this->db->where('user_id',$user_id);
         $res = $this->db->get('app_cart')->result_array();

        // if($res->num_rows() >= 1){
          print_r($res);
          $arr=Array();
          foreach ($res as $key ) {

          $array1=array(
            'user_id'           =>$user_id,
            'item_id'           =>$key['item_id'],
            'total_amount'      =>$key['price'],
            'status'            =>'Processing',

                );
            array_push($arr, $array1);
            }

            $this->db->insert('app_orders',$arr);
      }


      // public function getordr_ordr()
      // {
      //    $user_id = $this->session->userdata('user_id');
        
      //   // $user_dat=$this->db->get('app_Items')->result_array();
      //   $this->db->select_sum('price');
      //   $this->db->where('user_id',$user_id);
      //   $result = $this->db->get('app_cart')->row(); 
      //   // print_r($result->price); 
        



      //    // $user_id = $this->session->userdata('user_id');
      //    $this->db->where('user_id',$user_id);
      //    $res = $this->db->get('app_cart');

      //    $item=Array();

      //    foreach ($res->result_array() as $key ) {
      //     array_push($item, $key['item_id'] .":".$key['quantity'] );
          
          
      //   }

      //    print_r($item);
      //    $item_ids = json_encode($item);

      //     // foreach ($res as $key ) {
      //    if($result->price>200)
      //    {
      //      $result->price = $result->price + 30;
      //    }
      //    else
      //    {
      //      $result->price = $result->price + 20;
      //    }

      //     $abr=array(
      //       'user_id'           =>$user_id,
      //       'item_id'           =>$item_ids,
      //       'total_amount'      =>$result->price,
      //       'status'            =>'Processing',
           

      //           );
      //       // array_push($arr, $array1);
      //       // }

      //       $this->db->insert('app_orders',$abr);


      //       $user_id = $this->session->userdata('user_id');
      //       $this->db->where('user_id',$user_id);
      //       $this->db->delete('app_cart');

      // }


       public function getordr_ordr()
      {

         $dat = $this->input->post('val');

         $user_id = $this->session->userdata('user_id');
        
        // $user_dat=$this->db->get('app_Items')->result_array();
        $this->db->select_sum('price');
        $this->db->where('user_id',$user_id);
        $result = $this->db->get('app_cart')->row(); 
        // print_r($result->price); 
        



         // $user_id = $this->session->userdata('user_id');
         $this->db->where('user_id',$user_id);
         $res = $this->db->get('app_cart');

         foreach ($res->result_array() as $key ) {
           $this->db->where('id',$key['item_id']);
           // $result = $this->db->get('app_cart')->row();  
           $resItem = $this->db->get('app_Items')->row_array();

           $appitem=array(
            
                   'available_quantity' =>  $resItem['available_quantity']-$key['quantity'],

                ); 
            
            $this->db->where('id',$key['item_id']);
            $this->db->update('app_Items',$appitem);
            
          
        }


         $item=Array();

         foreach ($res->result_array() as $key ) {
          array_push($item, $key['item_id'] .":".$key['quantity'] );
          
          
        }

         print_r($item);
         $item_ids = json_encode($item);

          // foreach ($res as $key ) {
         if($result->price>200)
         {
           $result->price = $result->price + 30;
         }
         else
         {
           $result->price = $result->price + 20;
         }

          $abr=array(
            'user_id'           =>$user_id,
            'item_id'           =>$item_ids,
            'total_amount'      =>$result->price,
            'status'            =>'Processing',
            'ship_addr_id'      =>$dat,
           

                );
            // array_push($arr, $array1);
            // }

            $this->db->insert('app_orders',$abr);


            $user_id = $this->session->userdata('user_id');
            $this->db->where('user_id',$user_id);
            $this->db->delete('app_cart');

      }

      // public function ONWORKgetordr_ordr()
      // {

      //    $dat = $this->input->post('val');

      //    $user_id = $this->session->userdata('user_id');
        
      //   // $user_dat=$this->db->get('app_Items')->result_array();
      //   $this->db->select_sum('price');
      //   $this->db->where('user_id',$user_id);
      //   $result = $this->db->get('app_cart')->row(); 
      //   // print_r($result->price); 
        


      //    $arraRev = Array();
      //    // $user_id = $this->session->userdata('user_id');
      //    $this->db->where('user_id',$user_id);
      //    $res = $this->db->get('app_cart');


      //    $cost_price = 0;
      //    $sell_price = 0;
      //    $com        = 0;

      //    foreach ($res->result_array() as $key ) {
      //      $this->db->where('id',$key['item_id']);
      //      // $result = $this->db->get('app_cart')->row();  
      //      $resItem = $this->db->get('app_Items')->row_array();

      //      $appitem=array(
            
      //              'available_quantity' =>  $resItem['available_quantity']-$key['quantity'],

      //           ); 
            
      //       $this->db->where('id',$key['item_id']);
      //       $this->db->update('app_Items',$appitem);


      //       $this->db->where('id',$key['item_id']);
      //       $arrReavnue = $this->db->get('app_Items')->row_array();

      //       // $arrrev = Array(
      //       //          'cost_price'      => $arrReavnue['item_mrp'],
      //       //          'selling_price'   => $arrReavnue['sellingprice'],
      //       //          'commision'       => $arrReavnue['commision'],  
      //       // );

      //        $cost_price = $cost_price  + $arrReavnue['item_mrp'];
      //        $sell_price = $sell_price  + $arrReavnue['sellingprice'];
      //        // $com        = $com         + $arrReavnue['commision'];
      //        $com        = $com         + $arrReavnue['commision_price'];   
           



            
          
      //   }



      //   print_r($cost_price);
      //   print_r($sell_price);
      //   print_r($com);


      //    $item=Array();

      //    foreach ($res->result_array() as $key ) {
      //     array_push($item, $key['item_id'] .":".$key['quantity'] );
          
          
      //   }

      //    print_r($item);
      //    $item_ids = json_encode($item);

      //     // foreach ($res as $key ) {
      //    if($result->price>200)
      //    {
      //      $result->price = $result->price + 30;
      //    }
      //    else
      //    {
      //      $result->price = $result->price + 20;
      //    }

      //     $abr=array(
      //       'user_id'           =>$user_id,
      //       'item_id'           =>$item_ids,
      //       'total_amount'      =>$result->price,
      //       'status'            =>'Processing',
      //       'ship_addr_id'      =>$dat,

      //       'total_costprice'   =>$cost_price,
      //       'total_sellprice'   =>$sell_price, 
      //       'total_commission'  =>$com,
           

      //           );
      //       // array_push($arr, $array1);
      //       // }

      //       $this->db->insert('app_orders',$abr);


      //       $user_id = $this->session->userdata('user_id');
      //       $this->db->where('user_id',$user_id);
      //       $this->db->delete('app_cart');


      //       print_r(json_encode(1));

      // }


      // public function ONWORKgetordr_ordr()
      // {

      //    $dat = $this->input->post('val');

      //    $user_id = $this->session->userdata('user_id');
        
      //   // $user_dat=$this->db->get('app_Items')->result_array();
      //   $this->db->select_sum('price');
      //   $this->db->where('user_id',$user_id);
      //   $result = $this->db->get('app_cart')->row(); 
      //   // print_r($result->price); 
        


      //    $arraRev = Array();
      //    // $user_id = $this->session->userdata('user_id');
      //    $this->db->where('user_id',$user_id);
      //    $res = $this->db->get('app_cart');


      //    $cost_price = 0;
      //    $sell_price = 0;
      //    $com        = 0;

      //    foreach ($res->result_array() as $key ) {
      //      $this->db->where('id',$key['item_id']);
      //      // $result = $this->db->get('app_cart')->row();  
      //      $resItem = $this->db->get('app_Items')->row_array();

      //      $appitem=array(
            
      //              'available_quantity' =>  $resItem['available_quantity']-$key['quantity'],

      //           ); 
            
      //       $this->db->where('id',$key['item_id']);
      //       $this->db->update('app_Items',$appitem);


      //       $this->db->where('id',$key['item_id']);
      //       $arrReavnue = $this->db->get('app_Items')->row_array();

      //       // $arrrev = Array(
      //       //          'cost_price'      => $arrReavnue['item_mrp'],
      //       //          'selling_price'   => $arrReavnue['sellingprice'],
      //       //          'commision'       => $arrReavnue['commision'],  
      //       // );

      //        $cost_price = $cost_price  + $arrReavnue['item_mrp'];
      //        $sell_price = $sell_price  + $arrReavnue['sellingprice'];
      //        // $com        = $com         + $arrReavnue['commision'];
      //        $com        = $com         + $arrReavnue['commision_price'];   
           



            
          
      //   }



      //   // print_r($cost_price);
      //   // print_r($sell_price);
      //   // print_r($com);


      //    $item=Array();

      //    foreach ($res->result_array() as $key ) {
      //     array_push($item, $key['item_id'] .":".$key['quantity'] );
          
      //     $cost_price = $cost_price*$key['quantity'];
      //     $sell_price = $sell_price*$key['quantity'];
      //     $com        = $com*$key['quantity'];
          
      //   }

      //   print_r($cost_price);
      //   print_r($sell_price);
      //   print_r($com);

      //    print_r($item);
      //    $item_ids = json_encode($item);

      //     // foreach ($res as $key ) {
      //    if($result->price>200)
      //    {
      //      $result->price = $result->price + 30;
      //    }
      //    else
      //    {
      //      $result->price = $result->price + 20;
      //    }

      //     $abr=array(
      //       'user_id'           =>$user_id,
      //       'item_id'           =>$item_ids,
      //       'total_amount'      =>$result->price,
      //       'status'            =>'Processing',
      //       'ship_addr_id'      =>$dat,

      //       'total_costprice'   =>$cost_price,
      //       'total_sellprice'   =>$sell_price, 
      //       'total_commission'  =>$com,
      //       'cash_wallet'       =>'yes',
           

      //           );
      //       // array_push($arr, $array1);
      //       // }

      //       $this->db->insert('app_orders',$abr);


      //       $user_id = $this->session->userdata('user_id');
      //       $this->db->where('user_id',$user_id);
      //       $this->db->delete('app_cart');


      //       print_r(json_encode(1));

      // }

      public function ONWORKgetordr_ordr()
      {

         $dat = $this->input->post('val');

         $user_id = $this->session->userdata('user_id');
        
        // $user_dat=$this->db->get('app_Items')->result_array();
        $this->db->select_sum('price');
        $this->db->where('user_id',$user_id);
        $result = $this->db->get('app_cart')->row(); 
        // print_r($result->price); 
        


         $arraRev = Array();
         // $user_id = $this->session->userdata('user_id');
         $this->db->where('user_id',$user_id);
         $res = $this->db->get('app_cart');


         $cost_price = 0;
         $sell_price = 0;
         $com        = 0;

         foreach ($res->result_array() as $key ) {
           $this->db->where('id',$key['item_id']);
           // $result = $this->db->get('app_cart')->row();  
           $resItem = $this->db->get('app_Items')->row_array();

           $appitem=array(
            
                   'available_quantity' =>  $resItem['available_quantity']-$key['quantity'],

                ); 
            
            $this->db->where('id',$key['item_id']);
            $this->db->update('app_Items',$appitem);


            $this->db->where('id',$key['item_id']);
            $arrReavnue = $this->db->get('app_Items')->row_array();

            // $arrrev = Array(
            //          'cost_price'      => $arrReavnue['item_mrp'],
            //          'selling_price'   => $arrReavnue['sellingprice'],
            //          'commision'       => $arrReavnue['commision'],  
            // );

             // $cost_price = $cost_price  + $arrReavnue['item_mrp'];
            $cost_price  = $cost_price  + $arrReavnue['cost_price'];
             $sell_price = $sell_price  + $arrReavnue['sellingprice'];
             // $com        = $com         + $arrReavnue['commision'];
             $com        = $com         + $arrReavnue['commision_price'];   
           



            
          
        }



        // print_r($cost_price);
        // print_r($sell_price);
        // print_r($com);


         $item=Array();

         foreach ($res->result_array() as $key ) {
          array_push($item, $key['item_id'] .":".$key['quantity'] );
          
          $cost_price = $cost_price*$key['quantity'];
          $sell_price = $sell_price*$key['quantity'];
          $com        = $com*$key['quantity'];
          
        }

        print_r($cost_price);
        print_r($sell_price);
        print_r($com);

         print_r($item);
         $item_ids = json_encode($item);

          // foreach ($res as $key ) {
         if($result->price>200)
         {
           $result->price = $result->price + 30;
         }
         else
         {
           $result->price = $result->price + 20;
         }

         $this->db->where('id',$dat);
         $VendorPincode = $this->db->get('web_shippingaddr')->row_array();

         $this->db->where('pincode',$VendorPincode['pincode']);
         $Vendorid = $this->db->get('pincode')->row_array();

         print_r($Vendorid['user_id']);


          $abr=array(
            'user_id'           =>$user_id,
            'item_id'           =>$item_ids,
            'total_amount'      =>$result->price,
            'status'            =>'Processing',
            'ship_addr_id'      =>$dat,

            'total_costprice'   =>$cost_price,
            'total_sellprice'   =>$sell_price, 
            'total_commission'  =>$com,
            'cash_wallet'       =>'yes',
            'vendor_id'         =>$Vendorid['user_id'],
           

                );
            // array_push($arr, $array1);
            // }

            $this->db->insert('app_orders',$abr);


            $user_id = $this->session->userdata('user_id');
            $this->db->where('user_id',$user_id);
            $this->db->delete('app_cart');


            print_r(json_encode(1));

      }




      public function addordr()
      {

         $dat = $this->input->post('val');

         $user_id = $this->session->userdata('user_id');
        
        // $user_dat=$this->db->get('app_Items')->result_array();
        $this->db->select_sum('price');
        $this->db->where('user_id',$user_id);
        $result = $this->db->get('app_cart')->row(); 
        // print_r($result->price); 
        


         $arraRev = Array();
         // $user_id = $this->session->userdata('user_id');
         $this->db->where('user_id',$user_id);
         $res = $this->db->get('app_cart');


         $cost_price = 0;
         $sell_price = 0;
         $com        = 0;

         foreach ($res->result_array() as $key ) {
           $this->db->where('id',$key['item_id']);
           // $result = $this->db->get('app_cart')->row();  
           $resItem = $this->db->get('app_Items')->row_array();

           $appitem=array(
            
                   'available_quantity' =>  $resItem['available_quantity']-$key['quantity'],

                ); 
            
            $this->db->where('id',$key['item_id']);
            $this->db->update('app_Items',$appitem);


            $this->db->where('id',$key['item_id']);
            $arrReavnue = $this->db->get('app_Items')->row_array();

            // $arrrev = Array(
            //          'cost_price'      => $arrReavnue['item_mrp'],
            //          'selling_price'   => $arrReavnue['sellingprice'],
            //          'commision'       => $arrReavnue['commision'],  
            // );

             // $cost_price = $cost_price  + $arrReavnue['item_mrp'];
            $cost_price  = $cost_price  + $arrReavnue['cost_price'];
             $sell_price = $sell_price  + $arrReavnue['sellingprice'];
             // $com        = $com         + $arrReavnue['commision'];
             $com        = $com         + $arrReavnue['commision_price'];   
           



            
          
        }



        // print_r($cost_price);
        // print_r($sell_price);
        // print_r($com);


         $item=Array();

         foreach ($res->result_array() as $key ) {
          array_push($item, $key['item_id'] .":".$key['quantity'] );
          
          $cost_price = $cost_price*$key['quantity'];
          $sell_price = $sell_price*$key['quantity'];
          $com        = $com*$key['quantity'];
          
        }

        print_r($cost_price);
        print_r($sell_price);
        print_r($com);

         print_r($item);
         $item_ids = json_encode($item);




          // foreach ($res as $key ) {
         // if($result->price>200)
         // {
         //   $result->price = $result->price + 30;
         // }
         // else
         // {
         //   $result->price = $result->price + 20;
         // }

         $this->db->where('id',$dat);
         $VendorPincode = $this->db->get('web_shippingaddr')->row_array();

         $this->db->where('pincode',$VendorPincode['pincode']);
         $Vendorid = $this->db->get('pincode')->row_array();

         print_r($Vendorid['user_id']);

         $this->db->order_by("id", "desc");
         $this->db->where('vender_id',$VendorPincode['user_id']);
         $deliverycharge = $this->db->get('delivery_charge')->row_array();


         if($result->price > $deliverycharge['min_amount'] && $result->price < $deliverycharge['max_amount'])
         {
           $result->price = $result->price + $deliverycharge['midle_amt_charge'];
         }
         elseif($result->price < $deliverycharge['min_amount'])
         {
           $result->price = $result->price + $deliverycharge['min_amt_charge'];
         }
         else
         {
          $result->price = $result->price + $deliverycharge['max_amt_charge'];
         }


          $abr=array(
            'user_id'           =>$user_id,
            'item_id'           =>$item_ids,
            'total_amount'      =>$result->price,
            'status'            =>'Processing',
            'ship_addr_id'      =>$dat,

            'total_costprice'   =>$cost_price,
            'total_sellprice'   =>$sell_price, 
            'total_commission'  =>$com,
            'cash_wallet'       =>'yes',
            'vendor_id'         =>$Vendorid['user_id'],
           

                );
            // array_push($arr, $array1);
            // }

            $this->db->insert('app_orders',$abr);


            $user_id = $this->session->userdata('user_id');
            $this->db->where('user_id',$user_id);
            $this->db->delete('app_cart');


            print_r(json_encode(1));

      }



      public function ONWORKaddordr()
      {

         $dat = $this->input->post('val');

         $user_id = $this->session->userdata('user_id');
        
        $this->db->select_sum('price');
        $this->db->where('user_id',$user_id);
        $result = $this->db->get('app_cart')->row(); 
        // print_r($result->price); 
        


         $arraRev = Array();
         // $user_id = $this->session->userdata('user_id');
         $this->db->where('user_id',$user_id);
         $res = $this->db->get('app_cart');


         $cost_price = 0;
         $sell_price = 0;
         $com        = 0;


         $allindiacost_price = 0;
         $allindiasell_price = 0;
         $allindiacom        = 0;

         foreach ($res->result_array() as $key ) {
           $this->db->where('id',$key['item_id']);
           // $result = $this->db->get('app_cart')->row();  
           $resItem = $this->db->get('app_Items')->row_array();

           $appitem=array(
            
                   'available_quantity' =>  $resItem['available_quantity']-$key['quantity'],

                ); 
            
            $this->db->where('id',$key['item_id']);
            $this->db->update('app_Items',$appitem);


            $this->db->where('id',$key['item_id']);
            $arrReavnue = $this->db->get('app_Items')->row_array();

      


            if($arrReavnue['availableallindia'] == 'yes')
            {
              # code...
              $allindiacost_price  = $allindiacost_price  + $arrReavnue['cost_price'];
              $allindiasell_price  = $allindiasell_price  + $arrReavnue['sellingprice'];
              // $com        = $com         + $arrReavnue['commision'];
              $allindiacom         = $allindiacom         + $arrReavnue['commision_price'];
            }
            elseif ($arrReavnue['availableallindia'] == 'no') {
              # code...
              $cost_price  = $cost_price  + $arrReavnue['cost_price'];
              $sell_price  = $sell_price  + $arrReavnue['sellingprice'];
              // $com        = $com         + $arrReavnue['commision'];
              $com         = $com         + $arrReavnue['commision_price'];
            }
 
          
        }




         $item=Array();

         $itemallindia=Array();

         foreach ($res->result_array() as $key ) {

          $this->db->where('id',$key['item_id']);
          $allindiastatus = $this->db->get('app_Items')->row_array();

          if($allindiastatus['availableallindia'] == 'yes')
          {
             array_push($itemallindia, $key['item_id'] .":".$key['quantity'] );
             $allindiacost_price = $allindiacost_price*$key['quantity'];
             $allindiasell_price = $allindiasell_price*$key['quantity'];
             $allindiacom        = $allindiacom*$key['quantity'];

          }
          elseif ($allindiastatus['availableallindia'] == 'no') {
             array_push($item, $key['item_id'] .":".$key['quantity'] );
          
             $cost_price = $cost_price*$key['quantity'];
             $sell_price = $sell_price*$key['quantity'];
             $com        = $com*$key['quantity'];
          }
          
        }


         $item_ids = json_encode($item);






         if(count($item) > 0)
         {
              $this->db->where('id',$dat);
              $VendorPincode = $this->db->get('web_shippingaddr')->row_array();

              $this->db->where('pincode',$VendorPincode['pincode']);
              $Vendorid = $this->db->get('pincode')->row_array();

              print_r($Vendorid['user_id']);

              $this->db->order_by("id", "desc");
              $this->db->where('vender_id',$VendorPincode['user_id']);
              $deliverycharge = $this->db->get('delivery_charge')->row_array();


       

         $totalamouunt = 0;

         if($deliverycharge)
         {
             if($sell_price > $deliverycharge['min_amount'] && $sell_price < $deliverycharge['max_amount'])
            {
                $totalamouunt = $totalamouunt +$sell_price+ $deliverycharge['midle_amt_charge'];
            }
             elseif($sell_price < $deliverycharge['min_amount'])
            {
                $totalamouunt = $totalamouunt +$sell_price + $deliverycharge['min_amt_charge'];
            }
            else
            {
                $totalamouunt = $totalamouunt +$sell_price+ $deliverycharge['max_amt_charge'];
            }
         }
         else
         {
           $totalamouunt  = $totalamouunt + $sell_price;
         }

        


          $abr=array(
            'user_id'           =>$user_id,
            'item_id'           =>$item_ids,
            // 'total_amount'      =>$result->price,
            // 'total_amount'      =>$totalamouunt,
            'status'            =>'Processing',
            // 'ship_addr_id'      =>$dat,
            'ship_addr_id'      =>$this->input->post('val'),

            'total_costprice'   =>$cost_price,
            'total_sellprice'   =>$sell_price, 
            'total_commission'  =>$com,
            'cash_wallet'       =>'yes',
            'vendor_id'         =>$Vendorid['user_id'],
            'discount'          =>$this->input->post('discount'),
            'coupan_code_id'    =>$this->input->post('coupanid'),
            'coupan_type'       =>$this->input->post('coupType'),
            'total_amount'      =>$this->input->post('finalamt'),
           

                );
            // array_push($arr, $array1);
            // }

            $this->db->insert('app_orders',$abr);



             $insertId = $this->db->insert_id();
           }
           else
           {
            $insertId = '0';
           }





       foreach ($res->result_array() as $key ) {

          $this->db->where('id',$key['item_id']);
          $allindiastatus1 = $this->db->get('app_Items')->row_array();

          // $this->db->where('id',$allindiastatus1['updater_id']);
          // $updr_id = $this->db->get('Users')->row_array();

          if($allindiastatus1['availableallindia'] == 'yes')
          {


            $this->db->where('vender_id',$allindiastatus1['updater_id']);
            $deliverychargeforall = $this->db->get('delivery_charge')->row_array();

            $totalamouunt1 = 0;
          if($deliverychargeforall)
            {
              if($allindiastatus1['sellingprice']*$key['quantity'] > $deliverychargeforall['min_amount'] && $allindiastatus1['sellingprice']*$key['quantity']< $deliverychargeforall['max_amount'])
                {
                  $totalamouunt1 = $totalamouunt1 +$allindiastatus1['sellingprice']*$key['quantity']+ $deliverychargeforall['midle_amt_charge'];
                }
              elseif($allindiastatus1['sellingprice']*$key['quantity'] < $deliverychargeforall['min_amount'])
               {
                 $totalamouunt1 = $totalamouunt1 +$allindiastatus1['sellingprice']*$key['quantity'] + $deliverychargeforall['min_amt_charge'];
               }
              else
               {
                  $totalamouunt1 = $totalamouunt1 +$allindiastatus1['sellingprice']*$key['quantity']+ $deliverychargeforall['max_amt_charge'];
               }
             }
          else
           {
             $totalamouunt1  = $totalamouunt1 + $allindiastatus1['sellingprice']*$key['quantity'];
           }

             // array_push($itemallindia, $key['item_id'] .":".$key['quantity'] );
             // $allindiacost_price = $allindiastatus1['cost_price']*$key['quantity'];
             // $allindiasell_price = $allindiastatus1['sellingprice']*$key['quantity'];
             // $allindiacom        = $allindiastatus1['commision_price']*$key['quantity'];

             $abr2=array(
              'order_id'        =>$insertId,
            'user_id'           =>$user_id,
            'item_id'           =>$key['item_id'],
            'quantity'          =>$key['quantity'],
            // 'total_amount'      =>$result->price,
            // 'total_amount'      =>$totalamouunt1,
            'status'            =>'Processing',
            // 'ship_addr_id'      =>$dat,
            'ship_addr_id'      =>$this->input->post('val'),

            'total_costprice'   =>$allindiastatus1['cost_price']*$key['quantity'],
            'total_sellprice'   =>$allindiastatus1['sellingprice']*$key['quantity'], 
            'total_commission'  =>$allindiastatus1['commision_price']*$key['quantity'],
            'cash_wallet'       =>'yes',
            'vendor_id'         =>$allindiastatus1['updater_id'],

            'discount'          =>$this->input->post('discount'),
            'coupan_code_id'    =>$this->input->post('coupanid'),
            'coupan_type'       =>$this->input->post('coupType'),
            'total_amount'      =>$this->input->post('finalamt'),
           

                );
   

               $this->db->insert('allindiaprodctorder',$abr2);

          }
             
        }


            $user_id = $this->session->userdata('user_id');
            $this->db->where('user_id',$user_id);
            $this->db->delete('app_cart');


            // print_r(json_encode(1));
            return 1;

      }





       public function ONWORKaddordr2()
      {

         $dat = $this->input->post('val');

         print_r($dat);

         $user_id = $this->session->userdata('user_id');
        
        $this->db->select_sum('price');
        $this->db->where('user_id',$user_id);
        $result = $this->db->get('app_cart')->row(); 
        // print_r($result->price); 
        


         $arraRev = Array();
         // $user_id = $this->session->userdata('user_id');
         $this->db->where('user_id',$user_id);
         $res = $this->db->get('app_cart');


         $cost_price = 0;
         $sell_price = 0;
         $com        = 0;


         $allindiacost_price = 0;
         $allindiasell_price = 0;
         $allindiacom        = 0;

         foreach ($res->result_array() as $key ) {
           $this->db->where('id',$key['item_id']);
           // $result = $this->db->get('app_cart')->row();  
           $resItem = $this->db->get('app_Items')->row_array();

           $appitem=array(
            
                   'available_quantity' =>  $resItem['available_quantity']-$key['quantity'],

                ); 
            
            $this->db->where('id',$key['item_id']);
            $this->db->update('app_Items',$appitem);


            $this->db->where('id',$key['item_id']);
            $arrReavnue = $this->db->get('app_Items')->row_array();

      


            if($arrReavnue['availableallindia'] == 'yes')
            {
              # code...
              $allindiacost_price  = $allindiacost_price  + $arrReavnue['cost_price'];
              $allindiasell_price  = $allindiasell_price  + $arrReavnue['sellingprice'];
              // $com        = $com         + $arrReavnue['commision'];
              $allindiacom         = $allindiacom         + $arrReavnue['commision_price'];
            }
            elseif ($arrReavnue['availableallindia'] == 'no') {
              # code...
              $cost_price  = $cost_price  + $arrReavnue['cost_price'];
              $sell_price  = $sell_price  + $arrReavnue['sellingprice'];
              // $com        = $com         + $arrReavnue['commision'];
              $com         = $com         + $arrReavnue['commision_price'];
            }
 
          
        }




         $item=Array();

         $itemallindia=Array();

         foreach ($res->result_array() as $key ) {

          $this->db->where('id',$key['item_id']);
          $allindiastatus = $this->db->get('app_Items')->row_array();

          if($allindiastatus['availableallindia'] == 'yes')
          {
             array_push($itemallindia, $key['item_id'] .":".$key['quantity'] );
             $allindiacost_price = $allindiacost_price*$key['quantity'];
             $allindiasell_price = $allindiasell_price*$key['quantity'];
             $allindiacom        = $allindiacom*$key['quantity'];

          }
          elseif ($allindiastatus['availableallindia'] == 'no') {
             array_push($item, $key['item_id'] .":".$key['quantity'] );
          
             $cost_price = $cost_price*$key['quantity'];
             $sell_price = $sell_price*$key['quantity'];
             $com        = $com*$key['quantity'];
          }
          
        }


         $item_ids = json_encode($item);



         $checkamount = 0;
         $amt = 0;

         if(count($item) > 0)
         {
              $this->db->where('id',$dat);
              $VendorPincode = $this->db->get('web_shippingaddr')->row_array();

              $this->db->where('pincode',$VendorPincode['pincode']);
              $Vendorid = $this->db->get('pincode')->row_array();

              print_r($Vendorid['user_id']);

              $this->db->order_by("id", "desc");
              // $this->db->where('vender_id',$VendorPincode['user_id']);
              $this->db->where('vender_id',$Vendorid['user_id']);
              $deliverycharge = $this->db->get('delivery_charge')->row_array();


       

         $totalamouunt = 0;

         $d = 0;

         if($deliverycharge)
         {
             if($sell_price > $deliverycharge['min_amount'] && $sell_price < $deliverycharge['max_amount'])
            {
                $totalamouunt = $totalamouunt +$sell_price+ $deliverycharge['midle_amt_charge'];

                $d = $deliverycharge['midle_amt_charge'];
            }
             elseif($sell_price < $deliverycharge['min_amount'])
            {
                $totalamouunt = $totalamouunt +$sell_price + $deliverycharge['min_amt_charge'];

                $d = $deliverycharge['min_amt_charge'];
            }
            else
            {
                $totalamouunt = $totalamouunt +$sell_price+ $deliverycharge['max_amt_charge'];

                $d = $deliverycharge['max_amt_charge'];
            }
         }
         else
         {
                $totalamouunt  = $totalamouunt + $sell_price;


         }

         $dis = $this->input->post('discount');
         $amt = $totalamouunt - $dis;
         $checkamount = $amt;

           // $amt = $result->price;


          $abr=array(
            'user_id'           =>$user_id,
            'item_id'           =>$item_ids,
            // 'total_amount'      =>$result->price,
            // 'total_amount'      =>$totalamouunt,
            'status'            =>'Processing',
            // 'ship_addr_id'      =>$dat,
            'ship_addr_id'      =>$this->input->post('val'),

            'total_costprice'   =>$cost_price,
            'total_sellprice'   =>$sell_price, 
            'total_commission'  =>$com,
            'cash_wallet'       =>'yes',
            'vendor_id'         =>$Vendorid['user_id'],
            'discount'          =>$this->input->post('discount'),
            'coupan_code_id'    =>$this->input->post('coupanid'),
            'coupan_type'       =>$this->input->post('coupType'),
            // 'total_amount'      =>$this->input->post('finalamt'),
            'total_amount'      =>$amt,
            'delivery_charge'   => $d,
           

                );
            // array_push($arr, $array1);
            // }

            $this->db->insert('app_orders',$abr);



             $insertId = $this->db->insert_id();
           }
           else
           {
            $insertId = '0';
           }




        
       foreach ($res->result_array() as $key ) {

          $this->db->where('id',$key['item_id']);
          $allindiastatus1 = $this->db->get('app_Items')->row_array();

          // $this->db->where('id',$allindiastatus1['updater_id']);
          // $updr_id = $this->db->get('Users')->row_array();

          if($allindiastatus1['availableallindia'] == 'yes')
          {


            $this->db->where('vender_id',$allindiastatus1['updater_id']);
            $deliverychargeforall = $this->db->get('delivery_charge')->row_array();

            $totalamouunt1 = 0;
            $d1 = 0;
          if($deliverychargeforall)
            {
              if($allindiastatus1['sellingprice']*$key['quantity'] > $deliverychargeforall['min_amount'] && $allindiastatus1['sellingprice']*$key['quantity']< $deliverychargeforall['max_amount'])
                {
                  $totalamouunt1 = $totalamouunt1 +$allindiastatus1['sellingprice']*$key['quantity']+ $deliverychargeforall['midle_amt_charge'];

                  $d1 = $deliverychargeforall['midle_amt_charge'];
                }
              elseif($allindiastatus1['sellingprice']*$key['quantity'] < $deliverychargeforall['min_amount'])
               {
                 $totalamouunt1 = $totalamouunt1 +$allindiastatus1['sellingprice']*$key['quantity'] + $deliverychargeforall['min_amt_charge'];

                 $d1 = $deliverychargeforall['min_amt_charge'];
               }
              else
               {
                  $totalamouunt1 = $totalamouunt1 +$allindiastatus1['sellingprice']*$key['quantity']+ $deliverychargeforall['max_amt_charge'];

                  $d1 = $deliverychargeforall['max_amt_charge'];
               }
             }
          else
           {
             $totalamouunt1  = $totalamouunt1 + $allindiastatus1['sellingprice']*$key['quantity'];
           }

             // array_push($itemallindia, $key['item_id'] .":".$key['quantity'] );
             // $allindiacost_price = $allindiastatus1['cost_price']*$key['quantity'];
             // $allindiasell_price = $allindiastatus1['sellingprice']*$key['quantity'];
             // $allindiacom        = $allindiastatus1['commision_price']*$key['quantity'];



            // if($checkamount < 0)
            // {
               $amt1 = $totalamouunt1;
            // }
            // else
            // {
            //   $dis1 = $this->input->post('discount');
            //   $amt1 = $totalamouunt1 - $dis1;
            // }
           
 
             // $totalamouunt1 = $totalamouunt1 + $amt;

             $abr2=array(
              'order_id'        =>$insertId,
            'user_id'           =>$user_id,
            'item_id'           =>$key['item_id'],
            'quantity'          =>$key['quantity'],
            // 'total_amount'      =>$result->price,
            // 'total_amount'      =>$totalamouunt1,
            'status'            =>'Processing',
            // 'ship_addr_id'      =>$dat,
            'ship_addr_id'      =>$this->input->post('val'),

            'total_costprice'   =>$allindiastatus1['cost_price']*$key['quantity'],
            'total_sellprice'   =>$allindiastatus1['sellingprice']*$key['quantity'], 
            'total_commission'  =>$allindiastatus1['commision_price']*$key['quantity'],
            'cash_wallet'       =>'yes',
            'vendor_id'         =>$allindiastatus1['updater_id'],

            'discount'          =>$this->input->post('discount'),
            'coupan_code_id'    =>$this->input->post('coupanid'),
            'coupan_type'       =>$this->input->post('coupType'),
            // 'total_amount'      =>$this->input->post('finalamt'),
            // 'total_amount'      =>$totalamouunt1,
            'total_amount'      =>$amt1,

            'delivery_charge'   => $d1,
           

                );
   

               $this->db->insert('allindiaprodctorder',$abr2);

          }
             
        }


            $user_id = $this->session->userdata('user_id');
            $this->db->where('user_id',$user_id);
            $this->db->delete('app_cart');


            // print_r(json_encode(1));
            return 1;

      }




       public function orderamountinfo()
      {

         $dat = $this->input->post('valId');
         // print_r($dat);
        // $dat = $_GET['valId'];

         $user_id = $this->session->userdata('user_id');
        
        $this->db->select_sum('price');
        $this->db->where('user_id',$user_id);
        $result = $this->db->get('app_cart')->row(); 
        // print_r($result->price); 
        


         $arraRev = Array();
         // $user_id = $this->session->userdata('user_id');
         $this->db->where('user_id',$user_id);
         $res = $this->db->get('app_cart');


         $cost_price = 0;
         $sell_price = 0;
         $com        = 0;


         $allindiacost_price = 0;
         $allindiasell_price = 0;
         $allindiacom        = 0;

         foreach ($res->result_array() as $key ) {
           $this->db->where('id',$key['item_id']);
           // $result = $this->db->get('app_cart')->row();  
           $resItem = $this->db->get('app_Items')->row_array();

           $appitem=array(
            
                   'available_quantity' =>  $resItem['available_quantity']-$key['quantity'],

                ); 
            
            $this->db->where('id',$key['item_id']);
            $this->db->update('app_Items',$appitem);


            $this->db->where('id',$key['item_id']);
            $arrReavnue = $this->db->get('app_Items')->row_array();

      


            if($arrReavnue['availableallindia'] == 'yes')
            {
              # code...
              $allindiacost_price  = $allindiacost_price  + $arrReavnue['cost_price'];
              $allindiasell_price  = $allindiasell_price  + $arrReavnue['sellingprice'];
              // $com        = $com         + $arrReavnue['commision'];
              $allindiacom         = $allindiacom         + $arrReavnue['commision_price'];
            }
            elseif ($arrReavnue['availableallindia'] == 'no') {
              # code...
              $cost_price  = $cost_price  + $arrReavnue['cost_price'];
              $sell_price  = $sell_price  + $arrReavnue['sellingprice'];
              // $com        = $com         + $arrReavnue['commision'];
              $com         = $com         + $arrReavnue['commision_price'];
            }
 
          
        }




         $item=Array();

         $itemallindia=Array();

         foreach ($res->result_array() as $key ) {

          $this->db->where('id',$key['item_id']);
          $allindiastatus = $this->db->get('app_Items')->row_array();

          if($allindiastatus['availableallindia'] == 'yes')
          {
             array_push($itemallindia, $key['item_id'] .":".$key['quantity'] );
             $allindiacost_price = $allindiacost_price*$key['quantity'];
             $allindiasell_price = $allindiasell_price*$key['quantity'];
             $allindiacom        = $allindiacom*$key['quantity'];

          }
          elseif ($allindiastatus['availableallindia'] == 'no') {
             array_push($item, $key['item_id'] .":".$key['quantity'] );
          
             $cost_price = $cost_price*$key['quantity'];
             $sell_price = $sell_price*$key['quantity'];
             $com        = $com*$key['quantity'];
          }
          
        }


         $item_ids = json_encode($item);




          $c1 = 0;$s1= 0;$a1 =0 ;$d1 = 0;


          // print_r($this->input->post('valId'));
          // print_r($_GET['valId']);

           // print_r(count($item));

         if(count($item) > 0)
         {

         $this->db->where('id',$dat);
         $VendorPincode = $this->db->get('web_shippingaddr')->row_array();


         // print_r($VendorPincode['pincode']);

         $this->db->where('pincode',$VendorPincode['pincode']);
         $Vendorid = $this->db->get('pincode')->row_array();

         // print_r($Vendorid['user_id']);

         $this->db->order_by("id", "desc");
         $this->db->where('vender_id',$Vendorid['user_id']);
         $deliverycharge = $this->db->get('delivery_charge')->row_array();


         // print_r($deliverycharge);

         $totalamouunt = 0;

         if($deliverycharge)
         {
             if($sell_price > $deliverycharge['min_amount'] && $sell_price < $deliverycharge['max_amount'])
            {
                $totalamouunt = $totalamouunt +$sell_price+ $deliverycharge['midle_amt_charge'];
                $d1 = $deliverycharge['midle_amt_charge'];
            }
             elseif($sell_price < $deliverycharge['min_amount'])
            {
                $totalamouunt = $totalamouunt +$sell_price + $deliverycharge['min_amt_charge'];
                $d1 = $deliverycharge['min_amt_charge'];
            }
            else
            {
                $totalamouunt = $totalamouunt +$sell_price+ $deliverycharge['max_amt_charge'];
                $d1 = $deliverycharge['max_amt_charge'];
            }
         }
         else
         {
           $totalamouunt  = $totalamouunt + $sell_price;
         }

        
          // print_r($d1);

          $abr=array(
            'user_id'           =>$user_id,
            'item_id'           =>$item_ids,
            // 'total_amount'      =>$result->price,
            'total_amount'      =>$totalamouunt,
            'status'            =>'Processing',
            'ship_addr_id'      =>$dat,

            'total_costprice'   =>$cost_price,
            'total_sellprice'   =>$sell_price, 
            'total_commission'  =>$com,
            'cash_wallet'       =>'yes',
            'vendor_id'         =>$Vendorid['user_id'],
           

                );
            // array_push($arr, $array1);
            // }

            // $this->db->insert('app_orders',$abr);



             // $insertId = $this->db->insert_id();

            $c1 = $c1 + $cost_price;
            $s1 = $s1 + $sell_price; 
            $a1 = $a1 + $totalamouunt;

               $insertId = '0';
           }
           else
           {
            $insertId = '0';
            $d1 = 0;
           }












             $c = 0;$s= 0;$a =0 ;$d = 0;
             
             $i = 0;

             foreach ($res->result_array() as $key ) {

              // ++$i;

              

          $this->db->where('id',$key['item_id']);
          $allindiastatus1 = $this->db->get('app_Items')->row_array();

          // $this->db->where('id',$allindiastatus1['updater_id']);
          // $updr_id = $this->db->get('Users')->row_array();

          if($allindiastatus1['availableallindia'] == 'yes')
          {


            $this->db->where('vender_id',$allindiastatus1['updater_id']);
            $deliverychargeforall = $this->db->get('delivery_charge')->row_array();

            $totalamouunt1 = 0;
            if($deliverychargeforall)
           {
             if($allindiastatus1['sellingprice']*$key['quantity'] > $deliverychargeforall['min_amount'] && $allindiastatus1['sellingprice']*$key['quantity']< $deliverychargeforall['max_amount'])
               {
                  $totalamouunt1 = $totalamouunt1 +$allindiastatus1['sellingprice']*$key['quantity']+ $deliverychargeforall['midle_amt_charge'];
                  $d = $deliverychargeforall['midle_amt_charge'];
               }
              elseif($allindiastatus1['sellingprice']*$key['quantity'] < $deliverychargeforall['min_amount'])
              {
                 $totalamouunt1 = $totalamouunt1 +$allindiastatus1['sellingprice']*$key['quantity'] + $deliverychargeforall['min_amt_charge'];
                 $d = $deliverychargeforall['min_amt_charge'];
              }
            else
              {
                 $totalamouunt1 = $totalamouunt1 +$allindiastatus1['sellingprice']*$key['quantity']+ $deliverychargeforall['max_amt_charge'];

                 $d = $deliverychargeforall['max_amt_charge'];
              }
            }
         else
          {
             $totalamouunt1  = $totalamouunt1 + $allindiastatus1['sellingprice']*$key['quantity'];
          }

             // array_push($itemallindia, $key['item_id'] .":".$key['quantity'] );
             // $allindiacost_price = $allindiastatus1['cost_price']*$key['quantity'];
             // $allindiasell_price = $allindiastatus1['sellingprice']*$key['quantity'];
             // $allindiacom        = $allindiastatus1['commision_price']*$key['quantity'];

          // print_r($d);

             $abr2=array(
              'order_id'        =>$insertId,
            'user_id'           =>$user_id,
            'item_id'           =>$key['item_id'],
            'quantity'          =>$key['quantity'],
            // 'total_amount'      =>$result->price,
            'total_amount'      =>$totalamouunt1,
            'status'            =>'Processing',
            'ship_addr_id'      =>$dat,

            'total_costprice'   =>$allindiastatus1['cost_price']*$key['quantity'],
            'total_sellprice'   =>$allindiastatus1['sellingprice']*$key['quantity'], 
            'total_commission'  =>$allindiastatus1['commision_price']*$key['quantity'],
            'cash_wallet'       =>'yes',
            'vendor_id'         =>$allindiastatus1['updater_id'],
           

                );

            $c = $c + $allindiastatus1['cost_price']*$key['quantity'];
            $s = $s + $allindiastatus1['sellingprice']*$key['quantity']; 
            $a = $a + $totalamouunt1;

            // $this->db->insert('allindiaprodctorder',$abr2);
             ++$i;
            $d = $d*$i;


          }
             
        }


            // $user_id = $this->session->userdata('user_id');
            // $this->db->where('user_id',$user_id);
            // $this->db->delete('app_cart');


         $ab=array(
             
            'total_amount'      =>$a + $a1,
            'total_costprice'   =>$c + $c1,
            'total_sellprice'   =>$s + $s1, 
            'delivery'          =>$d + $d1,
           

                );

            // print_r($i);
            // print_r($d);
            // print_r($d1);

            // print_r($ab);
            // return 1;
        return $ab;

      }



      public function orderamountalliteminfo()
      {

         $dat = $this->input->post('valId');

         $user_id = $this->session->userdata('user_id');
        
        $this->db->select_sum('price');
        $this->db->where('user_id',$user_id);
        $result = $this->db->get('app_cart')->row(); 
        // print_r($result->price); 
        


         $arraRev = Array();
         // $user_id = $this->session->userdata('user_id');
         $this->db->where('user_id',$user_id);
         $res = $this->db->get('app_cart');


         $cost_price = 0;
         $sell_price = 0;
         $com        = 0;


         $allindiacost_price = 0;
         $allindiasell_price = 0;
         $allindiacom        = 0;

         foreach ($res->result_array() as $key ) {
           $this->db->where('id',$key['item_id']);
           // $result = $this->db->get('app_cart')->row();  
           $resItem = $this->db->get('app_Items')->row_array();

           $appitem=array(
            
                   'available_quantity' =>  $resItem['available_quantity']-$key['quantity'],

                ); 
            
            $this->db->where('id',$key['item_id']);
            $this->db->update('app_Items',$appitem);


            $this->db->where('id',$key['item_id']);
            $arrReavnue = $this->db->get('app_Items')->row_array();

      


            if($arrReavnue['availableallindia'] == 'yes')
            {
              # code...
              $allindiacost_price  = $allindiacost_price  + $arrReavnue['cost_price'];
              $allindiasell_price  = $allindiasell_price  + $arrReavnue['sellingprice'];
              // $com        = $com         + $arrReavnue['commision'];
              $allindiacom         = $allindiacom         + $arrReavnue['commision_price'];
            }
            elseif ($arrReavnue['availableallindia'] == 'no') {
              # code...
              $cost_price  = $cost_price  + $arrReavnue['cost_price'];
              $sell_price  = $sell_price  + $arrReavnue['sellingprice'];
              // $com        = $com         + $arrReavnue['commision'];
              $com         = $com         + $arrReavnue['commision_price'];
            }
 
          
        }




         $item=Array();

         $itemallindia=Array();

         foreach ($res->result_array() as $key ) {

          $this->db->where('id',$key['item_id']);
          $allindiastatus = $this->db->get('app_Items')->row_array();

          if($allindiastatus['availableallindia'] == 'yes')
          {
             array_push($itemallindia, $key['item_id'] .":".$key['quantity'] );
             $allindiacost_price = $allindiacost_price*$key['quantity'];
             $allindiasell_price = $allindiasell_price*$key['quantity'];
             $allindiacom        = $allindiacom*$key['quantity'];

          }
          elseif ($allindiastatus['availableallindia'] == 'no') {
             array_push($item, $key['item_id'] .":".$key['quantity'] );
          
             $cost_price = $cost_price*$key['quantity'];
             $sell_price = $sell_price*$key['quantity'];
             $com        = $com*$key['quantity'];
          }
          
        }


         $item_ids = json_encode($item);


          $allvenderitmarr = Array();

          $c1 = 0;$s1= 0;$a1 =0 ;$d1 = 0;

         if($item)
         {

         $this->db->where('id',$dat);
         $VendorPincode = $this->db->get('web_shippingaddr')->row_array();

         $this->db->where('pincode',$VendorPincode['pincode']);
         $Vendorid = $this->db->get('pincode')->row_array();

         print_r($Vendorid['user_id']);

         $this->db->order_by("id", "desc");
         $this->db->where('vender_id',$VendorPincode['user_id']);
         $deliverycharge = $this->db->get('delivery_charge')->row_array();


       

         $totalamouunt = 0;

         if($deliverycharge )
         {
             if($sell_price > $deliverycharge['min_amount'] && $sell_price < $deliverycharge['max_amount'])
            {
                $totalamouunt = $totalamouunt +$sell_price+ $deliverycharge['midle_amt_charge'];
                $d1 = $deliverycharge['midle_amt_charge'];
            }
             elseif($sell_price < $deliverycharge['min_amount'])
            {
                $totalamouunt = $totalamouunt +$sell_price + $deliverycharge['min_amt_charge'];
                $d1 = $deliverycharge['min_amt_charge'];
            }
            else
            {
                $totalamouunt = $totalamouunt +$sell_price+ $deliverycharge['max_amt_charge'];
                $d1 = $deliverycharge['max_amt_charge'];
            }
         }
         else
         {
           $totalamouunt  = $totalamouunt + $sell_price;
         }

        
          // print_r($d1);

          $abr=array(
            'user_id'           =>$user_id,
            'item_id'           =>$item_ids,
            // 'total_amount'      =>$result->price,
            'total_amount'      =>$totalamouunt,
            'status'            =>'Processing',
            'ship_addr_id'      =>$dat,

            'total_costprice'   =>$cost_price,
            'total_sellprice'   =>$sell_price, 
            'total_commission'  =>$com,
            'cash_wallet'       =>'yes',
            'vendor_id'         =>$Vendorid['user_id'],
            'deliverycharge'    =>$d1,
           

                );
            // array_push($arr, $array1);

             array_push($allvenderitmarr, $abr);
            // }

            // $this->db->insert('app_orders',$abr);



             // $insertId = $this->db->insert_id();

            $c1 = $c1 + $cost_price;
            $s1 = $s1 + $sell_price; 
            $a1 = $a1 + $totalamouunt;

               $insertId = '0';
           }
           else
           {
            $insertId = '0';
            $d1 = 0;
           }



           $allindiaitem = Array();
 
             $c = 0;$s= 0;$a =0 ;$d = 0;
             
             $i = 0;

             foreach ($res->result_array() as $key ) {

              ++$i;

          $this->db->where('id',$key['item_id']);
          $allindiastatus1 = $this->db->get('app_Items')->row_array();

          // $this->db->where('id',$allindiastatus1['updater_id']);
          // $updr_id = $this->db->get('Users')->row_array();

          if($allindiastatus1['availableallindia'] == 'yes')
          {


            $this->db->where('vender_id',$allindiastatus1['updater_id']);
            $deliverychargeforall = $this->db->get('delivery_charge')->row_array();

            $totalamouunt1 = 0;
            if($deliverychargeforall)
           {
             if($allindiastatus1['sellingprice']*$key['quantity'] > $deliverychargeforall['min_amount'] && $allindiastatus1['sellingprice']*$key['quantity']< $deliverychargeforall['max_amount'])
               {
                  $totalamouunt1 = $totalamouunt1 +$allindiastatus1['sellingprice']*$key['quantity']+ $deliverychargeforall['midle_amt_charge'];
                  $d = $deliverychargeforall['midle_amt_charge'];
               }
              elseif($allindiastatus1['sellingprice']*$key['quantity'] < $deliverychargeforall['min_amount'])
              {
                 $totalamouunt1 = $totalamouunt1 +$allindiastatus1['sellingprice']*$key['quantity'] + $deliverychargeforall['min_amt_charge'];
                 $d = $deliverychargeforall['min_amt_charge'];
              }
            else
              {
                 $totalamouunt1 = $totalamouunt1 +$allindiastatus1['sellingprice']*$key['quantity']+ $deliverychargeforall['max_amt_charge'];

                 $d = $deliverychargeforall['max_amt_charge'];
              }
            }
         else
          {
             $totalamouunt1  = $totalamouunt1 + $allindiastatus1['sellingprice']*$key['quantity'];
          }

             // array_push($itemallindia, $key['item_id'] .":".$key['quantity'] );
             // $allindiacost_price = $allindiastatus1['cost_price']*$key['quantity'];
             // $allindiasell_price = $allindiastatus1['sellingprice']*$key['quantity'];
             // $allindiacom        = $allindiastatus1['commision_price']*$key['quantity'];

          // print_r($d);

             $abr2=array(
              // 'order_id'        =>$insertId,
            'user_id'           =>$user_id,
            'item_id'           =>$key['item_id'],
            'quantity'          =>$key['quantity'],
            // 'total_amount'      =>$result->price,
            'total_amount'      =>$totalamouunt1,
            'status'            =>'Processing',
            'ship_addr_id'      =>$dat,

            'total_costprice'   =>$allindiastatus1['cost_price']*$key['quantity'],
            'total_sellprice'   =>$allindiastatus1['sellingprice']*$key['quantity'], 
            'total_commission'  =>$allindiastatus1['commision_price']*$key['quantity'],
            'cash_wallet'       =>'yes',
            'vendor_id'         =>$allindiastatus1['updater_id'],
            'deliverycharge'    =>$d,
           

                );


             array_push($allindiaitem, $abr2);

            $c = $c + $allindiastatus1['cost_price']*$key['quantity'];
            $s = $s + $allindiastatus1['sellingprice']*$key['quantity']; 
            $a = $a + $totalamouunt1;

            // $this->db->insert('allindiaprodctorder',$abr2);
            $d = $d*$i;

          }
             
        }


            // $user_id = $this->session->userdata('user_id');
            // $this->db->where('user_id',$user_id);
            // $this->db->delete('app_cart');


        $allinfo = Array();
        array_push($allinfo,$allindiaitem);
        array_push($allinfo,$allvenderitmarr);


         $ab=array(
             
            // 'total_amount'      =>$a + $a1,
            // 'total_costprice'   =>$c + $c1,
            // 'total_sellprice'   =>$s + $s1, 
            // 'delivery'          =>$d + $d1,
               'allvendoritemarray' => $allvenderitmarr,
               'allindiaitemarray'  => $allindiaitem,
           

                );


            // print_r($ab);

            // print_r($allinfo);

            return $allinfo;
            // return 1;
        // return $ab;

      }





public function ONWORKorderamountalliteminfo()
      {

         $dat = $this->input->post('valId');

         $user_id = $this->session->userdata('user_id');
        
        $this->db->select_sum('price');
        $this->db->where('user_id',$user_id);
        $result = $this->db->get('app_cart')->row(); 
        // print_r($result->price); 
        


         $arraRev = Array();
         // $user_id = $this->session->userdata('user_id');
         $this->db->where('user_id',$user_id);
         $res = $this->db->get('app_cart');


         $cost_price = 0;
         $sell_price = 0;
         $com        = 0;


         $allindiacost_price = 0;
         $allindiasell_price = 0;
         $allindiacom        = 0;

         foreach ($res->result_array() as $key ) {
           $this->db->where('id',$key['item_id']);
           // $result = $this->db->get('app_cart')->row();  
           $resItem = $this->db->get('app_Items')->row_array();

           $appitem=array(
            
                   'available_quantity' =>  $resItem['available_quantity']-$key['quantity'],

                ); 
            
            $this->db->where('id',$key['item_id']);
            $this->db->update('app_Items',$appitem);


            $this->db->where('id',$key['item_id']);
            $arrReavnue = $this->db->get('app_Items')->row_array();

      


            if($arrReavnue['availableallindia'] == 'yes')
            {
              # code...
              $allindiacost_price  = $allindiacost_price  + $arrReavnue['cost_price'];
              $allindiasell_price  = $allindiasell_price  + $arrReavnue['sellingprice'];
              // $com        = $com         + $arrReavnue['commision'];
              $allindiacom         = $allindiacom         + $arrReavnue['commision_price'];
            }
            elseif ($arrReavnue['availableallindia'] == 'no') {
              # code...
              $cost_price  = $cost_price  + $arrReavnue['cost_price'];
              $sell_price  = $sell_price  + $arrReavnue['sellingprice'];
              // $com        = $com         + $arrReavnue['commision'];
              $com         = $com         + $arrReavnue['commision_price'];
            }
 
          
        }




         $item=Array();

         $itemallindia=Array();

         foreach ($res->result_array() as $key ) {

          $this->db->where('id',$key['item_id']);
          $allindiastatus = $this->db->get('app_Items')->row_array();

          if($allindiastatus['availableallindia'] == 'yes')
          {
             array_push($itemallindia, $key['item_id'] .":".$key['quantity'] );
             $allindiacost_price = $allindiacost_price*$key['quantity'];
             $allindiasell_price = $allindiasell_price*$key['quantity'];
             $allindiacom        = $allindiacom*$key['quantity'];

          }
          elseif ($allindiastatus['availableallindia'] == 'no') {
             array_push($item, $key['item_id'] .":".$key['quantity'] );
          
             $cost_price = $cost_price*$key['quantity'];
             $sell_price = $sell_price*$key['quantity'];
             $com        = $com*$key['quantity'];
          }
          
        }


         $item_ids = json_encode($item);


          $allvenderitmarr = Array();

          $c1 = 0;$s1= 0;$a1 =0 ;$d1 = 0;

         if($item)
         {

         $this->db->where('id',$dat);
         $VendorPincode = $this->db->get('web_shippingaddr')->row_array();

         $this->db->where('pincode',$VendorPincode['pincode']);
         $Vendorid = $this->db->get('pincode')->row_array();

         // print_r($Vendorid['user_id']);

         $this->db->order_by("id", "desc");
         $this->db->where('vender_id',$VendorPincode['user_id']);
         $deliverycharge = $this->db->get('delivery_charge')->row_array();


       

         $totalamouunt = 0;

         if($deliverycharge )
         {
             if($sell_price > $deliverycharge['min_amount'] && $sell_price < $deliverycharge['max_amount'])
            {
                $totalamouunt = $totalamouunt +$sell_price+ $deliverycharge['midle_amt_charge'];
                $d1 = $deliverycharge['midle_amt_charge'];
            }
             elseif($sell_price < $deliverycharge['min_amount'])
            {
                $totalamouunt = $totalamouunt +$sell_price + $deliverycharge['min_amt_charge'];
                $d1 = $deliverycharge['min_amt_charge'];
            }
            else
            {
                $totalamouunt = $totalamouunt +$sell_price+ $deliverycharge['max_amt_charge'];
                $d1 = $deliverycharge['max_amt_charge'];
            }
         }
         else
         {
           $totalamouunt  = $totalamouunt + $sell_price;
         }

        
          // print_r($d1);

          $abr=array(
            'user_id'           =>$user_id,
            'item_id'           =>$item_ids,
            // 'total_amount'      =>$result->price,
            'total_amount'      =>$totalamouunt,
            'status'            =>'Processing',
            'ship_addr_id'      =>$dat,

            'total_costprice'   =>$cost_price,
            'total_sellprice'   =>$sell_price, 
            'total_commission'  =>$com,
            'cash_wallet'       =>'yes',
            'vendor_id'         =>$Vendorid['user_id'],
            'deliverycharge'    =>$d1,
           

                );
            // array_push($arr, $array1);

             array_push($allvenderitmarr, $abr);
            // }

            // $this->db->insert('app_orders',$abr);



             // $insertId = $this->db->insert_id();

            $c1 = $c1 + $cost_price;
            $s1 = $s1 + $sell_price; 
            $a1 = $a1 + $totalamouunt;

               $insertId = '0';
           }
           else
           {
            $insertId = '0';
            $d1 = 0;
           }



           $allindiaitem = Array();
 
             $c = 0;$s= 0;$a =0 ;$d = 0;
             
             $i = 0;

             foreach ($res->result_array() as $key ) {

              ++$i;

          $this->db->where('id',$key['item_id']);
          $allindiastatus1 = $this->db->get('app_Items')->row_array();

          // $this->db->where('id',$allindiastatus1['updater_id']);
          // $updr_id = $this->db->get('Users')->row_array();

          if($allindiastatus1['availableallindia'] == 'yes')
          {


            $this->db->where('vender_id',$allindiastatus1['updater_id']);
            $deliverychargeforall = $this->db->get('delivery_charge')->row_array();

            $totalamouunt1 = 0;
            if($deliverychargeforall)
           {
             if($allindiastatus1['sellingprice']*$key['quantity'] > $deliverychargeforall['min_amount'] && $allindiastatus1['sellingprice']*$key['quantity']< $deliverychargeforall['max_amount'])
               {
                  $totalamouunt1 = $totalamouunt1 +$allindiastatus1['sellingprice']*$key['quantity']+ $deliverychargeforall['midle_amt_charge'];
                  $d = $deliverychargeforall['midle_amt_charge'];
               }
              elseif($allindiastatus1['sellingprice']*$key['quantity'] < $deliverychargeforall['min_amount'])
              {
                 $totalamouunt1 = $totalamouunt1 +$allindiastatus1['sellingprice']*$key['quantity'] + $deliverychargeforall['min_amt_charge'];
                 $d = $deliverychargeforall['min_amt_charge'];
              }
            else
              {
                 $totalamouunt1 = $totalamouunt1 +$allindiastatus1['sellingprice']*$key['quantity']+ $deliverychargeforall['max_amt_charge'];

                 $d = $deliverychargeforall['max_amt_charge'];
              }
            }
         else
          {
             $totalamouunt1  = $totalamouunt1 + $allindiastatus1['sellingprice']*$key['quantity'];
          }

             // array_push($itemallindia, $key['item_id'] .":".$key['quantity'] );
             // $allindiacost_price = $allindiastatus1['cost_price']*$key['quantity'];
             // $allindiasell_price = $allindiastatus1['sellingprice']*$key['quantity'];
             // $allindiacom        = $allindiastatus1['commision_price']*$key['quantity'];

          // print_r($d);

             $abr2=array(
              // 'order_id'        =>$insertId,
            'user_id'           =>$user_id,
            'item_id'           =>$key['item_id'],
            'quantity'          =>$key['quantity'],
            // 'total_amount'      =>$result->price,
            'total_amount'      =>$totalamouunt1,
            'status'            =>'Processing',
            'ship_addr_id'      =>$dat,

            'total_costprice'   =>$allindiastatus1['cost_price']*$key['quantity'],
            'total_sellprice'   =>$allindiastatus1['sellingprice']*$key['quantity'], 
            'total_commission'  =>$allindiastatus1['commision_price']*$key['quantity'],
            'cash_wallet'       =>'yes',
            'vendor_id'         =>$allindiastatus1['updater_id'],
            'deliverycharge'    =>$d,
           

                );


             array_push($allindiaitem, $abr2);

            $c = $c + $allindiastatus1['cost_price']*$key['quantity'];
            $s = $s + $allindiastatus1['sellingprice']*$key['quantity']; 
            $a = $a + $totalamouunt1;

            // $this->db->insert('allindiaprodctorder',$abr2);
            $d = $d*$i;

          }
             
        }


        // print_r($d);
            // $user_id = $this->session->userdata('user_id');
            // $this->db->where('user_id',$user_id);
            // $this->db->delete('app_cart');


        $allinfo = Array();
        array_push($allinfo,$allindiaitem);
        array_push($allinfo,$allvenderitmarr);


         $ab=array(
             
            // 'total_amount'      =>$a + $a1,
            // 'total_costprice'   =>$c + $c1,
            // 'total_sellprice'   =>$s + $s1, 
            // 'delivery'          =>$d + $d1,
               'allvendoritemarray' => $allvenderitmarr,
               'allindiaitemarray'  => $allindiaitem,
           

                );


            // print_r($ab);

            // print_r($allinfo);

            return $allinfo;
            // return 1;
        // return $ab;

      }



      
      // //oreder items info function
      // public function orderItemInfo()
      // {
      //   $user_id = $this->session->userdata('user_id');
      //   $this->db->where('user_id',$user_id);


      // $quer = $this->db->get('app_orders');
      // $user_dat=$quer->result_array();
      // if($quer->num_rows() >= 1){
      //   $arr=Array();
      //   $arr2 = Array();



      //   // foreach ($quer->result_array() as $key ) {
          
           

      //     // $this->db->where('user_id',$key['user_id']);
      //     // // $user_dat=$this->db->get('app_orders')->row_array();
      //     // $user_dat=$this->db->get('app_orders')->result_array();
      //     // // print_r($user_dat);
      //    $orderArr = Array();
      //    $itemarr2 = Array();
      //    for($j=0;$j<count($user_dat);$j++)
      //    {
      //      // $parts = explode(': ', $user_dat[$j]['item_id']);
      //     $items_id = json_decode($user_dat[$j]['item_id']);
      //       array_push($itemarr2,$user_dat[$j]['id']);
      //     // $orderArr = Array();                   
      //       // print_r($user_dat[$j]['item_id']);
      //       // print_r($items_id);
      //       // print_r($parts);
      //       for($i=0;$i<count($items_id);$i++)
      //       {
      //           // print_r($items_id[$i]);
      //         $ab= explode(':', $items_id[$i]);
      //         // print_r($ab[1]);
      //           $this->db->where('id',$ab[0]);
      //           $itemarr = $this->db->get('app_Items')->row_array();
      //           // print_r($itemarr);
      //           $array3=array(
      //                      'id'                 =>$itemarr['id'],
      //                      'item_name'          =>$itemarr['item_name'],
      //                      // 'item_id'             =>$user_dat['item_id'],
      //                      'Item_code'          =>$itemarr['Item_code'],
      //                      'Item_weight'        =>$itemarr['Item_weight'],
      //                      'item_mrp'           =>$itemarr['item_mrp'],
      //                      'item_image_path'    =>$itemarr['item_image_path'],
      //                      'total_amount'       =>$user_dat[$j]['total_amount'],
      //                      'app_oder_id'        =>$user_dat[$j]['id'],
      //                       'status'            =>$user_dat[$j]['status'],
      //                      'order_quantity'     =>$ab[1],
      //                      'total_number'       =>$itemarr2,
            
      //           );

      //          array_push($orderArr, $array3);
      //       }

      //       // $abc=array(
      //       //   'id'          =>$user_dat[$j]['id'],
      //       //   'item_array'  =>$orderArr,
      //       //   'total_amount'=>$user_dat[$j]['total_amount'],
      //       //   'status'      =>$user_dat[$j]['status'],
      //       // );
      //       // array_push($orderArr, $abc);
      //     }


      //   // }
      //   // print_r($orderArr);
      //   // print_r(count($items_id));
      //   // print_r($arr);
      //   // print_r($arr2);
        
      //   return $orderArr;
      //    }
      // }


       //oreder items info function
      public function orderItemInfo()
      {
        $user_id = $this->session->userdata('user_id');
        $this->db->where('user_id',$user_id);


      $this->db->order_by('id', 'DESC');
      $quer = $this->db->get('app_orders');
      $user_dat=$quer->result_array();
      if($quer->num_rows() >= 1){
        $arr=Array();
        $arr2 = Array();



   
         $orderArr = Array();
         $itemarr2 = Array();
         for($j=0;$j<count($user_dat);$j++)
         {
           // $parts = explode(': ', $user_dat[$j]['item_id']);
          $items_id = json_decode($user_dat[$j]['item_id']);
            array_push($itemarr2,$user_dat[$j]['id']);
     
            for($i=0;$i<count($items_id);$i++)
            {

              $this->db->where('id',$user_dat[$j]['ship_addr_id']);
              $addrarr = $this->db->get('web_shippingaddr')->row_array();

                // print_r($items_id[$i]);
              $ab= explode(':', $items_id[$i]);
              // print_r($ab[1]);
                $this->db->where('id',$ab[0]);
                $itemarr = $this->db->get('app_Items')->row_array();
                // print_r($itemarr);
                $array3=array(
                           'id'                 =>$itemarr['id'],
                           'item_name'          =>$itemarr['item_name'],
                           // 'item_id'             =>$user_dat['item_id'],
                           'Item_code'          =>$itemarr['Item_code'],
                           'Item_weight'        =>$itemarr['Item_weight'],
                           'item_mrp'           =>$itemarr['item_mrp'],
                           'item_image_path'    =>$itemarr['item_image_path'],
                           'total_amount'       =>$user_dat[$j]['total_amount'],
                           'app_oder_id'        =>$user_dat[$j]['id'],
                            'status'            =>$user_dat[$j]['status'],
                           'order_quantity'     =>$ab[1],
                           'total_number'       =>$itemarr2,
                           'name'               =>$addrarr['name'],
                           'mobile'             =>$addrarr['mobile'],
                           'email'              =>$addrarr['email'],
                           'addresss'           =>$addrarr['addresss'],
                           'pincode'            =>$addrarr['pincode'],
            
                );

               array_push($orderArr, $array3);
            }

      
          }


        // print_r($orderArr);

        
        return $orderArr;
         }
      }



      //oreder items info function
      public function orderItemInfoallindia()
      {
        $user_id = $this->session->userdata('user_id');
        $this->db->where('user_id',$user_id);


      $this->db->order_by('id', 'DESC');
      $quer = $this->db->get('allindiaprodctorder');
      $user_dat=$quer->result_array();
      if($quer->num_rows() >= 1){
        $arr=Array();
        $arr2 = Array();



   
         $orderArr = Array();
         $itemarr2 = Array();
         for($j=0;$j<count($user_dat);$j++)
         {
           // $parts = explode(': ', $user_dat[$j]['item_id']);
          $items_id = $user_dat[$j]['item_id'];
            array_push($itemarr2,$user_dat[$j]['id']);
     
            for($i=0;$i<count($items_id);$i++)
            {

              $this->db->where('id',$user_dat[$j]['ship_addr_id']);
              $addrarr = $this->db->get('web_shippingaddr')->row_array();

                // print_r($items_id[$i]);
              // $ab= explode(':', $items_id[$i]);
              // print_r($ab[1]);
                $this->db->where('id', $user_dat[$j]['item_id']);
                $itemarr = $this->db->get('app_Items')->row_array();
                // print_r($itemarr);
                $array3=array(
                           'id'                 =>$itemarr['id'],
                           'item_name'          =>$itemarr['item_name'],
                           // 'item_id'             =>$user_dat['item_id'],
                           'Item_code'          =>$itemarr['Item_code'],
                           'Item_weight'        =>$itemarr['Item_weight'],
                           'item_mrp'           =>$itemarr['item_mrp'],
                           'item_image_path'    =>$itemarr['item_image_path'],
                           'total_amount'       =>$user_dat[$j]['total_amount'],
                           'app_oder_id'        =>$user_dat[$j]['id'],
                            'status'            =>$user_dat[$j]['status'],
                           // 'order_quantity'     =>$ab[1],
                           'order_quantity'     =>$user_dat[$j]['quantity'],
                           'total_number'       =>$itemarr2,
                           'name'               =>$addrarr['name'],
                           'mobile'             =>$addrarr['mobile'],
                           'email'              =>$addrarr['email'],
                           'addresss'           =>$addrarr['addresss'],
                           'pincode'            =>$addrarr['pincode'],
            
                );

               array_push($orderArr, $array3);
            }

      
          }


        // print_r($orderArr);

        
        return $orderArr;
         }
      }



      public function  getallitems()
      {
        
        // $this->db->where('Category','Daily need');
        $res = $this->db->get('app_Items')->result_array();
        // print_r($res);
        return $res;
        // print_r(json_encode($res));   
      }


      public function cardCount()
     {
      $user_id = $this->session->userdata('user_id');
        $this->db->where('user_id',$user_id);
        $res = $this->db->get('app_cart')->num_rows();

        return $res;
     }


     public function cardCountceforelogin()
     {
      $user_id = $this->session->userdata('user_id');
        $this->db->where('tempuser_id',$user_id);
        $res = $this->db->get('web_cart')->num_rows();

        // print_r($res);
        return $res;
     }



     public function pro_info($dat)
     {
      
       // $this->db->like('item_name', $dat);
       $this->db->where('id',$dat);
        $res = $this->db->get('app_Items')->result_array();
        // print_r($res);
        return $res;   
     }




     public function shipadr($dat)
     {
      
       // $this->db->like('item_name', $dat);
       $this->db->where('id',$dat);
        $res = $this->db->get('web_shippingaddr')->row_array();
        // print_r($res);
        return $res;   
     }


     //   public function pro_info($dat,$cat)
     // {
      
     //   $this->db->like('item_name', $dat);
     //   $this->db->where('category', $cat);
     //   // $this->db->where('id',$dat);
     //    $res = $this->db->get('app_Items')->result_array();
     //    // print_r($res);
     //    return $res;   
     // }

     // public function cat_info($dat)
     // {
     //   $this->db->where('Category',$dat);
     //    $res = $this->db->get('app_Items');
     //    // print_r($res);
     //    return $res; 
     // }


     public function totalnum_info($dat)
     {

        $this->db->where('id',$dat);
        $dat1 = $this->db->get('category')->row_array();
        
        $user_id = $this->session->userdata('user_id');
      
        $this->db->where('id',$user_id);
        $result = $this->db->get('app_users');

       // print_r($result->num_rows());
       if($result->num_rows() == 0)
       {


       $user_id = $this->session->userdata('user_id');
       $this->db->where('temp_user',$user_id);
       $requs = $this->db->get('web_tempuser')->row_array();

       // print_r($requs['pincode']);
       // print_r($user_id);
       if($requs['pincode'])
       {
        $this->db->where('pincode',$requs['pincode']);
       $result = $this->db->get('pincode')->row_array();

       
       $this->db->where('updater_id',$result['user_id']);
       $this->db->where('Category',$dat1['category']);

       // $multipleWhere = array('availableallindia' => 'Yes','Category'=>$dat);
       // $this->db->or_where_in($multipleWhere);



       $this->db->or_where('availableallindia','Yes')->where ('Category',$dat1['category']);





        $res = $this->db->get('app_Items');
        // print_r($res);
        return $res; 
       }
       else{
           $this->db->where('Category',$dat1['category']);
           $this->db->where('featured_image','yes');
           $res = $this->db->get('app_Items');
           // print_r($res);
           return $res->num_rows(); 
       }
     }
     else
     {
       $user_id = $this->session->userdata('user_id');
       $this->db->where('id',$user_id);
       $requs = $this->db->get('app_users')->row_array();

       // print_r($requs['pincode']);
       // print_r('null');
       // if($requs['pincode'])
       // {
       $this->db->where('pincode',$requs['pincode']);
       $result = $this->db->get('pincode')->row_array();

       
       $this->db->where('updater_id',$result['user_id']);
       $this->db->where('Category',$dat1['category']);
       $this->db->or_where('availableallindia','Yes')->where ('Category',$dat1['category']);

       // $multipleWhere = array('availableallindia' => 'Yes','Category'=>$dat);
       // $this->db->or_where_in($multipleWhere);

        $res = $this->db->get('app_Items');
        // print_r($res);
        return $res->num_rows(); 
       // }
       // else{
       //     $this->db->where('Category',$dat);
       //     $res = $this->db->get('app_Items');
       //     // print_r($res);
       //     return $res; 
       // }

     }
       
}


public function updatedcat_info($dat,$limit,$offset)
     {
        
        $this->db->where('id',$dat);
        $dat1 = $this->db->get('category')->row_array();

        $user_id = $this->session->userdata('user_id');
      
        $this->db->where('id',$user_id);
        $result = $this->db->get('app_users');

       // print_r($result->num_rows());
       if($result->num_rows() == 0)
       {


       $user_id = $this->session->userdata('user_id');
       $this->db->where('temp_user',$user_id);
       $requs = $this->db->get('web_tempuser')->row_array();

       // print_r($requs['pincode']);
       // print_r($user_id);
       if($requs['pincode'])
       {
        $this->db->where('pincode',$requs['pincode']);
       $result = $this->db->get('pincode')->row_array();

       
       $this->db->where('updater_id',$result['user_id']);
       $this->db->where('Category',$dat1['category']);

       // $multipleWhere = array('availableallindia' => 'Yes','Category'=>$dat);
       // $this->db->or_where_in($multipleWhere);



       $this->db->or_where('availableallindia','Yes')->where ('Category',$dat1['category']);





        $res = $this->db->get('app_Items');
        // print_r($res);
        return $res; 
       }
       else{
           $this->db->where('Category',$dat1['category']);
           $this->db->where('featured_image','yes')
                    ->limit($limit,$offset);
           $res = $this->db->get('app_Items');
           // print_r($res);
           return $res; 
       }
     }
     else
     {
       $user_id = $this->session->userdata('user_id');
       $this->db->where('id',$user_id);
       $requs = $this->db->get('app_users')->row_array();

       // print_r($requs['pincode']);
       // print_r('null');
       // if($requs['pincode'])
       // {
       $this->db->where('pincode',$requs['pincode']);
       $result = $this->db->get('pincode')->row_array();

       
       $this->db->where('updater_id',$result['user_id']);
       $this->db->where('Category',$dat1['category'])
                ->limit($limit,$offset);
       $this->db->or_where('availableallindia','Yes')->where ('Category',$dat1['category'])->limit($limit,$offset);

       // $multipleWhere = array('availableallindia' => 'Yes','Category'=>$dat);
       // $this->db->or_where_in($multipleWhere);

        $res = $this->db->get('app_Items');
        // print_r($res);
        return $res; 
       // }
       // else{
       //     $this->db->where('Category',$dat);
       //     $res = $this->db->get('app_Items');
       //     // print_r($res);
       //     return $res; 
       // }

     }
       
}



     public function cat_info($dat)
     {

        $user_id = $this->session->userdata('user_id');
      
        $this->db->where('id',$user_id);
        $result = $this->db->get('app_users');

       // print_r($result->num_rows());
       if($result->num_rows() == 0)
       {


       $user_id = $this->session->userdata('user_id');
       $this->db->where('temp_user',$user_id);
       $requs = $this->db->get('web_tempuser')->row_array();

       // print_r($requs['pincode']);
       // print_r($user_id);
       if($requs['pincode'])
       {
        $this->db->where('pincode',$requs['pincode']);
       $result = $this->db->get('pincode')->row_array();

       
       $this->db->where('updater_id',$result['user_id']);
       $this->db->where('Category',$dat);

       // $multipleWhere = array('availableallindia' => 'Yes','Category'=>$dat);
       // $this->db->or_where_in($multipleWhere);



       $this->db->or_where('availableallindia','Yes')->where ('Category',$dat);





        $res = $this->db->get('app_Items');
        // print_r($res);
        return $res; 
       }
       else{
           $this->db->where('Category',$dat);
           $this->db->where('featured_image','yes');
           $res = $this->db->get('app_Items');
           // print_r($res);
           return $res; 
       }
     }
     else
     {
       $user_id = $this->session->userdata('user_id');
       $this->db->where('id',$user_id);
       $requs = $this->db->get('app_users')->row_array();

       // print_r($requs['pincode']);
       // print_r('null');
       // if($requs['pincode'])
       // {
       $this->db->where('pincode',$requs['pincode']);
       $result = $this->db->get('pincode')->row_array();

       
       $this->db->where('updater_id',$result['user_id']);
       $this->db->where('Category',$dat);
       $this->db->or_where('availableallindia','Yes')->where ('Category',$dat);

       // $multipleWhere = array('availableallindia' => 'Yes','Category'=>$dat);
       // $this->db->or_where_in($multipleWhere);

        $res = $this->db->get('app_Items');
        // print_r($res);
        return $res; 
       // }
       // else{
       //     $this->db->where('Category',$dat);
       //     $res = $this->db->get('app_Items');
       //     // print_r($res);
       //     return $res; 
       // }

     }
       
}



     public function fea_info($dat)
     {
       $this->db->where('category',$dat);
        $res = $this->db->get('app_Items',3);
        // print_r($res);
        return $res;   
     }


     public function updat_addcart()
        {
          $arr1=$this->input->post();
          //print_r($this->session->userdata());
         //echo $this->session->userdata('user_name');
         $user_id=$this->session->userdata('user_id');
          $arr = Array(
                 'user_id'  =>$user_id,
                 'item_id'  => $arr1['item_id'],
                 'price'    => $arr1['price'],
                 'quantity' => $arr1['quantity'],
                 // 'assigned_to'  => $arr1['assigned_to'],
                 // 'admin_id'     => $this->session->userdata('user_id'),
                 
          );

            $this->db->where('id',$arr1['card_item_id']);
            $this->db->update('app_cart',$arr);
            // $this->db->insert('app_cart',$arr);
  print_r("sucess");  
           return ;
        }




         public function updat_reject()
      {
         $arr1 = $this->input->post('val');
         

          $arr = Array(
               'status' =>'Reject',
          );

          $this->db->where('id',$arr1);
          $this->db->update('app_orders',$arr);

          echo "success";
          // print_r(json_encode(1));
      }



      public function updat_rejectallindia()
      {
         $arr1 = $this->input->post('val');
         

          $arr = Array(
               'status' =>'Reject',
          );

          $this->db->where('id',$arr1);
          $this->db->update('allindiaprodctorder',$arr);

          echo "success";
          // print_r(json_encode(1));
      }


      public function forget_info($dat)
      {
         $this->db->where('email',$dat);
        $res = $this->db->get('app_users')->row_array();
        // print_r($res);
        return $res; 
      }

      public function secure_info()
      {
        $arr1=$this->input->post();
     //      // print_r($arr1);
      $this->db->where('email',$arr1['emaId']);
      $this->db->where('ans1',$arr1['sans1']);
      $this->db->where('ans2',$arr1['sans2']);

      $res = $this->db->get('app_users')->num_rows();
      // print_r($res);
      print_r(json_encode($res));

      }


      public function updatpass()
      {
        $arr1 = $this->input->post('emaId');
         

          $arr = Array(
               'password' =>$this->input->post('psw'),
          );

          $this->db->where('email',$arr1);
          $this->db->update('app_users',$arr);

          print_r(json_encode(1));
      }


      public function loginsecure_info()
      {
         $arr1 = $this->input->post('emaId');
         $user_id=$this->session->userdata('user_id');

          $arr = Array(
               'ques1' =>$this->input->post('qus1'),
               'ques2' =>$this->input->post('qus2'),
               'ans1' =>$this->input->post('sans1'),
               'ans2' =>$this->input->post('sans2'),
          );

          $this->db->where('id',$user_id);
          $this->db->where('email',$arr1);
          $this->db->update('app_users',$arr);

          print_r(json_encode(1));
      }


        public function updat_user()
      {
        
         

          $arr = Array(
               'name'  => $this->input->post('name'),
               'email' => $this->input->post('emaId'),
          );

          $user_id=$this->session->userdata('user_id');
          $this->db->where('id',$user_id);
          $this->db->update('app_users',$arr);

          print_r(json_encode(1));
      }


      public function profile_data(){
      $user_id=$this->session->userdata('user_id');
      $this->db->select_max('id');
      $this->db->where('user_id',$user_id);
      $this->db->where('file_type','Profile_image');
      $dat= $this->db->get('app_files');
      // if($dat->num_rows() == 1){
      //   $
        // echo 'IF ';
      $arr=$dat->row_array();
      // print_r($arr);
      $this->db->where('id',$arr['id']);
      $data=$this->db->get('app_files')->row_array();
      // }elseif ($dat->num_rows() <=1 ) {
      //   $data= $dat->row_array();
        return $data;
      // }else{
        // echo "else" ;
              // }
      
    }



     public function nameupdat_user()
      {
        
         

          $arr = Array(
               'name'  => $this->input->post('name'),
               // 'email' => $this->input->post('emaId'),
          );

          $user_id=$this->session->userdata('user_id');
          $this->db->where('id',$user_id);
          $this->db->update('app_users',$arr);

          print_r(json_encode(1));
      }


       public function addupdat_user()
      {
        
         

          $arr = Array(
               'addresss'  => $this->input->post('add'),
               // 'email' => $this->input->post('emaId'),
          );

          $user_id=$this->session->userdata('user_id');
          $this->db->where('id',$user_id);
          $this->db->update('app_users',$arr);

          print_r(json_encode(1));
      }


      public function pinupdat_user()
      {
        
         

          $arr = Array(
               'pincode'  => $this->input->post('pin'),
               // 'email' => $this->input->post('emaId'),
          );

          $user_id=$this->session->userdata('user_id');
          $this->db->where('id',$user_id);
          $this->db->update('app_users',$arr);

          print_r(json_encode(1));
      }


      public function emaupdat_user()
      {
        
         

          $arr = Array(
               'email'  => $this->input->post('ema'),
               // 'email' => $this->input->post('emaId'),
          );

          $user_id=$this->session->userdata('user_id');
          $this->db->where('id',$user_id);
          $this->db->update('app_users',$arr);

          print_r(json_encode(1));
      }



      public function mobupdat_user()
      {
        
         

          $arr = Array(
               'mobile'  => $this->input->post('mob'),
               // 'email' => $this->input->post('emaId'),
          );

          $user_id=$this->session->userdata('user_id');
          $this->db->where('id',$user_id);
          $this->db->update('app_users',$arr);

          print_r(json_encode(1));
      }


      public function com_info()
      {
        $res = $this->db->get('com_info')->row_array();

        // print_r($res);
        return $res;
      }


      // public function image_info()
      // {
      //   $res = $this->db->get('carousel');

      //   // print_r($res);
      //   return $res;
      // }


      public function webimage_info()
      {

        $this->db->where('device','web');
        $res = $this->db->get('carousel');

        // print_r($res);
        return $res;
      }


      public function mobimage_info()
      {

        $this->db->where('device','mob');
        $res = $this->db->get('carousel');

        // print_r($res);
        return $res;
      }


      public function cat()
      {
        $res = $this->db->get('category');

        // print_r($res->result_array());
        return $res;
      }



      public function updateAddress()
      {
        $arr1=$this->input->post();
         $arr = Array(
                'user_id'   => $this->session->userdata('user_id'),
                 'name'     => $this->session->userdata('username'),
                 'mobile'   => $arr1['phone_no'],
                 'email'    => $arr1['email'],
                 'addresss' => $arr1['address'],
                 'pincode'  => $arr1['pincode'],
  
                 // 'message'  => $arr1['message'],
    
          );
            $this->db->insert('shipping_address',$arr);
            // echo "success";
            print_r(1);
      }



        public function shipping_addr()
      {

          $user_id=$this->session->userdata('user_id');
          $this->db->where('user_id',$user_id);
          $req = $this->db->get('shipping_address');

          // print_r($req);
          return $req;
      }

      public function latest_shippingOrder()
      {
      $user_id=$this->session->userdata('user_id');
      $this->db->select_max('id');
      $this->db->where('user_id',$user_id);
      $dat= $this->db->get('shipping_address');
      
      $arr=$dat->row_array();

      $this->db->where('id',$arr['id']);
      $data=$this->db->get('shipping_address')->row_array();

        // print_r($data);
        return $data;

      }

//footer slider fetching image function.
       public function footimage_info()
      {
        $res = $this->db->get('footer_slider');

        // print_r($res);
        return $res;
      }



//featured gallery fetching image function.
       public function featimage()
      {
        $res = $this->db->get('feat_gallery')->result_array();

        // print_r($res);
        return $res;
      }



//footerinfo fetching data function.
       public function footer_info()
      {
        $this->db->order_by('id',"DESC");
        $res = $this->db->get('footer_info')->row_array();

        // print_r($res);
        return $res;
      }



public function insert_webtempsession()
    {
     
       $this->load->helper('string');
       $user_id = random_string('alnum', 5);
            
          $arr = Array(
                 
                 'temp_user' => $user_id,
    
          );
            $this->db->insert('web_tempuser',$arr);
            
            $last_id=$this->db->insert_id();
            $this->db->where('id',$last_id);
            $arrr=$this->db->get('web_tempuser');
            return $arrr->row_array();
          // }
    }




    public function insert_websignUp()
    {
     $arr1=$this->input->post();
      $this->db->where('name',$arr1['name']);
      $this->db->where('mobile',$arr1['phone_no']);
      $this->db->where('email',$arr1['email']);
      // $this->db->where('address',$arr1['address']);
      $queryResult=$this->db->get('app_users');  
      $foundRows = $queryResult->num_rows();
      // print_r($queryResult);
      echo $foundRows;
      if($foundRows >= 1) {
        echo "You are already registered";
      } else {
            
          $arr = Array(
                 'name'     => $arr1['name'],
                 'mobile'   => $arr1['phone_no'],
                 'email'    => $arr1['email'],
                 'password' => $arr1['psw'],
             
          );
            // $this->db->insert('web_user',$arr);
            $this->db->insert('app_users',$arr);
            
            $last_id=$this->db->insert_id();
            $this->db->where('id',$last_id);
            // $arrr=$this->db->get('web_user');
            $arrr=$this->db->get('app_users');
            return $arrr->row_array();
          }
    }



  function validate($email,$password){
            $this->db->where('email',$email);
            $this->db->where('password',$password);
             // $result = $this->db->get('web_user');
            $result = $this->db->get('app_users');

            // print_r($result->num_rows());

            // $this->db->where('email',$email);
            // $this->db->where('password',$password);
            //  // $result = $this->db->get('web_user');
            // $req3 = $this->db->get('Users');

            if($result->num_rows() > 0)
            {



            $this->db->where('email',$email);
            $this->db->where('password',$password);
            $row = $this->db->get('app_users')->row_array();

            $this->db->where('tempuser_id',$this->session->userdata('user_id'));
            $req = $this->db->get('web_cart');

            
            $arr=Array();
          foreach ($req->result_array() as $key ) {

      

          $array1=array(
            'user_id'             =>  $row['id'],
            'item_id'             =>  $key['item_id'],
            'price'               =>  $key['price'],
            'quantity'            =>  $key['quantity'],

                );

            $this->db->insert('app_cart',$array1);

          
            }

            return $result;
          }
          // elseif($req3->num_rows() > 0)
          // {
          //   return $req3;
          // }

  }



public function  webuserInfo()
      {

        $user_info = $this->session->userdata('user_id');
        $this->db->where('id',$user_info);
        // $res = $this->db->get('web_user')->row_array();
        $res = $this->db->get('app_users')->row_array();
        // print_r($res);
        return $res;   
      }

//web shipping Address
       public function webupdateAddress()
      {
        $arr1=$this->input->post();
         $arr = Array(
                'user_id'   => $this->session->userdata('user_id'),
                 'name'     => $arr1['name'],
                 'mobile'   => $arr1['phone_no'],
                 'email'    => $arr1['email'],
                 'addresss' => $arr1['address'],
                 'pincode'  => $arr1['pincode'],
  
                 // 'message'  => $arr1['message'],
    
          );
            $this->db->insert('web_shippingaddr',$arr);
            // echo "success";
            print_r(1);
      }


       //adverties img left get function
      public function  advertiesimgLeft()
      {

       
        $this->db->where('position','left');
        // $res = $this->db->get('advertise_file')->row_array();
        $res = $this->db->get('advertise_file');
        // print_r($res);
        return $res;   
      }


       //adverties img middle get function
      public function  advertiesimgMiddle()
      {

       
        $this->db->where('position','middle');
        // $res = $this->db->get('advertise_file')->row_array();
        $res = $this->db->get('advertise_file');
        // print_r($res);
        return $res;   
      }


       //web user info function
       public function webuser()
     {
        $user_id = $this->session->userdata('user_id');
        $this->db->where('id',$user_id);
        $res = $this->db->get('web_user')->row_array();

        // print_r($req);
        return $res;
     }


    //Update user login info
     public function updatwebuserlogin()
      {
        // $arr1 = $this->input->post('emaId');
         

          $arr = Array(
                
               'name'     => $this->input->post('name'),
               'email'    => $this->input->post('email'),
               'mobile'   => $this->input->post('mobile'),
               'password' => $this->input->post('password'),
          );

          $user_id = $this->session->userdata('user_id');
          $this->db->where('id',$user_id);

          // $this->db->where('email',$arr1);
          $this->db->update('web_user',$arr);

          print_r(json_encode(1));
      }


      //web removeItm Function 
     public function webrmvitem()
      {



        $user_id = $this->session->userdata('user_id');
      
        $this->db->where('id',$user_id);
        $result = $this->db->get('app_users');

        if($result->num_rows() > 0)
        {
        
        $user_id = $this->session->userdata('user_id');
        $itemId = $this->input->post('val');

        $this->db->where('user_id',$user_id);
        $this->db->where('item_id',$itemId);
        $this->db->delete('app_cart');

        }
        else
        {
      

        $user_id = $this->session->userdata('user_id');
        $itemId = $this->input->post('val');

        $this->db->where('tempuser_id',$user_id);
        $this->db->where('item_id',$itemId);
        $this->db->delete('web_cart');
        }

      }

       //web removeItm Function 
     public function webrmvitem2()
      {



        $user_id = $this->session->userdata('user_id');
      
        $this->db->where('id',$user_id);
        $result = $this->db->get('app_users');

        if($result->num_rows() > 0)
        {
        
        $user_id = $this->session->userdata('user_id');
        $itemId = $this->input->post('val');

        $this->db->where('user_id',$user_id);
        $this->db->where('id',$itemId);
        $this->db->delete('app_cart');

        }
        else
        {
      

        $user_id = $this->session->userdata('user_id');
        $itemId = $this->input->post('val');

        $this->db->where('tempuser_id',$user_id);
        $this->db->where('id',$itemId);
        $this->db->delete('web_cart');
        }

      }




      public function webupdat_addcart()
        {



          $user_id = $this->session->userdata('user_id');
      
        $this->db->where('id',$user_id);
        $result = $this->db->get('app_users');

        if($result->num_rows() > 0)
        {

            $arr1=$this->input->post();
          //print_r($this->session->userdata());
         //echo $this->session->userdata('user_name');
         $user_id=$this->session->userdata('user_id');
          $arr = Array(
                 'user_id'  =>$user_id,
                 'item_id'  => $arr1['item_id'],
                 'price'    => $arr1['price'],
                 'quantity' => $arr1['quantity'],
                 // 'assigned_to'  => $arr1['assigned_to'],
                 // 'admin_id'     => $this->session->userdata('user_id'),
                 
          );

            $this->db->where('id',$arr1['card_item_id']);
            $this->db->update('app_cart',$arr);
            // $this->db->insert('app_cart',$arr);
            print_r("sucess");  
           return ;

 }
        else
        {
      
            $arr1=$this->input->post();
          //print_r($this->session->userdata());
         //echo $this->session->userdata('user_name');
         $user_id=$this->session->userdata('user_id');
          $arr = Array(
                 'tempuser_id'  =>$user_id,
                 'item_id'  => $arr1['item_id'],
                 'price'    => $arr1['price'],
                 'quantity' => $arr1['quantity'],
                 // 'assigned_to'  => $arr1['assigned_to'],
                 // 'admin_id'     => $this->session->userdata('user_id'),
                 
          );

            $this->db->where('id',$arr1['card_item_id']);
            $this->db->update('web_cart',$arr);
            // $this->db->insert('app_cart',$arr);
  print_r("sucess");  
           return ;

       }

         
        }


        //webShipping Addresss
        public function  webshipppingInfo()
      {

        $user_info = $this->session->userdata('user_id');
        $this->db->where('user_id',$user_info);
        // $res = $this->db->get('web_user')->row_array();
        $res = $this->db->get('web_shippingaddr')->result_array();
      
        return $res;   
      }

      //add web addres 
      public function insert_webaddress()
        {
          $arr1=$this->input->post();

         $user_id=$this->session->userdata('user_id');
          $arr = Array(
                 'user_id'   =>$user_id,
                 'name'      => $arr1['name2'],
                 'mobile'    => $arr1['phone_no2'],
                 'email'     => $arr1['email2'],
                 'addresss'  => $arr1['address2'],
                 'pincode'   => $arr1['pincode2'],
                 
                 
          );
            $this->db->insert('web_shippingaddr',$arr);
            print_r(json_encode(1));  
            // return 1 ;
        }




         public function webgetordr_ordr($dat)
      {
         $user_id = $this->session->userdata('user_id');
        
        // $user_dat=$this->db->get('app_Items')->result_array();
        $this->db->select_sum('price');
        $this->db->where('user_id',$user_id);
        $result = $this->db->get('app_cart')->row(); 
        // print_r($result->price); 
        



         // $user_id = $this->session->userdata('user_id');
         $this->db->where('user_id',$user_id);
         $res = $this->db->get('app_cart');

         foreach ($res->result_array() as $key ) {
           $this->db->where('id',$key['item_id']);
           // $result = $this->db->get('app_cart')->row();  
           $resItem = $this->db->get('app_Items')->row_array();

           $appitem=array(
            
                   'available_quantity' =>  $resItem['available_quantity']-$key['quantity'],

                ); 
            
            $this->db->where('id',$key['item_id']);
            $this->db->update('app_Items',$appitem);
            
          
        }


         $item=Array();

         foreach ($res->result_array() as $key ) {
          array_push($item, $key['item_id'] .":".$key['quantity'] );
          
          
        }

         print_r($item);
         $item_ids = json_encode($item);

          // foreach ($res as $key ) {
         if($result->price>200)
         {
           $result->price = $result->price + 30;
         }
         else
         {
           $result->price = $result->price + 20;
         }

          $abr=array(
            'user_id'           =>$user_id,
            'item_id'           =>$item_ids,
            'total_amount'      =>$result->price,
            'status'            =>'Processing',
            'ship_addr_id'      => $dat,
           

                );
            // array_push($arr, $array1);
            // }

            $this->db->insert('app_orders',$abr);


            $user_id = $this->session->userdata('user_id');
            $this->db->where('user_id',$user_id);
            $this->db->delete('app_cart');

      }


     public function shipingordr_update()
      {
        $user_id = $this->session->userdata('user_id');
        $itemId = $this->input->post('val');

        $abr=array(
         
            'ship_addr_id'      => $itemId
           

                );
            // array

        $this->db->where('id',$user_id);
        $this->db->update('app_users',$abr);
      }



      public function addrsweb()
      {
        $user_info = $this->session->userdata('user_id');
        $this->db->where('id',$user_info);
        // $res = $this->db->get('web_user')->row_array();
        $res = $this->db->get('app_users')->row_array();
       
        // print_r($res['ship_addr_id']);
        $this->db->where('id',$res['ship_addr_id']);
        $req = $this->db->get('web_shippingaddr')->row_array();

        // print_r($req);
        return $req;

      }


      //update web user info 
      public function update_webuserinfo()
        {
          $arr1=$this->input->post();

         $user_id=$this->session->userdata('user_id');
          $arr = Array(
                 // 'user_id'   =>$user_id,
                 'name'      => $arr1['name2'],
                 'mobile'    => $arr1['phone_no2'],
                 'email'     => $arr1['email2'],
                 'addresss'  => $arr1['address2'],
                 'pincode'   => $arr1['pincode2'],
                 
                 
          );

            $this->db->where('id',$user_id);
            $this->db->update('app_users',$arr);
            print_r(json_encode(1));  
            // return 1 ;
        }



       //update web user shipping info
      public function update_webusershippingaddr()
        {
          $arr1=$this->input->post();

         $user_id=$this->session->userdata('user_id');
          $arr = Array(
                 'user_id'   =>$user_id,
                 'name'      => $arr1['name2'],
                 'mobile'    => $arr1['phone_no2'],
                 'email'     => $arr1['email2'],
                 'addresss'  => $arr1['address2'],
                 'pincode'   => $arr1['pincode2'],
                 
                 
          );

            $this->db->where('user_id',$user_id);
            $this->db->update('web_shippingaddr',$arr);
            print_r(json_encode(1));  
            // return 1 ;
        }

       
      //add ratings web addres 
      public function insert_ratingsweb()
        {

        $arr1=$this->input->post();
        $user_id = $this->session->userdata('user_id');
      

        $this->db->where('item_id',$arr1['item_id']);
        $this->db->where('user_id',$user_id);
        $result = $this->db->get('product_rating');

        if($result->num_rows() > 0)
        {
          print_r(json_encode(2)); 
        
        }else
        {
          // $arr1=$this->input->post();

         // $user_id=$this->session->userdata('user_id');
          $arr = Array(
                 'user_id'       => $user_id,
                 'ratings'       => $arr1['rating'],
                 'comment'       => $arr1['comment'],
                 'item_id'       => $arr1['item_id'],
                 // 'five_image_id' => $arr1['address2'],
                
                 
                 
          );
            $this->db->insert('product_rating',$arr);
            print_r(json_encode(1));  
            // return 1 ;
        }
          
        }


        //getratingreview
         public function getratingreview($dat)
     {
      
       // $this->db->like('item_name', $dat);
       $this->db->where('item_id',$dat);
        $res = $this->db->get('product_rating');

        $t = $res->num_rows();

         $arr=Array();
          foreach ($res->result_array() as $key ) {

          $this->db->where('id',$key['user_id']);
          $user_dat=$this->db->get('app_users')->row_array();

          $array1=array(
            'user'                =>  $user_dat['name'],
            'item_id'             =>  $key['item_id'],
            'ratings'               =>  $key['ratings'],
            'comment'            =>  $key['comment'],
            'total_user'         => $t,

                );

            // $this->db->insert('app_cart',$array1);

            array_push($arr, $array1);

            // $this->session->sess_destroy();
            }
        // print_r($arr);

        return $arr;


        // return $res;   
     }



function getpincodeid(){
    $id=$this->input->post('val');
    $this->db->where('pincode',$id);
    $user=$this->db->get('pincode');
    if($user->num_rows()>0){
      print_r(json_encode($user->num_rows()));
    }
    else{
      print_r(json_encode(2));
    }
  }

public function updt_usr()
      {
        // $arr1 = $this->input->post('emaId');
        $arr1=$this->input->post();
        $user_id = $this->session->userdata('user_id');
         

          $arr = Array(
               'name'   =>$arr1['name'],
               'mobile' =>$arr1['mobile'],
          );

          $this->db->where('id',$user_id);
          $this->db->update('app_users',$arr);

          print_r(json_encode(1));
      }  

 public function updt_pass()
      {
        // $arr1 = $this->input->post('emaId');
        $arr1=$this->input->post();
        $user_id = $this->session->userdata('user_id');
         

          $arr = Array(
               'password'   =>$arr1['password'],
              
          );

          $this->db->where('id',$user_id);
          $this->db->update('app_users',$arr);

          print_r(json_encode(1));
      }     

  /*delete shipping address*/
      public function dlt_shipaddr()
      {
        $user_id = $this->session->userdata('user_id');
        $shipaddrId = $this->input->post('val');

        $this->db->where('user_id',$user_id);
        $this->db->where('id',$shipaddrId );
        $this->db->delete('shipping_address');
      }

      /*delete shipping address*/
      public function dlt_webshipaddr()
      {
        $user_id = $this->session->userdata('user_id');
        $shipaddrId = $this->input->post('val');

        $this->db->where('user_id',$user_id);
        $this->db->where('id',$shipaddrId );
        $this->db->delete('web_shippingaddr');
      }


      public function insert_vendorname()
        {

        
        

           $arr1=$this->input->post();
          // print_r($arr1);
          $arr = Array(
            'name'      => $arr1["name"],
            'email'     => $arr1["email"],

            'mobile'    => $arr1["mobile"],
            'address'   => $arr1["address"],
            'pin'       => $arr1["pin"],
            'gst'       => $arr1["gst"],
          
          );
            $this->db->insert('vendordetails',$arr);

             print_r(json_encode(1));
           
  }



  public function adhrpan()
         {

           $this->db->order_by('id', 'DESC');
           $q=$this->db->get('vendordetails')->row_array();


            if(isset($_FILES["filename1"]["name"])){

         $config['upload_path'] = "./assets/";
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('filename1') ) {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        } else {
          $data = array('image_metadata' => $this->upload->data());
          $name=$data['image_metadata']["file_name"];
          $path= 'assets/'.$name;
          $arr=array(
       
            'aadhar_cardpath' => base_url().$path,
          );

           $this->db->where('id',$q['id']);
           $this->db->update('vendordetails',$arr);
           // echo "Successfully Submitted";

              } 
          }


       $noticeboard_id = $this->db->insert_id();
          if(isset($_FILES["filename2"]["name"])){

         $config['upload_path'] = "./assets/";
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('filename2') ) {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        } else {
          $data = array('image_metadata' => $this->upload->data());
          $name=$data['image_metadata']["file_name"];
          $path= 'assets/'.$name;
          $arr=array(
       
            'pan_cardpath' => base_url().$path,
          );

           $this->db->where('id',$q['id']);
           $this->db->update('vendordetails',$arr);
           echo "Successfully Submitted";

              } 
          }

        
         }




         public function updt_pintmpuser()
      {
        // $arr1 = $this->input->post('emaId');
        $arr1=$this->input->post();
        $user_id = $this->session->userdata('user_id');
         

          $arr = Array(
               'pincode'   =>$arr1['pincode'],
          );

          $this->db->where('temp_user',$user_id);
          $this->db->update('web_tempuser',$arr);

          print_r(json_encode(1));
      } 

      public function getpincodetempusr()
      {
        
        $user_id = $this->session->userdata('user_id');
         

          $this->db->where('temp_user',$user_id);
          // $this->db->update('web_tempuser',$arr);

          $result = $this->db->get('web_tempuser')->row_array();

          return $result;

      }


  }

  ?>