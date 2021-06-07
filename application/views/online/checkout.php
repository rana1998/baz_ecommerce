<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daily need app</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <style>
  <?php
  include'common/css/checkout.css';
  ?>
</style>


<script type="text/javascript">
    <?php
      include 'common/js/checkout.js';
    ?>
</script>

</head>
<body style="background-color:#EEEEEE">

<div id="mainContentDiv">

<div class="nav">
    

     
     <div>
       <a href="<?php echo base_url('index.php/Control_shop/dashboard');?>" style="color:white;">
          <i class='fa fa-arrow-left' style='font-size:24px'></i>
        </a>
    </div>
<!--
    <div>

                    <div class="img img-responsive col-lg-2 col-md-2 col-sm-2">
                      <a href="<?php echo base_url('index.php/Control_shop/dashboard');?>">
                         <img src="<?php echo base_url('assets/images/logo_only.png');?>" style="width:30px;height:30px;margin-top: 8%">
                       </a>
                    </div>
    </div> -->

    <div>
      <form>
           <i class="fa fa-search" style="font-size:20px;color:white;margin-top:10%;" id="srchId" onclick="srchclick()"></i>
           <input type="search" id="gsearch" name="gsearch" style="display: none;">
        
      </form>
    </div>

    <div>
      <!-- <i class="fa fa-shopping-cart" style="font-size:25px;color:white;text-align: right;margin-top: 8%"></i> -->
       <a href="<?php echo base_url('index.php/Control_shop/cart_manage');?>">
            <i class="fa fa-shopping-cart" style="font-size:28px;text-align: right;color:white;padding-top: 6%">
             <?php 

            if($user_info){
            
            if($cardcount) { ?>
            <div class="circle" >
            <span id="count" style="color:black;font-size:16px;"><?php echo $cardcount ?></span>
            </div>
            <?php  } else {?>

            <div class="circle" >
            <span id="count" style="color:black;font-size:16px;">0</span>
          </div>
            <?php  }


            }else{

             if($cardcountberorelog) { ?>
            <div class="circle" >
            <span id="count" style="color:black;font-size:16px;"><?php echo $cardcountberorelog ?></span>
            </div>
            <?php  } else { ?>

            <div class="circle" >
            <span id="count" style="color:black;font-size:16px;">0</span>
          </div>
            <?php  } 

          }

          ?>
            </i>
            </a>
    </div>

    <div>
       <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    </div>


    
</div>



<!-- 
<div class="container-fluid">
  <div class="row" style="background-color:#343a40;color:white">


                     
                     <div class="img img-responsive col-lg-2 col-md-2 col-sm-2">
                         <img src="<?php echo base_url('assets/images/logo_only.png');?>" style="width:60px;height:60px;">
                    </div>

                    <div class="col-lg-10 col-md-10 col-sm-10">
                        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Osculant Daily need App</span>
                    </div>


</div>

</div> -->

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
             <img src="<?php echo base_url('assets/images/logo.png') ?>" style="width: 100px; height: 70px; margin-left:40px; margin-bottom: 20px;">
    <a href="<?php echo base_url('index.php/Control_shop/dashboard');?>">Home</a>

    <a onclick="catclick()">Category &nbsp;<i class="fa fa-caret-down " aria-hidden="true"></i></a>

     <ul  class="submenu" id="subAttend" style="display:none;">
        
               <?php foreach ($cateInfo->result() as $vard) { 
                     ?>
                 <a href="<?php echo base_url('index.php/Control_shop/cat/'.$vard->id);?>" ><?php echo $vard->category;?></a> 
                  
               <?php  } ?>
    </ul>
    
    <!-- <a href="<?php echo base_url('index.php/Control_shop/Grocery_manage');?>">Grocery</a>
    <a href="<?php echo base_url('index.php/Control_shop/milk_manage');?>">Milk</a>
    <a href="<?php echo base_url('index.php/Control_shop/medicine_manage');?>">Medicine</a>
    <a href="<?php echo base_url('index.php/Control_shop/dailyneeds_manage');?>">Daily needs</a> -->
    <a href="<?php echo base_url('index.php/Control_shop/contact_us');?>">Contact Us</a>
 <?php if($user_info) { ?>
    <a href="<?php echo base_url('index.php/Control_shop/myorder_manage');?>">Myorder</a>
    <a href="<?php echo base_url('index.php/Control_shop/profile');?>">Account</a>
    <a href="<?php echo base_url('index.php/login/logout');?>">Log Out</a>
 <?php  } else {?>
    
      <a href="<?php echo base_url('index.php/control_shop/profile');?>">LogIn</a>
     
  <?php  } ?>
  </div>
</div>


<br>






<div class="container">
  <div class="row">
        <!-- <p style="color:red;">User Info</p> -->
        
       <!-- <div class="mainContent col-md-12" id="mainContent" style="margin-top:2%;margin-bottom:2%;">
         
       </div> -->

 
<div class="card" style="box-shadow: none; margin-top: -18px; margin-bottom: 10px; border-bottom-left-radius: 20px;border-bottom-right-radius: 20px; ">
  <h1 style="text-align: left; margin-left: 20px;"><?php echo $user_info['name']; ?></h1>
  
  
  <p style="text-align: left; margin-left: 20px;">Contact:<?php echo $user_info['mobile']; ?></p>

 <a href="<?php echo base_url('index.php/Control_shop/address') ?>"> <button class="btn btn-outline-danger">Select Address</button></a>
</div>


<?php 



if (isset($ship_adr)){ ?>

<div class="card" style=" margin: 5px; border-radius: 10px;">

  <h4>Shipping Address</h4>
  <?php // print_r($ship_adr); 
  

  ?>
  
<b><h3 style="text-align: left; margin-left: 20px;"><?php echo  $ship_adr['name']; ?></h3></b>
  
  
  <p style="text-align: left; margin-left: 20px;">Address: <?php echo $ship_adr['addresss'];   ?></p>

  <p style="text-align: left; margin-left: 20px;">Pincode: <?php echo $ship_adr['pincode'];  ?></p>

</div>
<br>
<?php }else{  ?>
<div class="alert alert-primary" role="alert" style="width: 500px">
 <p style="text-align: center">Select Shipping Address</p>
</div>

<?php } ?>





  </div>
</div>
<!--
<?php 

            
          if($product_info){  ?>

<div id="one" class="table-responsive" style="height:auto;overflow: scroll;">
        <table id="myTable" class="table" style="background-color: white; border-radius: 20px;">
          <thead>
          <tr>
                <th>S.no</th>
                <th>Name</th>
                <th>Qantity</th> 
                <th>Weight</th>
                <th>price</th>
               
                <th>Action</th>
          </tr>
          </thead>
          <tbody>

             <?php $i=0;
            print_r($product_info);
             foreach ($product_info as $row) {

              $i++;
              ?>
                 <tr>
                     <td> <?php echo $i; ?></td>
                     <td> <?php echo $row['item_name']; ?></td>
                     <td> <?php echo $row['item_quant']; ?></td> 
                     <td> <?php echo $row['Item_weight']; ?></td>
                     <td> <?php echo $row['item_mrp']; ?></td>
                     
                     <td><button class="btn btn-outline-danger dlt" style="font-size: 2.2vw;"type="button"  id= "<?php echo $row['id'];?>" onclick = removeClick(this)>Delete&nbsp;</button></td>
                 </tr>
             <?php } ?>

            </tbody>

            
          </table>
   
         
        
     </div>

  <?php
     }
     else{ ?>
         
      <div class="card">
 
  <p><a href="<?php echo base_url('index.php/Control_shop/dashboard');?>"><P>No product Found ,Go to HOME</p></a></p>
</div>


    <?Php }  ?>-->





<div class="card" style="border-radius: 20px;">
<!-- <?php
     if($product_info){

      // if($price<200){
      //     $dlvr=20;
      //   }elseif($price>=200 && $price <=500){
      //     $dlvr=30;
      //   }
      //   elseif($price>=500)
      //   {
      //     $dlvr="free";    
      //   }

        // if($price<200){
        //   $dlvr=30;
        // }elseif($price>=200 && $price <=500){
        //   $dlvr=20;
        // }
        // elseif($price>=500)
        // {
        //   $dlvr="free";    
        // }
        
        echo "*Delivery Charge= <b>".$orderitmaccount['delivery']."₹</b> (included)";
        echo "<br>Product Amount To Be Pay = <b>".$orderitmaccount['total_sellprice']." ₹</b>";
        echo "<br>Total Amount To Be Pay = <b>".$orderitmaccount['total_amount']." ₹</b>";
        
        // echo "*Delivery Charge= <b>".$dlvr."₹</b> (included)";
        // echo "<br>Product Amount To Be Pay = <b>".$price." ₹</b>";
        // // echo "<br>Total Amount To Be Pay = <b>".$price." ₹</b>";

      }
        ?> -->
 
          
          <table class="table table-striped table-bordered">
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
          </table>

<div class="alert alert-primary" role="alert" style="display: flex; height: auto; border-radius: 10px"> 
<a onclick="showcoupontext();"> Apply Coupon! </a>
<div id="codebox" style="display: none;">
<form id="applycoupon"> 
<input  type="text" name="code"  style="border-radius: 10px; margin-top:-10px ;  border: 1px solid white; margin-left: ;" placeholder="Enter Code">

<button class="btn btn-success btn-sm" type="submit" style="border-radius: 10px">Apply </button>
</form>
<div id="statushow" style="display: none; color: red">Coupon is Inactive</div>
<div id="statushowsuccess" style="display: none; color: green">Applied</div>
<div id="notminamt" style="display: none; color: red">Not Applicable on less than <p id="miniamt"></p></div>
</div>
</div>

      


</div>

     

<!-- The Modal -->
<div id="removedModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    
    <p>Your order  has been successfully removed</p>
    
    <span class="close"><a href="javascript:history.go(0)">ok</a></span>
  
  </div>

</div>


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    
    <p>Your order  has been successfully placed</p>
    
    <span class="close">&times;<a href="<?php echo base_url('index.php/Control_shop/dashboard');?>">ok</a></span>
  
  </div>

</div>





<?php 
            
          if($product_info){  ?>   


 


   
<div class="container-fluid">
  <div class="row">
    <!-- <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark footer" id="footId" style="display: none;"> -->
    
      <div class="card" style="width: 40rem; text-align: left; border-radius: 20px;">
        <div class="card-body">
        <h4>Payment Option</h4>
        <label><input type="radio" name="pay">  Cash on Delivery  </label>
        <br>

        <label><input type="radio" name="pay">  Pay now  </label>
        <br>

        <?php if (isset($_GET['content'])){
          $ship_id= $_GET['content'];
        
        } ?>

      <a href="#" class=" navbar-brand" onclick="orderclick()">
          <span class="glyphicon glyphicon-log-out"></span> Order Now
        </a>  
      </div>

      </div>
   
    

  </div>
</div>  


<?Php  }  ?>

<!-- MainContantDiv -->
</div>

<!-- loader -->
<?php include 'common/header/footer.php'; ?>
</body>

<script>
$(document).ready(function(){
  $("#gsearch").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#mainContent .img_contain").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</html>


