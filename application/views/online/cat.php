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
  include'common/css/cat.css';
  ?>
</style>

<script type="text/javascript">
    <?php
      include 'common/js/cat.js';
    ?>
</script>

<script>

</script>

</head>
<body>

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


<!-- <div class="container-fluid">
  <div class="row">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo base_url('assets/images/1.jpg');?>" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('assets/images/2.jpg');?>" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('assets/images/3.jpg');?>" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('assets/images/4.jpg');?>" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('assets/images/5.jpg');?>" alt="Third slide">
    </div>
  </div>
  
</div>


 </div>
</div> -->



<div class="container-fluid">
  <div class="row">
        <p style="color:gray;padding:4%;margin:0 auto;font-family: arial;font-weight:600;font-size:20px;letter-spacing: 1px;">
          <?php

              $cat=array();
            foreach($item_info->result() as $row)
            { 
              
              // echo $row->category;
              array_push($cat, $row->category);
            }  

            
           $ttl =array_unique($cat);

            //print_r($ttl[0]);
               
            ?>
            
          </p>
       </div>
       <div class="row">
       <div class="mainContent col-md-12" id="mainContent" style="margin-top:2%;margin-bottom:2%;display: flex;flex-wrap: wrap;justify-content: center;"></div>
         </div>
        </div>

          <div class="d-flex justify-content-center">
         <nav aria-label="Page navigation example">
                <?= $this->pagination->create_links(); ?>
              </nav>
            </div>




<div class="container-fluid">
  <div class="row">

      <nav class="navbar fixed-bottom navbar-expand-sm  " id="footId" style="display: none;">
     



      <a href="<?php echo base_url('index.php/Control_shop/cart_manage');?>" style="background-color: coral" class="btn btn-danger">
          <span class="glyphicon glyphicon-log-out"></span> Check Out
        </a>


   
    </nav>
  </div>
</div>

<!-- mainContentDiv -->
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


