<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style>
    <?php include 'common/css/profile.css'?>
    </style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 

  <script type="text/javascript">
    <?php
      include 'common/js/profile.js';
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
  <div class="row">
    <div class="card2" id="cardId">

<center>
  <!-- <img src="<?php echo base_url('assets/images/user.png');?>" alt="John" style="width: 30%;"> -->

  <div id="up_image" height=150 max-width=200 style="border-radius: 50%;">
  <?php  
       if($imag_data['id'] == ""){?>
    <img id="myImg" src="<?php echo base_url('assets/images/user.png');?>" alt="your image" style="width: 15%;max-height:200px;border-radius: 50%;">
      <?php 
      }else{
        $path= $imag_data["file_path"];
          echo  '<img id="myImg" src="'  .$path.'" alt="your image" style="width: 15%;max-height:200px;border-radius: 50%;">';
        }?>
  </div>

  <form method="post" id="upload_form"  enctype="multipart/form-data">
        <input type='file' name="input_file" id="input_file" >
        <input type="submit" value="upload" class="btn btn-success" style="margin:1%auto;padding:0;width:10%;display: block;" name="upload" id="upload">
        <!-- <button id="submit">submit</button> -->
</form>
</center>



<div style="display: flex;flex-direction: row;justify-content: center;">
  <h1 style="width:20%;vertical-align: baseline;"><?php echo $user_info['name']; ?></h1>
  <!-- <input type="button" style="width:80px;height:40px;margin-top:1%;padding:0 !important" value="edit" onclick="document.getElementById('nameId').style.display='block'"> -->
</div>

<div style="display: flex;flex-direction: row;justify-content: center;display: none;" id="nameId">
   <input type="text" value="<?php echo $user_info['name']; ?>" name="name" id="name">
  <!-- <input type="button" class="btn btn-success" style="background-color:green;width:80px;height:40px;" value="update" onclick="nameclick()"> -->
</div>


<div style="display: flex;flex-direction: row;justify-content: center;box-sizing: border-box;text-align: center;vertical-align: baseline;">
  <p class="title" style="padding-top: 2% !important;">Address: "<?php echo $user_info['addresss']; ?>"</p>
  <!-- <input type="button"  style="width:80px;height:40px;margin:1%;" value="edit" onclick="document.getElementById('addId').style.display='block'"> -->
</div>

<div style="display: flex;flex-direction: row;justify-content: center;display: none;" id="addId">
   <input type="text" value="<?php echo $user_info['addresss']; ?>" name="add" id="add">
  <!-- <input type="button" class="btn btn-success" style="background-color:green;width:80px;height:40px;" value="update" onclick="addclick()"> -->
</div>


<div style="display: flex;flex-direction: row;justify-content: center;box-sizing: border-box;text-align: center;">
  <p style="padding-top: 2%;">pincode: "<?php echo $user_info['pincode']; ?>"</p>
  <!-- <input type="button"  style="width:80px;height:40px;margin:1%;" value="edit" onclick="document.getElementById('pinId').style.display='block'"> -->
</div>

<div style="display: flex;flex-direction: row;justify-content: center;display: none;" id="pinId">
   <input type="text" value="<?php echo $user_info['pincode']; ?>" name="pin" id="pin">
  <!-- <input type="button" class="btn btn-success" style="background-color:green;width:80px;height:40px;" value="update" onclick="pinclick()"> -->
</div>


<div style="display: flex;flex-direction: row;justify-content: center;box-sizing: border-box;text-align: center;">
  <p style="padding-top: 2%;">Email: "<?php echo $user_info['email']; ?>"</p>
  <!-- <input type="button" style="width:80px;height:40px;margin:1%;" value="edit" onclick="document.getElementById('emaId').style.display='block'"> -->
</div>

<div style="display: flex;flex-direction: row;justify-content: center;display: none;" id="emaId">
   <input type="text" value="<?php echo $user_info['email']; ?>" name="ema" id="ema">
  <!-- <input type="button" class="btn btn-success" style="background-color:green;width:80px;height:40px;" value="update" onclick="emaclick()"> -->
</div>


<div style="display: flex;flex-direction: row;justify-content: center;box-sizing: border-box;text-align: center;">
  <p style="padding-top: 2%;">Mobile: "<?php echo $user_info['mobile']; ?>"</p>
  <!-- <input type="button"  style="width:80px;height:40px;margin:1%;" value="edit" onclick="document.getElementById('mobId').style.display='block'"> -->
</div>


<div style="display: flex;flex-direction: row;justify-content: center;display: none;" id="mobId">
   <input type="text" value="<?php echo $user_info['mobile']; ?>" name="mob" id="mob">
  <!-- <input type="button" class="btn btn-success" style="background-color:green;width:80px;height:40px;" value="update" onclick="mobclick()"> -->
</div>

  <!-- <a href="#"><i class="fa fa-dribbble"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <a href="#"><i class="fa fa-facebook"></i></a> -->
  <center>
  <p><button onclick="upclick()" style="border-radius: 20px;border:1px solid red;color:red;padding:0.5%;">Update</button></p>
  <p>Change your details mail on osculanttechnologies@gmail.com</p>
</div>

  </div>
  
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
