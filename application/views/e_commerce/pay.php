<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    <?php include 'common/css/pay.css'?>
    </style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script type="text/javascript">
    <?php
      include 'common/js/pay.js';
    ?>
</script> 

<?php include 'common/header/header.php'; ?> 
</head>
<body>
<!-- <?php echo $orderamountalliteminfo; ?> -->
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

        <div class="row">   
        <div class="breadcrumb flat" style="padding: 0px; margin-top: 20px; ">
        <a href="<?php echo base_url('index.php/Control_shop/cart2_manage?valId='.$this->session->userdata('user_id'));?>"  >Review Cart</a>
        <a href="<?php echo base_url('index.php/Control_shop/checkout_manage'); ?>" >Shipping Info</a>
        <a class="active">Payment Methods</a>
         <a>Order confirm</a>

      </div>
      </div>

      <div class="formDiv" style="float: left; width: 50%">
        
        <section >
          
          <table class="table table-bordered">
            <td>Order Amount:</td>
            <td><span id="amt1"><?php echo $orderitmaccount['total_sellprice']; ?></span></td>
            <tr></tr>
            <td>Delivery Charge:</td>
            <td id="damt"><?php echo $orderitmaccount['delivery']; ?></td>
            <tr></tr>
            <td>Discount:</td>
            <td id="disamt"></td>
            <tr></tr>
            <td>Total Amount:</td>
            <td id="famt"><?php  echo $orderitmaccount['total_amount']; ?></td>

            <input type="hidden" name="" id="coupantype">

            <!-- <input type="hidden" name="" id="coupanid"> -->
          </table>

          <form action="<?php echo base_url('index.php/Control_pay/payment');?>" method="POST">
            <input type="hidden" name="order_amount" id="hiddenamt" value="<?php  echo $orderitmaccount['total_amount']; ?>">
            <button type="submit" style="display: none;" id="clickbtn">submit</button>
          </form>

<div class="alert alert-primary" role="alert" style="display: flex; "> 
<a onclick="showcoupontext();"> Apply Coupon! </a>
<div id="codebox" style="display: none;">
<form id="applycoupon"> 
<input  type="text" name="code" id="inputcoupanid" style="border-radius: 10px; margin-top:-10px ;  border: 1px solid white; margin-left: ;" placeholder="Enter Code">

<button class="btn btn-success btn-sm" type="submit" style="border-radius: 10px">Apply </button>
</form>
<div id="statushow" style="display: none; color: red">Coupon is Inactive</div>
<div id="statushowsuccess" style="display: none; color: green">Applied</div>
<div id="notminamt" style="display: none; color: red">Not Applicable on less than <p id="miniamt"></p></div>
</div>
</div>

        </section>



      </div>

       <div class="formDiv" style="float: right; width: 50%">

          <section>
           <!-- <form id="addressfrm" action=""> -->
             <h1 style="font-size: initial;">Payment Method</h1>
             <br>
      
         <span >
          <label>
              <input type="radio" id="cash" name="payment" value="cash"> Cash on Delivery
          </label>
<br>
          <label>
              <input type="radio" id="now" name="payment" value="online"> Pay now
          </label>
         
         <?php 

         
         if(isset($dat)){ 
              // print_r($dat);
          ?>
             <input type="hidden" id="addrid" value="<?php echo $dat;?>">
         <?php } ?>
         
          
          </span>

             <br>
              <div style="text-align: right;">
              <button class="btn btn-success btn-sm contbtn" id="aid" >Continue</button>
            </div>
         </section>




       </div>


       

      </section>
    </div>




  


      <!-- footer -->
      <?php include "common/header/footer.php"; ?>

   </main>


</body>
</html>
