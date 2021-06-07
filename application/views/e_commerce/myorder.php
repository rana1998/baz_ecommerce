<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    <?php include 'common/css/myorder.css'?>
    </style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 

  <script type="text/javascript">
    <?php
      include 'common/js/myorder.js';
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
                <a href="<?php echo base_url('index.php/Control_shop/profile');?>"  class="nav-item nav-link">Profile</a>
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
            </i> -->
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




<div class="container">
  <div class="row">
        <!-- <p style="color:gray;margin:0 auto;font-family: arial;font-weight:600;font-size:20px;letter-spacing: 1px;">My Orders</p><br> -->
        <?php if($product_info){?>
        <p style="color:gray;padding:4%;margin:0 auto;font-family: arial;font-weight:600;font-size:20px;letter-spacing: 1px;">My Orders</p><br>
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
       
       <div class="mainContent col-md-12 ab"  id="mainContent" style="margin-top:2%;margin-bottom:2%;">
        <center><p><b>Order No. :</b><?php echo $co;?></p></center><hr>

         <div style="margin-top:2%;margin-bottom:2%;display: flex;flex-wrap: wrap;justify-content: center;">
          <?php 
          $ttl_amt=array();
          $sts=array();
          $app_oder_id = array();
            foreach($product_info as $row)
            { 
              // print_r($row);
          if($row['app_oder_id'] == $key){
    
        ?>  
          <div class="img_contain" id= "<?php echo $row['id']; ?>" style="display: flex;flex-direction: column;justify-content: center;padding:1%;" >
               <img src="<?php echo $row['item_image_path']; ?>" class="image">
          
               <p><span></span> <?php echo $row['item_name']; ?></p>

               <p><span></span> <?php echo $row['Item_weight']; ?></p>
              
               <p><span>Quantity</span> <?php echo $row['order_quantity']; ?></p>
              
               <p><span></span> <?php echo $row['item_mrp']; ?> &nbsp;Rs.</p>
               
               
          </div>   
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
        
        
        echo  "<div style='display:inline-block;width:100%;'>";
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
          echo "<center><b></b><button style='color:white;background-color:red;border-radius:5px;' id= ".$it_id[0]." onclick = modaldlt(this)>Cancel Order</button><center>";
        }elseif ($status[0]=="Reject") {
            // echo "<center><b>order :</b><p style='color:red;'>Cancel</p><center>";
            // echo "<center><b>Order :</b><button style='color:white;'id= ".$it_id[0]." onclick = modaldlt(this)>Cancel</button><center>";
        }elseif($status[0]=="Accepted") {
            // echo "<center><b>order :</b><p style='color:green;'>".$status[0]."</p><center>";
            // echo "<center><b>Order :</b><button style='color:white;'id= ".$it_id[0]." onclick = modaldlt(this)>Cancel</button><center>";
          }

        echo "<hr>";

        if ($status[0]=="Processing"){
          echo "<center><b>Status :</b><p style='color:blue;'>".$status[0]."⟳</p><center>";
        }elseif ($status[0]=="Reject") {
            echo "<center><b>Status :</b><p style='color:red;'>".$status[0]."❌</p><center>";
        }elseif($status[0]=="Accepted") {
            echo "<center><b>Status :</b><p style='color:green;'>".$status[0]." ✔</p><center>";}
          ?>
            
          
          <!-- <h1><?php if($key==$row['app_oder_id']) {print_r(array_unique($ttl_amt));} ?></h1>    -->
        </div>
          </div><br>
        <?php
      }
  }else{
      ?>
    <div style="margin:0 auto;padding:0;width:80%;height:400px;text-align: center;color: #949A98;">
      <center><h1 style="margin-top:15%;color: #949A98;">No Product Found!</h1></center>
    </div>
  <?php } ?>
      
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
