
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
  include'common/css/product.css';
  ?>
</style>


<script type="text/javascript">
    <?php
      include 'common/js/product.js';
    ?>
</script>

</head>
<body >

<div id="mainContentDiv">

<div class="nav">
   
     <div>
       <a href="<?php echo base_url('index.php/Control_shop/dashboard');?>" style="color:white;">
          <i class='fa fa-arrow-left' style='font-size:24px'></i>
        </a>
    </div>


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
       <span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;</span>
    </div>
    

    
</div>





<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
             <img src="<?php echo base_url('assets/images/logo.png') ?>" style="width: 100px; height: 70px; margin-left:40px; margin-bottom: 20px;">
    <a href="<?php echo base_url('index.php/Control_shop/dashboard');?>">Home</a>

    <a onclick="catclick()">Category &nbsp;<i class="fa fa-caret-down " aria-hidden="true"></i></a>

     <ul  class="submenu" id="subAttend" style="display:none;">
      <a href="<?php echo base_url('index.php/Control_shop/cat/'.$name);?>" >Grocery</a>
       
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
    <!-- <a href="<?php echo base_url('index.php/Control_shop/myorder_manage');?>">Myorder</a>
    <a href="<?php echo base_url('index.php/Control_shop/profile');?>">Account</a>
    <a href="<?php echo base_url('index.php/login/logout');?>">Log Out</a> -->

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
        
        
       <div class="mainContent col-md-12" id="mainContent" style="margin-top:2%;margin-bottom:2%;">
       
      <?php 
            
          if($new_pro){
            // print_r($new_pro);
            foreach($new_pro as $row)
            { 
              
            

              
        ?>  
          <div class="img_contain" id= "img_<?php echo $row['id']; ?>" >
              
               <img src="<?php echo $row['item_image_path']; ?>" class="image1">
            <!-- </div> -->
            <hr style="border-top:1px solid gray;">
            <!-- <div>    -->
               <b><p><span></span> <?php echo $row['item_name']; ?></p></b>
               <br>
               <p><span>Weight:</span> <?php echo $row['Item_weight']; ?></p>
               <!--<p><span>Available</span> <?php echo $row['available_quantity']; ?></p>-->
               <!-- <p><span>M R P: </span> <?php echo $row['item_mrp']; ?></p> -->

            <?php if($row['offer_mrp']>0){ ?>
          
               <p><span>M R P: </span><del> <?php echo $row['sellingprice']; ?></del></p>
               <p><span>Offer mrp: </span> <?php echo $row['offer_mrp']; ?></p>
               <p><span style="color:red;">*Above 500₹ free home Delivery </span></p>
               <br>
            
            <?php } else{ ?>
                    <p><span>M R P: </span> <?php echo $row['sellingprice']; ?></p>


              <?php } ?>
               
               <!-- <i class="fa fa-trash-o" style="font-size:25px;color:red" data-item-id="<?php echo $row['id']; ?>" onclick="removeClick(this)"></i> -->
               
              <?php if($row['available_quantity']>1)  {
                ?>

                <div class="d-flex justify-content-start">
               <span class="quantity buttons_added">
                <input type="button" value="-" class="minus" onclick="minus(<?php echo $row['id']; ?>)">
                <input type="number" id= 'quanId_<?php echo $row['id']; ?>' step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
                <input type="button" value="+" class="plus" onclick="pl(<?php echo $row['id']; ?>)">
             </span>
           </div>
              <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-danger" style="text-align: right ;margin-top: -38px"  id="<?php echo $row['id']; ?>" data-price-type="<?php echo $row['sellingprice']; ?>" data-quantity-type="quanId_<?php echo $row['id']; ?>" data-offerprice-type="<?php echo $row['offer_mrp']; ?>" onclick="addbagclick(this)">Add to bag</button> 

           <?php }else {
                ?>
                  <span class="quantity buttons_added" style="color:red;">
                    Not Available
             </span>
           </div>
          <?php }
                ?>


            <!--  <button type="submit" class="log"  id="<?php echo $row['id']; ?>" data-price-type="<?php echo $row['item_mrp']; ?>" data-quantity-type="quanId_<?php echo $row['id']; ?>" onclick="addbagclick(this)">Add to bag</button> --> 
<!-- </div> -->
          </div>


          
           
         
        
           
        <?php

      } 
     }
?>

       </div>





</div> 


<!-- MainContantDiv -->
</div>



<div class="container">
  <div class="row">
    <p style="color:gray;padding:4%;margin:0 auto;font-family: arial;font-weight:600;font-size:20px;letter-spacing: 1px;text-align: center">Featured</p>
    
       <div class="mainContent " id="mainContent4" style="width:95%;margin-top:2%;margin-bottom:2%;overflow-x:scroll;display: flex;flex-direction: row;">
         
       </div>
  </div>
</div>




<!-- loader -->
<div id="loader"></div>
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


