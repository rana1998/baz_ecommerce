<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Daily need app</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
      
   <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

      <style>
         <?php
            include'common/css/dashboard.css';
            ?>
      </style>
   </head>
   <!-- <body onload="myFunction()"> -->
   <body>
      <div id="mainContentDiv">
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
            <span id="count1" style="color:black;font-size:16px;"><?php echo $cardcountberorelog ?></span>
            </div>
            <?php  } else { ?>

            <div class="circle" >
            <span id="count1" style="color:black;font-size:16px;">0</span>
          </div>
            <?php  } 

          }

          ?>
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
               
                <?php foreach ($cateInfo->result() as $vard) { 
                      ?>
                 <a href="<?php echo base_url('index.php/Control_shop/cat/'.$vard->id);?>" ><?php echo $vard->category; ?></a> 
                  
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
      <div class="container-fluid">
         <div class="row" style="padding:10px; margin-top: 30px;">
            <div class="col-xs-2 col-md-2 ">
               <img src="<?php echo base_url('assets/images/logo.png'); ?>" style="width: 100px; height: 50px;" alt="Bazaria">
            </div>
            <div class="col-2 col-md-2 "></div>
            <div class="col-8 col-md-8 ">
               <b>
                  <p> Wants to explore Upcoming Deals on Weekends? </p>
               </b>
            </div>
         </div>
      </div>
         <br>
         <!--------------------->
         <div class="featproduct" style="width: 100%;border-left-style: solid; border-left-color: red ; border-right-style: solid ; border-right-color: red; min-height: 145px; border-radius: 20px; margin-right: 5px;" >
            <section>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
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
                  <div class="carousel-item <?php echo $class; ?>">
                     <img class="slider1" style="width:100%;object-fit: contain; margin: 2px; border-left-color: red; border-right-color: red; border-radius: 20px" src="<?php echo $row->file_path;?>" alt="First slide">
                  </div>
                  <?php
                     }
                       }
                     }
                     ?>
               </div>
            </div>
      </section>
         </div>
      <!----------------------->
<!--
        <div class="featslider">
         
            <?php $i = 0;
               if($feat_info->num_rows() > 0)
               {
               
                     foreach($feat_info->result() as $row)
                     {  $i++;
               
                       if($i<5){
                 ?> 

            <section>
            <?php $id=$row->id;
                  $type =$row->category;


             ?>

               <div style="margin: 1% auto;">
                  <a href="<?php echo base_url('index.php/control_shop/product?valId='.$id.'&valType='.$type.'');?>"><img src="<?php echo $row->item_image_path; ?>" style="width:65px;height:65px;object-fit:contain;border: 2px solid coral;border-radius:50%;"></a>
               </div>
               <div>
                  <h1 style="font-size: 14px ;
                     font-weight: 500;
                     color: grey;
                     letter-spacing: 1px;"><?php echo $row->item_name; ?></h1>
               </div>
            </section>
            <?php
               }
                 }
               }
               
               
               ?>
         
         </div>
                  -->


        <h5 style="margin: 5px; margin-top: 20px; margin-bottom: 20px;">Shop By Category</h5>
      
        <div class="row d-flex justify-content-center" style="margin:10px; display: flex">
        
          <?php 
          

            $i=0;
            if($cateInfo-> num_rows() > 7){

            foreach ($cateInfo->result() as $vard) {
              
                if($i < 6)
                {

              ?>
          
          <div class="card" style=" margin: 4px;">

            <a href="<?php echo base_url('index.php/Control_shop/cat/'.$vard->id);?>"><div class="card c1" id="im_<?php echo ++$i; ?>" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
              <div class="d-flex justify-content-center" style="margin-top:8px;" >
                <?php if($vard->category_image){ ?>
                <img src="<?php echo $vard->category_image; ?>" style="width: 70px; height: 50px; ">
                  <?php } ?>
              </div>
             <h6 style="text-align: center;color:black"> <?php echo $vard->category; ?> </h6>
                
              </div>
          </div></a>
          <?php } } } ?>

          </div>
        <hr>




         <!--<div class="container">
            <div class="row">
              <div class="tDiv">
                 <div style="float: left;">
                  <p  style="padding:6px 12px 6px 12px;font-weight: 500">Featured</p>
                 </div>
                  <div style="float: right;">
                  <a style="text-align:right;color:green;padding:6px 12px 6px 12px;text-decoration: none;" href="<?php echo base_url('index.php/Control_shop/feat_manage');?>">view more</a>
                 </div>
               </div>  
                 <div class="mainContent " id="mainContent0" style="width:100%;max-height:210px;margin-top:2%;margin-bottom:2%;overflow-y:scroll;overflow-x:scroll;display: flex;flex-direction: row;"></div>
            </div>
            </div>
            -->
            
         <div class="container">
            <div class="row">
               <div class="tDiv">
                  <div style="float: left;">
                     <p  style="padding:6px 12px 6px 12px;">Grocery</p>
                  </div>
                  <div style="float: right;">
                     <a style="text-align:right;color:green;padding:6px 12px 6px 12px;text-decoration: none;" href="<?php
                       $Grocery = "1";
                      echo base_url('index.php/Control_shop/cat/'.$Grocery);?>   ">view more</a>
                  </div>
               </div>
               <div class="mainContent " id="mainContent" style="width:100%;max-height:270px;margin-top:2%;overflow-x:scroll;display: flex;flex-direction: row;"></div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="tDiv">
                  <div style="float: left;">
                     <p style="padding:6px 12px 6px 12px">Dairy Product</p>
                  </div>
                  <div style="float: right;">
                     <a style="right:0px;color:green;padding:6px 12px 6px 12px;text-decoration: none;" href="<?php $Dairy ="2"; 
                     echo base_url('index.php/Control_shop/cat/'.$Dairy);?>">view more</a>
                  </div>
               </div>
               <div class="mainContent " id="mainContent2" style="width:100%;max-height:270px;margin-top:2%;overflow-x:scroll;display: flex;flex-direction: row;"></div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="tDiv">
                  <div style="float: left;">
                     <p style="padding:6px 12px 6px 12px">Masala (Spices)</p>
                  </div>
                  <div style="float: right;">
                     <a style="right:0px;color:green;padding:6px 12px 6px 12px;text-decoration: none;" href="<?php
                      $MasalaSpices = "24";
                      echo base_url('index.php/Control_shop/cat/'.$MasalaSpices);?>">view more</a>
                  </div>
               </div>
               <div class="mainContent " id="mainContent3" style="width:100%;max-height:270px;margin-top:2%;overflow-x:scroll;display: flex;flex-direction: row;"></div>
            </div>
         </div>

         <!----------cards----------------------------->
         <div class="container" style="margin-top: 20px; ">
           <div class="row d-flex justify-content-center" style="min-height: 150px">
             <div class="" style="display: flex;flex-direction: row;" >
               <a href="<?php $MasalaSpices = "24";
               echo base_url('index.php/Control_shop/cat/'.$MasalaSpices);?>" ><img src="<?php echo base_url("assets/images/banner1.jpg") ?>" style="max-height: 12rem; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); margin-right: 5px ; max-width: 17rem"></a>
            
            
              <a href="<?php 
              $Grocery = "1";
              echo base_url('index.php/Control_shop/cat/'.$Grocery);?>" >  <img src="<?php echo base_url("assets/images/banner2.jpg") ?>" style="max-height: 12rem; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); margin-right: 5px; max-width: 17rem"></a>
            </div>
           </div>
         </div>

         <div class="container" style="">
           <div class="row d-flex justify-content-center" style="min-height: 150px">
             <div class="" style="display: flex;flex-direction: row;" >
              <a href="<?php 
              $PersonalCare ="4";
              echo base_url('index.php/Control_shop/cat/'.$PersonalCare);?>" > <img src="<?php echo base_url("assets/images/banner 3.jpg") ?>" style="max-height: 12rem; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); margin-right: 5px ; max-width: 17rem"></a>
            
            
              <a href="<?php  
               $PersonalCare = "4";
               echo base_url('index.php/Control_shop/cat/'.$PersonalCare);?>" >  <img src="<?php echo base_url("assets/images/banner 4.jpg") ?>" style="max-height: 12rem; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); margin-right: 5px; max-width: 17rem"></a>
            </div>
           </div>
         </div>

         <!--------------------------------------------------->
         <div class="container">
            <div class="row">
               <div class="tDiv">
                  <div style="float: left;">
                     <p style="padding:6px 12px 6px 12px">Drinks</p>
                  </div>
                  <div style="float: right;">
                     <a style="right:0px;color:green;padding:6px 12px 6px 12px;text-decoration: none;" href="<?php $Drinks = "3";
                     echo base_url('index.php/Control_shop/cat/'.$Drinks);?>">view more</a>
                  </div>
               </div>
               <div class="mainContent " id="mainContent4" style="width:100%;max-height:270px;margin-top:2%;overflow-x:scroll;display: flex;flex-direction: row;"></div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="row">
               <!-- <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark footer" id="footId" style="display: none;"> -->
              <!-- <nav class="navbar fixed-bottom navbar-expand-sm " id="footId" style="display: none; ">
                  
                  <a href="<?php echo base_url('index.php/Control_shop/cart_manage');?>" class=" navbar-brand">
                  <button class="btn btn-outline-danger" style="color: white; background-color: coral"> <span class="glyphicon glyphicon-log-out"></span>  Check Out</button>
                  </a>
               </nav>-->
            </div>
         </div>
         <!-- The Modal -->
         <div id="myModal1" class="modal">
            <!-- Modal content -->
            <div class="modal-content1">
               <input type="search" id="search">
               <div class="container">
                  <div class="row">
                     <div>
                     </div>
                     <div class="mainContent " id="mainContentItem" style="width:100%;max-height:200px;margin-top:2%;margin-bottom:2%;"></div>
                  </div>
               </div>
            </div>
         </div>


         <!-- MainContantDiv -->
      </div>

      <!-- loader -->

      
         <div id="loader"></div>
         <!---mobile footer-->
         <?php include 'common/header/footer.php';?>
         <!------------------>

<?php if($user_info) { 

}else{  ?>



<!--modal on load-->
<?php


 if($pin['pincode']){ }else{ ?>
<div id="myModalpincode" class="modal " role="dialog" style="background-color: transparent; ">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content1">
     <!-- <div class="modal-header">
        <button type="button" class="close" onclick="closeclick();">&times;</button>
        <h4 class="modal-title"></h4>
      </div>-->
      <div class="modal-body">
        <h5 style="font-family: Bradley Hand, cursive;">For Better Search Enter your Pincode</h5>
        <br>
        
        <div class="form-group">
        <input class="form-control" type="text" name="pincode" id="pincode" placeholder="Enter Your Pincode" required>
      </div>
      <button type="submit" class="btn btn-link" onclick="closeclick(this);" >ok</button>
      </div>
   
     
    </div>

  </div>
</div>

<?php } } ?>





    
   </body>
   
   <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
   <script type="text/javascript">
      <?php
         include 'common/js/dashboard.js';
         ?>
   </script>
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