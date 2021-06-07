<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    <?php include 'common/css/shipping.css'?>
    </style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 

  <script type="text/javascript">
    <?php
      include 'common/js/shipping.js';
    ?>
</script>   
</head>
<body>


<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a href="#" class="navbar-brand" style="color:red;font-weight: 600;"><?php echo $com_info['name_logo'];?></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="<?php echo base_url('index.php/Control_shop/dashboard');?>" class="nav-item nav-link active">Home</a>
                <a href="<?php echo base_url('index.php/Control_shop/profile');?>" class="nav-item nav-link">Profile</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Category</a>
                    <div class="dropdown-menu">

                      <?php foreach($cateInfo->result() as $vard){ ?>
            <a href= "<?php echo base_url('index.php/Control_shop/cat?valId='.$vard->category);?>" class="dropdown-item"><?php echo $vard->category;?></a>
           <?php } ?>
                        
                    </div>
                </div>
            </div>
            
            <div class="navbar-nav">
                <!-- <a href="#" class="nav-item nav-link">Sign Up</a> -->
                <a style="padding:0.5rem;" href="<?php echo base_url('index.php/Control_shop/cart_manage');?>"><i class="fa fa-shopping-cart" style="font-size:20px;">
              <?php if($cardcount) { ?>
                    <span id="count" style="color:red;font-size:16px;"><?php echo $cardcount?></span>
        <?php  } else {?>

          
            <span id="count" style="color:red;font-size:16px;">0</span>

        <?php  } ?>
            </i>
          </a>
                <a href="<?php echo base_url('index.php/Control_shop/myorder_manage');?>" class="nav-item nav-link active">My Order</a>

                 
                <a href="<?php echo base_url('index.php/Control_Login/login');?>" class="nav-item nav-link">Logout</a>
            </div>
        </div>
    </nav>
</div>





<!-- <div class="container">
  <div class="row"> -->
        <!-- <p style="color:red;">User Info</p> -->
        
       <!-- <div class="mainContent col-md-12" id="mainContent" style="margin-top:2%;margin-bottom:2%;">
         
       </div> -->
<center><h5 style="padding:2%;letter-spacing: 1px;font-weight: normal;color:blue;">Address Info</h5></center>

<div class="addr" id="addr">
  
  <div class="Addcard" onclick="addclick()">
  <div style="position: absolute;width: 100%;height:100%;z-index:1;background-color: rgba(0,0,0,0.3);text-align: center;padding-top:25%;">
    <i class="fa fa-plus" aria-hidden="true"></i>
    <p style="text-align: center;vertical-align: middle;">Add Address</p></div>
  
</div>     


<?php  if($latest_shipping_info)
{ 
  ?>

     <div class="card">
  <h1><?php echo $latest_shipping_info['name']; ?></h1>
  <p class="title">Address: "<?php echo $latest_shipping_info['addresss']; ?>"</p>
  
  <p><button class=" button">Contact:"<?php echo $latest_shipping_info['mobile']; ?>"</button></p>
</div>


</div>


<?php
}
else{
?>
  <div class="card" style="box-sizing: border-box;padding:1%;">
  <h1 style="padding:2%;letter-spacing: 2px;font-weight: normal;"><?php echo $user_info['name']; ?></h1>
  <p class="title">Address: "<?php echo $user_info['addresss']; ?>"</p>
  <p class="title">zipcode: "<?php echo $user_info['pincode']; ?>"</p>
  <p><button class=" button">Contact:"<?php echo $user_info['mobile']; ?>"</button></p>
</div>


</div>

<?php  
}?>
<!-- <div class="card">
  <h1><?php echo $user_info['name']; ?></h1>
  <p class="title">Address: "<?php echo $user_info['addresss']; ?>"</p>
  
  <p><button class=" button">Contact:"<?php echo $user_info['mobile']; ?>"</button></p>
</div>


</div> -->

 <!--  </div>
</div> -->


<div id="prevAddId">
<h1 style="padding:2%;letter-spacing: 1px;font-weight: normal;font-size: initial;">Previous addresses</h1>
<div class="mainContent " id="mainContent3" style="width:100%;height:auto;margin-top:2%;margin-bottom:2%;display: flex;flex-wrap:wrap;justify-content:center;">
   <?php $i = 0;

      if($shipping_info->num_rows() > 0)
      {

            foreach($shipping_info->result() as $row)
            { 
            
        ?> 
           <div class="card" style="flex:1;margin:1%;">
             <h1><?php echo $row->name; ?></h1>
             <p class="title">Address: "<?php echo $row->addresss; ?>"</p>
             <p><button class=" button">Contact:"<?php echo $row->mobile; ?>"</button></p>
           </div>

        <?php
         
            }
      }
        ?>
  

</div>  

</div>




     <!--end Student one-->


<div class="addrForm" id="addrForm">   
          <form id="addressfrm">

                <label><b>Mobile no.</b></label> 
                <input type="text" placeholder="Enter no." pattern="[7-9]{1}[0-9]{9}" name="phone_no" required> 

                <label><b>Email</b></label> 
                <input type="email" placeholder="Enter Email" pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" name="email" required> 

                <label><b>Address</b></label> 
                <input type="text" placeholder="Enter address" name="address" required> 

                <label><b>Pin Code</b></label> 
                <input type="text" placeholder="Enter pincode" name="pincode" required>

                 <button type="submit" class="log " id="logId" onclick="document.getElementById('ladda2').style.display='block';">Update<i id = 'ladda2' class="fa fa-spinner fa-spin"></i></button> 

          </form>

</div>




     

<!-- The Modal -->
<div id="removedModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    
    <p>Your order  has been successfully removed</p>
    
    <span class="close"><a href="<?php echo base_url('index.php/Control_shop/checkout_manage');?>">ok</a></span>
  
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



        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
        </div>
      </div>
      
    </div>
  </div>
  
</div>




<?php 
            
          if($product_info){  ?>   



  <div  style="width:80%;margin-left:auto;margin-right:auto;" id="continuId">
  
   <a href="<?php echo base_url('index.php/Control_shop/pay_manage');?>" style="text-decoration: none;">
    <!-- <a href="<?php echo base_url('index.php/Control_shop/shipping_manage');?>" style="text-decoration: none;"> -->
    <span style="float:right;background-color: white;border:2px solid blue; color:blue;padding:6px;text-align:center;font-weight:bold;letter-spacing:1px;margin:1%;width:20%;">CONTINUE
        </span>
        </a>
  </div>


<div style="clear: right;"></div>


<?Php }  ?>



<div class="foothead">

 <?php  if($footer_info)
{ 
  ?>

  <section>
    <i class="fa fa-paper-plane fa-2x" aria-hidden="true" style="text-align: center;"></i>
    
    <h1 style="text-align: center;font-size: initial;letter-spacing: 1px;font-weight: normal;"><?php echo $footer_info['h1'];?></h1>
    <p style="text-align: center;font-size: 12px;letter-spacing: 1px;"><?php echo $footer_info['p1'];?></p>
  </section>
  <section>

    <i class="fa fa-tag fa-2x" aria-hidden="true" style="text-align: center;"></i>
    <h1 style="text-align: center;font-size: initial;letter-spacing: 1px;font-weight: normal;"><?php echo $footer_info['h2'];?></h1>
    <p style="text-align: center;font-size: 12px;letter-spacing: 1px;"><?php echo $footer_info['p2'];?></p>
  </section>
  <section>
    <i class="fa fa-life-ring fa-2x" aria-hidden="true" style="text-align: center;"></i>
    <h1 style="text-align: center;font-size: initial;letter-spacing: 1px;font-weight: normal;"><?php echo $footer_info['h3'];?></h1>
    <p style="text-align: center;font-size: 12px;letter-spacing: 1px;"><?php echo $footer_info['p3'];?></p>
  </section>



  <?php

      
      }
      
      ?>

</div>


<!-- footer -->
     <footer  style="background-color: #2c292f">
        <div class="container">
            <div class="row ">
                <div class="col-md-4 text-center text-md-left ">
                    
                    <div class="py-0">
                        <h3 class="my-4 text-white">About<span class="mx-2 font-italic text-warning "> <?php echo $com_info['name_logo'];?></span></h3>
 
                        <p class="footer-links font-weight-bold">
                            <a class="text-white" href="#">Home</a>
                            |
                            <a class="text-white" href="#">Blog</a>
                            |
                            <a class="text-white" href="#">About</a>
                            |
                            <a class="text-white" href="#">Contact</a>
                        </p>
                        <p class="text-light py-4 mb-4">&copy;<?php echo $com_info['name'];?></p>
                    </div>
                </div>
                
                <div class="col-md-4 text-white text-center text-md-left ">
                    <div class="py-2 my-4">
                        <div>
                            <p class="text-white"> <i class="fa fa-map-marker mx-2 "></i>
                                    <?php echo $com_info['address'];?>
                                   </p>
                        </div>
 
                        <div> 
                            <p><i class="fa fa-phone  mx-2 "></i> <?php echo $com_info['contact_no'];?> </p>
                        </div>
                        <div>
                            <p><i class="fa fa-envelope  mx-2"></i><a href="mailto:<?php echo $com_info['email'];?>">Support : <?php echo $com_info['email'] , $com_info['name'];?></a></p>
                        </div>  
                    </div>  
                </div>
                
                <div class="col-md-4 text-white my-4 text-center text-md-left ">
                    <span class=" font-weight-bold ">About the Company</span>
          <p class="text-warning my-2" ><?php echo $com_info['about'];?></p>
                    <div class="py-2">
                        <a href="#"><i class="fa fa-facebook fa-2x text-primary mx-3"></i></a>
                        <a href="#"><i class="fa fa-google-plus fa-2x text-danger mx-3"></i></a>
                        <a href="#"><i class="fa fa-twitter fa-2x text-info mx-3"></i></a>
                        <a href="#"><i class="fa fa-youtube fa-2x text-danger mx-3"></i></a>
                    </div>
                </div>
            </div>  
        </div>
     </footer>


</body>




</html>
