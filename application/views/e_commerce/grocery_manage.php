<!DOCTYPE html>
<html>
<head>

<style>
    <?php include 'common/css/grocery_manage.css'?>
    </style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>    
</head>
<body>


<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a href="#" class="navbar-brand">Brand</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="<?php echo base_url('index.php/Control_shop/dashboard');?>" class="nav-item nav-link active">Home</a>
                <a href="#" class="nav-item nav-link">Profile</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Category</a>
                    <div class="dropdown-menu">
                        <a href="<?php echo base_url('index.php/Control_shop/grocery_manage');?>" class="dropdown-item">Grocery</a>
                        <a href="<?php echo base_url('index.php/Control_shop/milk_manage');?>" class="dropdown-item">Milk</a>
                        <a href="<?php echo base_url('index.php/Control_shop/dailyneeds_manage');?>" class="dropdown-item">Daily needs</a>
                        <a href="<?php echo base_url('index.php/Control_shop/medicine_manage');?>" class="dropdown-item">Medicine</a>
                    </div>
                </div>
            </div>
            <form class="form-inline">
                <div class="input-group">                    
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>

            <i class="fa fa-shopping-cart" style="font-size:20px;"></i>
            <div class="navbar-nav">
                <!-- <a href="#" class="nav-item nav-link">Sign Up</a> -->

                 
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
</div>






<!-- <div class="page-header" style="padding:1% !important;">
  <div class="pull-left">
  <h5>Grocery</h5>
  </div>
  <div class="pull-right">
  <h5 class="text-right">View More</h5>
  </div>
  <div class="clearfix"></div>
</div>
 -->

<div class="container-fluid">
  <div class="row" style="padding:2%;">
  
<!-- <div class="cat1">   -->


<div class="mainContent " id="mainContent3" style="box-shadow:3px 3px 5px 6px #ccc;width:100%;margin-top:2%;margin-bottom:2%;display: flex;flex-wrap:wrap;justify-content:center;">
<?php $i = 0;

      if($item_info->num_rows() > 0)
      {

            foreach($item_info->result() as $row)
            { 
            
        ?> 

<!--Card-->
<div class="card card-cascade card-ecommerce narrower grow">

  <!--Card image-->
  <div class="view view-cascade overlay">
    <img class="card-img-top" src="<?php echo $row->item_image_path; ?>" alt="" style="height:200px;">
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
        <a href="<?php echo base_url('index.php/Control_product/product');?>"  class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
      </span>
    </div>

  </div>
  <!--/.Card content-->

</div>
<!--/.Card-->
<?php
         
            }
      }
      else
      {
        ?>
     
      <?php
          }
      ?>

</div>





     <!-- </div> -->
   </div>
</div>





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
<div class="card card-cascade card-ecommerce narrower modalcard grow">

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
        <a href="<?php echo base_url('index.php/Control_product/product');?>" class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
      </span>
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

 <!-- footer -->
     <footer  style="background-color: #2c292f">
        <div class="container">
            <div class="row ">
                <div class="col-md-4 text-center text-md-left ">
                    
                    <div class="py-0">
                        <h3 class="my-4 text-white">About<span class="mx-2 font-italic text-warning ">Osculant</span></h3>
 
                        <p class="footer-links font-weight-bold">
                            <a class="text-white" href="#">Home</a>
                            |
                            <a class="text-white" href="#">Blog</a>
                            |
                            <a class="text-white" href="#">About</a>
                            |
                            <a class="text-white" href="#">Contact</a>
                        </p>
                        <p class="text-light py-4 mb-4">&copy;2020 Osculant Technologies Pvt. Ltd.</p>
                    </div>
                </div>
                
                <div class="col-md-4 text-white text-center text-md-left ">
                    <div class="py-2 my-4">
                        <div>
                            <p class="text-white"> <i class="fa fa-map-marker mx-2 "></i>
                                    401-foster Height,
                                   Crossing Republic,201012
                                  Ghaziabaad(Uttar Pradesh)</p>
                        </div>
 
                        <div> 
                            <p><i class="fa fa-phone  mx-2 "></i> +91 8800986439</p>
                        </div>
                        <div>
                            <p><i class="fa fa-envelope  mx-2"></i><a href="mailto:osculanttechnologies@gmail.com">Support : osculanttechnologies@gmail.com +91 8800986439</a></p>
                        </div>  
                    </div>  
                </div>
                
                <div class="col-md-4 text-white my-4 text-center text-md-left ">
                    <span class=" font-weight-bold ">About the Company</span>
          <p class="text-warning my-2" >Mobile applications usually helps users by connecting them to Internet services more commonly accessed on desktop or notebook computers, or help them by making it easier to use the Internet on their portable devices.</p>
                    <div class="py-2">
                        <a href="#"><i class="fab fa-facebook fa-2x text-primary mx-3"></i></a>
                        <a href="#"><i class="fab fa-google-plus fa-2x text-danger mx-3"></i></a>
                        <a href="#"><i class="fab fa-twitter fa-2x text-info mx-3"></i></a>
                        <a href="#"><i class="fab fa-youtube fa-2x text-danger mx-3"></i></a>
                    </div>
                </div>
            </div>  
        </div>
     </footer>

</body>
</html>
