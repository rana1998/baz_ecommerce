<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    <?php include 'common/css/cart.css'?>
    </style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>  

  <script type="text/javascript">
    <?php
      include 'common/js/cart.js';
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
                        <!-- <a href="<?php echo base_url('index.php/Control_shop/cat?valId=Grocery');?>" class="dropdown-item">Cat</a> -->
                        <?php foreach($cateInfo->result() as $vard){ ?>
            <a href= "<?php echo base_url('index.php/Control_shop/cat?valId='.$vard->category);?>" class="dropdown-item"><?php echo $vard->category;?></a>
           <?php } ?>
                        <!-- <a href="<?php echo base_url('index.php/Control_shop/cat?valId=Grocery');?>" class="dropdown-item">Grocery</a>
                        <a href="<?php echo base_url('index.php/Control_shop/cat?valId=milk product');?>" class="dropdown-item">Milk</a>
                        <a href="<?php echo base_url('index.php/Control_shop/cat?valId=Daily need');?>" class="dropdown-item">Daily needs</a>
                        <a href="<?php echo base_url('index.php/Control_shop/cat?valId=medicine');?>" class="dropdown-item">Medicine</a> -->
                        <!-- <a href="<?php echo base_url('index.php/Control_shop/grocery_manage');?>" class="dropdown-item">Grocery</a>
                        <a href="<?php echo base_url('index.php/Control_shop/milk_manage');?>" class="dropdown-item">Milk</a>
                        <a href="<?php echo base_url('index.php/Control_shop/dailyneeds_manage');?>" class="dropdown-item">Daily needs</a>
                        <a href="<?php echo base_url('index.php/Control_shop/medicine_manage');?>" class="dropdown-item">Medicine</a> -->
                    </div>
                </div>
            </div>
           <!--  <form class="form-inline">
                <div class="input-group">                    
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#myModal"onclick="srchclick()"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form> -->

          <!--   <i class="fa fa-shopping-cart" style="font-size:20px;">
              <?php if($cardcount) { ?>
                    <span id="count" style="color:red;font-size:16px;"><?php echo $cardcount?></span>
        <?php  } else {?>

          
            <span id="count" style="color:red;font-size:16px;">0</span>

        <?php  } ?>
            </i> -->

            <!-- <a href="<?php echo base_url('index.php/Control_shop/myorder_manage');?>" class="nav-item nav-link active">My Order</a> -->
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
                 
                <a href="<?php echo base_url('index.php/login/logout');?>" class="nav-item nav-link">Logout</a>
            </div>
        </div>
    </nav>
</div>



<div class="container">
  <div class="row" style="margin-top: 3%;">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
 <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">

      <?php $i = 0; 
           $count = 0;

           

      if($image_info->num_rows() > 0)
      {

            foreach($image_info->result() as $row)
            {  $i++;
              $count++; 

              if($i<5){

                if($count === 1)
                {
                  $class = 'active';
                }
                else
                {
                  $class = '';
                }
        ?> 
     
        <div class="carousel-item <?php echo $class; ?>" >
              <img class="d-block w-100" style="max-height:300px;"  src="<?php echo $row->file_path;?>" alt="First slide">
        </div>

        

 <?php
          }
            }
      }
        ?>

        
    <!-- <div class="carousel-item active">
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
    </div> -->
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
</div>


<div class="container-fluid">
  <div class="row" style="padding:2%;">
  
<!-- <div class="cat1">   -->
  <div class="mainContent " id="mainContent3" style="width:100%;margin-top:2%;margin-bottom:2%;display: flex;flex-wrap:wrap;justify-content:center;">
<!--Card-->
<?php 
            
          if($product_info){
            // print_r($product_info);
            foreach($product_info as $row)
            { 
            
        ?> 
<!-- <div class="card card-cascade card-ecommerce narrower" style="margin:2%;padding:6px 12px 6px 12px;">

  <div class="view view-cascade overlay">
    <img class="card-img-top" src="<?php echo $row['item_image_path']; ?>" style="height:200px;" alt="">
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <div class="card-body card-body-cascade text-center">
 
    <h4 class="card-title"><strong><a href=""><?php echo $row['item_name']; ?></a></strong></h4>
    
    <h4 class="card-title"><?php echo $row['Item_weight']; ?></h4>

    
    <div class="card-footer" style="padding:0 !important;">
     
       <i class="fa fa-trash-o" style="font-size:25px;color:red" data-item-id="<?php echo $row['id']; ?>" onclick="removeClick(this)"></i>
               

            <span class="quantity buttons_added">
                <input type="button" value="-" class="minus" id="<?php echo $row['id']; ?>" data-cardId-type="<?php echo $row['app_cartItem_id']; ?>" data-price-type="<?php echo $row['item_mrp']; ?>" data-quantity-type="quanId_<?php echo $row['id']; ?>" onclick="minus(this)">
                
                <input type="number" id= 'quanId_<?php echo $row['id']; ?>' step="1" min="1" max="" name="quantity" value="<?php echo $row['item_quant']; ?>" title="Qty" class="input-text qty text" style="width:30%;" pattern="" inputmode="">

                <input type="button" value="+" class="plus" data-cardId-type="<?php echo $row['app_cartItem_id']; ?>"
                id="<?php echo $row['id']; ?>" data-price-type="<?php echo $row['item_mrp']; ?>" data-quantity-type="quanId_<?php echo $row['id']; ?>" onclick="pl(this)">
           </span>

    </div>

  </div>


</div> -->


 <div class="card" id="<?php echo $row['id']; ?>" >
  <img src="<?php echo $row['item_image_path']; ?>" alt="Denim Jeans" style="height:200px;object-fit:contain;">
  <h1 style="font-size: initial;letter-spacing: 1px;"><?php echo $row['item_name']; ?></h1>
  <p class="price"><?php echo $row['item_mrp']; ?>&nbsp;Rs.</p>
  <!-- <p ><button style="font-size:12px;letter-spacing: 1px;">SHOP NOW</button></p> -->

   <i class="fa fa-trash-o" style="font-size:25px;color:red" data-item-id="<?php echo $row['id']; ?>" onclick="removeClick(this)"></i>
               

            <span class="quantity buttons_added">
                <input type="button" value="-" class="minus" id="<?php echo $row['id']; ?>" data-cardId-type="<?php echo $row['app_cartItem_id']; ?>" data-price-type="<?php echo $row['item_mrp']; ?>" data-quantity-type="quanId_<?php echo $row['id']; ?>" onclick="minus(this)">
                
                <input type="number" id= 'quanId_<?php echo $row['id']; ?>' step="1" min="1" max="" name="quantity" value="<?php echo $row['item_quant']; ?>" title="Qty" class="input-text qty text" style="width:30%;" pattern="" inputmode="">

                <input type="button" value="+" class="plus" data-cardId-type="<?php echo $row['app_cartItem_id']; ?>"
                id="<?php echo $row['id']; ?>" data-price-type="<?php echo $row['item_mrp']; ?>" data-quantity-type="quanId_<?php echo $row['id']; ?>" onclick="pl(this)">
           </span>
</div>


 <?php

      } 
     }
     else{ ?>
         
      <div class="card">
 
  <p><button>No product Found</button></p>
</div>


    <?Php }  ?>

       </div>


<?php 
          if($product_info){ ?>
       
       <div>    
            <!-- <?php echo "<br>Total Amount = <b>".$price." ₹</b>";?> -->
            <?php echo "<br>Total Amount = <b><span id='amountId'>".$price."</span> ₹</b>";?>
       </div>
<?php } ?>

     </div>
   </div>
</div>

<?php 
          if($product_info){ ?>

<div class="container-fluid">
  <div class="row">

    <!-- <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark footer" id="footId" style="display: none;"> -->
      <nav class="navbar navbar-expand-sm navbar-dark footer" id="footId" style="background-color: red;margin:1%;">
      

    <span class="float-right">  

      <a href= "<?php echo base_url('index.php/Control_shop/checkout_manage');?>" class=" navbar-brand">
          <span class="glyphicon glyphicon-log-out"></span> Continue
        </a>

</span>
   
    </nav>
  </div>
</div>
<?php }?>


<div class="container">
 

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>

<div class="cat2"> 
        <!--Card-->
<div class="card card-cascade card-ecommerce narrower modalcard">

  <!--Card image-->
  <div class="view view-cascade overlay">
    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(5).jpg"
      alt="">
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>
  <!--/.Card image-->

  <!--Card content-->
  <div class="card-body card-body-cascade text-center">
    <!--Category & Title-->
    <h5>Category</h5>
    <h4 class="card-title"><strong><a href="">Product name</a></strong></h4>

    <!--Description-->
    <p class="card-text">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe
      eveniet ut et voluptates.
    </p>

    <!--Card footer-->
    <div class="card-footer">
      <span class="float-left">49$</span>
      <span class="float-right">
        <a class="" data-placement="top" title="Quick Look" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye mr-3"></i></a>
        <!-- <a href="<?php echo base_url('index.php/Control_product/product');?>" class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fa fa-heart"></i></a> -->
      </span>
      <i class="fa fa-trash-o" style="font-size:25px;color:red"></i>
      <button>Buy</button>
    </div>

  </div>
  <!--/.Card content-->

</div>
<!--/.Card-->
</div>


        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>




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
