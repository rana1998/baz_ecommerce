<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    <?php include 'common/css/checkout.css'?>
    </style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 

  <script type="text/javascript">
    <?php
      include 'common/js/checkout.js';
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
                        <!-- <a href="<?php echo base_url('index.php/Control_shop/cat?valId=Grocery');?>" class="dropdown-item">Grocery</a>
                        <a href="<?php echo base_url('index.php/Control_shop/cat?valId=milk product');?>" class="dropdown-item">Milk</a>
                        <a href="<?php echo base_url('index.php/Control_shop/cat?valId=Daily need');?>" class="dropdown-item">Daily needs</a>
                        <a href="<?php echo base_url('index.php/Control_shop/cat?valId=medicine');?>" class="dropdown-item">Medicine</a> -->
                        <!-- <a href="#" class="dropdown-item">Clothes</a>
                        <a href="#" class="dropdown-item">Upper</a>
                        <a href="#" class="dropdown-item">Lower</a> -->
                    </div>
                </div>
            </div>
            <!-- <form class="form-inline">
                <div class="input-group">                    
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>

            <i class="fa fa-shopping-cart" style="font-size:20px;">
              <?php if($cardcount) { ?>
                    <span id="count" style="color:red;font-size:16px;"><?php echo $cardcount?></span>
        <?php  } else {?>

          
            <span id="count" style="color:red;font-size:16px;">0</span>

        <?php  } ?>
            </i>
            <a href="<?php echo base_url('index.php/Control_shop/myorder_manage');?>" class="nav-item nav-link active">My Order</a> -->
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
  <div class="row" style="margin-top: 3%;">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
 <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
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

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div>


 </div>
</div> -->


<!-- <div class="container">
  <div class="row"> -->
        <!-- <p style="color:red;">User Info</p> -->
        
       <!-- <div class="mainContent col-md-12" id="mainContent" style="margin-top:2%;margin-bottom:2%;">
         
       </div> -->

<!-- <div class="card">
  <h1><?php echo $user_info['name']; ?></h1>
  <p class="title">Address: "<?php echo $user_info['addresss']; ?>"</p>
  
  <p><button class=" button">Contact:"<?php echo $user_info['mobile']; ?>"</button></p>
</div>




  </div>
</div> -->


<!-- <div class="ship">
  <section><i class="fa fa-shopping-cart" style="font-size:20px;"></i>&nbsp;Review Cart</section>
  <section> <i class="fa fa-home"></i>&nbsp;Shipping info</section>
  <section><i class='fa fa-truck'></i>&nbsp;Shipping</section>
</div> -->

<center><h4 style="padding:3%;letter-spacing: 1px;color: red;">Product Info</h4></center>

<?php 
            
          if($product_info){  ?>

<div id="one" class="table-responsive" style="height:auto;overflow: hidden;width:80%;margin: 1% auto;">
        <table id="myTable" class="table"style="margin-bottom: 3%;">
          <thead>
          <tr>
                <th>Product</th>
                <th>Name</th>
                <!-- <th>Qantity</th> -->
                <th>Weight</th>
                <th>price</th>
                <th>Quantity</th>
                <th>Action</th>
          </tr>
          </thead>
          <tbody>

             <?php foreach ($product_info as $row) { ?>
                 <tr>
                     <td><img src="<?php echo $row['item_image_path']; ?>" style="width: inherit;height:150px;"></td> 
                     <td> <?php echo $row['item_name']; ?></td>
                     <!-- <td> <?php echo $key['available_quantity']; ?></td> -->
                     <td> <?php echo $row['Item_weight']; ?></td>
                     <td> <?php echo $row['item_mrp']; ?></td>
                     <td> <?php echo $row['item_quant']; ?></td>
                     
                     <td><button class="btn2" id= "<?php echo $row['id'];?>" onclick = removeClick(this)>Remove</button></td>
                 </tr>
             <?php } ?>

            </tbody>

            
          </table>
          <hr>
          <span style="letter-spacing: 1px;"><b>Shipping:</b>Price is determined by your shipping info below.</span>
          <hr>
   
         
        
     </div><!--end Student one-->

  <?php
     }
     else{ ?>
         
      <div class="card">
 
  <p><a href="<?php echo base_url('index.php/Control_shop/dashboard');?>"><button>No product Found ,Go to HOME</button></a></p>
</div>


    <?Php }  ?>





<div class="amnt" style="width:80%;margin-left:auto;margin-right:auto;">
 <span style="float: right;padding: 1%;">
<?php
     if($product_info){

      if($price<200){
          $dlvr=30;
        }elseif($price>=200 && $price <=500){
          $dlvr=20;
        }
        elseif($price>=500)
        {
          $dlvr="free";    
        }

        // echo "*Delivery Charge= <b>".$dlvr."₹</b> (included)";
        echo "<br>current Total = <span><b>".$price." ₹</b></span>";
        
        // echo "*Delivery Charge= <b>".$dlvr."₹</b> (included)";
        // echo "<br>Product Amount To Be Pay = <b>".$price." ₹</b>";
        // echo "<br>Total Amount To Be Pay = <b>".$price." ₹</b>";

      }
        ?>
    </span>     
</div>

<div style="clear: right;"></div>
     

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



  <div  style="width:80%;margin-left:auto;margin-right:auto;">
  
   <!-- <a href="<?php echo base_url('index.php/Control_shop/pay_manage');?>" style="text-decoration: none;"> -->
    <a href="<?php echo base_url('index.php/Control_shop/shipping_manage');?>" style="text-decoration: none;">
    <span style="float:right;background-color: white;border:2px solid blue; color:blue;padding:6px;text-align:center;font-weight:bold;letter-spacing:1px;margin:1%;width:20%;">CONTINUE
        </span>
        </a>
  </div>


<div style="clear: right;"></div>

<!-- <div class="container-fluid">
  <div class="row "> -->
    <!-- <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark footer" id="footId" style="display: none;"> -->
      <!-- <div class="footer"> -->
      <!-- <nav class="navbar navbar-expand-sm navbar-dark bg-dark footer" id="footId" >
      <a href=""  class=" navbar-brand">
          <span class="glyphicon glyphicon-home"></span> Cash on delivery*
          
        </a>



      <a href="#" class=" navbar-brand" onclick="orderclick()">
          <span class="glyphicon glyphicon-log-out"></span> Order Now
        </a>


       <a href="<?php echo base_url('index.php/Control_shop/pay_manage');?>" class=" navbar-brand">
          <span class="glyphicon glyphicon-log-out"></span>Payment Continue
        </a>
   
    </nav>
 -->

 <!--    <nav class="navbar navbar-expand-sm navbar-dark footer" id="footId" style="background-color: red;margin:1%;width:20%;">
      

    <span class="float-right">  

      <a href="<?php echo base_url('index.php/Control_shop/pay_manage');?>" class=" navbar-brand">
          <span class="glyphicon glyphicon-log-out"></span>Payment Continue
        </a>

   </span>
   
    </nav> -->


      <!-- </div> -->
  <!-- </div>
</div> -->

<div class="amntNav">
  <section class="amntn">
     <div><span>Cart Summery</span></div>
     <div>
       <span>

        <?php
     if($product_info){

      if($price<200){
          $dlvr=30;
        }elseif($price>=200 && $price <=500){
          $dlvr=20;
        }
        elseif($price>=500)
        {
          $dlvr="free";    
        }

        echo "shipping= <b> ".$dlvr."₹</b>(included)";


      }
        ?></span>
       <span style="margin-left: 3%;">
        <?php
     if($product_info){

        // echo "*Delivery Charge= <b>".$dlvr."₹</b> (included)";
        echo "all items = <b>".$price." ₹</b></span>";

      }
        ?>
          
        </span>
     </div>
  </section>
  <section>
    Current:<span><?php
     if($product_info){

        // echo "*Delivery Charge= <b>".$dlvr."₹</b> (included)";
        echo "<br>Total = <span><b>".$price." ₹</b></span>";

      }
        ?></span>
  </section>
</div>

<?Php }  ?>




<!-- <div class="foothead">

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

</div> -->

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
