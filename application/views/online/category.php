<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Daily need app</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <style>
         <?php
            include'common/css/category.css';
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
            <span style="font-size:30px;cursor:pointer;color:white" onclick="openNav()">&#9776;</span>
         </div>
      </div>
      <div id="myNav" class="overlay">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
         <div class="overlay-content">
            <img src="<?php echo base_url('assets/images/logo.png') ?>" style="width: 100px; height: 70px; margin-left:40px; margin-bottom: 20px;">
            <a href="<?php echo base_url('index.php/Control_shop/dashboard');?>">Home</a>
            <a onclick="catclick()">Category &nbsp;<i class="fa fa-caret-down " aria-hidden="true"></i></a>
            <ul  class="submenu" id="subAttend" style="display:none; ">
               
                <?php foreach ($cateInfo->result() as $vard) { 
                     ?>
                 <a href="<?php echo base_url('index.php/Control_shop/cat/'.$vard->id);?>" ><?php echo $vard->category;?></a> 
                  
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
         <!-- MainContantDiv -->
      </div>

      <br>
      <div style="margin-top: 40px;">
         <?php          



             $i=0;
            

            foreach ($cateInfo->result() as $vard) {


                              
                ?>
         <a  href="<?php echo base_url('index.php/Control_shop/cat/'.$vard->id);?>">
        <div class="card c1" style="margin: 10px; display: flex;">
            <table>
               
            <td>
         <h3 style="text-align: center; color: white"><?php echo $vard->category; ?></h3>
      </td>
   </table>

        </div>
     </a>

        <?php }  ?> 


     </div>


      
      <!-- loader -->

      
         <div id="loader"></div>
         <!---mobile footer-->
         <?php include 'common/header/footer.php';?>
         <!------------------>







    
   </body>
   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
   <script type="text/javascript">
      <?php
         include 'common/js/category.js';
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