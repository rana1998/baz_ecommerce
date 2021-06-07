<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Contact Us</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      <style>
        
.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: white;
  background-color: white;
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 5%;
  width: 100%;
  text-align: left;
  /*margin-top: 30px;*/
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  /*font-size: 36px;*/
  font-size: 20px;
  color: black;
  display: block;
  transition: 0.3s;
  margin-left: 10px;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: -27px;
  right: 13px;
  font-size: 60px;
}
         @media screen and (max-height: 450px) {
         .overlay a {font-size: 20px}
         .overlay .closebtn {
         font-size: 40px;
         top: 15px;
         right: 35px;
         }
         }
         .MainContent{
         display:flex;
         justify-content: space-around;
         box-sizing:border-box;
         display: flex;
         flex-direction: row;
         justify-content: center;
         height:800px;
         overflow: scroll;
         }
         .image {
         //margin:1%;
         width: 100px;
         height:100px;
         overflow: hidden;
         }
         .img_contain {
         float:left;
         /*width:100px;*/
         max-height: 200px;
         max-height:200px;
         /*min-height: 130px;*/
         margin:12px;
         background-color: white;
         color:black;
         box-shadow: 0 8px 12px 0 rgba(0, 0, 0, 0.3);
         text-align: center;
         flex:1;
         /*border:2px solid red;*/
         }
         .img_contain p
         {
         margin:0;
         /*height:50px;*/
         overflow: hidden;
         }
         input[type="checkbox"]
         {
         margin:4px 0 0;
         line-height: normal;
         }
         .image-container
         {
         /*width:10vw;*/
         /*height:10vh;*/
         /*padding: 0.5rem;*/
         margin-right:0px;
         /*float:left;*/
         }
         .image-container>img
         {
         /*height:60%;*/
         }
         .nav
         {
         width:100%;
         display: flex;
         background-color:#FE0000;
         color:white;
         text-align: center;
         }
         .nav>div
         {
         flex: 1;
         }
         #gsearch
         {
         max-width:100px;
         max-height:20px;
         margin-top:10%;
         }
         /* The Modal (background) */
         .modal {
         display: none; /* Hidden by default */
         position: fixed; /* Stay in place */
         z-index: 1; /* Sit on top */
         padding-top: 100px; /* Location of the box */
         left: 0;
         top: 0;
         width: 100%; /* Full width */
         height: 100%; /* Full height */
         overflow: auto; /* Enable scroll if needed */
         background-color: rgb(0,0,0); /* Fallback color */
         background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
         }
         /* Modal Content */
         .modal-content {
         background-color: #fefefe;
         margin: auto;
         padding: 20px;
         border: 1px solid #888;
         width: 80%;
         }
         /* The Close Button */
         .close {
         color: #aaaaaa;
         float: right;
         font-size: 28px;
         font-weight: bold;
         }
         .close:hover,
         .close:focus {
         color: #000;
         text-decoration: none;
         cursor: pointer;
         }
         /* Center the loader */
         #loader {
         position: relative;
         z-index: 1;
         width: 150px;
         height: 150px;
         margin-top:250px;
         margin-left: 35%;
         border: 16px solid #f3f3f3;
         border-radius: 50%;
         border-top: 16px solid #3498db;
         width: 120px;
         height: 120px;
         -webkit-animation: spin 2s linear infinite;
         animation: spin 2s linear infinite;
         }
         @-webkit-keyframes spin {
         0% { -webkit-transform: rotate(0deg); }
         100% { -webkit-transform: rotate(360deg); }
         }
         @keyframes spin {
         0% { transform: rotate(0deg); }
         100% { transform: rotate(360deg); }
         }
         #mainContentDiv
         {
         display: none;
         }
         .submenu {
         list-style: none;
         padding: 0;
         margin: 0;
         }
         .submenu
         {
         background-color:rgba(0,0,0,.2);
         }
      </style>
      <script>
         function openNav() {
           document.getElementById("myNav").style.width = "70%";
         }
         
         function closeNav() {
           document.getElementById("myNav").style.width = "0%";
         }
         
         function srchclick()
         {
           document.getElementById('gsearch').style.display='block';
           document.getElementById('srchId').style.display='none';
         }
         
         var myVar;
         
         function myFunction() {
           myVar = setTimeout(showPage, 3000);
         
           
         }
         
         function showPage() {
         
           document.getElementById("loader").style.display = "none";
           document.getElementById("mainContentDiv").style.display = "block";
           
           // document.getElementsByTagName("body").style.display = "block";
         
         }
         
         window.onload = function()
         {
           myFunction(); 
         }
         
         
      </script>
   </head>
   <body>
      <div id="mainContentDiv">
         <div class="nav">
            <div>
               <a href="<?php echo base_url('index.php/Control_shop/dashboard');?>" style="color:white;">
               <i class='fa fa-arrow-left' style='font-size:24px; margin-top: 10px;'></i>
               </a>
            </div>
            <div>
               <form>
                  <i class="fa fa-search" style="font-size:20px;color:white;margin-top:10%;" id="srchId" onclick="srchclick()"></i>
                  <input type="search" id="gsearch" name="gsearch" style="display: none;">
               </form>
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


         <div class="d-flex justify-content-center">
            <h2>Contact Us</h2>
         </div>
         
         <div class="justify-content-center">
            <table class="table">
            <td>Address:</td>
            <td>C-12, SECTOR-63,NOIDA,Gautam Buddha Nagar, Uttar Pradesh,201301</td>
            <tr></tr>
            <td>Support:</td>
            <td>bazaria@osculant.in2020 M/S BAZARIA FOOD PRODUCTION'S</td>
            <tr></tr>
            <td>Contact:</td>
            <td><i class="fa fa-phone"> +91 8899377720</td>
          </table>
         </div>
      
<!--
<p style="text-align: center;"><i class="fa fa-map-marker"></i> C-12, SECTOR-63,NOIDA,Gautam Buddha Nagar, Uttar Pradesh,201301</p>
            <p style="text-align: center"><i class="fa fa-envelope"></i>Support : bazaria@osculant.in2020 M/S BAZARIA FOOD PRODUCTION'S</p>
            <p style="text-align: center"><i class="fa fa-phone"></i>+91 8899377720</p>-->







        </div>


      <!-- MainContantDiv -->

       <!-- loader -->
         


         <div id="loader"></div>
         <?php include 'common/header/footer.php'; ?>
      
    
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
      
      
      function catclick()
      {
      var attend = document.getElementById("subAttend");
      if(attend.style.display=="none")
      {
        attend.style.display="block";
      }
      else
      {
        attend.style.display="none";
      }
      
      }
   </script>
</html>