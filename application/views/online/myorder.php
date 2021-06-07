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
    .ab{
    /*border: 3px solid green;*/
    /*box-shadow: 10px 10px 5px rgba(0,0,0,0.75);*/
  }
  <?php
  include'common/css/myorder.css';
  ?>
</style>


<script type="text/javascript">
    <?php
      include 'common/js/myorder.js';
    ?>
</script>

</head>
<body style="background-color: #EEEEEE">

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
  <div >
    <?php if($product_info){?>
        <p style="color:gray;padding:2%;margin:0 auto;font-family: arial;font-weight:600;font-size:20px;letter-spacing: 1px;">My Orders</p><br>
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
       
       <div class="ab"  id="mainContent" style=" border: 1px solid gray;border-radius: 20px; background-color: white">
        
        <center><p><b>Order No. :</b><?php echo $co;?></p></center>

         <div style="margin-top:1%;margin-bottom:1%;display: flex;flex-wrap: wrap;justify-content: left;">
          <?php 
          $ttl_amt=array();
          $sts=array();
          $app_oder_id = array();
            foreach($product_info as $row)
            { 
              // print_r($row);
          if($row['app_oder_id'] == $key){
    
        ?>  
          <div  id= "<?php echo $row['id']; ?>" style="display: flex; margin-top:20px;justify-content: left;" >
               <img src="<?php echo $row['item_image_path']; ?>" class="image">
          
               <p><span></span> <?php echo $row['item_name']; ?></p><br>

               <p><span>Weight:</span> <?php echo $row['Item_weight']; ?></p>
              
               <p><span>Order Quantity</span> <?php echo $row['order_quantity']; ?></p>
              
               <p><span>M R P: </span> <?php echo $row['item_mrp']; ?></p>


               
               
          </div> 
          <hr>  
        <?php
         array_push($ttl_amt, $row['total_amount']);
         array_push($sts, $row['status']);
         array_push($app_oder_id,$row['app_oder_id']);

         }

        }  
        $ttl=array_unique($ttl_amt);
        // print_r(array_unique($ttl_amt));
        if($ttl[0]<230){
          $dlvr=20;
        }elseif($ttl[0]>=230){
          $dlvr=30;
        }
        
        
        echo  "<div style='display:inline-block;width:96%;margin-left:10px;'>";
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
          echo "<center><b></b><button style='color:white;margin-left:10px;background-color:coral;'id= ".$it_id[0]." onclick = modaldlt(this)>Cancel Order</button><center>";
        }elseif ($status[0]=="Reject") {
            // echo "<center><b>order :</b><p style='color:red;'>Cancel</p><center>";
            // echo "<center><b>Order :</b><button style='color:white;'id= ".$it_id[0]." onclick = modaldlt(this)>Cancel</button><center>";
        }elseif($status[0]=="Accepted") {
            // echo "<center><b>order :</b><p style='color:green;'>".$status[0]."</p><center>";
            // echo "<center><b>Order :</b><button style='color:white;'id= ".$it_id[0]." onclick = modaldlt(this)>Cancel</button><center>";
          }

        echo "<hr>";


        if ($status[0]=="Processing"){
          echo "<center style='margin-left:10px'><b>Status :</b><p style='color:blue;'>".$status[0]."⟳</p><center>";
        }elseif ($status[0]=="Reject") {
            echo "<center style='margin-left:10px'><b>Status :</b><p style='color:red;'>".$status[0]."❌</p><center>";
        }elseif($status[0]=="Accepted") {
            echo "<center style='margin-left:10px'><b>Status :</b><p style='color:green;'>".$status[0]." ✔</p><center>";}
          ?>
            
          
          <!-- <h1><?php if($key==$row['app_oder_id']) {print_r(array_unique($ttl_amt));} ?></h1>    -->
        </div>
          </div><br>
        <?php
      }
  }else{
      ?>
    
      <center><h1 style="top:20%;color: #949A98;">No Product Found!</h1></center>
  <?php } ?>
      
  </div>
</div>



<!-- <div class="container">
  <div class="row">
        

<div class="card">
  
  <h1><?php echo $user_info['name']; ?></h1>
  <p class="title">Address: "<?php echo $user_info['addresss']; ?>"</p>
  
  <p><button>Contact:"<?php echo $user_info['mobile']; ?>"</button></p>
</div>



  </div>
</div> -->

<!-- <div class="container">
  <div class="row">
        <p style="color:red;">Product</p>
        
       <div class="mainContent col-md-12" id="mainContent" style="margin-top:2%;margin-bottom:2%;">
          <?php 
  
            
            foreach($product_info as $row)
            { 
              
            

              
        ?>  
          <div class="img_contain" id= "<?php echo $row['id']; ?>" >
               <img src="<?php echo $row['item_image_path']; ?>" class="image">
               
               <p><span>Weight:</span> <?php echo $row['Item_weight']; ?></p>
               <p><span>M R P: </span> <?php echo $row['item_mrp']; ?></p>
              
          </div>

           
        <?php

      }
     
      ?>
       </div>
  </div>
</div> -->





<!-- <div class="container-fluid">
  <div class="row">
      <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark " id="footId" >
      <a href=""  class=" navbar-brand">
          <span class="glyphicon glyphicon-home"></span> Cash on delivery*
         
        </a>



      <a href="#" class=" navbar-brand">
          <span class="glyphicon glyphicon-log-out"></span> Order Now
        </a>


   
    </nav>
  </div>
</div> -->
<!--footer-->
<?php include 'common/header/footer.php'; ?>
<!---->

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


