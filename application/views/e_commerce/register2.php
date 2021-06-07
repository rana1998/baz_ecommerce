<!DOCTYPE html>
<html>
<head>

<style>
    <?php include 'common/css/register2.css'?>
    </style>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>    
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script type="text/javascript">
    <?php
      include 'common/js/register2.js';
    ?>
</script>
 </script>
       <?php include "common/header/header.php";?>
</head>
<body>

   <main>

    <div class="maincontent">


      <section><!--left Content-->
        <div>
           <h1 style="font-size: initial;padding: 3%;font-size: 16px;letter-spacing: 1px;">Categories</h1>
        <ul>

          <?php foreach($cateInfo->result() as $vard){ ?>
                    <li onclick= "window.location ='<?php echo base_url('index.php/Control_shop/cat/'.$vard->id);?>'" class="dropdown-item"><?php echo $vard->category;?></li>

                <?php } ?>
       
        </ul>
          
        </div>
       
       <hr style="border: 1px solid white;">
        
        <div>
          <img src="https://demo.templatetrip.com/WooCommerce/WCM040/WCM05/wp-content/uploads/2017/02/left-banner-1-274x500.jpg">
        </div>

        


        <div>
          <section class="leftContServices">
            <div>
              <section class="servce">
                <div><img src="<?php echo base_url('assets/images/bazaria_deliver.png');?>"></div>
                <div><h1 style="font-size: initial;">Free Shipping</h1>
                <p>Deliver to door</p></div>
              </section>

              <hr>

              <section class="servce">
                <div><img src="<?php echo base_url('assets/images/bazaria_online.png');?>"></div>
                <div> <h1 style="font-size: initial;">24x7 Support</h1>
               <p>in safe hands</p></div>
              </section>

              <hr>

              <section class="servce">
                <div><img src="<?php echo base_url('assets/images/bazaria_piggi.png');?>"></div>
                <div><h1 style="font-size: initial;">Big Saving</h1>
               <p>at lowest price</p></div>
              </section>

             <hr>

              <section class="servce">
                <div><img src="<?php echo base_url('assets/images/bazaria_money.png');?>"></div>
                <div><h1 style="font-size: initial;">
                     Money Back</h1>
               <p>Easy to return</p></div>
              </section>

              <hr>

              <section class="servce">
                <div><img src="<?php echo base_url('assets/images/bazaria_shopping.png');?>"></div>
                <div><h1 style="font-size: initial;">online shopping</h1>
               <p>a huge branding</p></div>
              </section>

              <hr>

              <section class="servce">
                <div><img src="<?php echo base_url('assets/images/bazaria_achive.png');?>"></div>
                <div> <h1 style="font-size: initial;">Award Winner</h1>
               <p>for best services</p></div>
              </section>


            </div>


           


        





          </section>
        </div>



         <div class="topSale">
           <h5 style="font-size: 16px;font-weight: 500;color: grey;letter-spacing: 1px;margin:3% auto;">Top Rated Product</h5>
          <hr>

           <?php $i = 0;

      if($feat_info->num_rows() > 0)
      {

            foreach($feat_info->result() as $row)
            {  $i++;

              if($i<5){
        ?> 
<section id="<?php echo $row->id; ?>" data-pro-type="<?php echo $row->category; ?>"  onclick="proclick(this)">
            <div id="<?php echo $row->id; ?>" data-pro-type="<?php echo $row->category; ?>"  onclick="proclick(this)">
              <img src="<?php echo $row->item_image_path; ?>" style="width:70px;object-fit:contain;border: 1px solid grey;"
              >
            </div>
            <div>
              <h1 style="font-size: initial;"><?php echo $row->item_name; ?></h1>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <p><?php echo $row->item_mrp; ?>&nbsp;Rs.</p>
            </div>
            
          </section>

           <hr>

        <?php
          }
            }
      }
      else
      {
        ?>
     
      <?php
          }
      ?>
          

         
        </div> 



      </section>



      <section><!-- Right Content -->

      <h3 style="
  letter-spacing: 1px !important;
  color: grey !important;">Register</h3>


       <div class="formDiv">
         <form  id="signupfrm">
           
             <!-- <table>
               <tr>
                 <td>First Name<span style="color: red;">*</span></td>
                 <td>Last Name<span style="color: red;">*</span></td>
               </tr>
               <tr>
                 <td><input type="" name=""></td>
                 <td><input type="" name=""></td>
               </tr>
             </table> -->

             <label><b>Full name</b><span style="color: red;">*</span></label>
             <input class="w3-input" type="text" placeholder="Enter Name" name="name" required style="width: 100%;">
             <br>
             <label><b>Phone</b><span style="color: red;">*</span></label>
             <input class="w3-input" type="text" placeholder="Enter no." pattern="[7-9]{1}[0-9]{9}" name="phone_no" style="width: 100%;">
             <br>

              <label><b>Email Address</b><span style="color: red;">*</span></label>
             <input  class="w3-input" type="email" placeholder="Enter Email" pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" name="email" required style="width: 100%;">
             <br>

             <label><b>Password</b><span style="color: red;">*</span></label>
             <input class="w3-input" type="password" placeholder="Enter Password" name="psw" id="psw" required  style="width: 100%;">
             <br>

             <label><b>Repeat Password</b><span style="color: red;">*</span></label> 
             <input class="w3-input" type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required  style="width: 100%;"> 

             <!-- <button class="addbtn">Register</button> -->
             <button type="submit" class="addbtn" id="logId" onclick="document.getElementById('ladda2').style.display='block';">Sign Up<i id = 'ladda2' ></i></button> 
             <!-- <input type="checkbox" onclick="window.location='http://adminbazaria.osculant.in/index.php/vendor/vendordetails'">Register as Vendor -->
             <input type="checkbox" onclick="window.location='<?php echo site_url('vendor/vendordetails');?>'">Register as Vendor
              <br>
              <br>
             <a max-width="20px;" alt="Google sign-in" href="https://accounts.google.com/o/oauth2/auth?response_type=code&amp;access_type=online&amp;client_id=809908597455-i53vliggt5lfbkusa2v4fsni7kfk8t7l.apps.googleusercontent.com&amp;redirect_uri=http%3A%2F%2F361.osculanindex.php%2Flogin&amp;state&amp;scope=email%20profile&amp;approval_prompt=auto"><img src="http://361.osculant.in/assets/images/gmail-sign-in.png" width="250px;" height="40px;" align="Center"></a>

         </form>
       </div>
      
        <form  action="<?php echo site_url('Control_e_commerce/switching');?>">
            <button  id="log_help" hidden="true">login</button>

         </form>

      </section>
    </div>




  


      <!-- footer -->
      <?php include "common/header/footer.php"; ?>


   </main>


   </body>
</html>
