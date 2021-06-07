
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
  include'common/css/card.css';
  ?>
</style>


<script type="text/javascript">
    <?php
      include 'common/js/card.js';
    ?>
</script>

</head>
<body style="background-color: #EEEEEE">

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
    
        <div class="card">
            <p  style="color:gray;margin:0 auto;font-family: arial;font-weight:600;font-size:30px;letter-spacing: 1px;">Cart</p>
        </div>

<!---------------------------------->
          <br>
         <?php 
            
          if($product_info){
            //print_r($product_info);
            foreach($product_info as $row)
            { 
              
            

              
        ?>  
          <div class="img_contain" id= "<?php echo $row['id']; ?>" >

            <div>
               <img src="<?php echo $row['item_image_path']; ?>" class="image">
            </div>
            

            <div>  
               <p><span></span> <?php echo $row['item_name']; ?></p> 
               <p><span>Weight:</span> <?php echo $row['Item_weight']; ?></p>
               
               <?php if($row['offer_mrp']>0){ ?>
          
               <p><span>M R P: </span><del> <?php echo $row['sellingprice']; ?></del></p>
               <p><span>Offer: </span> <?php echo $row['offer_mrp']; ?></p>
            
            <?php } else{ ?>

                    <p><span>M R P: </span> <?php echo $row['sellingprice']; ?></p>

              <?php } ?>

               <!-- <p><span>M R P: </span> <?php echo $row['sellingprice']; ?></p> -->
               
               <i class="fa fa-trash-o" style="font-size:25px;color:red" data-item-id="<?php echo $row['id']; ?>" onclick="removeClick(this)"></i>
               

               <span class="quantity buttons_added">
                 <input type="button" value="-" class="minus" id="<?php echo $row['id']; ?>" data-cardId-type="<?php echo $row['app_cartItem_id']; ?>" data-price-type="<?php echo $row['sellingprice']; ?>" data-quantity-type="quanId_<?php echo $row['id']; ?>" onclick="minus(this)">
                
                <input type="number" id= 'quanId_<?php echo $row['id']; ?>' step="1" min="1" max="" name="quantity" value="<?php echo $row['item_quant']; ?>" title="Qty" class="input-text qty text" style="width:30%;" pattern="" inputmode="">

                <input type="button" value="+" class="plus" data-cardId-type="<?php echo $row['app_cartItem_id']; ?>"
                id="<?php echo $row['id']; ?>" data-price-type="<?php echo $row['sellingprice']; ?>" data-quantity-type="quanId_<?php echo $row['id']; ?>" onclick="pl(this)">
                
                </span>


            </div>
          </div>    
        <?php

      } 
     }
     else{ ?>
         
  <h5 style="text-align: center; margin-top: 20px;">No product Found</h5>

    <?Php }  ?>

       </div>
      <!------------------------->

      <?php if($product_info) { ?>

            



        <div class="card" style="width:auto; margin: 11px">    
            
            <table class="table table-bordered" style=" margin-bottom: -4px;">
              <td>M.R.P:</td>
               <td><?php echo $price; ?></td> 
              <!-- <td><?php echo $orderitmaccount['total_sellprice']; ?></td> -->
              <tr></tr>
              <!-- <td>Delivery Charge:</td> -->
              <!-- <td>Amount</td> -->
              <!-- <td><?php echo $orderitmaccount['delivery']; ?></td> -->
              <tr></tr>
              <!-- <td>Sub Total</td> -->
              <!-- <td><?php echo "price"; ?></td> -->
              <!-- <td><?php echo $orderitmaccount['total_amount']; ?></td> -->

            </table>
       </div>
      <?php } ?>


      <?php if($product_info){ ?>
       

        <div class="card" style="width: auto; margin: 10px">
        <div style="margin-top:3%;max-height:100px;position: relative;padding: 2%;width:200px;">
           <span  class="addbtn"  id="availcheck"style="background: white;color:mediumseagreen; " onclick="availcheck()">&nbsp;Check for availability</span>
           <div id="chkavable" style="display: none;margin-top:10px;">
             <input type="text" name="chkavailable" id="chkavailable" style="margin-top: 2px;" placeholder="Enter Pincode" onkeyup="useridclick()">
             <!-- <input type="button" value='search'  style="background: white;color:mediumseagreen;border:1px solid mediumseagreen;border-radius: 5px;margin-left: 10px;padding: 2px; " > -->
           </div>
           <p id="existid" style="display: none;color:green;">Available</p>
           <p id="notexistid" style="display: none;color:red;">Not Available</p>
                 
        </div>

       <?php if($user_info){ ?>
       
            <span>  <buttton class="btn btn-danger addbtn" style="float:right;background:#FE0000;color: white; margin-right: 10px; margin-bottom: 10px" id="proceedid" data-val-type=" <?php echo $product_info[0]['tempuser_id'] ?>" onclick="window.location ='<?php  echo base_url('index.php/Control_shop/address');?>'">Proceed To Checkout</buttton></span>

          <?php }else{ ?>
              
             <span>  <buttton class="btn btn-danger addbtn" style="float:right;background:#FE0000;color: white; margin-right: 10px; margin-bottom: 10px" id="proceedid"  onclick="window.location ='<?php  echo base_url('index.php/Control_shop/profile');?>'">Login</buttton></span>

           <?php } ?>

         </div>
    
<?php  } ?>





</div>  











<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    
    <p>Your order  has been successfully removed</p>
    
    <span class="close"><a href="<?php echo base_url('index.php/Control_shop/cart_manage');?>">ok</a></span>
  
  </div>

</div>
<!---modal end-->

<!-- MainContantDiv -->
</div>

<!-- loader -->
<div id="loader"></div>
<?php include 'common/header/footer.php';?>
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


