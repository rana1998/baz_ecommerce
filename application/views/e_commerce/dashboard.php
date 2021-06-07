<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    <?php include 'common/css/dashboard.css'?>
    </style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 

  <script type="text/javascript">
    <?php
      include 'common/js/dashboard.js';
    ?>
</script> 

<?php include 'common/header/header.php'; ?> 
</head>
<body>

 <main>
     
    <div class="maincontent">


      <section><!--left Content-->
        <div>
           <h1 style="font-size: initial;padding: 3%;font-size: 16px;letter-spacing: 1px;">Categories</h1>
        <ul>

          <?php foreach($cateInfo->result() as $vard){ ?>
                    <li onclick= "window.location ='<?php echo base_url('index.php/Control_shop/cat/'.$vard->id);?>'" class="dropdown-item"><?php echo $vard->category;?></li>

                <?php } ?>
       
        </ul>
          
        </div>
       
       <hr style="border: 1px solid white;">
        
        <div>
          <img src="https://demo.templatetrip.com/WooCommerce/WCM040/WCM05/wp-content/uploads/2017/02/left-banner-1-274x500.jpg">
        </div>

        


        <div>
          <section class="leftContServices">
            <div>
              <section class="servce">
                <div><img src="<?php echo base_url('assets/images/bazaria_deliver.png');?>"></div>
                <div><h1 style="font-size: initial;">Free Shipping</h1>
                <p>Deliver to door</p></div>
              </section>

              <hr>

              <section class="servce">
                <div><img src="<?php echo base_url('assets/images/bazaria_online.png');?>"></div>
                <div> <h1 style="font-size: initial;">24x7 Support</h1>
               <p>in safe hands</p></div>
              </section>

              <hr>

              <section class="servce">
                <div><img src="<?php echo base_url('assets/images/bazaria_piggi.png');?>"></div>
                <div><h1 style="font-size: initial;">Big Saving</h1>
               <p>at lowest price</p></div>
              </section>

             <hr>

              <section class="servce">
                <div><img src="<?php echo base_url('assets/images/bazaria_money.png');?>"></div>
                <div><h1 style="font-size: initial;">
                     Money Back</h1>
               <p>Easy to return</p></div>
              </section>

              <hr>

              <section class="servce">
                <div><img src="<?php echo base_url('assets/images/bazaria_shopping.png');?>"></div>
                <div><h1 style="font-size: initial;">online shopping</h1>
               <p>a huge branding</p></div>
              </section>

              <hr>

              <section class="servce">
                <div><img src="<?php echo base_url('assets/images/bazaria_achive.png');?>"></div>
                <div> <h1 style="font-size: initial;">Award Winner</h1>
               <p>for best services</p></div>
              </section>


            </div>


           


        





          </section>
        </div>



      </section>



      <section><!-- Right Content -->

        

<div class="content">
      <div>
         <table>
           <tr>
             <td onclick="dash()">Dashboard</td>
           </tr>

           <tr>
             <td onclick="ordr()">Orders</td>
           </tr>

           <tr>
             <td onclick="ordrallindia()">All india order</td>
           </tr>

           <tr>
             <td onclick="addr()">Shipping Address</td>
           </tr>

           <tr>
             <td onclick="window.location ='<?php echo base_url('index.php/Control_e_commerce/logout');?>'">Logout</td>
           </tr>

         </table>
       </div>

       <div>
         <section id="dashId">
           <!-- <p>Hello <b><?php echo $user_info['name']; ?></b> (not <b><?php echo $user_info['name']; ?> ?</b> Log out)

From your account dashboard you can view your recent orders, manage your shipping and billing addresses, and edit your password and account details.</p> -->
         <div class="card" style="width: auto; height: auto; ">
            <div class="card-body">
            <h5 class="card-title">User info</h5>
            
            <div id="up_image2" height=150 max-width=200 style="border-radius: 50%;">
  <?php  

       if(empty($imag_data)){?>
    <img id="myImg" src="<?php echo base_url('assets/images/user.png');?>" alt="your image" style="width: 15%;max-height:200px;border-radius: 50%;">
      <?php 
      }else{
        $path= $imag_data["file_path"];
          echo  '<img id="myImg" src="'  .$path.'" alt="your image" style="width: 15%;max-height:200px;border-radius: 50%;">';
        }?>
  </div>
            
              <table class="table-borderless" style="font-size: 10px;">
                <td>Name:</td>
                <td><?php echo $user_info['name']; ?></td>
                <tr></tr>
                <td>Email ID:</td>
                <td><?php echo $user_info['email']; ?></td>
                
                <tr></tr>
                <td>Address:</td>
                <td><?php echo $user_info['addresss']; ?></td>
                <tr></tr>
                <td>Pincode:</td>
                <td><?php echo $user_info['pincode']; ?></td>
                <tr></tr>
                <td></td>
                <!-- <td><input type="radio"  value="<?php echo $key['id']; ?>" name="choose"></td> -->
                
              </table>

            </div>
          </div>






                                           <!-- Button trigger modal -->
<button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal" style="display: block;">
  <i class="fa fa-plus" >update info</i>
</button> 

<!-- Modal -->
<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" style="text-align:right" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body " style="width: 100%;">

        <div id="up_image" height=150 max-width=200 style="border-radius: 50%;">
  <?php  

       if(empty($imag_data)){?>
    <img id="myImg" src="<?php echo base_url('assets/images/user.png');?>" alt="your image" style="width: 15%;max-height:200px;border-radius: 50%;">
      <?php 
      }else{
        $path= $imag_data["file_path"];
          echo  '<img id="myImg" src="'  .$path.'" alt="your image" style="width: 15%;max-height:200px;border-radius: 50%;">';
        }?>
  </div>
      <form method="post" id="upload_form"  enctype="multipart/form-data">
        <input type='file' name="input_file" id="input_file" >
        <input type="submit" value="upload" class="btn btn-success" style="margin:1%auto;padding:0;width:10%;display: block;" name="upload" id="upload">
        <!-- <button id="submit">submit</button> -->
      </form>
        <form id="newaddform"> 
          <div class='form-group'>
                <label>Full name<span style="color: red;">*</span></label>
                <input type="text" class="form-control" placeholder="Enter Name" name="name2" id="name2" required style="width: 100%;"  value="<?php echo $user_info['name']; ?>">
               </div>
               <div class='form-group'>
                <label>Mobile no.<span style="color: red;">*</span></label> 
                <input type="text" class="form-control"  placeholder="Enter no." pattern="[7-9]{1}[0-9]{9}" name="phone_no2" id="phone_no2" value="<?php echo $user_info['mobile']; ?>" required> 
              </div>
                <div class='form-group'>
                <label>Email<span style="color: red;">*</span></label> 
                <input type="email"  class="form-control"  placeholder="Enter Email" pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" name="email2" id="email2" value="<?php echo $user_info['email']; ?>" required > 
                </div>
              <div class='form-group'>
                <label>Address<span style="color: red;">*</span></label> 
                <input type="text" class="form-control"  placeholder="Enter address" name="address2" id="address2" value="<?php echo $user_info['addresss']; ?>" required> 
                </div>
                <div class='form-group'>
                <label>Pin Code<span style="color: red;">*</span></label> 
                <input type="text" class="form-control"  placeholder="Enter pincode" name="pincode2" id="pincode2" value="<?php echo $user_info['pincode']; ?>" required>
                </div>
            
                 </form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-primary">Add</button> -->
        <button type="submit" class="btn btn-primary" id="addform">Update</button> 
        
      </div>
    </div>
  </div>
</div>

         </section>


         <section id="orderId" style="display: none;">
           <div class="container">
  <div class="row">
        <!-- <p style="color:gray;margin:0 auto;font-family: arial;font-weight:600;font-size:20px;letter-spacing: 1px;">My Orders</p><br> -->
        <?php if($product_info){?>
        <p style="color:gray;padding:4%;margin:0 auto;font-family: arial;font-weight:600;font-size:20px;letter-spacing: 1px;">My Orders</p><br>
      <?php }  ?>
        
       <?php if(count($product_info)!== 0){
        $ab = count($product_info)-1;
             $i = $product_info[$ab]['total_number'];
             $co=0;
        foreach ($i as $key) {
           # code...
         $co++;
          
       ?> 
       <br>
       
       <div class="mainContent2 col-md-12 ab"  id="mainContent" style="margin-top:2%;margin-bottom:2%;">
        <center><p><b>Order No. :</b><?php echo $co;?></p></center><hr>

         <div style="margin-top:2%;margin-bottom:2%;display: flex;flex-wrap: wrap;justify-content: center;">
          <?php 

          $product_id     = array();
          $buyer          = array();
          $buyer_mobile   = array();
          $buyer_email    = array();
          $buyer_addresss = array();
          $buyer_pincode  = array();

          $ttl_amt=array();
          $sts=array();
          $app_oder_id = array();
            foreach($product_info as $row)
            { 
              // print_r($row);
          if($row['app_oder_id'] == $key){
    
        ?>  
          <div class="img_contain" id= "<?php echo $row['id']; ?>" style="display: flex;flex-direction: column;justify-content: center;padding:1%;" >
               <img src="<?php echo $row['item_image_path']; ?>" class="image">
          
               <p><span></span> <?php echo $row['item_name']; ?></p>

               <p><span></span> <?php echo $row['Item_weight']; ?></p>
              
               <p><span>Quantity</span> <?php echo $row['order_quantity']; ?></p>
              
               <p><span></span> <?php echo $row['item_mrp']; ?> &nbsp;Rs.</p>
               
               <?php if($row['status'] === 'Accepted'){ ?>

                 <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal6"  data-item-id="<?php echo $row['id']; ?>" data-path-type="<?php echo $row['item_image_path']; ?>" data-name-type=" <?php echo $row['item_name']; ?>" data-weight-type="<?php echo $row['Item_weight']; ?>"  data-mrp-type="<?php echo $row['item_mrp']; ?>"  onclick="ratingmodal(this)">
                      <i class="fa fa-plus" >Add Ratings</i>
                 </button> 

             <?php } ?>
               
          </div>   
        <?php
         array_push($ttl_amt, $row['total_amount']);
         array_push($sts, $row['status']);
         array_push($app_oder_id,$row['app_oder_id']);

        array_push($buyer,$row['name']);
        array_push($buyer_mobile,$row['mobile']);
        array_push($buyer_email,$row['email']);
        array_push($buyer_addresss,$row['addresss']);
        array_push($buyer_pincode,$row['pincode']);

        array_push($product_id,$row['id']);

         }

        }

        $nam = array_unique($buyer);
        $mob = array_unique($buyer_mobile);
        $ema = array_unique($buyer_email);
        $add = array_unique($buyer_addresss);
        $pin = array_unique($buyer_pincode);

        $pro_id = array_unique($product_id);

        $ttl=array_unique($ttl_amt);
        // print_r(array_unique($ttl_amt));
        if($ttl[0]<230){
          $dlvr=20;
        }elseif($ttl[0]>=230){
          $dlvr=30;
        }
        
        
        echo  "<div style='display:inline-block;width:100%;'>";
        echo  "<h5>Shipping Details</h5>";
        echo  "<p>Name:".$nam[0]."</p>";  
        echo  "<p>Mobile:".$mob[0]."</p>";
        echo  "<p>Email:".$ema[0]."</p>";
        echo  "<p>Address:".$add[0]."</p>";
        echo  "<p>Pincode:".$pin[0]."</p>";
        echo "<hr>";
        echo "*Delivery Charge= <b>".$dlvr."₹</b> (included)";
        echo "<br>Total Amount To Be Pay = <b>".$ttl[0]." ₹</b>";
        echo "</div>";
        echo "<hr>";
        $status=array_unique($sts);

        $it_id = array_unique($app_oder_id);
        // echo $it_id[0];
        // echo "<hr>";
        // echo $status[0];
        if ($status[0]=="Processing"){
          echo "<center><b></b><button style='color:white;background-color:red;border-radius:5px;' id= ".$it_id[0]." onclick = modaldlt(this)>Cancel Order</button><center>";
        }elseif ($status[0]=="Reject") {
            // echo "<center><b>order :</b><p style='color:red;'>Cancel</p><center>";
            // echo "<center><b>Order :</b><button style='color:white;'id= ".$it_id[0]." onclick = modaldlt(this)>Cancel</button><center>";
        }elseif($status[0]=="Accepted") {
            // echo "<center><b>order :</b><p style='color:green;'>".$status[0]."</p><center>";
            // echo "<center><b>Order :</b><button style='color:white;'id= ".$it_id[0]." onclick = modaldlt(this)>Cancel</button><center>";
          }

        echo "<hr>";

        if ($status[0]=="Processing"){
          echo "<center><b>Status :</b><p style='color:blue;'>".$status[0]."⟳</p><center>";
        }elseif ($status[0]=="Reject") {
            echo "<center><b>Status :</b><p style='color:red;'>".$status[0]."❌</p><center>";
        }elseif($status[0]=="Accepted") {
            echo "<center><b>Status :</b><p style='color:green;'>".$status[0]." ✔</p><center>";?>

                 


         <?php   }
          ?>
            
          
          <!-- <h1><?php if($key==$row['app_oder_id']) {print_r(array_unique($ttl_amt));} ?></h1>    -->
        </div>
          </div><br>
        <?php
      }
  }else{
      ?>
    <div style="margin:0 auto;padding:0;width:80%;height:400px;text-align: center;color: #949A98;">
      <center><h1 style="margin-top:15%;color: #949A98;">No Product Found!</h1></center>
    </div>
  <?php } ?>
      
  </div>
</div>




<!-- Modal -->
<div class="modal " id="exampleModal6" style="display: none;" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" style="text-align:right" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body " style="width: 100%;">


        <img id="myImg5" src="<?php echo base_url('assets/images/user.png');?>" alt="your image" style="width: 15%;max-height:200px;border-radius: 50%;">
 <table class="table-borderless" style="font-size: 10px;">
                <td>name:</td>
                <td id="pro_name"></td>
                <tr></tr>
                <td>Weight:</td>
                <td id="pro_wight"></td>
                
                <tr></tr>
                <td >mrp:</td>
                <td id="pro_mrp"></td>
                <!-- <tr></tr>
                <td>Pincode:</td>
                <td></td>
                <tr></tr>
                <td></td> -->
                <!-- <td><input type="radio"  value="<?php echo $key['id']; ?>" name="choose"></td> -->
                
              </table>

        <form id="newaddform5"> 
          <!-- <div class='form-group'>
                <label>Full name<span style="color: red;">*</span></label>
                <input type="text" class="form-control" placeholder="Enter Name" name="name6" id="name6"  style="width: 100%;">
          </div> -->

           <input type="hidden" class="form-control" placeholder="Enter Name" name="itmid" id="itmid"  style="width: 100%;">
           <div class='form-group'>
                <label>Comment<span style="color: red;">*</span></label>
                <textarea class="form-control" name="comment" id="comment">
                  
                </textarea>
          </div>


          <div class="rating">
               <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>

          </div>
          <div class='form-group'>
                <label>Ratings<span style="color: red;">*</span></label>
                <input type="text" class="form-control" placeholder="Enter your rating" name="rating" id="rating" style="width: 100%;">
          </div>  

                 </form>

      <!-- <div id="up_image2" height=150 width=200>
         
      </div>
    <form method="post" id="upload_form2"  enctype="multipart/form-data">
        <input type='file' name="input_file2" id="input_file2">
        <input type="submit" value="upload" name="upload2" id="upload2">
      </form> -->


      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-primary">Add</button> -->
        <button type="submit" class="btn btn-primary" data-pro_id ="<?php echo $pro_id;?>" id="addform6">Submit</button> 
        
      </div>
    </div>
  </div>
</div>






         </section>

         <!-- all india order -->
           <section id="allindiaorderId" style="display: none;">
           <div class="container">
  <div class="row">
        <!-- <p style="color:gray;margin:0 auto;font-family: arial;font-weight:600;font-size:20px;letter-spacing: 1px;">My Orders</p><br> -->
        <?php if($allindiaprodctinfo){?>
        <p style="color:gray;padding:4%;margin:0 auto;font-family: arial;font-weight:600;font-size:20px;letter-spacing: 1px;">My Orders</p><br>
      <?php }  ?>
        
       <?php if(count($allindiaprodctinfo)!== 0){
        $ab = count($allindiaprodctinfo)-1;
             $i = $allindiaprodctinfo[$ab]['total_number'];
             $co=0;
        foreach ($i as $key) {
           # code...
         $co++;
          
       ?> 
       <br>
       
       <div class="mainContent2 col-md-12 ab"  id="mainContent" style="margin-top:2%;margin-bottom:2%;">
        <center><p><b>Order No. :</b><?php echo $co;?></p></center><hr>

         <div style="margin-top:2%;margin-bottom:2%;display: flex;flex-wrap: wrap;justify-content: center;">
          <?php 

          $product_idall     = array();
          $buyerall          = array();
          $buyer_mobileall   = array();
          $buyer_emailall    = array();
          $buyer_addresssall = array();
          $buyer_pincodeall  = array();

          $ttl_amtall=array();
          $stsall=array();
          $app_oder_idall = array();
            foreach($allindiaprodctinfo as $row)
            { 
              // print_r($row);
          if($row['app_oder_id'] == $key){
    
        ?>  
          <div class="img_contain" id= "<?php echo $row['id']; ?>" style="display: flex;flex-direction: column;justify-content: center;padding:1%;" >
               <img src="<?php echo $row['item_image_path']; ?>" class="image">
          
               <p><span></span> <?php echo $row['item_name']; ?></p>

               <p><span></span> <?php echo $row['Item_weight']; ?></p>
              
               <p><span>Quantity</span> <?php echo $row['order_quantity']; ?></p>
              
               <p><span></span> <?php echo $row['item_mrp']; ?> &nbsp;Rs.</p>
               
               <?php if($row['status'] === 'Accepted'){ ?>

                 <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal6"  data-item-id="<?php echo $row['id']; ?>" data-path-type="<?php echo $row['item_image_path']; ?>" data-name-type=" <?php echo $row['item_name']; ?>" data-weight-type="<?php echo $row['Item_weight']; ?>"  data-mrp-type="<?php echo $row['item_mrp']; ?>"  onclick="ratingmodal(this)">
                      <i class="fa fa-plus" >Add Ratings</i>
                 </button> 

             <?php } ?>
               
          </div>   
        <?php
         array_push($ttl_amtall, $row['total_amount']);
         array_push($stsall, $row['status']);
         array_push($app_oder_idall,$row['app_oder_id']);

        array_push($buyerall,$row['name']);
        array_push($buyer_mobileall,$row['mobile']);
        array_push($buyer_emailall,$row['email']);
        array_push($buyer_addresssall,$row['addresss']);
        array_push($buyer_pincodeall,$row['pincode']);

        array_push($product_idall,$row['id']);

         }

        }

        $namall = array_unique($buyerall);
        $moball = array_unique($buyer_mobileall);
        $emaall = array_unique($buyer_emailall);
        $addall = array_unique($buyer_addresssall);
        $pinall = array_unique($buyer_pincodeall);

        $pro_idall = array_unique($product_idall);

        $ttlall=array_unique($ttl_amtall);
        // print_r(array_unique($ttl_amt));
        if($ttlall[0]<230){
          $dlvrall=20;
        }elseif($ttlall[0]>=230){
          $dlvrall=30;
        }
        
        
        echo  "<div style='display:inline-block;width:100%;'>";
        echo  "<h5>Shipping Details</h5>";
        echo  "<p>Name:".$namall[0]."</p>";  
        echo  "<p>Mobile:".$moball[0]."</p>";
        echo  "<p>Email:".$emaall[0]."</p>";
        echo  "<p>Address:".$addall[0]."</p>";
        echo  "<p>Pincode:".$pinall[0]."</p>";
        echo "<hr>";
        echo "*Delivery Charge= <b>".$dlvrall."₹</b> (included)";
        echo "<br>Total Amount To Be Pay = <b>".$ttlall[0]." ₹</b>";
        echo "</div>";
        echo "<hr>";
        $statusall=array_unique($stsall);

        $it_idall = array_unique($app_oder_idall);
        // echo $it_id[0];
        // echo "<hr>";
        // echo $status[0];
        if ($statusall[0]=="Processing"){
          echo "<center><b></b><button style='color:white;background-color:red;border-radius:5px;' id= ".$it_idall[0]." onclick = modaldlt2(this)>Cancel Order</button><center>";
        }elseif ($statusall[0]=="Reject") {
            // echo "<center><b>order :</b><p style='color:red;'>Cancel</p><center>";
            // echo "<center><b>Order :</b><button style='color:white;'id= ".$it_id[0]." onclick = modaldlt(this)>Cancel</button><center>";
        }elseif($statusall[0]=="Accepted") {
            // echo "<center><b>order :</b><p style='color:green;'>".$status[0]."</p><center>";
            // echo "<center><b>Order :</b><button style='color:white;'id= ".$it_id[0]." onclick = modaldlt(this)>Cancel</button><center>";
          }

        echo "<hr>";

        if ($statusall[0]=="Processing"){
          echo "<center><b>Status :</b><p style='color:blue;'>".$statusall[0]."⟳</p><center>";
        }elseif ($statusall[0]=="Reject") {
            echo "<center><b>Status :</b><p style='color:red;'>".$statusall[0]."❌</p><center>";
        }elseif($statusall[0]=="Accepted") {
            echo "<center><b>Status :</b><p style='color:green;'>".$statusall[0]." ✔</p><center>";?>

                 


         <?php   }
          ?>
            
          
          <!-- <h1><?php if($key==$row['app_oder_id']) {print_r(array_unique($ttl_amt));} ?></h1>    -->
        </div>
          </div><br>
        <?php
      }
  }else{
      ?>
    <div style="margin:0 auto;padding:0;width:80%;height:400px;text-align: center;color: #949A98;">
      <center><h1 style="margin-top:15%;color: #949A98;">No Product Found!</h1></center>
    </div>
  <?php } ?>
      
  </div>
</div>




<!-- Modal -->
<div class="modal " id="exampleModal6" style="display: none;" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" style="text-align:right" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body " style="width: 100%;">


        <img id="myImg5" src="<?php echo base_url('assets/images/user.png');?>" alt="your image" style="width: 15%;max-height:200px;border-radius: 50%;">
 <table class="table-borderless" style="font-size: 10px;">
                <td>name:</td>
                <td id="pro_name"></td>
                <tr></tr>
                <td>Weight:</td>
                <td id="pro_wight"></td>
                
                <tr></tr>
                <td >mrp:</td>
                <td id="pro_mrp"></td>
                <!-- <tr></tr>
                <td>Pincode:</td>
                <td></td>
                <tr></tr>
                <td></td> -->
                <!-- <td><input type="radio"  value="<?php echo $key['id']; ?>" name="choose"></td> -->
                
              </table>

        <form id="newaddform5"> 
          <!-- <div class='form-group'>
                <label>Full name<span style="color: red;">*</span></label>
                <input type="text" class="form-control" placeholder="Enter Name" name="name6" id="name6"  style="width: 100%;">
          </div> -->

           <input type="hidden" class="form-control" placeholder="Enter Name" name="itmid" id="itmid"  style="width: 100%;">
           <div class='form-group'>
                <label>Comment<span style="color: red;">*</span></label>
                <textarea class="form-control" name="comment" id="comment">
                  
                </textarea>
          </div>


          <div class="rating">
               <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>

          </div>
          <div class='form-group'>
                <label>Ratings<span style="color: red;">*</span></label>
                <input type="text" class="form-control" placeholder="Enter your rating" name="rating" id="rating" style="width: 100%;">
          </div>  

                 </form>

      <!-- <div id="up_image2" height=150 width=200>
         
      </div>
    <form method="post" id="upload_form2"  enctype="multipart/form-data">
        <input type='file' name="input_file2" id="input_file2">
        <input type="submit" value="upload" name="upload2" id="upload2">
      </form> -->


      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-primary">Add</button> -->
        <button type="submit" class="btn btn-primary" data-pro_id ="<?php echo $pro_idall;?>" id="addform6">Submit</button> 
        
      </div>
    </div>
  </div>
</div>






         </section>
         <!-- all india order -->


         <section id="addresId" style="display: none;">

         <div style="display: flex;flex-direction: column;">
           
       

          <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal3">
           <i class="fa fa-plus" >Add New Address</i>
         </button> 

<!-- Modal -->
<div class="modal fade " id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" style="text-align:right" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body " style="width: 100%;">
        <form id="newaddform5"> 
          <div class='form-group'>
                <label>Full name<span style="color: red;">*</span></label>
                <input type="text" class="form-control" placeholder="Enter Name" name="name5" id="name5" required style="width: 100%;">
               </div>
               <div class='form-group'>
                <label>Mobile no.<span style="color: red;">*</span></label> 
                <input type="text" class="form-control"  placeholder="Enter no." pattern="[7-9]{1}[0-9]{9}" name="phone_no5" id="phone_no5" required> 
              </div>
                <div class='form-group'>
                <label>Email<span style="color: red;">*</span></label> 
                <input type="email"  class="form-control"  placeholder="Enter Email" pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" name="email5" id="email5" required > 
                </div>
              <div class='form-group'>
                <label>Address<span style="color: red;">*</span></label> 
                <input type="text" class="form-control"  placeholder="Enter address" name="address5" id="address5" required> 
                </div>
                <div class='form-group'>
                <label>Pin Code<span style="color: red;">*</span></label> 
                <input type="text" class="form-control"  placeholder="Enter pincode" name="pincode5" id="pincode5" required>
                </div>
            
                 </form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-primary">Add</button> -->
        <button type="submit" class="btn btn-primary" id="addform5">Add</button> 
        
      </div>
    </div>
  </div>
</div>


          <div class="shiporderadr">
            
          
             <?php 

              

if(!empty($shipping))
  {            
          foreach($shipping as $key) {  
         ?>
          
           
            <!-- <div class="card" style="width: auto; height: auto; "> -->
          <div class="card" style="width: 100%; height: auto; ">
            <div class="card-body">

        
              <!-- <input type="radio"  value="<?php echo $key['id']; ?>" name="choose" style="max-width: 30px;"> -->
              <span><b>Address</b></span>
         
            
            
              <table class="table-borderless" style="font-size: 10px;">
                <td>Name:</td>
                <td><?php echo $key['name'];  ?></td>
                <tr></tr>
                <td>Email ID:</td>
                <td><?php echo $key['email'];  ?></td>
                
                <tr></tr>
                <td>Address:</td>
                <td><?php echo $key['addresss'];  ?></td>
                <tr></tr>
                <td>Pincode:</td>
                <td><?php echo $key['pincode'];  ?></td>
                <tr></tr>
                <td></td>
                <!-- <td><input type="radio"  value="<?php echo $key['id']; ?>" name="choose"></td> -->
                
              </table>
                
              
              
            
             
            </div>
          </div> 
          <br>
                    

<?php

          
}  

    }

  

             ?>

               </div>
             </div>  
            <!-- <div class="card" style="width: auto; height: auto; ">
            <div class="card-body">
            <h5 class="card-title">Address</h5>
            
            
              <table class="table-borderless" style="font-size: 10px;">
                <td>Name:</td>
                <td><?php echo $addrs_web['name']; ?></td>
                <tr></tr>
                <td>Email ID:</td>
                <td><?php echo $addrs_web['email']; ?></td>
                
                <tr></tr>
                <td>Address:</td>
                <td><?php echo $addrs_web['addresss']; ?></td>
                <tr></tr>
                <td>Pincode:</td>
                <td><?php echo $addrs_web['pincode']; ?></td>
                <tr></tr>
                <td></td>

                
              </table>

              <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal2" style="display: block;">
  <i class="fa fa-plus" >Update info</i>
</button> 


<div class="modal fade " id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" style="text-align:right" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body " style="width: 100%;">
        
        <form id="newaddform2"> 
          <div class='form-group'>
                <label>Full name<span style="color: red;">*</span></label>
                <input type="text" class="form-control" placeholder="Enter Name" name="name3" id="name3" required style="width: 100%;" value="<?php echo $addrs_web['name']; ?>">
               </div>
               <div class='form-group'>
                <label>Mobile no.<span style="color: red;">*</span></label> 
                <input type="text" class="form-control"  placeholder="Enter no." pattern="[7-9]{1}[0-9]{9}" name="phone_no3" id="phone_no3"  value="<?php echo $addrs_web['mobile']; ?>" required> 
              </div>
                <div class='form-group'>
                <label>Email<span style="color: red;">*</span></label> 
                <input type="email"  class="form-control"  placeholder="Enter Email" pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" name="email3" id="email3"  value="<?php echo $addrs_web['email']; ?>" required > 
                </div>
              <div class='form-group'>
                <label>Address<span style="color: red;">*</span></label> 
                <input type="text" class="form-control"  placeholder="Enter address" name="address3" id="address3"  value="<?php echo $addrs_web['addresss']; ?>" required> 
                </div>
                <div class='form-group'>
                <label>Pin Code<span style="color: red;">*</span></label> 
                <input type="text" class="form-control"  placeholder="Enter pincode" name="pincode3" id="pincode3"  value="<?php echo $addrs_web['pincode']; ?>" required>
                </div>
            
                 </form>
      </div>
      <div class="modal-footer">

        <button type="submit" class="btn btn-primary" id="addform2">Update</button> 
        
      </div>
    </div>
  </div>
</div>
                
              
              
            
             
            </div>
          </div> -->


         </section>
       </div>
</div>
       
       

      </section>
    </div>




  


      <!-- footer -->
      <?php include "common/header/footer.php"; ?>

   </main>


</body>
</html>
