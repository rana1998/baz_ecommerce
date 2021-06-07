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
            include'common/css/profile.css';
            ?>
      </style>
      <script type="text/javascript">
         <?php
            include 'common/js/profile.js';
            ?>
      </script>
   </head>
   <body style="background-color: #EEEEEE;">
      <div id="mainContentDiv">
         <div class="nav">
            <div>
               <a href="<?php echo base_url('index.php/Control_shop/dashboard');?>" style="color:white;">
               <i class='fa fa-arrow-left' style='font-size:24px'></i>
               </a>
            </div>
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
               <span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;</span>
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


         <div class="card" style="background-color: #FE0000; width:auto; box-shadow: none; border:none; margin-top: -5px">
            <div class="card-body">
               <br>
               <div class="d-flex justify-content-end">
                  <?php if(!empty($user_info['name'])){ ?>
                  <button type="button" class="btn btn-link" onclick="switchVisible();"><i class="fa fa-edit" style="color:white; font-size: 20px"></i> </button>
               </div>
               <?php }else{ ?>
               <button type="button" class="btn btn-link" >  </button>
            </div>
            <?php  } ?>
            <img id="myImg" src="<?php echo base_url('assets/images/user.png');?>" alt="your image" style="width: 30%;border-radius: 50%; border: 2px solid white; background-color: white;">
            <?php if(empty($user_info['name'])){
               ?>
            <h3 style="color: white; text-align: center;">Login</h3>
            <?php
               }
                 else{
               ?>
            <h3 style="color: white; text-align: center;"><?php echo $user_info['name']; ?></h3>
            <p style="color: white"> <?php echo $user_info['mobile']; ?> </p>
            <?php  } ?>
         </div>
      </div>
      <!--- edit name phone no---->
      <div  id="Div2">
         <?php if(!empty($user_info['name'])){ ?>
         <br>
         <form id="updatenamemobile">
            <div class="form-group" style="margin-left: 20px; ">
               <label style="font-size: 1.5rem; color: gray">Name</label>
               <br>
               <input  type="text" name="name" value="<?php echo $user_info['name']; ?>" >
            </div>
            <div class="form-group" style="margin-left: 20px; ">
               <label style="font-size: 1.5rem; color: gray">Contact No:</label>
               <br>
               <input  type="text" name="mobile" value="<?php echo $user_info['mobile']; ?>"  >
            </div>
            <button type="submit" class="btn btn-danger" style="width: 12rem; margin-left:120px; background-color: #FE0000 ">Submit</button>
         </form>
         <?php } ?>
         <br>
         <br>
         <button class="btn btn-danger" data-toggle="modal" data-target="#changepass" style="background-color: #FE0000; color: white; margin-left: 20px; margin-top: 30px">Change Password</button>
      </div>
      <!----------------------->
      <div id="Div1">
         <br>
         <?php if(empty($user_info['name'])){
            ?>
           <!-- <div class="d-flex justify-content-center">
          <a class="btn btn-link" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            <h3 style="text-align: center"> Login First</h3></a>
         </div> 
         <div class="collapse" id="collapseExample">-->
           <div id="logdiv" style="margin: 20px">
            <form id="loginuser">
                        <div class="form-group">
                           <label>Email</label>
                            <input class="form-control" type="email" placeholder="Enter Email"  pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" name="email" id="logemail"required>
                         </div>
                         
                        <div class="form-group">
                          <label id="yourpass"><b>Password</b></label> 
                          <input class="form-control" type="password" placeholder="Enter Password" name="psw"   id="logpass" required>                             
                        </div>
                        <button type="submit" class=" btn btn-danger">Login <i id = 'ladda2' class="fa fa-spinner fa-spin" style="display: none;"></i></button>


            </form>
            </div>



            <button class="btn btn-link" onclick="switchVisible1();">New User Sign Up</button>

            <div id="signdiv" style="margin: 10px;">

               <form id="signupuser">
               <div class="form-group">
                  <label><b>Name</b></label> 
                  <input class="form-control"  placeholder="Enter Name" name="name" required> 
               </div>
               <div class="form-group">
                  <label><b>Mobile no.</b></label> 
                  <input class="form-control" type="mobile" placeholder="Enter no." pattern="[7-9]{1}[0-9]{9}" name="phone_no" required> 
               </div>  

               <div class="form-group">
                   <label><b>Email</b></label> 
                   <input class="form-control" type="email" placeholder="Enter Email" pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" name="email" required> 
               </div>
               <div class="form-group">
                  <label><b>Address</b></label> 
                  <input class="form-control" placeholder="Enter address" name="address" required> 
               </div>
               <div class="form-group">
                  <label><b>Pin Code</b></label> 
                  <input class="form-control"  placeholder="Enter pincode" name="pincode" required> 
               </div>
               <div class="form-group">
                   <label><b>Security Question 1</b></label> 
                   <select id="secure1" class="form-control">
                     <option>--Select 1---</option>
                     <option>When is your date of birth?</option>
                     <option>What is your memorable date?</option>
                     <option>What is your favourite movie?</option>
                     <option>What primary school did you attend?</option>
                     <option>What is your grandmother's (on your mother's side) maiden name?</option>
                     <option>Who was your childhood hero?</option>
                     <option>What is the last name of your favorite high school teacher?</option>
                     <option>What was your dream job as a child?</option>
                     <option>What is the country of your ultimate dream vacation?</option>
                     <option>What are the last 5 digits of your credit card?</option>
                  
                   </select>

                   <input class="form-control"  placeholder="Answer" name="secureans1" required> 
               </div>
               <div class="form-group">
                  <label><b>Security Question 2</b></label> 
                  <select id="secure2" class="form-control">
                     <option>--Select 2---</option>
                     <option>What is the name of your favorite childhood friend?</option>
                     <option>What is your oldest cousin's first and last name?</option>
                     <option>What is the name of a college you applied to but didn't attend?</option>
                     <option>Where were you when you first heard about 9/11?</option>
                     <option>In what city does your nearest sibling live?</option>
                     <option>In what city and country do you want to retire?</option>
                     <option>What is your preferred musical genre?</option>
                     <option>What is the country of your ultimate dream vacation?</option>
                     <option>Who was your childhood hero?</option>
                     <option>What primary school did you attend?</option>
                   </select>

                   <input class="form-control"  placeholder="Answer" name="secureans2" required> 
                <!-- <input type="text" placeholder="Enter pincode" name="pincode" required>  -->
               </div>
               <div class="form-group">
                  <label><b>Password</b></label> 
                  <input class="form-control" type="password" placeholder="Enter Password" name="psw" id="psw" required onchange=""> 
               </div>

               <div class="form-group">
  
                   <label><b>Repeat Password</b></label> 
                   <input class="form-control" type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
               </div>

               <button type="submit" class="btn btn-danger">Sign Up <i id = 'ladda3' class="fa fa-spinner fa-spin" style="display: none;"></i></button>


            </form>
            </div>




        <!-- </div> -->
         
         <?php }else{
            ?>
         <div class="card" style="width: auto; border-radius: 10px">
            <h4 style="text-align: left; margin-left: 45px: ">MY ORDERS</h4>
            <a href="<?php echo base_url('index.php/Control_shop/myorder_manage');?>" ><p style="text-align: right; margin-right: 30px;">View All orders</p></a>
         </div>
         <br>
        <!-- <div class="card" style="width: auto; border-radius: 10px">
            <h4 style="text-align: left; margin-left: 45px: ">MY ADDRESS</h4>
            <a href="<?php echo base_url('index.php/Control_shop/address') ?>">
               <p style="text-align: right; margin-right: 30px;">View All</p>
            </a>
         </div> -->
         <?php  } ?>
      </div>
      <!-- Modal  change pass word-->
      <div class="modal fade" id="changepass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header" style="padding: 0px">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <form id="updatepass">
                     <div class="form-group">
                        <label>New Password</label>
                        <input class="form-control" type="password" name="password">
                     </div>
                     <button type="submit" class="btn btn-danger">Update</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!----------------- modal end----------------->
      </div> <!-- main contend end-->
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