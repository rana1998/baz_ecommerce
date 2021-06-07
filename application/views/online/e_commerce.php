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
  include'common/css/e_commerce.css';
  ?>
</style>


<script type="text/javascript">
    <?php
      include 'common/js/e_commerce.js';
    ?>
</script>




</head>
<!-- <body onload="myFunction()"> -->

<body>


<div id="mainContentDiv">


<div class="nav">
    

   <!--  <div>
      
    </div> -->

    <div>
      <!-- <span style="font-size:30px;cursor:pointer"> Osculant Daily need App</span> -->
                   <!--  <div class="img img-responsive col-lg-2 col-md-2 col-sm-2">
                      <a href="<?php echo base_url('index.php/Control_shop/dashboard');?>">
                         <img src="<?php echo base_url('assets/images/logo_only.png');?>" style="width:30px;height:30px;margin-top: 8%">
                       </a>
                    </div> -->
    </div>

    <div style="text-align:right;">
      <form>
           <i class="fa fa-search" style="font-size:25px;padding-top:8%;color:white;" id="srchId" onclick="srchclick()"></i>
           <input type="search" id="gsearch" name="gsearch" style="display: none;">
        
      </form>
    </div>

    <div style="text-align:right;">
      <a href="<?php echo base_url('index.php/Control_shop/cart_manage');?>">
      <i class="fa fa-shopping-bag" style="font-size:25px;text-align: right;color:white;padding-top: 8%">
        <?php if($cardcount) { ?>
                    <span id="count" style="color:white;font-size:16px;"><?php echo $cardcount?></span>
        <?php  } else {?>

          
            <span id="count" style="color:red;font-size:16px;">0</span>

        <?php  } ?>
      </i>
    </a>
    </div>

    <div>
       <span style="font-size:30px;cursor:pointer;color:white" onclick="openNav()">&#9776;</span>
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


<div class="container-fluid">
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
</div>


<div class="container">
  <div class="row">
    <div class="tDiv">
       <div style="float: left;">
        <p  style="padding:6px 12px 6px 12px;font-weight: 500">Featured</p>
       </div>
        <div style="float: right;">
        <a style="text-align:right;color:green;padding:6px 12px 6px 12px;text-decoration: none;" href="<?php echo base_url('index.php/Control_shop/feat_manage');?>">view more</a>
       </div>
     </div>  
       <div class="mainContent " id="mainContent0" style="width:100%;max-height:200px;margin-top:2%;margin-bottom:2%;overflow-y:scroll;overflow-x:scroll;display: flex;flex-direction: row;"></div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="tDiv">
       <div style="float: left;">
        <p  style="padding:6px 12px 6px 12px;font-weight: 500">Grocery</p>
       </div>
        <div style="float: right;">
        <a style="text-align:right;color:green;padding:6px 12px 6px 12px;text-decoration: none;" href="<?php echo base_url('index.php/Control_shop/cat?valId=Grocery');?>">view more</a>
       </div>
     </div>  
       <div class="mainContent " id="mainContent" style="width:100%;max-height:200px;margin-top:2%;margin-bottom:2%;overflow-y:scroll;overflow-x:scroll;display: flex;flex-direction: row;"></div>
  </div>
</div>

<div class="container">
  <div class="row">
     <div class="tDiv">
      <div style="float: left;">
       <p style="padding:6px 12px 6px 12px">Milk Product</p>
     </div>
       <div style="float: right;">
       <a style="right:0px;color:green;padding:6px 12px 6px 12px;text-decoration: none;" href="<?php echo base_url('index.php/Control_shop/cat?valId=milk product');?>">view more</a>
     </div>
   </div>  
       <div class="mainContent " id="mainContent2" style="width:100%;max-height:200px;margin-top:2%;margin-bottom:2%;overflow-y:scroll;overflow-x:scroll;display: flex;flex-direction: row;"></div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="tDiv">
      <div style="float: left;">
       <p style="padding:6px 12px 6px 12px">Medicine</p>
     </div>
       <div style="float: right;">
       <a style="right:0px;color:green;padding:6px 12px 6px 12px;text-decoration: none;" href="<?php echo base_url('index.php/Control_shop/cat?valId=medicine');?>">view more</a>
     </div>
    </div> 
       <div class="mainContent " id="mainContent3" style="width:100%;max-height:200px;margin-top:2%;margin-bottom:2%;overflow-y:scroll;overflow-x:scroll;display: flex;flex-direction: row;"></div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="tDiv">
      <div style="float: left;">
       <p style="padding:6px 12px 6px 12px">Daily needs</p>
     </div>
       <div style="float: right;">
       <a style="right:0px;color:green;padding:6px 12px 6px 12px;text-decoration: none;" href="<?php echo base_url('index.php/Control_shop/cat?valId=Daily need');?>">view more</a>
     </div>
    </div> 
       <div class="mainContent " id="mainContent4" style="width:100%;max-height:200px;margin-top:2%;margin-bottom:2%;overflow-y:scroll;overflow-x:scroll;display: flex;flex-direction: row;justify-content: center;"></div>
  </div>
</div>



<div class="container-fluid">
  <div class="row">
    <!-- <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark footer" id="footId" style="display: none;"> -->
      <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark " id="footId" style="display: none;">
      <!-- <a href="<?php echo base_url('index.php/Control_shop/dashboard');?>"  class=" navbar-brand">
          <span class="glyphicon glyphicon-home"></span> Home
        </a> -->



      <a href="<?php echo base_url('index.php/Control_shop/cart_manage');?>" class=" navbar-brand">
          <span class="glyphicon glyphicon-log-out"></span> Check Out
        </a>


   
    </nav>
  </div>
</div>


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    
   
    <input type="search" id="search">
    
   <div class="container">
  <div class="row">
        <!-- <p style="color:red;">Grocery</p> -->
        <div>
        <!-- <a style="text-align:right;color:skyblue;padding:6px 12px 6px 12px;text-decoration: none;" href="<?php echo base_url('index.php/Control_shop/Grocery_manage');?>">view more</a> -->
      </div>
       <div class="mainContent " id="mainContentItem" style="width:100%;max-height:200px;margin-top:2%;margin-bottom:2%;"></div>
  </div>
</div>
  
  </div>

</div>

<!-- MainContantDiv -->
</div>

<!-- loader -->
<div>
<div id="loader">
  
</div>
<?php include 'common/header/footer.php'; ?>
</div>

</body>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</html>


