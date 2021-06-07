<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
	
	<style>
		<?php include 'header_shop.css'?>
    </style>

     <script>
     	<?php include 'header_shop.js' ?>
    </script>

</head>


<body>
<div class="nav">
         <div style="text-align:right;">
            <form>
               <i class="fa fa-search" style="font-size:25px;padding-top:6%;color:white;" id="srchId" onclick="srchclick()"></i>
               <input type="search" id="gsearch" name="gsearch" style="display: none;">
            </form>
         </div>
         <div style="text-align:right; margin-left: -44px;">
            <a href="<?php echo base_url('index.php/Control_shop/cart_manage');?>">
            <i class="fa fa-shopping-cart" style="font-size:28px;text-align: right;color:white;padding-top: 6%">
            <?php if($cardcount) { ?>
            <div class="circle" >
            <span id="count" style="color:black;font-size:16px;"><?php echo $cardcount?></span>
            </div>
            <?php  } else {?>

            <div class="circle" >
            <span id="count" style="color:black;font-size:16px;">0</span>
          </div>
            <?php  } ?>
            </i>
            </a>
         </div>
         <div>
            <span style="font-size:30px;cursor:pointer;color:white" onclick="openNav()">&#9776;</span>
         </div>
      </div>
      <div id="myNav" class="overlay" >
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
         <div class="overlay-content">
        <img src="<?php echo base_url('assets/images/logo.png') ?>" style="width: 100px; height: 70px; margin-left:40px; margin-bottom: 20px;">
            <a href="<?php echo base_url('index.php/Control_shop/dashboard');?>">Home</a>
            <a onclick="catclick()">Category &nbsp;<i class="fa fa-caret-down " aria-hidden="true"></i></a>
            <ul  class="submenu" id="subAttend" style="display:none; ">
               
                <?php foreach ($cateInfo->result_array() as $key) { 
                     $name= $key['category']; ?>
                 <a href="<?php echo base_url('index.php/Control_shop/cat?valId='.$name.'');?>" ><?php echo $key['category'] ?></a> 
                  
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

</body>

</html>